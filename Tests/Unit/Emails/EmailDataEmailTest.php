<?php

namespace Tests\Unit\Modules\Notify\Emails;

use Mockery;
use Mockery\Mock;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Emails\EmailDataEmail;
use Tests\TestCase;

/**
 * Class EmailDataEmailTest.
 *
 * @covers \Modules\Notify\Emails\EmailDataEmail
 */
final class EmailDataEmailTest extends TestCase
{
    private EmailDataEmail $emailDataEmail;

    private EmailData|Mock $email_data;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->email_data = Mockery::mock(EmailData::class);
        $this->emailDataEmail = new EmailDataEmail($this->email_data);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->emailDataEmail);
        unset($this->email_data);
    }

    public function testEnvelope(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testContent(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testAttachments(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
