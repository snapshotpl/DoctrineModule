<?php

declare(strict_types=1);

return [
    'modules' => [
        'Laminas\Cache',
        'Laminas\Form',
        'Laminas\Mvc\Console',
        'Laminas\Paginator',
        'Laminas\Router',
        'Laminas\Validator',
        'DoctrineModule',
    ],
    'module_listener_options' => [
        'config_glob_paths' => [],
        'module_paths' => [],
    ],
];
