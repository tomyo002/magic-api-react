<?php

namespace App\Factory;

use App\Entity\Capacity;
use App\Repository\CapacityRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Capacity>
 *
 * @method        Capacity|Proxy create(array|callable $attributes = [])
 * @method static Capacity|Proxy createOne(array $attributes = [])
 * @method static Capacity|Proxy find(object|array|mixed $criteria)
 * @method static Capacity|Proxy findOrCreate(array $attributes)
 * @method static Capacity|Proxy first(string $sortedField = 'id')
 * @method static Capacity|Proxy last(string $sortedField = 'id')
 * @method static Capacity|Proxy random(array $attributes = [])
 * @method static Capacity|Proxy randomOrCreate(array $attributes = [])
 * @method static CapacityRepository|RepositoryProxy repository()
 * @method static Capacity[]|Proxy[] all()
 * @method static Capacity[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Capacity[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Capacity[]|Proxy[] findBy(array $attributes)
 * @method static Capacity[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Capacity[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class CapacityFactory extends ModelFactory
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
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Capacity $capacity): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Capacity::class;
    }
}
