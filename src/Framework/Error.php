<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPUnit\Framework;

/**
 * Wrapper for PHP errors.
 *
 * @since Class available since Release 2.2.0
 */
class Error extends Exception
{
    /**
     * Constructor.
     *
     * @param string     $message
     * @param int        $code
     * @param string     $file
     * @param int        $line
     * @param \Exception $previous
     */
    public function __construct($message, $code, $file, $line, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->file = $file;
        $this->line = $line;
    }
}
