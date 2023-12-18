<?php

use Framework\App;
use Framework\Container\Container;

require_once __DIR__.'/../vendor/autoload.php';

$container = new Container();

(new App($container))->boot();

$container->get(\App\Services\Email\EmailService::class)->sendQueuedEmails();


