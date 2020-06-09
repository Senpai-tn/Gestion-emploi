<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PaginatorInterface $paginator, Request $request)
    {
        $m=$this->getDoctrine()->getManager();
        $articles = $m->getRepository(Article::class)->findAll();
        $categories = $m->getRepository(Category::class)->findAll();
        $pagination = $paginator->paginate(
            $articles,
            $request->query->getInt('page', 1), /*page number*/
            4 /*limit per page*/
        );
        return $this->render('article/index.html.twig', [
            'articles'=>$pagination,
            'categories'=>$categories
        ]);
    }
}
