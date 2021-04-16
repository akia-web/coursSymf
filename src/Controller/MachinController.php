<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MachinController extends AbstractController
{
    /**
     * @Route("/machin", name="machin")
     */
    public function index(): Response
    {
        return $this->render('machin/index.html.twig', [
            'controller_name' => 'MachinController',
        ]);
    }

      /**
     * @Route("/machin/truc/{number}", name="machin/truc")
     */
    public function truc($number): Response
    {
        return $this->render('machin/index.html.twig', [
            'controller_name' => 'MachinController',
            'number' => $number

        ]);
    }
}
