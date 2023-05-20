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
 * Marketing Messages Context
 */
class Messages extends Api
{
    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'messages';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'messages';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'message';
}
