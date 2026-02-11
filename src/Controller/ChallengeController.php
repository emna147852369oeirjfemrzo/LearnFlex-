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
use Symfony\Component\HttpFoundation\JsonResponse;


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
                $photoFile = $form->get('images')->getData();
        if ($photoFile) {
            $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = $originalFilename.'-'.uniqid().'.'.$photoFile->guessExtension();
            try {
                $photoFile->move(
                    $this->getParameter('challenges_photos_directory'),
                    $newFilename
                );
                $challenge->setImages($newFilename);
            } catch (FileException $e) {
                // Gérer l'erreur de téléchargement
                $this->addFlash('error', 'Erreur lors du téléchargement de la photo');
            }
        }
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


#[Route('/admin/challenges', name: 'app_challenges')]
public function triechallenge(
    Request $request,
    ChallengeRepository $challengeRepository
): Response {

    $etat = $request->query->get('etat', 'all');
    $q = $request->query->get('q');

    if ($q) {
        // recherche + filtre état (optionnel)
        $challenges = $challengeRepository->searchByEtat($q, $etat);
    } else {
        // filtre état simple
        $challenges = $challengeRepository->findByEtat($etat);
    }

    return $this->render('challenge/index.html.twig', [
        'challenges' => $challenges,
        'etat_selectionne' => $etat,
    ]);
}

#[Route('/admin/challenge/pdf/{id}', name: 'app_challenge_pdf')]
public function pdfchallenge(Challenge $challenge): Response
{
    $html = $this->renderView('challenge/pdf.html.twig', [
        'challenge' => $challenge
    ]);

    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $pdfContent = $dompdf->output();

    return new Response($pdfContent, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="Challenge_'.$challenge->getTitrec().'.pdf"'
    ]);
}
 #[Route('/challenge/{id}/update-score', name: 'challenge_update_score', methods: ['POST'])]
public function updateScore(Challenge $challenge, Request $request, ManagerRegistry $doctrine): JsonResponse
{
    $data = json_decode($request->getContent(), true);

    if (!$data) {
        return new JsonResponse(['status' => 'error', 'message' => 'Données invalides'], 400);
    }

    $score = $data['score'] ?? null;
    $niveau = $data['niveau'] ?? null;
    $reponses = $data['reponses'] ?? [];

    if ($score === null || $niveau === null) {
        return new JsonResponse(['status' => 'error', 'message' => 'Score ou niveau manquant'], 400);
    }

    $challenge->setProgressionactuelle($score);
    $challenge->setNiveauatteint($niveau);

    $em = $doctrine->getManager();
    $em->persist($challenge);
    $em->flush();

    return new JsonResponse(['status' => 'success']);
}
}
