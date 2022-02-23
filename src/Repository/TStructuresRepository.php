<?php

namespace App\Repository;

use App\Entity\TStructures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TStructures|null find($id, $lockMode = null, $lockVersion = null)
 * @method TStructures|null findOneBy(array $criteria, array $orderBy = null)
 * @method TStructures[]    findAll()
 * @method TStructures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TStructuresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TStructures::class);
    }

    // /**
    //  * @return TStructures[] Returns an array of TStructures objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TStructures
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
