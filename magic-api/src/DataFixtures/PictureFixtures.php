<?php

namespace App\DataFixtures;

use App\Factory\CardFactory;
use App\Factory\PictureFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PictureFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $tab = json_decode(
            file_get_contents(__DIR__.'/data/picture.json'),
            true
        );
        foreach ($tab as $t) {
            PictureFactory::createOne(
                [
                    'card' => CardFactory::find(['id' => $t['card']]),
                    'picture' => file_get_contents(__DIR__.'/../../public/images/card/'.$t['picture']),
                ]
            );
        }
    }

    public function getDependencies()
    {
        return [
            CardFixtures::class,
        ];
    }
}