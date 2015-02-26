<?php

namespace Acme\Bundle\QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $TopQuizz = $repository->getQuizzByOrderTop('asc');
        $RecentQuizz = $repository->getQuizzByOrderDate('asc');

        return array(
            'RecentQuizz' => $RecentQuizz,
            'TopQuizz' => $TopQuizz
        );
    }
    
    /**
     * @Route("/quizz/{id}", name="show_quizz")
     * @Template()
     */
    public function quizzAction($id)
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $Quizz = $repository->findOneById($id);

        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Question');
        $Questions = $repository->findBy(array ('quizz_id' => $id));
        
        return array(
            'Quizz' => $Quizz,
            'Questions' => $Questions
        );
    }
    
    /**
     * @Route("/category/sport", name="sport")
     * @Template()
     */
    public function sportAction()
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $SportQuizz = $repository->getQuizzByCategorie('Sport', 'asc');
        return array(
            'SportQuizz' => $SportQuizz
        );
    }
    
    /**
     * @Route("/category/divertissement", name="divertissement")
     * @Template()
     */
    public function divertissementsAction()
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $DivertissementQuizz = $repository->getQuizzByCategorie('Divertissement', 'desc');
        return array(
            'DivertissementQuizz' => $DivertissementQuizz
        );
    }
    
    /**
     * @Route("/category/nature", name="nature")
     * @Template()
     */
    public function natureAction()
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $NatureQuizz = $repository->getQuizzByCategorie('Nature', 'asc');
        return array(
            'NatureQuizz' => $NatureQuizz
        );
    }
    
    /**
     * @Route("/category/politique", name="politique")
     * @Template()
     */
    public function politiqueAction()
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $PolitiqueQuizz = $repository->getQuizzByCategorie('Politique', 'asc');
        return array(
            'PolitiqueQuizz' => $PolitiqueQuizz
        );
    }
    
    /**
     * @Route("/category/histoire", name="histoire")
     * @Template()
     */
    public function histoireAction()
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $HistoireQuizz = $repository->getQuizzByCategorie('Histoire', 'asc');
        return array(
            'HistoireQuizz' => $HistoireQuizz
        );
    }
    
    /**
     * @Route("/category/hightech", name="hightech")
     * @Template()
     */
    public function hightechAction()
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $HightechQuizz = $repository->getQuizzByCategorie('Hightech', 'asc');
        return array(
            'HightechQuizz' => $HightechQuizz
        );
    }
    
    /**
     * @Route("/category/gastronomie", name="gastronomie")
     * @Template()
     */
    public function gastronomieAction()
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $GastronomieQuizz = $repository->getQuizzByCategorie('Gastronomie', 'asc');
        return array(
            'GastronomieQuizz' => $GastronomieQuizz
        );
    }
    
    /**
     * @Route("/category/sante", name="sante")
     * @Template()
     */
    public function santeAction()
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $SanteQuizz = $repository->getQuizzByCategorie('Sante', 'asc');
        return array(
            'SanteQuizz' => $SanteQuizz
        );
    }

    /**
     * @Route("/category/geographie", name="geographie")
     * @Template()
     */
    public function geographieAction()
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $GeographieQuizz = $repository->getQuizzByCategorie('Geographie', 'asc');
        return array(
            'GeographieQuizz' => $GeographieQuizz
        );
    }

    /**
     * @Route("/category/culturegenerale", name="culturegenerale")
     * @Template()
     */
    public function culturegeneraleAction()
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $CultureGeneraleQuizz = $repository->getQuizzByCategorie('CultureGenerale', 'asc');
        return array(
            'CultureGenerale' => $CultureGeneraleQuizz
        );
    }

    /**
     * @Route("/category/modificationProfil", name="modificationProfil")
     * @Template()
     */
    public function modificationProfilAction()
    {
    return array();
    }

    /**
     * @Route("/category/inscription", name="inscription")
     * @Template()
     */
    public function inscriptionAction()
    {
    return array();
    }
}


