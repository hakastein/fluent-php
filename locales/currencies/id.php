<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'Peseta Andorra'),
    'AED' => new C('AED', 'Dirham Uni Emirat Arab', plurals: 'Dirham Uni Emirat Arab'),
    'AFA' => new C('AFA', 'Afgani Afganistan (1927–2002)', plurals: 'Afgani Afganistan (1927–2002)'),
    'AFN' => new C('AFN', 'Afgani Afganistan', narrow: '؋', plurals: 'Afgani Afganistan'),
    'ALL' => new C('ALL', 'Lek Albania', plurals: 'Lek Albania'),
    'AMD' => new C('AMD', 'Dram Armenia', narrow: '֏', plurals: 'Dram Armenia'),
    'ANG' => new C('ANG', 'Guilder Antilla Belanda', plurals: 'Guilder Antilla Belanda'),
    'AOA' => new C('AOA', 'Kwanza Angola', narrow: 'Kz', plurals: 'Kwanza Angola'),
    'AOK' => new C('AOK', 'Kwanza Angola (1977–1991)', plurals: 'Kwanza Angola (1977–1991)'),
    'AON' => new C('AON', 'Kwanza Baru Angola (1990–2000)', plurals: 'Kwanza Baru Angola (1990–2000)'),
    'AOR' => new C('AOR', 'Kwanza Angola yang Disesuaikan Lagi (1995–1999)', plurals: 'Kwanza Angola yang Disesuaikan Lagi (1995–1999)'),
    'ARA' => new C('ARA', 'Austral Argentina'),
    'ARL' => new C('ARL', 'Peso Ley Argentina (1970–1983)', plurals: 'Peso Ley Argentina (1970–1983)'),
    'ARM' => new C('ARM', 'Peso Argentina (1881–1970)', plurals: 'Peso Argentina (1881–1970)'),
    'ARP' => new C('ARP', 'Peso Argentina (1983–1985)', plurals: 'Peso Argentina (1983–1985)'),
    'ARS' => new C('ARS', 'Peso Argentina', narrow: '$', plurals: 'Peso Argentina'),
    'ATS' => new C('ATS', 'Schilling Austria'),
    'AUD' => new C('AUD', 'Dolar Australia', 'AU$', narrow: '$', plurals: 'Dolar Australia'),
    'AWG' => new C('AWG', 'Florin Aruba', plurals: 'Florin Aruba'),
    'AZM' => new C('AZM', 'Manat Azerbaijan (1993–2006)', plurals: 'Manat Azerbaijan (1993–2006)'),
    'AZN' => new C('AZN', 'Manat Azerbaijan', narrow: '₼', plurals: 'Manat Azerbaijan'),
    'BAD' => new C('BAD', 'Dinar Bosnia-Herzegovina (1992–1994)', plurals: 'Dinar Bosnia-Herzegovina (1992–1994)'),
    'BAM' => new C('BAM', 'Mark Konvertibel Bosnia-Herzegovina', narrow: 'KM', plurals: 'Mark Konvertibel Bosnia-Herzegovina'),
    'BAN' => new C('BAN', 'Dinar Baru Bosnia-Herzegovina (1994–1997)', plurals: 'Dinar Baru Bosnia-Herzegovina (1994–1997)'),
    'BBD' => new C('BBD', 'Dolar Barbados', narrow: '$', plurals: 'Dolar Barbados'),
    'BDT' => new C('BDT', 'Taka Bangladesh', narrow: '৳', plurals: 'Taka Bangladesh'),
    'BEC' => new C('BEC', 'Franc Belgia (konvertibel)'),
    'BEF' => new C('BEF', 'Franc Belgia'),
    'BEL' => new C('BEL', 'Franc Belgia (keuangan)'),
    'BGL' => new C('BGL', 'Hard Lev Bulgaria'),
    'BGM' => new C('BGM', 'Socialist Lev Bulgaria'),
    'BGN' => new C('BGN', 'Lev Bulgaria', plurals: 'Lev Bulgaria'),
    'BGO' => new C('BGO', 'Lev Bulgaria (1879–1952)', plurals: 'Lev Bulgaria (1879–1952)'),
    'BHD' => new C('BHD', 'Dinar Bahrain', plurals: 'Dinar Bahrain', minorUnits: 3),
    'BIF' => new C('BIF', 'Franc Burundi', plurals: 'Franc Burundi', minorUnits: 0),
    'BMD' => new C('BMD', 'Dolar Bermuda', narrow: '$', plurals: 'Dolar Bermuda'),
    'BND' => new C('BND', 'Dolar Brunei', narrow: '$', plurals: 'Dolar Brunei'),
    'BOB' => new C('BOB', 'Boliviano', narrow: 'Bs', plurals: 'Boliviano'),
    'BOL' => new C('BOL', 'Boliviano Bolivia (1863–1963)', plurals: 'Boliviano Bolivia (1863–1963)'),
    'BOP' => new C('BOP', 'Peso Bolivia'),
    'BOV' => new C('BOV', 'Mvdol Bolivia'),
    'BRB' => new C('BRB', 'Cruzeiro Baru Brasil (1967–1986)', plurals: 'Cruzeiro Baru Brasil (1967–1986)'),
    'BRC' => new C('BRC', 'Cruzado Brasil (1986–1989)', plurals: 'Cruzado Brasil (1986–1989)'),
    'BRE' => new C('BRE', 'Cruzeiro Brasil (1990–1993)', plurals: 'Cruzeiro Brasil (1990–1993)'),
    'BRL' => new C('BRL', 'Real Brasil', 'R$', narrow: 'R$', plurals: 'Real Brasil'),
    'BRN' => new C('BRN', 'Cruzado Baru Brasil (1989–1990)', plurals: 'Cruzado Baru Brasil (1989–1990)'),
    'BRR' => new C('BRR', 'Cruzeiro Brasil (1993–1994)', plurals: 'Cruzeiro Brasil (1993–1994)'),
    'BRZ' => new C('BRZ', 'Cruzeiro Brasil (1942–1967)', plurals: 'Cruzeiro Brasil (1942–1967)'),
    'BSD' => new C('BSD', 'Dolar Bahama', narrow: '$', plurals: 'Dolar Bahama'),
    'BTN' => new C('BTN', 'Ngultrum Bhutan', plurals: 'Ngultrum Bhutan'),
    'BUK' => new C('BUK', 'Kyat Burma'),
    'BWP' => new C('BWP', 'Pula Botswana', narrow: 'P', plurals: 'Pula Botswana'),
    'BYB' => new C('BYB', 'Rubel Baru Belarus (1994–1999)', plurals: 'Rubel Baru Belarus (1994–1999)'),
    'BYN' => new C('BYN', 'Rubel Belarusia', narrow: 'р.', plurals: 'Rubel Belarusia'),
    'BYR' => new C('BYR', 'Rubel Belarusia (2000–2016)', plurals: 'Rubel Belarusia (2000–2016)'),
    'BZD' => new C('BZD', 'Dolar Belize', narrow: '$', plurals: 'Dolar Belize'),
    'CAD' => new C('CAD', 'Dolar Kanada', 'CA$', narrow: '$', plurals: 'Dolar Kanada'),
    'CDF' => new C('CDF', 'Franc Kongo', plurals: 'Franc Kongo'),
    'CHE' => new C('CHE', 'Euro WIR'),
    'CHF' => new C('CHF', 'Franc Swiss', plurals: 'Franc Swiss'),
    'CHW' => new C('CHW', 'Franc WIR'),
    'CLE' => new C('CLE', 'Escudo Cile'),
    'CLF' => new C('CLF', 'Satuan Hitung (UF) Cile', minorUnits: 4),
    'CLP' => new C('CLP', 'Peso Cile', narrow: '$', plurals: 'Peso Cile', minorUnits: 0),
    'CNH' => new C('CNH', 'Yuan Tiongkok (luar negeri)', plurals: 'Yuan Tiongkok (luar negeri)'),
    'CNY' => new C('CNY', 'Yuan Tiongkok', 'CN¥', narrow: '¥', plurals: 'Yuan Tiongkok'),
    'COP' => new C('COP', 'Peso Kolombia', narrow: '$', plurals: 'Peso Kolombia'),
    'COU' => new C('COU', 'Unit Nilai Nyata Kolombia'),
    'CRC' => new C('CRC', 'Colon Kosta Rika', narrow: '₡', plurals: 'Colon Kosta Rika'),
    'CSD' => new C('CSD', 'Dinar Serbia (2002–2006)', plurals: 'Dinar Serbia (2002–2006)'),
    'CSK' => new C('CSK', 'Hard Koruna Cheska'),
    'CUC' => new C('CUC', 'Peso Konvertibel Kuba', narrow: '$', plurals: 'Peso Konvertibel Kuba'),
    'CUP' => new C('CUP', 'Peso Kuba', narrow: '$', plurals: 'Peso Kuba'),
    'CVE' => new C('CVE', 'Escudo Tanjung Verde', plurals: 'Escudo Tanjung Verde'),
    'CYP' => new C('CYP', 'Pound Siprus'),
    'CZK' => new C('CZK', 'Koruna Ceko', narrow: 'Kč', plurals: 'Koruna Ceko'),
    'DDM' => new C('DDM', 'Mark Jerman Timur'),
    'DEM' => new C('DEM', 'Mark Jerman'),
    'DJF' => new C('DJF', 'Franc Jibuti', plurals: 'Franc Jibuti', minorUnits: 0),
    'DKK' => new C('DKK', 'Krone Denmark', narrow: 'kr', plurals: 'Krone Denmark'),
    'DOP' => new C('DOP', 'Peso Dominika', narrow: '$', plurals: 'Peso Dominika'),
    'DZD' => new C('DZD', 'Dinar Aljazair', plurals: 'Dinar Aljazair'),
    'ECS' => new C('ECS', 'Sucre Ekuador'),
    'ECV' => new C('ECV', 'Satuan Nilai Tetap Ekuador'),
    'EEK' => new C('EEK', 'Kroon Estonia'),
    'EGP' => new C('EGP', 'Pound Mesir', narrow: 'E£', plurals: 'Pound Mesir'),
    'ERN' => new C('ERN', 'Nakfa Eritrea', plurals: 'Nakfa Eritrea'),
    'ESA' => new C('ESA', 'Peseta Spanyol (akun)'),
    'ESB' => new C('ESB', 'Peseta Spanyol (konvertibel)'),
    'ESP' => new C('ESP', 'Peseta Spanyol', narrow: '₧'),
    'ETB' => new C('ETB', 'Birr Etiopia', plurals: 'Birr Etiopia'),
    'EUR' => new C('EUR', 'Euro', '€', narrow: '€', plurals: 'Euro'),
    'FIM' => new C('FIM', 'Markka Finlandia'),
    'FJD' => new C('FJD', 'Dolar Fiji', narrow: '$', plurals: 'Dolar Fiji'),
    'FKP' => new C('FKP', 'Pound Kepulauan Falkland', narrow: '£', plurals: 'Pound Kepulauan Falkland'),
    'FRF' => new C('FRF', 'Franc Prancis'),
    'GBP' => new C('GBP', 'Pound Inggris', '£', narrow: '£', plurals: 'Pound Inggris'),
    'GEK' => new C('GEK', 'Kupon Larit Georgia'),
    'GEL' => new C('GEL', 'Lari Georgia', narrow: '₾', plurals: 'Lari Georgia'),
    'GHC' => new C('GHC', 'Cedi Ghana (1979–2007)', plurals: 'Cedi Ghana (1979–2007)'),
    'GHS' => new C('GHS', 'Cedi Ghana', narrow: 'GH₵', plurals: 'Cedi Ghana'),
    'GIP' => new C('GIP', 'Pound Gibraltar', narrow: '£', plurals: 'Pound Gibraltar'),
    'GMD' => new C('GMD', 'Dalasi Gambia', plurals: 'Dalasi Gambia'),
    'GNF' => new C('GNF', 'Franc Guinea', narrow: 'FG', plurals: 'Franc Guinea', minorUnits: 0),
    'GNS' => new C('GNS', 'Syli Guinea'),
    'GQE' => new C('GQE', 'Ekuele Guinea Ekuatorial'),
    'GRD' => new C('GRD', 'Drachma Yunani'),
    'GTQ' => new C('GTQ', 'Quetzal Guatemala', narrow: 'Q', plurals: 'Quetzal Guatemala'),
    'GWE' => new C('GWE', 'Escudo Guinea Portugal'),
    'GWP' => new C('GWP', 'Peso Guinea-Bissau'),
    'GYD' => new C('GYD', 'Dolar Guyana', narrow: '$', plurals: 'Dolar Guyana'),
    'HKD' => new C('HKD', 'Dolar Hong Kong', 'HK$', narrow: '$', plurals: 'Dolar Hong Kong'),
    'HNL' => new C('HNL', 'Lempira Honduras', narrow: 'L', plurals: 'Lempira Honduras'),
    'HRD' => new C('HRD', 'Dinar Kroasia'),
    'HRK' => new C('HRK', 'Kuna Kroasia', narrow: 'kn', plurals: 'Kuna Kroasia'),
    'HTG' => new C('HTG', 'Gourde Haiti', plurals: 'Gourde Haiti'),
    'HUF' => new C('HUF', 'Forint Hungaria', narrow: 'Ft', plurals: 'Forint Hungaria'),
    'IDR' => new C('IDR', 'Rupiah Indonesia', 'Rp', narrow: 'Rp', plurals: 'Rupiah Indonesia'),
    'IEP' => new C('IEP', 'Pound Irlandia'),
    'ILP' => new C('ILP', 'Pound Israel'),
    'ILR' => new C('ILR', 'Shekel Israel', plurals: 'Shekel Israel (1980–1985)'),
    'ILS' => new C('ILS', 'Shekel Baru Israel', '₪', narrow: '₪', plurals: 'Shekel Baru Israel'),
    'INR' => new C('INR', 'Rupee India', 'Rs', narrow: '₹', plurals: 'Rupee India'),
    'IQD' => new C('IQD', 'Dinar Irak', plurals: 'Dinar Irak', minorUnits: 3),
    'IRR' => new C('IRR', 'Rial Iran', plurals: 'Rial Iran'),
    'ISJ' => new C('ISJ', 'Krona Islandia (1918–1981)', plurals: 'Krona Islandia (1918–1981)'),
    'ISK' => new C('ISK', 'Krona Islandia', narrow: 'kr', plurals: 'Krona Islandia', minorUnits: 0),
    'ITL' => new C('ITL', 'Lira Italia'),
    'JMD' => new C('JMD', 'Dolar Jamaika', narrow: '$', plurals: 'Dolar Jamaika'),
    'JOD' => new C('JOD', 'Dinar Yordania', plurals: 'Dinar Yordania', minorUnits: 3),
    'JPY' => new C('JPY', 'Yen Jepang', 'JP¥', narrow: '¥', plurals: 'Yen Jepang', minorUnits: 0),
    'KES' => new C('KES', 'Shilling Kenya', plurals: 'Shilling Kenya'),
    'KGS' => new C('KGS', 'Som Kirgizstan', plurals: 'Som Kirgizstan'),
    'KHR' => new C('KHR', 'Riel Kamboja', narrow: '៛', plurals: 'Riel Kamboja'),
    'KMF' => new C('KMF', 'Franc Komoro', narrow: 'CF', plurals: 'Franc Komoro', minorUnits: 0),
    'KPW' => new C('KPW', 'Won Korea Utara', narrow: '₩', plurals: 'Won Korea Utara'),
    'KRH' => new C('KRH', 'Hwan Korea Selatan (1953–1962)', plurals: 'Hwan Korea Selatan (1953–1962)'),
    'KRO' => new C('KRO', 'Won Korea Selatan (1945–1953)', plurals: 'Won Korea Selatan (1945–1953)'),
    'KRW' => new C('KRW', 'Won Korea Selatan', '₩', narrow: '₩', plurals: 'Won Korea Selatan', minorUnits: 0),
    'KWD' => new C('KWD', 'Dinar Kuwait', plurals: 'Dinar Kuwait', minorUnits: 3),
    'KYD' => new C('KYD', 'Dolar Kepulauan Cayman', narrow: '$', plurals: 'Dolar Kepulauan Cayman'),
    'KZT' => new C('KZT', 'Tenge Kazakhstan', narrow: '₸', plurals: 'Tenge Kazakhstan'),
    'LAK' => new C('LAK', 'Kip Laos', narrow: '₭', plurals: 'Kip Laos'),
    'LBP' => new C('LBP', 'Pound Lebanon', narrow: 'L£', plurals: 'Pound Lebanon'),
    'LKR' => new C('LKR', 'Rupee Sri Lanka', narrow: 'Rs', plurals: 'Rupee Sri Lanka'),
    'LRD' => new C('LRD', 'Dolar Liberia', narrow: '$', plurals: 'Dolar Liberia'),
    'LSL' => new C('LSL', 'Loti Lesotho', plurals: 'Loti Lesotho'),
    'LTL' => new C('LTL', 'Litas Lituania', narrow: 'Lt', plurals: 'Litas Lituania'),
    'LTT' => new C('LTT', 'Talonas Lituania'),
    'LUC' => new C('LUC', 'Franc Konvertibel Luksemburg'),
    'LUF' => new C('LUF', 'Franc Luksemburg'),
    'LUL' => new C('LUL', 'Financial Franc Luksemburg'),
    'LVL' => new C('LVL', 'Lats Latvia', narrow: 'Ls', plurals: 'Lats Latvia'),
    'LVR' => new C('LVR', 'Rubel Latvia'),
    'LYD' => new C('LYD', 'Dinar Libya', plurals: 'Dinar Libya', minorUnits: 3),
    'MAD' => new C('MAD', 'Dirham Maroko', plurals: 'Dirham Maroko'),
    'MAF' => new C('MAF', 'Franc Maroko'),
    'MCF' => new C('MCF', 'Franc Monegasque'),
    'MDC' => new C('MDC', 'Cupon Moldova'),
    'MDL' => new C('MDL', 'Leu Moldova', plurals: 'Leu Moldova'),
    'MGA' => new C('MGA', 'Ariary Madagaskar', narrow: 'Ar', plurals: 'Ariary Madagaskar'),
    'MGF' => new C('MGF', 'Franc Malagasi'),
    'MKD' => new C('MKD', 'Denar Makedonia', plurals: 'Denar Makedonia'),
    'MKN' => new C('MKN', 'Denar Makedonia (1992–1993)', plurals: 'Denar Makedonia (1992–1993)'),
    'MLF' => new C('MLF', 'Franc Mali'),
    'MMK' => new C('MMK', 'Kyat Myanmar', narrow: 'K', plurals: 'Kyat Myanmar'),
    'MNT' => new C('MNT', 'Tugrik Mongolia', narrow: '₮', plurals: 'Tugrik Mongolia'),
    'MOP' => new C('MOP', 'Pataca Makau', plurals: 'Pataca Makau'),
    'MRO' => new C('MRO', 'Ouguiya Mauritania (1973–2017)', plurals: 'Ouguiya Mauritania (1973–2017)'),
    'MRU' => new C('MRU', 'Ouguiya Mauritania', plurals: 'Ouguiya Mauritania'),
    'MTL' => new C('MTL', 'Lira Malta'),
    'MTP' => new C('MTP', 'Pound Malta'),
    'MUR' => new C('MUR', 'Rupee Mauritius', narrow: 'Rs', plurals: 'Rupee Mauritius'),
    'MVP' => new C('MVP', 'Rufiyaa Maladewa (1947–1981)', plurals: 'Rufiyaa Maladewa (1947–1981)'),
    'MVR' => new C('MVR', 'Rufiyaa Maladewa', plurals: 'Rufiyaa Maladewa'),
    'MWK' => new C('MWK', 'Kwacha Malawi', plurals: 'Kwacha Malawi'),
    'MXN' => new C('MXN', 'Peso Meksiko', 'MX$', narrow: '$', plurals: 'Peso Meksiko'),
    'MXP' => new C('MXP', 'Peso Silver Meksiko (1861–1992)', plurals: 'Peso Perak Meksiko'),
    'MXV' => new C('MXV', 'Unit Investasi Meksiko'),
    'MYR' => new C('MYR', 'Ringgit Malaysia', narrow: 'RM', plurals: 'Ringgit Malaysia'),
    'MZE' => new C('MZE', 'Escudo Mozambik'),
    'MZM' => new C('MZM', 'Metical Mozambik (1980–2006)', plurals: 'Metical Mozambik (1980–2006)'),
    'MZN' => new C('MZN', 'Metical Mozambik', plurals: 'Metical Mozambik'),
    'NAD' => new C('NAD', 'Dolar Namibia', narrow: '$', plurals: 'Dolar Namibia'),
    'NGN' => new C('NGN', 'Naira Nigeria', narrow: '₦', plurals: 'Naira Nigeria'),
    'NIC' => new C('NIC', 'Cordoba Nikaragua (1988–1991)', plurals: 'Cordoba Nikaragua (1988–1991)'),
    'NIO' => new C('NIO', 'Cordoba Nikaragua', narrow: 'C$', plurals: 'Cordoba Nikaragua'),
    'NLG' => new C('NLG', 'Guilder Belanda'),
    'NOK' => new C('NOK', 'Krone Norwegia', narrow: 'kr', plurals: 'Krone Norwegia'),
    'NPR' => new C('NPR', 'Rupee Nepal', narrow: 'Rs', plurals: 'Rupee Nepal'),
    'NZD' => new C('NZD', 'Dolar Selandia Baru', 'NZ$', narrow: '$', plurals: 'Dolar Selandia Baru'),
    'OMR' => new C('OMR', 'Rial Oman', plurals: 'Rial Oman', minorUnits: 3),
    'PAB' => new C('PAB', 'Balboa Panama', plurals: 'Balboa Panama'),
    'PEI' => new C('PEI', 'Inti Peru'),
    'PEN' => new C('PEN', 'Sol Peru', plurals: 'Sol Peru'),
    'PES' => new C('PES', 'Sol Peru (1863–1965)', plurals: 'Sol Peru (1863–1965)'),
    'PGK' => new C('PGK', 'Kina Papua Nugini', plurals: 'Kina Papua Nugini'),
    'PHP' => new C('PHP', 'Peso Filipina', narrow: '₱', plurals: 'Peso Filipina'),
    'PKR' => new C('PKR', 'Rupee Pakistan', narrow: 'Rs', plurals: 'Rupee Pakistan'),
    'PLN' => new C('PLN', 'Zloty Polandia', narrow: 'zł', plurals: 'Zloty Polandia'),
    'PLZ' => new C('PLZ', 'Zloty Polandia (1950–1995)', plurals: 'Zloty Polandia (1950–1995)'),
    'PTE' => new C('PTE', 'Escudo Portugal'),
    'PYG' => new C('PYG', 'Guarani Paraguay', narrow: '₲', plurals: 'Guarani Paraguay', minorUnits: 0),
    'QAR' => new C('QAR', 'Rial Qatar', plurals: 'Rial Qatar'),
    'RHD' => new C('RHD', 'Dolar Rhodesia'),
    'ROL' => new C('ROL', 'Leu Rumania (1952–2006)', plurals: 'Leu Rumania (1952–2006)'),
    'RON' => new C('RON', 'Leu Rumania', narrow: 'lei', plurals: 'Leu Rumania'),
    'RSD' => new C('RSD', 'Dinar Serbia', plurals: 'Dinar Serbia'),
    'RUB' => new C('RUB', 'Rubel Rusia', narrow: '₽', plurals: 'Rubel Rusia'),
    'RUR' => new C('RUR', 'Rubel Rusia (1991–1998)', plurals: 'Rubel Rusia (1991–1998)'),
    'RWF' => new C('RWF', 'Franc Rwanda', narrow: 'RF', plurals: 'Franc Rwanda', minorUnits: 0),
    'SAR' => new C('SAR', 'Riyal Arab Saudi', plurals: 'Riyal Arab Saudi'),
    'SBD' => new C('SBD', 'Dolar Kepulauan Solomon', narrow: '$', plurals: 'Dolar Kepulauan Solomon'),
    'SCR' => new C('SCR', 'Rupee Seychelles', plurals: 'Rupee Seychelles'),
    'SDD' => new C('SDD', 'Dinar Sudan (1992–2007)', plurals: 'Dinar Sudan (1992–2007)'),
    'SDG' => new C('SDG', 'Pound Sudan', plurals: 'Pound Sudan'),
    'SDP' => new C('SDP', 'Pound Sudan (1957–1998)', plurals: 'Pound Sudan (1957–1998)'),
    'SEK' => new C('SEK', 'Krona Swedia', narrow: 'kr', plurals: 'Krona Swedia'),
    'SGD' => new C('SGD', 'Dolar Singapura', narrow: '$', plurals: 'Dolar Singapura'),
    'SHP' => new C('SHP', 'Pound Saint Helena', narrow: '£', plurals: 'Pound Saint Helena'),
    'SIT' => new C('SIT', 'Tolar Slovenia'),
    'SKK' => new C('SKK', 'Koruna Slovakia'),
    'SLL' => new C('SLL', 'Leone Sierra Leone', plurals: 'Leone Sierra Leone'),
    'SOS' => new C('SOS', 'Shilling Somalia', plurals: 'Shilling Somalia'),
    'SRD' => new C('SRD', 'Dolar Suriname', narrow: '$', plurals: 'Dolar Suriname'),
    'SRG' => new C('SRG', 'Guilder Suriname'),
    'SSP' => new C('SSP', 'Pound Sudan Selatan', narrow: '£', plurals: 'Pound Sudan Selatan'),
    'STD' => new C('STD', 'Dobra Sao Tome dan Principe (1977–2017)', plurals: 'Dobra Sao Tome dan Principe (1977–2017)'),
    'STN' => new C('STN', 'Dobra Sao Tome dan Principe', narrow: 'Db', plurals: 'Dobra Sao Tome dan Principe'),
    'SUR' => new C('SUR', 'Rubel Soviet'),
    'SVC' => new C('SVC', 'Colon El Savador'),
    'SYP' => new C('SYP', 'Pound Suriah', narrow: '£', plurals: 'Pound Suriah'),
    'SZL' => new C('SZL', 'Lilangeni Swaziland', plurals: 'Lilangeni Swaziland'),
    'THB' => new C('THB', 'Baht Thailand', '฿', narrow: '฿', plurals: 'Baht Thailand'),
    'TJR' => new C('TJR', 'Rubel Tajikistan'),
    'TJS' => new C('TJS', 'Somoni Tajikistan', plurals: 'Somoni Tajikistan'),
    'TMM' => new C('TMM', 'Manat Turkmenistan (1993–2009)', plurals: 'Manat Turkmenistan (1993–2009)'),
    'TMT' => new C('TMT', 'Manat Turkmenistan', plurals: 'Manat Turkmenistan'),
    'TND' => new C('TND', 'Dinar Tunisia', plurals: 'Dinar Tunisia', minorUnits: 3),
    'TOP' => new C('TOP', 'Paʻanga Tonga', narrow: 'T$', plurals: 'Paʻanga Tonga'),
    'TPE' => new C('TPE', 'Escudo Timor'),
    'TRL' => new C('TRL', 'Lira Turki (1922–2005)', plurals: 'Lira Turki (1922–2005)'),
    'TRY' => new C('TRY', 'Lira Turki', narrow: '₺', plurals: 'Lira Turki'),
    'TTD' => new C('TTD', 'Dolar Trinidad dan Tobago', narrow: '$', plurals: 'Dolar Trinidad dan Tobago'),
    'TWD' => new C('TWD', 'Dolar Baru Taiwan', 'NT$', narrow: 'NT$', plurals: 'Dolar Baru Taiwan'),
    'TZS' => new C('TZS', 'Shilling Tanzania', plurals: 'Shilling Tanzania'),
    'UAH' => new C('UAH', 'Hryvnia Ukraina', narrow: '₴', plurals: 'Hryvnia Ukraina'),
    'UAK' => new C('UAK', 'Karbovanet Ukraina'),
    'UGS' => new C('UGS', 'Shilling Uganda (1966–1987)', plurals: 'Shilling Uganda (1966–1987)'),
    'UGX' => new C('UGX', 'Shilling Uganda', plurals: 'Shilling Uganda', minorUnits: 0),
    'USD' => new C('USD', 'Dolar Amerika Serikat', 'US$', narrow: '$', plurals: 'Dolar Amerika Serikat'),
    'USN' => new C('USN', 'Dolar AS (Hari berikutnya)'),
    'USS' => new C('USS', 'Dolar AS (Hari yang sama)'),
    'UYI' => new C('UYI', 'Peso Uruguay (Unit Diindeks)', minorUnits: 0),
    'UYP' => new C('UYP', 'Peso Uruguay (1975–1993)', plurals: 'Peso Uruguay (1975–1993)'),
    'UYU' => new C('UYU', 'Peso Uruguay', narrow: '$', plurals: 'Peso Uruguay'),
    'UZS' => new C('UZS', 'Som Uzbekistan', plurals: 'Som Uzbekistan'),
    'VEB' => new C('VEB', 'Bolivar Venezuela (1871–2008)', plurals: 'Bolivar Venezuela (1871–2008)'),
    'VEF' => new C('VEF', 'Bolivar Venezuela (2008–2018)', narrow: 'Bs', plurals: 'Bolivar Venezuela (2008–2018)'),
    'VES' => new C('VES', 'Bolivar Venezuela', plurals: 'Bolivar Venezuela'),
    'VND' => new C('VND', 'Dong Vietnam', '₫', narrow: '₫', plurals: 'Dong Vietnam', minorUnits: 0),
    'VNN' => new C('VNN', 'Dong Vietnam (1978–1985)', plurals: 'Dong Vietnam (1978–1985)'),
    'VUV' => new C('VUV', 'Vatu Vanuatu', plurals: 'Vatu Vanuatu', minorUnits: 0),
    'WST' => new C('WST', 'Tala Samoa', plurals: 'Tala Samoa'),
    'XAF' => new C('XAF', 'Franc CFA Afrika Tengah', 'FCFA', plurals: 'Franc CFA Afrika Tengah', minorUnits: 0),
    'XAG' => new C('XAG', 'Silver'),
    'XAU' => new C('XAU', 'Emas'),
    'XBA' => new C('XBA', 'Unit Gabungan Eropa'),
    'XBB' => new C('XBB', 'Unit Keuangan Eropa'),
    'XBC' => new C('XBC', 'Satuan Hitung Eropa (XBC)'),
    'XBD' => new C('XBD', 'Satuan Hitung Eropa (XBD)'),
    'XCD' => new C('XCD', 'Dolar Karibia Timur', 'EC$', narrow: '$', plurals: 'Dolar Karibia Timur'),
    'XDR' => new C('XDR', 'Hak Khusus Menggambar'),
    'XEU' => new C('XEU', 'Satuan Mata Uang Eropa'),
    'XFO' => new C('XFO', 'Franc Gold Perancis'),
    'XFU' => new C('XFU', 'Franc UIC Perancis'),
    'XOF' => new C('XOF', 'Franc CFA Afrika Barat', "F\u{202F}CFA", plurals: 'Franc CFA Afrika Barat', minorUnits: 0),
    'XPD' => new C('XPD', 'Palladium'),
    'XPF' => new C('XPF', 'Franc CFP', 'CFPF', plurals: 'Franc CFP', minorUnits: 0),
    'XPT' => new C('XPT', 'Platinum'),
    'XRE' => new C('XRE', 'Dana RINET'),
    'XTS' => new C('XTS', 'Kode Mata Uang Pengujian'),
    'XXX' => new C('XXX', 'Mata Uang Tidak Dikenal', plurals: '(mata uang tidak dikenal)'),
    'YDD' => new C('YDD', 'Dinar Yaman'),
    'YER' => new C('YER', 'Rial Yaman', plurals: 'Rial Yaman'),
    'YUD' => new C('YUD', 'Hard Dinar Yugoslavia (1966–1990)', plurals: 'Dinar Keras Yugoslavia'),
    'YUM' => new C('YUM', 'Dinar Baru Yugoslavia (1994–2002)', plurals: 'Dinar Baru Yugoslavia (1994–2002)'),
    'YUN' => new C('YUN', 'Dinar Konvertibel Yugoslavia (1990–1992)', plurals: 'Dinar Konvertibel Yugoslavia (1990–1992)'),
    'YUR' => new C('YUR', 'Dinar Reformasi Yugoslavia (1992–1993)', plurals: 'Dinar Reformasi Yugoslavia (1992–1993)'),
    'ZAL' => new C('ZAL', 'Rand Afrika Selatan (Keuangan)'),
    'ZAR' => new C('ZAR', 'Rand Afrika Selatan', narrow: 'R', plurals: 'Rand Afrika Selatan'),
    'ZMK' => new C('ZMK', 'Kwacha Zambia (1968–2012)', plurals: 'Kwacha Zambia (1968–2012)'),
    'ZMW' => new C('ZMW', 'Kwacha Zambia', narrow: 'ZK', plurals: 'Kwacha Zambia'),
    'ZRN' => new C('ZRN', 'Zaire Baru Zaire (1993–1998)', plurals: 'Zaire Baru Zaire (1993–1998)'),
    'ZRZ' => new C('ZRZ', 'Zaire Zaire (1971–1993)', plurals: 'Zaire Zaire (1971–1993)'),
    'ZWD' => new C('ZWD', 'Dolar Zimbabwe (1980–2008)', plurals: 'Dolar Zimbabwe (1980–2008)'),
    'ZWL' => new C('ZWL', 'Dolar Zimbabwe (2009)'),
    'ZWR' => new C('ZWR', 'Dolar Zimbabwe (2008)'),
];
