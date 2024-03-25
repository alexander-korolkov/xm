<?php

namespace ContainerDeIxELU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Application\v1\Service\MailService' shared autowired service.
     *
     * @return \App\Application\v1\Service\MailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Application/v1/Service/MailService.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\Application\\v1\\Service\\MailService'])) {
            return $container->privates['App\\Application\\v1\\Service\\MailService'];
        }

        return $container->privates['App\\Application\\v1\\Service\\MailService'] = new \App\Application\v1\Service\MailService($a, ($container->services['messenger.default_bus'] ?? $container->load('getMessenger_DefaultBusService')), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}
