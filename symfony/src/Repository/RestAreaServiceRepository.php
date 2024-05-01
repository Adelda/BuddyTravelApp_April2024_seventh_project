<?php

namespace App\Repository;

use App\Entity\RestAreaService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RestAreaService>
 *
 * @method RestAreaService|null find($id, $lockMode = null, $lockVersion = null)
 * @method RestAreaService|null findOneBy(array $criteria, array $orderBy = null)
 * @method RestAreaService[]    findAll()
 * @method RestAreaService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RestAreaServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RestAreaService::class);
    }

    //    /**
    //     * @return RestAreaService[] Returns an array of RestAreaService objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?RestAreaService
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
