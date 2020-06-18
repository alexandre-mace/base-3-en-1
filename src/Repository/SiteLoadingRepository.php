<?php

namespace App\Repository;

use App\Entity\SiteLoading;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SiteLoading|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiteLoading|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiteLoading[]    findAll()
 * @method SiteLoading[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteLoadingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SiteLoading::class);
    }

    // /**
    //  * @return SiteLoading[] Returns an array of SiteLoading objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SiteLoading
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
