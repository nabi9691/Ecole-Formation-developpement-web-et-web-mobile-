<?php

namespace App\Controller;

use App\Entity\Activites;
use App\Entity\Utilisateurs;

use App\Form\ActivitesFormType;

//use Symfony\Component\Mime\Medias;

use App\Repository\ActivitesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/activites")
 */
class ActivitesController extends AbstractController
{
    /**
     * @Route("/", name="activites_index", methods={"GET","POST"})
     */
    public function index(ActivitesRepository $activitesRepository): Response
    {
        return $this->render('activites/index.html.twig', [
            'activite' => $activitesRepository->findAll(),
        ]);
    }
    
/**
     * @Route("/formulaireActivites", name = "formulaireActivites_index", methods={"GET","POST"})
     */
    public function formulaireActivites(Request $request): Response
    {
        $activites = new Activites();
        
        $form = $this->createForm(ActivitesFormType::class, $activites);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($activites);
            $entityManager->flush();

            return $this->redirectToRoute('activites_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('activites/formulaireActivites.html.twig', [
            'activite' => $activites,
            'formActivites' => $form->createView(),
        ]);
    }

    /**
     * @Route("/nouvelleActivites", name="nouvelleActivites_index", methods={"GET","POST"})
     */
    public function nouvelleActivites(Request $request): Response
    {
        $activites = new Activites();
        $form = $this->createForm(ActivitesFormType::class, $activites);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($activites);
            $entityManager->flush();

            return $this->redirectToRoute('activites_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('activites/nouvelleActivites.html.twig', [
            'activite' => $activites,
            'formActivites' => $form->createView(),
        ]);
    }

    /**
     * @Route("/afficherActivites/{id}", name="afficherActivites_index", methods={"GET"})
     */
    public function afficherActivites(Activites $activites): Response
    {
        return $this->render('activites/afficherActivites.html.twig', [
            'activite' => $activites,
        ]);
    }

    /**
     * @Route("/modifierActivites/{id}", name="modifierActivites_index", methods={"GET","POST"})
     */
    public function modifierActivites(Request $request, Activites $activites): Response
    {
        $form = $this->createForm(ActivitesFormType::class, $activites);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$this->getDoctrine()->getManager()->flush();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($activites);
            $entityManager->flush();

            return $this->redirectToRoute('activites_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('activites/modifierActivites.html.twig', [
            'activite' => $activites,
            'formActivites' => $form->createView(),
        ]);
    }

// SUPPRESSION DES ACTIVITES :
    /**
     * @Route("/supprimerActivites/{id}" , name="supprimerActivites_index", methods= {"GET","POST"})
     */
    public function supprimerActivites(Request $request, Activites $activites, EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($activites);
            $entityManager->flush();
            return $this->redirectToRoute('activites_index'); 
    }


}
