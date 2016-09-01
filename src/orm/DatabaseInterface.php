<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: VITALYIEGOROV
 * Date: 08.12.15
 * Time: 21:10
 */
namespace samsonframework\orm;

/**
 * Database management interface.
 *
 * @author Vitaly Egorov <egorov@samsonos.com>
 */
interface DatabaseInterface
{
    /** Default database driver */
    const DEF_DRIVER = 'mysql';
    /** Default database host */
    const DEF_HOST = 'localhost';
    /** Default database driver */
    const DEF_PORT = 3306;
    /** Default database character set */
    const DEF_CHARSET = 'utf8';

    /**
     * Insert data into table.
     *
     * @param TableMetadata $tableMetadata
     * @param array         $columnValues Data column name => column value collection
     *
     * @return int Database last inserted identifier
     */
    public function insert(TableMetadata $tableMetadata, array $columnValues);

    /**
     * Update data in table.
     *
     * @param TableMetadata $tableMetadata
     * @param array         $columnValues Data column name => column value collection
     * @param Condition     $condition Updated SQL where statement
     *
     * @return mixed Database query result
     */
    public function update(TableMetadata $tableMetadata, array $columnValues, Condition $condition);

    /**
     * High-level database query executor.
     *
     * @param string $sql SQL statement
     * @return mixed Database query result
     */
    public function execute(string $sql);

    /**
     * Retrieve array of records column value from a database.
     *
     * @param string $sql       SQL statement
     * @param int  $columnIndex Column index
     *
     * @return array Collection of records column values
     *
     */
    public function fetchColumn(string $sql, int $columnIndex) : array;

    /**
     * Retrieve array of records from a database.
     *
     * @param string $sql SQL statement
     *
     * @return array Collection of records(arrays)
     */
    public function fetchArray(string $sql) : array;

    /**
     * Retrieve array of class instances from a database.
     *
     * @param string $sql SQL statement
     * @param string $className Class name for instance creation
     *
     * @return array Collection of objects
     */
    public function fetchObjects(string $sql, string $className) : array;

    /**
     * Retrieve array of class instances with joins from a database.
     *
     * @param string $sql SQL statement
     * @param TableMetadata $metadata Table metadata
     * @param TableMetadata[]  $joinedMetadata Collection of joined tables metadata
     *
     * @return array Collection of objects with joins
     */
    public function fetchObjectsWithJoin(string $sql, TableMetadata $metadata, array $joinedMetadata) : array;

    /**
     * Return amount of records from SQL statement.
     *
     * @param string $sql SQL statement
     *
     * @return int Amount of records returned by SQL statement
     */
    public function count(string $sql) : int;

    /**
     * Get current database name.
     *
     * @return string Current database name
     */
    public function database() : string;
}
