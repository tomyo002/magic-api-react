<?php

namespace App\Repository;

use App\Entity\IconElt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IconElt>
 *
 * @method IconElt|null find($id, $lockMode = null, $lockVersion = null)
 * @method IconElt|null findOneBy(array $criteria, array $orderBy = null)
 * @method IconElt[]    findAll()
 * @method IconElt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IconEltRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IconElt::class);
    }

//    /**
//     * @return IconElt[] Returns an array of IconElt objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?IconElt
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
