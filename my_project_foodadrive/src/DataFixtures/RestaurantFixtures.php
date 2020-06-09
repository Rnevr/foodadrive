<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Restaurant;

class RestaurantFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $r1 = new Restaurant();
        $r1->setNom("Lion d'or")
            ->setVille("Saint Malo 35400")
            ->setLogo("liondor.png")
            ->setAdresse("1 place Chateaubriant")
            ;
        $manager->persist($r1);
        $r2 = new Restaurant();
        $r2->setNom("Bistrot D'Angel")
            ->setVille("Goven 35580")
            ->setLogo("bistrotdangel.png")
            ->setAdresse("8 rue de la Mairie")
        ;
        $manager->persist($r2);
        $r3 = new Restaurant();
        $r3->setNom("Au gré des saisons")
            ->setVille("La Chapelle Thouarault 35590")
            ->setLogo("augredessaisons.png")
            ->setAdresse("6 rue du commerce")
        ;
        $manager->persist($r3);

        $manager->flush();
    }
}
