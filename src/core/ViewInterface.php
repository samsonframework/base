<?php
/**
 * Created by Vitaly Iegorov <egorov@samsonos.com>
 * on 03.04.2015 at 15:43
 */
namespace samsonframework\core;

/**
 * View rendering interface.
 *
 * @package samsonframework\core
 * @author Vitaly Iegorov <egorov@samsonos.com>
 */
interface ViewInterface
{
    /**
     * Set view variable.
     *
     * Passing an array as $value will add array key => values into current
     * view data collection. If $key is passed then an array variable with this
     * key will be added to view data collection beside adding array key => values.
     *
     * @param mixed $value Variable value
     * @param string|null $key   Variable key\prefix for objects and arrays
     *
     * @return self Chaining
     */
    public function set($value, $key = null);

    /**
     * Set current view for rendering.
     * Method searches for the shortest matching view path by $pathPattern,
     * from loaded views.
     *
     * Module saves all view data that has been set to a specific view in appropriate
     * view data collection entry. By default module creates vied data entry - VD_POINTER_DEF,
     * and until any call of iModule::view() or iModule::output(), all data that is iModule::set(),
     * is stored to that location.
     *
     * On the first call of iModule::view() or iModule::output(), this method changes the view data
     * pointer to actual relative view path, and copies(actually just sets view data pointer) all view
     * data set before to new view data pointer. This guarantees backward compatibility and gives
     * opportunity not to set the view path before setting view data to it.
     *
     * @param string $pathPattern  Path pattern for view searching
     * @return self Chaining
     */
    public function view($pathPattern);

    /**
     * Render current view.
     * Method uses current view context and outputs rendering
     * result.
     *
     * @return string Rendered view
     */
    public function output();
}
