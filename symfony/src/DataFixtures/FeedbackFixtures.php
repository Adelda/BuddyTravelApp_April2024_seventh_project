<?php

namespace App\DataFixtures;

use App\Entity\Feedback;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class FeedbackFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $feedback1 = new Feedback();
        $feedback1->setRating(5);
        $feedback1->setComment("L'aire de repos était propre et bien entretenue. J'ai passé une excellente expérience ici.");
        $feedback1->setUserId($this->getReference('user_id_1'));
        $feedback1->setRestAreaId($this->getReference('rest_area_1'));
        $manager->persist($feedback1);

        $feedback2 = new Feedback();
        $feedback2->setRating(4);
        $feedback2->setComment("Bien que les installations de l'aire de repos soient bonnes, il pourrait y avoir plus d'éclairage la nuit.");
        $feedback2->setUserId($this->getReference('user_id_2'));
        $feedback2->setRestAreaId($this->getReference('rest_area_2'));
        $manager->persist($feedback2);

        $feedback3 = new Feedback();
        $feedback3->setRating(5);
        $feedback3->setComment("Le personnel de cette aire de repos était très sympathique et serviable.");
        $feedback3->setUserId($this->getReference('user_id_3'));
        $feedback3->setRestAreaId($this->getReference('rest_area_3'));
        $manager->persist($feedback3);

        $feedback4 = new Feedback();
        $feedback4->setRating(4);
        $feedback4->setComment("Les toilettes étaient propres et bien approvisionnées en fournitures.");
        $feedback4->setUserId($this->getReference('user_id_4'));
        $feedback4->setRestAreaId($this->getReference('rest_area_4'));
        $manager->persist($feedback4);

        $feedback5 = new Feedback();
        $feedback5->setRating(5);
        $feedback5->setComment("Cette aire de repos offre de magnifiques vues sur la campagne environnante.");
        $feedback5->setUserId($this->getReference('user_id_5'));
        $feedback5->setRestAreaId($this->getReference('rest_area_5'));
        $manager->persist($feedback5);


        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
            RestAreaFixtures::class,  // Assurez-vous que cette classe existe et crée les références nécessaires
        ];
    }
}