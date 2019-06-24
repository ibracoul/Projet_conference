<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/hautelook/alice-bundle/src/Console/Command/Doctrine/DoctrineOrmLoadDataFixturesCommand.php';

return $this->services['hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command'] = new \Hautelook\AliceBundle\Console\Command\Doctrine\DoctrineOrmLoadDataFixturesCommand('hautelook:fixtures:load', ($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['hautelook_alice.loader'] ?? $this->load('getHautelookAlice_LoaderService.php')));
