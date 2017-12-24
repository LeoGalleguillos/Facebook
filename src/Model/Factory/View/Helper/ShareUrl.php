<?php
namespace LeoGalleguillos\Facebook\Model\Factory\View\Helper;

use Interop\Container\ContainerInterface;
use LeoGalleguillos\Facebook\View\Helper\ShareUrl as ShareUrlHelper;
use Zend\ServiceManager\Factory\FactoryInterface;

class ShareUrl implements FactoryInterface
{
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ) {
        return new ShareUrlHelper(
        );
    }
}
