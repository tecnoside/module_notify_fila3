<?php

namespace Tests\Unit\Modules\Notify\Actions;

use Modules\Notify\Actions\EsendexSendAction;
use Tests\TestCase;

/**
 * Class EsendexSendActionTest.
 *
 * @covers \Modules\Notify\Actions\EsendexSendAction
 */
final class EsendexSendActionTest extends TestCase
{
    private EsendexSendAction $esendexSendAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->esendexSendAction = new EsendexSendAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->esendexSendAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testLogin(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
