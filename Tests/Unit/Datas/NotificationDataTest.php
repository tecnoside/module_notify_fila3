<?php

namespace Tests\Unit\Modules\Notify\Datas;

use Modules\Notify\Datas\NotificationData;
use Tests\TestCase;

/**
 * Class NotificationDataTest.
 *
 * @covers \Modules\Notify\Datas\NotificationData
 */
final class NotificationDataTest extends TestCase
{
    private NotificationData $notificationData;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->notificationData = new NotificationData();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->notificationData);
    }

    public function testRouteNotificationFor(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetSmsData(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
