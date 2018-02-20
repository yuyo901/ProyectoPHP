<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Character;
use AppBundle\Form\EntryForm;

class CreateController extends Controller
{
    /**
     * @Route("/create-character", name="create_character")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createCharacterAction(Request $request)
    {
        $character = new Character();

        //$author = $this->authorRepository->findOneByUsername($this->getUser()->getUserName());
        //$blogPost->setAuthor($author);

        $form = $this->createForm(EntryForm::class, $character);
        $form->handleRequest($request);

        // Check is valid
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($character);
            $em->flush($character);

            $this->addFlash('success', 'Congratulations! Your new character is created');

            return $this->redirectToRoute('characters');
        }

        return $this->render('auth/entry_form.html.twig', [
            'form' => $form->createView()
        ]);
    }
}