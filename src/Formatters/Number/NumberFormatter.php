<?php

namespace Major\Fluent\Formatters\Number;

use InvalidArgumentException;
use Major\Fluent\Exceptions\ShouldNotHappen;
use Major\Fluent\Formatters\Number\Locale\Currency;
use Major\Fluent\Formatters\Number\Locale\Locale;

/**
 * @internal
 */
final class NumberFormatter
{
    public const PATTERN_REGEX = "([¤\\-%\u{00A0}\u{200E}\u{200F}]*)([,.#0]+)([¤%\u{00A0}]*)";

    private const NUMERAL_SYSTEMS = [
        'arab' => ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'],
        'arabext' => ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'],
        'beng' => ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'],
        'deva' => ['०', '१', '२', '३', '४', '५', '६', '७', '८', '९'],
        'latn' => ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
        'mymr' => ['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'],
    ];

    private Locale $locale;

    /** @var Currency[] */
    private array $currencies = [];

    public function __construct(string $locale)
    {
        $locale = str_replace('_', '-', $locale);

        if (! preg_match('/^[A-Za-z-]+$/', $locale)) {
            throw new InvalidArgumentException("Locale \"{$locale}\" contains invalid characters.");
        }

        $this->loadLocaleData($locale);
    }

    public function format(int|float $number, Options $options): string
    {
        $currency = $this->getCurrency($options);
        $options->fillWithDefaults($currency);

        if ($options->style === 'currency') {
            throw new InvalidArgumentException('Currency formatting is not supported yet.');
        }

        if ($options->style === 'percent') {
            $number *= 100;
        }

        [$pattern, $minus, $number] = $this->handleNegativeValues(
            $this->locale->{$options->style}, $number,
        );

        [$pre, $pattern, $post] = $this->splitPattern($pattern);
        [$int, $frac] = $this->splitNumber($number);

        $frac = $this->applyMinimumFractionDigits($options, $int, $frac);
        [$int, $frac] = $this->applyMaximumFractionDigits($options, $int, $frac);
        $int = $this->applyMaximumSignificantDigits($options, $int);
        $int = $this->applyMinimumIntegerDigits($options, $int);

        $formatted = $this->applyGrouping($options, $pattern, $int);

        if (strlen($frac)) {
            $formatted .= '.' . $frac;
        }

        return $this->applyReplacements($options, $minus . $pre . $formatted . $post);
    }

    /**
     * @return array{string, string, int|float}
     */
    private function handleNegativeValues(string $pattern, int|float $number): array
    {
        if (str_contains($pattern, ';')) {
            $pattern = explode(';', $pattern)[$number < 0 ? 1 : 0];
            $minus = '';
        } else {
            $minus = '-';
        }

        return $number < 0
            ? [$pattern, $minus, abs($number)]
            : [$pattern, '', $number];
    }

    private function applyMinimumFractionDigits(Options $o, string $int, string $frac): string
    {
        $minimumFractionDigits = $o->minimumSignificantDigits !== null
            ? $o->minimumSignificantDigits - strlen($int)
            : $o->minimumFractionDigits;

        assert($minimumFractionDigits !== null);

        return str_pad($frac, $minimumFractionDigits, '0');
    }

    /**
     * @return array{string, string}
     */
    private function applyMaximumFractionDigits(Options $o, string $int, string $frac): array
    {
        $maximumFractionDigits = $o->maximumSignificantDigits !== null
            ? $o->maximumSignificantDigits - strlen($int)
            : $o->maximumFractionDigits;

        assert($maximumFractionDigits !== null);

        if ($maximumFractionDigits <= 0) {
            $intWithoutLast = substr($int, 0, strlen($int) - 1);
            $intLastDigit = (int) substr($int, strlen($int) - 1);

            if ((int) substr($frac, 0, 1) >= 5) {
                $intLastDigit++;
            }

            return [$intWithoutLast . $intLastDigit, ''];
        }

        if (strlen($frac) <= $maximumFractionDigits) {
            return [$int, $frac];
        }

        $withoutLast = substr($frac, 0, $maximumFractionDigits - 1);
        $lastDigit = (int) substr($frac, $maximumFractionDigits - 1, 1);

        if ((int) substr($frac, $maximumFractionDigits, 1) >= 5) {
            $lastDigit++;
        }

        return [$int, $withoutLast . $lastDigit];
    }

