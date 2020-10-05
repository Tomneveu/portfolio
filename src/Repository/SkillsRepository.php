<?php

namespace App\Repository;

use App\Entity\Skills;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Skills|null find($id, $lockMode = null, $lockVersion = null)
 * @method Skills|null findOneBy(array $criteria, array $orderBy = null)
 * @method Skills[]    findAll()
 * @method Skills[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkillsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Skills::class);
    }

    // /**
    //  * @return Skills[] Returns an array of Skills objects
    //  */

    public function findAll()
    {
        return $this->findBy(array(), array('proprieties' => 'ASC'));
    }

    public function findProps($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.proprieties = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Skills
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
