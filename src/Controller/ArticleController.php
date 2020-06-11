<?php

namespace App\Controller;

use App\Entity\Application;
use App\Entity\Article;
use App\Entity\Category;
use App\Entity\User;
use App\Form\ArticleType;
use App\Form\UserType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PaginatorInterface $paginator, Request $request)
    {

        $app = array();
        $m=$this->getDoctrine()->getManager();
        $session = $request->getSession();
        $articles = $m->getRepository(Article::class)->findBy(["deletedAt"=>null]);
        $categories = $m->getRepository(Category::class)->findAll();
        $u  = $m->getRepository(User::class)->find($session->get("user_id"));
        foreach ($u->getApplications() as $a)
        {
            $app[$a->getId()] = $a->getArticle()->getId();
        }
        $pagination = $paginator->paginate(
            $articles,
            $request->query->getInt('page', 1), /*page number*/
            8 /*limit per page*/
        );
        return $this->render('article/index.html.twig', [
            'articles'=>$pagination,
            'categories'=>$categories,
            'ap' => $app
        ]);
    }

    /**
     * @Route("/article/add",name="add_article")
     */
    public function AddArticle(Request $r)
    {
        $m = $this->getDoctrine()->getManager();
        $session = $r->getSession();
        $user = $m->getRepository(User::class)->find($session->get("user_id"));
        $article = new Article();

        $form = $this->createForm(ArticleType::class,$article);
        $form->handleRequest($r);
        if($form->isSubmitted())
        {
            $article->setCreatedAt(new \DateTime());
            $article->setUser($user);
            $m->persist($article);
            $m->flush();
            return $this->redirect($this->generateUrl("index"));
        }
        else
        {
            return $this->render('article/add.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }

    /**
     * @Route("/article/delete",name="delete_article")
     */
    public function DeleteArticle(Request $r)
    {
        $m = $this->getDoctrine()->getManager();
        $article = $m->getRepository(Article::class)->find($r->request->get("id"));
        $article->setDeletedAt(new \DateTime());
        $m->persist($article);
        $m->flush();
        return new Response("success");
    }

    /**
     * @Route("/article/update",name="update_article")
     */
    public function UpdateArticle(Request $r)
    {
        $m = $this->getDoctrine()->getManager();
        $article = $m->getRepository(Article::class)->find($r->get('id'));


        $form = $this->createForm(ArticleType::class,$article);
        $form->handleRequest($r);
        if($form->isSubmitted())
        {
            $m->persist($article);
            $m->flush();
            return $this->redirect($this->generateUrl("index"));
        }
        else
        {
            return $this->render('article/update.html.twig', [
                'form' => $form->createView(),
                'article' => $article
            ]);
        }
    }


    /**
     * @Route("/article/search",name="search_article")
     */
    public function Search(PaginatorInterface $paginator,Request $r)
    {
        $m = $this->getDoctrine()->getManager();
        $session = $r->getSession();
        $title = $r->request->get("title");
        $t = $r->request->get("type");
        $l = $r->request->get("location");
        $articles = $m->getRepository(Article::class)->findByExampleField($title,$t,$l);
        $app = array();
        $categories = $m->getRepository(Category::class)->findAll();
        $u  = $m->getRepository(User::class)->find($session->get("user_id"));
        foreach ($u->getApplications() as $a)
        {
            $app[$a->getId()] = $a->getArticle()->getId();
        }
        $pagination = $paginator->paginate(
            $articles,
            $r->query->getInt('page', 1), /*page number*/
            8 /*limit per page*/
        );
        return $this->render('article/index.html.twig', [
            'articles'=>$pagination,
            'categories'=>$categories,
            'ap' => $app
        ]);
    }
}
