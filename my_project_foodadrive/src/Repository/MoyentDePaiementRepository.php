<?php

namespace App\Repository;

use App\Entity\MoyentDePaiement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MoyentDePaiement|null find($id, $lockMode = null, $lockVersion = null)
 * @method MoyentDePaiement|null findOneBy(array $criteria, array $orderBy = null)
 * @method MoyentDePaiement[]    findAll()
 * @method MoyentDePaiement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MoyentDePaiementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MoyentDePaiement::class);
    }

    // /**
    //  * @return MoyentDePaiement[] Returns an array of MoyentDePaiement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MoyentDePaiement
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
