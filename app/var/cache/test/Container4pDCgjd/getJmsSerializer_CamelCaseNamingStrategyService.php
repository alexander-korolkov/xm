<?php

namespace Container4pDCgjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_CamelCaseNamingStrategyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.camel_case_naming_strategy' shared service.
     *
     * @return \JMS\Serializer\Naming\CamelCaseNamingStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Naming/PropertyNamingStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Naming/CamelCaseNamingStrategy.php';

        return $container->privates['jms_serializer.camel_case_naming_strategy'] = new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true);
    }
}
