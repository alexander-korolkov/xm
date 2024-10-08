<?php

namespace ContainerFhxTxQL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Application\v1\Service\MailService' shared autowired service.
     *
     * @return \App\Application\v1\Service\MailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Application/v1/Service/MailService.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';

        $a = ($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService'));

        if (isset($container->privates['App\\Application\\v1\\Service\\MailService'])) {
            return $container->privates['App\\Application\\v1\\Service\\MailService'];
        }
        $b = ($container->services['messenger.default_bus'] ?? $container->load('getMessenger_DefaultBusService'));

        if (isset($container->privates['App\\Application\\v1\\Service\\MailService'])) {
            return $container->privates['App\\Application\\v1\\Service\\MailService'];
        }
        $c = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['App\\Application\\v1\\Service\\MailService'])) {
            return $container->privates['App\\Application\\v1\\Service\\MailService'];
        }

        return $container->privates['App\\Application\\v1\\Service\\MailService'] = new \App\Application\v1\Service\MailService(new \Symfony\Component\Mailer\Mailer($a, $b, $c), $b, ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}
