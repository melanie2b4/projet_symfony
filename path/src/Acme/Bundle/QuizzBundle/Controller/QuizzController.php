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

class QuizzController extends Controller
{

    
    /**
     * @Route("/validate-quizz/{id}", name="recupReponse")
     * @Template()
     */
    public function showReponsesAction(Request $request, $id)
    {
        $responseId = ($request->request->all());
        $score = 0;

        foreach ($responseId as $id) {
            $reponse = $this->getDoctrine()
            ->getRepository('AcmeQuizzBundle:Reponse')
            ->find($id);

            if($reponse->getIsTrue()){

                $score++;
            }
        }

      
        return array(
            'score' => $score,
           
        );

    }
 

}


