<?php

namespace App\Factory;

use App\Entity\Element;
use App\Repository\ElementRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Element>
 *
 * @method        Element|Proxy                     create(array|callable $attributes = [])
 * @method static Element|Proxy                     createOne(array $attributes = [])
 * @method static Element|Proxy                     find(object|array|mixed $criteria)
 * @method static Element|Proxy                     findOrCreate(array $attributes)
 * @method static Element|Proxy                     first(string $sortedField = 'id')
 * @method static Element|Proxy                     last(string $sortedField = 'id')
 * @method static Element|Proxy                     random(array $attributes = [])
 * @method static Element|Proxy                     randomOrCreate(array $attributes = [])
 * @method static ElementRepository|RepositoryProxy repository()
 * @method static Element[]|Proxy[]                 all()
 * @method static Element[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Element[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Element[]|Proxy[]                 findBy(array $attributes)
 * @method static Element[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Element[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class ElementFactory extends ModelFactory
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
            'name' => self::faker()->text(10),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Element $element): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Element::class;
    }
}
