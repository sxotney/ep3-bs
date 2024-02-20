<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Laminas\Mvc\Service;

use Interop\Container\ContainerInterface;
use Laminas\Mvc\Exception;
use Laminas\ServiceManager\Di\DiAbstractServiceFactory;
use Laminas\ServiceManager\FactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;
use Laminas\ServiceManager\ServiceManager;

/**
 * @deprecated Since 2.7.9. The factory is now defined in zend-servicemanager-di,
 *     and removed in 3.0.0. Use Laminas\ServiceManager\Di\DiAbstractServiceFactoryFactory
 *     from zend-servicemanager-di if you are using zend-servicemanager v3, and/or when
 *     ready to migrate to zend-mvc 3.0.
 */
class DiAbstractServiceFactoryFactory implements FactoryInterface
{
    /**
     * Class responsible for instantiating a DiAbstractServiceFactory
     *
     * @param ContainerInterface $container
     * @param string $name
     * @param null|array $options
     * @return DiAbstractServiceFactory
     * @throws Exception\RuntimeException if zend-servicemanager v3 is in use.
     */
    public function __invoke(ContainerInterface $container, $name, array $options = null)
    {
        if (! class_exists(DiAbstractServiceFactory::class)) {
            throw new Exception\RuntimeException(sprintf(
                "%s is not compatible with zend-servicemanager v3, which you are currently using. \n"
                . "Please run 'composer require laminas/laminas-servicemanager-di', and then update\n"
                . "your configuration to use Laminas\ServiceManager\Di\DiAbstractServiceFactoryFactory instead.",
                __CLASS__
            ));
        }

        $factory = new DiAbstractServiceFactory($container->get('Di'), DiAbstractServiceFactory::USE_SL_BEFORE_DI);

        if ($container instanceof ServiceManager) {
            $container->addAbstractFactory($factory, false);
        }

        return $factory;
    }

    /**
     * Create and return DiAbstractServiceFactory instance
     *
     * For use with zend-servicemanager v2; proxies to __invoke().
     *
     * @param ServiceLocatorInterface $container
     * @return DiAbstractServiceFactory
     */
    public function createService(ServiceLocatorInterface $container)
    {
        return $this($container, DiAbstractServiceFactory::class);
    }
}
