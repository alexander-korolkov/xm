<?php

namespace ContainerDeIxELU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_MessageLoggerListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'mailer.message_logger_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageLoggerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/EventListener/MessageLoggerListener.php';

        return $container->privates['mailer.message_logger_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener();
    }
}
