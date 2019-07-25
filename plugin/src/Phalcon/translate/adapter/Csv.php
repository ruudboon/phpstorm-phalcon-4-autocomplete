<?php

namespace Phalcon\Translate\Adapter;

/**
 * Phalcon\Translate\Adapter\Csv
 *
 * Allows to define translation lists using CSV file
 */
class Csv extends \Phalcon\Translate\Adapter\AbstractAdapter implements \ArrayAccess
{
    /**
     * @var array
     */
    protected $translate = array();


    /**
     * Phalcon\Translate\Adapter\Csv constructor
     *
     * @param \Phalcon\Translate\InterpolatorFactory $interpolator
     * @param array $options
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options) {}

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     * @return bool
     */
    public function exists(string $index): bool {}

    /**
     * Returns the translation related to the given key
     *
     * @param string $index
     * @param mixed $placeholders
     * @return string
     */
    public function query(string $index, $placeholders = null): string {}

    /**
     * Load translates from file
     *
     * @param string $file
     * @param int $length
     * @param string $delimiter
     * @param string $enclosure
     */
    private function load(string $file, int $length, string $delimiter, string $enclosure) {}

}