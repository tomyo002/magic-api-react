<?php

namespace App\DataFixtures;

use App\Factory\CardFactory;
use App\Factory\KeywordCardFactory;
use App\Factory\KeywordFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class KeywordCardFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $tab = json_decode(
            file_get_contents(__DIR__.'/data/keywordCard.json'),
            true
        );
        foreach ($tab as $t) {
            KeywordCardFactory::createOne([
                'card' => CardFactory::find(['id' => $t['card']]),
                'keyword' => KeywordFactory::find(['id' => $t['keyword']]),
            ]);
        }
    }

    public function getDependencies()
    {
        return [
            CardFixtures::class,
            KeywordFixtures::class,
        ];
    }
}