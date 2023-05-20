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
 * Assets Context
 */
class Assets extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'assets';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'assets';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'asset';

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
    );
}
