<?php

namespace App\DataFixtures;

use App\DataFixtures\Providers\InformationProvider;
use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = Factory::create('fr_FR');
        $infoProvider = new InformationProvider();
        for ($i = 0; $i < 6; $i++) {
            $newArticle = new Article();

            $newArticle
                ->setTitle(ucfirst($infoProvider->getRandomTitle()))
                ->setContent($infoProvider->text())
                ->setCover($infoProvider->getImage())
                ->setCreatedAt($faker->dateTimeBetween('-2 years', 'now'));

            $manager->persist($newArticle);
        }

        $manager->flush();
    }
}
