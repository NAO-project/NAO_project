<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.v9CU7Sc' shared service.

return $this->privates['service_locator.v9CU7Sc'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('checktype' => function (): ?\App\Services\CheckUserRoleService {
    return ($this->privates['App\Services\CheckUserRoleService'] ?? $this->privates['App\Services\CheckUserRoleService'] = new \App\Services\CheckUserRoleService());
}, 'flusher' => function (): ?\App\Services\FlusherService {
    return ($this->privates['App\Services\FlusherService'] ?? $this->load(__DIR__.'/getFlusherServiceService.php'));
}, 'namer' => function (): ?\App\Services\UserFixerService {
    return ($this->privates['App\Services\UserFixerService'] ?? $this->load(__DIR__.'/getUserFixerServiceService.php'));
}));