<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class CharactersController extends Controller
{

    /** @var EntityManagerInterface */
    private $entityManager;
    
    /** @var \Doctrine\Common\Persistence\ObjectRepository */
    private $CharacterRepository;

    
    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->CharacterRepository = $entityManager->getRepository('AppBundle:Character');
    }


    /**
     * @Route("/characters", name="characters")
     */
    public function listCharactersAction(Request $request)
    {
        return $this->render('default/characters.html.twig', [
            'characters' => $this->CharacterRepository->getAllCharacters()
        ]);
    }
}
