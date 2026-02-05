<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ExamenRepository;
use App\Entity\Examen;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CommentaireRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\ExamenType;



final class CommentaireController extends AbstractController
{
    #[Route('/commentaire', name: 'app_commentaire')]
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'controller_name' => 'CommentaireController',
        ]);
    }
   #[Route('/examen/{id}/commentaires/{commentaireId?}', name: 'app_examen_commentaires')]
public function affichercommentaire(
    int $id,
    ?int $commentaireId,
    Request $request,
    ExamenRepository $examenRepo,
    CommentaireRepository $commentaireRepo,
    EntityManagerInterface $em
): Response {

    $examen = $examenRepo->find($id);
    if (!$examen) {
        throw $this->createNotFoundException('Examen introuvable');
    }

    // 🔹 Gestion du formulaire commentaire
    if ($commentaireId) {
        $commentaire = $commentaireRepo->find($commentaireId);
        if (!$commentaire) {
            throw $this->createNotFoundException('Commentaire introuvable');
        }
    } else {
        $commentaire = new Commentaire();
        $commentaire->setExamen($examen);
        $commentaire->setDatecre(new \DateTime());
    }

    $form = $this->createForm(CommentaireType::class, $commentaire);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($commentaire);
        $em->flush();

        return $this->redirectToRoute('app_examen_commentaires', [
            'id' => $examen->getId()
        ]);
    }

    // 🔹 Filtrage par auteur et date
    $professeur = $request->query->get('auteur'); // filtrer par professeur
    $date = $request->query->get('date');         // filtrer par date

    $qb = $commentaireRepo->createQueryBuilder('c')
        ->andWhere('c.examen = :examen')
        ->setParameter('examen', $examen);

    if ($professeur) {
        $qb->andWhere('c.auteur = :auteur')
           ->setParameter('auteur', $professeur);
    }

    if ($date) {
        $dateObj = new \DateTime($date);
        $qb->andWhere('c.datecre >= :date')
           ->setParameter('date', $dateObj);
    }

    $qb->orderBy('c.datecre', 'DESC'); // plus récents par défaut

    $commentairesFiltres = $qb->getQuery()->getResult();

    return $this->render('commentaire/index.html.twig', [
        'examen' => $examen,
        'commentaires' => $commentairesFiltres,
        'formCommentaire' => $form->createView(),
        'isEdit' => $commentaireId !== null,
        'auteur_selectionne' => $professeur,
        'date_selectionnee' => $date
    ]);
}

#[Route('/commentaire/delete/{id}', name: 'app_commentaire_delete')]
public function deleteCommentaire(
    $id,
    CommentaireRepository $commentaireRepo,
    ManagerRegistry $m
): Response
{
    $em = $m->getManager();                 // Récupère l'EntityManager
    $commentaire = $commentaireRepo->find($id); // Cherche le commentaire

    if (!$commentaire) {
        throw $this->createNotFoundException("Commentaire introuvable pour l'id $id");
    }

    // Pour revenir à la page des commentaires du bon examen
    $examenId = $commentaire->getExamen()->getId();

    $em->remove($commentaire);  // Supprime l'entité
    $em->flush();               // Applique la suppression

    return $this->redirectToRoute('app_examen_commentaires', [
        'id' => $examenId
    ]);
}
}
