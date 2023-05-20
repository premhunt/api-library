<?php
/**
 * @package     Aritic
 * @copyright   2014 Aritic, NP. All rights reserved.
 * @author      Aritic
 * @link        http://aritic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Aritic\Exception;

/**
 * Exception representing a requested API context which was not found
 */
class ContextNotFoundException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Context not found.';
}
