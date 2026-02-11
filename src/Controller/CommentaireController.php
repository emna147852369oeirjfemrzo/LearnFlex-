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
use Symfony\Component\HttpFoundation\JsonResponse;


final class CommentaireController extends AbstractController
{
    #[Route('/commentaire', name: 'app_commentaire')]
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'controller_name' => 'CommentaireController',
        ]);
    }
#[Route('/examen/{id}/commentaires', name: 'app_examen_commentaires')]
public function affichercommentaire(
    int $id,
    Request $request,
    ExamenRepository $examenRepo,
    CommentaireRepository $commentaireRepo,
): Response {

    $examen = $examenRepo->find($id);
    if (!$examen) {
        throw $this->createNotFoundException('Examen introuvable');
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
        'auteur_selectionne' => $professeur,
        'date_selectionnee' => $date
    ]);
}
#[Route('/commentaire/add', name: 'commentaire_add', methods: ['POST'])]
public function add(Request $request, EntityManagerInterface $em): JsonResponse
{
    $user = $this->getUser();
    $content = $request->request->get('comment');
    $examenId = $request->request->get('examenId');

    if (!$content || !$examenId) {
        return $this->json(['success' => false, 'message' => 'Données manquantes'], 400);
    }

    $examen = $em->getRepository(Examen::class)->find($examenId);
    if (!$examen) {
        return $this->json(['success' => false, 'message' => 'Examen introuvable'], 404);
    }

    $comment = new Commentaire();
    $comment->setExamen($examen);
    $comment->setAuteur($user ? $user->getUsername() : 'Anonyme');
    $comment->setContenu($content);
    $comment->setDatecre(new \DateTime());
    $comment->setNbvue(0);
    $comment->setLikes(0);

    $em->persist($comment);
    $em->flush();

    return $this->json([
        'success' => true,
        'id' => $comment->getId(),
        'auteur' => $comment->getAuteur(),
        'contenu' => $comment->getContenu(),
        'date' => $comment->getDatecre()->format('d/m/Y'),
        'likes' => $comment->getLikes(),
        'nbvue' => $comment->getNbvue()
    ]);
}

  #[Route('/commentaire/like/{id}', name: 'commentaire_like', methods: ['POST'])]
    public function like(
        Commentaire $commentaire,
        EntityManagerInterface $em
    ): JsonResponse
    {
        $commentaire->setLikes($commentaire->getLikes() + 1);
        $em->flush();

        return new JsonResponse([
            'likes' => $commentaire->getLikes()
        ]);
    }
    #[Route('/commentaire/view/{id}', name: 'commentaire_view', methods: ['POST'])]
public function incrementView(Commentaire $commentaire, EntityManagerInterface $em): JsonResponse
{
    $commentaire->setNbvue($commentaire->getNbvue() + 1);
    $em->flush();

    return $this->json(['success' => true, 'nbvue' => $commentaire->getNbvue()]);
}
#[Route('/commentaire/edit/{id}', name: 'commentaire_edit', methods: ['POST'])]
public function editCommentaire(
    int $id,
    Request $request,
    CommentaireRepository $commentaireRepo,
    ManagerRegistry $doctrine
): JsonResponse {
    $comment = $commentaireRepo->find($id);

    if (!$comment) {
        return $this->json(['success' => false, 'message' => 'Commentaire introuvable']);
    }

    $contenu = $request->request->get('contenu');

    if (!$contenu) {
        return $this->json(['success' => false, 'message' => 'Le contenu est vide']);
    }

    $comment->setContenu($contenu);
    $doctrine->getManager()->flush();

    return $this->json(['success' => true]);
}
#[Route('/commentaire/delete/{id}', name: 'commentaire_delete', methods: ['POST'])]
public function deleteCommentaire(Request $request, Commentaire $commentaire, EntityManagerInterface $em): JsonResponse
{
    $em->remove($commentaire);
    $em->flush();

    return $this->json(['success' => true]);
}


}
