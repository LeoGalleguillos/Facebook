<?php
namespace LeoGalleguillos\Facebook;

use LeoGalleguillos\Facebook\Model\Factory\View\Helper\ShareUrl as ShareUrlHelperFactory;
use LeoGalleguillos\Facebook\View\Helper\ShareUrl as ShareUrlHelper;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                    'shareUrl' => ShareUrlHelper::class,
                ],
                'factories' => [
                    ShareUrlHelper::class => ShareUrlHelperFactory::class,
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
            ],
        ];
    }
}
