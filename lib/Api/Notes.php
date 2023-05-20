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
 * Notes Context
 */
class Notes extends Api
{
    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'notes';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'notes';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'note';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
    );
}
