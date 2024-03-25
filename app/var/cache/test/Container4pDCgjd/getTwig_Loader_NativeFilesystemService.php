<?php

namespace Container4pDCgjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Loader_NativeFilesystemService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'twig.loader.native_filesystem' shared service.
     *
     * @return \Twig\Loader\FilesystemLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/FilesystemLoader.php';

        $container->privates['twig.loader.native_filesystem'] = $instance = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));

        $instance->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/templates'), 'Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/templates'), '!Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), 'DoctrineMigrations');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), '!DoctrineMigrations');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/Resources/views'), 'JMSSerializer');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/Resources/views'), '!JMSSerializer');
        $instance->addPath((\dirname(__DIR__, 4).'/templates'));
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        return $instance;
    }
}
