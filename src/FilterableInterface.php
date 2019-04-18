<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Package\Filter;

interface FilterableInterface
{
    /**
     * @return FilterableInterface
     */
    public function filter(): self;
}
