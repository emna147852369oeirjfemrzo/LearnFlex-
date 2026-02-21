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
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\ChallengeResult;
use App\Service\GroqService;


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
if ($challenge->getQuestion()) {
    // IMPORTANT : setData sur le champ **avant handleRequest**
    $form->get('question')->setData(json_encode($challenge->getQuestion(), JSON_PRETTY_PRINT));
}
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {

     $questionData = $form->get('question')->getData();

    if ($questionData) {
        $questionArray = json_decode($questionData, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->addFlash('error', 'JSON invalide pour les questions.');
            return $this->render('challenge/new.html.twig', [
                'form' => $form->createView(),
                'isEdit' => false,
            ]);
        }
        $challenge->setQuestion($questionArray);
    }


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
if ($challenge->getQuestion()) {
    $form->get('question')->setData(json_encode($challenge->getQuestion(), JSON_PRETTY_PRINT));
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
    $questionData = $form->get('question')->getData();
if ($questionData) {
    $decoded = json_decode($questionData, true); // transforme JSON string -> array
    if (json_last_error() !== JSON_ERROR_NONE) {
        $this->addFlash('error', 'JSON invalide pour les questions.');
        return $this->render('challenge/new.html.twig', [
            'form' => $form->createView(),
            'isEdit' => $challenge->getId() ? true : false,
        ]);
    }
    $challenge->setQuestion($decoded); // maintenant c'est bien un array
}

            if ($challenge->getDernierScore() === null) {
    $challenge->setDernierScore(0);
}

if ($challenge->getDernierNiveau() === null) {
    $challenge->setDernierNiveau("debutant");
}

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
public function updateScore(Request $request, Challenge $challenge, EntityManagerInterface $em): JsonResponse
{
    $data = json_decode($request->getContent(), true);

    if (!$data || !isset($data['score'], $data['niveau'], $data['reponses'])) {
        return $this->json([
            'status' => 'error',
            'message' => 'Données invalides'
        ], 400);
    }

    $user = $this->getUser(); // l'étudiant connecté

    if (!$user) {
        return $this->json(['status'=>'error','message'=>'Utilisateur non connecté'], 401);
    }

    $challengeResult = new ChallengeResult();
    $challengeResult->setChallenge($challenge);
    $challengeResult->setUser($user);
    $challengeResult->setScore($data['score']);
    $challengeResult->setCreatedAt(new \DateTime());

    // Badge selon score
    $badge = $data['score'] >= 80 ? "🏆 Expert" :
             ($data['score'] >= 60 ? "🥇 Compétent" :
             ($data['score'] >= 40 ? "🥈 Apprenti" : "🥉 Novice"));
    $challengeResult->setBadges($badge);

    $em->persist($challengeResult);
    $em->flush();

    return $this->json(['status'=>'success']);
}

  #[Route('/leaderboard', name: 'leaderboard', methods: ['GET'])]
public function leaderboard(EntityManagerInterface $em): Response
{
    // Récupère les 10 meilleurs scores avec le user et le challenge liés
   $scores = $em->createQuery("
    SELECT cr
    FROM App\Entity\ChallengeResult cr
    WHERE cr.id IN (
        SELECT MAX(cr2.id)
        FROM App\Entity\ChallengeResult cr2
        GROUP BY cr2.user
    )
    ORDER BY cr.score DESC
")->getResult();

    // Définir les badges selon les seuils
    $badges = [
        20 => "🥉 Novice",
        40 => "🥈 Apprenti",
        60 => "🥇 Compétent",
        80 => "🏆 Expert",
    ];

    return $this->render('challenge/leaderboard.html.twig', [
        'scores' => $scores,
        'badges' => $badges,
    ]);
}
#[Route('/challenge/{id}/generate', name: 'challenge_generate_form', methods: ['GET'])]
    public function generateForm(Challenge $challenge): Response
    {
        return $this->render('challenge/generate.html.twig', [
            'challenge' => $challenge,
        ]);
    }

    // ── Appel API Groq + sauvegarde dans $challenge->question ─
    #[Route('/challenge/{id}/generate', name: 'challenge_generate_post', methods: ['POST'])]
    public function generateQuestions(
        Request        $request,
        Challenge      $challenge,
        GroqService    $groq,
        EntityManagerInterface $em
    ): Response {
        $sujet = $request->request->get('sujet', $challenge->getTitrec());
        $type  = $request->request->get('type', 'qcm');
        $count = (int) $request->request->get('count', 5);
        $level = $request->request->get('level', $challenge->getNiveaudifficulte() ?? 'intermédiaire');

        try {
            $result = $groq->generateQuestions($sujet, $type, $count, $level);

            // Sauvegarde dans le champ "question" (json) de l'entité Challenge
            $challenge->setQuestion($result);
            $em->flush();

            $this->addFlash('success', count($result['questions'] ?? []) . ' questions générées et sauvegardées !');

            return $this->render('challenge/generate_result.html.twig', [
                'challenge' => $challenge,
                'result'    => $result,
                'sujet'     => $sujet,
            ]);

        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur : ' . $e->getMessage());
            return $this->redirectToRoute('challenge_generate_form', ['id' => $challenge->getId()]);
        }

}
}