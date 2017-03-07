<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

try {
    $autoload = __DIR__ . '/../vendor/autoload.php';
    if (!is_file($autoload)) {
        throw new Exception('Update composer');
    }

    require_once $autoload;

    echo (new App\Application())->main();
} catch (Exception $e) {
    echo '<pre>', $e->getMessage(), "\n", $e->getTraceAsString(), '</pre>';
}
