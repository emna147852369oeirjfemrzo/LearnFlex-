<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evenement>
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    //    /**
    //     * @return Evenement[] Returns an array of Evenement objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Evenement
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function searchEvenements(array $criteria = [])
{
    $qb = $this->createQueryBuilder('e');

    // 🔍 Recherche par titre
    if (!empty($criteria['titre'])) {
        $qb->andWhere('e.titre LIKE :titre')
           ->setParameter('titre', '%' . $criteria['titre'] . '%');
    }

    // 🔽 Tri
    if (!empty($criteria['sort'])) {
        $direction = $criteria['direction'] ?? 'ASC';
        $qb->orderBy('e.' . $criteria['sort'], $direction);
    } else {
        $qb->orderBy('e.id', 'DESC');
    }

    return $qb->getQuery()->getResult();
}

}
