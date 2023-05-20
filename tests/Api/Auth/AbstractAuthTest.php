<?php
/**
 * @package     Aritic
 * @copyright   2014 Aritic, NP. All rights reserved.
 * @author      Aritic
 * @link        http://aritic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Aritic\Tests\Api\Auth;

use Aritic\Auth\AbstractAuth;
use Aritic\Exception\UnexpectedResponseFormatException;

class AbstractAuthTest extends \PHPUnit\Framework\TestCase
{
    protected $config;

    public function setUp()
    {
        $this->config = include __DIR__.'/../../local.config.php';
    }

    public function test404Response()
    {
        $auth = $this->getMockForAbstractClass(AbstractAuth::class);
        $this->expectException(UnexpectedResponseFormatException::class);
        $auth->makeRequest('https://github.com/aritic/api-library/this-page-does-not-exist');
    }

    public function testHtmlResponse()
    {
        $auth = $this->getMockForAbstractClass(AbstractAuth::class);
        $this->expectException(UnexpectedResponseFormatException::class);
        $auth->makeRequest($this->config['baseUrl']);
    }

    public function testJsonResponse()
    {
        $auth = $this->getMockForAbstractClass(AbstractAuth::class);
        try {
            $response = $auth->makeRequest($this->config['apiUrl'].'contacts');
            $this->assertTrue(is_array($response));
            $this->assertFalse(empty($response));
        } catch (UnexpectedResponseFormatException $exception) {
            $response = json_decode($exception->getResponse()->getBody(), true);
            $this->assertTrue(is_array($response));
            $this->assertFalse(empty($response));
        }
    }
}
