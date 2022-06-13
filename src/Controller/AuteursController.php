<?php

namespace App\Controller;

use App\Entity\Auteurs;
use App\Form\AuteursFormType;

//use Symfony\Component\Mime\Medias;

use App\Repository\AuteursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/auteurs")
 */
class AuteursController extends AbstractController
{
    /**
     * @Route("/", name="auteurs_index", methods={"GET","POST"})
     */
    public function index(AuteursRepository $auteursRepository): Response
    {
        return $this->render('auteurs/index.html.twig', [
            'auteur' => $auteursRepository->findAll(),
        ]);
    }
    
/**
     * @Route("/formulaireAuteurs", name = "formulaireAuteurs_index", methods={"GET","POST"})
     */
    public function formulaireAuteurs(Request $request): Response
    {
        $auteurs = new Auteurs();
        
        $form = $this->createForm(AuteursFormType::class, $auteurs);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($auteurs);
            $entityManager->flush();

            return $this->redirectToRoute('auteurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('auteurs/formulaireAuteurs.html.twig', [
            'auteur' => $auteurs,
            'formAuteurs' => $form->createView(),
        ]);
    }

    /**
     * @Route("/nouvelAuteur", name="nouvelAuteur_index", methods={"GET","POST"})
     */
    public function nouvelAuteur(Request $request): Response
    {
        $auteurs = new Auteurs();
        $form = $this->createForm(AuteursFormType::class, $auteurs);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($auteurs);
            $entityManager->flush();

            return $this->redirectToRoute('auteurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('auteurs/nouvelAuteur.html.twig', [
            'auteur' => $auteurs,
            'formAuteurs' => $form->createView(),
        ]);
    }

    /**
     * @Route("/afficherAuteurs/{id}", name="afficherAuteurs_index", methods={"GET"})
     */
    public function afficherAuteurs(Auteurs $auteurs): Response
    {
        return $this->render('auteurs/afficherAuteurs.html.twig', [
            'auteur' => $auteurs,
        ]);
    }

    /**
     * @Route("/modifierAuteurs/{id}", name="modifierAuteurs_index", methods={"GET","POST"})
     */
    public function modifierAuteurs(Request $request, Auteurs $auteurs): Response
    {
        $form = $this->createForm(AuteursFormType::class, $auteurs);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$this->getDoctrine()->getManager()->flush();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($auteurs);
            $entityManager->flush();

            return $this->redirectToRoute('auteurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('auteurs/modifierAuteurs.html.twig', [
            'auteur' => $auteurs,
            'formAuteurs' => $form->createView(),
        ]);
    }

// SUPPRESSION DES AUTEURS :
    /**
     * @Route("/supprimerAuteurs/{id}" , name="supprimerAuteurs_index", methods= {"GET","POST"})
     */
    public function supprimerAuteurs(Request $request, Auteurs $auteurs, EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($auteurs);
            $entityManager->flush();
            return $this->redirectToRoute('auteurs_index'); 
    }


}
