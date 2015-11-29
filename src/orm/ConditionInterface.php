<?php
/**
 * Created by PhpStorm.
 * User: VITALYIEGOROV
 * Date: 29.11.15
 * Time: 19:19
 */
namespace samsonframework\orm;

/**
 * Database query condition group interface
 * @package samsonframework\orm
 * @author Vitaly Iegorov <egorov@samsonos.com>
 */
interface ConditionInterface
{
    /**
     * Add condition argument to this condition group
     * @param ArgumentInterface $argument Condition argument to be added
     */
    public function addArgument(ArgumentInterface $argument);

    /**
     * Add condition group to this condition group
     * @param self $condition Condition group to be added
     */
    public function addCondition(self $condition);

    /**
     * Add condition group argument function.
     *
     * @param string $fieldName Entity field name
     * @param string $value Entity field value
     * @param string $relation Relation between argument and its value
     * @return self Chaining
     */
    public function add($fieldName, $value = '', $relation = ArgumentInterface::EQUAL);
}
