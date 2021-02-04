<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOLIT GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Test\Test;

use Ixocreate\Filter\Package;
use PHPUnit\Framework\TestCase;

class PackageTest extends TestCase
{
    /**
     * @covers \Ixocreate\Filter\Package
     */
    public function testPackage()
    {
        $package = new Package();

        $this->assertEmpty($package->getBootstrapItems());
        $this->assertEmpty($package->getDependencies());
        $this->assertDirectoryExists($package->getBootstrapDirectory());
    }
}
