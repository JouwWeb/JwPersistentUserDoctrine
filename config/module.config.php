<?php

return [
    'jwpersistentuser' => [
        'serieTokenEntityClass' => 'JwPersistentUserDoctrine\Model\SerieToken'
    ],
    'service_manager' => [
        'factories' => [
            'JwPersistentUser\Mapper\SerieToken' => 'JwPersistentUserDoctrine\Mapper\SerieTokenMapperFactory'
        ],
        'aliases' => [
            'JwPersistentUserDoctrine\ObjectManager' => 'doctrine.entitymanager.orm_default'
        ],
    ],
];
