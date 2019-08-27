#!/usr/bin/env php
<?php

use CultuurNet\EntryJsonDemo\Console\EntryCommand;
use CultuurNet\EntryJsonDemo\Console\InstallCommand;
use Knp\Provider\ConsoleServiceProvider;

require_once __DIR__ . '/../vendor/autoload.php';

/** @var \Silex\Application $app */
$app = require __DIR__ . '/../bootstrap.php';

$app->register(
    new ConsoleServiceProvider(),
    [
        'console.name'              => 'entryjsondemo',
        'console.version'           => '1.0.0',
        'console.project_directory' => __DIR__.'/..'
    ]
);

/** @var \Knp\Console\Application $consoleApp */
$consoleApp = $app['console'];

$consoleApp->add(
    new EntryCommand($app['entry'])
);

$consoleApp->add(
        new InstallCommand()
);

$consoleApp->run();
