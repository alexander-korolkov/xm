<?php

namespace Container4pDCgjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_TwigExtension_SerializerRuntimeHelperService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.twig_extension.serializer_runtime_helper' shared service.
     *
     * @return \JMS\Serializer\Twig\SerializerRuntimeHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Twig/SerializerRuntimeHelper.php';

        return $container->privates['jms_serializer.twig_extension.serializer_runtime_helper'] = new \JMS\Serializer\Twig\SerializerRuntimeHelper(($container->services['jms_serializer'] ?? $container->load('getJmsSerializerService')));
    }
}
