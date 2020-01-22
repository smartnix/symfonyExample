<?php

namespace App\Controller\Rentasmunicipales;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class conceptosController extends AbstractController
{
    
    public function index()
    {
        return $this->render('rentasmunicipales/conceptos/index.html.twig', [
            'controller_name' => 'conceptosController',
        ]);
    }
    public function listarConceptos()
    {
        return $this->render('rentasmunicipales/conceptos/index.html.twig', [
            'controller_name' => 'conceptosController',
        ]);
    }
}
