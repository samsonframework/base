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
interface ConditionInterface extends \Iterator
{
    /** AND(conjunction) - Condition relation type */
    const CONJUNCTION = 'AND';

    /** OR(disjunction) - Condition relation type */
    const DISJUNCTION = 'OR';

    /**
     * Add condition argument to this condition group
     * @param ArgumentInterface $argument Condition argument to be added
     * @return self Chaining
     */
    public function addArgument(ArgumentInterface $argument);

    /**
     * Add condition group to this condition group
     * @param self $condition Condition group to be added
     * @return self Chaining
     */
    public function addCondition(self $condition);

    /**
     * Add condition group argument function.
     *
     * @param string $fieldName Entity field name
     * @param mixed $value Entity field value
     * @param string $relation Relation between argument and its value
     * @return self Chaining
     */
    public function add($fieldName, $value, $relation = ArgumentInterface::EQUAL);

    /**
     * @return int Amount of condition group arguments
     */
    public function size();
}
