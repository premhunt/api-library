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
 * Notifications Context
 */
class Notifications extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'notifications';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'notifications';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'notification';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:published',
        'is:unpublished',
        'is:mine',
        'is:uncategorized',
        'category',
        'lang',
    );
}
