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
     * @Route("/category/sport", name="sport")
     * @Template()
     */
    public function sportAction()
    {
        return array('sport');
    }
    
    /**
     * @Route("/category/divertissement", name="divertissement")
     * @Template()
     */
    public function divertissementsAction()
    {
        return array('divertissements');
    }
    
    /**
     * @Route("/category/nature", name="nature")
     * @Template()
     */
    public function natureAction()
    {
        return array('nature');
    }
    
    /**
     * @Route("/category/politique", name="politique")
     * @Template()
     */
    public function politiqueAction()
    {
        return array('politique');
    }
    
    /**
     * @Route("/category/histoire", name="histoire")
     * @Template()
     */
    public function histoireAction()
    {
        return array('histoire');
    }
    
    /**
     * @Route("/category/hightech", name="hightech")
     * @Template()
     */
    public function hightechAction()
    {
        return array('hightech');
    }
    
    /**
     * @Route("/category/gastronomie", name="gastronomie")
     * @Template()
     */
    public function gastronomieAction()
    {
        return array('gastronomie');
    }
    
    /**
     * @Route("/category/sante", name="sante")
     * @Template()
     */
    public function santeAction()
    {
        return array('sante');
    }

    /**
     * @Route("/category/geographie", name="geographie")
     * @Template()
     */
    public function geographieAction()
    {
        return array('geographie');
    }

    /**
     * @Route("/category/culturegenerale", name="culturegenerale")
     * @Template()
     */
    public function culturegeneraleAction()
    {
        return array('culturegenerale');
    }

}
