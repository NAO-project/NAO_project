<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\DBAL\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\DBAL\\Migrations\\Tools\\Console\\Command\\ExecuteCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsExecuteDoctrineCommand.php';

return $this->services['console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();
