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

final class EvenementController extends AbstractController
{
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
    public function new(Request $request, ManagerRegistry $doctrine): Response
{
    $evenement = new Evenement();
    $form = $this->createForm(EvenementType::class, $evenement);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        
        $entityManager = $doctrine->getManager();
        $entityManager->persist($evenement);
        $entityManager->flush();

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





}
