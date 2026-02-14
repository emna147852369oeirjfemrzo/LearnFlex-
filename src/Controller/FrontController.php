<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ChallengeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Challenge;
use App\Repository\ExamenRepository;
use App\Form\ChallengeType;
use App\Form\ExamenType;
use App\Repository\EvenementRepository;
use App\Repository\OrganismeRepository;
use App\Entity\Evenement;
use App\Entity\Organisme;
use App\Entity\Examen;
use App\Form\EvenementType;
use App\Form\OrganismeType;
use App\Entity\Quiz;
use App\Repository\QuizRepository;
use App\Repository\ReponseRepository;
use App\Entity\Publication;
use App\Entity\Communication;
use App\Form\PublicationType;
use App\Form\CommunicationType;
use App\Repository\PublicationRepository;
use App\Repository\CommunicationRepository;
use Doctrine\ORM\EntityManagerInterface;





final class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
#[Route('/evaluation', name: 'front_evaluation')]
    public function afficherchallengef(
        ChallengeRepository $challengeRepo
    ): Response
    {
        // Récupérer les challenges actifs depuis la base
        $challenges = $challengeRepo->findBy(
            ['etat' => 'actif'],
            ['datecreationn' => 'DESC']
        );

        return $this->render('front/evaluation.html.twig', [
            'challenges' => $challenges,
        ]);
    }


#[Route('/challenge/{id}', name: 'front_challenge')]
public function voirChallenge(Challenge $challenge): Response
{
    return $this->render('front/challenge.html.twig', [
        'challenge' => $challenge
    ]);
}

