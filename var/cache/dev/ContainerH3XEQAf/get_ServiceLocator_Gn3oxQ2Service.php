<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Gn3oxQ2' shared service.

return $this->privates['.service_locator.Gn3oxQ2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'comment' => ['privates', '.errored..service_locator.Gn3oxQ2.App\\Entity\\Comment', NULL, 'Cannot autowire service "debug.argument_resolver.variadic.inner": it references class "App\\Entity\\Comment" but no such service exists.'],
], [
    'comment' => 'App\\Entity\\Comment',
]);
