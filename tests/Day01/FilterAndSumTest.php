<?php

declare(strict_types=1);

namespace Exercises\Tests\Day01;

use Exercises\Day01\FilterAndSum;
use PHPUnit\Framework\TestCase;

final class FilterAndSumTest extends TestCase
{
    public function testRunFiltersAndSumsNumbersAboveThreshold(): void
    {
        $numbers = [3, 12, 7, 25, 9, 10, 18];

        $result = FilterAndSum::run($numbers);

        $this->assertSame([12, 25, 10, 18], $result['filtered']);
        $this->assertSame(65, $result['sum']);
    }

    public function testRunReturnsEmptyWhenNoMatch(): void
    {
        $result = FilterAndSum::run([1, 2, 3]);

        $this->assertSame([], $result['filtered']);
        $this->assertSame(0, $result['sum']);
    }

    public function testRunWorksWithEmptyInput(): void
    {
        $result = FilterAndSum::run([]);

        $this->assertSame([], $result['filtered']);
        $this->assertSame(0, $result['sum']);
    }
}