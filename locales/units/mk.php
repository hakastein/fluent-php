<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => '{0} акр', 'other' => '{0} акри'], '{0} ac', '{0} ac'),
    'bit' => new U(['one' => '{0} бит', 'other' => '{0} бита'], '{0} bit', '{0} bit'),
    'byte' => new U(['one' => '{0} бајт', 'other' => '{0} бајти'], ['one' => '{0} бајт', 'other' => '{0} бајти'], '{0} B'),
    'celsius' => new U(['one' => '{0} целзиусов степен', 'other' => '{0} целзиусови степени'], '{0} °C', '{0} °C'),
    'centimeter' => new U(['one' => '{0} сантиметар', 'other' => '{0} сантиметри'], '{0} cm', '{0} cm'),
    'day' => new U(['one' => '{0} ден', 'other' => '{0} дена'], ['one' => '{0} ден', 'other' => '{0} дена'], '{0} д.'),
    'degree' => new U(['one' => '{0} степен', 'other' => '{0} степени'], '{0} deg', '{0} deg'),
    'fahrenheit' => new U(['one' => '{0} фаренхајтов степен', 'other' => '{0} фаренхајтови степени'], '{0} °F', '{0} °F'),
    'fluid-ounce' => new U(['one' => '{0} унца течност', 'other' => '{0} унци течност'], '{0} fl oz', '{0} fl oz'),
    'foot' => new U(['one' => '{0} стапка', 'other' => '{0} стапки'], '{0} ft', '{0} ft'),
    'gallon' => new U(['one' => '{0} галон', 'other' => '{0} галони'], '{0} gal', '{0} gal'),
    'gigabit' => new U(['one' => '{0} гигабит', 'other' => '{0} гигабита'], '{0} Gb', '{0} Gb'),
    'gigabyte' => new U(['one' => '{0} гигабајт', 'other' => '{0} гигабајти'], '{0} GB', '{0} GB'),
    'gram' => new U(['one' => '{0} грам', 'other' => '{0} грама'], '{0} g', '{0} g'),
    'hectare' => new U(['one' => '{0} хектар', 'other' => '{0} хектари'], '{0} ha', '{0} ha'),
    'hour' => new U(['one' => '{0} час', 'other' => '{0} часа'], '{0} ч.', '{0} ч.'),
    'inch' => new U(['one' => '{0} инч', 'other' => '{0} инчи'], '{0} in', '{0} in'),
    'kilobit' => new U(['one' => '{0} килобит', 'other' => '{0} килобита'], '{0} kb', '{0} kb'),
    'kilobyte' => new U(['one' => '{0} килобајт', 'other' => '{0} килобајти'], '{0} kB', '{0} kB'),
    'kilogram' => new U(['one' => '{0} килограм', 'other' => '{0} килограми'], '{0} kg', '{0} kg'),
    'kilometer' => new U(['one' => '{0} километар', 'other' => '{0} километри'], '{0} km', '{0} km'),
    'liter' => new U(['one' => '{0} литар', 'other' => '{0} литри'], '{0} L', '{0} L'),
    'megabit' => new U(['one' => '{0} мегабит', 'other' => '{0} мегабита'], '{0} Mb', '{0} Mb'),
    'megabyte' => new U(['one' => '{0} мегабајт', 'other' => '{0} мегабајти'], '{0} MB', '{0} MB'),
    'meter' => new U(['one' => '{0} метар', 'other' => '{0} метри'], '{0} m', '{0} m'),
    'microsecond' => new U(['one' => '{0} микросекунда', 'other' => '{0} микросекунди'], '{0} μs', '{0}μс'),
    'mile' => new U(['one' => '{0} милја', 'other' => '{0} милји'], '{0} mi', '{0} mi'),
    'mile-scandinavian' => new U(['one' => '{0} скандинавска милја', 'other' => '{0} скандинавски милји'], '{0} smi', '{0} smi'),
    'milliliter' => new U(['one' => '{0} милилитар', 'other' => '{0} милилитри'], '{0} mL', '{0} mL'),
    'millimeter' => new U(['one' => '{0} милиметар', 'other' => '{0} милиметри'], '{0} mm', '{0} mm'),
    'millisecond' => new U(['one' => '{0} милисекунда', 'other' => '{0} милисекунди'], '{0} мс', '{0} мс'),
    'minute' => new U(['one' => '{0} минута', 'other' => '{0} минути'], '{0} мин.', '{0} м.'),
    'month' => new U(['one' => '{0} месец', 'other' => '{0} месеци'], '{0} мес.', '{0} м.'),
    'nanosecond' => new U(['one' => '{0} наносекунда', 'other' => '{0} наносекунди'], '{0} нс', '{0} нс'),
    'ounce' => new U(['one' => '{0} унца', 'other' => '{0} унци'], '{0} oz', '{0} oz'),
    'percent' => new U(['one' => '{0} процент', 'other' => '{0} проценти'], '{0} %', '{0} %'),
    'petabyte' => new U(['one' => '{0} петабајт', 'other' => '{0} петабајти'], '{0} PB', '{0} PB'),
    'pound' => new U(['one' => '{0} фунта', 'other' => '{0} фунти'], '{0} lb', '{0} lb'),
    'second' => new U(['one' => '{0} секунда', 'other' => '{0} секунди'], '{0} сек.', '{0} с.'),
    'stone' => new U(['one' => '{0} стоун', 'other' => '{0} стоуни'], '{0} st', '{0} st'),
    'terabit' => new U(['one' => '{0} терабит', 'other' => '{0} терабита'], '{0} Tb', '{0} Tb'),
    'terabyte' => new U(['one' => '{0} терабајт', 'other' => '{0} терабајти'], '{0} TB', '{0} TB'),
    'week' => new U(['one' => '{0} седмица', 'other' => '{0} седмици'], '{0} сед.', '{0} с.'),
    'yard' => new U(['one' => '{0} јард', 'other' => '{0} јарди'], '{0} yd', '{0} yd'),
    'year' => new U(['one' => '{0} година', 'other' => '{0} години'], '{0} год.', '{0} г.'),
];
