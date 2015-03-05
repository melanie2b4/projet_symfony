<?php

namespace Acme\Bundle\QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\Bundle\QuizzBundle\Form\AddQuizzType;
use Acme\Bundle\QuizzBundle\Form\QuizzType;
use Acme\Bundle\QuizzBundle\Form\ReponseType;
use Acme\Bundle\QuizzBundle\Form\AddQuestionType;
use Acme\Bundle\QuizzBundle\Form\AddReponseType;
use Acme\Bundle\QuizzBundle\Entity\Quizz;
use Symfony\Component\HttpFoundation\Request;
use Acme\Bundle\QuizzBundle\Entity\Reponse;
use Acme\Bundle\QuizzBundle\Entity\Question;
use Acme\Bundle\QuizzBundle\Form\AddPictureType;


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
    public function quizzAction($id, Request $request)
    {
        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Quizz');
        $Quizz = $repository->findOneById($id);

        $repository = $this->get('doctrine.orm.entity_manager')->getRepository('AcmeQuizzBundle:Question');
        $Questions = $repository->findAll();

        $form = $this->createForm(new QuizzType());

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                // Save the proposition

                $em = $this->getDoctrine()->getManager();
                $em->flush();

                return $this->redirect($this->generateUrl('index'));
            }
        }

       
        return array(
            'Quizz' => $Quizz,
            'Questions' => $Questions,
            'form' => $form->createView()
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
     * @Route("/modificationProfil", name="modificationProfil")
     * @Template()
     */
    public function modificationProfilAction()
    {
    return array();
    }

    /**
     * @Route("/inscription", name="Inscription")
     * @Template()
     */
    public function inscriptionAction()
    {
    return array();
    }


     /**
     * @Route("/search", name="search_quizz")
     * @Template()
     */
    public function searchAction(Request $request)
    {
        $search = $request->query->get('search');
        $query = $this->get('AcmeQuizzBundle.search_service')->findQuizzWithSearchTermQuery($search);
        $quizz = $query->getResult();
        return array(
            'quizz' => $quizz,
            'search' => $search
        );
    }

        
    /**
     * @Route("/add", name="addQuizz")
     * @Template()
     */
    public function addQuizzAction(Request $request)
    {
    
    $quizz = new Quizz();
    $quizz->setTop('0');
    //$quizz->setImg($quizz->getAbsolutePath());
    $quizz->setDatePublication(new \DateTime());
    
    for ($i=0; $i<10; $i++) {
    $question= new Question();
    $quizz->addQuestion($question);
    $question->setQuizz($quizz);
    for ($b=0; $b<3; $b++){
    $reponse= new Reponse();
    $question->addReponse($reponse);
    $reponse->setQuestion($question);
    }
    
}
    
        $form = $this->createForm(new AddQuizzType(), $quizz);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                // Save the proposition

                $em = $this->getDoctrine()->getManager();
                
                $quizz->upload();
                
                $em->persist($quizz);
                $em->persist($question);
                $em->persist($reponse);
                $em->flush();

                return $this->redirect($this->generateUrl('index'));
            }
        }

        return array('form' => $form->createView());
    
    }
    
    /**
     * @Route("/addPicture", name="addPicture")
     * @Template()
     */
    public function addPictureAction (){
        $usr = $this->getUser();
            
        $form = $this->createForm(new AddPictureType(), $usr);
            $form->handleRequest($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                
                $usr->uploadProfilePicture();
                
                $em->persist($usr);
                $em->flush();

                $this->redirect($this->generateUrl('QuizzBundle_profile'));
        }
            
        return $this->render('FOSUserBundle:Profile:edit.html.twig', 
                array (
                    'users' => $usr, 
                    'form' => $form->createView()
                    )
                );
    }
}



