<?php
/**
 * @package     Aritic
 * @copyright   2014 Aritic, NP. All rights reserved.
 * @author      Aritic
 * @link        http://aritic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Aritic;

use Aritic\Auth\AuthInterface;
use Aritic\Exception\ContextNotFoundException;

/**
 * Aritic API Factory
 */
class AriticApi
{
    /**
     * Get an API context object
     *
     * @param string        $apiContext API context (leads, forms, etc)
     * @param AuthInterface $auth       API Auth object
     * @param string        $baseUrl    Base URL for API endpoints
     *
     * @return Api\Api
     * @throws ContextNotFoundException
     *
     * @deprecated
     */
    public static function getContext($apiContext, AuthInterface $auth, $baseUrl = '')
    {
        static $contexts = array();

        $apiContext = ucfirst($apiContext);

        if (!isset($context[$apiContext])) {
            $class = 'Aritic\\Api\\'.$apiContext;

            if (!class_exists($class)) {
                throw new ContextNotFoundException("A context of '$apiContext' was not found.");
            }

            $contexts[$apiContext] = new $class($auth, $baseUrl);
        }

        return $contexts[$apiContext];
    }

    /**
     * Get an API context object
     *
     * @param string        $apiContext API context (leads, forms, etc)
     * @param AuthInterface $auth       API Auth object
     * @param string        $baseUrl    Base URL for API endpoints
     *
     * @return Api\Api
     * @throws ContextNotFoundException
     */
    public function newApi($apiContext, AuthInterface $auth, $baseUrl = '')
    {
        $apiContext = ucfirst($apiContext);

        $class = 'Aritic\\Api\\'.$apiContext;

        if (!class_exists($class)) {
            throw new ContextNotFoundException("A context of '$apiContext' was not found.");
        }

        return new $class($auth, $baseUrl);
    }
}
