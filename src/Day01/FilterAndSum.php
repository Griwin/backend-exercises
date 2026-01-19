<?php

declare(strict_types=1);

namespace Exercises\Day01;

final class FilterAndSum
{
    /**
     * @param int[] $numbers
     * @return array{filtered: int[], sum: int}
     */
    public static function run(array $numbers, int $threshold = 10): array
    {
        $filtered = [];
        $sum = 0;

        foreach ($numbers as $number) {
            if ($number >= $threshold) {
                $filtered[] = $number;
                $sum += $number;
            }
        }

        return [
            'filtered' => $filtered,
            'sum' => $sum,
        ];
    }
}