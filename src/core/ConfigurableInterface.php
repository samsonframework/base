<?php
/**
 * Created by PhpStorm.
 * User: egorov
 * Date: 10.01.2015
 * Time: 15:18
 */
namespace samsonframework\core;

/**
 * Give object instances ability for custom implementation of its configuration,
 * if class does not implements this interface then generic configure logic will
 * be applied to it.
 * @package samsonos\core
 * @author Vitaly Egorov <egorov@samsonos.com>
 */
interface ConfigurableInterface
{
    /**
     * Perform instance configuration.
     *
     * @param mixed $entityConfiguration Configuration instance for configuration
     * @return boolean False if something went wrong otherwise true
     */
    public function configure($entityConfiguration);
}
