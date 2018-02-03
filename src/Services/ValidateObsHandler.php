<?php

// src/Services/DowngradeUserHandler.php
namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use App\Services\SubscribeDataGenerator\FlusherService;
use App\Entity\Observations;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class ValidateObsHandler
{
    private $em;
    private $obsRepo;
    private $flusher;
    private $checker;
    
    public function __construct(EntityManagerInterface $em, FlusherService $flusher,AuthorizationCheckerInterface $checker)
    {
        $this->em = $em;
        $this->obsRepo = $this->em->getRepository(Observations::class);
        $this->flusher = $flusher;
        $this->checker = $checker;
    }
    
    private function getObs($id)
    {
        $obs = $this->obsRepo->findById($id);
        return $obs;
    }
    
    public function validateObs($id)
    {
        if($this->checker->isGranted('ROLE_ORGANIZER'))
        {
            $obs = $this->getObs($id);
            $obs->setValidated(true);
            $this->flusher->flushEntity($obs);
        }
        else
        {
           throw new AccessDeniedException("Accès refusé. Votre compte n'a pas les droits nécéssaires pour acceder à cette fonctionnalité" );
        }
    }
}

