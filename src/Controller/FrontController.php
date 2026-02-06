<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ChallengeRepository;

final class FrontController extends AbstractController
{
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
}
