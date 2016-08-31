<?php declare(strict_types = 1);
/**
 * Created by Vitaly Iegorov <egorov@samsonos.com>
 * on 03.04.2015 at 15:43
 */
namespace samsonframework\container;

/**
 * Container builder interface.
 *
 * @package samsonframework\container
 * @author Vitaly Iegorov <egorov@samsonos.com>
 */
interface ContainerBuilderInterface
{
    /**
     * Build container class.
     *
     * @param array $classMetadata Collection of classes value for container
     * @param string|null $containerClass Container class name
     * @param string      $namespace      Name space
     *
     * @return string Generated Container class code
     * @throws \InvalidArgumentException
     */
    public function build(array $classesMetadata, $containerClass = 'Container', $namespace = '');

}
