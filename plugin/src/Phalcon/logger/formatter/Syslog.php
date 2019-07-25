<?php

namespace Phalcon\Logger\Formatter;

/**
 * Phalcon\Logger\Formatter\Syslog
 *
 * Prepares a message to be used in a Syslog backend
 */
class Syslog extends \Phalcon\Logger\Formatter\AbstractFormatter
{

    /**
     * Applies a format to a message before sent it to the internal log
     *
     * @param \Phalcon\Logger\Item $item
     * @return array
     */
    public function format(\Phalcon\Logger\Item $item): array {}

}