<?php

namespace Container5fXBhVz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_Messenger_RestartWorkersSignalService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'cache.messenger.restart_workers_signal' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\RedisAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/src/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/src/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $container->privates['cache.messenger.restart_workers_signal'] = $instance = new \Symfony\Component\Cache\Adapter\RedisAdapter(($container->privates['.cache_connection.GD_MSZC'] ?? $container->load('get_CacheConnection_GDMSZCService')), '2p5mjr7dZk', 0, ($container->privates['cache.default_marshaller'] ??= new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL, true)));

        $instance->setLogger(($container->privates['monolog.logger.cache'] ?? $container->load('getMonolog_Logger_CacheService')));

        return $instance;
    }
}
