<?php

namespace AppBundle\Controller;

use AppBundle\Entity\categories;
use AppBundle\Form\CategoriesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{
    /**
     * @Route("/addCategorie")
     *
     */
    public function addCategorieAction(Request $request)
    {
        $categorie = new categories;
        $form = $this->createForm(CategoriesType::class, $categorie);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            $this->addflash('notice', 'Catégorie ajoutée');
            return $this->redirectToroute('retrieveAllCategorie');
        }
        return $this->render('AppBundle:Categorie:add_categorie.html.twig', array('form' => $form->createView()
            // ...
        ));
    }

    /**
     * @Route("/findCategorie")
     */
    public function findCategorieAction()
    {
        return $this->render('AppBundle:Categorie:find_categorie.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/retrieveAllCategorie", name="retrieveAllCategorie")
     */
    public function retrieveAllCategorieAction()
    {
        $categorie = $this->getDoctrine()->getRepository('AppBundle:categories')->findAll();
        return $this->render('AppBundle:Categorie:retrieve_all_categorie.html.twig', array('categorie' => $categorie
            // ...
        ));
    }

}
