<?php

namespace Modules\Notify\Actions\Tests\Unit\NotifyTheme\Attachment;

use Modules\Notify\Actions\NotifyTheme\Attachment\Pdf;
use Tests\TestCase;

/**
 * Class PdfTest.
 *
 * @covers \Modules\Notify\Actions\NotifyTheme\Attachment\Pdf
 */
final class PdfTest extends TestCase
{
    private Pdf $pdf;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->pdf = new Pdf();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->pdf);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
