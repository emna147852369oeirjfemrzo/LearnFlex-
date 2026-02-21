<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Examen;
use App\Form\ExamenType;
use App\Repository\CommentaireRepository;
use App\Repository\ExamenRepository;
use App\Repository\ReponseExamenRepository;
use App\Service\GptOssService;
use App\Service\PdfService;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class ExamenController extends AbstractController
{
    #[Route('/examen', name: 'app_examen')]
    public function index(): Response
    {
        return $this->render('examen/index.html.twig', [
            'controller_name' => 'ExamenController',
        ]);
    }

    #[Route('/back/examen', name: 'admin_examen')]
    public function afficher(ExamenRepository $examenRepository): Response
    {
        $examens = $examenRepository->findAll();

        return $this->render('examen/afficher.html.twig', [
            'examens' => $examens,
        ]);
    }

    #[Route('/addformexamen', name: 'app_addformexamen')]
    public function addformexamen(
        Request $req,
        ExamenRepository $examenrep,
        ManagerRegistry $m,
        SluggerInterface $slugger
    ): Response {
        $em = $m->getManager();
        $examen = new Examen();

        $form = $this->createForm(ExamenType::class, $examen);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $pdfFile = $form->get('pdfFile')->getData();

            if ($pdfFile) {
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $pdfFile->guessExtension();

                try {
                    $pdfFile->move(
                        $this->getParameter('exams_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // gérer l'erreur si besoin
                }

                $examen->setPdf($newFilename);
            }

            $em->persist($examen);
            $em->flush();

            return $this->redirectToRoute('admin_examen');
        }

        return $this->render('examen/new.html.twig', [
            'form'   => $form->createView(),
            'isEdit' => false,
        ]);
    }

    #[Route('/editexamen/{id}', name: 'app_editexamen')]
    public function editexamen(
        $id,
        Request $req,
        ExamenRepository $examenrep,
        ManagerRegistry $m
    ): Response {
        $em = $m->getManager();
        $a = $examenrep->find($id);

        $form = $this->createForm(ExamenType::class, $a);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $pdfFile = $form->get('pdfFile')->getData();

            if ($pdfFile) {
                $newFilename = uniqid() . '.' . $pdfFile->guessExtension();
                $pdfFile->move(
                    $this->getParameter('exams_directory'),
                    $newFilename
                );
                $a->setPdf($newFilename);
            }

            $em->persist($a);
            $em->flush();

            return $this->redirectToRoute('admin_examen');
        }

        return $this->render('examen/new.html.twig', [
            'form'   => $form,
            'isEdit' => true,
        ]);
    }

    #[Route('/deleteexamen/{id}', name: 'app_deleteexamen')]
    public function deleteexamen($id, ExamenRepository $examenrep, ManagerRegistry $m): Response
    {
        $em = $m->getManager();
        $examen = $examenrep->find($id);

        if (!$examen) {
            throw $this->createNotFoundException("Examen introuvable pour l'id $id");
        }

        $em->remove($examen);
        $em->flush();

        return $this->redirectToRoute('admin_examen');
    }

    #[Route('/rechercheexamen', name: 'app_examen_list')]
    public function rechercheExamen(Request $request, ExamenRepository $examenRepo): Response
    {
        $search = $request->query->get('search');
        $niveau = $request->query->get('niveau');

        $qb = $examenRepo->createQueryBuilder('e');

        if ($search) {
            $qb->andWhere('LOWER(e.titre) LIKE :kw OR LOWER(e.description) LIKE :kw OR LOWER(e.matiere) LIKE :kw')
                ->setParameter('kw', '%' . strtolower($search) . '%');
        }

        if ($niveau) {
            $qb->andWhere('e.niveauexamen = :niveau')
                ->setParameter('niveau', $niveau);
        }

        $qb->orderBy('e.titre', 'ASC');
        $examens = $qb->getQuery()->getResult();

        return $this->render('examen/afficher.html.twig', [
            'examens'            => $examens,
            'search'             => $search,
            'niveau_selectionne' => $niveau,
        ]);
    }

    #[Route('/examen/pdf/{id}', name: 'app_examen_pdf')]
    public function pdfExamen(Examen $examen): Response
    {
        $html = $this->renderView('examen/pdf.html.twig', [
            'examen' => $examen,
        ]);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $filename = 'Examen_' . $examen->getTitre() . '.pdf';

        return new Response($dompdf->stream($filename, [
            'Attachment' => true,
        ]));
    }

    #[Route('/trieexamen', name: 'app_trieexamen_list')]
    public function trieexamen(Request $request, ExamenRepository $repo): Response
    {
        $niveau = $request->query->get('niveau');

        if ($niveau) {
            $examens = $repo->findBy(['niveauexamen' => $niveau]);
        } else {
            $examens = $repo->findAll();
        }

        return $this->render('examen/afficher.html.twig', [
            'examens'            => $examens,
            'niveau_selectionne' => $niveau,
        ]);
    }

    #[Route('/examen/by-niveau/{niveau}', name: 'app_examen_by_niveau', methods: ['GET'])]
    public function getExamenByNiveau(string $niveau, ExamenRepository $examenRepo): JsonResponse
    {
        $examen = $examenRepo->findOneBy(['niveauexamen' => $niveau, 'etat' => 'actif']);

        if (!$examen) {
            return new JsonResponse(['status' => 'error', 'message' => 'Examen introuvable'], 404);
        }

        return new JsonResponse([
            'status'      => 'success',
            'examenId'    => $examen->getId(),
            'titre'       => $examen->getTitre(),
            'description' => $examen->getDescription(),
        ]);
    }

    #[Route('/examen/{id}/{niveau?}', name: 'front_examen')]
    public function show(Examen $examen): Response
    {
        $challenges = $examen->getChallenges();

        return $this->render('front/examen.html.twig', [
            'examen'      => $examen,
            'challenges'  => $challenges,
            // si tu utilises des commentaires dans ce template :
            // 'commentaires' => ...
        ]);
    }

    #[Route('/exam/download/{filename}', name: 'exam_download')]
    public function downloadExam(string $filename)
    {
        $file = $this->getParameter('kernel.project_dir') . '/public/assets/exams/' . $filename;

        return $this->file($file, $filename, ResponseHeaderBag::DISPOSITION_ATTACHMENT);
    }

    #[Route('/examen/{id}/add-comment', name: 'examen_add_comment', methods: ['POST'])]
    public function addComment(Request $request, Examen $examen, EntityManagerInterface $em)
    {
        $author = $request->request->get('author', 'Anonyme');
        $text = $request->request->get('comment', '');

        if (!$text) {
            return new JsonResponse(['status' => 'error', 'message' => 'Commentaire vide']);
        }

        $comment = new Commentaire();
        $comment->setAuteur($author);
        $comment->setContenu($text);
        $comment->setExamen($examen);
        $comment->setDatecre(new \DateTime());
        $comment->setNbvue(0);
        $comment->setLikes(0);

        $em->persist($comment);
        $em->flush();

        return new JsonResponse([
            'status'  => 'success',
            'id'      => $comment->getId(),
            'author'  => $comment->getAuteur(),
            'contenu' => $comment->getContenu(),
            'date'    => $comment->getDatecre()->format('d/m/Y'),
            'nbvue'   => $comment->getNbvue(),
            'likes'   => $comment->getLikes(),
        ]);
    }

    #[Route('/commentaire/{id}/like', name: 'comment_like', methods: ['POST'])]
    public function like(Commentaire $comment, EntityManagerInterface $em)
    {
        $comment->setLikes($comment->getLikes() + 1);
        $em->flush();

        return new JsonResponse(['status' => 'success', 'likes' => $comment->getLikes()]);
    }

    #[Route('/examen/{id}/reponses', name: 'examen_reponses', methods: ['GET'])]
    public function reponses(int $id, ReponseExamenRepository $repo): JsonResponse
    {
        $reponses = $repo->findBy(['examen' => $id], ['dateSoumission' => 'DESC']);

        $lastByEtudiant = [];

        foreach ($reponses as $r) {
            $etudiantId = $r->getEtudiant()?->getId() ?? 0;

            if (!isset($lastByEtudiant[$etudiantId])) {
                $lastByEtudiant[$etudiantId] = [
                    'etudiant' => $r->getEtudiant()?->getNom() ?? 'Anonyme',
                    'date'     => $r->getDateSoumission()?->format('d/m/Y H:i') ?? '',
                    'reponses' => [],
                ];
            }

            if (!str_starts_with($r->getQuestion(), '_token')) {
                $lastByEtudiant[$etudiantId]['reponses'][$r->getQuestion()] = $r->getReponse();
            }
        }

        $data = array_values($lastByEtudiant);

        return $this->json($data);
    }

    #[Route('/examen/pdf/{id}', name: 'examen_pdf')]
    public function pdf(Examen $examen): Response
    {
        $pdfPath = $this->getParameter('kernel.project_dir') . '/public/assets/exams/' . $examen->getPdf();

        if (!file_exists($pdfPath)) {
            throw $this->createNotFoundException("Le PDF de l'examen n'existe pas.");
        }

        return new BinaryFileResponse($pdfPath);
    }

    #[Route('/examen/{id}/pdf', name: 'generate_examen_pdf')]
    public function generatePdf(Examen $examen, PdfService $pdfService): Response
    {
        $etudiant = $this->getUser();

        return $pdfService->generateExamenPdf($examen, $etudiant);
    }

    #[Route('/examen/{id}/stats', name: 'app_examen_stats')]
    public function stats(Examen $examen, ExamenRepository $repo): Response
    {
        $examens = $repo->findAll();

        $stats = [
            'Facile'    => 0,
            'Moyen'     => 0,
            'Difficile' => 0,
        ];

        foreach ($examens as $e) {
            $niveau = ucfirst($e->getNiveauexamen());
            if (isset($stats[$niveau])) {
                $stats[$niveau]++;
            }
        }

        $data = [['Niveau', 'Nombre']];

        foreach ($stats as $niveau => $count) {
            $data[] = [$niveau, $count];
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable($data);
        $pieChart->getOptions()->setTitle('Répartition des examens par niveau');
        $pieChart->getOptions()->setHeight(400);
        $pieChart->getOptions()->setWidth(600);

        return $this->render('examen/stats_modal.html.twig', [
            'pieChart' => $pieChart,
        ]);
    }

    #[Route('/examen/analyze-answer', name: 'analyze_answer', methods: ['POST'])]
    public function analyzeAnswer(Request $request, GptOssService $gptOssService): JsonResponse
    {
        $answer = $request->request->get('answer');

        if (!$answer) {
            return $this->json([
                'success' => false,
                'message' => 'Aucune réponse fournie',
            ], 400);
        }

        $analysis = $gptOssService->analyzeAnswer($answer);

        return $this->json([
            'success'  => true,
            'analysis' => $analysis,
        ]);
    }
}