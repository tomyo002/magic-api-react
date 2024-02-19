<?php

namespace App\Factory;

use App\Entity\Extension;
use App\Repository\ExtensionRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Extension>
 *
 * @method        Extension|Proxy create(array|callable $attributes = [])
 * @method static Extension|Proxy createOne(array $attributes = [])
 * @method static Extension|Proxy find(object|array|mixed $criteria)
 * @method static Extension|Proxy findOrCreate(array $attributes)
 * @method static Extension|Proxy first(string $sortedField = 'id')
 * @method static Extension|Proxy last(string $sortedField = 'id')
 * @method static Extension|Proxy random(array $attributes = [])
 * @method static Extension|Proxy randomOrCreate(array $attributes = [])
 * @method static ExtensionRepository|RepositoryProxy repository()
 * @method static Extension[]|Proxy[] all()
 * @method static Extension[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Extension[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Extension[]|Proxy[] findBy(array $attributes)
 * @method static Extension[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Extension[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ExtensionFactory extends ModelFactory
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
            'name' => self::faker()->text(50),
            'releaseYear' => self::faker()->text(9),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Extension $extension): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Extension::class;
    }
}
