<?php
/**
 * @package     Aritic
 * @copyright   2014 Aritic, NP. All rights reserved.
 * @author      Aritic
 * @link        http://aritic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Aritic\Tests\Api;

use Aritic\Tests\Api;

class CompanyFieldTest extends ContactFieldsTest
{
    protected $prefix = 'Company ';

    public function setUp()
    {
        $this->api = $this->getContext('companyFields');
        $this->testPayload = array(
            'label' => $this->prefix.'API test field',
            'type' => 'text',
        );
    }

    protected function assertFieldPayloadList($response)
    {
        if (!empty($response[$this->api->listName()])) {
            foreach ($response[$this->api->listName()] as $item) {
                $this->assertSame('company', $item['object'], 'This field must be object of company '.print_r($item, true));
            }
        }
    }

    // Methods inherited from ContactFieldsTest

    // Except following, ignore them
    public function testBooleanField()
    {
        return;
    }

    public function testDefaultFieldValue()
    {
        return;
    }
}
