<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AUD' => new C('AUD', 'Australian Dollar', '$', '$', ['one' => 'Australian dollar', 'other' => 'Australian dollars']),
    'BAM' => new C('BAM', 'Bosnia-Herzegovina Convertible Marka', narrow: 'KM', plurals: 'Bosnia-Herzegovina convertible marka'),
    'BBD' => new C('BBD', 'Barbados Dollar', narrow: '$', plurals: ['one' => 'Barbados dollar', 'other' => 'Barbados dollars']),
    'BDT' => new C('BDT', 'Bangladeshi Taka', narrow: 'Tk', plurals: ['one' => 'Bangladeshi taka', 'other' => 'Bangladeshi takas']),
    'BMD' => new C('BMD', 'Bermuda Dollar', narrow: '$', plurals: ['one' => 'Bermuda dollar', 'other' => 'Bermuda dollars']),
    'BOB' => new C('BOB', 'Bolivian boliviano', narrow: 'Bs', plurals: ['one' => 'Bolivian boliviano', 'other' => 'Bolivian bolivianos']),
    'BRL' => new C('BRL', 'Brazilian Real', narrow: 'R$', plurals: ['one' => 'Brazilian real', 'other' => 'Brazilian reals']),
    'BYB' => new C('BYB', 'Belarusian New Rouble (1994–1999)', plurals: ['one' => 'Belarusian new rouble (1994–1999)', 'other' => 'Belarusian new roubles (1994–1999)']),
    'BYN' => new C('BYN', 'Belarusian Rouble', plurals: ['one' => 'Belarusian rouble', 'other' => 'Belarusian roubles']),
    'BYR' => new C('BYR', 'Belarusian Rouble (2000–2016)', plurals: ['one' => 'Belarusian rouble (2000–2016)', 'other' => 'Belarusian roubles (2000–2016)']),
    'CAD' => new C('CAD', 'Canadian Dollar', narrow: '$', plurals: ['one' => 'Canadian dollar', 'other' => 'Canadian dollars']),
    'CNY' => new C('CNY', 'Chinese Yuan', narrow: '¥', plurals: 'Chinese yuan'),
    'CUP' => new C('CUP', 'Cuban Peso', narrow: '₱', plurals: ['one' => 'Cuban peso', 'other' => 'Cuban pesos']),
    'EGP' => new C('EGP', 'Egyptian Pound', narrow: '£', plurals: ['one' => 'Egyptian pound', 'other' => 'Egyptian pounds']),
    'EUR' => new C('EUR', 'Euro', narrow: '€', plurals: 'euro'),
    'GBP' => new C('GBP', 'British Pound', narrow: '£', plurals: ['one' => 'British pound', 'other' => 'British pounds']),
    'GEL' => new C('GEL', 'Georgian Lari', narrow: '₾', plurals: 'Georgian lari'),
    'HKD' => new C('HKD', 'Hong Kong Dollar', narrow: '$', plurals: ['one' => 'Hong Kong dollar', 'other' => 'Hong Kong dollars']),
    'ILS' => new C('ILS', 'Israeli Shekel', narrow: '₪', plurals: ['one' => 'Israeli shekel', 'other' => 'Israeli sheckles']),
    'INR' => new C('INR', 'Indian Rupee', narrow: '₹', plurals: ['one' => 'Indian rupee', 'other' => 'Indian rupees']),
    'ISK' => new C('ISK', 'Icelandic Króna', narrow: 'Kr', plurals: ['one' => 'Icelandic króna', 'other' => 'Icelandic krónur'], minorUnits: 0),
    'JPY' => new C('JPY', 'Japanese Yen', narrow: '¥', plurals: 'Japanese yen', minorUnits: 0),
    'KRW' => new C('KRW', 'South Korean Won', narrow: '₩', plurals: 'South Korean won', minorUnits: 0),
    'KZT' => new C('KZT', 'Kazakhstani Tenge', narrow: '₸', plurals: 'Kazakhstani tenge'),
    'LAK' => new C('LAK', 'Laotian Kip', narrow: '₭', plurals: 'Laotian kip'),
    'LVR' => new C('LVR', 'Latvian Rouble', plurals: ['one' => 'Latvian rouble', 'other' => 'Latvian roubles']),
    'MGA' => new C('MGA', 'Malagasy Ariary', narrow: 'Ar', plurals: 'Malagasy ariary'),
    'MKD' => new C('MKD', 'Macedonian Denar', plurals: 'Macedonian denar'),
    'MXN' => new C('MXN', 'Mexican Peso', narrow: '$', plurals: ['one' => 'Mexican peso', 'other' => 'Mexican pesos']),
    'NZD' => new C('NZD', 'New Zealand Dollar', narrow: '$', plurals: ['one' => 'New Zealand dollar', 'other' => 'New Zealand dollars']),
    'PGK' => new C('PGK', 'Papua New Guinean Kina', plurals: ['one' => 'Papua New Guinean kina', 'other' => 'Papua New Guinean kinas']),
    'PHP' => new C('PHP', 'Philippine Peso', narrow: '₱', plurals: ['one' => 'Philippine peso', 'other' => 'Philippine pesos']),
    'PYG' => new C('PYG', 'Paraguayan Guarani', narrow: 'Gs', plurals: ['one' => 'Paraguayan guarani', 'other' => 'Paraguayan guaranis'], minorUnits: 0),
    'QAR' => new C('QAR', 'Qatari Riyal', plurals: ['one' => 'Qatari riyal', 'other' => 'Quatari riyals']),
    'RUB' => new C('RUB', 'Russian Rouble', narrow: '₽', plurals: ['one' => 'Russian rouble', 'other' => 'Russian roubles']),
    'RUR' => new C('RUR', 'Russian Rouble (1991–1998)', plurals: ['one' => 'Russian rouble (1991–1998)', 'other' => 'Russian roubles (1991–1998)']),
    'SCR' => new C('SCR', 'Seychellois Rupee', 'Rs', plurals: ['one' => 'Seychellois rupee', 'other' => 'Seychellois rupees']),
    'SEK' => new C('SEK', 'Swedish Krona', narrow: 'Kr', plurals: ['one' => 'Swedish krona', 'other' => 'Swedish kronor']),
    'SHP' => new C('SHP', 'St Helena Pound', narrow: '£', plurals: ['one' => 'St Helena pound', 'other' => 'St Helena pounds']),
    'SLL' => new C('SLL', 'Sierra Leonean Leone (1964–2022)', plurals: ['one' => 'Sierra Leonean leone (1964–2022)', 'other' => 'Sierra Leonean leones (1964–2022)']),
    'SRD' => new C('SRD', 'Suriname Dollar', narrow: '$', plurals: ['one' => 'Suriname dollar', 'other' => 'Suriname dollars']),
    'TJR' => new C('TJR', 'Tajikistani Rouble', plurals: ['one' => 'Tajikistani rouble', 'other' => 'Tajikistani roubles']),
    'TRY' => new C('TRY', 'Turkish Lira', narrow: '₺', plurals: ['one' => 'Turkish lira', 'other' => 'Turkish lire']),
    'TWD' => new C('TWD', 'New Taiwan Dollar', narrow: '$', plurals: ['one' => 'New Taiwan dollar', 'other' => 'New Taiwan dollars']),
    'USD' => new C('USD', 'US Dollar', narrow: '$', plurals: ['one' => 'US dollar', 'other' => 'US dollars']),
    'UYU' => new C('UYU', 'Peso Uruguayo', narrow: '$U', plurals: ['one' => 'Uruguayan peso', 'other' => 'Uruguayan pesos']),
    'UZS' => new C('UZS', 'Uzbekistani Som', plurals: ['one' => 'Uzbekistani som', 'other' => 'Uzbekistani soms']),
    'VES' => new C('VES', 'Venezuelan bolívar', plurals: ['one' => 'Venezuelan bolívar', 'other' => 'Venezuelan bolívars']),
    'VND' => new C('VND', 'Vietnamese Dong', narrow: '₫', plurals: ['one' => 'Vietnamese dong', 'other' => 'Vietnamese dongs'], minorUnits: 0),
    'WST' => new C('WST', 'Samoan Tala', plurals: ['one' => 'Samoan tala', 'other' => 'Samoan talas']),
    'XAF' => new C('XAF', 'Central African CFA Franc', plurals: ['one' => 'Central African CFA franc', 'other' => 'Central African CFA francs'], minorUnits: 0),
    'XCD' => new C('XCD', 'East Caribbean Dollar', narrow: '$', plurals: ['one' => 'East Caribbean dollar', 'other' => 'East Caribbean dollars']),
    'XOF' => new C('XOF', 'West African CFA Franc', plurals: ['one' => 'West African CFA franc', 'other' => 'West African CFA francs'], minorUnits: 0),
    'XPF' => new C('XPF', 'CFP Franc', 'CFP', plurals: ['one' => 'CFP franc', 'other' => 'CFP francs'], minorUnits: 0),
];
