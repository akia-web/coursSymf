<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MesEntity\Post;

class PostController extends AbstractController
{

    public $mesArticles;
    public function __construct()
    {
        $this->mesArticles = 
        [
            new Post(1, 1, "Jour 1", "Petit mot pour vous dire que tout vas bien"),
            new Post(2, 2, "Jour 2", "Je crois que mes voisins sont fous"),
            new Post(3, 3, "Jour 3", "Fuite d'eau, mais ça va c'est réparé"),
            new Post(4, 4, "Jour 4", "Au secours!!"),

        ];
    }
    private function FindPost($id){
        foreach ($this->mesArticles as $post){
            if  ($post->id == $id){
                return ($post);
            }
        }
    }

    /**
     * @Route("/post", name="post")
     */
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
            'posts'=>$this->mesArticles
        ]);
    }

  
     /**
     * @Route("/post/{id}", name="postid")
     */
    public function post($id)
    {
            $p =$this->FindPost($id);
        return $this->render('post/article.html.twig', [
            'controller_name' => 'PostController',
            'posts'=>$p,
            
            
            
        ]);
    }
}
