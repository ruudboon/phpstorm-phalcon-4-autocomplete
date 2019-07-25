<?php

namespace Phalcon\Annotations\Adapter;

/**
 * Stores the parsed annotations in memory. This adapter is the suitable
 * development/testing
 */
class Memory extends \Phalcon\Annotations\Adapter\AbstractAdapter
{
    /**
     * @var mixed
     */
    protected $data;


    /**
     * Reads parsed annotations from memory
     *
     * @param string $key
     * @return bool|\Phalcon\Annotations\Reflection
     */
    public function read(string $key) {}

    /**
     * Writes parsed annotations to memory
     *
     * @param string $key
     * @param \Phalcon\Annotations\Reflection $data
     */
    public function write(string $key, \Phalcon\Annotations\Reflection $data) {}

}