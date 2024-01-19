<?php

namespace Modules\Notify\Tests\Unit\Actions\NotifyTheme;

use Modules\Notify\Actions\NotifyTheme\Get;
use Tests\TestCase;

/**
 * Class GetTest.
 *
 * @covers \Modules\Notify\Actions\NotifyTheme\Get
 */
final class GetTest extends TestCase
{
    private Get $get;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->get = new Get();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->get);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
