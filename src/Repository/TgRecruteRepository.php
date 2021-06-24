<?php

namespace App\Repository;

use App\Entity\TgRecrute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TgRecrute|null find($id, $lockMode = null, $lockVersion = null)
 * @method TgRecrute|null findOneBy(array $criteria, array $orderBy = null)
 * @method TgRecrute[]    findAll()
 * @method TgRecrute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TgRecruteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TgRecrute::class);
    }

    // /**
    //  * @return TgRecrute[] Returns an array of TgRecrute objects
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
    public function findOneBySomeField($value): ?TgReponse
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
