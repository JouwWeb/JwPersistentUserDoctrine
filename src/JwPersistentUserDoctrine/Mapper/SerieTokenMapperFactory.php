<?php

namespace JwPersistentUserDoctrine\Mapper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Interop\Container\ContainerInterface;

class SerieTokenMapperFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $mapper = new SerieTokenMapper;

        $mapper->setObjectManager($container->get('JwPersistentUserDoctrine\ObjectManager'));
        $mapper->setPersistentUserOptions($container->get('JwPersistentUser\ModuleOptions'));

        return $mapper;
    }

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return $this($serviceLocator->getServiceLocator(), 'JwPersistentUser\Mapper\SerieToken');
    }
}
