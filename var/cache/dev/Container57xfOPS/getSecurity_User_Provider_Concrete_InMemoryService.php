<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.user.provider.concrete.in_memory' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\User\\UserInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\User\\AdvancedUserInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\User\\User.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\User\\UserProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\User\\InMemoryUserProvider.php';

$this->privates['security.user.provider.concrete.in_memory'] = $instance = new \Symfony\Component\Security\Core\User\InMemoryUserProvider();

$instance->createUser(new \Symfony\Component\Security\Core\User\User('admin', 'admin', array(0 => 'ROLE_ADMIN')));

return $instance;
