<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.saQ8x6M' shared service.

return $this->privates['service_locator.saQ8x6M'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('dashboardHandler' => function (): ?\App\Services\DashboardHandler {
    return ($this->privates['App\Services\DashboardHandler'] ?? $this->privates['App\Services\DashboardHandler'] = new \App\Services\DashboardHandler());
}));