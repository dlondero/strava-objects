<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use ArrayIterator;
use InvalidArgumentException;
use IteratorAggregate;

abstract class Collection implements IteratorAggregate
{
    private array $elements;

    abstract public function getType();

    public function add($element): void
    {
        $type = $this->getType();
        if (!$element instanceof $type) {
            throw new InvalidArgumentException(sprintf('Argument is not of type %s', $type));
        }
        $this->elements[] = $element;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->elements);
    }

    public static function create(array $elements, string $collectionClassName): Collection
    {
        /** @var Collection $collection */
        $collection = new $collectionClassName();
        $elementClassName = $collection->getType();
        foreach ($elements as $element) {
            $collection->add($elementClassName::create($element));
        }

        return $collection;
    }
}
