<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * Main page 
     * @Route("/", name="index")
     *
     */    
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }


    /**
     * About page 
     * @Route("/about", name="about")
     *
     */    
    public function about(): Response
    {
        return $this->render('default/about.html.twig');
    }


    /**
     * Parcours page 
     * @Route("/resume", name="resume")
     *
     */    
    public function resume(): Response
    {
        return $this->render('default/resume.html.twig');
    }


    /**
     * Portfolio page 
     * @Route("/Portfolio", name="portfolio")
     *
     */    
    public function portfolio(): Response
    {
        return $this->render('default/portfolio.html.twig');
    }

    /**
     * Contact page 
     * @Route("/Contact", name="contact")
     *
     */    
    public function contact(): Response
    {
        return $this->render('default/contact.html.twig');
    }
}
