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

/**
 *
 * @link http://redis.io/commands/decrby
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
class StringDecrementBy extends Command {
    /**
     * @ERROR!!!
     */
    public function getId() {
        return 'DECRBY';
    }
}
