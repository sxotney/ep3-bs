<?php
/**
 * @link      https://github.com/laminas/laminas-modulemanager for the canonical source repository
 * @copyright Copyright (c) 2005-2019 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/laminas/laminas-modulemanager/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ModuleManager\Listener;

/**
 * Config merger interface
 */
interface ConfigMergerInterface
{
    /**
     * getMergedConfig
     *
     * @param  bool $returnConfigAsObject
     * @return mixed
     */
    public function getMergedConfig($returnConfigAsObject = true);

    /**
     * setMergedConfig
     *
     * @param  array $config
     * @return ConfigMergerInterface
     */
    public function setMergedConfig(array $config);
}
