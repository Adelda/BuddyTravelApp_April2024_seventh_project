<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BrandFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $brand1 = new Brand();
        $brand1->setName("Shell");
        $brand1->setDescription("Une marque internationale renommée pour ses stations-service et ses produits de qualité.");
        $manager->persist($brand1);

        $brand2 = new Brand();
        $brand2->setName("Total");
        $brand2->setDescription("Une marque de confiance pour les automobilistes du monde entier.");
        $manager->persist($brand2);

        $brand3 = new Brand();
        $brand3->setName("BP");
        $brand3->setDescription("Propose une gamme complète de carburants et de services pour les automobilistes.");
        $manager->persist($brand3);

        $brand4 = new Brand();
        $brand4->setName("Esso");
        $brand4->setDescription("Connue pour ses stations-service fiables et son engagement envers l'innovation.");
        $manager->persist($brand4);

        $brand5 = new Brand();
        $brand5->setName("Total Access");
        $brand5->setDescription("Une marque offrant des carburants à prix compétitifs et des services de qualité.");
        $manager->persist($brand5);


        $manager->flush();
    }
}
