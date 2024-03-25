<?php

namespace ContainerDeIxELU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_PhpService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['monolog.logger.php'] = $instance = new \Monolog\Logger('php');

        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? self::getMonolog_Handler_MainService($container)));
        $instance->pushHandler(($container->privates['monolog.handler.file'] ?? self::getMonolog_Handler_FileService($container)));

        return $instance;
    }
}
