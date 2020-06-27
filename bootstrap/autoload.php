<?php

// Define minimum supported PHP version
define('AKAUNTING_PHP', '7.2.5');

// Check PHP version
if (version_compare(PHP_VERSION, AKAUNTING_PHP, '<')) {
    die('ERROR: Your host needs to use PHP ' . AKAUNTING_PHP . ' or higher to run Akaunting');
}

define('LARAVEL_START', microtime(true));

// Load composer for core
require __DIR__ . '/../vendor/autoload.php';

// Load composer for modules
foreach (glob(__DIR__ . '/../modules/*') as $folder) {
    $autoload = $folder . '/vendor/autoload.php';

    if (!is_file($autoload)) {
        continue;
    }

    require $autoload;
}
