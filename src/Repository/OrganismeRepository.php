<?php

namespace App\Repository;

use App\Entity\Organisme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Organisme>
 */
class OrganismeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Organisme::class);
    }
    

    //    /**
    //     * @return Organisme[] Returns an array of Organisme objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('o.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Organisme
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    /**
     * Recherche des organismes selon des critères (nom, taille) et permet tri.
     *
     * @param array $criteria ['nom'=>'...', 'taille'=>'...', 'sort'=>'tailleentreprise', 'direction'=>'ASC|DESC']
     * @return Organisme[]
     */
    public function searchOrganismes(array $criteria = []): array
    {
        $qb = $this->createQueryBuilder('o');

        if (!empty($criteria['nom'])) {
            $qb->andWhere('o.nom LIKE :nom')
               ->setParameter('nom', '%' . $criteria['nom'] . '%');
        }

        if (!empty($criteria['taille'])) {
            $qb->andWhere('o.tailleentreprise = :taille')
               ->setParameter('taille', $criteria['taille']);
        }

        $direction = (isset($criteria['direction']) && strtoupper($criteria['direction']) === 'DESC') ? 'DESC' : 'ASC';

        if (!empty($criteria['sort']) && $criteria['sort'] === 'tailleentreprise') {
            $qb->orderBy('o.tailleentreprise', $direction);
        } else {
            $qb->orderBy('o.nom', 'ASC');
        }

        return $qb->getQuery()->getResult();
    }
}
