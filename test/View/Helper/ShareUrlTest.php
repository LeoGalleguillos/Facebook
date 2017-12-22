<?php
namespace LeoGalleguillos\FacebookTest\View\Helper;

use LeoGalleguillos\Facebook\View\Helper\ShareUrl as ShareUrlHelper;
use PHPUnit\Framework\TestCase;

class ShareUrlTest extends TestCase
{
    protected function setUp()
    {
        $this->shareUrlHelper = new ShareUrlHelper();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            ShareUrlHelper::class,
            $this->shareUrlHelper
        );
    }

    public function testInvoke()
    {
        $this->assertSame(
            $this->shareUrlHelper,
            $this->shareUrlHelper->__invoke()
        );
    }

    public function testGetShareUrl()
    {
         $url = 'https://www.sotosummarize.com/summaries/8/Example-slug';

        $this->assertSame(
            'https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.sotosummarize.com%2Fsummaries%2F8%2FExample-slug',
            $this->shareUrlHelper->getShareUrl($url)
        );
    }
}
