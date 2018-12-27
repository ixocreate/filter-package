<?php
/**
 * kiwi-suite/filter (https://github.com/kiwi-suite/filter)
 *
 * @package kiwi-suite/filter
 * @link https://github.com/kiwi-suite/filter
 * @copyright Copyright (c) 2010 - 2018 kiwi suite GmbH
 * @license MIT License
 */

declare(strict_types=1);
namespace Ixocreate\Filter;

use Ixocreate\Contract\Filter\FilterableInterface;

final class Filter
{
    /**
     * @param $value
     * @return bool
     */
    public function supports($value): bool
    {
        if ($value instanceof FilterableInterface) {
            return true;
        }

        return false;
    }

    /**
     * @param $value
     * @throws \Exception
     * @return mixed
     */
    public function filter($value)
    {
        if (!$this->supports($value)) {
            //TODO Exception
            throw new \Exception("Can't filter value");
        }

        $data = null;

        if ($value instanceof FilterableInterface) {
            $data = $value->filter();
        }

        return $data;
    }
}
