<?php

namespace ContainerDeIxELU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_DoctrineTypeDriver_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.metadata.doctrine_type_driver.inner' shared service.
     *
     * @return \Metadata\Driver\DriverChain
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverChain.php';

        return $container->privates['jms_serializer.metadata.doctrine_type_driver.inner'] = new \Metadata\Driver\DriverChain([($container->privates['jms_serializer.metadata.yaml_driver'] ?? $container->load('getJmsSerializer_Metadata_YamlDriverService')), ($container->privates['jms_serializer.metadata.xml_driver'] ?? $container->load('getJmsSerializer_Metadata_XmlDriverService')), ($container->privates['jms_serializer.metadata.annotation_or_attribute_driver'] ?? $container->load('getJmsSerializer_Metadata_AnnotationOrAttributeDriverService')), ($container->privates['jms_serializer.metadata.null_driver'] ?? $container->load('getJmsSerializer_Metadata_NullDriverService'))]);
    }
}
