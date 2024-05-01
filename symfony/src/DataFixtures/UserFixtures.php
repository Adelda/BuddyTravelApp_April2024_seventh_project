<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setUsername('john_doe');
        $user1->setEmail('john.doe@example.com');
        $user1->setPassword('$argon2id$v=19$m=65536,t=4,p=1$KnEw5unyBdVPJ4S2xxD8vQ$Bstw6HLAH5yYJHXvCXtdkrgl5yVIQoQnw4GyYD6mnBQ');
        $manager->persist($user1);
        $this->addReference('user_id_1', $user1);

        $user2 = new User();
        $user2->setUsername('jane_smith');
        $user2->setEmail('jane.smith@example.com');
        $user2->setPassword('$argon2id$v=19$m=65536,t=4,p=1$KnEw5unyBdVPJ4S2xxD8vQ$Bstw6HLAH5yYJHXvCXtdkrgl5yVIQoQnw4GyYD6mnBQ');
        $manager->persist($user2);
        $this->addReference('user_id_2', $user2);

        $user3 = new User();
        $user3->setUsername('alice_miller');
        $user3->setEmail('alice.miller@example.com');
        $user3->setPassword('$argon2id$v=19$m=65536,t=4,p=1$KnEw5unyBdVPJ4S2xxD8vQ$Bstw6HLAH5yYJHXvCXtdkrgl5yVIQoQnw4GyYD6mnBQ');
        $manager->persist($user3);
        $this->addReference('user_id_3', $user3);

        $user4 = new User();
        $user4->setUsername('robert_jones');
        $user4->setEmail('robert.jones@example.com');
        $user4->setPassword('$argon2id$v=19$m=65536,t=4,p=1$KnEw5unyBdVPJ4S2xxD8vQ$Bstw6HLAH5yYJHXvCXtdkrgl5yVIQoQnw4GyYD6mnBQ');
        $manager->persist($user4);
        $this->addReference('user_id_4', $user4);

        $user5 = new User();
        $user5->setUsername('emily_adams');
        $user5->setEmail('emily.adams@example.com');
        $user5->setPassword('$argon2id$v=19$m=65536,t=4,p=1$KnEw5unyBdVPJ4S2xxD8vQ$Bstw6HLAH5yYJHXvCXtdkrgl5yVIQoQnw4GyYD6mnBQ');
        $manager->persist($user5);
        $this->addReference('user_id_5', $user5);


        $manager->flush();
    }
}
