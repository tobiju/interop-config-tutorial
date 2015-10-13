<?php

// Composer autoloading
$loader = require 'vendor/autoload.php';
$loader->add('Tujo\\', dirname('__FILE__').'/src');

$config = include dirname('__FILE__')."/config/main.php";

// Run interop-config
$serviceLocator = new Tujo\ServiceLocator($config);
$repositoryManager = $serviceLocator->get('repository');







