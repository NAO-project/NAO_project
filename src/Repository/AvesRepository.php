<?php

namespace App\Repository;

use App\Entity\Aves;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class AvesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Aves::class);
    }

    
    public function findByVernName($vernName)
    {
        return $this->createQueryBuilder('a')
           ->where('a.vern_name like :vern_name')->setParameter('vern_name', '%'.$vernName.'%')
            ->orderBy('a.vern_name', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findOneByCdName($cd_name)
    {
        return $this->createQueryBuilder('a')
            ->where('a.cd_name = :cd_name')->setParameter('cd_name', $cd_name)
            ->getQuery()
            ->getOneOrNullResult()
        ;    
    }
    
}
