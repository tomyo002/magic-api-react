<?php

namespace App\Factory;

use App\Entity\Cost;
use App\Repository\CostRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Cost>
 *
 * @method        Cost|Proxy create(array|callable $attributes = [])
 * @method static Cost|Proxy createOne(array $attributes = [])
 * @method static Cost|Proxy find(object|array|mixed $criteria)
 * @method static Cost|Proxy findOrCreate(array $attributes)
 * @method static Cost|Proxy first(string $sortedField = 'id')
 * @method static Cost|Proxy last(string $sortedField = 'id')
 * @method static Cost|Proxy random(array $attributes = [])
 * @method static Cost|Proxy randomOrCreate(array $attributes = [])
 * @method static CostRepository|RepositoryProxy repository()
 * @method static Cost[]|Proxy[] all()
 * @method static Cost[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Cost[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Cost[]|Proxy[] findBy(array $attributes)
 * @method static Cost[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Cost[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class CostFactory extends ModelFactory
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
            'number' => self::faker()->randomNumber(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Cost $cost): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Cost::class;
    }
}
