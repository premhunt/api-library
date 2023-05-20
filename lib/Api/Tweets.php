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
 * Tweets Context
 */
class Tweets extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'tweets';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'tweets';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'tweet';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array();
}
