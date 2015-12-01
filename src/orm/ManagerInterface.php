<?php
/**
 * Created by Maxim Omelchenko <omelchenko@samsonos.com>
 * on 03.04.2015 at 14:25
 */
namespace samsonframework\orm;

/**
 * Database entity manager interface
 * @author Vitaly Iegorov <egorov@samsonos.com>
 */
interface ManagerInterface
{
//    /**
//     * Get query for database entity to work with.
//     *
//     * @return QueryInterface Query for building database request
//     */
//    public function query();

    /**
     * Get new entity instance.
     *
     * @return RecordInterface New database manager entity instance
     */
    public function instance();

    /**
     * Create new database entity record.
     * @param RecordInterface $entity Entity record for creation
     * @return RecordInterface Created database entity record with new primary identifier
     */
    public function create(RecordInterface $entity);

    /**
     * Read database entity records from QueryInterface.
     *
     * @param QueryInterface $query For retrieving records
     * @return RecordInterface[] Collection of read database entity records
     */
    public function read(QueryInterface $query);

    /**
     * Update database entity record.
     * @param RecordInterface $entity Entity record for updating
     */
    public function update(RecordInterface $entity);

    /**
     * @param RecordInterface $entity Entity record for removing
     */
    public function delete(RecordInterface $entity);
}
