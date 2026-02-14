<?php

namespace App\Controller;

use App\Entity\Organisme;
use App\Form\OrganismeType;
use App\Repository\OrganismeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Doctrine\Persistence\ManagerRegistry;


final class OrganismeController extends AbstractController
{
    #[Route('/organisme', name: 'app_organisme_index')]
    public function index(OrganismeRepository $organismeRepository): Response
    {
        return $this->render('back/liste.html.twig', [
            'organismes' => $organismeRepository->findAll(),
        ]);
    }

    #[Route('/addorganisme', name: 'app_organisme_new')]
    public function add(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {
        $organisme = new Organisme();
        $form = $this->createForm(OrganismeType::class, $organisme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile = $form->get('photoFile')->getData();
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile->guessExtension();
                $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/organismes';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                try {
                    $photoFile->move($uploadDir, $newFilename);
                    $organisme->setPhoto($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('warning', 'L\'image n\'a pas pu être enregistrée.');
                }
            }
            $entityManager = $doctrine->getManager();
            $entityManager->persist($organisme);
            $entityManager->flush();

            $this->addFlash('success', 'L\'organisme a été ajouté avec succès.');
            return $this->redirectToRoute('app_organisme_index');
        }

        return $this->render('organisme/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/organisme/{id}/edit', name: 'app_organisme_edit')]
    public function edit(int $id, Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {
        $organisme = $doctrine->getRepository(Organisme::class)->find($id);

        if (!$organisme) {
            throw $this->createNotFoundException('L\'organisme avec l\'ID ' . $id . ' n\'existe pas.');
        }

        $form = $this->createForm(OrganismeType::class, $organisme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile = $form->get('photoFile')->getData();
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile->guessExtension();
                $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/organismes';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                try {
                    $photoFile->move($uploadDir, $newFilename);
                    $organisme->setPhoto($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('warning', 'L\'image n\'a pas pu être enregistrée.');
                }
            }
            $entityManager = $doctrine->getManager();
            $entityManager->flush();

            $this->addFlash('success', 'L\'organisme a été mis à jour avec succès.');
            return $this->redirectToRoute('app_organisme_index');
        }

        return $this->render('organisme/edit.html.twig', [
            'form' => $form->createView(),
            'organisme' => $organisme,
        ]);
    }

    #[Route('/deleteorganisme/{id}', name: 'app_organisme_delete')]
    public function delete(int $id, ManagerRegistry $doctrine, OrganismeRepository $organirep): Response
    {
        $entityManager = $doctrine->getManager();
        $organisme = $organirep->find($id);

        if ($organisme) {
            $entityManager->remove($organisme);
            $entityManager->flush();
            $this->addFlash('success', 'Organisme supprimé.');
        } else {
            $this->addFlash('warning', 'Organisme introuvable.');
        }

        return $this->redirectToRoute('app_organisme_index');
    }

    #[Route('/organismes/recherche', name: 'organisme_search')]
    public function search(Request $request, OrganismeRepository $organismeRepository): Response
    {
        $query = $request->query->get('query', '');

        if (method_exists($organismeRepository, 'searchOrganismes')) {
            $organismes = $organismeRepository->searchOrganismes(['nom' => $query]);
        } else {
            $organismes = $organismeRepository->createQueryBuilder('o')
                ->where('o.nom LIKE :q')
                ->setParameter('q', '%'.$query.'%')
                ->getQuery()
                ->getResult();
        }

        // Rendre le même template back/liste.html.twig pour afficher les résultats dans la même interface
        return $this->render('back/liste.html.twig', [
            'organismes' => $organismes,
        ]);
    }

    #[Route('/organismes/tri-taille', name: 'organisme_sort')]
    public function sortByTaille(Request $request, OrganismeRepository $organismeRepository): Response
    {
        $direction = strtoupper($request->query->get('direction', 'ASC')) === 'DESC' ? 'DESC' : 'ASC';

        $organismes = $organismeRepository->searchOrganismes([
            'sort' => 'tailleentreprise',
            'direction' => $direction,
        ]);

        return $this->render('back/liste.html.twig', [
            'organismes' => $organismes,
            'current_sort' => 'tailleentreprise',
            'current_direction' => $direction,
        ]);
    }
}