<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOLIT GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Filter;

interface FilterableInterface
{
    /**
     * @return FilterableInterface
     */
    public function filter(): self;
}
