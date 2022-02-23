<?php

namespace App\Repository;

use App\Entity\StructureDiscipline;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StructureDiscipline|null find($id, $lockMode = null, $lockVersion = null)
 * @method StructureDiscipline|null findOneBy(array $criteria, array $orderBy = null)
 * @method StructureDiscipline[]    findAll()
 * @method StructureDiscipline[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StructureDisciplineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StructureDiscipline::class);
    }

    // /**
    //  * @return StructureDiscipline[] Returns an array of StructureDiscipline objects
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
    public function findOneBySomeField($value): ?StructureDiscipline
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
