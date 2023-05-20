<?php

/*
 * @copyright   2014 Aritic Contributors. All rights reserved
 * @author      Aritic, Inc.
 *
 * @link        https://aritic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Aritic\Auth;

/**
 * OAuth Client modified from https://code.google.com/p/simple-php-oauth/
 */
class ApiAuth
{
    /**
     * Get an API Auth object
     *
     * @param array  $parameters
     * @param string $authMethod
     *
     * @return AuthInterface
     *
     * @deprecated
     */
    public static function initiate($parameters = array(), $authMethod = 'OAuth')
    {
        $object = new self;

        return $object->newAuth($parameters, $authMethod);
    }

    /**
     * Get an API Auth object
     *
     * @param array  $parameters
     * @param string $authMethod
     *
     * @return AuthInterface
     */
    public function newAuth($parameters = array(), $authMethod = 'OAuth')
    {
        $class      = 'Aritic\\Auth\\'.$authMethod;
        $authObject = new $class();

        $reflection = new \ReflectionMethod($class, 'setup');
        $pass       = array();

        foreach ($reflection->getParameters() as $param) {
            if (isset($parameters[$param->getName()])) {
                $pass[] = $parameters[$param->getName()];
            } else {
                $pass[] = null;
            }
        }

        $reflection->invokeArgs($authObject, $pass);

        return $authObject;
    }
}
