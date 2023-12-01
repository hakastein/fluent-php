<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'የተባበሩት የአረብ ኤምሬትስ ድርሀም'),
    'AFN' => new C('AFN', 'የአፍጋን አፍጋኒ', narrow: '؋'),
    'ALL' => new C('ALL', 'የአልባንያ ሌክ'),
    'AMD' => new C('AMD', 'የአርመን ድራም', narrow: '֏'),
    'ANG' => new C('ANG', 'ኔዘርላንድስ አንቲሊአን ጊልደር'),
    'AOA' => new C('AOA', 'የአንጎላ ኩዋንዛ', narrow: 'Kz'),
    'ARS' => new C('ARS', 'የአርጀንቲና ፔሶ', narrow: '$'),
    'AUD' => new C('AUD', 'የአውስትራሊያ ዶላር', 'AU$', '$'),
    'AWG' => new C('AWG', 'አሩባን ፍሎሪን'),
    'AZN' => new C('AZN', 'የአዛርባጃን ማናት', narrow: '₼'),
    'BAM' => new C('BAM', 'የቦስኒያ ሄርዞጎቪና የሚመነዘር ማርክ', narrow: 'KM'),
    'BBD' => new C('BBD', 'የባርቤዶስ ዶላር', narrow: '$'),
    'BDT' => new C('BDT', 'የባንግላዲሽ ታካ', narrow: '৳'),
    'BGN' => new C('BGN', 'የቡልጋሪያ ሌቭ'),
    'BHD' => new C('BHD', 'የባኽሬን ዲናር', minorUnits: 3),
    'BIF' => new C('BIF', 'የብሩንዲ ፍራንክ', minorUnits: 0),
    'BMD' => new C('BMD', 'የቤርሙዳ ዶላር', narrow: '$'),
    'BND' => new C('BND', 'የብሩኔ ዶላር', narrow: '$'),
    'BOB' => new C('BOB', 'የቦሊቪያ ቦሊቪያኖ', narrow: 'Bs'),
    'BRL' => new C('BRL', 'የብራዚል ሪል', 'R$', 'R$'),
    'BSD' => new C('BSD', 'የባሃማስ ዶላር', narrow: '$'),
    'BTN' => new C('BTN', 'ብሁታኒዝ ንጉልትረም'),
    'BWP' => new C('BWP', 'የቦትስዋና ፑላ', narrow: 'P'),
    'BYN' => new C('BYN', 'የቤላሩስያ ሩብል', narrow: 'р.'),
    'BYR' => new C('BYR', 'የቤላሩስያ ሩብል (2000–2016)'),
    'BZD' => new C('BZD', 'የቤሊዝ ዶላር', narrow: '$'),
    'CAD' => new C('CAD', 'የካናዳ ዶላር', 'CA$', '$'),
    'CDF' => new C('CDF', 'የኮንጐ ፍራንክ ኮንጐሌዝ'),
    'CHF' => new C('CHF', 'የስዊስ ፍራንክ'),
    'CLP' => new C('CLP', 'የቺሊ ፔሶ', narrow: '$', minorUnits: 0),
    'CNH' => new C('CNH', 'የቻይና ዩዋን (የውጭ ምንዛሪ)', 'የቻይና ዩዋን'),
    'CNY' => new C('CNY', 'የቻይና የን', 'CN¥', '¥'),
    'COP' => new C('COP', 'የኮሎምቢያ ፔሶ', narrow: '$'),
    'CRC' => new C('CRC', 'የኮስታሪካ ኮሎን', narrow: '₡'),
    'CUC' => new C('CUC', 'የኩባ የሚመነዘር ፔሶ', narrow: '$'),
    'CUP' => new C('CUP', 'የኩባ ፔሶ', narrow: '$'),
    'CVE' => new C('CVE', 'የኬፕ ቫርዲ ኤስኩዶ'),
    'CZK' => new C('CZK', 'ቼክ ሪፐብሊክ ኮሩና', narrow: 'Kč', plurals: ['one' => 'ቼክ ሪፐብሊክ ኮሩና', 'other' => 'ቼክ ሪፐብሊክ ኮሮና']),
    'DJF' => new C('DJF', 'የጅቡቲ ፍራንክ', minorUnits: 0),
    'DKK' => new C('DKK', 'የዴንማርክ ክሮን', narrow: 'kr'),
    'DOP' => new C('DOP', 'የዶሚኒክ ፔሶ', narrow: '$'),
    'DZD' => new C('DZD', 'የአልጄሪያ ዲናር'),
    'EGP' => new C('EGP', 'የግብጽ ፓውንድ', narrow: 'E£'),
    'ERN' => new C('ERN', 'የኤርትራ ናቅፋ'),
    'ETB' => new C('ETB', 'የኢትዮጵያ ብር', 'ብር'),
    'EUR' => new C('EUR', 'ዩሮ', '€', '€'),
    'FJD' => new C('FJD', 'የፊጂ ዶላር', narrow: '$'),
    'FKP' => new C('FKP', 'የፎክላንድ ደሴቶች ፓውንድ', narrow: '£'),
    'GBP' => new C('GBP', 'የእንግሊዝ ፓውንድ ስተርሊንግ', '£', '£'),
    'GEL' => new C('GEL', 'የጆርጅያ ላሪ', narrow: '₾'),
    'GHC' => new C('GHC', 'የጋና ሴዲ'),
    'GHS' => new C('GHS', 'የጋና ሲዲ', narrow: 'GH₵'),
    'GIP' => new C('GIP', 'ጂብራልተር ፓውንድ', narrow: '£'),
    'GMD' => new C('GMD', 'የጋምቢያ ዳላሲ'),
    'GNF' => new C('GNF', 'የጊኒ ፍራንክ', narrow: 'FG', minorUnits: 0),
    'GTQ' => new C('GTQ', 'ጓቲማላን ኩቲዛል', narrow: 'Q'),
    'GYD' => new C('GYD', 'የጉየና ዶላር', narrow: '$'),
    'HKD' => new C('HKD', 'የሆንግኮንግ ዶላር', 'HK$', '$'),
    'HNL' => new C('HNL', 'የሃንዱራ ሌምፓአይራ', narrow: 'L'),
    'HRK' => new C('HRK', 'የክሮሽያ ኩና', narrow: 'kn'),
    'HTG' => new C('HTG', 'የሃያቲ ጓርዴ'),
    'HUF' => new C('HUF', 'የሃንጋሪያን ፎሪንት', narrow: 'Ft'),
    'IDR' => new C('IDR', 'የኢንዶኔዥያ ሩፒሃ', narrow: 'Rp'),
    'ILS' => new C('ILS', 'የእስራኤል አዲስ ሽቅል', '₪', '₪'),
    'INR' => new C('INR', 'የሕንድ ሩፒ', '₹', '₹'),
    'IQD' => new C('IQD', 'የኢራቅ ዲናር', minorUnits: 3),
    'IRR' => new C('IRR', 'የኢራን ሪአል'),
    'ISK' => new C('ISK', 'የአይስላንድ ክሮና', narrow: 'kr', minorUnits: 0),
    'JMD' => new C('JMD', 'የጃማይካ ዶላር', narrow: '$'),
    'JOD' => new C('JOD', 'የጆርዳን ዲናር', minorUnits: 3),
    'JPY' => new C('JPY', 'የጃፓን የን', 'JP¥', '¥', minorUnits: 0),
    'KES' => new C('KES', 'የኬኒያ ሺሊንግ'),
    'KGS' => new C('KGS', 'የኪርጊስታን ሶም', narrow: '⃀'),
    'KHR' => new C('KHR', 'የካምቦዲያ ሬል', narrow: '៛'),
    'KMF' => new C('KMF', 'የኮሞሮ ፍራንክ', narrow: 'CF', minorUnits: 0),
    'KPW' => new C('KPW', 'የሰሜን ኮሪያ ዎን', narrow: '₩'),
    'KRW' => new C('KRW', 'የደቡብ ኮሪያ ዎን', '₩', '₩', minorUnits: 0),
    'KWD' => new C('KWD', 'የኩዌት ዲናር', minorUnits: 3),
    'KYD' => new C('KYD', 'የካይማን ደሴቶች ዶላር', narrow: '$'),
    'KZT' => new C('KZT', 'የካዛኪስታን ተንጌ', narrow: '₸'),
    'LAK' => new C('LAK', 'የላኦቲ ኪፕ', narrow: '₭'),
    'LBP' => new C('LBP', 'የሊባኖስ ፓውንድ', narrow: 'L£'),
    'LKR' => new C('LKR', 'የሲሪላንካ ሩፒ', narrow: 'Rs'),
    'LRD' => new C('LRD', 'የላይቤሪያ ዶላር', narrow: '$'),
    'LSL' => new C('LSL', 'የሌሶቶ ሎቲ'),
    'LTL' => new C('LTL', 'ሊቱዌንያን ሊታስ', narrow: 'Lt'),
    'LVL' => new C('LVL', 'የላቲቫ ላትስ', narrow: 'Ls'),
    'LYD' => new C('LYD', 'የሊቢያ ዲናር', minorUnits: 3),
    'MAD' => new C('MAD', 'የሞሮኮ ዲርሀም'),
    'MDL' => new C('MDL', 'ሞልዶቫን ሊኡ'),
    'MGA' => new C('MGA', 'የማደጋስካር ማላጋስይ አሪያርይ', narrow: 'Ar'),
    'MKD' => new C('MKD', 'የሜቆድንያ ዲናር'),
    'MMK' => new C('MMK', 'የማያናማር ክያት', narrow: 'K'),
    'MNT' => new C('MNT', 'የሞንጎሊያን ቱግሪክ', narrow: '₮'),
    'MOP' => new C('MOP', 'የማካኔዝ ፓታካ'),
    'MRO' => new C('MRO', 'የሞሪቴኒያ ኦውጉያ (1973–2017)'),
    'MRU' => new C('MRU', 'የሞሪቴኒያ ኦውጉያ'),
    'MUR' => new C('MUR', 'የሞሪሸስ ሩፒ', narrow: 'Rs'),
    'MVR' => new C('MVR', 'የማልዲቫ ሩፊያ'),
    'MWK' => new C('MWK', 'የማላዊ ኩዋቻ'),
    'MXN' => new C('MXN', 'የሜክሲኮ ፔሶ', 'MX$', '$'),
    'MYR' => new C('MYR', 'የማሌዥያ ሪንጊት', narrow: 'RM'),
    'MZN' => new C('MZN', 'የሞዛምቢክ ሜቲካል'),
    'NAD' => new C('NAD', 'የናሚቢያ ዶላር', narrow: '$'),
    'NGN' => new C('NGN', 'የናይጄሪያ ናይራ', narrow: '₦'),
    'NIO' => new C('NIO', 'የኒካራጓ ኮርዶባ', narrow: 'C$'),
    'NOK' => new C('NOK', 'የኖርዌይ ክሮን', narrow: 'kr'),
    'NPR' => new C('NPR', 'የኔፓል ሩፒ', narrow: 'Rs'),
    'NZD' => new C('NZD', 'የኒውዚላንድ ዶላር', 'NZ$', '$'),
    'OMR' => new C('OMR', 'የኦማን ሪአል', minorUnits: 3),
    'PAB' => new C('PAB', 'ፓናማኒአን ባልቦአ'),
    'PEN' => new C('PEN', 'የፔሩቪያ ሶል'),
    'PGK' => new C('PGK', 'የፓፕዋ ኒው ጊኒ ኪና'),
    'PHP' => new C('PHP', 'የፊሊፒንስ ፔሶ', narrow: '₱'),
    'PKR' => new C('PKR', 'የፓኪስታን ሩፒ', narrow: 'Rs'),
    'PLN' => new C('PLN', 'የፖላንድ ዝሎቲ', narrow: 'zł'),
    'PYG' => new C('PYG', 'የፓራጓይ ጉአራኒ', narrow: '₲', minorUnits: 0),
    'QAR' => new C('QAR', 'የኳታር ሪአል'),
    'RON' => new C('RON', 'የሮማኒያ ለው', narrow: 'lei'),
    'RSD' => new C('RSD', 'የሰርቢያ ዲናር'),
    'RUB' => new C('RUB', 'የሩስያ ሩብል', narrow: '₽'),
    'RWF' => new C('RWF', 'የሩዋንዳ ፍራንክ', narrow: 'RF', minorUnits: 0),
    'SAR' => new C('SAR', 'የሳውዲ ሪያል'),
    'SBD' => new C('SBD', 'የሰለሞን ደሴቶች ዶላር', narrow: '$'),
    'SCR' => new C('SCR', 'የሲሼል ሩፒ'),
    'SDG' => new C('SDG', 'የሱዳን ፓውንድ'),
    'SDP' => new C('SDP', 'የሱዳን ፓውንድ (1957–1998)'),
    'SEK' => new C('SEK', 'የስዊድን ክሮና', narrow: 'kr'),
    'SGD' => new C('SGD', 'የሲንጋፖር ዶላር', narrow: '$'),
    'SHP' => new C('SHP', 'የሴይንት ሔሌና ፓውንድ', narrow: '£'),
    'SLE' => new C('SLE', 'የሴራሊዎን ሊዎን'),
    'SLL' => new C('SLL', 'የሴራሊዎን ሊዎን (1964—2022)'),
    'SOS' => new C('SOS', 'የሶማሌ ሺሊንግ'),
    'SRD' => new C('SRD', 'የሰርናሜዝ ዶላር', narrow: '$'),
    'SSP' => new C('SSP', 'የደቡብ ሱዳን ፓውንድ', narrow: '£'),
    'STD' => new C('STD', 'የሳኦ ቶሜ እና ፕሪንሲፔ ዶብራ (1977–2017)'),
    'STN' => new C('STN', 'የሳኦ ቶሜ እና ፕሪንሲፔ ዶብራ', narrow: 'Db'),
    'SYP' => new C('SYP', 'የሲሪያ ፓውንድ', narrow: '£'),
    'SZL' => new C('SZL', 'የስዋዚላንድ ሊላንገኒ'),
    'THB' => new C('THB', 'የታይላንድ ባህት', '฿', '฿'),
    'TJS' => new C('TJS', 'የታጂክስታን ሶሞኒ'),
    'TMT' => new C('TMT', 'ቱርክሜኒስታኒ ማናት'),
    'TND' => new C('TND', 'የቱኒዚያ ዲናር', minorUnits: 3),
    'TOP' => new C('TOP', 'ቶንጋን ፓ’አንጋ', narrow: 'T$'),
    'TRY' => new C('TRY', 'የቱርክ ሊራ', narrow: '₺'),
    'TTD' => new C('TTD', 'የትሪንዳድ እና ቶቤጎዶላር', narrow: '$'),
    'TWD' => new C('TWD', 'የአዲሷ ታይዋን ዶላር', 'NT$', 'NT$'),
    'TZS' => new C('TZS', 'የታንዛኒያ ሺሊንግ'),
    'UAH' => new C('UAH', 'የዩክሬን ሀሪይቭኒአ', narrow: '₴'),
    'UGX' => new C('UGX', 'የዩጋንዳ ሺሊንግ', minorUnits: 0),
    'USD' => new C('USD', 'የአሜሪካን ዶላር', 'US$', '$'),
    'UYU' => new C('UYU', 'የኡራጓይ ፔሶ', narrow: '$'),
    'UZS' => new C('UZS', 'የኡዝፔኪስታን ሶም'),
    'VEF' => new C('VEF', 'የቬንዝዌላ ቦሊቫር (2008–2018)', narrow: 'Bs'),
    'VES' => new C('VES', 'የቬንዝዌላ-ቦሊቫር'),
    'VND' => new C('VND', 'የቭየትናም ዶንግ', '₫', '₫', minorUnits: 0),
    'VUV' => new C('VUV', 'የቫንዋንቱ ቫቱ', minorUnits: 0),
    'WST' => new C('WST', 'ሳሞአን ታላ'),
    'XAF' => new C('XAF', 'የመካከለኛው አፍሪካ ሴፋ ፍራንክ', 'FCFA', minorUnits: 0),
    'XCD' => new C('XCD', 'የምዕራብ ካሪብያን ዶላር', 'EC$', '$'),
    'XOF' => new C('XOF', 'የምዕራብ አፍሪካ ሴፋ ፍራንክ', "F\u{202F}CFA", minorUnits: 0),
    'XPF' => new C('XPF', 'ሲ ኤፍ ፒ ፍራንክ', 'CFPF', minorUnits: 0),
    'XXX' => new C('XXX', 'ያልታወቀ ገንዘብ', '¤'),
    'YER' => new C('YER', 'የየመን ሪአል'),
    'ZAR' => new C('ZAR', 'የደቡብ አፍሪካ ራንድ', narrow: 'R'),
    'ZMK' => new C('ZMK', 'የዛምቢያ ክዋቻ (1968–2012)'),
    'ZMW' => new C('ZMW', 'የዛምቢያ ክዋቻ', narrow: 'ZK'),
    'ZWD' => new C('ZWD', 'የዚምቧቡዌ ዶላር'),
];
