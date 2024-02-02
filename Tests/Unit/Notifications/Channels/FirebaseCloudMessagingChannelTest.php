<?php

namespace Modules\Notify\Tests\Unit\Notifications\Channels;

use Kreait\Firebase\Contract\Messaging;
use Mockery;
use Mockery\Mock;
use Modules\Notify\Notifications\Channels\FirebaseCloudMessagingChannel;
use Tests\TestCase;

/**
 * Class FirebaseCloudMessagingChannelTest.
 *
 * @covers \Modules\Notify\Notifications\Channels\FirebaseCloudMessagingChannel
 */
final class FirebaseCloudMessagingChannelTest extends TestCase
{
    private FirebaseCloudMessagingChannel $firebaseCloudMessagingChannel;

    private Messaging|Mock $firebaseCloudMessaging;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->firebaseCloudMessaging = Mockery::mock(Messaging::class);
        $this->firebaseCloudMessagingChannel = new FirebaseCloudMessagingChannel($this->firebaseCloudMessaging);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->firebaseCloudMessagingChannel);
        unset($this->firebaseCloudMessaging);
    }

    public function testSend(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }
}
