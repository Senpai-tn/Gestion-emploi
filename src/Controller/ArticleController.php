<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index()
    {
        $m=$this->getDoctrine()->getManager();
        $articles = $m->getRepository(Article::class)->findAll();
        $categories = $m->getRepository(Category::class)->findAll();
        return $this->render('article/index.html.twig', [
            'articles'=>$articles,
            'categories'=>$categories
        ]);
    }
}
