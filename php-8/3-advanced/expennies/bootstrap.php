<?php

declare(strict_types = 1);

use Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config/path_constants.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

return require CONFIG_PATH . '/container/container.php';