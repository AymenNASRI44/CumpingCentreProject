<?php

namespace App\Repository;

use App\Entity\Favorit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Favorit>
 *
 * @method Favorit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Favorit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Favorit[]    findAll()
 * @method Favorit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FavoritRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Favorit::class);
    }

//    /**
//     * @return Favorit[] Returns an array of Favorit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Favorit
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
