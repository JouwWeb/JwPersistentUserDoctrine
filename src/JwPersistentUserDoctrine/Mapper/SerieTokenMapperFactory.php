<?php

namespace JwPersistentUserDoctrine\Mapper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class SerieTokenMapperFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $mapper = new SerieTokenMapper;

        $mapper->setObjectManager($serviceLocator->get('JwPersistentUserDoctrine\ObjectManager'));
        $mapper->setPersistentUserOptions($serviceLocator->get('JwPersistentUser\Options'));

        return $mapper;
    }
}
