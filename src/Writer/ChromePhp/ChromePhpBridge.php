<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Log
 */

namespace Zend\Log\Writer\ChromePhp;

use ChromePhp;

/**
 * @category   Zend
 * @package    Zend_Log
 * @subpackage Writer
 */
class ChromePhpBridge implements ChromePhpInterface
{
    /**
     * Log an error message
     *
     * @param string $line
     */
    public function error($line)
    {
        ChromePhp::error($line);
    }

    /**
     * Log a warning
     *
     * @param string $line
     */
    public function warn($line)
    {
        ChromePhp::warn($line);
    }

    /**
     * Log informational message
     *
     * @param string $line
     */
    public function info($line)
    {
        ChromePhp::info($line);
    }

    /**
     * Log a trace
     *
     * @param string $line
     */
    public function trace($line)
    {
        ChromePhp::error($line);
    }

    /**
     * Log a message
     *
     * @param string $line
     */
    public function log($line)
    {
        ChromePhp::log($line);
    }
}
