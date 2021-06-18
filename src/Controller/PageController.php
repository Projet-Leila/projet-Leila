<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
   
    /**
     * @Route("/", name="accueil")
     */
    public function accueil(): Response
    {
        return $this->render('page/accueil.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/Presentation", name="presentation")
     */
    public function presentation(): Response
    {
        return $this->render('page/presentation.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/Nos_valeurs", name="valeurs")
     */
    public function valeurs(): Response
    {
        return $this->render('page/valeurs.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/Documents_Legaux", name="legaux")
     */
    public function legaux(): Response
    {
        return $this->render('page/doc_legaux.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/SAJ", name="SAJ")
     */
    public function SAJ(): Response
    {
        return $this->render('page/SAJ.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/EMP", name="EMP")
     */
    public function EMP(): Response
    {
        return $this->render('page/EMP.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/SAVS", name="SAVS")
     */
    public function SAVS(): Response
    {
        return $this->render('page/SAVS.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    
    /**
     * @Route("/RESIDENCE", name="RESIDENCE")
     */
    public function RESIDENCE(): Response
    {
        return $this->render('page/RESIDENCE.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/Recrutement", name="recrutement")
     */
    public function recrutement()
    {
        $repo = $this->getDoctrine()->getRepository(TgRecrute::class);

        $articles = $repo->findAll();

        return $this->render('page/recrutement.html.twig', [
            'controller_name' => 'PageController',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/Contact", name="contact")
     */
    public function Contact(): Response
    {
        return $this->render('page/contact.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
