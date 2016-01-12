<?php
/**
 * Created by Vitaly Iegorov <egorov@samsonos.com>
 * on 03.04.2015 at 15:43
 */
namespace samsonframework\core;

/**
 * Module compressing interface.
 *
 * @package samsonframework\core
 * @author Vitaly Iegorov <egorov@samsonos.com>
 */
interface CompressInterface
{
    /**
     * This method should be used to override generic compression logic.
     *
     * @param mixed $obj Pointer to compressor instance
     * @param array|null $code Collection of already compressed code
     * @return bool False if generic compression needs to be avoided
     */
    public function beforeCompress(&$obj = null, array &$code = null);

    /**
     * This method is called after generic compression logic has finished.
     *
     * @param mixed $obj Pointer to compressor instance
     * @param array|null $code Collection of already compressed code
     * @return bool False if generic compression needs to be avoided
     */
    public function afterCompress(&$obj = null, array &$code = null);
}
