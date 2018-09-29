<?php

// config/framework.php
$container->loadFromExtension('framework', array(
    'secret' => 'S0ME_SECRET',
    'templating' => array(
        'engines' => array('twig'),
    ),
    'profiler' => array(
        'only_exceptions' => false,
    ),
));

$container->loadFromExtension('doctrine', array(
    'dbal' => array(
        'default_connection' => 'default',
        'connections' => array(
            // configure these for your database server
            'default' => array(
                'url'            => '%env(DATABASE_URL)%',
                'driver'         => 'pdo_mysql',
                'server_version' => '5.7',
                'charset'        => 'utf8mb4',
            ),
            // configure these for your database server
            'customer' => array(
                'url'            => '%env(DATABASE_CUSTOMER_URL)%',
                'driver'         => 'pdo_mysql',
                'server_version' => '5.7',
                'charset'        => 'utf8mb4',
            ),
        ),
    )));