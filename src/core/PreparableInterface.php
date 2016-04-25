<?php
/**
 * Created by Vitaly Iegorov <egorov@samsonos.com>.
 * on 25.04.16 at 11:58
 */
namespace samsonframework\core;

/**
 * Interface for preparing package/module for loading.
 *
 * @author Vitaly Iegorov <egorov@samsonos.com>
 * @package samsonframework\core
 */
interface PreparableInterface
{
    /**
     * Prepare package/module for loading.
     *
     * @param array $params Collection of parameters needed for package/module preparation
     *
     * @return bool Preparation stage status
     */
    public function prepare(array $params = array());
}
