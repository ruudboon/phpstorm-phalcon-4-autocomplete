<?php

namespace Phalcon\Db;

/**
 * Interface for Phalcon\Db\Reference
 */
interface ReferenceInterface
{

    /**
     * Gets local columns which reference is based
     *
     * @return array
     */
    public function getColumns(): array;

    /**
     * Gets the index name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Gets the referenced on delete
     *
     * @return string
     */
    public function getOnDelete(): string;

    /**
     * Gets the referenced on update
     *
     * @return string
     */
    public function getOnUpdate(): string;

    /**
     * Gets referenced columns
     *
     * @return array
     */
    public function getReferencedColumns(): array;

    /**
     * Gets the schema where referenced table is
     *
     * @return string
     */
    public function getReferencedSchema(): string;

    /**
     * Gets the referenced table
     *
     * @return string
     */
    public function getReferencedTable(): string;

    /**
     * Gets the schema where referenced table is
     *
     * @return string
     */
    public function getSchemaName(): string;
}
