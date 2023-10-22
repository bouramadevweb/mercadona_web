<?php

namespace App\Repository;

use App\Entity\Promotiontype;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Promotiontype>
 *
 * @method Promotiontype|null find($id, $lockMode = null, $lockVersion = null)
 * @method Promotiontype|null findOneBy(array $criteria, array $orderBy = null)
 * @method Promotiontype[]    findAll()
 * @method Promotiontype[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PromotiontypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Promotiontype::class);
    }

//    /**
//     * @return Promotiontype[] Returns an array of Promotiontype objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Promotiontype
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
