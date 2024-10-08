<?php

namespace ContainerDeIxELU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_TraceableHandlerRegistryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.traceable_handler_registry' shared service.
     *
     * @return \JMS\SerializerBundle\Debug\TraceableHandlerRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/HandlerRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/Debug/TraceableHandlerRegistry.php';

        $container->privates['jms_serializer.traceable_handler_registry'] = $instance = new \JMS\SerializerBundle\Debug\TraceableHandlerRegistry(($container->privates['jms_serializer.traceable_handler_registry.inner'] ?? $container->load('getJmsSerializer_TraceableHandlerRegistry_InnerService')));

        $instance->registerHandler(1, 'ArrayCollection', 'json', ['jms_serializer.array_collection_handler', 'serializeCollection']);
        $instance->registerHandler(1, 'ArrayCollection', 'xml', ['jms_serializer.array_collection_handler', 'serializeCollection']);
        $instance->registerHandler(1, 'Doctrine\\Common\\Collections\\ArrayCollection', 'json', ['jms_serializer.array_collection_handler', 'serializeCollection']);
        $instance->registerHandler(1, 'Doctrine\\Common\\Collections\\ArrayCollection', 'xml', ['jms_serializer.array_collection_handler', 'serializeCollection']);
        $instance->registerHandler(1, 'Doctrine\\ORM\\PersistentCollection', 'json', ['jms_serializer.array_collection_handler', 'serializeCollection']);
        $instance->registerHandler(1, 'Doctrine\\ORM\\PersistentCollection', 'xml', ['jms_serializer.array_collection_handler', 'serializeCollection']);
        $instance->registerHandler(1, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'json', ['jms_serializer.array_collection_handler', 'serializeCollection']);
        $instance->registerHandler(1, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'xml', ['jms_serializer.array_collection_handler', 'serializeCollection']);
        $instance->registerHandler(1, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'json', ['jms_serializer.array_collection_handler', 'serializeCollection']);
        $instance->registerHandler(1, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'xml', ['jms_serializer.array_collection_handler', 'serializeCollection']);
        $instance->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolationList', 'xml', ['jms_serializer.constraint_violation_handler', 'serializeListToxml']);
        $instance->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolationList', 'json', ['jms_serializer.constraint_violation_handler', 'serializeListTojson']);
        $instance->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolation', 'xml', ['jms_serializer.constraint_violation_handler', 'serializeViolationToxml']);
        $instance->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolation', 'json', ['jms_serializer.constraint_violation_handler', 'serializeViolationTojson']);
        $instance->registerHandler(1, 'DateTime', 'json', ['jms_serializer.datetime_handler', 'serializeDateTime']);
        $instance->registerHandler(1, 'DateTime', 'xml', ['jms_serializer.datetime_handler', 'serializeDateTime']);
        $instance->registerHandler(1, 'DateTimeImmutable', 'json', ['jms_serializer.datetime_handler', 'serializeDateTimeImmutable']);
        $instance->registerHandler(1, 'DateTimeImmutable', 'xml', ['jms_serializer.datetime_handler', 'serializeDateTimeImmutable']);
        $instance->registerHandler(1, 'DateInterval', 'json', ['jms_serializer.datetime_handler', 'serializeDateInterval']);
        $instance->registerHandler(1, 'DateInterval', 'xml', ['jms_serializer.datetime_handler', 'serializeDateInterval']);
        $instance->registerHandler(1, 'DateTimeInterface', 'json', ['jms_serializer.datetime_handler', 'serializeDateTimeInterface']);
        $instance->registerHandler(1, 'DateTimeInterface', 'xml', ['jms_serializer.datetime_handler', 'serializeDateTimeInterface']);
        $instance->registerHandler(1, 'Symfony\\Component\\Form\\Form', 'xml', ['jms_serializer.form_error_handler', 'serializeFormToxml']);
        $instance->registerHandler(1, 'Symfony\\Component\\Form\\Form', 'json', ['jms_serializer.form_error_handler', 'serializeFormTojson']);
        $instance->registerHandler(1, 'Symfony\\Component\\Form\\FormInterface', 'xml', ['jms_serializer.form_error_handler', 'serializeFormToXml']);
        $instance->registerHandler(1, 'Symfony\\Component\\Form\\FormInterface', 'json', ['jms_serializer.form_error_handler', 'serializeFormToJson']);
        $instance->registerHandler(1, 'Symfony\\Component\\Form\\FormError', 'xml', ['jms_serializer.form_error_handler', 'serializeFormErrorToxml']);
        $instance->registerHandler(1, 'Symfony\\Component\\Form\\FormError', 'json', ['jms_serializer.form_error_handler', 'serializeFormErrorTojson']);
        $instance->registerHandler(1, 'Iterator', 'json', ['jms_serializer.iterator_handler', 'serializeIterable']);
        $instance->registerHandler(1, 'Iterator', 'xml', ['jms_serializer.iterator_handler', 'serializeIterable']);
        $instance->registerHandler(1, 'ArrayIterator', 'json', ['jms_serializer.iterator_handler', 'serializeIterable']);
        $instance->registerHandler(1, 'ArrayIterator', 'xml', ['jms_serializer.iterator_handler', 'serializeIterable']);
        $instance->registerHandler(1, 'Generator', 'json', ['jms_serializer.iterator_handler', 'serializeIterable']);
        $instance->registerHandler(1, 'Generator', 'xml', ['jms_serializer.iterator_handler', 'serializeIterable']);
        $instance->registerHandler(2, 'ArrayCollection', 'json', ['jms_serializer.array_collection_handler', 'deserializeCollection']);
        $instance->registerHandler(2, 'ArrayCollection', 'xml', ['jms_serializer.array_collection_handler', 'deserializeCollection']);
        $instance->registerHandler(2, 'Doctrine\\Common\\Collections\\ArrayCollection', 'json', ['jms_serializer.array_collection_handler', 'deserializeCollection']);
        $instance->registerHandler(2, 'Doctrine\\Common\\Collections\\ArrayCollection', 'xml', ['jms_serializer.array_collection_handler', 'deserializeCollection']);
        $instance->registerHandler(2, 'Doctrine\\ORM\\PersistentCollection', 'json', ['jms_serializer.array_collection_handler', 'deserializeCollection']);
        $instance->registerHandler(2, 'Doctrine\\ORM\\PersistentCollection', 'xml', ['jms_serializer.array_collection_handler', 'deserializeCollection']);
        $instance->registerHandler(2, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'json', ['jms_serializer.array_collection_handler', 'deserializeCollection']);
        $instance->registerHandler(2, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'xml', ['jms_serializer.array_collection_handler', 'deserializeCollection']);
        $instance->registerHandler(2, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'json', ['jms_serializer.array_collection_handler', 'deserializeCollection']);
        $instance->registerHandler(2, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'xml', ['jms_serializer.array_collection_handler', 'deserializeCollection']);
        $instance->registerHandler(2, 'DateTime', 'json', ['jms_serializer.datetime_handler', 'deserializeDateTimeFromjson']);
        $instance->registerHandler(2, 'DateTime', 'xml', ['jms_serializer.datetime_handler', 'deserializeDateTimeFromxml']);
        $instance->registerHandler(2, 'DateTimeImmutable', 'json', ['jms_serializer.datetime_handler', 'deserializeDateTimeImmutableFromjson']);
        $instance->registerHandler(2, 'DateTimeImmutable', 'xml', ['jms_serializer.datetime_handler', 'deserializeDateTimeImmutableFromxml']);
        $instance->registerHandler(2, 'DateInterval', 'json', ['jms_serializer.datetime_handler', 'deserializeDateIntervalFromjson']);
        $instance->registerHandler(2, 'DateInterval', 'xml', ['jms_serializer.datetime_handler', 'deserializeDateIntervalFromxml']);
        $instance->registerHandler(2, 'DateTimeInterface', 'json', ['jms_serializer.datetime_handler', 'deserializeDateTimeFromJson']);
        $instance->registerHandler(2, 'DateTimeInterface', 'xml', ['jms_serializer.datetime_handler', 'deserializeDateTimeFromXml']);
        $instance->registerHandler(2, 'Iterator', 'json', ['jms_serializer.iterator_handler', 'deserializeIterator']);
        $instance->registerHandler(2, 'Iterator', 'xml', ['jms_serializer.iterator_handler', 'deserializeIterator']);
        $instance->registerHandler(2, 'ArrayIterator', 'json', ['jms_serializer.iterator_handler', 'deserializeIterator']);
        $instance->registerHandler(2, 'ArrayIterator', 'xml', ['jms_serializer.iterator_handler', 'deserializeIterator']);
        $instance->registerHandler(2, 'Generator', 'json', ['jms_serializer.iterator_handler', 'deserializeGenerator']);
        $instance->registerHandler(2, 'Generator', 'xml', ['jms_serializer.iterator_handler', 'deserializeGenerator']);

        return $instance;
    }
}
