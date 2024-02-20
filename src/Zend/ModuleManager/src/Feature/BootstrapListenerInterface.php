<?php
/**
 * @link      https://github.com/laminas/laminas-modulemanager for the canonical source repository
 * @copyright Copyright (c) 2005-2019 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/laminas/laminas-modulemanager/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ModuleManager\Feature;

use Laminas\EventManager\EventInterface;

/**
 * Bootstrap listener provider interface
 */
interface BootstrapListenerInterface
{
    /**
     * Listen to the bootstrap event
     *
     * @param EventInterface $e
     * @return void
     */
    public function onBootstrap(EventInterface $e);
}
