<?php

namespace Modules\Notify\Tests\Unit\Database\Factories;

use Modules\Notify\Database\Factories\NotifyThemeFactory;
use Tests\TestCase;

/**
 * Class NotifyThemeFactoryTest.
 *
 * @covers \Modules\Notify\Database\Factories\NotifyThemeFactory
 */
final class NotifyThemeFactoryTest extends TestCase
{
    private NotifyThemeFactory $notifyThemeFactory;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->notifyThemeFactory = new NotifyThemeFactory();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->notifyThemeFactory);
    }

    public function testDefinition(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
