<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
       /**
     * @Route("/", name="inicio")
     * @Route("/Inicio", name="inicio2")
     */
       public function hacienda_inicio_Action()
       {
         return $this->render('default/index_hacienda.html.twig');
     }


      /**
     * @Route("/sobre_hacienda.html", name="nosotros")
     */
       public function hacienda_nosotros_Action()
       {
         return $this->render('default/sobre_hacienda.html.twig');
     }

      /**
     * @Route("/donde_hacienda.html", name="donde")
     */
       public function hacienda_donde_Action()
       {
         return $this->render('default/donde_hacienda.html.twig');
     }


      /**
     * @Route("/contacto_hacienda.html", name="contacto")
     */
       public function hacienda_contacto_Action()
       {
         return $this->render('default/contacto_hacienda.html.twig');
     }
}