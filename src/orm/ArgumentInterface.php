<?php
/**
 * Created by PhpStorm.
 * User: VITALYIEGOROV
 * Date: 29.11.15
 * Time: 19:19
 */
namespace samsonframework\orm;

/**
 * Database query condition group argument interface
 * @package samsonframework\orm
 * @author Vitaly Iegorov <egorov@samsonos.com>
 */
interface ArgumentInterface
{
    const EQUAL = '=';
    const NOT_EQUAL = '!=';
    const GREATER = '>';
    const LOWER = '<';
    const GREATER_EQ = '>=';
    const LOWER_EQ = '<=';
    const LIKE = ' LIKE ';
    const NOTNULL = 'IS NOT NULL';
    const ISNULL = 'IS NULL';
    const OWN = '!!!';
}
