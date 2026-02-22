<?php

// src/Controller/FrontController.php
namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\User;
use App\Entity\Inscription;
use App\Form\InscriptionType;
use App\Repository\EvenementRepository;
use App\Repository\OrganismeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    // Afficher la liste des événements
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
    #[Route('/etudiant/evenement/{id}/inscription-pdf', name: 'etudiant_evenement_inscription_pdf')]
    public function inscriptionPdf(Evenement $evenement): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour vous inscrire.');
        }

        // Préparer le HTML du PDF
        $html = '
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        padding: 30px;
    }

    .card {
        background: #ffffff;
        border-radius: 12px;
        padding: 30px;
        max-width: 600px;
        margin: auto;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        border-top: 8px solid #667eea;
    }

    .title {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .success {
        text-align: center;
        color: #28a745;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .section {
        margin-bottom: 15px;
        padding: 10px;
        background: #f8f9fa;
        border-radius: 8px;
    }

    .label {
        font-weight: bold;
        color: #555;
    }

    .value {
        color: #222;
    }

    .footer {
        margin-top: 30px;
        text-align: center;
        font-size: 12px;
        color: #888;
    }
</style>

<div class="card">
    <div class="title">🎓 Confirmation d\'inscription</div>
    <div class="success">✔ Inscription réussie</div>

    <div class="section">
        <span class="label">Étudiant :</span>
        <span class="value">'.$user->getPrenom().' '.$user->getNom().'</span>
    </div>

    <div class="section">
        <span class="label">Email :</span>
        <span class="value">'.$user->getEmail().'</span>
    </div>

    <div class="section">
        <span class="label">Événement :</span>
        <span class="value">'.$evenement->getTitre().'</span>
    </div>

    <div class="section">
        <span class="label">Date :</span>
        <span class="value">'.$evenement->getDatedebut()->format("d/m/Y H:i").'</span>
    </div>

    <div class="section">
        <span class="label">Lieu :</span>
        <span class="value">'.$evenement->getLieu().'</span>
    </div>

    <div class="footer">
        LearnFlex+ © 2026 — Plateforme d\'orientation
    </div>
</div>
';


        $options = new Options();
        $options->set('defaultFont', 'Helvetica');

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $output = $dompdf->output();

        $response = new Response($output);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="inscription_evenement.pdf"');

        return $response;
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
    #[Route('/etudiant/organismes', name: 'etudiant_organismes')]
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

    

    #[Route('/front/evenement/data', name: 'app_front_events_calendar_data')]
    public function calendarData(EvenementRepository $evenementRepository): Response
    {
        $events = $evenementRepository->findAll();
        $data = [];

        foreach ($events as $event) {
            $data[] = [
                'id' => $event->getId(),
                'title' => $event->getTitre(),
                'start' => $event->getDatedebut() ? $event->getDatedebut()->format(\DateTimeInterface::ATOM) : null,
                'url' => $this->generateUrl('etudiant_evenement_show', ['id' => $event->getId()]),
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
}
