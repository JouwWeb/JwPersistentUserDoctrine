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
    'doctrine' => [
        'driver' => [
            'orm_default' => [
                'drivers' => [
                    'JwPersistentUserDoctrine' => 'user_annotation_driver'
                ]
            ],
            'user_annotation_driver' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/JwPersistentUserDoctrine/Model']
            ],
        ]
    ],
];
