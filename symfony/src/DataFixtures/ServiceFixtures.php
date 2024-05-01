<?php

namespace App\DataFixtures;

use App\Entity\Service;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ServiceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $service1 = new Service();
        $service1->setName('Pompe à essence');
        $manager->persist($service1);

        $service2 = new Service();
        $service2->setName('Station de lavage');
        $manager->persist($service2);

        $service3 = new Service();
        $service3->setName('Boutique');
        $manager->persist($service3);

        $service4 = new Service();
        $service4->setName('Toilettes');
        $manager->persist($service4);

        $service5 = new Service();
        $service5->setName('Atelier de réparation');
        $manager->persist($service5);


        $manager->flush();
    }
}
