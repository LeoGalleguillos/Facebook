<?php
namespace LeoGalleguillos\Facebook\View\Helper;

use Zend\View\Helper\AbstractHelper;

class ShareUrl extends AbstractHelper
{
    public function __invoke()
    {
        return $this;
    }

    public function getShareUrl(string $url) : string
    {
        return 'https://www.facebook.com/sharer/sharer.php?u='
             . urlencode($url);
    }
}
