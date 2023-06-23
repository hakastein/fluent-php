<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ARS' => new C('ARS', 'peso argentin', narrow: '$', plurals: ['one' => 'peso argentin', 'other' => 'pesos argentins']),
    'AUD' => new C('AUD', 'dollar australien', "\$\u{A0}AU", narrow: '$', plurals: ['one' => 'dollar australien', 'other' => 'dollars australiens']),
    'AZN' => new C('AZN', 'manat azerbaïdjanais', narrow: '₼', plurals: ['one' => 'manat azerbaïdjanais', 'other' => 'manats azerbaïdjanais']),
    'BMD' => new C('BMD', 'dollar bermudien', narrow: '$', plurals: ['one' => 'dollar bermudien', 'other' => 'dollars bermudiens']),
    'BND' => new C('BND', 'dollar brunéien', narrow: '$', plurals: ['one' => 'dollar brunéien', 'other' => 'dollars brunéiens']),
    'BYN' => new C('BYN', 'rouble biélorusse', narrow: 'Br', plurals: ['one' => 'rouble biélorusse', 'other' => 'roubles biélorusses']),
    'BZD' => new C('BZD', 'dollar bélizéen', narrow: '$', plurals: ['one' => 'dollar bélizéen', 'other' => 'dollars bélizéens']),
    'CAD' => new C('CAD', 'dollar canadien', '$', narrow: '$', plurals: ['one' => 'dollar canadien', 'other' => 'dollars canadiens']),
    'CLP' => new C('CLP', 'peso chilien', narrow: '$', plurals: ['one' => 'peso chilien', 'other' => 'pesos chiliens'], minorUnits: 0),
    'CNY' => new C('CNY', 'yuan renminbi chinois', 'CN¥', narrow: '¥', plurals: ['one' => 'yuan renminbi chinois', 'other' => 'yuans renminbi chinois']),
    'COP' => new C('COP', 'peso colombien', narrow: '$', plurals: ['one' => 'peso colombien', 'other' => 'pesos colombiens']),
    'CVE' => new C('CVE', 'escudo cap-verdien', plurals: ['one' => 'escudo cap-verdien', 'other' => 'escudos cap-verdiens']),
    'FJD' => new C('FJD', 'dollar fidjien', narrow: '$', plurals: ['one' => 'dollar fidjien', 'other' => 'dollars fidjiens']),
    'FKP' => new C('FKP', 'livre des îles Malouines', narrow: '£', plurals: ['one' => 'livre des îles Malouines', 'other' => 'livres des îles Malouines']),
    'GBP' => new C('GBP', 'livre sterling', '£', narrow: '£', plurals: ['one' => 'livre sterling', 'other' => 'livres sterling']),
    'GEL' => new C('GEL', 'lari géorgien', plurals: ['one' => 'lari géorgien', 'other' => 'lari géorgiens']),
    'GIP' => new C('GIP', 'livre de Gibraltar', narrow: '£', plurals: ['one' => 'livre de Gibraltar', 'other' => 'livres de Gibraltar']),
    'GYD' => new C('GYD', 'dollar du Guyana', narrow: '$', plurals: ['one' => 'dollar guyanien', 'other' => 'dollars guyaniens']),
    'HKD' => new C('HKD', 'dollar de Hong Kong', "\$\u{A0}HK", narrow: '$', plurals: ['one' => 'dollar de Hong Kong', 'other' => 'dollars de Hong Kong']),
    'ILS' => new C('ILS', 'nouveau shekel israélien', narrow: '₪', plurals: ['one' => 'nouveau shekel israélien', 'other' => 'nouveaux shekels israéliens']),
    'INR' => new C('INR', 'roupie indienne', narrow: '₹', plurals: ['one' => 'roupie indienne', 'other' => 'roupies indiennes']),
    'IRR' => new C('IRR', 'rial iranien', plurals: ['one' => 'rial iranien', 'other' => 'rials iraniens']),
    'JPY' => new C('JPY', 'yen japonais', '¥', narrow: '¥', plurals: ['one' => 'yen japonais', 'other' => 'yens japonais'], minorUnits: 0),
    'KMF' => new C('KMF', 'franc comorien', narrow: 'CF', plurals: ['one' => 'franc comorien', 'other' => 'francs comoriens'], minorUnits: 0),
    'KRW' => new C('KRW', 'won sud-coréen', narrow: '₩', plurals: ['one' => 'won sud-coréen', 'other' => 'wons sud-coréens'], minorUnits: 0),
    'LBP' => new C('LBP', 'livre libanaise', narrow: '£L', plurals: ['one' => 'livre libanaise', 'other' => 'livres libanaises']),
    'MXN' => new C('MXN', 'peso mexicain', narrow: '$', plurals: ['one' => 'peso mexicain', 'other' => 'pesos mexicains']),
    'NAD' => new C('NAD', 'dollar namibien', narrow: '$', plurals: ['one' => 'dollar namibien', 'other' => 'dollars namibiens']),
    'NIO' => new C('NIO', 'córdoba oro nicaraguayen', narrow: 'C$', plurals: ['one' => 'córdoba oro nicaraguayen', 'other' => 'córdobas oro nicaraguayens']),
    'NZD' => new C('NZD', 'dollar néo-zélandais', "\$\u{A0}NZ", narrow: '$', plurals: ['one' => 'dollar néo-zélandais', 'other' => 'dollars néo-zélandais']),
    'OMR' => new C('OMR', 'rial omanais', plurals: ['one' => 'rial omanais', 'other' => 'rials omanis'], minorUnits: 3),
    'PEN' => new C('PEN', 'nouveau sol péruvien', plurals: ['one' => 'nouveau sol péruvien', 'other' => 'nouveaux sols péruviens']),
    'PGK' => new C('PGK', 'kina papou-néo-guinéen', plurals: ['one' => 'kina papou-néo-guinéen', 'other' => 'kinas papou-néo-guinéens']),
    'QAR' => new C('QAR', 'riyal du Qatar', plurals: ['one' => 'riyal du Qatar', 'other' => 'riyals du Qatar']),
    'SAR' => new C('SAR', 'rial saoudien', plurals: ['one' => 'rial saoudien', 'other' => 'rials saoudiens']),
    'SBD' => new C('SBD', 'dollar des îles Salomon', narrow: '$', plurals: ['one' => 'dollar des îles Salomon', 'other' => 'dollars des îles Salomon']),
    'SGD' => new C('SGD', 'dollar de Singapour', "\$\u{A0}SG", narrow: '$', plurals: ['one' => 'dollar de Singapour', 'other' => 'dollars de Singapour']),
    'SRD' => new C('SRD', 'dollar du Suriname', narrow: '$', plurals: ['one' => 'dollar du Suriname', 'other' => 'dollars du Suriname']),
    'TOP' => new C('TOP', 'pa’anga', narrow: '$T', plurals: ['one' => 'pa’anga', 'other' => 'pa’angas']),
    'TTD' => new C('TTD', 'dollar de Trinité-et-Tobago', narrow: '$', plurals: ['one' => 'dollar de Trinité-et-Tobago', 'other' => 'dollars de Trinité-et-Tobago']),
    'USD' => new C('USD', 'dollar des États-Unis', "\$\u{A0}US", narrow: '$', plurals: ['one' => 'dollar des États-Unis', 'other' => 'dollars des États-Unis']),
    'UYU' => new C('UYU', 'peso uruguayen', narrow: '$', plurals: ['one' => 'peso uruguayen', 'other' => 'pesos uruguayens']),
    'VND' => new C('VND', 'dông vietnamien', narrow: '₫', plurals: ['one' => 'dông vietnamien', 'other' => 'dôngs vietnamiens'], minorUnits: 0),
    'VUV' => new C('VUV', 'vatu', plurals: ['one' => 'vatu', 'other' => 'vatus'], minorUnits: 0),
    'WST' => new C('WST', 'tala', plurals: ['one' => 'tala', 'other' => 'talas']),
    'XAF' => new C('XAF', 'franc CFA (BEAC)', plurals: ['one' => 'franc CFA (BEAC)', 'other' => 'francs CFA (BEAC)'], minorUnits: 0),
    'XOF' => new C('XOF', 'franc CFA (BCEAO)', plurals: ['one' => 'franc CFA (BCEAO)', 'other' => 'francs CFA (BCEAO)'], minorUnits: 0),
    'XPF' => new C('XPF', 'franc CFP', plurals: ['one' => 'franc CFP', 'other' => 'francs CFP'], minorUnits: 0),
    'XXX' => new C('XXX', 'Devise inconnue', '¤', plurals: '(devise inconnue)'),
    'YER' => new C('YER', 'rial yéménite', plurals: ['one' => 'rial yéménite', 'other' => 'rials yéménites']),
    'ZMW' => new C('ZMW', 'kwacha zambien', narrow: 'ZK', plurals: ['one' => 'kwacha zambien', 'other' => 'kwachas zambiens']),
];
