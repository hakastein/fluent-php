<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'متحده عرب امارات درهم', plurals: ['one' => 'UAE درهم', 'other' => 'UAE درهمې']),
    'AFA' => new C('AFA', 'افغانۍ (1927–2002)', plurals: ['one' => 'افغانۍ (1927–2002)', 'other' => 'افغانۍ (1927–2002)']),
    'AFN' => new C('AFN', 'افغانۍ', '؋', narrow: '؋', plurals: ['one' => 'افغانۍ', 'other' => 'افغانۍ']),
    'ALL' => new C('ALL', 'البانوي لک', plurals: ['one' => 'البانوي لک', 'other' => 'البانوي لکي']),
    'AMD' => new C('AMD', 'ارمينيايي ډرام', narrow: '֏', plurals: ['one' => 'ارمينيايي ډرام', 'other' => 'ارمينيايي ډرامز']),
    'ANG' => new C('ANG', 'هالېنډي انټيليايي ګيلډر', plurals: ['one' => 'هالېنډې انټيليايي ګيلډر', 'other' => 'هالېنډي انټيليايي ګيلډر']),
    'AOA' => new C('AOA', 'انګولي کوانزا', narrow: 'Kz', plurals: ['one' => 'انګولي کوانزا', 'other' => 'انګولي کوانزې']),
    'ARS' => new C('ARS', 'ارجنټاين پسو', narrow: '$', plurals: ['one' => 'ارجنټاين پسو', 'other' => 'ارجنټاين پسوز']),
    'AUD' => new C('AUD', 'آسترالوي ډالر', 'A$', narrow: '$', plurals: ['one' => 'آسترالوي ډالر', 'other' => 'آسترالوي ډالرې']),
    'AWG' => new C('AWG', 'اروبايي فلورن', plurals: ['one' => 'اروبايي فلورن', 'other' => 'اروبايي فلورن']),
    'AZN' => new C('AZN', 'آزربايجاني منت', narrow: '₼', plurals: ['one' => 'آزربايجاني منت', 'other' => 'آزربايجاني منتس']),
    'BAM' => new C('BAM', 'بوسنيا هرزګوينيايي بدلېدونکې مارک', narrow: 'KM', plurals: ['one' => 'بوسنيا هرزګوينيايي بدلېدونکي مارک', 'other' => 'بوسنيا هرزګوينيايي بدلېدونکي مارکس']),
    'BBD' => new C('BBD', 'باربيډين ډالر', narrow: '$', plurals: ['one' => 'باربيډين ډالر', 'other' => 'باربيډين ډالرې']),
    'BDT' => new C('BDT', 'بنګالۍ ټاکه', narrow: '৳', plurals: ['one' => 'بنګالۍ ټاکه', 'other' => 'بنګالۍ ټاکاس']),
    'BGN' => new C('BGN', 'بلغاري ليو', plurals: ['one' => 'بلغاري ليو', 'other' => 'بلغاري ليوا']),
    'BHD' => new C('BHD', 'بحريني دينار', plurals: ['one' => 'بحريني دينار', 'other' => 'بحريني دينارونه'], minorUnits: 3),
    'BIF' => new C('BIF', 'برونډي فرانک', plurals: ['one' => 'برونډي فرانک', 'other' => 'برونډي فرانکس'], minorUnits: 0),
    'BMD' => new C('BMD', 'برمودا ډالر', narrow: '$', plurals: ['one' => 'برمودي ډالر', 'other' => 'برمودي ډالرې']),
    'BND' => new C('BND', 'برونايي ډالر', narrow: '$', plurals: ['one' => 'برونايي ډالر', 'other' => 'برونايي ډالرې']),
    'BOB' => new C('BOB', 'بوليوي بوليويانو', narrow: 'Bs', plurals: ['one' => 'بوليوي بوليويانو', 'other' => 'بوليوي بوليويانو']),
    'BRL' => new C('BRL', 'برازيلي ريل', 'R$', narrow: 'R$', plurals: ['one' => 'برازيلي ريل', 'other' => 'برازيلي ريلز']),
    'BSD' => new C('BSD', 'بهاماسي ډالر', narrow: '$', plurals: ['one' => 'بهاماسي ډالر', 'other' => 'بهاماسي ډالرې']),
    'BTN' => new C('BTN', 'بهوټانۍ انګولټرم', plurals: ['one' => 'بهوټانۍ انګولټرم', 'other' => 'بهوټانۍ انګولټرمس']),
    'BWP' => new C('BWP', 'بوټسواني پولا', narrow: 'P', plurals: ['one' => 'بوټسواني پولا', 'other' => 'بوټسواني پولاز']),
    'BYN' => new C('BYN', 'بلاروسي روبل', narrow: 'р.', plurals: ['one' => 'بلاروسي روبل', 'other' => 'بلاروسي روبلز']),
    'BZD' => new C('BZD', 'بليز ډالر', narrow: '$', plurals: ['one' => 'بليز ډالر', 'other' => 'بليز ډالرې']),
    'CAD' => new C('CAD', 'کاناډايي ډالر', 'CA$', narrow: '$', plurals: ['one' => 'کاناډايي ډالر', 'other' => 'کاناډايي ډالرې']),
    'CDF' => new C('CDF', 'کانګولي فرانک', plurals: ['one' => 'کانګولي فرانک', 'other' => 'کانګولي فرانکس']),
    'CHF' => new C('CHF', 'سويسي فرانک', plurals: ['one' => 'سويسي فرانک', 'other' => 'سويسي فرانکس']),
    'CLP' => new C('CLP', 'چلي پسو', narrow: '$', plurals: ['one' => 'چلي پسو', 'other' => 'چلي پسوز'], minorUnits: 0),
    'CNH' => new C('CNH', 'چيني يوان (آف شور)', plurals: ['one' => 'چيني يوان (آف شور)', 'other' => 'چيني يوان (آف شور)']),
    'CNY' => new C('CNY', 'چيني يوان', 'CN¥', narrow: '¥', plurals: ['one' => 'چيني يوان', 'other' => 'چيني يوان']),
    'COP' => new C('COP', 'کولمبين پسو', narrow: '$', plurals: ['one' => 'کولمبين پسو', 'other' => 'کولمبين پسوز']),
    'CRC' => new C('CRC', 'کوسټا ريکن کولون', narrow: '₡', plurals: ['one' => 'کوسټا ريکن کولون', 'other' => 'کوسټا ريکن کولونز']),
    'CUC' => new C('CUC', 'کيوبايي بدلېدونکي پسو', narrow: '$', plurals: ['one' => 'کيوبايي بدلېدونکې پسو', 'other' => 'کيوبايي بدلېدونکې پسوز']),
    'CUP' => new C('CUP', 'کيوبايي پسو', narrow: '$', plurals: ['one' => 'کيوبايي پسو', 'other' => 'کيوبايي پسوز']),
    'CVE' => new C('CVE', 'کيپ وردين اسکوډو', plurals: ['one' => 'کيپ وردين اسکوډو', 'other' => 'کيپ وردين اسکوډوز']),
    'CZK' => new C('CZK', 'چيک کرونا', narrow: 'Kč', plurals: ['one' => 'چيک کرونا', 'other' => 'چيک کروناز']),
    'DJF' => new C('DJF', 'جبوتي فرانک', plurals: ['one' => 'جبوتي فرانک', 'other' => 'جبوتي فرانکس'], minorUnits: 0),
    'DKK' => new C('DKK', 'ډنمارکي کرون', narrow: 'kr', plurals: ['one' => 'ډنمارکي کرون', 'other' => 'ډنمارکي کرونر']),
    'DOP' => new C('DOP', 'دومينيکا پسو', narrow: '$', plurals: ['one' => 'دومينيکا پسو', 'other' => 'دومينيکا پسوز']),
    'DZD' => new C('DZD', 'الجيرين دينار', plurals: ['one' => 'الجيرين دينار', 'other' => 'الجيرين دينارې']),
    'EGP' => new C('EGP', 'مصري پونډ', narrow: 'E£', plurals: ['one' => 'مصري پونډ', 'other' => 'مصري پونډونه']),
    'ERN' => new C('ERN', 'ايريټرين نکفا', plurals: ['one' => 'ايريټرين نکفا', 'other' => 'ايريټرين نکفاس']),
    'ETB' => new C('ETB', 'ايتهوپيايي بر', plurals: ['one' => 'ايتهوپيايي بر', 'other' => 'ايتهوپيايي برز']),
    'EUR' => new C('EUR', 'يورو', '€', narrow: '€', plurals: ['one' => 'يورو', 'other' => 'يوروز']),
    'FJD' => new C('FJD', 'فجي ډالر', narrow: '$', plurals: ['one' => 'فجي ډالر', 'other' => 'فجي ډالرې']),
    'FKP' => new C('FKP', 'پاکلېنډ ټاپوګانو پونډ', narrow: '£', plurals: ['one' => 'پاکلېنډ ټاپوګانو پونډ', 'other' => 'پاکلېنډ ټاپوګانو پونډز']),
    'GBP' => new C('GBP', 'برتانوې پونډ', '£', narrow: '£', plurals: ['one' => 'برتانوې پونډ', 'other' => 'برتانوې پونډونه']),
    'GEL' => new C('GEL', 'جارجیاېي لارې', narrow: '₾', plurals: ['one' => 'جارجیا لاري', 'other' => 'جارجیاېي لارېز']),
    'GHS' => new C('GHS', 'ګانين سيډي', narrow: 'GH₵', plurals: ['one' => 'ګانين سيډي', 'other' => 'ګانين سيډيز']),
    'GIP' => new C('GIP', 'جبل الطارقي پونډ', narrow: '£', plurals: ['one' => 'جبل الطارقي پونډ', 'other' => 'جبل الطارقي پونډونه']),
    'GMD' => new C('GMD', 'ګيمبين دلاسې', plurals: ['one' => 'ګيمبين دلاسې', 'other' => 'ګيمبين دلاسېز']),
    'GNF' => new C('GNF', 'ګنې فرانک', narrow: 'FG', plurals: ['one' => 'ګنې فرانک', 'other' => 'ګنې فرانکس'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'ګويټيمالن کوټزل', narrow: 'Q', plurals: ['one' => 'ګويټيمالن کوټزل', 'other' => 'ګويټيمالن کوټزلز']),
    'GYD' => new C('GYD', 'ګايانيز ډالر', narrow: '$', plurals: ['one' => 'ګايانيز ډالر', 'other' => 'ګايانيز ډالرز']),
    'HKD' => new C('HKD', 'هانګ کانګ ډالر', 'HK$', narrow: '$', plurals: ['one' => 'هانګ کانګ ډالر', 'other' => 'هانګ کانګ ډالرې']),
    'HNL' => new C('HNL', 'هونډوران ليمپيرا', narrow: 'L', plurals: ['one' => 'هونډوران ليمپيرا', 'other' => 'هونډوران ليمپيراز']),
    'HRK' => new C('HRK', 'کروشيايي کونا', narrow: 'kn', plurals: ['one' => 'کروشيايي کونا', 'other' => 'کروشيايي کوناز']),
    'HTG' => new C('HTG', 'هيټي ګورډ', plurals: ['one' => 'هيټي ګورډ', 'other' => 'هيټي ګورډز']),
    'HUF' => new C('HUF', 'هنګري فورنټ', narrow: 'Ft', plurals: ['one' => 'هنګري فورنټ', 'other' => 'هنګري فورنټز']),
    'IDR' => new C('IDR', 'انډونيشي روپيا', narrow: 'Rp', plurals: ['one' => 'انډونيشي روپيا', 'other' => 'انډونيشي روپۍ']),
    'ILS' => new C('ILS', 'اسرايلي نيو شيکل', '₪', narrow: '₪', plurals: ['one' => 'اسرايلي نيو شيکل', 'other' => 'اسرايلي نيو شيکلز']),
    'INR' => new C('INR', 'هندي روپۍ', '₹', narrow: '₹', plurals: ['one' => 'هندي روپۍ', 'other' => 'هندي روپۍ']),
    'IQD' => new C('IQD', 'عراقي دينار', plurals: ['one' => 'عراقي دينار', 'other' => 'عراقي دينارونه'], minorUnits: 3),
    'IRR' => new C('IRR', 'ايراني ريال', plurals: ['one' => 'ايراني ريال', 'other' => 'ايراني ريالونه']),
    'ISK' => new C('ISK', 'آيسلېنډي کرونا', narrow: 'kr', plurals: ['one' => 'آيسلېنډي کرونا', 'other' => 'آيسلېنډي کرونر'], minorUnits: 0),
    'JMD' => new C('JMD', 'جمايکايي ډالر', narrow: '$', plurals: ['one' => 'جمايکايي ډالر', 'other' => 'جمايکايي ډالرې']),
    'JOD' => new C('JOD', 'اردني دينار', plurals: ['one' => 'اردني دينار', 'other' => 'اردني دينارونه'], minorUnits: 3),
    'JPY' => new C('JPY', 'جاپاني ين', 'JP¥', narrow: '¥', plurals: ['one' => 'جاپاني ين', 'other' => 'جاپاني ين'], minorUnits: 0),
    'KES' => new C('KES', 'کينيايي شيلنګ', plurals: ['one' => 'کينيايي شيلنګ', 'other' => 'کينيايي شيلنګز']),
    'KGS' => new C('KGS', 'کرغزستاني سوم', plurals: ['one' => 'کرغزستاني سوم', 'other' => 'کرغزستاني سومز']),
    'KHR' => new C('KHR', 'کمبوډي ريل', narrow: '៛', plurals: ['one' => 'کمبوډي ريل', 'other' => 'کمبوډي ريلس']),
    'KMF' => new C('KMF', 'کوموري فرانک', narrow: 'CF', plurals: ['one' => 'کوموري فرانک', 'other' => 'کوموري فرانکس'], minorUnits: 0),
    'KPW' => new C('KPW', 'شمالي کوريايي وان', narrow: '₩', plurals: ['one' => 'شمالي کوريايي وان', 'other' => 'شمالي کوريايي وان']),
    'KRW' => new C('KRW', 'جنوبي کوريايي وان', '₩', narrow: '₩', plurals: ['one' => 'جنوبي کوريايي وان', 'other' => 'جنوبي کوريايي وان'], minorUnits: 0),
    'KWD' => new C('KWD', 'کويتي دينار', plurals: ['one' => 'کويتي دينار', 'other' => 'کويتي دينارونه'], minorUnits: 3),
    'KYD' => new C('KYD', 'کيمن ټاپوګانو ډالر', narrow: '$', plurals: ['one' => 'کيمن ټاپوګانو ډالر', 'other' => 'کيمن ټاپوګانو ډالرې']),
    'KZT' => new C('KZT', 'قازقستاني ټينج', narrow: '₸', plurals: ['one' => 'قازقستاني ټينج', 'other' => 'قازقستاني ټينجز']),
    'LAK' => new C('LAK', 'لاشې کپ', narrow: '₭', plurals: ['one' => 'لاشې کپ', 'other' => 'لاشې کپس']),
    'LBP' => new C('LBP', 'لبناني پونډ', narrow: 'L£', plurals: ['one' => 'لبناني پونډ', 'other' => 'لبناني پونډونه']),
    'LKR' => new C('LKR', 'سري لنکن روپۍ', narrow: 'Rs', plurals: ['one' => 'سري لنکن روپۍ', 'other' => 'سري لنکن روپۍ']),
    'LRD' => new C('LRD', 'لايبيرين ډالر', narrow: '$', plurals: ['one' => 'لايبيرين ډالر', 'other' => 'لايبيرين ډالرې']),
    'LSL' => new C('LSL', 'Lesotho Loti', plurals: ['one' => 'Lesotho loti', 'other' => 'Lesotho lotis']),
    'LYD' => new C('LYD', 'ليبياېي دينار', plurals: ['one' => 'ليبياېي دينار', 'other' => 'ليبياېي دينارونه'], minorUnits: 3),
    'MAD' => new C('MAD', 'مراکشي درهم', plurals: ['one' => 'مراکشي درهم', 'other' => 'مراکشي درهمونه']),
    'MDL' => new C('MDL', 'مالډوي ليو', plurals: ['one' => 'مالډوي ليو', 'other' => 'مالډوي لي']),
    'MGA' => new C('MGA', 'ملاګاسي ارياري', narrow: 'Ar', plurals: ['one' => 'ملاګاسي ارياري', 'other' => 'ملاګاسي ارياريز']),
    'MKD' => new C('MKD', 'مسيډونايي دينار', plurals: ['one' => 'مسيډونايي دينار', 'other' => 'مسيډونايي دينارې']),
    'MMK' => new C('MMK', 'ميانماري کيات', narrow: 'K', plurals: ['one' => 'ميانماري کيات', 'other' => 'ميانماري کياتې']),
    'MNT' => new C('MNT', 'منګوليايي توګريک', narrow: '₮', plurals: ['one' => 'منګوليايي توګريک', 'other' => 'منګوليايي توګريکس']),
    'MOP' => new C('MOP', 'مکانيس پټاکا', plurals: ['one' => 'مکانيس پټاکا', 'other' => 'مکانيز پټاکاز']),
    'MRU' => new C('MRU', 'موريشيسي ډالر', plurals: ['one' => 'موريشيسي ډالر', 'other' => 'موريشيسي ډالرې']),
    'MUR' => new C('MUR', 'موريشيسي روپۍ', narrow: 'Rs', plurals: ['one' => 'موريشيسي روپۍ', 'other' => 'موريشيسي روپۍ']),
    'MVR' => new C('MVR', 'مالديپي روپيا', plurals: ['one' => 'مالديپي روپيا', 'other' => 'مالديپي روپيا']),
    'MWK' => new C('MWK', 'ملاوي کواچا', plurals: ['one' => 'ملاوي کواچا', 'other' => 'ملاوي کواچاز']),
    'MXN' => new C('MXN', 'ميکسيکن پيسو', 'MX$', narrow: '$', plurals: ['one' => 'ميکسيکن پيسو', 'other' => 'ميکسيکن پيسوز']),
    'MYR' => new C('MYR', 'ملايشي رنګټ', narrow: 'RM', plurals: ['one' => 'ملايشي رنګټ', 'other' => 'ملايشي رنګټې']),
    'MZN' => new C('MZN', 'موزمبيقي ميټيکل', plurals: ['one' => 'موزمبيقي ميټيکل', 'other' => 'موزمبيقي ميټيکلز']),
    'NAD' => new C('NAD', 'نيميبيايي ډالر', narrow: '$', plurals: ['one' => 'بيميبيايي ډالر', 'other' => 'نيميبيايي ډالرې']),
    'NGN' => new C('NGN', 'نايجيري نايرا', narrow: '₦', plurals: ['one' => 'نايجيري نايرا', 'other' => 'نايجيري نايراز']),
    'NIO' => new C('NIO', 'نيکاراګون کورډوبا', narrow: 'C$', plurals: ['one' => 'نيکاراګون کورډوبا', 'other' => 'نيکاراګون کورډوباز']),
    'NOK' => new C('NOK', 'نارويجين کرون', narrow: 'kr', plurals: ['one' => 'نارويجين کرون', 'other' => 'نارويجين کرونر']),
    'NPR' => new C('NPR', 'نيپالي روپۍ', narrow: 'Rs', plurals: ['one' => 'نيپالي روپۍ', 'other' => 'نيپالي روپۍ']),
    'NZD' => new C('NZD', 'نيوزي لينډي ډالر', 'NZ$', narrow: '$', plurals: ['one' => 'نيوزي لينډي ډالر', 'other' => 'نيوزي لينډي ډالرې']),
    'OMR' => new C('OMR', 'عماني ريال', plurals: ['one' => 'عماني ريال', 'other' => 'عماني ريالونه'], minorUnits: 3),
    'PAB' => new C('PAB', 'پانامۍ بالبوا', plurals: ['one' => 'پانامۍ بالبوا', 'other' => 'پانامۍ بالبوې']),
    'PEN' => new C('PEN', 'پيروين سول', plurals: ['one' => 'پيروين سول', 'other' => 'پيروين سولز']),
    'PGK' => new C('PGK', 'پاپوا نيوګاني کينا', plurals: ['one' => 'پاپوا نيوګاني کينا', 'other' => 'پاپوا نيوګاني کينا']),
    'PHP' => new C('PHP', 'فلپاينۍ پسو', '₱', narrow: '₱', plurals: ['one' => 'فلپاينۍ پسو', 'other' => 'فلپاينۍ پسوز']),
    'PKR' => new C('PKR', 'پاکستانۍ کلداره', narrow: 'Rs', plurals: ['one' => 'پاکستانۍ کلداره', 'other' => 'پاکستانۍ کلدارې']),
    'PLN' => new C('PLN', 'پولينډي زلوټي', narrow: 'zł', plurals: ['one' => 'پولينډي زلوټي', 'other' => 'پولينډي زلوټيز']),
    'PYG' => new C('PYG', 'پيراګوين ګوراني', narrow: '₲', plurals: ['one' => 'پيراګوين ګوراني', 'other' => 'پيراګوين ګوراني'], minorUnits: 0),
    'QAR' => new C('QAR', 'قطري ريال', plurals: ['one' => 'قطري ريال', 'other' => 'قطري ريالونه']),
    'RON' => new C('RON', 'روماني ليو', narrow: 'lei', plurals: ['one' => 'روماني ليو', 'other' => 'روماني لي']),
    'RSD' => new C('RSD', 'سربيايي دينار', plurals: ['one' => 'سربيايي دينار', 'other' => 'سربيايي دينارې']),
    'RUB' => new C('RUB', 'روسي روبل', narrow: '₽', plurals: ['one' => 'روسي روبل', 'other' => 'روسي روبلز']),
    'RWF' => new C('RWF', 'روانډي فرانک', narrow: 'RF', plurals: ['one' => 'روانډي فرانک', 'other' => 'روانډي فرانکس'], minorUnits: 0),
    'SAR' => new C('SAR', 'سعودي ريال', plurals: ['one' => 'سعودي ريال', 'other' => 'سعودي ريالونه']),
    'SBD' => new C('SBD', 'سولومن ټاپوګانو ډالر', narrow: '$', plurals: ['one' => 'سولومن ټاپوګانو ډالر', 'other' => 'سولومن ټاپوګانو ډالرې']),
    'SCR' => new C('SCR', 'سيچيليسي روپۍ', plurals: ['one' => 'سيچيليسي روپۍ', 'other' => 'سيچيليسي روپۍ']),
    'SDG' => new C('SDG', 'سوډاني پونډ', plurals: ['one' => 'سوډاني پونډ', 'other' => 'سوډاني پونډونه']),
    'SEK' => new C('SEK', 'سويډني کرونا', narrow: 'kr', plurals: ['one' => 'سويډني کرونا', 'other' => 'سويډني کرونر']),
    'SGD' => new C('SGD', 'سنګاپور ډالر', narrow: '$', plurals: ['one' => 'سنګاپور ډالر', 'other' => 'سنګاپور ډالرې']),
    'SHP' => new C('SHP', 'سينټ هيلينا پونډ', narrow: '£', plurals: ['one' => 'سينټ هيلينا پونډ', 'other' => 'سينټ هيلينا پونډونه']),
    'SLL' => new C('SLL', 'سيرا ليوني ليون', plurals: ['one' => 'سيرا ليوني ليون', 'other' => 'سيرا ليوني ليونونه']),
    'SOS' => new C('SOS', 'سومالي شيلنګ', plurals: ['one' => 'سومالي شيلنګ', 'other' => 'سومالي شيلنګز']),
    'SRD' => new C('SRD', 'سورينيمي ډالر', narrow: '$', plurals: ['one' => 'سورينيمي ډالر', 'other' => 'سورينيمي ډالرې']),
    'SSP' => new C('SSP', 'جنوب سوډاني پونډ', narrow: '£'),
    'STN' => new C('STN', 'ساو ټوم او پرينسپي ډوبرا', narrow: 'Db', plurals: ['one' => 'ساو ټوم او پرينسپي ډوبرا', 'other' => 'ساو ټوم او پرينسپي ډوبراس']),
    'SYP' => new C('SYP', 'سوريايي پونډ', narrow: '£', plurals: ['one' => 'سوريايي پونډ', 'other' => 'سوريايي پونډونه']),
    'SZL' => new C('SZL', 'سوازي ليلانګيني', plurals: ['one' => 'سوازي ليلانګيني', 'other' => 'سوازي ايمالانګيني']),
    'THB' => new C('THB', 'تهايي بات', narrow: '฿', plurals: ['one' => 'تهايي بات', 'other' => 'تهايي باتونه']),
    'TJS' => new C('TJS', 'تاجکستاني سوموني', plurals: ['one' => 'تاجکستاني سوموني', 'other' => 'تاجکستاني سومونيونه']),
    'TMT' => new C('TMT', 'ترکمانستاني منت', plurals: ['one' => 'ترکمانستاني منت', 'other' => 'ترکمانستاني منت']),
    'TND' => new C('TND', 'تيونسې دينار', plurals: ['one' => 'تيونسې دينار', 'other' => 'تونسي دينار'], minorUnits: 3),
    'TOP' => new C('TOP', 'ټونګن پانګا', narrow: 'T$', plurals: ['one' => 'ټونګن پانګا', 'other' => 'ټونګن پانګا']),
    'TRY' => new C('TRY', 'ترکي ليرا', narrow: '₺', plurals: ['one' => 'ترکي ليرا', 'other' => 'ترکي ليرا']),
    'TTD' => new C('TTD', 'ټرينيډاډ او ټوباګو ډالر', narrow: '$', plurals: ['one' => 'ټرينيډاډ او ټوباګو ډالر', 'other' => 'ټرينيډاډ او ټوباګو ډالرې']),
    'TWD' => new C('TWD', 'نيو تائيواني ډالر', 'NT$', narrow: '$', plurals: ['one' => 'نيو تائيواني ډالر', 'other' => 'نيو تائيواني ډالرې']),
    'TZS' => new C('TZS', 'تنزاني شيلنګ', plurals: ['one' => 'تنزاني شيلنګ', 'other' => 'تنزاني شيلنګز']),
    'UAH' => new C('UAH', 'اوکرايني هريونيا', narrow: '₴', plurals: ['one' => 'اوکرايني هريونيا', 'other' => 'اوکرايني هريونياز']),
    'UGX' => new C('UGX', 'يوګانډي شيلنګ', plurals: ['one' => 'يوګانډي شيلنګ', 'other' => 'يوګانډي شيلنګز'], minorUnits: 0),
    'USD' => new C('USD', 'امريکايي ډالر', '$', narrow: '$', plurals: ['one' => 'امريکايي ډالر', 'other' => 'امريکايي ډالرې']),
    'UYU' => new C('UYU', 'يوراګوي پسو', narrow: '$', plurals: ['one' => 'يوراګوي پسو', 'other' => 'يوراګوي پسوز']),
    'UZS' => new C('UZS', 'ازبکستاني سوم', plurals: ['one' => 'ازبکستاني سوم', 'other' => 'ازبکستاني سوم']),
    'VES' => new C('VES', 'وينزويلي بوليوار', plurals: ['one' => 'وينزويلي بوليوار', 'other' => 'وينزويلي بوليوارز']),
    'VND' => new C('VND', 'ويتنامي ډونګ', '₫', narrow: '₫', plurals: ['one' => 'ويتنامي ډونګ', 'other' => 'ويتنامي ډونګ'], minorUnits: 0),
    'VUV' => new C('VUV', 'ونواتو واتو', plurals: ['one' => 'ونواتو واتو', 'other' => 'ونواتو واتوس'], minorUnits: 0),
    'WST' => new C('WST', 'سموون تالا', plurals: ['one' => 'سموون تالا', 'other' => 'سموون تالا']),
    'XAF' => new C('XAF', 'مرکزي افريقايي CFA فرانک', 'FCFA', plurals: ['one' => 'مرکزي افريقايي CFA فرانک', 'other' => 'مرکزي افريقايي CFA فرانکس'], minorUnits: 0),
    'XCD' => new C('XCD', 'ختيځ کربين ډالر', 'EC$', narrow: '$', plurals: ['one' => 'ختيځ کربين ډالر', 'other' => 'ختيځ کربين ډالرې']),
    'XOF' => new C('XOF', 'ختيځ افريقايي CFA فرانک', "F\u{202F}CFA", plurals: ['one' => 'ختيځ افريقايي CFA فرانک', 'other' => 'ختيځ افريقايي CFA فرانکس'], minorUnits: 0),
    'XPF' => new C('XPF', 'CFP فرانک', 'CFPF', plurals: ['one' => 'CFP فرانک', 'other' => 'CFP فرانکس'], minorUnits: 0),
    'XXX' => new C('XXX', 'نامعلومه مروجه پېسې', '¤', plurals: ['one' => '(د نامعلومه مروجه پېسو واحد)', 'other' => '(نامعلومه مروجه پېسې)']),
    'YER' => new C('YER', 'يمني ريال', plurals: ['one' => 'يمني ريال', 'other' => 'يمني ريالونه']),
    'ZAR' => new C('ZAR', 'جنوبي افريقاېي رنډ', narrow: 'R', plurals: ['one' => 'جنوبي افريقاېي رنډ', 'other' => 'جنوبي افريقاېي رنډ']),
    'ZMW' => new C('ZMW', 'زيمبي کواچا', narrow: 'ZK', plurals: ['one' => 'زيمبي کواچا', 'other' => 'زيمبي کواچاز']),
];
