<?php

namespace App\EventListener;
use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;

class SlugListener
{

    public function prePersist(Article $article, LifecycleEventArgs $event)
    {
        $article->setSlug(strtr(strtolower($article->getTitle()), "éàÉÀ", "eaEA"));
    }
}