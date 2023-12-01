<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'યુનાઈટેડ આરબ અમિરાત દિરહામ', plurals: '[UAE] દિરહામ'),
    'AFN' => new C('AFN', 'અફ્ગાન અફ્ગાની', narrow: '؋'),
    'ALL' => new C('ALL', 'અલ્બેનિયન લેક'),
    'AMD' => new C('AMD', 'અર્મેનિયન ડ્રેમ', narrow: '֏'),
    'ANG' => new C('ANG', 'નેધરલેંડ એંટિલિન ગિલ્ડર'),
    'AOA' => new C('AOA', 'અંગોલિયન ક્વાન્ઝા', narrow: 'Kz'),
    'ARS' => new C('ARS', 'અર્જેન્ટીના પેસો', narrow: '$'),
    'AUD' => new C('AUD', 'ઑસ્ટ્રેલિયન ડૉલર', 'A$', '$'),
    'AWG' => new C('AWG', 'અરુબન ફ્લોરિન'),
    'AZN' => new C('AZN', 'અઝરબૈજાની મનાત', narrow: '₼'),
    'BAM' => new C('BAM', 'બોસ્નિયા અને હર્ઝેગોવિના રૂપાંતર યોગ્ય માર્ક', narrow: 'KM'),
    'BBD' => new C('BBD', 'બાર્બાડિયન ડોલર', narrow: '$'),
    'BDT' => new C('BDT', 'બાંગ્લાદેશી ટાકા', narrow: '৳', plurals: ['one' => 'બાંગ્લાદેશી ટાકા', 'other' => 'બાંગલાદેશી ટાકા']),
    'BGN' => new C('BGN', 'બલ્ગેરીયન લેવ'),
    'BHD' => new C('BHD', 'બેહરિની દિનાર', minorUnits: 3),
    'BIF' => new C('BIF', 'બુરુન્ડિયન ફ્રેંક', minorUnits: 0),
    'BMD' => new C('BMD', 'બર્મુડન ડોલર', narrow: '$'),
    'BND' => new C('BND', 'બ્રુનેઇ ડોલર', narrow: '$'),
    'BOB' => new C('BOB', 'બોલિવિયન બોલિવિયાનો', narrow: 'Bs'),
    'BRL' => new C('BRL', 'બ્રાઝિલીયન રિઆલ', 'R$', 'R$'),
    'BSD' => new C('BSD', 'બહામિયન ડોલર', narrow: '$'),
    'BTN' => new C('BTN', 'ભુતાનિઝ એંગુલ્ત્રમ'),
    'BWP' => new C('BWP', 'બોત્સવાનન પુલા', narrow: 'P'),
    'BYN' => new C('BYN', 'બેલારુશિયન રૂબલ', narrow: 'р.'),
    'BYR' => new C('BYR', 'બેલારુશિયન રૂબલ (2000–2016)'),
    'BZD' => new C('BZD', 'બેલિઝ ડોલર', narrow: '$'),
    'CAD' => new C('CAD', 'કેનેડિયન ડૉલર', 'CA$', '$'),
    'CDF' => new C('CDF', 'કોંગોલિઝ ફ્રેંક'),
    'CHF' => new C('CHF', 'સ્વિસ ફ્રેંક'),
    'CLP' => new C('CLP', 'ચિલિઅન પેસો', narrow: '$', minorUnits: 0),
    'CNH' => new C('CNH', 'ચાઇનીઝ યુઆન (ઑફશોર)'),
    'CNY' => new C('CNY', 'ચાઇનિઝ યુઆન', 'CN¥', '¥'),
    'COP' => new C('COP', 'કોલમ્બિયન પેસો', narrow: '$'),
    'CRC' => new C('CRC', 'કોસ્ટા રિકન કોલોન', narrow: '₡'),
    'CUC' => new C('CUC', 'ક્યુબન રૂપાંતર યોગ્ય પેસો', narrow: '$'),
    'CUP' => new C('CUP', 'ક્યુબન પેસો', narrow: '$'),
    'CVE' => new C('CVE', 'કેપ વર્દિયન એસ્કુડો'),
    'CZK' => new C('CZK', 'ચેક રીપબ્લિક કોરુના', narrow: 'Kč'),
    'DJF' => new C('DJF', 'જિબુટિયન ફ્રેંક', minorUnits: 0),
    'DKK' => new C('DKK', 'ડેનિશ ક્રોન', narrow: 'kr'),
    'DOP' => new C('DOP', 'ડોમિનિકન પેસો', narrow: '$'),
    'DZD' => new C('DZD', 'અલ્જિરિયન દિનાર'),
    'EGP' => new C('EGP', 'ઇજિપ્તિયન પાઉન્ડ', narrow: 'E£'),
    'ERN' => new C('ERN', 'એરિટ્રેયન નક્ફા'),
    'ETB' => new C('ETB', 'ઇથિયોપીયન બિર'),
    'EUR' => new C('EUR', 'યુરો', '€', '€'),
    'FJD' => new C('FJD', 'ફિજિઅન ડોલર', narrow: '$'),
    'FKP' => new C('FKP', 'ફૉકલેન્ડ આઇલેંડ્સ પાઉન્ડ', narrow: '£'),
    'GBP' => new C('GBP', 'બ્રિટિશ પાઉન્ડ', '£', '£', ['one' => 'બ્રિટિશ પાઉન્ડ', 'other' => 'બ્રિટિશ પાઉન્ડ્સ']),
    'GEL' => new C('GEL', 'જ્યોર્જિઅન લારી', narrow: '₾'),
    'GHS' => new C('GHS', 'ઘાનાઇયન સેડી', narrow: 'GH₵'),
    'GIP' => new C('GIP', 'જીબ્રાલ્ટર પાઉન્ડ', narrow: '£'),
    'GMD' => new C('GMD', 'ગેમ્બિયન દલાસી'),
    'GNF' => new C('GNF', 'ગિનીયન ફ્રેંક', narrow: 'FG', minorUnits: 0),
    'GTQ' => new C('GTQ', 'ગ્વાટેમાલા કુઇટ્ઝલ', narrow: 'Q'),
    'GYD' => new C('GYD', 'ગયાનિઝ ડોલર', narrow: '$'),
    'HKD' => new C('HKD', 'હોંગ કોંગ ડૉલર', 'HK$', '$'),
    'HNL' => new C('HNL', 'હોન્ડ્યુરન લેમ્પિરા', narrow: 'L'),
    'HRK' => new C('HRK', 'ક્રોએશિયન ક્યુના', narrow: 'kn'),
    'HTG' => new C('HTG', 'હાઇટિઇન ગોર્ડ'),
    'HUF' => new C('HUF', 'હંગેરીયન ફોરિન્ત', narrow: 'Ft'),
    'IDR' => new C('IDR', 'ઇન્ડોનેશિયન રૂપિયા', narrow: 'Rp'),
    'ILS' => new C('ILS', 'ઇઝરાયેલી ન્યુ શેકલ', '₪', '₪'),
    'INR' => new C('INR', 'ભારતીય રૂપિયા', '₹', '₹'),
    'IQD' => new C('IQD', 'ઇરાકી દિનાર', minorUnits: 3),
    'IRR' => new C('IRR', 'ઇરાનિયન રિયાલ'),
    'ISK' => new C('ISK', 'આઇસલેન્ડિક ક્રોના', narrow: 'kr', minorUnits: 0),
    'JMD' => new C('JMD', 'જમૈકિયન ડોલર', narrow: '$'),
    'JOD' => new C('JOD', 'જોર્ડનિયન દિનાર', minorUnits: 3),
    'JPY' => new C('JPY', 'જાપાનીઝ યેન', 'JP¥', '¥', minorUnits: 0),
    'KES' => new C('KES', 'કેન્યેન શિલિંગ'),
    'KGS' => new C('KGS', 'કિર્ગિસ્તાની સોમ', narrow: '⃀'),
    'KHR' => new C('KHR', 'કેમ્બોડિયન રીઅલ', narrow: '៛'),
    'KMF' => new C('KMF', 'કોમોરિઅન ફ્રેંક', narrow: 'CF', minorUnits: 0),
    'KPW' => new C('KPW', 'ઉત્તર કોરિયન વન', narrow: '₩'),
    'KRW' => new C('KRW', 'દક્ષિણ કોરિયન વન', '₩', '₩', minorUnits: 0),
    'KWD' => new C('KWD', 'કુવૈતી દિનાર', minorUnits: 3),
    'KYD' => new C('KYD', 'કેયમેન આઇલેંડ્સ ડોલર', narrow: '$'),
    'KZT' => new C('KZT', 'કઝાકિસ્તાની ટેંગ', narrow: '₸'),
    'LAK' => new C('LAK', 'લાઓશિયન કિપ', narrow: '₭'),
    'LBP' => new C('LBP', 'લેબેનિઝ પાઉન્ડ', narrow: 'L£'),
    'LKR' => new C('LKR', 'શ્રી લંકન રૂપી', narrow: 'Rs'),
    'LRD' => new C('LRD', 'લિબેરિયન ડોલર', narrow: '$'),
    'LSL' => new C('LSL', 'લેસોથો લોતી'),
    'LTL' => new C('LTL', 'લિથુએનિયન લિતાસ', narrow: 'Lt'),
    'LVL' => new C('LVL', 'લાતવિયન લેત્સ', narrow: 'Ls'),
    'LYD' => new C('LYD', 'લિબ્યન દિનાર', minorUnits: 3),
    'MAD' => new C('MAD', 'મોરોક્કન દિરહામ'),
    'MDL' => new C('MDL', 'મોલડોવેન લિયુ'),
    'MGA' => new C('MGA', 'માલાગેસી અરીઆરી', narrow: 'Ar'),
    'MKD' => new C('MKD', 'મેસેડોનિયન દિનાર'),
    'MMK' => new C('MMK', 'મ્યાંમાર ક્યાત', narrow: 'K'),
    'MNT' => new C('MNT', 'મોંગોલિયન ટગરિક', narrow: '₮'),
    'MOP' => new C('MOP', 'માકાનિઝ પતાકા'),
    'MRO' => new C('MRO', 'મોરીશેનિયન ઓગુયા (1973–2017)'),
    'MRU' => new C('MRU', 'મોરીશેનિયન ઓગુયા'),
    'MUR' => new C('MUR', 'મોરેશીઅન રૂપી', narrow: 'રૂ.'),
    'MVR' => new C('MVR', 'માલ્દિવિયન રુફિયા'),
    'MWK' => new C('MWK', 'માલાવિયન ક્વાચા'),
    'MXN' => new C('MXN', 'મેક્સિકન પેસો', 'MX$', '$'),
    'MYR' => new C('MYR', 'મલેશિયન રિંગ્ગેટ', narrow: 'RM'),
    'MZN' => new C('MZN', 'મોઝામ્બિકન મેટિકલ'),
    'NAD' => new C('NAD', 'નામિબિયન ડોલર', narrow: '$'),
    'NGN' => new C('NGN', 'નાઇજીરિયન નૈરા', narrow: '₦'),
    'NIO' => new C('NIO', 'નિકારાગુઅન કોર્ડોબા', narrow: 'C$'),
    'NOK' => new C('NOK', 'નૉર્વેજિયન ક્રોન', narrow: 'kr'),
    'NPR' => new C('NPR', 'નેપાલિઝ રૂપી', narrow: 'Rs'),
    'NZD' => new C('NZD', 'ન્યૂઝિલેંડ ડૉલર', 'NZ$', '$'),
    'OMR' => new C('OMR', 'ઓમાની રિયાલ', minorUnits: 3),
    'PAB' => new C('PAB', 'પનામેનિયન બાલ્બોઆ'),
    'PEN' => new C('PEN', 'પેરુવિયન સોલ'),
    'PGK' => new C('PGK', 'પાપુઆ ન્યૂ ગિનીયન કિના'),
    'PHP' => new C('PHP', 'ફિલીપાઇન પેસો', narrow: '₱'),
    'PKR' => new C('PKR', 'પાકિસ્તાની રૂપી', narrow: 'Rs'),
    'PLN' => new C('PLN', 'પોલિસ ઝ્લોટી', narrow: 'zł'),
    'PYG' => new C('PYG', 'પરાગ્વેયન ગુઆરાની', narrow: '₲', minorUnits: 0),
    'QAR' => new C('QAR', 'કતારી રિયાલ'),
    'RON' => new C('RON', 'રોમાનિયન લેઉ', narrow: 'lei'),
    'RSD' => new C('RSD', 'સર્બિયન દિનાર'),
    'RUB' => new C('RUB', 'રશિયન રૂબલ', narrow: '₽', plurals: ['one' => 'રશિયન રૂબલ', 'other' => 'રશિયન રૂબલ્સ']),
    'RWF' => new C('RWF', 'રવાંડન ફ્રેંક', narrow: 'RF', minorUnits: 0),
    'SAR' => new C('SAR', 'સાઉદી રિયાલ'),
    'SBD' => new C('SBD', 'સોલોમન આઇલેંડ્સ ડોલર', narrow: '$'),
    'SCR' => new C('SCR', 'સેશેલોઈ રૂપી'),
    'SDG' => new C('SDG', 'સુદાનિઝ પાઉન્ડ'),
    'SEK' => new C('SEK', 'સ્વીડિશ ક્રોના', narrow: 'kr'),
    'SGD' => new C('SGD', 'સિંગાપુર ડૉલર', narrow: '$'),
    'SHP' => new C('SHP', 'સેંટ હેલેના પાઉન્ડ', narrow: '£'),
    'SLE' => new C('SLE', 'સિએરા લિઓનિઅન લિઓન'),
    'SLL' => new C('SLL', 'સિએરા લિઓનિઅન લિઓન (1964—2022)'),
    'SOS' => new C('SOS', 'સોમાલી શિલિંગ'),
    'SRD' => new C('SRD', 'સૂરીનામિઝ ડોલર', narrow: '$'),
    'SSP' => new C('SSP', 'દક્ષિણ સુદાનિઝ પાઉન્ડ', narrow: '£'),
    'STD' => new C('STD', 'સાઓ ટૉમ એન્ડ પ્રિંસાઇપ ડોબ્રા (1977–2017)'),
    'STN' => new C('STN', 'સાઓ ટૉમ એન્ડ પ્રિંસાઇપ ડોબ્રા', narrow: 'Db'),
    'SYP' => new C('SYP', 'સાઇરિયન પાઉન્ડ', narrow: '£'),
    'SZL' => new C('SZL', 'સ્વાઝી લિલાન્ગેની'),
    'THB' => new C('THB', 'થાઇ બાહ્ત', '฿', '฿'),
    'TJS' => new C('TJS', 'તાજિકિસ્તાની સોમોની'),
    'TMT' => new C('TMT', 'તુર્કમેનિસ્તાની મનત'),
    'TND' => new C('TND', 'ટ્યુનિશિયન દિનાર', minorUnits: 3),
    'TOP' => new C('TOP', 'ટોંગન પ’અંગા', narrow: 'T$'),
    'TRY' => new C('TRY', 'તુર્કિશ લિરા', narrow: '₺'),
    'TTD' => new C('TTD', 'ત્રિનિદાદ અને ટોબેગો ડોલર', narrow: '$'),
    'TWD' => new C('TWD', 'ન્યુ તાઇવાન ડૉલર', 'NT$', 'NT$'),
    'TZS' => new C('TZS', 'તાન્ઝાનિયન શિલિંગ'),
    'UAH' => new C('UAH', 'યુક્રેનિયન હ્રિવિનિયા', narrow: '₴'),
    'UGX' => new C('UGX', 'યુગાંડન શિલિંગ', minorUnits: 0),
    'USD' => new C('USD', 'યુઍસ ડોલર', 'US$', '$'),
    'UYU' => new C('UYU', 'ઉરુગ્વેયન પેસો', narrow: '$'),
    'UZS' => new C('UZS', 'ઉઝ્બેકિસ્તાન સોમ'),
    'VEF' => new C('VEF', 'વેનેઝુએલન બોલિવર (2008–2018)', narrow: 'Bs'),
    'VES' => new C('VES', 'વેનેઝુએલન બોલિવર'),
    'VND' => new C('VND', 'વિયેતનામીસ ડોંગ', '₫', '₫', minorUnits: 0),
    'VUV' => new C('VUV', 'વનૌતુ વાતુ', minorUnits: 0),
    'WST' => new C('WST', 'સમોઅન તાલા'),
    'XAF' => new C('XAF', 'મધ્ય આફ્રિકન [CFA] ફ્રેંક', 'FCFA', plurals: ['one' => 'મધ્ય આફ્રિકન [CFA] ફ્રેંક', 'other' => 'મધ્ય આફ્રિકન [CFA] ફ્રેંક્સ'], minorUnits: 0),
    'XCD' => new C('XCD', 'ઇસ્ટ કેરિબિયન ડોલર', 'EC$', '$'),
    'XOF' => new C('XOF', 'પશ્ચિમી આફ્રિકન [CFA] ફ્રેંક', "F\u{202F}CFA", plurals: ['one' => 'પશ્ચિમી આફ્રિકન [CFA] ફ્રેંક', 'other' => 'પશ્ચિમી આફ્રિકન [CFA] ફ્રેંક્સ'], minorUnits: 0),
    'XPF' => new C('XPF', '[CFP] ફ્રેંક', 'CFPF', minorUnits: 0),
    'XXX' => new C('XXX', 'અજ્ઞાત ચલણ', '¤'),
    'YER' => new C('YER', 'યેમેની રિઆલ'),
    'ZAR' => new C('ZAR', 'દક્ષિણ આફ્રિકી રેંડ', narrow: 'R'),
    'ZMK' => new C('ZMK', 'ઝામ્બિયન ક્વાચા (1968–2012)'),
    'ZMW' => new C('ZMW', 'ઝામ્બિયન ક્વાચા', narrow: 'ZK'),
];
