<?php

namespace Modules\Notify\Tests\Unit\Notifications\Channels;

use Modules\Notify\Notifications\Channels\NetfunChannel;
use Tests\TestCase;

/**
 * Class NetfunChannelTest.
 *
 * @covers \Modules\Notify\Notifications\Channels\NetfunChannel
 */
final class NetfunChannelTest extends TestCase
{
    private NetfunChannel $netfunChannel;

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
        $this->netfunChannel = new NetfunChannel();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->netfunChannel);
    }

    public function testSend(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }
}
