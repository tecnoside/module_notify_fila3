<?php

namespace Tests\Unit\Modules\Notify\Actions;

use Modules\Notify\Actions\NetfunSendAction;
use Tests\TestCase;

/**
 * Class NetfunSendActionTest.
 *
 * @covers \Modules\Notify\Actions\NetfunSendAction
 */
final class NetfunSendActionTest extends TestCase
{
    private NetfunSendAction $netfunSendAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->netfunSendAction = new NetfunSendAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->netfunSendAction);
    }

    public function testExecute(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }
}
