<?php
/**
 * @link      http://github.com/laminas/laminas-validator for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Laminas\Validator;

/**
 * Hint to the zend-modulemanager ServiceListener that a module provides validators.
 *
 * Module classes implementing this interface hint to
 * Laminas\ModuleManager\ServiceListener that they provide validators for the
 * ValidatorPluginManager.
 *
 * For users of zend-mvc/zend-modulemanager v2, this poses no backwards-compatibility
 * break as the method getValidatorConfig is still duck-typed within Laminas\Validator\Module
 * when providing configuration to the ServiceListener.
 */
interface ValidatorProviderInterface
{
    /**
     * Provide plugin manager configuration for validators.
     *
     * @return array
     */
    public function getValidatorConfig();
}
