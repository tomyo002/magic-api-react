<?php

namespace App\DataFixtures;

use App\Factory\CardFactory;
use App\Factory\ExtensionFactory;
use App\Factory\TypeFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CardFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $tab = json_decode(
            file_get_contents(__DIR__.'/data/card.json'),
            true
        );
        foreach ($tab as $t) {
            $t['type'] = TypeFactory::find(['id' => $t['type']]);
            $t['extension'] = ExtensionFactory::find(['id' => $t['extension']]);
            CardFactory::createOne($t);
        }
    }

    public function getDependencies()
    {
        return [
            ExtensionFixtures::class,
            KeywordFixtures::class,
            TypeFixtures::class,
        ];
    }
}