    private function applyMaximumSignificantDigits(Options $o, string $int): string
    {
        if (
            $o->maximumSignificantDigits === null
            || strlen($int) <= $o->maximumSignificantDigits
        ) {
            return $int;
        }

        $withoutLast = substr($int, 0, $o->maximumSignificantDigits - 1);
        $lastDigit = (int) substr($int, $o->maximumSignificantDigits - 1, 1);
        $padding = str_repeat('0', strlen($int) - $o->maximumSignificantDigits);

        if ((int) substr($int, $o->maximumSignificantDigits, 1) >= 5) {
            $lastDigit++;
        }

        return $withoutLast . $lastDigit . $padding;
    }

    private function applyMinimumIntegerDigits(Options $o, string $int): string
    {
        if ($o->minimumIntegerDigits === null) {
            return $int;
        }

        return str_pad($int, $o->minimumIntegerDigits, '0', STR_PAD_LEFT);
    }

    private function applyGrouping(Options $o, string $pattern, string $int): string
    {
        if (! $o->useGrouping) {
            return $int;
        }

        $chunks = [];
        $int = strrev($int);
        $size = 3;

        for ($i = 0; strlen($int) > $size; $i++) {
            if ($i === 0 && strlen($int) < $size + $this->locale->grouping) {
                break;
            }

            $chunks[] = strrev(substr($int, 0, $size));
            $int = substr($int, $size);

            if ($i === 0) {
                $size = str_contains($pattern, '#,##,##0') ? 2 : 3;
            }
        }

        $chunks[] = strrev($int);

        return implode(',', array_reverse($chunks));
    }

    private function applyReplacements(Options $o, string $formatted): string
    {
        $replacer = fn (string $char) => $this->locale->symbolReplacements()[$char] ?? $char;

        $formatted = implode('', array_map($replacer, str_split($formatted)));

        return str_replace(
            range(0, 9),
            self::NUMERAL_SYSTEMS[$this->locale->system],
            $formatted,
        );
    }

    private function loadLocaleData(string $locale): void
    {
        $this->locale = $this->loadFile('numbers', $locale);
        $this->currencies = $this->loadFile('currencies', $locale);
    }

    private function loadFile(string $directory, string $locale): mixed
    {
        $parts = explode('-', strtolower($locale), 2);

        $language = $parts[0];
        $region = $parts[1] ?? null;

        $files = glob(__DIR__ . "/../../../locales/{$directory}/{$language}*.php");

        if ($files === false) {
            throw new ShouldNotHappen();
        }

        $withoutRegion = null;

        foreach ($files as $path) {
            $fileLocale = strtolower(substr($path, strrpos($path, '/') + 1, -4));

            if ($region !== null && $fileLocale === "{$language}-{$region}") {
                return require $path;
            }

            if ($fileLocale === $language) {
                if ($region === null) {
                    return require $path;
                } else {
                    $withoutRegion = $path;
                }
            }
        }

        if ($withoutRegion !== null) {
            return require $withoutRegion;
        }

        throw new InvalidArgumentException("Unsupported locale: {$locale}.");
    }

    private function getCurrency(Options $options): ?Currency
    {
        if ($options->style !== 'currency') {
            return null;
        }

        $currency = $options->currency;

        assert($currency !== null);

        return $this->currencies[$currency]
            ?? throw new InvalidArgumentException("Currency \"{$currency}\" does not exist.");
    }

    /**
     * @return array{string, string, string}
     */
    private function splitPattern(string $pattern): array
    {
        $matches = [];

        if (! preg_match('/^' . self::PATTERN_REGEX . '$/', $pattern, $matches)) {
            throw new ShouldNotHappen();
        }

        /** @phpstan-ignore-next-line */
        return array_slice($matches, 1);
    }

    /**
     * @return array{string, string}
     */
    private function splitNumber(int|float $number): array
    {
        $number = (string) $number;

        /** @phpstan-ignore-next-line */
        return str_contains($number, '.')
            ? explode('.', $number, 2)
            : [$number, ''];
    }
}
