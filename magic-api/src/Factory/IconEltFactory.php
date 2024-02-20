<?php

namespace App\Factory;

use App\Entity\IconElt;
use App\Repository\IconEltRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<IconElt>
 *
 * @method        IconElt|Proxy create(array|callable $attributes = [])
 * @method static IconElt|Proxy createOne(array $attributes = [])
 * @method static IconElt|Proxy find(object|array|mixed $criteria)
 * @method static IconElt|Proxy findOrCreate(array $attributes)
 * @method static IconElt|Proxy first(string $sortedField = 'id')
 * @method static IconElt|Proxy last(string $sortedField = 'id')
 * @method static IconElt|Proxy random(array $attributes = [])
 * @method static IconElt|Proxy randomOrCreate(array $attributes = [])
 * @method static IconEltRepository|RepositoryProxy repository()
 * @method static IconElt[]|Proxy[] all()
 * @method static IconElt[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static IconElt[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static IconElt[]|Proxy[] findBy(array $attributes)
 * @method static IconElt[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static IconElt[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class IconEltFactory extends ModelFactory
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
            'icon' => file_get_contents(__DIR__.'/../../public/images/neutral.jpg'),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(IconElt $iconElt): void {})
        ;
    }

    protected static function getClass(): string
    {
        return IconElt::class;
    }
}
