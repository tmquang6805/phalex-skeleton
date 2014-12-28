<?php

// Composer autoloading
if (file_exists('vendor/autoload.php')) {
    include 'vendor/autoload.php';
}

if (class_exists(\Phalex\Mvc\Application::class)) {
    return;
}

$phalexPath = false;
if (is_dir('vendor/tmquang6805/phalex/library/Phalex')) {
    $phalexPath = __DIR__ . '/vendor/tmquang6805/phalex/library/Phalex';
} elseif (getenv('PHALCON_EXT_PATH')) {
    $phalexPath = getenv('PHALCON_EXT_PATH');
}

if ($phalexPath) {
    (new Phalcon\Loader())
        ->registerNamespaces([
            'Phalex' => $phalexPath
        ])
        ->register();
}

if (!class_exists(\Phalex\Mvc\Application::class)) {
    throw new RuntimeException('Unable to load Phalex.');
}
