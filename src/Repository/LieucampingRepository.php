<?php

namespace App\Repository;

use App\Entity\Lieucamping;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lieucamping>
 *
 * @method Lieucamping|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lieucamping|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lieucamping[]    findAll()
 * @method Lieucamping[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LieucampingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lieucamping::class);
    }

//    /**
//     * @return Lieucamping[] Returns an array of Lieucamping objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Lieucamping
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
