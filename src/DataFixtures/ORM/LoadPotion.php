<?php

namespace App\DataFixtures\ORM;

use App\Entity\Potion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPotion extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $potions = [
            new Potion('test', 100, 100),
            new Potion('Berserk', 100, 50),
            new Potion('Mange_tes_Morts', 100, 10),
            new Potion('Loli', 100, -50),
        ];

        foreach ($potions as $potion) {
            $this->addReference($potion->getName(), $potion);
            $manager->persist($potion);
        }

        $manager->flush();
    }
}
