<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} ekra', 'other' => '{0} ekrur'], '{0} ek.', '{0} ek.'),
    'bit' => new U(['one' => '{0} biti', 'other' => '{0} bitar'], ['one' => '{0} biti', 'other' => '{0} bitar'], ['one' => '{0} biti', 'other' => '{0} bitar']),
    'byte' => new U('{0} bæti', '{0} bæti', '{0} bæti'),
    'celsius' => new U(['one' => '{0} gráða á Celsíus', 'other' => '{0} gráður á Celsíus'], '{0}°C', '{0}°C'),
    'centimeter' => new U(['one' => '{0} sentimetri', 'other' => '{0} sentimetrar'], '{0} cm', '{0}cm'),
    'day' => new U(['one' => '{0} dagur', 'other' => '{0} dagar'], ['one' => '{0} dagur', 'other' => '{0} dagar'], '{0} d.'),
    'degree' => new U(['one' => '{0} gráða', 'other' => '{0} gráður'], '{0}°', '{0}°'),
    'fahrenheit' => new U(['one' => '{0} gráða á Fahrenheit', 'other' => '{0} gráður á Fahrenheit'], '{0}°F', '{0}°F'),
    'fluid-ounce' => new U(['one' => '{0} vökvaúnsa', 'other' => '{0} vökvaúnsur'], '{0} fl oz', '{0} fl oz'),
    'foot' => new U('{0} fet', '{0} fet', '{0} fet'),
    'gallon' => new U('{0} gallon', '{0} gal', '{0} gal'),
    'gigabit' => new U(['one' => '{0} gígabiti', 'other' => '{0} gígabitar'], '{0} Gb', '{0} Gb'),
    'gigabyte' => new U('{0} gígabæti', '{0} GB', '{0} GB'),
    'gram' => new U(['one' => '{0} gramm', 'other' => '{0} grömm'], '{0} g', '{0} g'),
    'hectare' => new U(['one' => '{0} hektari', 'other' => '{0} hektarar'], '{0} ha', '{0} ha'),
    'hour' => new U(['one' => '{0} klukkustund', 'other' => '{0} klukkustundir'], '{0} klst.', '{0} klst.'),
    'inch' => new U(['one' => '{0} tomma', 'other' => '{0} tommur'], '{0} t.', '{0}″'),
    'kilobit' => new U(['one' => '{0} kílóbiti', 'other' => '{0} kílóbitar'], '{0} kb', '{0} kb'),
    'kilobyte' => new U('{0} kílóbæti', '{0} kB', '{0} kB'),
    'kilogram' => new U(['one' => '{0} kílógramm', 'other' => '{0} kílógrömm'], '{0} kg', '{0} kg'),
    'kilometer' => new U(['one' => '{0} kílómetri', 'other' => '{0} kílómetrar'], '{0} km', '{0} km'),
    'liter' => new U(['one' => '{0} lítri', 'other' => '{0} lítrar'], '{0} l', '{0} l'),
    'megabit' => new U(['one' => '{0} megabiti', 'other' => '{0} megabitar'], '{0} Mb', '{0} Mb'),
    'megabyte' => new U('{0} megabæti', '{0} MB', '{0} MB'),
    'meter' => new U(['one' => '{0} metri', 'other' => '{0} metrar'], '{0} m', '{0}m'),
    'microsecond' => new U(['one' => '{0} míkrósekúnda', 'other' => '{0} míkrósekúndur'], '{0} μs', '{0} μs'),
    'mile' => new U(['one' => '{0} míla', 'other' => '{0} mílur'], '{0} mí', '{0} mí'),
    'mile-scandinavian' => new U(['one' => '{0} sænsk míla', 'other' => '{0} sænskar mílur'], '{0} sæ. míl.', '{0} sæ. míl'),
    'milliliter' => new U(['one' => '{0} millilítri', 'other' => '{0} millilítrar'], '{0} ml', '{0} ml'),
    'millimeter' => new U(['one' => '{0} millimetri', 'other' => '{0} millimetrar'], '{0} mm', '{0}mm'),
    'millisecond' => new U(['one' => '{0} millisekúnda', 'other' => '{0} millisekúndur'], '{0} ms', '{0}ms'),
    'minute' => new U(['one' => '{0} mínúta', 'other' => '{0} mínútur'], '{0} mín.', '{0} mín.'),
    'month' => new U(['one' => '{0} mánuður', 'other' => '{0} mánuðir'], '{0} mán.', '{0} mán.'),
    'nanosecond' => new U(['one' => '{0} nanósekúnda', 'other' => '{0} nanósekúndur'], '{0} ns', '{0} ns'),
    'ounce' => new U(['one' => '{0} únsa', 'other' => '{0} únsur'], '{0} oz', ['one' => '{0} únsa', 'other' => '{0} únsur']),
    'percent' => new U('{0} prósent', ['one' => '{0}%', 'other' => '{0} %'], '{0}%'),
    'petabyte' => new U('{0} petabæti', '{0} PB', '{0}PB'),
    'pound' => new U('{0} pund', '{0} lb', '{0} p.'),
    'second' => new U(['one' => '{0} sekúnda', 'other' => '{0} sekúndur'], '{0} sek.', '{0} sek.'),
    'stone' => new U(['one' => '{0} stone', 'other' => '{0} stones'], '{0} st', '{0}st'),
    'terabit' => new U(['one' => '{0} terabiti', 'other' => '{0} terabitar'], '{0} Tb', '{0} Tb'),
    'terabyte' => new U('{0} terabæti', '{0} TB', '{0} TB'),
    'week' => new U(['one' => '{0} vika', 'other' => '{0} vikur'], ['one' => '{0} vika', 'other' => '{0} vikur'], '{0} v.'),
    'yard' => new U(['one' => '{0} yard', 'other' => '{0} yardar'], '{0} yd', '{0} yd'),
    'year' => new U('{0} ár', '{0} ár', '{0}á'),
];
