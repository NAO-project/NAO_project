<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_extension.form.http_foundation' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\RequestHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension.php';

return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->load(__DIR__.'/getForm_ServerParamsService.php'))));