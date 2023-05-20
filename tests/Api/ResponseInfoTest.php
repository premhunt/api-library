<?php
/**
 * @package     Aritic
 * @copyright   2014 Aritic, NP. All rights reserved.
 * @author      Aritic
 * @link        http://aritic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Aritic\Tests\Api;

class ResponseInfoTest extends AriticApiTestCase
{
    public function setUp() {
        $this->api = $this->getContext('contacts');
        $response = $this->api->getList('', 0, 1);
        $this->assertErrors($response);
    }
    
    public function testGetVersion() {
        $version = $this->api->getAriticVersion();
        $this->assertRegExp("/^(\d+\.)?(\d+\.)?(.+|\d+)$/", $version);
    }

    public function testResponseInfo() {
        $info = $this->api->getResponseInfo();
        $this->assertEquals($info['content_type'], 'application/json');
    }

    public function testResponseHeaders() {
        $headers = $this->api->getResponseHeaders();
        $this->assertEquals($headers[0], 'HTTP/1.1 200 OK');
    }
}
