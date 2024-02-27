<?php

namespace App\DataFixtures;

use App\Factory\CardFactory;
use App\Factory\CostFactory;
use App\Factory\ElementFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CostFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $tab = json_decode(
            file_get_contents(__DIR__.'/data/cost.json'),
            true
        );
        foreach ($tab as $t) {
            $t['card'] = CardFactory::find(['id' => $t['card']]);
            $t['element'] = ElementFactory::find(['id' => $t['element']]);
            CostFactory::createOne($t);
        }
    }

    public function getDependencies()
    {
        return [
            CardFixtures::class,
            ElementFixtures::class,
        ];
    }
}
