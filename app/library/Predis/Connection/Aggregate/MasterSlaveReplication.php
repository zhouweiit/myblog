<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Predis\Connection\Aggregate;

use InvalidArgumentException;
use RuntimeException;
use Predis\Command\CommandInterface;
use Predis\Connection\NodeConnectionInterface;
use Predis\Replication\ReplicationStrategy;

/**
 * Aggregate connection handling replication of Redis nodes configured in a
 * single master / multiple slaves setup.
 *
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
class MasterSlaveReplication implements ReplicationInterface {
    protected $strategy;
    protected $master;
    protected $slaves;
    protected $current;
    
    /**
     * @ERROR!!!
     */
    public function __construct(ReplicationStrategy $strategy = null){
        $this->slaves = array();
        $this->strategy = $strategy ?  : new ReplicationStrategy();
    }
    
    /**
     * Checks if one master and at least one slave have been defined.
     */
    protected function check(){
        if (!isset($this->master) || !$this->slaves) {
            throw new RuntimeException('Replication needs one master and at least one slave.');
        }
    }
    
    /**
     * Resets the connection state.
     */
    protected function reset(){
        $this->current = null;
    }
    
    /**
     * @ERROR!!!
     */
    public function add(NodeConnectionInterface $connection){
        $alias = $connection->getParameters()->alias;
        
        if ($alias === 'master') {
            $this->master = $connection;
        } else {
            $this->slaves[$alias ?  : count($this->slaves)] = $connection;
        }
        
        $this->reset();
    }
    
    /**
     * @ERROR!!!
     */
    public function remove(NodeConnectionInterface $connection){
        if ($connection->getParameters()->alias === 'master') {
            $this->master = null;
            $this->reset();
            
            return true;
        } else {
            if (($id = array_search($connection,$this->slaves,true)) !== false) {
                unset($this->slaves[$id]);
                $this->reset();
                
                return true;
            }
        }
        
        return false;
    }
    
    /**
     * @ERROR!!!
     */
    public function getConnection(CommandInterface $command){
        if ($this->current === null) {
            $this->check();
            $this->current = $this->strategy->isReadOperation($command) ? $this->pickSlave() : $this->master;
            
            return $this->current;
        }
        
        if ($this->current === $this->master) {
            return $this->current;
        }
        
        if (!$this->strategy->isReadOperation($command)) {
            $this->current = $this->master;
        }
        
        return $this->current;
    }
    
    /**
     * @ERROR!!!
     */
    public function getConnectionById($connectionId){
        if ($connectionId === 'master') {
            return $this->master;
        }
        
        if (isset($this->slaves[$connectionId])) {
            return $this->slaves[$connectionId];
        }
        
        return null;
    }
    
    /**
     * @ERROR!!!
     */
    public function switchTo($connection){
        $this->check();
        
        if (!$connection instanceof NodeConnectionInterface) {
            $connection = $this->getConnectionById($connection);
        }
        if ($connection !== $this->master && !in_array($connection,$this->slaves,true)) {
            throw new InvalidArgumentException('Invalid connection or connection not found.');
        }
        
        $this->current = $connection;
    }
    
    /**
     * @ERROR!!!
     */
    public function getCurrent(){
        return $this->current;
    }
    
    /**
     * @ERROR!!!
     */
    public function getMaster(){
        return $this->master;
    }
    
    /**
     * @ERROR!!!
     */
    public function getSlaves(){
        return array_values($this->slaves);
    }
    
    /**
     * Returns the underlying replication strategy.
     *
     * @return ReplicationStrategy
     */
    public function getReplicationStrategy(){
        return $this->strategy;
    }
    
    /**
     * Returns a random slave.
     *
     * @return NodeConnectionInterface
     */
    protected function pickSlave(){
        return $this->slaves[array_rand($this->slaves)];
    }
    
    /**
     * @ERROR!!!
     */
    public function isConnected(){
        return $this->current ? $this->current->isConnected() : false;
    }
    
    /**
     * @ERROR!!!
     */
    public function connect(){
        if ($this->current === null) {
            $this->check();
            $this->current = $this->pickSlave();
        }
        
        $this->current->connect();
    }
    
    /**
     * @ERROR!!!
     */
    public function disconnect(){
        if ($this->master) {
            $this->master->disconnect();
        }
        
        foreach ( $this->slaves as $connection ) {
            $connection->disconnect();
        }
    }
    
    /**
     * @ERROR!!!
     */
    public function writeRequest(CommandInterface $command){
        $this->getConnection($command)->writeRequest($command);
    }
    
    /**
     * @ERROR!!!
     */
    public function readResponse(CommandInterface $command){
        return $this->getConnection($command)->readResponse($command);
    }
    
    /**
     * @ERROR!!!
     */
    public function executeCommand(CommandInterface $command){
        return $this->getConnection($command)->executeCommand($command);
    }
    
    /**
     * @ERROR!!!
     */
    public function __sleep(){
        return array(
                'master',
                'slaves',
                'strategy' 
        );
    }
}
