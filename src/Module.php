<?php
namespace LeoGalleguillos\Facebook;

use LeoGalleguillos\Facebook\Model\Factory\View\Helper\ShareUrl as ShareUrlHelperFactory;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'factories' => [
                    'shareUrl' => ShareUrlHelperFactory::class,
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
