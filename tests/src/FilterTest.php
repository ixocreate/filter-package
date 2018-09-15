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
namespace KiwiSuiteTest\Validator;

use KiwiSuite\Contract\Filter\FilterableInterface;
use KiwiSuite\Filter\Filter;
use PHPUnit\Framework\TestCase;

class FilterTest extends TestCase
{
    /**
     * @var Filter
     */
    private $filter;

    private $filterable;

    public function setUp()
    {
        $this->filter = new Filter();
        $this->filterable = $this->getMockBuilder(FilterableInterface::class)
            ->getMock();

        $this->filterable->method('filter')->willReturnSelf();
    }

    /**
     * @covers \KiwiSuite\Filter\Filter::supports
     */
    public function testSupports()
    {
        $this->assertFalse($this->filter->supports("string"));
        $this->assertFalse($this->filter->supports(new \stdClass()));


        $this->assertTrue($this->filter->supports($this->filterable));
    }

    /**
     * @covers \KiwiSuite\Filter\Filter::filter
     */
    public function testFilterException()
    {
        $this->expectException(\Exception::class);

        $this->filter->filter("string");
    }

    /**
     * @covers \KiwiSuite\Filter\Filter::filter
     */
    public function testFilterable()
    {
        $this->assertSame($this->filterable, $this->filter->filter($this->filterable));
    }
}
