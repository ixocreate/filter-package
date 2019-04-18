<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Filter\Package;

interface FilterableInterface
{
    /**
     * @return FilterableInterface
     */
    public function filter(): self;
}
