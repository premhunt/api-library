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
 * CompanyFields Context
 */
class CompanyFields extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'fields/company';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'fields';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'field';
}
