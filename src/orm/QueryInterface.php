<?php declare(strict_types=1);
/**
 * Created by Vitaly Iegorov <egorov@samsonos.com>
 * on 29.08.2016 at 14:25
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
     * @param string|TableMetadata $metadata Entity metadata
     * @return QueryInterface Chaining
     */
    public function entity($metadata) : QueryInterface;

    /**
     * Add condition to current query.
     *
     * @param string $fieldName Entity field name
     * @param mixed $fieldValue Value
     * @param string $relation Relation between field name and its value
     *
     * @return QueryInterface Chaining
     */
    public function where(
        string $fieldName,
        $fieldValue = null,
        string $relation = ArgumentInterface::EQUAL
    ) : QueryInterface;

    /**
     * Add query condition as prepared Condition instance.
     *
     * @param ConditionInterface $condition Condition to be added
     *
     * @return QueryInterface Chaining
     */
    public function whereCondition(ConditionInterface $condition) : QueryInterface;

    /**
     * Add column for selection from database.
     *
     * @param string $tableName Table name
     * @param string $fieldName Table field name
     *
     * @return QueryInterface
     */
    public function select(string $tableName, string $fieldName) : QueryInterface;

    /**
     * Join entity to query.
     *
     * @param string $entityName Entity identifier
     *
     * @return QueryInterface Chaining
     */
    public function join(string $entityName) : QueryInterface;

    /**
     * Add query result grouping.
     *
     * @param string $tableName Table name
     * @param string $fieldName Table field name
     *
     * @return QueryInterface Chaining
     */
    public function groupBy(string $tableName, string $fieldName) : QueryInterface;

    /**
     * Add query result quantity limitation.
     *
     * @param null|int $quantity Amount of RecordInterface object to return
     * @param int      $offset   Resulting offset
     *
     * @return QueryInterface Chaining
     */
    public function limit(int $quantity, int $offset = 0) : QueryInterface;

    /**
     * Add query result sorting.
     *
     * @param string $tableName Table name
     * @param string $fieldName Table field name
     * @param string $order Sorting order
     *
     * @return QueryInterface Chaining
     */
    public function orderBy(string $tableName, string $fieldName, string $order = 'ASC') : QueryInterface;

    /**
     * Execute current query and receive collection of field values for RecordInterface collection
     * received from database.
     *
     * @param string $fieldName Database entity field name
     *
     * @return array Collection of record column values
     * @throws \InvalidArgumentException If table does not have field
     */
    public function fields(string $fieldName) : array;

    /**
     * Execute current query and receive collection of RecordInterface objects from database.
     *
     * @return RecordInterface[] Database entities collection
     */
    public function find() : array;

    /**
     * Execute current query and receive RecordInterface object from database.
     *
     * @return null|RecordInterface Database entity
     */
    public function first();

    /**
     * Execute current query and receive amount of resulting rows.
     *
     * @return int Query rows count would be returned.
     */
    public function count() : int;

    /**
     * Set query condition that field should be null.
     *
     * @param string $fieldName Database entity field name
     *
     * @return QueryInterface
     */
    public function isNull(string $fieldName) : QueryInterface;

    /**
     * Set query condition that field should NOT be null.
     *
     * @param string $fieldName Database entity field name
     *
     * @return QueryInterface
     */
    public function notNull(string $fieldName) : QueryInterface;

    /**
     * Set query condition that field value should NOT be empty.
     *
     * @param string $fieldName Database entity field name
     *
     * @return QueryInterface
     */
    public function notEmpty(string $fieldName) : QueryInterface;

    /**
     * Set query condition that field should be LIKE value.
     *
     * @param string $fieldName Database entity field name
     * @param string $value Field value
     *
     * @return QueryInterface
     */
    public function like(string $fieldName, string $value = '') : QueryInterface;

    /**
     * Set query condition that primary field should be equal value.
     *
     * @param mixed $value Field value
     *
     * @return QueryInterface
     */
    public function primary($value) : QueryInterface;
}
