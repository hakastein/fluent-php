<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'арабын нэгдсэн эмиратын дирхам', plurals: 'арабын нэгдсэн эмиратын дирхам'),
    'AFN' => new C('AFN', 'Афганистаны афгани', narrow: '؋', plurals: 'Афганистаны афгани'),
    'ALL' => new C('ALL', 'Албанийн лек', plurals: 'Албанийн лек'),
    'AMD' => new C('AMD', 'Арменийн драм', narrow: '֏', plurals: 'Арменийн драм'),
    'ANG' => new C('ANG', 'Нидерландын Антиллийн гулдер', plurals: 'Нидерландын Антиллийн гулдер'),
    'AOA' => new C('AOA', 'Анголын кванза', narrow: 'Kz', plurals: 'Анголын кванза'),
    'ARS' => new C('ARS', 'Аргентины песо', narrow: '$', plurals: 'Аргентины песо'),
    'AUD' => new C('AUD', 'Австралийн доллар', 'A$', narrow: '$', plurals: 'Австралийн доллар'),
    'AWG' => new C('AWG', 'Арубын флорин', plurals: 'Арубын флорин'),
    'AZN' => new C('AZN', 'Азербайжаны манат', narrow: '₼', plurals: 'Азербайжаны манат'),
    'BAM' => new C('BAM', 'Босни-Герцеговины хөрвөгч марк', narrow: 'KM', plurals: 'Босни-Герцеговины хөрвөгч марк'),
    'BBD' => new C('BBD', 'барбадос доллар', narrow: '$', plurals: 'барбадос доллар'),
    'BDT' => new C('BDT', 'Бангладешийн така', narrow: '৳', plurals: 'Бангладешийн така'),
    'BGN' => new C('BGN', 'Болгарын лев', plurals: 'Болгарын лев'),
    'BHD' => new C('BHD', 'Бахрейн динар', plurals: 'Бахрейн динар', minorUnits: 3),
    'BIF' => new C('BIF', 'Бурундийн франк', plurals: 'Бурундийн франк', minorUnits: 0),
    'BMD' => new C('BMD', 'Бермудын доллар', narrow: '$', plurals: 'Бермудын доллар'),
    'BND' => new C('BND', 'Брунейн доллар', narrow: '$', plurals: 'Брунейн доллар'),
    'BOB' => new C('BOB', 'Боливийн боливиано', narrow: 'Bs', plurals: 'Боливийн боливиано'),
    'BRL' => new C('BRL', 'Бразилийн реал', 'R$', narrow: 'R$', plurals: 'Бразилийн реал'),
    'BSD' => new C('BSD', 'Багамын доллар', narrow: '$', plurals: 'Багамын доллар'),
    'BTN' => new C('BTN', 'Бутаны нгултрум', plurals: 'Бутаны нгултрум'),
    'BWP' => new C('BWP', 'Ботсванийн пула', narrow: 'P', plurals: 'Ботсванийн пула'),
    'BYN' => new C('BYN', 'Беларусийн рубль', narrow: 'р.', plurals: 'Беларусийн рубль'),
    'BYR' => new C('BYR', 'беларусь рубль (2000–2016)', plurals: 'беларусь рубль (2000–2016)'),
    'BZD' => new C('BZD', 'Белизийн доллар', narrow: '$', plurals: 'Белизийн доллар'),
    'CAD' => new C('CAD', 'канад доллар', 'CA$', narrow: '$', plurals: 'канад доллар'),
    'CDF' => new C('CDF', 'Конгогийн франк', plurals: 'Конгогийн франк'),
    'CHF' => new C('CHF', 'Швейцарийн франк', plurals: 'Швейцарийн франк'),
    'CLP' => new C('CLP', 'Чилийн песо', narrow: '$', plurals: 'Чилийн песо', minorUnits: 0),
    'CNH' => new C('CNH', 'Хятадын юань (офшор)', plurals: 'Хятадын юань (офшор)'),
    'CNY' => new C('CNY', 'Хятадын юань', 'CN¥', narrow: '¥', plurals: 'Хятадын юань'),
    'COP' => new C('COP', 'Колумбын песо', narrow: '$', plurals: 'Колумбын песо'),
    'CRC' => new C('CRC', 'Коста-Рикагийн колон', narrow: '₡', plurals: 'Коста-Рикагийн колон'),
    'CUC' => new C('CUC', 'Кубын хөрвөгч песо', narrow: '$', plurals: 'Кубын хөрвөгч песо'),
    'CUP' => new C('CUP', 'Кубын песо', narrow: '$', plurals: 'Кубын песо'),
    'CVE' => new C('CVE', 'Кабо-Вердийн эскудо', plurals: 'Кабо-Вердийн эскудо'),
    'CZK' => new C('CZK', 'Чехийн крон', narrow: 'Kč', plurals: 'Чехийн крон'),
    'DJF' => new C('DJF', 'Жибутийн франк', plurals: 'Жибутийн франк', minorUnits: 0),
    'DKK' => new C('DKK', 'Данийн крон', narrow: 'kr', plurals: 'Данийн крон'),
    'DOP' => new C('DOP', 'Доминиканы песо', narrow: '$', plurals: 'Доминиканы песо'),
    'DZD' => new C('DZD', 'Алжирийн доллар', plurals: 'Алжирийн доллар'),
    'EGP' => new C('EGP', 'Египетийн фунт', narrow: 'E£', plurals: 'Египетийн фунт'),
    'ERN' => new C('ERN', 'Эритрейн накфа', plurals: 'Эритрейн накфа'),
    'ETB' => new C('ETB', 'Этиопын бирр', plurals: 'Этиопын бирр'),
    'EUR' => new C('EUR', 'евро', '€', narrow: '€', plurals: 'евро'),
    'FJD' => new C('FJD', 'Фижигийн доллар', narrow: '$', plurals: 'Фижигийн доллар'),
    'FKP' => new C('FKP', 'Фолклендийн арлуудын паунд', narrow: '£', plurals: 'Фолклендийн арлуудын паунд'),
    'GBP' => new C('GBP', 'Британийн фунт', '£', narrow: '£', plurals: 'Британийн фунт'),
    'GEL' => new C('GEL', 'Гүржийн лари', narrow: '₾', plurals: 'Гүржийн лари'),
    'GHS' => new C('GHS', 'Ганагийн седи', narrow: 'GH₵', plurals: 'Ганагийн седи'),
    'GIP' => new C('GIP', 'Гибралтарын фунт', narrow: '£', plurals: 'Гибралтарын фунт'),
    'GMD' => new C('GMD', 'Гамбийн даласи', plurals: 'Гамбийн даласи'),
    'GNF' => new C('GNF', 'Гвинейн франк', narrow: 'FG', plurals: 'Гвинейн франк', minorUnits: 0),
    'GTQ' => new C('GTQ', 'Гватемалын кецал', narrow: 'Q', plurals: 'Гватемалын кецал'),
    'GYD' => new C('GYD', 'Гайанын доллар', narrow: '$', plurals: 'Гайанын доллар'),
    'HKD' => new C('HKD', 'Хонг Конгийн доллар', 'HK$', narrow: '$', plurals: 'Хонг Конгийн доллар'),
    'HNL' => new C('HNL', 'Гондурасын лемпира', narrow: 'L', plurals: 'Гондурасын лемпира'),
    'HRK' => new C('HRK', 'Хорватын куна', narrow: 'kn', plurals: 'Хорватын куна'),
    'HTG' => new C('HTG', 'Гаитийн гурд', plurals: 'Гаитийн гурд'),
    'HUF' => new C('HUF', 'Унгарын форинт', narrow: 'Ft', plurals: 'Унгарын форинт'),
    'IDR' => new C('IDR', 'Индонезийн рупи', narrow: 'Rp', plurals: 'Индонезийн рупи'),
    'ILS' => new C('ILS', 'Израилийн шинэ шекел', '₪', narrow: '₪', plurals: 'Израилийн шинэ шекел'),
    'INR' => new C('INR', 'Энэтхэгийн рупи', '₹', narrow: '₹', plurals: 'Энэтхэгийн рупи'),
    'IQD' => new C('IQD', 'Иракийн динар', plurals: 'Иракийн динар', minorUnits: 3),
    'IRR' => new C('IRR', 'Ираны риял', plurals: 'Ираны риял'),
    'ISK' => new C('ISK', 'Исландын крон', narrow: 'kr', plurals: 'Исландын крон', minorUnits: 0),
    'JMD' => new C('JMD', 'Ямайкийн доллар', narrow: '$', plurals: 'Ямайкийн доллар'),
    'JOD' => new C('JOD', 'Йорданы динар', plurals: 'Йорданы динар', minorUnits: 3),
    'JPY' => new C('JPY', 'Японы иен', 'JP¥', narrow: '¥', plurals: 'Японы иен', minorUnits: 0),
    'KES' => new C('KES', 'Кенийн шиллинг', plurals: 'Кенийн шиллинг'),
    'KGS' => new C('KGS', 'Кыргызын сом', plurals: 'Кыргызын сом'),
    'KHR' => new C('KHR', 'Камбожийн риел', narrow: '៛', plurals: 'Камбожийн риел'),
    'KMF' => new C('KMF', 'Коморын франк', narrow: 'CF', plurals: 'Коморын франк', minorUnits: 0),
    'KPW' => new C('KPW', 'Хойд Солонгосын вон', narrow: '₩', plurals: 'Хойд Солонгосын вон'),
    'KRW' => new C('KRW', 'Өмнөд Солонгосын вон', '₩', narrow: '₩', plurals: 'Өмнөд Солонгосын вон', minorUnits: 0),
    'KWD' => new C('KWD', 'Кувейтийн динар', plurals: 'Кувейтийн динар', minorUnits: 3),
    'KYD' => new C('KYD', 'Кайманы арлуудын доллар', narrow: '$', plurals: 'Кайманы арлуудын доллар'),
    'KZT' => new C('KZT', 'Казахстаны тэнгэ', narrow: '₸', plurals: 'Казахстаны тэнгэ'),
    'LAK' => new C('LAK', 'Лаосын кип', narrow: '₭', plurals: 'Лаосын кип'),
    'LBP' => new C('LBP', 'Ливаны фунт', narrow: 'L£', plurals: 'Ливаны фунт'),
    'LKR' => new C('LKR', 'Шри-Ланкийн рупи', narrow: 'Rs', plurals: 'Шри-Ланкийн рупи'),
    'LRD' => new C('LRD', 'Либерийн доллар', narrow: '$', plurals: 'Либерийн доллар'),
    'LSL' => new C('LSL', 'Лесото лоти', plurals: 'Лесото лоти'),
    'LTL' => new C('LTL', 'литвийн литас', narrow: 'Lt', plurals: 'литвийн литас'),
    'LVL' => new C('LVL', 'латвийн лац', narrow: 'Ls', plurals: 'латвийн лац'),
    'LYD' => new C('LYD', 'Ливийн доллар', plurals: 'Ливийн доллар', minorUnits: 3),
    'MAD' => new C('MAD', 'Мороккогийн дирхэм', plurals: 'Мороккогийн дирхэм'),
    'MDL' => new C('MDL', 'Молдовын лей', plurals: 'Молдовын лей'),
    'MGA' => new C('MGA', 'Малагасийн ариари', narrow: 'Ar', plurals: 'Малагасийн ариари'),
    'MKD' => new C('MKD', 'Македонийн динар', plurals: 'Македонийн динар'),
    'MMK' => new C('MMK', 'Мьянмарын киат', narrow: 'K', plurals: 'Мьянмарын киат'),
    'MNT' => new C('MNT', 'Монгол төгрөг', '₮', narrow: '₮', plurals: 'Монгол төгрөг'),
    'MOP' => new C('MOP', 'Макаогийн патака', plurals: 'Макаогийн патака'),
    'MRO' => new C('MRO', 'мавритан угия (1973–2017)', plurals: 'мавритан угия (1973–2017)'),
    'MRU' => new C('MRU', 'Мавританийн угия', plurals: 'Мавританийн угия'),
    'MUR' => new C('MUR', 'Маврикийн рупи', narrow: 'Rs', plurals: 'Маврикийн рупи'),
    'MVR' => new C('MVR', 'Мальдивийн руфия', plurals: 'Мальдивийн руфия'),
    'MWK' => new C('MWK', 'Малавийн квача', plurals: 'Малавийн квача'),
    'MXN' => new C('MXN', 'Мексикийн песо', 'MX$', narrow: '$', plurals: 'Мексикийн песо'),
    'MYR' => new C('MYR', 'Малайзын рингит', narrow: 'RM', plurals: 'Малайзын рингит'),
    'MZN' => new C('MZN', 'Мозамбикийн метикал', plurals: 'Мозамбикийн метикал'),
    'NAD' => new C('NAD', 'Намибийн доллар', narrow: '$', plurals: 'Намибийн доллар'),
    'NGN' => new C('NGN', 'Нигерийн найра', narrow: '₦', plurals: 'Нигерийн найра'),
    'NIO' => new C('NIO', 'Никарагуагийн кордоба', narrow: 'C$', plurals: 'Никарагуагийн кордоба'),
    'NOK' => new C('NOK', 'Норвегийн крон', narrow: 'kr', plurals: 'Норвегийн крон'),
    'NPR' => new C('NPR', 'Балбын рупи', narrow: 'Rs', plurals: 'Балбын рупи'),
    'NZD' => new C('NZD', 'Шинэ Зеландын доллар', 'NZ$', narrow: '$', plurals: 'Шинэ Зеландын доллар'),
    'OMR' => new C('OMR', 'Оманийн риал', plurals: 'Оманийн риал', minorUnits: 3),
    'PAB' => new C('PAB', 'Панамын бальбоа', plurals: 'Панамын бальбоа'),
    'PEN' => new C('PEN', 'Перугийн соль', plurals: 'Перугийн соль'),
    'PGK' => new C('PGK', 'Папуа-Шинэ Гвинейн кина', plurals: 'Папуа-Шинэ Гвинейн кина'),
    'PHP' => new C('PHP', 'Филиппиний песо', narrow: '₱', plurals: 'Филиппиний песо'),
    'PKR' => new C('PKR', 'Пакистаны рупи', narrow: 'Rs', plurals: 'Пакистаны рупи'),
    'PLN' => new C('PLN', 'Польшийн злот', narrow: 'zł', plurals: 'Польшийн злот'),
    'PYG' => new C('PYG', 'Парагвайн гуарани', narrow: '₲', plurals: 'Парагвайн гуарани', minorUnits: 0),
    'QAR' => new C('QAR', 'Катарын риал', plurals: 'Катарын риал'),
    'RON' => new C('RON', 'Румыны лей', narrow: 'lei', plurals: 'Румыны лей'),
    'RSD' => new C('RSD', 'Сербийн динар', plurals: 'Сербийн динар'),
    'RUB' => new C('RUB', 'Оросын рубль', narrow: '₽', plurals: 'Оросын рубль'),
    'RWF' => new C('RWF', 'Руандагийн франк', narrow: 'RF', plurals: 'Руандагийн франк', minorUnits: 0),
    'SAR' => new C('SAR', 'Саудын риял', plurals: 'Саудын риял'),
    'SBD' => new C('SBD', 'Соломоны арлуудын доллар', narrow: '$', plurals: 'Соломоны арлуудын доллар'),
    'SCR' => new C('SCR', 'Сейшелийн рупи', plurals: 'Сейшелийн рупи'),
    'SDG' => new C('SDG', 'Суданы фунт', plurals: 'Суданы фунт'),
    'SEK' => new C('SEK', 'Шведийн крон', narrow: 'кр', plurals: 'Шведийн крон'),
    'SGD' => new C('SGD', 'Сингапурын доллар', narrow: '$', plurals: 'Сингапурын доллар'),
    'SHP' => new C('SHP', 'Сент Хеленагийн фунт', narrow: '£', plurals: 'Сент Хеленагийн фунт'),
    'SLL' => new C('SLL', 'Сьерра-Леоны леон', plurals: 'Сьерра-Леоны леон'),
    'SOS' => new C('SOS', 'Сомалийн шиллинг', plurals: 'Сомалийн шиллинг'),
    'SRD' => new C('SRD', 'Суринамын доллар', narrow: '$', plurals: 'Суринамын доллар'),
    'SSP' => new C('SSP', 'Өмнөд Суданы фунт', narrow: '£', plurals: 'Өмнөд Суданы фунт'),
    'STD' => new C('STD', 'сан-томе ба принсипи добра (1977–2017)', plurals: 'Сан-Томе Принсипигийн мөнгөн тэмдэгт добра (1977–2017)'),
    'STN' => new C('STN', 'Сан-Томе ба Принсипигийн добра', narrow: 'Db', plurals: 'Сан-Томе ба Принсипигийн добра'),
    'SYP' => new C('SYP', 'Сирийн фунт', narrow: '£', plurals: 'Сирийн фунт'),
    'SZL' => new C('SZL', 'Свазиландын лилангени', plurals: 'Свазиландын лилангени'),
    'THB' => new C('THB', 'Тайландын бат', '฿', narrow: '฿', plurals: 'Тайландын бат'),
    'TJS' => new C('TJS', 'Тажикийн сомон', plurals: 'Тажикийн сомон'),
    'TMT' => new C('TMT', 'Туркмены манат', plurals: 'Туркмены манат'),
    'TND' => new C('TND', 'Тунисын доллар', plurals: 'Тунисын доллар', minorUnits: 3),
    'TOP' => new C('TOP', 'Тонгагийн панга', narrow: 'T$', plurals: 'Тонгагийн панга'),
    'TRY' => new C('TRY', 'Туркийн лира', narrow: '₺', plurals: 'Туркийн лира'),
    'TTD' => new C('TTD', 'Тринидад ба Тобагогийн доллар', narrow: '$', plurals: 'Тринидад ба Тобагогийн доллар'),
    'TWD' => new C('TWD', 'Шинэ Тайванийн доллар', 'NT$', narrow: 'NT$', plurals: 'Шинэ Тайванийн доллар'),
    'TZS' => new C('TZS', 'Танзанийн шиллинг', plurals: 'Танзанийн шиллинг'),
    'UAH' => new C('UAH', 'Украины гривна', narrow: '₴', plurals: 'Украины гривна'),
    'UGX' => new C('UGX', 'Угандагийн шиллинг', plurals: 'Угандагийн шиллинг', minorUnits: 0),
    'USD' => new C('USD', 'америк доллар', '$', narrow: '$', plurals: 'америк доллар'),
    'UYU' => new C('UYU', 'Уругвайн песо', narrow: '$', plurals: 'Уругвайн песо'),
    'UZS' => new C('UZS', 'Узбекийн сом', plurals: 'Узбекийн сом'),
    'VEF' => new C('VEF', 'венесуэлийн боливар (2008–2018)', narrow: 'Bs', plurals: 'венесуэлийн боливар (2008–2018)'),
    'VES' => new C('VES', 'Венесуэлийн боливар', plurals: 'Венесуэлийн боливар'),
    'VND' => new C('VND', 'Вьетнамын донг', '₫', narrow: '₫', plurals: 'Вьетнамын донг', minorUnits: 0),
    'VUV' => new C('VUV', 'Вануатугийн вату', plurals: 'Вануатугийн вату', minorUnits: 0),
    'WST' => new C('WST', 'Самоагийн тала', plurals: 'Самоагийн тала'),
    'XAF' => new C('XAF', 'Төв Африкийн франк', 'FCFA', plurals: 'Төв Африкийн франк', minorUnits: 0),
    'XCD' => new C('XCD', 'Зүүн Карибийн доллар', 'EC$', narrow: '$', plurals: 'Зүүн Карибийн доллар'),
    'XOF' => new C('XOF', 'Баруун Африкийн франк', "F\u{202F}CFA", plurals: 'Баруун Африкийн франк', minorUnits: 0),
    'XPF' => new C('XPF', 'Францын колонийн франк', 'CFPF', plurals: 'Францын колонийн франк', minorUnits: 0),
    'XXX' => new C('XXX', 'тодорхойгүй мөнгөн тэмдэгт', '¤', plurals: ['one' => '(тодорхойгүй мөнгөн тэмдэгтийн нэгж)', 'other' => '(тодорхойгүй мөнгөн тэмдэгт)']),
    'YER' => new C('YER', 'Йемений риял', plurals: 'Йемений риял'),
    'ZAR' => new C('ZAR', 'Өмнөд Африкийн ранд', narrow: 'R', plurals: 'Өмнөд Африкийн ранд'),
    'ZMK' => new C('ZMK', 'Замби квача (1968–2012)', plurals: 'Замби квача (1968–2012)'),
    'ZMW' => new C('ZMW', 'Замбийн квача', narrow: 'ZK', plurals: 'Замбийн квача'),
];
