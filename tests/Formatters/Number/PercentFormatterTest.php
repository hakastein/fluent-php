<?php

namespace Major\Fluent\Tests\Formatters\Number;

use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;

/**
 * @psalm-import-type O from NumberFormatterTestCase
 */
final class PercentFormatterTest extends NumberFormatterTestCase
{
    /**
     * @param O $options
     */
    #[DataProvider('providePercentCases')]
    #[TestDox('it works for percent patterns')]
    public function testPercent(
        string $locale, int|float $number, array $options = [],
    ): void {
        $options = array_merge($options, ['style' => 'percent']);

        $this->assertNumberFormat($locale, $number, $options);
    }

    /**
     * @return Generator<array{string, int|float, ?O}>
     */
    public function providePercentCases(): Generator
    {
        foreach ([
            [0.69],
            [-0.5],
            [0.42, ['minimumFractionDigits' => 1]],
            [0.2137, ['maximumFractionDigits' => 2]],
            [2.137, ['maximumSignificantDigits' => 4]],
        ] as $case) {
            foreach (['pl', 'ru', 'ar', 'tr', 'ne', 'eu'] as $locale) {
                yield [$locale, ...$case];
            }
        }
    }
}
