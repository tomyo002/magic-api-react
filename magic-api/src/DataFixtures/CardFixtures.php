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
            if (isset($t['healthPoint'])) {
                CardFactory::createOne(
                    [
                        'name' => $t['name'],
                        'subtype' => $t['subtype'],
                        'healthPoint' => $t['healthPoint'],
                        'attackPoint' => $t['attackPoint'],
                        'type' => TypeFactory::find(['id' => $t['type']]),
                        'extension' => ExtensionFactory::find(['id' => $t['extension']]),
                        'rarity' => $t['rarity'],
                        ]
                );
            } elseif (isset($t['loyalty'])) {
                CardFactory::createOne(
                    [
                        'name' => $t['name'],
                        'subtype' => $t['subtype'],
                        'loyalty' => $t['loyalty'],
                        'type' => TypeFactory::find(['id' => $t['type']]),
                        'extension' => ExtensionFactory::find(['id' => $t['extension']]),
                        'rarity' => $t['rarity'],
                    ]
                );
            } else {
                CardFactory::createOne(
                    [
                        'name' => $t['name'],
                        'type' => TypeFactory::find(['id' => $t['type']]),
                        'extension' => ExtensionFactory::find(['id' => $t['extension']]),
                        'rarity' => $t['rarity'],
                    ]);
            }
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
