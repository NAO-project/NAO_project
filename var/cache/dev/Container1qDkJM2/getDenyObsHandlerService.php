<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Services\DenyObsHandler' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Services\\DenyObsHandler.php';

return $this->privates['App\Services\DenyObsHandler'] = new \App\Services\DenyObsHandler(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php')), ($this->privates['App\Services\SubscribeDataGenerator\FlusherService'] ?? $this->load(__DIR__.'/getFlusherServiceService.php')));
