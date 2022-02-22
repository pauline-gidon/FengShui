<?php

namespace App\Repository;

use App\Entity\FengShuiController;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FengShuiController|null find($id, $lockMode = null, $lockVersion = null)
 * @method FengShuiController|null findOneBy(array $criteria, array $orderBy = null)
 * @method FengShuiController[]    findAll()
 * @method FengShuiController[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FengShuiControllerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FengShuiController::class);
    }

    // /**
    //  * @return FengShuiController[] Returns an array of FengShuiController objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FengShuiController
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
