<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} ايکړ', 'other' => '{0} ايکړز'], '{0} ac', '{0} ac'),
    'bit' => new U(['one' => '{0} بټ', 'other' => '{0} بټس'], '{0} bit', '{0} bit'),
    'byte' => new U(['one' => '{0} بايټ', 'other' => '{0} بايټس'], '{0} byte', '{0} byte'),
    'celsius' => new U('{0} درجې سيلسيس', '{0}°C', '{0}°C'),
    'centimeter' => new U(['one' => '{0} سنتي متر', 'other' => '{0} سنتي متره'], '{0} cm', '{0}cm'),
    'day' => new U(['one' => '{0} ورځ', 'other' => '{0} ورځې'], ['one' => '{0} ورځ', 'other' => '{0} ورځې'], ['one' => '{0} ورځ', 'other' => '{0}d']),
    'degree' => new U('{0} درجې', '{0}°', '{0}°'),
    'fahrenheit' => new U('{0} درجې فارنهايټ', '{0}°F', '{0}°F'),
    'fluid-ounce' => new U('{0} مایع اونس', '{0} fl oz', '{0} fl oz'),
    'foot' => new U(['one' => '{0} فټ', 'other' => '{0} فټه'], '{0} ft', '{0} ft'),
    'gallon' => new U(['one' => '{0} ګيلن', 'other' => '{0} ګيلنز'], '{0} ګيلن', '{0}ګيلن'),
    'gigabit' => new U(['one' => '{0} ګيګا بټ', 'other' => '{0} ګيګا بټس'], '{0} Gb', '{0} Gb'),
    'gigabyte' => new U('{0} ګيګا بايټس', '{0} GB', '{0} GB'),
    'gram' => new U(['one' => '{0} ګرام', 'other' => '{0} ګرامز'], '{0} g', '{0}g'),
    'hectare' => new U(['one' => '{0} هيکتر', 'other' => '{0} هيکترې'], '{0} ha', '{0} ha'),
    'hour' => new U('{0} h', '{0} h', '{0} h'),
    'inch' => new U(['one' => '{0} انچ', 'other' => '{0} انچې'], '{0} in', '{0}″'),
    'kilobit' => new U(['one' => '{0} کيلو بټ', 'other' => '{0} کيلو بټس'], '{0} kb', '{0} kb'),
    'kilobyte' => new U(['one' => '{0} کيلو بايټ', 'other' => '{0} کيلو بايټس'], '{0} kB', '{0} kB'),
    'kilogram' => new U(['one' => '{0} کيلو ګرام', 'other' => '{0} کيلو ګرامز'], '{0} kg', '{0}kg'),
    'kilometer' => new U(['one' => '{0} کيلومتر', 'other' => '{0} کيلومتره'], '{0} km', '{0} km'),
    'liter' => new U(['one' => '{0} ليټر', 'other' => '{0} ليټرز'], '{0} L', '{0}L'),
    'megabit' => new U(['one' => '{0} ميګا بټ', 'other' => '{0} ميګا بټس'], '{0} Mb', '{0} Mb'),
    'megabyte' => new U(['one' => '{0} ميګا بايټ', 'other' => '{0} ميګا بايټس'], '{0} MB', '{0} MB'),
    'meter' => new U(['one' => '{0} متر', 'other' => '{0} متره'], '{0} m', '{0} m'),
    'microsecond' => new U('{0} μs', '{0} μs', '{0} μs'),
    'mile' => new U(['one' => '{0} ميل', 'other' => '{0} ميلونه'], '{0} mi', '{0} mi'),
    'mile-scandinavian' => new U(['one' => '{0} سکېنډنيوين ميل', 'other' => '{0} سکېنډنيوين ميلونه'], '{0} smi', '{0} smi'),
    'milliliter' => new U(['one' => '{0} ملي ليټر', 'other' => '{0} ملي ليټرز'], '{0} mL', '{0} mL'),
    'millimeter' => new U(['one' => '{0} ملي متر', 'other' => '{0} ملي متره'], '{0} mm', '{0}mm'),
    'millisecond' => new U('{0} ms', '{0} ms', '{0} ms'),
    'minute' => new U(['one' => '{0} دقیقه', 'other' => '{0} دقیقې'], '{0} دقیقه', '{0}m'),
    'month' => new U(['one' => '{0} مياشت', 'other' => '{0} مياشتې'], ['one' => '{0} m', 'other' => '{0} mths'], '{0} m'),
    'nanosecond' => new U('{0} ns', '{0} ns', '{0} ns'),
    'ounce' => new U(['one' => '{0} اونس', 'other' => '{0} اونسز'], '{0} oz', '{0} oz'),
    'percent' => new U('{0} سلنه', '{0}%', '{0}%'),
    'petabyte' => new U(['one' => '{0} پيټا بايټ', 'other' => '{0} پيټا بايټس'], '{0} PB', '{0} PB'),
    'pound' => new U(['one' => '{0} پاونډ', 'other' => '{0} پاونډز'], '{0} lb', '{0} lb'),
    'second' => new U(['one' => '{0} s', 'other' => '{0} ثانیې'], '{0} sec', '{0} s'),
    'stone' => new U('{0} st', '{0} st', '{0} st'),
    'terabit' => new U(['one' => '{0} ټرا بايټ', 'other' => '{0} ټرا بايټس'], '{0} Tb', '{0} Tb'),
    'terabyte' => new U(['one' => '{0} ټيرا بايټ', 'other' => '{0} ټيرا بايټس'], '{0} TB', '{0} TB'),
    'week' => new U(['one' => 'اونۍ', 'other' => '{0} اونۍ'], ['one' => '{0} w', 'other' => '{0} wks'], '{0} w'),
    'yard' => new U(['one' => '{0} ګز', 'other' => '{0} ګزه'], '{0} yd', '{0} yd'),
    'year' => new U(['one' => '{0} کال', 'other' => '{0} کالونه'], ['one' => '{0}/کال', 'other' => '{0} کالونه'], '{0} y'),
];
