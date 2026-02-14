<?php

namespace App\Repository;

use App\Entity\Communication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Communication>
 */
class CommunicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Communication::class);
    }
    
    public function createQueryBuilderWithSearch(array $search = [])
    {
        $qb = $this->createQueryBuilder('c')
            ->orderBy('c.createdAt', 'DESC');
        
        if (!empty($search['id'])) {
            $qb->andWhere('c.id = :id')
               ->setParameter('id', $search['id']);
        }
        
        if (!empty($search['title'])) {
            $qb->andWhere('c.title LIKE :title')
               ->setParameter('title', '%' . $search['title'] . '%');
        }
        
        if (!empty($search['category'])) {
            $qb->andWhere('c.category = :category')
               ->setParameter('category', $search['category']);
        }
        
        if (!empty($search['status'])) {
            $qb->andWhere('c.status = :status')
               ->setParameter('status', $search['status']);
        }
        
        if (!empty($search['startDate'])) {
            $qb->andWhere('c.createdAt >= :startDate')
               ->setParameter('startDate', $search['startDate']);
        }
        
        if (!empty($search['endDate'])) {
            $qb->andWhere('c.createdAt <= :endDate')
               ->setParameter('endDate', $search['endDate']);
        }
        
        return $qb->getQuery();
    }
    
    public function findBySearchCriteria(array $search = [])
    {
        return $this->createQueryBuilderWithSearch($search)->getResult();
    }
    
    public function getStatistics(): array
    {
        return [
            'total' => $this->count([]),
            'open' => $this->count(['status' => 'open']),
            'pending' => $this->count(['status' => 'pending']),
            'closed' => $this->count(['status' => 'closed']),
            'byCategory' => $this->createQueryBuilder('c')
                ->select('c.category, COUNT(c.id) as count')
                ->groupBy('c.category')
                ->getQuery()
                ->getResult(),
            'byMonth' => $this->createQueryBuilder('c')
                ->select("DATE_FORMAT(c.createdAt, '%Y-%m') as month, COUNT(c.id) as count")
                ->groupBy('month')
                ->orderBy('month', 'ASC')
                ->getQuery()
                ->getResult()
        ];
    }
    public function search(array $criteria = [])
{
    $qb = $this->createQueryBuilder('c')
        ->orderBy('c.dateHeure', 'DESC');
    
    // Recherche par mot-clé
    if (!empty($criteria['keyword'])) {
        $keyword = $criteria['keyword'];
        $qb->andWhere('c.descriptionDetaillee LIKE :keyword OR c.lien LIKE :keyword')
           ->setParameter('keyword', '%' . $keyword . '%');
    }
    
    // Filtre par type
    if (!empty($criteria['type'])) {
        $qb->andWhere('c.type = :type')
           ->setParameter('type', $criteria['type']);
    }
    
    // Filtre par état
    if (!empty($criteria['etat'])) {
        $qb->andWhere('c.etat = :etat')
           ->setParameter('etat', $criteria['etat']);
    }
    
    // Filtre par date de début
    if (!empty($criteria['dateFrom'])) {
        $qb->andWhere('c.dateHeure >= :dateFrom')
           ->setParameter('dateFrom', $criteria['dateFrom']);
    }
    
    // Filtre par date de fin
    if (!empty($criteria['dateTo'])) {
        $dateTo = clone $criteria['dateTo'];
        $dateTo->modify('+1 day');
        $qb->andWhere('c.dateHeure < :dateTo')
           ->setParameter('dateTo', $dateTo);
    }
    
    return $qb->getQuery();
}
// Ajoutez cette méthode dans votre CommunicationRepository existant
public function findUpcoming(): array
{
    return $this->createQueryBuilder('c')
        ->where('c.dateHeure > :now')
        ->andWhere('c.etat IN (:states)')
        ->setParameter('now', new \DateTime())
        ->setParameter('states', ['planned', 'live'])
        ->orderBy('c.dateHeure', 'ASC')
        ->getQuery()
        ->getResult();
}
}