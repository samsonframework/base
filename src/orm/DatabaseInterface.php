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
     * Connect to a database using driver with parameters
     * @param string $database Database name
     * @param string $username Database username
     * @param string $password Database password
     * @param string $host Database host(localhost by default)
     * @param int $port Database port(3306 by default)
     * @param string $driver Database driver for interaction(MySQL by default)
     * @param string $charset Database character set
     * @return bool True if connection to database was successful
     */
    public function connect(
        $database,
        $username,
        $password,
        $host = self::DEF_HOST,
        $port = self::DEF_PORT,
        $driver = self::DEF_DRIVER,
        $charset = self::DEF_CHARSET
    );

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
     * @param string $sql SQL statement
     * @param int    $columnIndex Fetching column index number
     *
     * @return array Collection of arrays or objects
     */
    public function fetchColumns(string $sql, int $columnIndex) : array;

    /**
     * Retrieve array of records from a database.
     *
     * @param string $sql SQL statement
     * @return array Collection of arrays or objects
     */
    public function fetchArray(string $sql) : array;

    /**
     * Retrieve array of records from a database.
     *
     * @param string $sql SQL statement
     * @return array Collection of arrays or objects
     */
    public function fetchObjects(string $sql, string $className) : array;
}
