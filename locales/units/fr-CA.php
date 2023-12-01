<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} acre', 'other' => '{0} acres'], '{0} ac', '{0}ac'),
    'bit' => new U(['one' => '{0} bit', 'other' => '{0} bits'], '{0} bit', '{0}bit'),
    'byte' => new U(['one' => '{0} octet', 'other' => '{0} octets'], '{0} octet', '{0}o'),
    'celsius' => new U(['one' => '{0} degré Celsius', 'other' => '{0} degrés Celsius'], '{0} °C', ['one' => "{0}\u{A0}°C", 'other' => '{0} °C']),
    'centimeter' => new U(['one' => '{0} centimètre', 'other' => '{0} centimètres'], '{0} cm', '{0}cm'),
    'day' => new U(['one' => '{0} jour', 'other' => '{0} jours'], '{0} j', '{0}j'),
    'degree' => new U(['one' => '{0} degré', 'other' => '{0} degrés'], '{0}°', '{0}°'),
    'fahrenheit' => new U(['one' => '{0} degré Fahrenheit', 'other' => '{0} degrés Fahrenheit'], '{0} °F', '{0}°F'),
    'fluid-ounce' => new U(['one' => '{0} once liquide', 'other' => '{0} onces liquides'], ['one' => "{0}\u{A0}oz liq.", 'other' => '{0} oz liq.'], '{0}oz liq.'),
    'foot' => new U(['one' => '{0} pied', 'other' => '{0} pieds'], ['one' => "{0}\u{A0}pi", 'other' => '{0} pi'], '{0}pi'),
    'gigabit' => new U(['one' => '{0} gigabit', 'other' => '{0} gigabits'], '{0} Gb', '{0}Gb'),
    'gigabyte' => new U(['one' => '{0} gigaoctet', 'other' => '{0} gigaoctets'], '{0} Go', '{0}Go'),
    'gram' => new U(['one' => '{0} gramme', 'other' => '{0} grammes'], '{0} g', '{0}g'),
    'hectare' => new U(['one' => '{0} hectare', 'other' => '{0} hectares'], '{0} ha', '{0}ha'),
    'hour' => new U(['one' => '{0} heure', 'other' => '{0} heures'], '{0} h', '{0}h'),
    'inch' => new U(['one' => '{0} pouce', 'other' => '{0} pouces'], '{0} po', '{0}po'),
    'kilobit' => new U(['one' => '{0} kilobit', 'other' => '{0} kilobits'], '{0} kb', '{0}kb'),
    'kilobyte' => new U(['one' => '{0} kilooctet', 'other' => '{0} kilooctets'], '{0} ko', '{0}ko'),
    'kilogram' => new U(['one' => '{0} kilogramme', 'other' => '{0} kilogrammes'], '{0} kg', '{0}kg'),
    'kilometer' => new U(['one' => '{0} kilomètre', 'other' => '{0} kilomètres'], '{0} km', '{0}km'),
    'liter' => new U(['one' => '{0} litre', 'other' => '{0} litres'], "{0}\u{202F}l", '{0}l'),
    'megabit' => new U(['one' => '{0} mégabit', 'other' => '{0} mégabits'], '{0} Mb', '{0}Mb'),
    'megabyte' => new U(['one' => '{0} mégaoctet', 'other' => '{0} mégaoctets'], '{0} Mo', '{0}Mo'),
    'meter' => new U(['one' => '{0} mètre', 'other' => '{0} mètres'], '{0} m', '{0}m'),
    'microsecond' => new U(['one' => '{0} microseconde', 'other' => '{0} microsecondes'], '{0} μs', '{0}μs'),
    'mile' => new U(['one' => '{0} mille', 'other' => '{0} milles'], '{0} mi', '{0}mi'),
    'mile-scandinavian' => new U(['one' => "{0}\u{A0}mille scandinave", 'other' => "{0}\u{A0}milles scandinaves"], "{0}\u{202F}smi", '{0}smi'),
    'millimeter' => new U(['one' => '{0} millimètre', 'other' => '{0} millimètres'], '{0} mm', '{0}mm'),
    'millisecond' => new U(['one' => '{0} milliseconde', 'other' => '{0} millisecondes'], '{0} ms', '{0}ms'),
    'minute' => new U(['one' => '{0} minute', 'other' => '{0} minutes'], '{0} min', '{0}m'),
    'month' => new U('{0} mois', '{0} m.', '{0}m'),
    'nanosecond' => new U(['one' => '{0} nanoseconde', 'other' => '{0} nanosecondes'], '{0} ns', '{0}ns'),
    'ounce' => new U(['one' => '{0} once', 'other' => '{0} onces'], '{0} oz', '{0}oz'),
    'percent' => new U('{0} pour cent', "{0}\u{A0}%", "{0}\u{A0}%"),
    'pound' => new U(['one' => '{0} livre', 'other' => '{0} livres'], '{0} lb', '{0}lb'),
    'second' => new U(['one' => '{0} seconde', 'other' => '{0} secondes'], '{0} s', '{0}s'),
    'stone' => new U('{0} stone', '{0} st', '{0}st'),
    'terabit' => new U(['one' => '{0} térabit', 'other' => '{0} térabits'], '{0} Tb', '{0}Tb'),
    'terabyte' => new U(['one' => '{0} téraoctet', 'other' => '{0} téraoctets'], '{0} To', '{0}To'),
    'week' => new U(['one' => '{0} semaine', 'other' => '{0} semaines'], '{0} sem.', '{0}sem'),
    'yard' => new U(['one' => "{0}\u{A0}verge", 'other' => '{0} verges'], ['one' => "{0}\u{A0}vg", 'other' => '{0} vg'], '{0}vg'),
    'year' => new U(['one' => "{0}\u{A0}an", 'other' => '{0} ans'], ['one' => '{0} an', 'other' => '{0} ans'], '{0}a'),
];
