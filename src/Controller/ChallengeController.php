<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ChallengeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Challenge;
use App\Form\ChallengeType;

class ChallengeController extends AbstractController
{
    #[Route('/challenges', name: 'app_challenges')]
    public function index(ChallengeRepository $challengeRepo): Response
    {
        $challenges = $challengeRepo->findAll();

        return $this->render('challenge/index.html.twig', [
            'challenges' => $challenges
        ]);
    }

  #[Route('/challenge/add', name: 'app_addformchallenge')]
public function addChallenge(Request $request, ManagerRegistry $doctrine): Response
{
    $em = $doctrine->getManager();
    $challenge = new Challenge();

    // Initialise les champs automatiques
    $challenge->setDatecreationn(new \DateTime());
    $challenge->setProgressionactuelle(0);
    $challenge->setAlerte(false);

    $form = $this->createForm(ChallengeType::class, $challenge);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($challenge);
        $em->flush();

        $this->addFlash('success', 'Challenge ajouté avec succès');

        return $this->redirectToRoute('app_challenges');
    }

    return $this->render('challenge/new.html.twig', [
        'form' => $form->createView(),
        'isEdit' => false,
    ]);
}


    #[Route('/challenge/edit/{id}', name: 'app_edit_challenge')]
    public function editChallenge(int $id, Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $challenge = $em->getRepository(Challenge::class)->find($id);

        if (!$challenge) {
            throw $this->createNotFoundException('Challenge non trouvé !');
        }

        $form = $this->createForm(ChallengeType::class, $challenge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Les valeurs modifiées sont automatiquement prises en compte
            $em->flush();

            $this->addFlash('success', 'Challenge modifié avec succès');

            return $this->redirectToRoute('app_challenges');
        }

        return $this->render('challenge/new.html.twig', [
            'form' => $form->createView(),
            'isEdit' => true,
        ]);
    }

    #[Route('/challenge/delete/{id}', name: 'app_delete_challenge', methods: ['POST'])]
    public function deleteChallenge(int $id, Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $challenge = $em->getRepository(Challenge::class)->find($id);

        if (!$challenge) {
            throw $this->createNotFoundException('Challenge non trouvé !');
        }

        // Vérifie le token CSRF
        if ($this->isCsrfTokenValid('delete' . $challenge->getId(), $request->request->get('_token'))) {
            $em->remove($challenge);
            $em->flush();
            $this->addFlash('success', 'Challenge supprimé avec succès');
        } else {
            $this->addFlash('error', 'Token invalide, suppression annulée');
        }

        return $this->redirectToRoute('app_challenges');
    }
    #[Route('/admin/challenge', name: 'admin_challenge_index')]
   public function rechercherchallenge(
    Request $request,
    ChallengeRepository $challengeRepository
): Response {
    $q = $request->query->get('q');

    if ($q) {
        $challenges = $challengeRepository->search($q);
    } else {
        $challenges = $challengeRepository->findAll();
    }

    return $this->render('challenge/index.html.twig', [
        'challenges' => $challenges,
    ]);
}

}
