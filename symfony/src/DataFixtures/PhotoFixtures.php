<?php

namespace App\DataFixtures;

use App\Entity\Photo;
use App\Entity\RestArea;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PhotoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $photo1 = new Photo();
        $photo1->setUrl('/images/restarea_1.jpg');
        $photo1->setRestAreaId($this->getReference('rest_area_1'));
        $manager->persist($photo1);

        $photo2 = new Photo();
        $photo2->setUrl('/images/restarea_2.jpg');
        $photo2->setRestAreaId($this->getReference('rest_area_2'));
        $manager->persist($photo2);

        $photo3 = new Photo();
        $photo3->setUrl('/images/restarea_3.jpg');
        $photo3->setRestAreaId($this->getReference('rest_area_3'));
        $manager->persist($photo3);

        $photo4 = new Photo();
        $photo4->setUrl('/images/restarea_4.jpg');
        $photo4->setRestAreaId($this->getReference('rest_area_4'));
        $manager->persist($photo4);

        $photo5 = new Photo();
        $photo5->setUrl('/images/restarea_5.jpg');
        $photo5->setRestAreaId($this->getReference('rest_area_5'));
        $manager->persist($photo5);

        $manager->flush();
    }
}
