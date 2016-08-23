<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: VITALYIEGOROV
 * Date: 24.12.15
 * Time: 14:12
 */
namespace samsonframework\core;

use \Interop\Container\ContainerInterface;

/**
 * Generic interface for framework interactions.
 *
 * @author Vitaly Iegorov <egorov@samsonos.com>
 */
interface SystemInterface
{
    /** Event - Fires when system instance is created */
    const E_SYSTEM_LOADED = 'system.loaded';

    /** Event - Fires when system environment setting is changed */
    const E_ENVIRONMENT_CHANGE = 'system.environment.change';

    /** Event - Fires when system module has finished loading */
    const E_MODULE_LOADED = 'system.module.loaded';

    /** Event - Fires when system module is ready for configuration */
    const E_MODULE_CONFIGURED = 'system.module.configure';

    /** Event - Fires when system receives request for handling */
    const E_REQUEST_STARTED = 'system.started';

    /** Event - Fires when system finished processing request */
    const E_REQUEST_PROCESSED = 'system.routing';

    /** Event - Fires when system finished request handling */
    const E_REQUEST_FINISHED = 'system.routing';

    /** Event - Fires when system instance is destructed */
    const E_SYSTEM_SHUTDOWN = 'system.loaded';
    
    /** 
     * Get system container for packages/modules/dependencies retrieval.
     * 
     * @return ContainerInterface Get system container 
     */
    public function getContainer();
}
