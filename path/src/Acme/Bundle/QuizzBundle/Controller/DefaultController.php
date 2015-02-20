<?php

namespace Acme\Bundle\QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction()
    {
        return array('home');
    }
    
    /**
     * @Route("/quizz/{id}", name="show_quizz")
     * @Template()
     */
    public function quizzAction()
    {
        return array('quizz');
    }
    
    /**
     * @Route("/category/sport")
     * @Template()
     */
    public function sportAction()
    {
        return array('sport');
    }
    
    /**
     * @Route("/category/divertissement")
     * @Template()
     */
    public function sportAction()
    {
        return array('sport');
    }
    
    /**
     * @Route("/category/sport")
     * @Template()
     */
    public function sportAction()
    {
        return array('sport');
    }
    
    /**
     * @Route("/category/sport")
     * @Template()
     */
    public function sportAction()
    {
        return array('sport');
    }
    
    /**
     * @Route("/category/sport")
     * @Template()
     */
    public function sportAction()
    {
        return array('sport');
    }
    
    /**
     * @Route("/category/sport")
     * @Template()
     */
    public function sportAction()
    {
        return array('sport');
    }
    
}
