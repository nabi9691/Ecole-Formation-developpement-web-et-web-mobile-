<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Form\CategoriesFormType;

//use Symfony\Component\Mime\Medias;

use App\Repository\CategoriesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/categories")
 */
class CategoriesController extends AbstractController
{
    /**
     * @Route("/", name="categories_index", methods={"GET","POST"})
     */
    public function index(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('categories/index.html.twig', [
            'categorie' => $categoriesRepository->findAll(),
        ]);
    }
    
/**
     * @Route("/formulaireCategories", name = "formulaireCategories_index", methods={"GET","POST"})
     */
    public function formulaireCategories(Request $request): Response
    {
        $categories = new Categories();
        
        $form = $this->createForm(CategoriesFormType::class, $categories);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categories);
            $entityManager->flush();

            return $this->redirectToRoute('categories_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categories/formulaireCategories.html.twig', [
            'categorie' => $categories,
            'formCategories' => $form->createView(),
        ]);
    }

    /**
     * @Route("/nouvelleCategorie", name="nouvelleCategories_index", methods={"GET","POST"})
     */
    public function nouvelleCategorie(Request $request): Response
    {
        $categories = new Categories();
        $form = $this->createForm(CategoriesFormType::class, $categories);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categories);
            $entityManager->flush();

            return $this->redirectToRoute('categories_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categories/nouvelleCategorie.html.twig', [
            'categorie' => $categories,
            'formCategories' => $form->createView(),
        ]);
    }

    /**
     * @Route("/afficherCategories/{id}", name="afficherCategories_index", methods={"GET"})
     */
    public function afficherCategories(Categories $categories): Response
    {
        return $this->render('categories/afficherCategories.html.twig', [
            'categorie' => $categories,
        ]);
    }

    /**
        * @Route("/modifierCategorie/{id}", name="modifierCategories_index", methods={"GET","POST"})
        */
   public function modifierCategorie(Request $request, Categories $categories): Response
   {
    $categories = new Categories();   
    $form = $this->createForm(CategoriesFormType::class, $categories);
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
           //$this->getDoctrine()->getManager()->flush();

           $entityManager = $this->getDoctrine()->getManager();
           $entityManager->persist($categories);
           $entityManager->flush();

           return $this->redirectToRoute('categories_index', [], Response::HTTP_SEE_OTHER);
       }

       return $this->render('categories/modifierCategories.html.twig', [
           'categorie' => $categories,
           'formCategories' => $form->createView(),
       ]);
   }

// SUPPRESSION DES CATEGORIES :
    /**
     * @Route("/supprimerCategories/{id}" , name="supprimerCategories_index", methods= {"GET","POST"})
     */
    public function supprimerCategories(Request $request, Categories $categories, EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($categories);
            $entityManager->flush();
            return $this->redirectToRoute('categories_index'); 
    }


}
