<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArtistController extends Controller
{
    /**
     * @Route("/addArtist")
     */
    public function addArtistAction()
    {
        return $this->render('AppBundle:Artist:add_artist.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/findArtist")
     */
    public function findArtistAction()
    {
        return $this->render('AppBundle:Artist:find_artist.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/retrieveAllArtist")
     */
    public function retrieveAllArtistAction()
    {
        return $this->render('AppBundle:Artist:retrieve_all_artist.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteArtist")
     */
    public function deleteArtistAction()
    {
        return $this->render('AppBundle:Artist:delete_artist.html.twig', array(
            // ...
        ));
    }

}
