<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ExamenRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Examen;
use App\Form\ExamenType;


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
    public function addformexamen(Request $req,ExamenRepository $examenrep,ManagerRegistry $m): Response
    {
        $em=$m->getManager();
        $a=new Examen();
        $form=$this->createForm(ExamenType::class,$a);
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid()){
        $em->persist($a);
        $em->flush();
        return $this->redirectToRoute('admin_examen');
        
        }
        return $this->render('examen/new.html.twig', [
            'form' => $form,
                        'isEdit' => false,

        ]);
    }
     #[Route('/editexamen/{id}', name: 'app_editexamen')]
    public function editexamen($id,Request $req,ExamenRepository $examenrep,ManagerRegistry $m): Response
    {
        $em=$m->getManager();
        $a=$examenrep->find($id);
        $form=$this->createForm(ExamenType::class,$a);
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid()){
        $em->persist($a);
        $em->flush();
        return $this->redirectToRoute('admin_examen');
        }
        return $this->render('examen/new.html.twig', [
            'form' => $form,
            'isEdit' => true,
        ]);
    }
        #[Route('/deleteexamen/{id}', name: 'app_deleteexamen')]
    public function deleteexamen($id, ExamenRepository $examenrep, ManagerRegistry $m): Response
    {
        $em = $m->getManager();          // Récupère l'EntityManager
        $examen = $examenrep->find($id); // Cherche l'examen par id

        if (!$examen) {
            throw $this->createNotFoundException("Examen introuvable pour l'id $id");
        }

        $em->remove($examen);  // Supprime l'entité
        $em->flush();          // Applique la suppression dans la base

        return $this->redirectToRoute('admin_examen');
    }

#[Route('/rechercheexamen', name: 'app_examen_list')]
public function rechercheExamen(Request $request, ExamenRepository $examenRepo): Response
{
    $search = $request->query->get('search'); // récupère le mot clé

    if ($search) {
        $examens = $examenRepo->searchByKeyword($search); // méthode à créer
    } else {
        $examens = $examenRepo->findAll();
    }

    return $this->render('examen/afficher.html.twig', [
        'examens' => $examens,
        'search' => $search,
    ]);
}
#[Route('/examen/pdf/{id}', name: 'app_examen_pdf')]
public function pdfExamen(Examen $examen): Response
{
    $html = $this->renderView('examen/pdf.html.twig', [
        'examen' => $examen
    ]);

    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $filename = 'Examen_'.$examen->getTitre().'.pdf';

    return new Response($dompdf->stream($filename, [
        'Attachment' => true // true = téléchargement, false = ouverture dans le navigateur
    ]));
}

#[Route('/trieexamen', name: 'app_examen_list')]
public function trieexamen(Request $request, ExamenRepository $repo): Response
{
    $niveau = $request->query->get('niveau'); // facile / moyen / difficile

    if ($niveau) {
        $examens = $repo->findBy(['niveauexamen' => $niveau]);
    } else {
        $examens = $repo->findAll();
    }

    return $this->render('examen/afficher.html.twig', [
        'examens' => $examens,
        'niveau_selectionne' => $niveau,
    ]);
}


}
