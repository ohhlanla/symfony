<?php
// app/config/config.php
$container->loadFromExtension('assetic', array(
    'debug' => '%kernel.debug%',
    'use_controller' => '%kernel.debug%',
    'filters' => array(
        'cssrewrite' => null,
    ),
    // ...
));

// ...