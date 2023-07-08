<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} acre', 'other' => '{0} acres'], '{0} ac', ['one' => '{0} acre', 'other' => '{0} acres']),
    'bit' => new U(['one' => '{0} bit', 'other' => '{0} bits'], '{0} bits', ['one' => '{0} bit', 'other' => '{0} bits']),
    'byte' => new U(['one' => '{0} byte', 'other' => '{0} bytes'], '{0} bytes', '{0} B'),
    'celsius' => new U(['one' => '{0} grau Celsius', 'other' => '{0} graus Celsius'], '{0} °C', '{0} °C'),
    'centimeter' => new U(['one' => '{0} centímetro', 'other' => '{0} centímetros'], '{0} cm', '{0} cm'),
    'day' => new U(['one' => '{0} dia', 'other' => '{0} dias'], ['one' => '{0} dia', 'other' => '{0} dias'], ['one' => '{0} dia', 'other' => '{0} dias']),
    'degree' => new U(['one' => '{0} grau', 'other' => '{0} graus'], '{0}°', '{0}°'),
    'fahrenheit' => new U(['one' => '{0} grau Fahrenheit', 'other' => '{0} graus Fahrenheit'], '{0} °F', '{0} °F'),
    'fluid-ounce' => new U(['one' => '{0} onça fluida', 'other' => '{0} onças fluidas'], '{0} fl oz', '{0} fl. oz.'),
    'foot' => new U(['one' => '{0} pé', 'other' => '{0} pés'], ['one' => '{0} pé', 'other' => '{0} pés'], ['one' => '{0} pé', 'other' => '{0} pés']),
    'gallon' => new U(['one' => '{0} galão', 'other' => '{0} galões'], '{0} gal', '{0} gal'),
    'gigabit' => new U(['one' => '{0} gigabit', 'other' => '{0} gigabits'], '{0} Gb', '{0} Gb'),
    'gigabyte' => new U(['one' => '{0} gigabyte', 'other' => '{0} gigabytes'], '{0} GB', '{0} GB'),
    'gram' => new U(['one' => '{0} grama', 'other' => '{0} gramas'], '{0} g', '{0}g'),
    'hectare' => new U(['one' => '{0} hectare', 'other' => '{0} hectares'], '{0} ha', '{0} ha'),
    'hour' => new U(['one' => '{0} hora', 'other' => '{0} horas'], '{0} h', '{0} h'),
    'inch' => new U(['one' => '{0} polegada', 'other' => '{0} polegadas'], '{0} pol.', '{0}″'),
    'kilobit' => new U(['one' => '{0} kilobit', 'other' => '{0} kilobits'], '{0} kb', '{0} kb'),
    'kilobyte' => new U(['one' => '{0} kilobyte', 'other' => '{0} kilobytes'], '{0} kB', '{0} kB'),
    'kilogram' => new U(['one' => '{0} quilograma', 'other' => '{0} quilogramas'], '{0} kg', '{0}kg'),
    'kilometer' => new U(['one' => '{0} quilômetro', 'other' => '{0} quilômetros'], '{0} km', '{0} km'),
    'liter' => new U(['one' => '{0} litro', 'other' => '{0} litros'], '{0} l', '{0}l'),
    'megabit' => new U(['one' => '{0} megabit', 'other' => '{0} megabits'], '{0} Mb', '{0} Mb'),
    'megabyte' => new U(['one' => '{0} megabyte', 'other' => '{0} megabytes'], '{0} MB', '{0} MB'),
    'meter' => new U(['one' => '{0} metro', 'other' => '{0} metros'], '{0} m', '{0} m'),
    'microsecond' => new U(['one' => '{0} microssegundo', 'other' => '{0} microssegundos'], '{0} μs', '{0} μs'),
    'mile' => new U(['one' => '{0} milha', 'other' => '{0} milhas'], '{0} mi', '{0} mi'),
    'mile-scandinavian' => new U(['one' => '{0} milha escandinava', 'other' => '{0} milhas escandinavas'], '{0} smi', '{0} smi'),
    'milliliter' => new U(['one' => '{0} mililitro', 'other' => '{0} mililitros'], '{0} ml', '{0} ml'),
    'millimeter' => new U(['one' => '{0} milímetro', 'other' => '{0} milímetros'], '{0} mm', '{0} mm'),
    'millisecond' => new U(['one' => '{0} milissegundo', 'other' => '{0} milissegundos'], '{0} ms', '{0} ms'),
    'minute' => new U(['one' => '{0} minuto', 'other' => '{0} minutos'], '{0} min', '{0} min'),
    'month' => new U(['one' => '{0} mês', 'other' => '{0} meses'], ['one' => '{0} mês', 'other' => '{0} meses'], ['one' => '{0} mês', 'other' => '{0} meses']),
    'nanosecond' => new U(['one' => '{0} nanossegundo', 'other' => '{0} nanossegundos'], '{0} ns', '{0} ns'),
    'ounce' => new U(['one' => '{0} onça', 'other' => '{0} onças'], '{0} oz', '{0} oz'),
    'percent' => new U('{0} por cento', '{0}%', '{0}%'),
    'petabyte' => new U(['one' => '{0} petabyte', 'other' => '{0} petabytes'], '{0} PB', '{0} PB'),
    'pound' => new U(['one' => '{0} libra', 'other' => '{0} libras'], '{0} lb', '{0} lb'),
    'second' => new U(['one' => '{0} segundo', 'other' => '{0} segundos'], '{0} s', '{0} s'),
    'stone' => new U(['one' => '{0} stone', 'other' => '{0} stones'], '{0} st', '{0} st'),
    'terabit' => new U(['one' => '{0} terabit', 'other' => '{0} terabits'], '{0} Tb', '{0} Tb'),
    'terabyte' => new U(['one' => '{0} terabyte', 'other' => '{0} terabytes'], '{0} TB', '{0} TB'),
    'week' => new U(['one' => '{0} semana', 'other' => '{0} semanas'], '{0} sem.', '{0} sem.'),
    'yard' => new U(['one' => '{0} jarda', 'other' => '{0} jardas'], '{0} yd', '{0} yd'),
    'year' => new U(['one' => '{0} ano', 'other' => '{0} anos'], ['one' => '{0} ano', 'other' => '{0} anos'], ['one' => '{0} ano', 'other' => '{0} anos']),
];
