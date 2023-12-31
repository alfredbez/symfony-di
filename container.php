<?php

require 'vendor/autoload.php';

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;


$container = new ContainerBuilder();
$loader = new YamlFileLoader($container, new FileLocator(__DIR__));
$loader->load('services.yml');
$container->compile();

var_dump($container->has(Acme\SymfonyDiTest\Foo::class));
var_dump($container->has(Acme\SymfonyDiTest\FooInterface::class));
