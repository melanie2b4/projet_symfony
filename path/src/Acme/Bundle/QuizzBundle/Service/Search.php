<?php
namespace Acme\Bundle\QuizzBundle\Service;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\Bundle\QuizzBundle\Entity\QuizzRepository;

class Search
{
    protected $quizzRepository;

    public function __construct(QuizzRepository $quizzRepository) {
        $this->quizzRepository = $quizzRepository;
    }

    public function findQuizzWithSearchTermQuery($searchTerm)
    {
        $query = $this->quizzRepository->findQuizzWithSearchTermQuery($searchTerm);

        return $query;
    }
}
