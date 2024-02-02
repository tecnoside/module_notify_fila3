<?php

namespace Tests\Unit;

use CreateNotificationsTable;
use Tests\TestCase;

/**
 * Class CreateNotificationsTableTest.
 *
 * @covers \CreateNotificationsTable
 */
final class CreateNotificationsTableTest extends TestCase
{
    private CreateNotificationsTable $createNotificationsTable;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /**
* 
         *
 * @todo Correctly instantiate tested object to use it. 
*/
        $this->createNotificationsTable = new CreateNotificationsTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createNotificationsTable);
    }

    public function testUp(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }
}
