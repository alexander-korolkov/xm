<?php

namespace ContainerDeIxELU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_MissingExtensionSuggestorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'twig.missing_extension_suggestor' shared service.
     *
     * @return \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/extra-bundle/MissingExtensionSuggestor.php';

        return $container->privates['twig.missing_extension_suggestor'] = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor();
    }
}
