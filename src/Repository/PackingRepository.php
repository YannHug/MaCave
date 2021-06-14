<?php

namespace App\Repository;

use App\Entity\Packing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Packing|null find($id, $lockMode = null, $lockVersion = null)
 * @method Packing|null findOneBy(array $criteria, array $orderBy = null)
 * @method Packing[]    findAll()
 * @method Packing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PackingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Packing::class);
    }

    // /**
    //  * @return Packing[] Returns an array of Packing objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Packing
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
