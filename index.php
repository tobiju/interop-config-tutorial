<?php

$loader = require 'vendor/autoload.php';
$loader->add('Tujo\\', __DIR__.'/library');

$ServiceLocator = new Tujo\ServiceLocator(include dirname('__FILE__')."/config/main.php");
$RepositoryManager= $ServiceLocator->get('repository');







