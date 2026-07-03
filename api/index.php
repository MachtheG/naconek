<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Fixed paths to jump up one directory level
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->useStoragePath('/tmp/storage');

// Create the necessary directory structures inside /tmp on the fly
mkdir(-p '/tmp/storage/framework/views', 0755, true);
mkdir(-p '/tmp/storage/framework/cache', 0755, true);
mkdir(-p '/tmp/storage/framework/sessions', 0755, true);
mkdir(-p '/tmp/storage/logs', 0755, true);

$app->handleRequest(Request::capture());

$app->handleRequest(Request::capture());