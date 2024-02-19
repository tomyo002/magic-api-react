<?php

namespace App\DataFixtures;

use App\Factory\ExtensionFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ExtensionFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ExtensionFactory::createSequence(json_decode(
            file_get_contents(__DIR__.'/data/extension.json'),
            true
        ));
    }
}
