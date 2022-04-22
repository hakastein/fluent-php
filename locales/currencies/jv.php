<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'Dirham Uni Emirat Arab', plurals: ['other' => 'Dirham Uni Emirat Arab']),
    'AFN' => new C('AFN', 'Afghani Afganistan', narrow: '؋', plurals: ['other' => 'Afghani Afganistan']),
    'ALL' => new C('ALL', 'Lek Albania', plurals: ['other' => 'Lek Albania']),
    'AMD' => new C('AMD', 'Dram Armenia', narrow: '֏', plurals: ['other' => 'Dram Armenia']),
    'ANG' => new C('ANG', 'Guilder Antilla Walanda', plurals: ['other' => 'Guilder Antilla Walanda']),
    'AOA' => new C('AOA', 'Kwanza Angola', narrow: 'Kz', plurals: ['other' => 'Kwanza Angola']),
    'ARS' => new C('ARS', 'Peso Argentina', narrow: '$', plurals: ['other' => 'Peso Argentina']),
    'AUD' => new C('AUD', 'Dolar Australia', 'A$', narrow: '$', plurals: ['other' => 'Dolar Australia']),
    'AWG' => new C('AWG', 'Florin Aruban', plurals: ['other' => 'Florin Aruban']),
    'AZN' => new C('AZN', 'Manat Azerbaijan', narrow: '₼', plurals: ['other' => 'Manat Azerbaijan']),
    'BAM' => new C('BAM', 'Mark Konvertibel Bosnia-Herzegovina', narrow: 'KM', plurals: ['other' => 'Mark Konvertibel Bosnia-Herzegovina']),
    'BBD' => new C('BBD', 'Dolar Barbadian', narrow: '$', plurals: ['other' => 'Dolar Barbadian']),
    'BDT' => new C('BDT', 'Taka Bangladesh', narrow: '৳', plurals: ['other' => 'Taka Bangladesh']),
    'BGN' => new C('BGN', 'Lev Bulgaria', plurals: ['other' => 'Lev Bulgaria']),
    'BHD' => new C('BHD', 'Bahrain Dinar', plurals: ['other' => 'Bahrain Dinar'], minorUnits: 3),
    'BIF' => new C('BIF', 'Franc Burundi', plurals: ['other' => 'Franc Burundi'], minorUnits: 0),
    'BMD' => new C('BMD', 'Dolar Bermuda', narrow: '$', plurals: ['other' => 'Dolar Bermuda']),
    'BND' => new C('BND', 'Dolar Brunai', narrow: '$', plurals: ['other' => 'Dolar Brunai']),
    'BOB' => new C('BOB', 'Boliviano Bolivia', narrow: 'Bs', plurals: ['other' => 'Boliviano Bolivia']),
    'BRL' => new C('BRL', 'Real Brasil', 'R$', narrow: 'R$', plurals: ['other' => 'Real Brasil']),
    'BSD' => new C('BSD', 'Dolar Bahamian', narrow: '$', plurals: ['other' => 'Dolar Bahamian']),
    'BTN' => new C('BTN', 'Ngultrum Bhutan', plurals: ['other' => 'Ngultrum Bhutan']),
    'BWP' => new C('BWP', 'Pula Botswana', narrow: 'P', plurals: ['other' => 'Pula Botswana']),
    'BYN' => new C('BYN', 'Ruble Belarusia', plurals: ['other' => 'Ruble Belarusia']),
    'BZD' => new C('BZD', 'Dolar Belise', narrow: '$', plurals: ['other' => 'Dolar Belise']),
    'CAD' => new C('CAD', 'Dolar Kanada', 'CA$', narrow: '$', plurals: ['other' => 'Dolar Kanada']),
    'CDF' => new C('CDF', 'Franc Kongo', plurals: ['other' => 'Franc Kongo']),
    'CHF' => new C('CHF', 'Franc Swiss', plurals: ['other' => 'Franc Swiss']),
    'CLP' => new C('CLP', 'Peso Chili', narrow: '$', plurals: ['other' => 'Peso Chili'], minorUnits: 0),
    'CNH' => new C('CNH', 'Yuan Tyongkok (Jaban Rangkah)', plurals: ['other' => 'Yuan Tyongkok (Jaban Rangkah)']),
    'CNY' => new C('CNY', 'Yuan Tyongkok', 'CN¥', narrow: '¥', plurals: ['other' => 'Yuan Tyongkok']),
    'COP' => new C('COP', 'Peso Kolumbia', narrow: '$', plurals: ['other' => 'Peso Kolumbia']),
    'CRC' => new C('CRC', 'Colon Kosta Rika', narrow: '₡', plurals: ['other' => 'Colon Kosta Rika']),
    'CUC' => new C('CUC', 'Peso Konvertibel Kuba', narrow: '$', plurals: ['other' => 'Peso Konvertibel Kuba']),
    'CUP' => new C('CUP', 'Peso Kuba', narrow: '$', plurals: ['other' => 'Peso Kuba']),
    'CVE' => new C('CVE', 'Escudo Tanjung Verde', plurals: ['other' => 'Escudo Tanjung Verde']),
    'CZK' => new C('CZK', 'Koruna Czech', narrow: 'Kč', plurals: ['other' => 'Koruna Czech']),
    'DJF' => new C('DJF', 'Franc Djibouti', plurals: ['other' => 'Franc Djibouti'], minorUnits: 0),
    'DKK' => new C('DKK', 'Krone Denmark', narrow: 'kr', plurals: ['other' => 'Krone Denmark']),
    'DOP' => new C('DOP', 'Peso Dominika', narrow: '$', plurals: ['other' => 'Peso Dominika']),
    'DZD' => new C('DZD', 'Dinar Algeria', plurals: ['other' => 'Dinar Algeria']),
    'EGP' => new C('EGP', 'Pound Mesir', narrow: 'E£', plurals: ['other' => 'Pound Mesir']),
    'ERN' => new C('ERN', 'Nakfa Eritrea', plurals: ['other' => 'Nakfa Eritrea']),
    'ETB' => new C('ETB', 'Birr Ethiopia', plurals: ['other' => 'Birr Ethiopia']),
    'EUR' => new C('EUR', 'Euro', '€', narrow: '€', plurals: ['other' => 'Euro']),
    'FJD' => new C('FJD', 'Dolar Fiji', narrow: '$', plurals: ['other' => 'Dolar Fiji']),
    'FKP' => new C('FKP', 'Pound Kepuloan Falkland', narrow: '£', plurals: ['other' => 'Pound Kepuloan Falkland']),
    'GBP' => new C('GBP', 'Pound Inggris', '£', narrow: '£', plurals: ['other' => 'Pound Inggris']),
    'GEL' => new C('GEL', 'Lari Georgia', narrow: '₾', plurals: ['other' => 'Lari Georgia']),
    'GHS' => new C('GHS', 'Cedi Ghana', narrow: 'GH₵', plurals: ['other' => 'Cedi Ghana']),
    'GIP' => new C('GIP', 'Pound Gibraltar', narrow: '£', plurals: ['other' => 'Pound Gibraltar']),
    'GMD' => new C('GMD', 'Dalasi Gambia', plurals: ['other' => 'Dalasi Gambia']),
    'GNF' => new C('GNF', 'Franc Guinea', narrow: 'FG', plurals: ['other' => 'Franc Guinea'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'Quetzal Guatemala', narrow: 'Q', plurals: ['other' => 'Quetzal Guatemala']),
    'GYD' => new C('GYD', 'Dolar Guyana', narrow: '$', plurals: ['other' => 'Dolar Guyana']),
    'HKD' => new C('HKD', 'Dolar Hong Kong', 'HK$', narrow: '$', plurals: ['other' => 'Dolar Hong Kong']),
    'HNL' => new C('HNL', 'Lempira Honduras', narrow: 'L', plurals: ['other' => 'Lempira Honduras']),
    'HRK' => new C('HRK', 'Kuna Kroasia', narrow: 'kn', plurals: ['other' => 'Kuna Kroasia']),
    'HTG' => new C('HTG', 'Gourde Haiti', plurals: ['other' => 'Gourde Haiti']),
    'HUF' => new C('HUF', 'Forint Hungaria', narrow: 'Ft', plurals: ['other' => 'Forint Hungaria']),
    'IDR' => new C('IDR', 'Rupiah Indonesia', 'Rp', narrow: 'Rp', plurals: ['other' => 'Rupiah Indonesia']),
    'ILS' => new C('ILS', 'Shekel Anyar Israel', '₪', narrow: '₪', plurals: ['other' => 'Shekel Anyar Israel']),
    'INR' => new C('INR', 'Rupee India', '₹', narrow: '₹', plurals: ['other' => 'Rupee India']),
    'IQD' => new C('IQD', 'Dinar Irak', plurals: ['other' => 'Dinar Irak'], minorUnits: 3),
    'IRR' => new C('IRR', 'Rial Iran', plurals: ['other' => 'Rial Iran']),
    'ISK' => new C('ISK', 'Krona Islandia', narrow: 'kr', plurals: ['other' => 'Krona Islandia'], minorUnits: 0),
    'JMD' => new C('JMD', 'Dolar Jamaika', narrow: '$', plurals: ['other' => 'Dolar Jamaika']),
    'JOD' => new C('JOD', 'Dinar Yordania', plurals: ['other' => 'Dinar Yordania'], minorUnits: 3),
    'JPY' => new C('JPY', 'Yen Jepang', 'JP¥', narrow: '¥', plurals: ['other' => 'Yen Jepang'], minorUnits: 0),
    'KES' => new C('KES', 'Shilling Kenya', plurals: ['other' => 'Shilling Kenya']),
    'KGS' => new C('KGS', 'Som Kirgistan', plurals: ['other' => 'Som Kirgistan']),
    'KHR' => new C('KHR', 'Riel Kamboja', narrow: '៛', plurals: ['other' => 'Riel Kamboja']),
    'KMF' => new C('KMF', 'Franc Komoro', narrow: 'CF', plurals: ['other' => 'Franc Komoro'], minorUnits: 0),
    'KPW' => new C('KPW', 'Won Korea Lor', narrow: '₩', plurals: ['other' => 'Won Korea Lor']),
    'KRW' => new C('KRW', 'Won Korea Kidul', '₩', narrow: '₩', plurals: ['other' => 'Won Korea Kidul'], minorUnits: 0),
    'KWD' => new C('KWD', 'Dinar Kuwait', plurals: ['other' => 'Dinar Kuwait'], minorUnits: 3),
    'KYD' => new C('KYD', 'Dolar Kepuloan Caiman', narrow: '$', plurals: ['other' => 'Dolar Kepuloan Caiman']),
    'KZT' => new C('KZT', 'Tenge Kasakhstan', narrow: '₸', plurals: ['other' => 'Tenge Kasakhstan']),
    'LAK' => new C('LAK', 'Kip Laos', narrow: '₭', plurals: ['other' => 'Kip Laos']),
    'LBP' => new C('LBP', 'Pound Libanon', narrow: 'L£', plurals: ['other' => 'Pound Libanon']),
    'LKR' => new C('LKR', 'Rupee Sri Lanka', narrow: 'Rs', plurals: ['other' => 'Rupee Sri Lanka']),
    'LRD' => new C('LRD', 'Dolar Liberia', narrow: '$', plurals: ['other' => 'Dolar Liberia']),
    'LSL' => new C('LSL', 'Lesotho Loti', plurals: ['other' => 'Lesotho lotis']),
    'LYD' => new C('LYD', 'Dinar Libya', plurals: ['other' => 'Dinar Libya'], minorUnits: 3),
    'MAD' => new C('MAD', 'Dirham Maroko', plurals: ['other' => 'Dirham Moroko']),
    'MDL' => new C('MDL', 'Leu Moldova', plurals: ['other' => 'Leu Moldova']),
    'MGA' => new C('MGA', 'Ariary Malagasi', narrow: 'Ar', plurals: ['other' => 'Ariary Malagasi']),
    'MKD' => new C('MKD', 'Denar Masedonia', plurals: ['other' => 'Denar Masedonia']),
    'MMK' => new C('MMK', 'Kyat Myanmar', narrow: 'K', plurals: ['other' => 'Kyat Myanmar']),
    'MNT' => new C('MNT', 'Tugrik Mongol', narrow: '₮', plurals: ['other' => 'Tugrik Mongol']),
    'MOP' => new C('MOP', 'Pataca Macau'),
    'MRO' => new C('MRO', 'Ouguiya Mauritania (1973 - 2017)', plurals: ['other' => 'Ouguiya Mauritania (1973 - 2017)']),
    'MRU' => new C('MRU', 'Ouguiya Mauritania', plurals: ['other' => 'Ouguiya Mauritania']),
    'MUR' => new C('MUR', 'Rupee Mauritius', narrow: 'Rs', plurals: ['other' => 'Rupee Mauritius']),
    'MVR' => new C('MVR', 'Rufiyaa Maladewa', plurals: ['other' => 'Rufiyaa Maladewa']),
    'MWK' => new C('MWK', 'Kwacha Malawi', plurals: ['other' => 'Kwacha Malawi']),
    'MXN' => new C('MXN', 'Peso Meksiko', 'MX$', narrow: '$', plurals: ['other' => 'Peso Meksiko']),
    'MYR' => new C('MYR', 'Ringgit Malaysia', narrow: 'RM', plurals: ['other' => 'Ringgit Malaysia']),
    'MZN' => new C('MZN', 'Metical Mosambik', plurals: ['other' => 'Metical Mosambik']),
    'NAD' => new C('NAD', 'Dolar Namibia', narrow: '$', plurals: ['other' => 'Dolar Namibia']),
    'NGN' => new C('NGN', 'Naira Nigeria', narrow: '₦', plurals: ['other' => 'Naira Nigeria']),
    'NIO' => new C('NIO', 'Cordoba Nikaragua', narrow: 'C$', plurals: ['other' => 'Cordoba Nikaragua']),
    'NOK' => new C('NOK', 'Krone Norwegia', narrow: 'kr', plurals: ['other' => 'Krone Norwegia']),
    'NPR' => new C('NPR', 'Rupee Nepal', narrow: 'Rs', plurals: ['other' => 'Rupee Nepal']),
    'NZD' => new C('NZD', 'Dolar Selandia Anyar', 'NZ$', narrow: '$', plurals: ['other' => 'Dolar Selandia Anyar']),
    'OMR' => new C('OMR', 'Rial Oman', plurals: ['other' => 'Rial Oman'], minorUnits: 3),
    'PAB' => new C('PAB', 'Balboa Panama', plurals: ['other' => 'Balboa Panama']),
    'PEN' => new C('PEN', 'Sol Peru', plurals: ['other' => 'Sol Peru']),
    'PGK' => new C('PGK', 'Kina Papua Nugini', plurals: ['other' => 'Kina Papua Nugini']),
    'PHP' => new C('PHP', 'Piso Filipina', '₱', narrow: '₱', plurals: ['other' => 'Piso Filipina']),
    'PKR' => new C('PKR', 'Rupee Pakistan', narrow: 'Rs', plurals: ['other' => 'Rupee Pakistan']),
    'PLN' => new C('PLN', 'Zloty Polandia', narrow: 'zł', plurals: ['other' => 'Zloty Polandia']),
    'PYG' => new C('PYG', 'Guarani Paraguay', narrow: '₲', plurals: ['other' => 'Guarani Paraguay'], minorUnits: 0),
    'QAR' => new C('QAR', 'Rial Qatar', plurals: ['other' => 'Rial Qatar']),
    'RON' => new C('RON', 'Leu Rumania', narrow: 'lei', plurals: ['other' => 'Leu Rumania']),
    'RSD' => new C('RSD', 'Dinar Serbia', plurals: ['other' => 'Dinar Serbia']),
    'RUB' => new C('RUB', 'Rubel Rusia', narrow: '₽', plurals: ['other' => 'Rubel Rusia']),
    'RWF' => new C('RWF', 'Franc Rwanda', narrow: 'RF', plurals: ['other' => 'Franc Rwanda'], minorUnits: 0),
    'SAR' => new C('SAR', 'Riyal Saudi', plurals: ['other' => 'Riyal Saudi']),
    'SBD' => new C('SBD', 'Dolar Kepuloan Solomon', narrow: '$', plurals: ['other' => 'Dolar Kepuloan Solomon']),
    'SCR' => new C('SCR', 'Rupee Seichelles', plurals: ['other' => 'Rupee Seichelles']),
    'SDG' => new C('SDG', 'Pound Sudan', plurals: ['other' => 'Pound Sudan']),
    'SEK' => new C('SEK', 'Krona Swedia', narrow: 'kr', plurals: ['other' => 'Krona Swedia']),
    'SGD' => new C('SGD', 'Dolar Singapura', narrow: '$', plurals: ['other' => 'Dolar Singapura']),
    'SHP' => new C('SHP', 'Pound Santa Helena', narrow: '£', plurals: ['other' => 'Pound Santa Helena']),
    'SLL' => new C('SLL', 'Leone Sierra Leone', plurals: ['other' => 'Leone Sierra Leone']),
    'SOS' => new C('SOS', 'Shilling Somalia', plurals: ['other' => 'Shilling Somalia']),
    'SRD' => new C('SRD', 'Dolar Suriname', narrow: '$', plurals: ['other' => 'Dolar Suriname']),
    'SSP' => new C('SSP', 'Pound Sudan Kidul', narrow: '£', plurals: ['other' => 'Pound Sudan Kidul']),
    'STN' => new C('STN', 'Dobra Sao Tome lan Principe', narrow: 'Db', plurals: ['other' => 'Dobra Sao Tome lan Principe']),
    'SYP' => new C('SYP', 'Pound Siria', narrow: '£', plurals: ['other' => 'Pound Siria']),
    'SZL' => new C('SZL', 'Lilangeni Swasi', plurals: ['other' => 'Lilangeni Swasi']),
    'THB' => new C('THB', 'Baht Thai', narrow: '฿', plurals: ['other' => 'Baht Thai']),
    'TJS' => new C('TJS', 'Somoni Tajikistan', plurals: ['other' => 'Somoni Tajikistan']),
    'TMT' => new C('TMT', 'Manat Turmenistan', plurals: ['other' => 'Manat Turmenistan']),
    'TND' => new C('TND', 'Dinar Tunisia', plurals: ['other' => 'Dinar Tunisia'], minorUnits: 3),
    'TOP' => new C('TOP', 'Paʻanga Tonga', narrow: 'T$', plurals: ['other' => 'Paʻanga Tonga']),
    'TRY' => new C('TRY', 'Lira Turki', narrow: '₺', plurals: ['other' => 'Lira Turki']),
    'TTD' => new C('TTD', 'Dolar Trinidad lan Tobago', narrow: '$', plurals: ['other' => 'Dolar Trinidad lan Tobago']),
    'TWD' => new C('TWD', 'Dolar Anyar Taiwan', 'NT$', narrow: '$', plurals: ['other' => 'Dolar Anyar Taiwan']),
    'TZS' => new C('TZS', 'Shilling Tansania', plurals: ['other' => 'Shilling Tansania']),
    'UAH' => new C('UAH', 'Hryvnia Ukrania', narrow: '₴', plurals: ['other' => 'Hryvnia Ukrania']),
    'UGX' => new C('UGX', 'Shilling Uganda', plurals: ['other' => 'Shilling Uganda'], minorUnits: 0),
    'USD' => new C('USD', 'Dolar Amerika Serikat', 'US$', narrow: '$', plurals: ['other' => 'Dolar Amerika Serikat']),
    'UYU' => new C('UYU', 'Peso Uruguay', narrow: '$', plurals: ['other' => 'Peso Uruguay']),
    'UZS' => new C('UZS', 'Som Usbekistan', plurals: ['other' => 'Som Usbekistan']),
    'VEF' => new C('VEF', 'Bolivar Venezuela (2008 - 2018)', narrow: 'Bs', plurals: ['other' => 'Bolivar Venezuela (2008 - 2018)']),
    'VES' => new C('VES', 'Bolivar Venezuela', plurals: ['other' => 'Bolivar Venezuela']),
    'VND' => new C('VND', 'Dong Vietnam', '₫', narrow: '₫', plurals: ['other' => 'Dong Vietnam'], minorUnits: 0),
    'VUV' => new C('VUV', 'Vatu Vanuatu', plurals: ['other' => 'Vatu Vanuatu'], minorUnits: 0),
    'WST' => new C('WST', 'Tala Samoa', plurals: ['other' => 'Tala Samoa']),
    'XAF' => new C('XAF', 'CFA Franc Afrika Tengah', 'FCFA', plurals: ['other' => 'CFA Franc Afrika Tengah'], minorUnits: 0),
    'XCD' => new C('XCD', 'Dolar Karibia Wetan', 'EC$', narrow: '$', plurals: ['other' => 'Dolar Karibia Wetan']),
    'XOF' => new C('XOF', 'CFA Franc Afrika Kulon', "F\u{202F}CFA", plurals: ['other' => 'CFA Franc Afrika Kulon'], minorUnits: 0),
    'XPF' => new C('XPF', 'Franc CFP', 'CFPF', plurals: ['other' => 'Franc CFP'], minorUnits: 0),
    'XXX' => new C('XXX', 'Dhuwit Ora Dikenali', '¤', plurals: ['other' => 'Dhuwit Ora Dikenali']),
    'YER' => new C('YER', 'Rial Yaman', plurals: ['other' => 'Rial Yaman']),
    'ZAR' => new C('ZAR', 'Rand Afrika Kidul', narrow: 'R', plurals: ['other' => 'Rand Afrika Kidul']),
    'ZMW' => new C('ZMW', 'Kwacha Sambia', narrow: 'ZK', plurals: ['other' => 'Kwacha Sambia']),
];
