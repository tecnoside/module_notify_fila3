<?php

namespace Tests\Unit;

use CreateNotifyThemesTable;
use Tests\TestCase;

/**
 * Class CreateNotifyThemesTableTest.
 *
 * @covers \CreateNotifyThemesTable
 */
final class CreateNotifyThemesTableTest extends TestCase
{
    private CreateNotifyThemesTable $createNotifyThemesTable;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->createNotifyThemesTable = new CreateNotifyThemesTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createNotifyThemesTable);
    }

    public function testUp(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
