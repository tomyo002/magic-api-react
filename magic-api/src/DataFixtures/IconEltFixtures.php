<?php

namespace App\DataFixtures;

use App\Factory\ElementFactory;
use App\Factory\IconEltFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\Element;

class IconEltFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $tab = json_decode(
            file_get_contents(__DIR__.'/data/icon.json'),
            true
        );
        foreach ($tab as $t) {
            IconEltFactory::createOne(
                [
                    'element' => ElementFactory::find(['id' => $t['element']]),
                    'icon' => file_get_contents(__DIR__.'/../../public/images/'.$t['icon']),
                ]
            );
        }
    }

    public function getDependencies()
    {
        return [
            ElementFixtures::class,
        ];
    }
}
