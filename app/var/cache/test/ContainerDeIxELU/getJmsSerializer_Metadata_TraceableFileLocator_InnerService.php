<?php

namespace ContainerDeIxELU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_TraceableFileLocator_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.metadata.traceable_file_locator.inner' shared service.
     *
     * @return \Metadata\Driver\FileLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/TraceableFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocator.php';

        return $container->privates['jms_serializer.metadata.traceable_file_locator.inner'] = new \Metadata\Driver\FileLocator([]);
    }
}
