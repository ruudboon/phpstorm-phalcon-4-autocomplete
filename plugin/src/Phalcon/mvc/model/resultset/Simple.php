<?php

namespace Phalcon\Mvc\Model\Resultset;

/**
 * Phalcon\Mvc\Model\Resultset\Simple
 *
 * Simple resultsets only contains a complete objects
 * This class builds every complete object as it is required
 */
class Simple extends \Phalcon\Mvc\Model\Resultset
{

    protected $columnMap;


    protected $model;

    /**
     * @var bool
     */
    protected $keepSnapshots = false;


    /**
     * Phalcon\Mvc\Model\Resultset\Simple constructor
     *
     * @param array $columnMap
     * @param \Phalcon\Mvc\ModelInterface|Phalcon\Mvc\Model\Row $model
     * @param mixed $result
     * @param \Phalcon\Cache\Adapter\AdapterInterface $cache
     * @param bool $keepSnapshots
     */
    public function __construct($columnMap, $model, $result, \Phalcon\Cache\Adapter\AdapterInterface $cache = null, bool $keepSnapshots = null) {}

    /**
     * Returns current row in the resultset
     *
     * @return null|ModelInterface
     */
    final public function current(): ?ModelInterface {}

    /**
     * Returns a complete resultset as an array, if the resultset has a big
     * number of rows it could consume more memory than currently it does.
     * Export the resultset to an array couldn't be faster with a large number
     * of records
     *
     * @param bool $renameColumns
     * @return array
     */
    public function toArray(bool $renameColumns = true): array {}

    /**
     * Serializing a resultset will dump all related rows into a big array
     *
     * @return string
     */
    public function serialize(): string {}

    /**
     * Unserializing a resultset will allow to only works on the rows present in
     * the saved state
     *
     * @param mixed $data
     */
    public function unserialize($data) {}

}