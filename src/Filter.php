<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Filter\Package;

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
