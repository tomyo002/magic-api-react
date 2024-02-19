<?php

namespace App\Repository;

use App\Entity\KeywordCard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<KeywordCard>
 *
 * @method KeywordCard|null find($id, $lockMode = null, $lockVersion = null)
 * @method KeywordCard|null findOneBy(array $criteria, array $orderBy = null)
 * @method KeywordCard[]    findAll()
 * @method KeywordCard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KeywordCardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KeywordCard::class);
    }

//    /**
//     * @return KeywordCard[] Returns an array of KeywordCard objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('k.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?KeywordCard
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
