<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="app_home")
     */
    public function home(ArticleRepository $articleRepository): Response
    {

        return $this->render('home/index.html.twig', [
        "articles" => $articleRepository->getDate()
        ]);
    }

    /**
     * @Route ("/article/{slug}", name="article_id")
     */
    public function article (Article $article) : Response
    {

        $breadcrumb = [];

        $breadcrumb[] = ["url" => $this->generateUrl('app_home'),"label" => "Home"];

        $breadcrumb[] = ["url" => $this->generateUrl('article_id', ['slug' => $article->getSlug()]),"label" => $article->getTitle()];

        return $this->render('article/index.html.twig', [
        "article" => $article,
        "breadcrumb" => $breadcrumb
    ]);
    }
}
