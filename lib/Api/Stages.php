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
 * Stages Context
 */
class Stages extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'stages';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'stages';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'stage';

    protected $bcRegexEndpoints = array(
        'stages/(.*?)/contact/(.*?)/add' => 'stages/$1/contact/add/$2', // 2.6.0
        'stages/(.*?)/contact/(.*?)/remove' => 'stages/$1/contact/remove/$2', // 2.6.0
    );

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
    );

    /**
     * Add a contact to the stage
     *
     * @param int $id        Stage ID
     * @param int $contactId Contact ID
     *
     * @return array|mixed
     */
    public function addContact($id, $contactId)
    {
        return $this->makeRequest($this->endpoint.'/'.$id.'/contact/'.$contactId.'/add', array(), 'POST');
    }

    /**
     * Remove a contact from the stage
     *
     * @param int $id        Stage ID
     * @param int $contactId Contact ID
     *
     * @return array|mixed
     */
    public function removeContact($id, $contactId)
    {
        return $this->makeRequest($this->endpoint.'/'.$id.'/contact/'.$contactId.'/remove', array(), 'POST');
    }
}
