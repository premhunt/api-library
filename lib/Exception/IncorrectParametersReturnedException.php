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
 * Exception representing an incorrect parameter set for an OAuth token request
 */
class IncorrectParametersReturnedException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Incorrect parameters returned.';
}
