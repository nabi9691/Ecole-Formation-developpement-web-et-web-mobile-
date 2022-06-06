<?php

namespace App\Controller;

use App\Entity\Formations;
use App\Form\FormationsType;

//use Symfony\Component\Mime\Medias;

use App\Repository\FormationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/formations")
 */
class FormationsController extends AbstractController
{
    // LISTE DES formations :
/**
     * @Route("/", name="formations_index")
     */
    public function index(FormationsRepository $formationsRepository): Response
    {
        return $this->render('formations/index.html.twig', [
            'formations' => $formationsRepository->findAll(),
        ]);
    }
    
    // FORMULAIRE DE formations :
/**
     * @Route("/formulaireFormations", name = "formulaireFormations_index", methods={"GET","POST"})
     */
    public function formulaireFormations(Request $request): Response
    {
        $formations = new Formation();
        
        $form = $this->createForm(FormationsType::class, $formations);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formations);
            $entityManager->flush();

            return $this->redirectToRoute('formations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formations/formulaireFormations.html.twig', [
            'formations' => $formation,
            'formFormations' => $form->createView(),
        ]);
    }

    // ENREGISTREMENT D'UNE NOUVELLE formation :
/**
     * @Route("/nouvelleFormation", name="nouvelleFormation_index", methods={"GET","POST"})
     */
    public function nouvelleFormation(Request $request): Response
    {
        $formations = new Formations();
        $form = $this->createForm(FormationsType::class, $formations);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formations);
            $entityManager->flush();

            return $this->redirectToRoute('formations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formations/nouvelleFormation.html.twig', [
            'formations' => $formations,
            'formFormations' => $form->createView(),
        ]);
    }

    // AFFICHAGE DES formations :
/**
     * @Route("/afficherFormations/{id}", name="afficherFormations_index", methods={"GET"})
     */
    public function afficherFormations(Formations $formations): Response
    {
        return $this->render('formations/afficherFormations.html.twig', [
            'formation' => $formations,
        ]);
    }

    // MODIFICATION DES formations :
/**
     * @Route("/modifierFormations/{id}", name="modifierFormations_index", methods={"GET","POST"})
     */
    public function modifierFormations(Request $request, Formations $formations): Response
    {
        $formations = new Formations();
        $form = $this->createForm(FormationsType::class, $formations);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formations);
            $entityManager->flush();

            return $this->redirectToRoute('formations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formations/modifierFormations.html.twig', [
            'formations' => $formations,
            'formFormations' => $form->createView(),
        ]);
    }

// SUPPRESSION DES formations :
    /**
     * @Route("/supprimerFormations/{id}" , name="supprimerFormations_index", methods= {"GET","POST"})
     */
    public function supprimerFormations(Request $request, Formations $formations, EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($formations);
            $entityManager->flush();
            return $this->redirectToRoute('formations_index'); 
    }

/**
     * @Route("pageAccueilBIOInformatique", name="pageAccueilBIOInformatique_index", methods={"GET"})
     */
    public function pageAccueilBIOInformatique(): Response
    {
        return $this->render('formations/BIOInformatique/pageAccueilBIOInformatique.html.twig', [
            ]);
    }


/**
     * @Route("formationPHP", name="formationPHP_index", methods={"GET"})
     */
    public function formationPHP(): Response
    {
        return $this->render('formations/BIOInformatique/formationPHP.html.twig', [
            ]);
    }

/**
     * @Route("formationJAVA", name="formationJAVA_index", methods={"GET"})
     */
    public function formationJAVA(): Response
    {
        return $this->render('formations/BIOInformatique/formationJAVA.html.twig', [
            ]);
    }

/**
     * @Route("formationDeveloppeurWEB", name="developpeurWEB_index", methods={"GET"})
     */
    public function developpeurWEB(): Response
    {
        return $this->render('formations/BIOInformatique/developpeurWEB.html.twig', [
            ]);
    }

/**
     * @Route("formationSymfony", name="formationSymfony_index", methods={"GET"})
     */
    public function formationSymfony(): Response
    {
        return $this->render('formations/BIOInformatique/formationSymfony.html.twig', [
            ]);
    }

/**
     * @Route("temoignages", name="temoignages_index", methods={"GET"})
     */
    public function temoignages(): Response
    {
        return $this->render('formations/BIOInformatique/temoignages.html.twig', [
            ]);
    }



}
