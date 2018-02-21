<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListController extends Controller
{
    /**
     * @Route("/", name="welcome")
     */
    public function showAction(Request $request)
    {
        $characters = [
          'The Saba Hotel Via Argentina' => 'Front of Andres Bello Park, Ciudad de Panamá, Panamá',
          'Novotel Panamá City'           => 'Calle Jose I Fabrega y Thais de Ponds - Bella Vista El Cangrejo, Ciudad de Panamá',
          'Hilton Garden '         => 'Panama Eusebio A Morales y calle 49 A oeste El Cangrejo, Bellavista, Ciudad de Panamá',
          'Clarion Victoria Hotel'         => 'Suites Panama Guardar Via Veneto, Calle D, El Cangrejo, Ciudad de Panamá',
          'Eurostars Panama City'         => 'Calle Ricardo Arias – Bellavista Vía España, Ciudad de Panamá',
          'Waldorf Astoria Panama'   => '47th St. & Uruguay Street walking distance to Balboa Avenue, Ciudad de Panamá',
          'DoubleTree By Hilton'      => 'Via Espana & Federico Boyd Ave, Ciudad de Panamá',
          'Continental Hotel & Casino'      => 'Via Espana and Ricardo Arias Street, Ciudad de Panamá',
          'Global Hotel Panama'   => 'Calle 54 Este y Samuel Lewis, Ciudad de Panamá, Panamá',
          'Tryp by Wyndham'         => 'Via Veneto El Cangrejo BellaVista, Ciudad de Panamá'
        ];

        return $this->render('default/index.html.twig', array('character' => $characters));
    }
}