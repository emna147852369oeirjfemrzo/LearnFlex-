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


}
