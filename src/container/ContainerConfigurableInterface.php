<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: root
 * Date: 02.08.16
 * Time: 0:46.
 */
namespace samsonframework\container;

use samsonframework\container\definition\builder\DefinitionBuilder;

/**
 * Container configurable interface.
 *
 * @author Vitaly Egorov <egorov@samsonos.com>
 */
interface ContainerConfigurableInterface
{
    public function configure(DefinitionBuilder $builder);
}
