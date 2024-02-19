<?php

namespace App\DataFixtures;

use App\Factory\KeywordFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class KeywordFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        KeywordFactory::createSequence(json_decode(
            file_get_contents(__DIR__.'/data/keyword.json'),
            true
        ));
    }
}
