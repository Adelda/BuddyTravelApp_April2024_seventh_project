<?php

namespace App\DataFixtures;

use App\Entity\RestArea;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RestAreaFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $restArea1 = new RestArea();
        $restArea1->setName('Aire du Var Dump');
        $restArea1->setDescription('Une aire de repos');
        $restArea1->setLatitude(48.8566); 
        $restArea1->setLongitude(2.3522);
        $manager->persist($restArea1);
        $this->addReference('rest_area_1', $restArea1);

        $restArea2 = new RestArea();
        $restArea2->setName('Aire du bois joli');
        $restArea2->setDescription('Une jolie aire de repos');
        $restArea2->setLatitude(48.8566); 
        $restArea2->setLongitude(2.3522); 
        $manager->persist($restArea2);
        $this->addReference('rest_area_2', $restArea2);

        $restArea3 = new RestArea();
        $restArea3->setName('Aire tranquille');
        $restArea3->setDescription('Une aire de repos calme');
        $restArea3->setLatitude(48.8566); 
        $restArea3->setLongitude(2.3522); 
        $manager->persist($restArea3);
        $this->addReference('rest_area_3', $restArea3);

        $restArea4 = new RestArea();
        $restArea4->setName('Aire de montagne');
        $restArea4->setDescription('Une aire de repos en montagne');
        $restArea4->setLatitude(46.603354); 
        $restArea4->setLongitude(1.888334); 
        $manager->persist($restArea4);
        $this->addReference('rest_area_4', $restArea4);

        $restArea5 = new RestArea();
        $restArea5->setName('Aire sur autoroute');
        $restArea5->setDescription('Une aire de repos sur l\'autoroute');
        $restArea5->setLatitude(48.8566); 
        $restArea5->setLongitude(2.3522); 
        $manager->persist($restArea5);
        $this->addReference('rest_area_5', $restArea5);

        $manager->flush();
    }
}
