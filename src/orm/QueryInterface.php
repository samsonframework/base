<?php
/**
 * Created by Maxim Omelchenko <omelchenko@samsonos.com>
 * on 03.04.2015 at 14:25
 */
namespace samsonframework\orm;

/**
 * Database query building interface
 * @author Vitaly Iegorov <egorov@samsonos.com>
 */
interface QueryInterface
{
    /**
     * Set query entity to work with.
     *
     * @param string $entity Entity identifier
     * @return self Chaining
     */
    public function entity($entity);

    /**
     * Flush query and return to beginning state. Entity if was set stays unchanged all
     * other internal data are cleared.
     *
     * @return self Chaining
     */
    public function flush();

    /**
     * Add condition to current query.
     *
     * @param string $fieldName Entity field name
     * @param mixed $fieldValue Value
     * @param string $relation Relation between field name and its value
     * @return self Chaining
     */
    public function where($fieldName, $fieldValue = null, $relation = '=');

    /**
     * Add query condition as prepared Condition instance.
     *
     * @param ConditionInterface $condition Condition to be added
     * @return self Chaining
     */
    public function whereCondition(ConditionInterface $condition);

    /**
     * Join entity to query.
     *
     * @param string $entityName Entity identifier
     * @return self Chaining
     */
    public function join($entityName);

    /**
     * Add query result grouping.
     *
     * @param string $fieldName Entity field identifier for grouping
     * @return self Chaining
     */
    public function groupBy($fieldName);

    /**
     * Add query result quantity limitation.
     *
     * @param int $offset Resulting offset
     * @param null|int $quantity Amount of RecordInterface object to return
     * @return self Chaining
     */
    public function limit($offset, $quantity = null);

    /**
     * Add query result sorting.
     *
     * @param string $fieldName Entity field identifier for sorting.
     *
     * @param string $order Sorting order
     * @return self Chaining
     */
    public function orderBy($fieldName, $order = 'ASC');

    /**
     * Execute current query and receive collection of field values for RecordInterface collection
     * received from database.
     *
     * @param string $columnName Database entity field name
     * @param null|RecordInterface[] $return If variable is passed resulting collection would be
     *                                      stored in this variable.
     * @return array If method is called with $return parameter then then bool
     *                                  with query result status would be returned, otherwise
     *                                  query result collection would be returned.
     */
    public function fields($columnName, &$return = null);

    /**
     * Execute current query and receive collection of RecordInterface objects from database.
     *
     * @param null|RecordInterface[] $return If variable is passed resulting collection would be
     *                                      stored in this variable.
     * @return bool|RecordInterface[] If method is called with $return parameter then then bool
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

    /**
     * Execute current query and receive amount of resulting rows.
     *
     * @param null|RecordInterface $return If variable is passed resulting amount of rows would be
     *                                      stored in this variable.
     * @return bool|RecordInterface If method is called with $return parameter then then bool
     *                                  with query result status would be returned, otherwise
     *                                  query rows count would be returned.
     */
    public function count(&$return = null);
}
