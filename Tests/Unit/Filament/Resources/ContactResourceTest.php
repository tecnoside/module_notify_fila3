<?php

namespace Modules\Notify\Tests\Unit\Filament\Resources;

use Modules\Notify\Filament\Resources\ContactResource;
use Tests\TestCase;

/**
 * Class ContactResourceTest.
 *
 * @covers \Modules\Notify\Filament\Resources\ContactResource
 */
final class ContactResourceTest extends TestCase
{
    private ContactResource $contactResource;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->contactResource = new ContactResource();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->contactResource);
    }

    public function testForm(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testTable(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetRelations(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetPages(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
