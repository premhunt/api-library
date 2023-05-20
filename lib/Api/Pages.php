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
 * Pages Context
 */
class Pages extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'pages';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'pages';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'page';

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
