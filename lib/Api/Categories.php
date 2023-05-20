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
 * Categories Context
 */
class Categories extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'categories';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'categories';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'category';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:published',
        'is:unpublished',
    );
}
