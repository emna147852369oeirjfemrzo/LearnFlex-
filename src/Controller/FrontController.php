<?php

// src/Controller/FrontController.php
namespace App\Controller;

use App\Entity\Evenement;
use App\Repository\EvenementRepository;
use App\Repository\OrganismeRepository;
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

    

}
