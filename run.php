<?php
use DI\ContainerBuilder;
use Di\Test\Test;

require 'vendor/autoload.php';

// We want to create an instance of Di\Test\Test and call the method ->test().
// So we utilize a dependency-injection-container to handle all the dependencies of Di\Test\Test.

$builder = new ContainerBuilder();
$builder->addDefinitions(__DIR__.'/config/di.php');
$container = $builder->build();

// This is the only occurrence of the di-container in the whole application:
$instance = $container->get(Test::class); // Build an instance of Di\Test\Test and resolve missing dependencies.
$container->call([$instance, 'test'], ['id' => 123]); // Call method ->test() and resolve missing dependencies.

// In the end, nowhere in our application is made any special change to get the class up and executed. We can add as
// many dependencies as we want. If we have too many dependencies in our tree, we can even utilize a lazy-load-proxy to
// get larger optional dependencies only loaded when needed.