<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.9PxCMRQ' shared service.

return $this->privates['service_locator.9PxCMRQ'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('upload' => function (): ?\App\Services\Upload {
    return ($this->privates['App\Services\Upload'] ?? $this->privates['App\Services\Upload'] = new \App\Services\Upload($this));
}));
