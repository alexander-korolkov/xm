<?php

namespace ContainerDeIxELU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_P4QvabmService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.p4Qvabm' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->privates['messenger.redispatch_message_handler'] ?? $container->load('getMessenger_RedispatchMessageHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.p4Qvabm'])) {
            return $container->privates['.messenger.handler_descriptor.p4Qvabm'];
        }

        return $container->privates['.messenger.handler_descriptor.p4Qvabm'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, []);
    }
}
