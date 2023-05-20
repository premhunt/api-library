<?php
/**
 * @package     Aritic
 * @copyright   2014 Aritic, NP. All rights reserved.
 * @author      Aritic
 * @link        http://aritic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Aritic\Api;

/**
 * Devices Context
 */
class Devices extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'devices';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'devices';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'device';
}
