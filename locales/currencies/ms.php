<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'Dirham Emiriah Arab Bersatu', plurals: 'Dirham UAE'),
    'AFN' => new C('AFN', 'Afghani Afghanistan', narrow: '؋', plurals: 'Afghani Afghanistan'),
    'ALL' => new C('ALL', 'Lek Albania', plurals: 'Lek Albania'),
    'AMD' => new C('AMD', 'Dram Armenia', narrow: '֏', plurals: 'Dram Armenia'),
    'ANG' => new C('ANG', 'Guilder Antillen Belanda', plurals: 'Guilder Antillen Belanda'),
    'AOA' => new C('AOA', 'Kwanza Angola', narrow: 'Kz', plurals: 'Kwanza Angola'),
    'ARS' => new C('ARS', 'Peso Argentina', narrow: '$', plurals: 'Peso Argentina'),
    'AUD' => new C('AUD', 'Dolar Australia', 'A$', '$', 'Dolar Australia'),
    'AWG' => new C('AWG', 'Florin Aruba', plurals: 'Florin Aruba'),
    'AZN' => new C('AZN', 'Manat Azerbaijan', narrow: '₼', plurals: 'Manat Azerbaijan'),
    'BAM' => new C('BAM', 'Mark Boleh Tukar Bosnia-Herzegovina', narrow: 'KM', plurals: 'Mark Boleh Tukar Bosnia-Herzegovina'),
    'BBD' => new C('BBD', 'Dolar Barbados', narrow: '$', plurals: 'Dolar Barbados'),
    'BDT' => new C('BDT', 'Taka Bangladesh', narrow: '৳', plurals: 'Taka Bangladesh'),
    'BGN' => new C('BGN', 'Lev Bulgaria', plurals: 'Lev Bulgaria'),
    'BHD' => new C('BHD', 'Dinar Bahrain', plurals: 'Dinar Bahrain', minorUnits: 3),
    'BIF' => new C('BIF', 'Franc Burundi', plurals: 'Franc Burundi', minorUnits: 0),
    'BMD' => new C('BMD', 'Dolar Bermuda', narrow: '$', plurals: 'Dolar Bermuda'),
    'BND' => new C('BND', 'Dolar Brunei', narrow: '$', plurals: 'Dolar Brunei'),
    'BOB' => new C('BOB', 'Boliviano Bolivia', narrow: 'Bs', plurals: 'Boliviano Bolivia'),
    'BRL' => new C('BRL', 'Real Brazil', 'R$', 'R$', 'Real Brazil'),
    'BSD' => new C('BSD', 'Dolar Bahamas', narrow: '$', plurals: 'Dolar Bahamas'),
    'BTN' => new C('BTN', 'Ngultrum Bhutan', plurals: 'Ngultrum Bhutan'),
    'BWP' => new C('BWP', 'Pula Botswana', narrow: 'P', plurals: 'Pula Botswana'),
    'BYN' => new C('BYN', 'Rubel Belarus baharu', narrow: 'р.', plurals: 'Rubel Belarus'),
    'BYR' => new C('BYR', 'Rubel Belarus (2000–2016)', plurals: 'Rubel Belarus (2000–2016)'),
    'BZD' => new C('BZD', 'Dolar Belize', narrow: '$', plurals: 'Dolar Belize'),
    'CAD' => new C('CAD', 'Dolar Kanada', narrow: '$', plurals: 'Dolar Kanada'),
    'CDF' => new C('CDF', 'Franc Congo', plurals: 'Franc Congo'),
    'CHF' => new C('CHF', 'Franc Switzerland', plurals: 'Franc Switzerland'),
    'CLP' => new C('CLP', 'Peso Chile', narrow: '$', plurals: 'Peso Chile', minorUnits: 0),
    'CNH' => new C('CNH', 'Yuan China (luar pesisir)', plurals: 'Yuan China (luar pesisir)'),
    'CNY' => new C('CNY', 'Yuan Cina', 'CN¥', '¥', 'Yuan Cina'),
    'COP' => new C('COP', 'Peso Colombia', narrow: '$', plurals: 'Peso Colombia'),
    'CRC' => new C('CRC', 'Colon Costa Rica', narrow: '₡', plurals: 'Colon Costa Rica'),
    'CUC' => new C('CUC', 'Peso Boleh Tukar Cuba', narrow: '$', plurals: 'Peso Boleh Tukar Cuba'),
    'CUP' => new C('CUP', 'Peso Cuba', narrow: '$', plurals: 'Peso Cuba'),
    'CVE' => new C('CVE', 'Escudo Tanjung Verde', plurals: 'Escudo Tanjung Verde'),
    'CZK' => new C('CZK', 'Koruna Republik Czech', narrow: 'Kč', plurals: 'Koruna Republik Czech'),
    'DJF' => new C('DJF', 'Franc Djibouti', plurals: 'Franc Djibouti', minorUnits: 0),
    'DKK' => new C('DKK', 'Krone Denmark', narrow: 'kr', plurals: 'Krone Denmark'),
    'DOP' => new C('DOP', 'Peso Dominican', narrow: '$', plurals: 'Peso Dominican'),
    'DZD' => new C('DZD', 'Dinar Algeria', plurals: 'Dinar Algeria'),
    'EGP' => new C('EGP', 'Paun Mesir', narrow: 'E£', plurals: 'Paun Mesir'),
    'ERN' => new C('ERN', 'Nakfa Eritrea', plurals: 'Nakfa Eritrea'),
    'ETB' => new C('ETB', 'Birr Ethiopia', plurals: 'Birr Ethiopia'),
    'EUR' => new C('EUR', 'Euro', '€', '€', 'Euro'),
    'FJD' => new C('FJD', 'Dolar Fiji', narrow: '$', plurals: 'Dolar Fiji'),
    'FKP' => new C('FKP', 'Paun Kepulauan Falkland', narrow: '£', plurals: 'Paun Kepulauan Falkland'),
    'GBP' => new C('GBP', 'Paun British', '£', '£', 'Paun British'),
    'GEL' => new C('GEL', 'Lari Georgia', narrow: '₾', plurals: 'Lari Georgia'),
    'GHS' => new C('GHS', 'Cedi Ghana', narrow: 'GH₵', plurals: 'Cedi Ghana'),
    'GIP' => new C('GIP', 'Paun Gibraltar', narrow: '£', plurals: 'Paun Gibraltar'),
    'GMD' => new C('GMD', 'Dalasi Gambia', plurals: 'Dalasi Gambia'),
    'GNF' => new C('GNF', 'Franc Guinea', narrow: 'FG', plurals: 'Franc Guinea', minorUnits: 0),
    'GTQ' => new C('GTQ', 'Quetzal Guatemala', narrow: 'Q', plurals: 'Quetzal Guatemala'),
    'GYD' => new C('GYD', 'Dolar Guyana', narrow: '$', plurals: 'Dolar Guyana'),
    'HKD' => new C('HKD', 'Dolar Hong Kong', 'HK$', '$', 'Dolar Hong Kong'),
    'HNL' => new C('HNL', 'Lempira Honduras', narrow: 'L', plurals: 'Lempira Honduras'),
    'HRK' => new C('HRK', 'Kuna Croatia', narrow: 'kn', plurals: 'Kuna Croatia'),
    'HTG' => new C('HTG', 'Gourde Haiti', plurals: 'Gourde Haiti'),
    'HUF' => new C('HUF', 'Forint Hungary', narrow: 'Ft', plurals: 'Forint Hungary'),
    'IDR' => new C('IDR', 'Rupiah Indonesia', narrow: 'Rp', plurals: 'Rupiah Indonesia'),
    'ILS' => new C('ILS', 'Syekel Baharu Israel', '₪', '₪', 'Syekel baharu Israel'),
    'INR' => new C('INR', 'Rupee India', '₹', '₹', 'Rupee India'),
    'IQD' => new C('IQD', 'Dinar Iraq', plurals: 'Dinar Iraq', minorUnits: 3),
    'IRR' => new C('IRR', 'Rial Iran', plurals: 'Rial Iran'),
    'ISK' => new C('ISK', 'Krona Iceland', narrow: 'kr', plurals: 'Krona Iceland', minorUnits: 0),
    'JMD' => new C('JMD', 'Dolar Jamaica', narrow: '$', plurals: 'Dolar Jamaica'),
    'JOD' => new C('JOD', 'Dinar Jordan', plurals: 'Dinar Jordan', minorUnits: 3),
    'JPY' => new C('JPY', 'Yen Jepun', 'JP¥', '¥', 'Yen Jepun', 0),
    'KES' => new C('KES', 'Syiling Kenya', plurals: 'Syiling Kenya'),
    'KGS' => new C('KGS', 'Som Kyrgystani', plurals: 'Som Kyrgystani'),
    'KHR' => new C('KHR', 'Riel Kemboja', narrow: '៛', plurals: 'Riel Kemboja'),
    'KMF' => new C('KMF', 'Franc Comoria', narrow: 'CF', plurals: 'Franc Comoria', minorUnits: 0),
    'KPW' => new C('KPW', 'Won Korea Utara', narrow: '₩', plurals: 'Won Korea Utara'),
    'KRW' => new C('KRW', 'Won Korea Selatan', '₩', '₩', 'Won Korea Selatan', 0),
    'KWD' => new C('KWD', 'Dinar Kuwait', plurals: 'Dinar Kuwait', minorUnits: 3),
    'KYD' => new C('KYD', 'Dolar Kepulauan Cayman', narrow: '$', plurals: 'Dolar Kepulauan Cayman'),
    'KZT' => new C('KZT', 'Tenge Kazakhstan', narrow: '₸', plurals: 'Tenge Kazakhstan'),
    'LAK' => new C('LAK', 'Kip Laos', narrow: '₭', plurals: 'Kip Laos'),
    'LBP' => new C('LBP', 'Paun Lubnan', narrow: 'L£', plurals: 'Paun Lubnan'),
    'LKR' => new C('LKR', 'Rupee Sri Lanka', narrow: 'Rs', plurals: 'Rupee Sri Lanka'),
    'LRD' => new C('LRD', 'Dolar Liberia', narrow: '$', plurals: 'Dolar Liberia'),
    'LSL' => new C('LSL', 'Loti Lesotho', plurals: 'Loti Lesotho'),
    'LTL' => new C('LTL', 'Litas Lithuania', narrow: 'Lt', plurals: 'Litas Lithuania'),
    'LVL' => new C('LVL', 'Lats Latvia', narrow: 'Ls', plurals: 'Lats Latvia'),
    'LYD' => new C('LYD', 'Dinar Libya', plurals: 'Dinar Libya', minorUnits: 3),
    'MAD' => new C('MAD', 'Dirham Maghribi', plurals: 'Dirham Maghribi'),
    'MDL' => new C('MDL', 'Leu Moldova', plurals: 'Leu Moldova'),
    'MGA' => new C('MGA', 'Ariary Malagasy', narrow: 'Ar', plurals: 'Ariary Malagasy'),
    'MGF' => new C('MGF', 'Franc Malagasy', plurals: 'Franc Malagasy'),
    'MKD' => new C('MKD', 'Denar Macedonia', plurals: 'Denar Macedonia'),
    'MMK' => new C('MMK', 'Kyat Myanma', narrow: 'K', plurals: 'Kyat Myanma'),
    'MNT' => new C('MNT', 'Tugrik Mongolia', narrow: '₮', plurals: 'Tugrik Mongolia'),
    'MOP' => new C('MOP', 'Pataca Macau', plurals: 'Pataca Macau'),
    'MRO' => new C('MRO', 'Ouguiya Mauritania (1973–2017)', plurals: 'Ouguiya Mauritania (1973–2017)'),
    'MRU' => new C('MRU', 'Ouguiya Mauritania', plurals: 'Ouguiya Mauritania'),
    'MUR' => new C('MUR', 'Rupee Mauritius', narrow: 'Rs', plurals: 'Rupee Mauritius'),
    'MVR' => new C('MVR', 'Rufiyaa Maldives', plurals: 'Rufiyaa Maldives'),
    'MWK' => new C('MWK', 'Kwacha Malawi', plurals: 'Kwacha Malawi'),
    'MXN' => new C('MXN', 'Peso Mexico', narrow: '$', plurals: 'Peso Mexico'),
    'MYR' => new C('MYR', 'Ringgit Malaysia', 'RM', 'RM', 'Ringgit Malaysia'),
    'MZE' => new C('MZE', 'Escudo Mozambique', plurals: 'Escudo Mozambique'),
    'MZM' => new C('MZM', 'Metical Mozambique (1980–2006)', plurals: 'Metical Mozambique (1980–2006)'),
    'MZN' => new C('MZN', 'Metikal Mozambique', plurals: 'Metikal Mozambique'),
    'NAD' => new C('NAD', 'Dolar Namibia', narrow: '$', plurals: 'Dolar Namibia'),
    'NGN' => new C('NGN', 'Naira Nigeria', narrow: '₦', plurals: 'Naira Nigeria'),
    'NIO' => new C('NIO', 'Cordoba Nicaragua', narrow: 'C$', plurals: 'Cordoba Nicaragua'),
    'NOK' => new C('NOK', 'Krone Norway', narrow: 'kr', plurals: 'Krone Norway'),
    'NPR' => new C('NPR', 'Rupee Nepal', narrow: 'Rs', plurals: 'Rupee Nepal'),
    'NZD' => new C('NZD', 'Dolar New Zealand', 'NZ$', '$', 'Dolar New Zealand'),
    'OMR' => new C('OMR', 'Rial Oman', plurals: 'Rial Oman', minorUnits: 3),
    'PAB' => new C('PAB', 'Balboa Panama', plurals: 'Balboa Panama'),
    'PEN' => new C('PEN', 'Sol Peru', plurals: 'Sol Peru'),
    'PGK' => new C('PGK', 'Kina Papua New Guinea', plurals: 'Kina Papua New Guinea'),
    'PHP' => new C('PHP', 'Peso Filipina', narrow: '₱', plurals: 'Peso Filipina'),
    'PKR' => new C('PKR', 'Rupee Pakistan', narrow: 'Rs', plurals: 'Rupee Pakistan'),
    'PLN' => new C('PLN', 'Zloty Poland', narrow: 'zł', plurals: 'Zloty Poland'),
    'PYG' => new C('PYG', 'Guarani Paraguay', narrow: '₲', plurals: 'Guarani Paraguay', minorUnits: 0),
    'QAR' => new C('QAR', 'Rial Qatar', plurals: 'Rial Qatar'),
    'RHD' => new C('RHD', 'Dolar Rhodesia', plurals: 'Dolar Rhodesia'),
    'RON' => new C('RON', 'Leu Romania', narrow: 'lei', plurals: 'Leu Romania'),
    'RSD' => new C('RSD', 'Dinar Serbia', plurals: 'Dinar Serbia'),
    'RUB' => new C('RUB', 'Rubel Rusia', narrow: '₽', plurals: 'Rubel Rusia'),
    'RWF' => new C('RWF', 'Franc Rwanda', narrow: 'RF', plurals: 'Franc Rwanda', minorUnits: 0),
    'SAR' => new C('SAR', 'Riyal Saudi', plurals: 'Riyal Saudi'),
    'SBD' => new C('SBD', 'Dolar Kepulauan Solomon', narrow: '$', plurals: 'Dolar Kepulauan Solomon'),
    'SCR' => new C('SCR', 'Rupee Seychelles', plurals: 'Rupee Seychelles'),
    'SDG' => new C('SDG', 'Paun Sudan', plurals: 'Paun Sudan'),
    'SEK' => new C('SEK', 'Krona Sweden', narrow: 'kr', plurals: 'Krona Sweden'),
    'SGD' => new C('SGD', 'Dolar Singapura', narrow: '$', plurals: 'Dolar Singapura'),
    'SHP' => new C('SHP', 'Paun Saint Helena', narrow: '£', plurals: 'Paun Saint Helena'),
    'SLL' => new C('SLL', 'Leone Sierra Leone', plurals: 'Leone Sierra Leone'),
    'SOS' => new C('SOS', 'Syiling Somali', plurals: 'Syiling Somali'),
    'SRD' => new C('SRD', 'Dolar Surinam', narrow: '$', plurals: 'Dolar Surinam'),
    'SSP' => new C('SSP', 'Paun Sudan selatan', narrow: '£', plurals: 'Paun Sudan selatan'),
    'STD' => new C('STD', 'Dobra Sao Tome dan Principe (1977–2017)', plurals: 'Dobra Sao Tome dan Principe (1977–2017)'),
    'STN' => new C('STN', 'Dobra Sao Tome dan Principe', narrow: 'Db', plurals: 'Dobra Sao Tome dan Principe'),
    'SYP' => new C('SYP', 'Paun Syria', narrow: '£', plurals: 'Paun Syria'),
    'SZL' => new C('SZL', 'Lilangeni Swazi', plurals: 'Lilangeni Swazi'),
    'THB' => new C('THB', 'Baht Thai', narrow: '฿', plurals: 'Baht Thai'),
    'TJS' => new C('TJS', 'Somoni Tajikistan', plurals: 'Somoni Tajikistan'),
    'TMT' => new C('TMT', 'Manat Turkmenistan', plurals: 'Manat Turkmenistan'),
    'TND' => new C('TND', 'Dinar Tunisia', plurals: 'Dinar Tunisia', minorUnits: 3),
    'TOP' => new C('TOP', 'Pa’anga Tonga', narrow: 'T$', plurals: 'Pa’anga Tonga'),
    'TRY' => new C('TRY', 'Lira Turki', narrow: '₺', plurals: 'Lira Turki'),
    'TTD' => new C('TTD', 'Dolar Trinidad dan Tobago', narrow: '$', plurals: 'Dolar Trinidad dan Tobago'),
    'TWD' => new C('TWD', 'Dolar Taiwan Baru', 'NT$', 'NT$', 'Dolar Taiwan Baru'),
    'TZS' => new C('TZS', 'Syiling Tanzania', plurals: 'Syiling Tanzania'),
    'UAH' => new C('UAH', 'Hryvnia Ukraine', narrow: '₴', plurals: 'Hryvnia Ukraine'),
    'UGS' => new C('UGS', 'Shilling Uganda (1966–1987)', plurals: 'Shilling Uganda (1966–1987)'),
    'UGX' => new C('UGX', 'Syiling Uganda', plurals: 'Syiling Uganda', minorUnits: 0),
    'USD' => new C('USD', 'Dolar AS', narrow: '$', plurals: 'Dolar AS'),
    'UYU' => new C('UYU', 'Peso Uruguay', narrow: '$', plurals: 'Peso Uruguay'),
    'UZS' => new C('UZS', 'Som Uzbekistan', plurals: 'Som Uzbekistan'),
    'VEF' => new C('VEF', 'Bolivar Venezuela (2008–2018)', narrow: 'Bs', plurals: 'Bolivar Venezuela (2008–2018)'),
    'VES' => new C('VES', 'Bolivar Venezuela', plurals: 'Bolivar Venezuela'),
    'VND' => new C('VND', 'Dong Vietnam', '₫', '₫', 'Dong Vietnam', 0),
    'VUV' => new C('VUV', 'Vatu Vanuatu', plurals: 'Vatu Vanuatu', minorUnits: 0),
    'WST' => new C('WST', 'Tala Samoa', plurals: 'Tala Samoa'),
    'XAF' => new C('XAF', 'Franc CFA BEAC', 'FCFA', plurals: 'Franc CFA BEAC', minorUnits: 0),
    'XCD' => new C('XCD', 'Dolar Caribbean Timur', 'EC$', '$', 'Dolar Caribbean Timur'),
    'XOF' => new C('XOF', 'Franc CFA BCEAO', "F\u{202F}CFA", plurals: 'Franc CFA BCEAO', minorUnits: 0),
    'XPF' => new C('XPF', 'Franc CFP', 'CFPF', plurals: 'Franc CFP', minorUnits: 0),
    'XXX' => new C('XXX', 'Mata Wang Tidak Diketahui', '¤', plurals: '(mata wang tidak diketahui)'),
    'YER' => new C('YER', 'Rial Yaman', plurals: 'Rial Yaman'),
    'ZAR' => new C('ZAR', 'Rand Afrika Selatan', narrow: 'R', plurals: 'Rand Afrika Selatan'),
    'ZMK' => new C('ZMK', 'Kwacha Zambia (1968–2012)', plurals: 'Kwacha Zambia (1968–2012)'),
    'ZMW' => new C('ZMW', 'Kwacha Zambia', narrow: 'ZK', plurals: 'Kwacha Zambia'),
    'ZWD' => new C('ZWD', 'Dolar Zimbabwe (1980–2008)', plurals: 'Dolar Zimbabwe (1980–2008)'),
    'ZWL' => new C('ZWL', 'Dolar Zimbabwe (2009)', plurals: 'Dolar Zimbabwe (2009)'),
    'ZWR' => new C('ZWR', 'Dolar Zimbabwe (2008)', plurals: 'Dolar Zimbabwe (2008)'),
];
