<?php

namespace App\Controller;

use App\Entity\Application;
use App\Entity\Article;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(Request $r)
    {
        $m = $this->getDoctrine()->getManager();
        $session = $r->getSession();
        $user = new User();
        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($r);
        if($form->isSubmitted())
        {
            $username = $form->get("username")->getData();
            $password = $form->get("password")->getData();
            $user = $m->getRepository(User::class)->findOneBy(['username'=>$username,'password'=>$password]);
            if($user != null)
            {
                $session->set("user_id",$user->getId());
                return $this->redirect($this->generateUrl("index"));
            }
            else
            {
                $this->addFlash("error","Verify your username and your password");
                return $this->render('user/login.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

        }
        else
            return $this->render('user/login.html.twig', [
                'form' => $form->createView(),
            ]);
    }


    /**
     * @Route("/register", name="register")
     */
    public function register(Request $r)
    {
        $m = $this->getDoctrine()->getManager();
        $session = $r->getSession();
        $user = new User();
        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($r);
        if($form->isSubmitted())
        {
            $user->setCreatedAt(new \DateTime());
            $m->persist($user);
            $m->flush();
            $session->set("user_id",$user->getId());
            return $this->redirect($this->generateUrl("index"));

        }
        else
            return $this->render('user/register.html.twig', [
                'form' => $form->createView(),
            ]);


    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(Request $r)
    {
        $session = $r->getSession();

                $session->remove("user_id");
                return $this->redirect($this->generateUrl("index"));


    }


    /**
     * @Route("/profile",name="profile")
     */
    public function profile(Request $r)
    {
        $m = $this->getDoctrine()->getManager();
        $user = $m->getRepository(User::class)->find((int)$r->getSession()->get("user_id"));
        $articles = $m->getRepository(Article::class)->findBy(["deletedAt"=>null]);
        return $this->render(
            'user/profile.html.twig',
            [
                'user'=> $user,
                'articles' => $articles
            ]
        );
    }

    /**
     * @Route("/update",name="update")
     */
    public function update(Request $r)
    {
        $m = $this->getDoctrine()->getManager();
        $session = $r->getSession();
        $user = $m->getRepository(User::class)->find($session->get("user_id"));

        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($r);
        if($form->isSubmitted())
        {
            $m->persist($user);
            $m->flush();
            $session->set("user_id",$user->getId());
            return $this->redirect($this->generateUrl("profile"));

        }
        else
            return $this->render('user/update.html.twig', [
                'form' => $form->createView(),
                'user' => $user
            ]);
    }

    /**
     * @Route("/apply",name="apply")
     */
    public function Apply(Request $r)
    {
        $m = $this->getDoctrine()->getManager();
        $a = new Application();
        $a->setCreatedAt(new \DateTime());
        $u = $m->getRepository(User::class)->find((int)$r->getSession()->get("user_id"));
        $article = $m->getRepository(Article::class)->find((int)$r->request->get("id"));
        $a->setUser($u);
        $a->setArticle($article);
        $m->persist($a);
        $m->flush();

        return new Response("success");

    }





}
