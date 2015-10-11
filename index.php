<?php

// Composer autoloading
$loader = require 'vendor/autoload.php';
$loader->add('Tujo\\', dirname('__FILE__').'/library');

// Run interop-config
$ServiceLocator = new Tujo\ServiceLocator(include dirname('__FILE__')."/config/main.php");
$RepositoryManager= $ServiceLocator->get('repository');







