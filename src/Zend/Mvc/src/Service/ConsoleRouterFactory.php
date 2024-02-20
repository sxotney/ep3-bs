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
use Laminas\Console\Console;
use Laminas\Mvc\Router\RouteStackInterface;
use Laminas\ServiceManager\FactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;

class ConsoleRouterFactory implements FactoryInterface
{
    use RouterConfigTrait;

    /**
     * Create and return the console router
     *
     * @param  ContainerInterface $container
     * @param  string $name
     * @param  null|array $options
     * @return RouteStackInterface
     */
    public function __invoke(ContainerInterface $container, $name, array $options = null)
    {
        $config       = $container->has('config') ? $container->get('config') : [];

        // Defaults
        $class  = 'Laminas\Mvc\Router\Console\SimpleRouteStack';
        $config = isset($config['console']['router']) ? $config['console']['router'] : [];

        return $this->createRouter($class, $config, $container);
    }

    /**
     * Create and return RouteStackInterface instance
     *
     * For use with zend-servicemanager v2; proxies to __invoke().
     *
     * @param ServiceLocatorInterface $container
     * @return RouteStackInterface
     */
    public function createService(ServiceLocatorInterface $container)
    {
        return $this($container, RouteStackInterface::class);
    }
}
