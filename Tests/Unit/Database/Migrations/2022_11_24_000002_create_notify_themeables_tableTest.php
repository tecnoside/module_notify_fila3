<?php

namespace Tests\Unit;

use CreateNotifyThemeablesTable;
use Tests\TestCase;

/**
 * Class CreateNotifyThemeablesTableTest.
 *
 * @covers \CreateNotifyThemeablesTable
 */
final class CreateNotifyThemeablesTableTest extends TestCase
{
    private CreateNotifyThemeablesTable $createNotifyThemeablesTable;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->createNotifyThemeablesTable = new CreateNotifyThemeablesTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createNotifyThemeablesTable);
    }

    public function testUp(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
