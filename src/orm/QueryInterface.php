<?php
/**
 * Created by Maxim Omelchenko <omelchenko@samsonos.com>
 * on 03.04.2015 at 14:25
 */
namespace samsonframework\orm;

/**
 * Base database query building interface
 */
interface QueryInterface
{
    /**
     * Add condition to current query.
     *
     * @param string $fieldName Entity field name
     * @param string $fieldValue Value
     * @param string $relation Relation between field name and its value
     * @return self Chaining
     */
    public function cond($fieldName, $fieldValue = null, $relation = '=');

    /**
     * Execute current query and receive collection of field values for RecordInterface collection
     * received from database.
     *
     * @param string $columnName Database entity field name
     * @param null|RecordInterface[] $return If variable is passed resulting collection would be
     *                                      stored in this variable.
     * @return bool|RecordInterface If method is called with $return parameter then then bool
     *                                  with query result status would be returned, otherwise
     *                                  query result collection would be returned.
     */
    public function fields($columnName, &$return = null);

    /**
     * Execute current query and receive collection of RecordInterface objects from database.
     *
     * @param null|RecordInterface[] $return If variable is passed resulting collection would be
     *                                      stored in this variable.
     * @return bool|RecordInterface If method is called with $return parameter then then bool
     *                                  with query result status would be returned, otherwise
     *                                  query result collection would be returned.
     */
    public function exec(&$return = null);

    /**
     * Execute current query and receive RecordInterface object from database.
     *
     * @param null|RecordInterface $return If variable is passed resulting RecordInterface would be
     *                                      stored in this variable.
     * @return bool|RecordInterface If method is called with $return parameter then then bool
     *                                  with query result status would be returned, otherwise
     *                                  query result RecordInterface would be returned.
     */
    public function first(&$return = null);
}
