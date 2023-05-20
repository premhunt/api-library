<?php
/**
 * @package     Aritic
 * @copyright   2014 Aritic, NP. All rights reserved.
 * @author      Aritic
 * @link        http://aritic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Aritic\Tests\Api;

class LeadsTest extends ContactsTest
{
    public function setUp()
    {
        parent::setUp();
        $this->api = $this->getContext('leads');
    }

    // Use the method from ContactsTest to test the 'leads' endpoint for BC
}
