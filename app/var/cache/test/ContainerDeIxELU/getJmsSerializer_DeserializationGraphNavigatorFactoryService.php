<?php

namespace ContainerDeIxELU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_DeserializationGraphNavigatorFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.deserialization_graph_navigator_factory' shared service.
     *
     * @return \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/GraphNavigatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/DeserializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Accessor/AccessorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Accessor/DefaultAccessorStrategy.php';

        return $container->privates['jms_serializer.deserialization_graph_navigator_factory'] = new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory(($container->privates['jms_serializer.traceable_metadata_factory'] ?? $container->load('getJmsSerializer_TraceableMetadataFactoryService')), ($container->privates['jms_serializer.traceable_handler_registry'] ?? $container->load('getJmsSerializer_TraceableHandlerRegistryService')), ($container->privates['jms_serializer.doctrine_object_constructor'] ?? $container->load('getJmsSerializer_DoctrineObjectConstructorService')), ($container->privates['jms_serializer.accessor_strategy.default'] ??= new \JMS\Serializer\Accessor\DefaultAccessorStrategy(NULL)), ($container->privates['jms_serializer.event_dispatcher'] ?? $container->load('getJmsSerializer_EventDispatcherService')), NULL);
    }
}
