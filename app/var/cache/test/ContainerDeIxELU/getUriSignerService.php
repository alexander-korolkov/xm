<?php

namespace ContainerDeIxELU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUriSignerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\UriSigner
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UriSigner.php';

        return $container->privates['uri_signer'] = new \Symfony\Component\HttpFoundation\UriSigner($container->getEnv('APP_SECRET'));
    }
}
