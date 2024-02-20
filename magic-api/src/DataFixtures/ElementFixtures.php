<?php

namespace App\DataFixtures;

use App\Factory\ElementFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ElementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ElementFactory::createSequence(
            json_decode(
                file_get_contents(__DIR__.'/data/element.json'),
                true
            )
        );
    }
}
