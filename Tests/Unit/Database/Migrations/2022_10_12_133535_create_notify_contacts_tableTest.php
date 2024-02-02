<?php

namespace Tests\Unit;

use CreateNotifyContactsTable;
use Tests\TestCase;

/**
 * Class CreateNotifyContactsTableTest.
 *
 * @covers \CreateNotifyContactsTable
 */
final class CreateNotifyContactsTableTest extends TestCase
{
    private CreateNotifyContactsTable $createNotifyContactsTable;

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
        $this->createNotifyContactsTable = new CreateNotifyContactsTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createNotifyContactsTable);
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
