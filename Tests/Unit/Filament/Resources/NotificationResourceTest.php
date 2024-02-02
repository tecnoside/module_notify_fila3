<?php

namespace Modules\Notify\Tests\Unit\Filament\Resources;

use Modules\Notify\Filament\Resources\NotificationResource;
use Tests\TestCase;

/**
 * Class NotificationResourceTest.
 *
 * @covers \Modules\Notify\Filament\Resources\NotificationResource
 */
final class NotificationResourceTest extends TestCase
{
    private NotificationResource $notificationResource;

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
        $this->notificationResource = new NotificationResource();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->notificationResource);
    }

    public function testForm(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }

    public function testTable(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }

    public function testGetRelations(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }

    public function testGetPages(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }
}
