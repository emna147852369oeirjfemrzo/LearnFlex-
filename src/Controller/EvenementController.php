<?php

namespace App\Controller;

use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Evenement;

use App\Form\EvenementType;
use App\Service\AiContentService;
use App\Service\EventRecommendationService;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class EvenementController extends AbstractController
{
    #[Route('/evenement/generate-ai-content', name: 'app_evenement_generate_ai', methods: ['POST'])]
    public function generateAiContent(Request $request, AiContentService $aiContentService): Response
    {
        $data = json_decode($request->getContent(), true);
        $topic = $data['topic'] ?? '';

        if (empty($topic)) {
            return $this->json(['error' => 'Le sujet est requis.'], 400);
        }

        try {
            $content = $aiContentService->generateDescription($topic);
            return $this->json(['content' => $content]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }

    #[Route('/evenement/recommendations', name: 'app_evenement_recommendations', methods: ['GET'])]
    public function getRecommendations(EventRecommendationService $recommendationService): Response
    {
        try {
            $recommendations = $recommendationService->getRecommendations();
            return $this->json($recommendations);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }

    #[Route('/evenement', name: 'app_evenement_index')]
    public function index(EvenementRepository $evenementRepository): Response
    {
        $evenements = $evenementRepository->findAll();

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }
    #[Route('/deleteevenement/{id}', name: 'app_evenement_delete')]
public function delete($id, ManagerRegistry $doctrine, EvenementRepository $organirep): Response
{
    $entityManager = $doctrine->getManager();
    $organisme = $organirep->find($id);

    if ($organisme) {
        $entityManager->remove($organisme);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_evenement_index');
}
 #[Route('/evenement/new', name: 'app_evenement_new')]
    public function new(Request $request, ManagerRegistry $doctrine, MailerInterface $mailer): Response
{
    $evenement = new Evenement();
    $form = $this->createForm(EvenementType::class, $evenement);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        
        $entityManager = $doctrine->getManager();
        $entityManager->persist($evenement);
        $entityManager->flush();

        try {
            $message = (new Email())
                ->from('moetezbedoui816@gmail.com
')
                ->to('moetezbedoui816@gmail.com
')
                ->subject('Nouvel evenement ajoute: ' . ($evenement->getTitre() ?? 'Sans titre'))
                ->text(
                    "Un nouvel evenement a ete ajoute.\n\n" .
                    'Titre: ' . ($evenement->getTitre() ?? '-') . "\n" .
                    'Date debut: ' . ($evenement->getDatedebut() ? $evenement->getDatedebut()->format('d/m/Y H:i') : '-') . "\n" .
                    'Lieu: ' . ($evenement->getLieu() ?? '-') . "\n" .
                    'Capacite max: ' . ($evenement->getCapacitemax() ?? 0)
                );

            $mailer->send($message);
        } catch (\Throwable $e) {
            // Do not block event creation if email fails.
        }

        return $this->redirectToRoute('app_evenement_index');
    }

    return $this->render('evenement/new.html.twig', [
        'form' => $form->createView(),
    ]);
}
#[Route('/evenement/editer/{id}', name: 'app_evenement_edit')]
public function edit(Request $request, ManagerRegistry $doctrine, EvenementRepository $evenementRepository, $id): Response
{
    // Récupérer l'événement existant par son ID
    $evenement = $evenementRepository->find($id);
    
    // Vérifier si l'événement existe
    if (!$evenement) {
        throw $this->createNotFoundException('Événement non trouvé');
    }

    // Créer le formulaire pour modifier l'événement
    $form = $this->createForm(EvenementType::class, $evenement);
    $form->handleRequest($request);

    // Si le formulaire est soumis et valide, enregistrer les changements
    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $doctrine->getManager();
        $entityManager->flush(); // Mettre à jour l'événement dans la base de données

        // Rediriger vers la liste des événements après modification
        return $this->redirectToRoute('app_evenement_index');
    }

    // Rendu du formulaire d'édition avec les données existantes
    return $this->render('evenement/edit.html.twig', [
        'form' => $form->createView(),
        'evenement' => $evenement,
    ]);
}
#[Route('/evenements/recherche', name: 'evenement_search')]
public function search(Request $request, EvenementRepository $evenementRepository): Response
{
    $query = $request->query->get('query', '');

    $evenements = $evenementRepository->searchEvenements([
        'titre' => $query,
    ]);

    return $this->render('evenement/index.html.twig', [
        'evenements' => $evenements,
        'current_search' => $query,
    ]);
}

#[Route('/evenements/tri-capacite', name: 'evenement_sort_capacite')]
public function sortByCapacite(Request $request, EvenementRepository $evenementRepository): Response
{
    $direction = strtoupper($request->query->get('direction', 'ASC')) === 'DESC' ? 'DESC' : 'ASC';

    $evenements = $evenementRepository->searchEvenements([
        'sort' => 'capacitemax',
        'direction' => $direction,
    ]);

    return $this->render('evenement/index.html.twig', [
        'evenements' => $evenements,
        'current_sort' => 'capacitemax',
        'current_direction' => $direction,
    ]);
}
    #[Route('/evenement/calendar', name: 'app_evenement_calendar')]
    public function calendar(): Response
    {
        return $this->render('evenement/calendar.html.twig');
    }

    #[Route('/evenement/data', name: 'app_events_calendar_data')]
    public function calendarData(EvenementRepository $evenementRepository): Response
    {
        $events = $evenementRepository->findAll();
        $data = [];

        foreach ($events as $event) {
            $data[] = [
                'id' => $event->getId(),
                'title' => $event->getTitre(),
                'start' => $event->getDatedebut() ? $event->getDatedebut()->format(\DateTimeInterface::ATOM) : null,
                'end' => $event->getDatefin() ? $event->getDatefin()->format(\DateTimeInterface::ATOM) : null,
                'extendedProps' => [
                    'description' => $event->getDescription(),
                    'location' => $event->getLieu(),
                    'category' => $event->getMode(),
                    'capacity' => $event->getCapacitemax(),
                    'public' => $event->getPubliccible(),
                    'contact' => $event->getContactemail(),
                ]
            ];
        }

        return $this->json($data);
    }
    #[Route('/evenement/update-dates', name: 'app_evenement_update_dates', methods: ['POST'])]
    public function updateDates(Request $request, ManagerRegistry $doctrine, EvenementRepository $evenementRepository): Response
    {
        $data = json_decode($request->getContent(), true);
        $id = $data['id'] ?? null;
        $start = $data['start'] ?? null;
        $end = $data['end'] ?? null;

        if (!$id || !$start || !$end) {
            return $this->json(['error' => 'Données invalides'], 400);
        }

        $evenement = $evenementRepository->find($id);
        if (!$evenement) {
            return $this->json(['error' => 'Événement non trouvé'], 404);
        }

        try {
            $evenement->setDatedebut(new \DateTime($start));
            $evenement->setDatefin(new \DateTime($end));
            
            $entityManager = $doctrine->getManager();
            $entityManager->flush();

            return $this->json(['success' => true]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }

    #[Route('/evenement/ngrok-url', name: 'app_evenement_ngrok_url', methods: ['GET'])]
    public function getNgrokUrl(HttpClientInterface $httpClient): Response
    {
        $endpoints = ['http://127.0.0.1:4040/api/tunnels', 'http://localhost:4040/api/tunnels'];
        $lastError = 'Aucun tunnel Ngrok actif trouvé.';

        foreach ($endpoints as $url) {
            try {
                $response = $httpClient->request('GET', $url, ['timeout' => 1]);
                $data = $response->toArray();
                
                if (!empty($data['tunnels'])) {
                    return $this->json(['url' => $data['tunnels'][0]['public_url']]);
                }
            } catch (\Exception $e) {
                $lastError = $e->getMessage();
            }
        }

        return $this->json(['error' => 'Ngrok non détecté. Assurez-vous qu\'il est lancé. Détails: ' . $lastError], 404);
    }
}
