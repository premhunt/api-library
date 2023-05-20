<?php
/*
 * @package     Aritic
 * @copyright   2014 Aritic, NP. All rights reserved.
 * @author      Aritic
 * @link        http://aritic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Aritic\Api;

/*
 * Emails Context
 */
class Focus extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'focus';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'focus';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'focus';

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
