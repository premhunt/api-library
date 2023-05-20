<?php

/*
 * @copyright   2016 Aritic Contributors. All rights reserved
 * @author      Aritic, Inc.
 *
 * @link        https://aritic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Aritic\Tests\Api;


abstract class AbstractCustomFieldsTest extends AriticApiTestCase
{
    protected function assertPayload($response, array $payload = array(), $isBatch = false, $idColumn = 'id', $callback = null)
    {
        parent::assertPayload($response, $payload, $isBatch, $idColumn, array($this, 'validateFieldPayload'));
    }

    protected function validateFieldPayload($itemProp, $itemVal, $item)
    {
        $this->assertFalse(
            empty($item['fields']['all']),
            '[fields][all] is missing:'.var_export($item, true)
        );

        if (isset($item['fields']['all'][$itemProp])) {
            $item = $item['fields']['all'];
        }

        $this->assertTrue(isset($item[$itemProp]), $itemProp.' doesn\'t exist in the response: '.var_export($item, true));
        $this->assertEquals($item[$itemProp], $itemVal);
    }
}