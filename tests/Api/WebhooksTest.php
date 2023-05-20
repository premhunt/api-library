<?php
/**
 * @package     Aritic
 * @copyright   2014 Aritic, NP. All rights reserved.
 * @author      Aritic
 * @link        http://aritic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Aritic\Tests\Api;

class WebhooksTest extends AriticApiTestCase
{
    protected $skipPayloadAssertion = array('dateModified', 'modifiedBy', 'modifiedByUser');

    public function setUp() {
        $this->api = $this->getContext('webhooks');
        $this->testPayload = array(
            'name' => 'test',
            'description' => 'Created via API',
            'webhookUrl' => 'http://some.url',
            'eventsOrderbyDir' => 'DESC',
            'triggers' => array(
                'aritic.lead_post_save_update',
                'aritic.lead_post_save_new',
            )
        );
    }

    public function testGetList()
    {
        $this->standardTestGetList();
    }

    public function testGetListOfSpecificIds()
    {
        $this->standardTestGetListOfSpecificIds();
    }

    public function testCreateGetAndDelete()
    {
        $this->standardTestCreateGetAndDelete();
    }

    public function testCreateWithWrongOrderDir()
    {
        $this->testPayload['eventsOrderbyDir'] = 'abrakadabra';
        $response = $this->api->create($this->testPayload);

        $this->assertFalse(empty($response['errors']));
    }

    public function testCreateWithUndefinedOrderDir()
    {
        unset($this->testPayload['eventsOrderbyDir']);

        $this->standardTestCreateGetAndDelete($this->testPayload);
    }

    public function testEditPatch()
    {
        $editTo = array(
            'name' => 'test2',
            'description' => 'Updated via API',
        );
        $this->standardTestEditPatch($editTo);
    }

    public function testEditPut()
    {
        $this->standardTestEditPut();
    }

    public function testBatchEndpoints()
    {
        $this->standardTestBatchEndpoints();
    }

    public function testAddingTriggerToWebhook()
    {
        $response = $this->api->create($this->testPayload);
        $this->assertPayload($response);

        $editTo = $response[$this->api->itemName()];

        $editTo['triggers'][] = 'aritic.email_on_open';

        $response = $this->api->edit($response[$this->api->itemName()]['id'], $editTo);
        $this->assertPayload($response, $editTo);

        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    public function testRemovingTriggerFromWebhook()
    {
        $response = $this->api->create($this->testPayload);
        $this->assertPayload($response);

        $editTo = $response[$this->api->itemName()];

        $editTo['triggers'] = ['aritic.email_on_open'];

        $response = $this->api->edit($response[$this->api->itemName()]['id'], $editTo, true);
        $this->assertPayload($response, $editTo);

        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    public function testGetWebhookTriggers()
    {
        $response = $this->api->getTriggers();

        $this->assertTrue(isset($response['triggers']));

        $this->assertTrue(isset($response['triggers']['aritic.lead_post_save_new']));
        $this->assertTrue(isset($response['triggers']['aritic.lead_post_save_update']));
        $this->assertTrue(isset($response['triggers']['aritic.lead_post_delete']));
        $this->assertTrue(isset($response['triggers']['aritic.lead_points_change']));
        $this->assertTrue(isset($response['triggers']['aritic.email_on_open']));
        $this->assertTrue(isset($response['triggers']['aritic.form_on_submit']));
        $this->assertTrue(isset($response['triggers']['aritic.page_on_hit']));

        $this->assertTrue(isset($response['triggers']['aritic.page_on_hit']['label']));
        $this->assertTrue(isset($response['triggers']['aritic.page_on_hit']['description']));

    }
}
