<?php

namespace App\DataFixtures;

use App\Factory\CapacityFactory;
use App\Factory\CardFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CapacityFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $tab = json_decode(
            file_get_contents(__DIR__.'/data/capacity.json'),
            true
        );
        foreach ($tab as $t) {
            $t['card'] = CardFactory::find(['id' => $t['card']]);
            CapacityFactory::createOne($t);
        }
    }

    public function getDependencies()
    {
        return [
            CardFixtures::class,
        ];
    }
}
