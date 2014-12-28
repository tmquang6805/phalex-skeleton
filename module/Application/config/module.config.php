<?php

namespace Application;

return [
    'error_handler' => [
        'options' => [
            'views_dir' => __DIR__ . '/../view/error',
            'template_500' => 'error',
            'template_404' => 'not-found'
        ],
    ],
    'view'   => [
        __NAMESPACE__ => __DIR__ . '/../view/'
    ],
    'router' => [
        'home'              => [
            'route'       => '/',
            'definitions' => [
                'module'     => __NAMESPACE__,
                'namespace'  => Controller::class,
                'controller' => 'index',
                'action'     => 'index'
            ],
        ],
        'controller/action' => [
            'route'       => '/:controller/:action',
            'definitions' => [
                'module'     => __NAMESPACE__,
                'namespace'  => Controller::class,
                'controller' => 1,
                'action'     => 2,
                'params'     => 3
            ],
        ],
    ],
];
