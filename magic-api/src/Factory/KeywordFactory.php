<?php

namespace App\Factory;

use App\Entity\Keyword;
use App\Repository\KeywordRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Keyword>
 *
 * @method        Keyword|Proxy create(array|callable $attributes = [])
 * @method static Keyword|Proxy createOne(array $attributes = [])
 * @method static Keyword|Proxy find(object|array|mixed $criteria)
 * @method static Keyword|Proxy findOrCreate(array $attributes)
 * @method static Keyword|Proxy first(string $sortedField = 'id')
 * @method static Keyword|Proxy last(string $sortedField = 'id')
 * @method static Keyword|Proxy random(array $attributes = [])
 * @method static Keyword|Proxy randomOrCreate(array $attributes = [])
 * @method static KeywordRepository|RepositoryProxy repository()
 * @method static Keyword[]|Proxy[] all()
 * @method static Keyword[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Keyword[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Keyword[]|Proxy[] findBy(array $attributes)
 * @method static Keyword[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Keyword[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class KeywordFactory extends ModelFactory
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
            'description' => self::faker()->text(1000),
            'name' => self::faker()->text(20),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Keyword $keyword): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Keyword::class;
    }
}
