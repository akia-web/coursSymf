<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    /**
     * @Route("/calcul", name="calcul")
     */
    public function index(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'CalculController',
        ]);
    }

      /**
     * @Route("/calcul/addition/{number1}/{number2}", name="machin/addition")
     */
    public function addition($number1, $number2): Response
    {
        if(is_numeric($number1) && is_numeric($number2)){
            return $this->render('calcul/index.html.twig', [
                'controller_name' => 'CalculController',
                'number1' => $number1,
                'number2' => $number2,
                'signe' => '+',
                'resultat' => $number1 + $number2
    
            ]);
        }else{
            return $this->render('calcul/erreur.html.twig', [
                'controller_name' => 'CalculController',
                
    
            ]);
        }

       
    }

     /**
     * @Route("/calcul/soustraction/{number1}/{number2}", name="calcul/soustraction")
     */
    public function soustraction($number1, $number2): Response
    {
        if(is_numeric($number1) && is_numeric($number2)){
            return $this->render('calcul/index.html.twig', [
                'controller_name' => 'CalculController',
                'number1' => $number1,
                'number2' => $number2,
                'signe' => '-',
                'resultat' => $number1 - $number2
    
            ]);
        }else{
            return $this->render('calcul/erreur.html.twig', [
                'controller_name' => 'CalculController',
                
    
            ]);
        }
    }

     /**
     * @Route("/calcul/multiplication/{number1}/{number2}", name="calcul/multiplication")
     */
    public function multiplication($number1, $number2): Response
    {
        if(is_numeric($number1) && is_numeric($number2)){
            return $this->render('calcul/index.html.twig', [
                'controller_name' => 'CalculController',
                'number1' => $number1,
                'number2' => $number2,
                'signe' => '*',
                'resultat' => $number1 * $number2
    
            ]);
        }else{
            return $this->render('calcul/erreur.html.twig', [
                'controller_name' => 'CalculController',
                
    
            ]);
        }
    }

         /**
     * @Route("/calcul/division/{number1}/{number2}", name="calcul/division")
     */
    public function division($number1, $number2): Response
    {
        if(is_numeric($number1) && is_numeric($number2)){
            return $this->render('calcul/index.html.twig', [
                'controller_name' => 'CalculController',
                'number1' => $number1,
                'number2' => $number2,
                'signe' => '/',
                'resultat' => $number1 / $number2
    
            ]);
        }else{
            return $this->render('calcul/erreur.html.twig', [
                'controller_name' => 'CalculController',
                
    
            ]);
        }
    }
}
