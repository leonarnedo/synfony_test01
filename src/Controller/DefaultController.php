<?php
// src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends BaseController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        // Puedes reemplazar el contenido de la respuesta con lo que necesites
        // Por ejemplo, renderizar una plantilla:
        // return $this->render('default/index.html.twig');
        
        // Aquí, simplemente devolvemos una respuesta HTTP simple.
        return new Response('Bienvenido a mi aplicación Symfony');
    }
}
