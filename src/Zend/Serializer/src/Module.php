<?php
/**
 * @link      http://github.com/laminas/laminas-serializer for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Laminas\Serializer;

class Module
{
    /**
     * Return default zend-serializer configuration for zend-mvc applications.
     */
    public function getConfig()
    {
        $provider = new ConfigProvider();

        return [
            'service_manager' => $provider->getDependencyConfig(),
        ];
    }

    /**
     * Register a specification for the SerializerAdapterManager with the ServiceListener.
     *
     * @param \Laminas\ModuleManager\ModuleManager $moduleManager
     * @return void
     */
    public function init($moduleManager)
    {
        $event = $moduleManager->getEvent();
        $container = $event->getParam('ServiceManager');
        $serviceListener = $container->get('ServiceListener');

        $serviceListener->addServiceManager(
            'SerializerAdapterManager',
            'serializers',
            'Laminas\ModuleManager\Feature\SerializerProviderInterface',
            'getSerializerConfig'
        );
    }
}
