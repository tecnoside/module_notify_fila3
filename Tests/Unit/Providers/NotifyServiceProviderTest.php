<?php

namespace Tests\Unit\Modules\Notify\Providers;

use Modules\Notify\Providers\NotifyServiceProvider;
use Tests\TestCase;

/**
 * Class NotifyServiceProviderTest.
 *
 * @covers \Modules\Notify\Providers\NotifyServiceProvider
 */
final class NotifyServiceProviderTest extends TestCase
{
    private NotifyServiceProvider $notifyServiceProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->notifyServiceProvider = new NotifyServiceProvider();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->notifyServiceProvider);
    }

    public function testBootCallback(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
