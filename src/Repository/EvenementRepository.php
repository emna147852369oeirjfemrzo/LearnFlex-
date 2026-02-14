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

    /**
     * Recherche des événements selon des critères (titre) et permet tri par heure de début.
     *
     * @param array $criteria ['titre' => '...', 'sort' => 'heuredebut', 'direction' => 'ASC|DESC']
     * @return Evenement[]
     */
    public function searchEvenements(array $criteria = []): array
    {
        $qb = $this->createQueryBuilder('e');

        if (!empty($criteria['titre'])) {
            $qb->andWhere('e.titre LIKE :titre')
               ->setParameter('titre', '%' . $criteria['titre'] . '%');
        }

        $direction = (isset($criteria['direction']) && strtoupper($criteria['direction']) === 'DESC') ? 'DESC' : 'ASC';

        if (!empty($criteria['sort']) && $criteria['sort'] === 'heuredebut') {
            $qb->orderBy('e.heuredebut', $direction);
        } else {
            $qb->orderBy('e.titre', 'ASC');
        }

        return $qb->getQuery()->getResult();
    }
}
