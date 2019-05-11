<?php 
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// very simple autloader
spl_autoload_register (function ($class) {
    $filename = __DIR__ . '/../lib/' . str_replace('\\', DIRECTORY_SEPARATOR, $class);
    if (file_exists($filename)) {
        include ($filename);
    }
});