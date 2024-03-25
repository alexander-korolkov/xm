<?php

namespace Container4pDCgjd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_AppVariableService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'twig.app_variable' shared service.
     *
     * @return \Symfony\Bridge\Twig\AppVariable
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/AppVariable.php';

        $container->privates['twig.app_variable'] = $instance = new \Symfony\Bridge\Twig\AppVariable();

        $instance->setEnvironment('test');
        $instance->setDebug(true);
        if ($container->has('request_stack')) {
            $instance->setRequestStack(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
        }
        $instance->setEnabledLocales([]);

        return $instance;
    }
}
