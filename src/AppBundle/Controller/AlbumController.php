<?php

namespace AppBundle\Controller;

use AppBundle\Entity\albums;
use AppBundle\Form\AlbumsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AlbumController extends Controller
{
    /**
     * @Route("/addAlbum")
     */
    public function addAlbumAction(Request $request)
    {
        $album = new albums;
        $form = $this->createForm(AlbumsType::class, $album);
        
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($album);
            $em->flush();
            $this->addflash('notice', 'Album ajouté');
            return $this->redirectToroute('retrieveAllAlbum');
        }
        return $this->render('AppBundle:Album:add_album.html.twig', array('form' => $form->createView()
            // ...
        ));
    }

    /**
     * @Route("/findAlbum")
     */
    public function findAlbumAction()
    {
        return $this->render('AppBundle:Album:find_album.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/retrieveAllAlbum",name="retrieveAllAlbum")
     */
    public function retrieveAllAlbumAction()
    {
        $albums = $this->getDoctrine()->getRepository('AppBundle:albums')->findAll();
        return $this->render('AppBundle:Album:retrieve_all_album.html.twig', array('albums' => $albums
            // ...
        ));
    }

    /**
     * @Route("/deleteAlbum")
     */
    public function deleteAlbumAction()
    {
        return $this->render('AppBundle:Album:delete_album.html.twig', array(
            // ...
        ));
    }

}