#[Route('/examen/{niveau}', name: 'front_examen')]
public function voirExamen(string $niveau, ExamenRepository $repo)
{
    $examen = $repo->findOneBy([
    'niveauexamen' => $niveau
]);


    if (!$examen) {
        throw $this->createNotFoundException('Aucun examen pour ce niveau');
    }

    return $this->render('front/examen.html.twig', [
                'niveau' => $niveau,

        'examen' => $examen
    ]);
}
#[Route('/etudiant/evenements', name: 'etudiant_evenements')]
    public function listEvenements(EvenementRepository $evenementRepository): Response
    {
        // Récupérer tous les événements, triés par date de début
        $evenements = $evenementRepository->findBy([], ['datedebut' => 'ASC']);

        return $this->render('front/evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }

    // Afficher les détails d'un événement
    #[Route('/etudiant/evenement/{id}', name: 'etudiant_evenement_show')]
    public function showEvenement(Evenement $evenement): Response
    {
        return $this->render('front/evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    

    #[Route('/orientation', name: 'app_orientation')]
    public function orientation(EvenementRepository $evenementRepository): Response
    {
        $evenements = $evenementRepository->findBy([], ['datedebut' => 'ASC']);

        return $this->render('front/orientation.html.twig', [
            'evenements' => $evenements,
        ]);
    }

    /**
     * Liste des organismes disponibles (front public).
     */
    #[Route('/front/organismes', name: 'front_organismes')]
    public function organismes(OrganismeRepository $organismeRepository): Response
    {
        $organismes = $organismeRepository->findBy([], ['nom' => 'ASC']);

        return $this->render('front/organismes.html.twig', [
            'organismes' => $organismes,
        ]);
    }
    #[Route('/front/organisme/{id}', name: 'front_organisme_show')]
        public function showOrganisme(
            int $id,
            OrganismeRepository $organismeRepository
        ): Response
        {
            $organisme = $organismeRepository->find($id);

            if (!$organisme) {
                throw $this->createNotFoundException('Organisme non trouvé');
            }

            return $this->render('front/organisme_show.html.twig', [
                'organisme' => $organisme,
            ]);
        }

    #[Route('/quiz', name: 'front_quiz')]
    public function indexQ(QuizRepository $quizRepository, Request $request): Response
    {
        $quizId = $request->query->get('id'); // récupérer l'id si fourni

        if ($quizId) {
            $quiz = $quizRepository->find($quizId);
            if ($quiz) {
                // forcer l'affichage du quiz demandé
                return $this->render('front/quiz.html.twig', ['quiz' => $quiz]);
            }
        }

        // sinon, comportement aléatoire
        $quizzes = $quizRepository->findBy(['etat' => 'active']);

        if (empty($quizzes)) {
            return $this->render('front/quiz.html.twig', ['quiz' => null]);
        }

        $session = $request->getSession();
        $seenQuizIds = $session->get('seen_quiz_ids', []);
        $availableQuizzes = array_filter($quizzes, fn($q) => !in_array($q->getId(), $seenQuizIds));

        if (empty($availableQuizzes)) {
            $session->remove('seen_quiz_ids');
            $availableQuizzes = $quizzes;
            $seenQuizIds = [];
        }

        $quiz = $availableQuizzes[array_rand($availableQuizzes)];
        $seenQuizIds[] = $quiz->getId();
        $session->set('seen_quiz_ids', $seenQuizIds);

        return $this->render('front/quiz.html.twig', ['quiz' => $quiz]);
    }

    #[Route('/quiz/result', name: 'quiz_result', methods: ['POST'])]
    public function result(Request $request, ReponseRepository $reponseRepo, QuizRepository $quizRepository): Response
    {
        $reponseId = $request->request->get('reponse');
        $reponse = $reponseRepo->find($reponseId);

        $correct = $reponse?->isEstCorrecte() ?? false;

        // récupérer la session pour gérer les quiz déjà vus
        $session = $request->getSession();
        $seenQuizIds = $session->get('seen_quiz_ids', []);

        // ajouter le quiz actuel aux vus
        $quizId = $request->request->get('quiz_id');
        if ($quizId && !in_array($quizId, $seenQuizIds)) {
            $seenQuizIds[] = (int)$quizId;
            $session->set('seen_quiz_ids', $seenQuizIds);
        }

        // récupérer tous les quiz actifs
        $quizzes = $quizRepository->findBy(['etat' => 'active']);

        // filtrer ceux déjà vus
        $availableQuizzes = array_filter($quizzes, fn($q) => !in_array($q->getId(), $seenQuizIds));

        // si tous les quiz ont été vus, reset
        if (empty($availableQuizzes)) {
            $session->remove('seen_quiz_ids');
            $availableQuizzes = $quizzes;
        }

        // choisir le prochain quiz
        $nextQuiz = $availableQuizzes[array_rand($availableQuizzes)];

        return $this->render('front/result.html.twig', [
            'correct' => $correct,
            'quiz' => $nextQuiz
        ]);
    }

  #[Route('/front', name: 'app_front_old')]
    public function frontOld(): Response
    {
        return $this->redirectToRoute('app_front');
    }

    #[Route('/forum', name: 'forum_index')]
    public function forum(
        PublicationRepository $publicationRepository,
        CommunicationRepository $communicationRepository
    ): Response
    {
        // Récupérer TOUTES les publications
        $publications = $publicationRepository->findAll();
        
        // Récupérer TOUTES les communications
        $communications = $communicationRepository->findAll();
        
        // Filtrer les communications live et à venir
        $now = new \DateTime();
        $liveCommunications = [];
        $upcomingCommunications = [];
        
        foreach ($communications as $communication) {
            if ($communication->getEtat() === 'en_cours') {
                $liveCommunications[] = $communication;
            } elseif ($communication->getDateHeure() > $now && 
                     $communication->getEtat() === 'programmee') {
                $upcomingCommunications[] = $communication;
            }
        }

        return $this->render('front/forum.html.twig', [
            'publications' => $publications,
            'upcoming_communications' => $upcomingCommunications,
            'live_communications' => $liveCommunications,
        ]);
    }

    #[Route('/forum/publication/{id}', name: 'forum_publication_show', requirements: ['id' => '\d+'])]
    public function showPublication(
        Publication $publication,
        CommunicationRepository $communicationRepository
    ): Response
    {
        // Communications liées à cette publication
       $communications = $communicationRepository->findBy(['publication' => $publication]);

        return $this->render('front/publication_show.html.twig', [
            'publication' => $publication,
            'communications' => $communications,
        ]);
    }

    #[Route('/forum/publication/new', name: 'forum_publication_new')]
    public function newPublication(Request $request, EntityManagerInterface $entityManager): Response
    {
        $publication = new Publication();
        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($publication);
            $entityManager->flush();

            $this->addFlash('success', 'Publication créée avec succès !');
            return $this->redirectToRoute('forum_publication_show', ['id' => $publication->getId()]);
        }

        return $this->render('front/publication_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/forum/communication', name: 'forum_communication_index', methods: ['GET'])]
    public function communicationIndex(CommunicationRepository $communicationRepository): Response
    {
        $communications = $communicationRepository->findAll();
        
        return $this->render('front/communication_index.html.twig', [
            'communications' => $communications,
        ]);
    }

    #[Route('/forum/communication/{id}', name: 'forum_communication_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function showCommunication(Communication $communication): Response
    {
        return $this->render('front/communication_show.html.twig', [
            'communication' => $communication,
        ]);
    }

    #[Route('/forum/communication/new', name: 'forum_communication_new')]
    public function newCommunication(Request $request, EntityManagerInterface $entityManager): Response
    {
        $communication = new Communication();
        $form = $this->createForm(CommunicationType::class, $communication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($communication);
            $entityManager->flush();

            $this->addFlash('success', 'Communication programmée avec succès !');
            return $this->redirectToRoute('forum_communication_index');
        }

        return $this->render('front/communication_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/forum/communication/{id}/edit', name: 'forum_communication_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function editCommunication(
        Request $request, 
        Communication $communication,
        EntityManagerInterface $entityManager
    ): Response
    {
        $form = $this->createForm(CommunicationType::class, $communication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Communication mise à jour avec succès !');
            return $this->redirectToRoute('forum_communication_show', ['id' => $communication->getId()]);
        }

        return $this->render('front/communication_edit.html.twig', [
            'communication' => $communication,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/forum/communication/{id}/delete', name: 'forum_communication_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function deleteCommunication(
        Request $request, 
        Communication $communication,
        EntityManagerInterface $entityManager
    ): Response
    {
        if ($this->isCsrfTokenValid('delete'.$communication->getId(), $request->request->get('_token'))) {
            $entityManager->remove($communication);
            $entityManager->flush();
            
            $this->addFlash('success', 'Communication supprimée avec succès !');
        }

        return $this->redirectToRoute('forum_communication_index');
    }

    #[Route('/forum/communication/{id}/join', name: 'forum_communication_join', requirements: ['id' => '\d+'])]
    public function joinCommunication(Communication $communication): Response
    {
        if ($communication->getEtat() !== 'en_cours') {
            $this->addFlash('error', 'Cette communication n\'est pas en direct.');
            return $this->redirectToRoute('forum_index');
        }

        if (!$communication->getLien()) {
            $this->addFlash('error', 'Aucun lien disponible pour cette communication.');
            return $this->redirectToRoute('forum_index');
        }

        // Redirection vers le lien
        return $this->redirect($communication->getLien());
    }
    
    #[Route('/forum/chat', name: 'communication_chat')]
    public function chat(CommunicationRepository $communicationRepository): Response
    {
        $communications = $communicationRepository->findBy(
            [],
            ['dateHeure' => 'DESC'],
            10
        );
        
        return $this->render('front/communication_chat.html.twig', [
            'communications' => $communications,
        ]);
    }
    
    #[Route('/check-messages', name: 'check_messages')]
    public function checkMessages(CommunicationRepository $repo): JsonResponse
    {
        $count = $repo->count([]);
        $messages = $repo->findBy([], ['id' => 'DESC'], 5);
        
        $data = [];
        foreach ($messages as $msg) {
            $data[] = [
                'id' => $msg->getId(),
                'type' => $msg->getType(),
                'message' => $msg->getDescriptionDetaillee(),
                'date' => $msg->getDateHeure()->format('Y-m-d H:i:s')
            ];
        }
        
        return $this->json([
            'count' => $count,
            'messages' => $data
        ]);
    }
}
