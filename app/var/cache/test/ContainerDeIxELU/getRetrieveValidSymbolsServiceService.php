<?php

namespace ContainerDeIxELU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRetrieveValidSymbolsServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Application\v1\Service\RetrieveValidSymbolsService' shared autowired service.
     *
     * @return \App\Application\v1\Service\RetrieveValidSymbolsService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Application/v1/Service/RetrieveValidSymbolsService.php';

        return $container->privates['App\\Application\\v1\\Service\\RetrieveValidSymbolsService'] = new \App\Application\v1\Service\RetrieveValidSymbolsService(($container->privates['http_client.uri_template'] ?? $container->load('getHttpClient_UriTemplateService')), ($container->services['cache.app'] ?? $container->load('getCache_AppService')), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}
