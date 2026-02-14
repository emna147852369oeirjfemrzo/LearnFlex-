<?php

namespace App\Controller;

use App\Entity\Inscription;
use App\Entity\Evenement;
use App\Form\InscriptionType;
use App\Repository\EvenementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class InscriptionController extends AbstractController
{
    #[Route('/inscription/{id}', name: 'app_inscription_form')]
    
public function form(
    int $id,
    Request $request,
    EvenementRepository $evenementRepository,
    ManagerRegistry $doctrine
): Response {

$this->denyAccessUnlessGranted('ROLE_ETUDIANT');

    $evenement = $evenementRepository->find($id);
    if (!$evenement) {
        throw $this->createNotFoundException('Événement non trouvé');
    }

    $entityManager = $doctrine->getManager();

    // ⛔ Double inscription
    $existing = $entityManager->getRepository(Inscription::class)->findOneBy([
        'user' => $this->getUser(),
        'evenement' => $evenement
    ]);

    if ($existing) {
        $this->addFlash('warning', 'Vous êtes déjà inscrit à cet événement');
        return $this->redirectToRoute('front_evenement_show', [
            'id' => $evenement->getId()
        ]);
    }

    $inscription = new Inscription();
    $inscription->setEvenement($evenement);
    $inscription->setDateInscription(new \DateTime());
    $inscription->setUser($this->getUser());

    // Pré-remplissage
    $user = $this->getUser();
    $inscription->setNom($user->getNom().' '.$user->getPrenom());
    $inscription->setEmail($user->getEmail());

    $form = $this->createForm(InscriptionType::class, $inscription);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($inscription);
        $entityManager->flush();

        $this->addFlash('success', 'Inscription confirmée');
return $this->redirectToRoute('front_evenement_show', [
    'id' => $evenement->getId()
]);
    }

    return $this->render('front/inscription.html.twig', [
        'form' => $form->createView(),
        'evenement' => $evenement,
    ]);
}

}
