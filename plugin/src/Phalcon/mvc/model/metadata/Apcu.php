<?php

namespace Phalcon\Mvc\Model\MetaData;

/**
 * Phalcon\Mvc\Model\MetaData\Apcu
 *
 * Stores model meta-data in the APCu cache. Data will erased if the web server is restarted
 *
 * By default meta-data is stored for 48 hours (172800 seconds)
 *
 * You can query the meta-data by printing apcu_fetch('$PMM$') or apcu_fetch('$PMM$my-app-id')
 *
 * ```php
 * $metaData = new \Phalcon\Mvc\Model\MetaData\Apcu(
 *     [
 *         "prefix"   => "my-app-id",
 *         "lifetime" => 86400,
 *     ]
 * );
 * ```
 */
class Apcu extends \Phalcon\Mvc\Model\MetaData
{

    /**
     * Phalcon\Mvc\Model\MetaData\Apcu constructor
     *
     * @param \Phalcon\Cache\AdapterFactory $factory
     * @param array $options
     */
    public function __construct(\Phalcon\Cache\AdapterFactory $factory, array $options = null) {}

}