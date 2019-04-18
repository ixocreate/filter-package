<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Test\Test;

use Ixocreate\Application\ConfiguratorRegistryInterface;
use Ixocreate\Application\ServiceRegistryInterface;
use Ixocreate\ServiceManager\ServiceManagerInterface;
use Ixocreate\Package\Filter\Package;
use PHPUnit\Framework\TestCase;

class PackageTest extends TestCase
{
    public function testPackage()
    {
        $configuratorRegistry = $this->getMockBuilder(ConfiguratorRegistryInterface::class)->getMock();
        $serviceRegistry = $this->getMockBuilder(ServiceRegistryInterface::class)->getMock();
        $serviceManager = $this->getMockBuilder(ServiceManagerInterface::class)->getMock();

        $package = new Package();
        $package->configure($configuratorRegistry);
        $package->addServices($serviceRegistry);
        $package->boot($serviceManager);

        $this->assertNull($package->getBootstrapItems());
        $this->assertNull($package->getConfigDirectory());
        $this->assertNull($package->getConfigProvider());
        $this->assertNull($package->getDependencies());
        $this->assertDirectoryExists($package->getBootstrapDirectory());
    }
}
