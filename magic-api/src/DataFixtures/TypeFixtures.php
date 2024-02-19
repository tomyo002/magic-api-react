<?php

namespace App\DataFixtures;

use App\Factory\TypeFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TypeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        TypeFactory::createSequence(json_decode(
            file_get_contents(__DIR__.'/data/type.json'),
            true
        ));
    }
}
