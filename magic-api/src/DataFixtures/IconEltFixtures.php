<?php

namespace App\DataFixtures;

use App\Factory\ElementFactory;
use App\Factory\IconEltFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class IconEltFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $tab = json_decode(
            file_get_contents(__DIR__.'/data/icon.json'),
            true
        );
        foreach ($tab as $t) {
            $t['element'] = ElementFactory::find(['id' => $t['element']]);
            $t['icon'] = file_get_contents(__DIR__.'/../../public/images/'.$t['icon']);
            IconEltFactory::createOne($t);
        }
    }

    public function getDependencies()
    {
        return [
            ElementFixtures::class,
        ];
    }
}
