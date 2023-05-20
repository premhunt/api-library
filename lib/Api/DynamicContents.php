<?php
/**
 * @package     Aritic
 * @copyright   2016 Aritic, NP. All rights reserved.
 * @author      Aritic
 * @link        http://aritic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Aritic\Api;

/**
 * Dynamiccontents Context
 */
class DynamicContents extends Api
{
    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'dynamiccontents';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'dynamicContents';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'dynamicContent';

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
