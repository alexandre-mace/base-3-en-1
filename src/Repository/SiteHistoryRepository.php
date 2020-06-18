<?php

namespace App\Repository;

use App\Entity\SiteHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SiteHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiteHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiteHistory[]    findAll()
 * @method SiteHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SiteHistory::class);
    }

    // /**
    //  * @return SiteHistory[] Returns an array of SiteHistory objects
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
    public function findOneBySomeField($value): ?SiteHistory
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
