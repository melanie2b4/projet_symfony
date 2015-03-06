<?php

namespace Acme\Bundle\QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\Bundle\QuizzBundle\Form\AddQuizzType;
use Acme\Bundle\QuizzBundle\Form\QuizzType;
use Acme\Bundle\QuizzBundle\Entity\Quizz;
use Symfony\Component\HttpFoundation\Request;
use Acme\Bundle\QuizzBundle\Entity\Question;
use Acme\Bundle\QuizzBundle\Entity\Users;

class QuizzController extends Controller
{

    
    /**
     * @Route("/validate-quizz/{id}", name="recupReponse")
     * @Template()
     */
    public function showReponsesAction(Request $request, $id)
    {
        $responseId = ($request->request->all());
        $quizz = $this->getDoctrine()
            ->getRepository('AcmeQuizzBundle:Quizz')
            ->find($id);
        $score = 0;

        foreach ($responseId as $responseId) {
            $reponse = $this->getDoctrine()
            ->getRepository('AcmeQuizzBundle:Reponse')
            ->find($responseId);

            if($reponse->getIsTrue()){
                $score++;
            }
        }
        if($quizz->getCategorie() == "Sport"){
        $user = $this->getUser();
        $user->setScoreSport($user->getScoreSport() + $score);
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();
        }

        if($quizz->getCategorie() == "Divertissement"){
        $user = $this->getUser();
        $user->setScoreDivertissements($user->getScoreDivertissements() + $score);
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();
        }

        if($quizz->getCategorie() == "Nature"){
        $user = $this->getUser();
        $user->setScoreNature($user->getScoreNaturee() + $score);
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();
        }

        if($quizz->getCategorie() == "Politique"){
        $user = $this->getUser();
        $user->setScorePolitique($user->getScorePolitique() + $score);
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();
        }

        if($quizz->getCategorie() == "Histoire"){
        $user = $this->getUser();
        $user->setScoreHistoire($user->getScoreHistoire() + $score);
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();
        }

        if($quizz->getCategorie() == "Hightech"){
        $user = $this->getUser();
        $user->setScoreHightech($user->getScoreHightech() + $score);
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();
        }

        if($quizz->getCategorie() == "Gastronomie"){
        $user = $this->getUser();
        $user->setScoreGastronomie($user->getScoreGastronomie() + $score);
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();
        }

        if($quizz->getCategorie() == "Sante"){
        $user = $this->getUser();
        $user->setScoreSante($user->getScoreSante() + $score);
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();
        }

        if($quizz->getCategorie() == "Geographie"){
        $user = $this->getUser();
        $user->setScoreGeographie($user->getScoreGeographie() + $score);
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();
        }

        if($quizz->getCategorie() == "Culturegenerale"){
        $user = $this->getUser();
        $user->setScoreCulturegenerale($user->getScoreCulturegenerale() + $score);
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();
        }

        return array(
            'score' => $score,
            
        );

    }
 

}


