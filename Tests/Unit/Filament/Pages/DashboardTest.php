<?php

namespace Modules\Notify\Tests\Unit\Filament\Pages;

use Modules\Notify\Filament\Pages\Dashboard;
use Tests\TestCase;

/**
 * Class DashboardTest.
 *
 * @covers \Modules\Notify\Filament\Pages\Dashboard
 */
final class DashboardTest extends TestCase
{
    private Dashboard $dashboard;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->dashboard = new Dashboard();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->dashboard);
    }

    public function testMount(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
