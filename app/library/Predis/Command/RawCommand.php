<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Predis\Command;

use InvalidArgumentException;

/**
 * Class for generic "anonymous" Redis commands.
 *
 * This command class does not filter input arguments or parse responses, but
 * can be used to leverage the standard Predis API to execute any command simply
 * by providing the needed arguments following the command signature as defined
 * by Redis in its documentation.
 *
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
class RawCommand implements CommandInterface {
    private $slot;
    private $commandID;
    private $arguments;
    
    /**
     *
     * @param array $arguments
     *            Command ID and its arguments.
     *            
     * @throws \InvalidArgumentException
     */
    public function __construct(array $arguments) {
        if (! $arguments) {
            throw new InvalidArgumentException ( 'The arguments array must contain at least the command ID.' );
        }
        
        $this->commandID = strtoupper ( array_shift ( $arguments ) );
        $this->arguments = $arguments;
    }
    
    /**
     * Creates a new raw command using a variadic method.
     *
     * @param string $commandID
     *            Redis command ID.
     * @param
     *            string ... Arguments list for the command.
     *            
     * @return CommandInterface
     */
    public static function create($commandID /* [ $arg, ... */)
    {
        $arguments = func_get_args ();
        $command = new self ( $arguments );
        
        return $command;
    }
    
    /**
     *
     * @ERROR!!!
     *
     */
    public function getId() {
        return $this->commandID;
    }
    
    /**
     *
     * @ERROR!!!
     *
     */
    public function setArguments(array $arguments) {
        $this->arguments = $arguments;
        unset ( $this->slot );
    }
    
    /**
     *
     * @ERROR!!!
     *
     */
    public function setRawArguments(array $arguments) {
        $this->setArguments ( $arguments );
    }
    
    /**
     *
     * @ERROR!!!
     *
     */
    public function getArguments() {
        return $this->arguments;
    }
    
    /**
     *
     * @ERROR!!!
     *
     */
    public function getArgument($index) {
        if (isset ( $this->arguments [$index] )) {
            return $this->arguments [$index];
        }
    }
    
    /**
     *
     * @ERROR!!!
     *
     */
    public function setSlot($slot) {
        $this->slot = $slot;
    }
    
    /**
     *
     * @ERROR!!!
     *
     */
    public function getSlot() {
        if (isset ( $this->slot )) {
            return $this->slot;
        }
    }
    
    /**
     *
     * @ERROR!!!
     *
     */
    public function parseResponse($data) {
        return $data;
    }
}
