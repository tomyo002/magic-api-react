<?php

namespace App\Factory;

use App\Entity\KeywordCard;
use App\Repository\KeywordCardRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<KeywordCard>
 *
 * @method        KeywordCard|Proxy create(array|callable $attributes = [])
 * @method static KeywordCard|Proxy createOne(array $attributes = [])
 * @method static KeywordCard|Proxy find(object|array|mixed $criteria)
 * @method static KeywordCard|Proxy findOrCreate(array $attributes)
 * @method static KeywordCard|Proxy first(string $sortedField = 'id')
 * @method static KeywordCard|Proxy last(string $sortedField = 'id')
 * @method static KeywordCard|Proxy random(array $attributes = [])
 * @method static KeywordCard|Proxy randomOrCreate(array $attributes = [])
 * @method static KeywordCardRepository|RepositoryProxy repository()
 * @method static KeywordCard[]|Proxy[] all()
 * @method static KeywordCard[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static KeywordCard[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static KeywordCard[]|Proxy[] findBy(array $attributes)
 * @method static KeywordCard[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static KeywordCard[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class KeywordCardFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(KeywordCard $keywordCard): void {})
        ;
    }

    protected static function getClass(): string
    {
        return KeywordCard::class;
    }
}
