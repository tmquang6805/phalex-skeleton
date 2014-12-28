<?php

return [
    // This must be an array of module namespaces used in the application
    'modules'               => [
        'Application',
    ],
    // This must be an array of paths in which modules reside.
    // The application try to auto load module namespaces via these paths
    'autoload_module_paths' => [
        './module',
    ],
    // Paths from which to glob configuration files after modules are loaded.
    // These effectively override configuration provided by modules themselves.
    // Path use GLOB_BRACE notation
    'config_glob_paths'     => [
        'config/autoload/{,*.}{global,local}.php'
    ],
    // Whether or not to enable a configuration cache.
    // If enabled, the merged configuration will be cached and used in subsequent requests
    // Default disable.
    'cache_config'          => [
        'enable'  => false,
        'adapter' => Phalex\Config\Cache\File::class,
        'options' => [
            'key' => 'string',
            'dir' => 'data/cache/',
        ],
    ],
    // Whether or not to enable a module class map cache
    // If enable, creates a module class map cache which will be used by in future requests,
    // to reduce the autoloading process.
    // Default disable
    'cache_module'          => [
        'enable'  => false,
        'adapter' => Phalex\Mvc\Module\Cache\File::class,
        'options' => [
            'key' => 'string',
            'dir' => 'data/cache/',
        ],
    ],
];
