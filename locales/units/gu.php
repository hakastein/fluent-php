<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U('{0} એકર', '{0} એકર', '{0} એકર'),
    'bit' => new U('{0} બિટ', '{0} બિટ', '{0} બિટ'),
    'byte' => new U('{0} બાઇટ', '{0} બાઇટ', '{0} બાઇટ'),
    'celsius' => new U('{0} ડિગ્રી સેલ્સિયસ', '{0}°C', '{0}°C'),
    'centimeter' => new U('{0} સેન્ટિમીટર', '{0} સેમી', '{0} સેમી'),
    'day' => new U('{0} દિવસ', '{0} દિવસ', '{0} દિ'),
    'degree' => new U('{0} અંશ', '{0} અંશ', '{0} અંશ'),
    'fahrenheit' => new U('{0} ડિગ્રી ફેરનહીટ', '{0}°F', '{0}°F'),
    'fluid-ounce' => new U('{0} પ્રવાહી ઔંસ', '{0} પ્રવાહી ઔંસ', '{0} પ્ર. ઔંસ'),
    'foot' => new U('{0} ફૂટ', '{0} ફૂટ', "{0} '"),
    'gallon' => new U('{0} ગૅલન', '{0} ગૅલન', '{0} ગૅલન'),
    'gigabit' => new U('{0} ગીગાબિટ', '{0} Gb', '{0} Gb'),
    'gigabyte' => new U('{0} ગીગાબાઇટ', '{0} GB', '{0} GB'),
    'gram' => new U('{0} ગ્રામ', '{0} ગ્રા', '{0} ગ્રા'),
    'hectare' => new U('{0} હેક્ટર', '{0} હેક્ટર', '{0} હેક્ટર'),
    'hour' => new U('{0} કલાક', '{0} કલાક', '{0} ક'),
    'inch' => new U('{0} ઇંચ', '{0} ઇંચ', '{0} "'),
    'kilobit' => new U('{0} કિલોબિટ', '{0} kb', '{0} kb'),
    'kilobyte' => new U('{0} કિલોબાઇટ', '{0} kB', '{0} kB'),
    'kilogram' => new U('{0} કિલોગ્રામ', '{0} કિગ્રા', '{0} કિગ્રા'),
    'kilometer' => new U('{0} કિલોમીટર', '{0} કિમી', '{0} કિમી'),
    'liter' => new U('{0} લિટર', '{0} લિ', '{0} લિ'),
    'megabit' => new U('{0} મેગાબિટ', '{0} Mb', '{0} Mb'),
    'megabyte' => new U('{0} મેગાબાઇટ', '{0} MB', '{0} MB'),
    'meter' => new U('{0} મીટર', '{0} મી', '{0} મી'),
    'microsecond' => new U('{0} માઇક્રોસેકંડ', '{0} μs', '{0} μs'),
    'mile' => new U('{0} માઇલ', '{0} માઇલ', '{0} માઇલ'),
    'mile-scandinavian' => new U('{0} માઈલ-સ્કૅન્ડિનેવિઅન', '{0} smi', '{0}smi'),
    'milliliter' => new U('{0} મિલિલીટર', '{0} મિલિલીટર', '{0} મિલિલીટર'),
    'millimeter' => new U('{0} મિલિમીટર', '{0} મિમી', '{0} મિમી'),
    'millisecond' => new U('{0} મિલિસેકન્ડ', '{0} મિસે', '{0} મિસે'),
    'minute' => new U('{0} મિનિટ', '{0} મિનિટ', '{0} મિ'),
    'month' => new U(['one' => '{0} મહિનો', 'other' => '{0} મહિના'], ['one' => '{0} મહિનો', 'other' => '{0} મહિના'], '{0} મ'),
    'nanosecond' => new U('{0} નેનોસેકંડ', '{0} ns', '{0} ns'),
    'ounce' => new U('{0} ઔંસ', '{0} ઔંસ', '{0} ઔંસ'),
    'percent' => new U('{0} ટકા', '{0}%', '{0}%'),
    'petabyte' => new U(['one' => '{0} પેટાબાઈટ', 'other' => '{0} પેટાબાઈટ્સ'], '{0} PB', '{0} PB'),
    'pound' => new U('{0} પાઉન્ડ', '{0} પાઉન્ડ', '{0} પાઉન્ડ'),
    'second' => new U('{0} સેકંડ', '{0} સેકંડ', '{0} સે'),
    'stone' => new U('{0} સ્ટોન', '{0} સ્ટોન', '{0}સ્ટોન'),
    'terabit' => new U('{0} ટેરાબિટ', '{0} Tb', '{0} Tb'),
    'terabyte' => new U('{0} ટેરાબાઇટ', '{0} TB', '{0} TB'),
    'week' => new U(['one' => '{0} અઠવાડિયું', 'other' => '{0} અઠવાડિયા'], '{0} અઠ.', '{0} અઠ.'),
    'yard' => new U('{0} વાર', '{0} વાર', '{0} વાર'),
    'year' => new U('{0} વર્ષ', '{0} વર્ષ', '{0} વ'),
];
