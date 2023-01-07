<?php

/**
 * This file is part of the ramsey/collection library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license http://opensource.org/licenses/MIT MIT
 */

declare(strict_types=1);

namespace Ramsey\Collection;

use Ramsey\Collection\Exception\InvalidArgumentException;
use Ramsey\Collection\Exception\NoSuchElementException;
use Ramsey\Collection\Tool\TypeTrait;
use Ramsey\Collection\Tool\ValueToStringTrait;

use function array_key_first;

/**
 * This class provides a basic implementation of `QueueInterface`, to minimize
 * the effort required to implement this interface.
 *
 * @template T
 * @extends AbstractArray<T>
 * @implements QueueInterface<T>
 */
class Queue extends AbstractArray implements QueueInterface
{
    use TypeTrait;
    use ValueToStringTrait;

    /**
<<<<<<< HEAD
=======
     * The type of elements stored in this queue.
     *
     * A queue's type is immutable once it is set. For this reason, this
     * property is set private.
     */
    private string $queueType;

    /**
     * The index of the head of the queue.
     */
    protected int $index = 0;

    /**
>>>>>>> 09f7352615a49bcbd90ba54bdbb06a7258875f45
     * Constructs a queue object of the specified type, optionally with the
     * specified data.
     *
     * @param string $queueType The type or class name associated with this queue.
     * @param array<array-key, T> $data The initial items to store in the queue.
     */
    public function __construct(private readonly string $queueType, array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * {@inheritDoc}
     *
     * Since arbitrary offsets may not be manipulated in a queue, this method
     * serves only to fulfill the `ArrayAccess` interface requirements. It is
     * invoked by other operations when adding values to the queue.
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException if $value is of the wrong type.
=======
     * @throws InvalidArgumentException if $value is of the wrong type
>>>>>>> 09f7352615a49bcbd90ba54bdbb06a7258875f45
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if ($this->checkType($this->getType(), $value) === false) {
            throw new InvalidArgumentException(
                'Value must be of type ' . $this->getType() . '; value is '
                . $this->toolValueToString($value),
            );
        }

        $this->data[] = $value;
    }

    /**
<<<<<<< HEAD
     * @throws InvalidArgumentException if $value is of the wrong type.
=======
     * @throws InvalidArgumentException if $value is of the wrong type
     *
     * @inheritDoc
>>>>>>> 09f7352615a49bcbd90ba54bdbb06a7258875f45
     */
    public function add(mixed $element): bool
    {
        $this[] = $element;

        return true;
    }

    /**
     * @return T
     *
     * @throws NoSuchElementException if this queue is empty.
     */
    public function element(): mixed
    {
<<<<<<< HEAD
        return $this->peek() ?? throw new NoSuchElementException(
            'Can\'t return element from Queue. Queue is empty.',
        );
=======
        $element = $this->peek();

        if ($element === null) {
            throw new NoSuchElementException(
                'Can\'t return element from Queue. Queue is empty.',
            );
        }

        return $element;
>>>>>>> 09f7352615a49bcbd90ba54bdbb06a7258875f45
    }

    public function offer(mixed $element): bool
    {
        try {
            return $this->add($element);
        } catch (InvalidArgumentException) {
            return false;
        }
    }

    /**
     * @return T | null
     */
    public function peek(): mixed
    {
        $index = array_key_first($this->data);

        if ($index === null) {
            return null;
        }

        return $this[$index];
    }

    /**
     * @return T | null
     */
    public function poll(): mixed
    {
        $index = array_key_first($this->data);

        if ($index === null) {
            return null;
        }

        $head = $this[$index];
        unset($this[$index]);

        return $head;
    }

    /**
     * @return T
     *
     * @throws NoSuchElementException if this queue is empty.
     */
    public function remove(): mixed
    {
        return $this->poll() ?? throw new NoSuchElementException(
            'Can\'t return element from Queue. Queue is empty.',
        );
    }

    public function getType(): string
    {
        return $this->queueType;
    }
}
