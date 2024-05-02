<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'Andorran Peseta', plurals: ['one' => 'Andorran peseta', 'other' => 'Andorran pesetas']),
    'AED' => new C('AED', 'United Arab Emirates Dirham', plurals: ['one' => 'UAE dirham', 'other' => 'UAE dirhams']),
    'AFA' => new C('AFA', 'Afghan Afghani (1927–2002)', plurals: ['one' => 'Afghan afghani (1927–2002)', 'other' => 'Afghan afghanis (1927–2002)']),
    'AFN' => new C('AFN', 'Afghan Afghani', narrow: '؋', plurals: ['one' => 'Afghan Afghani', 'other' => 'Afghan Afghanis']),
    'ALK' => new C('ALK', 'Albanian Lek (1946–1965)', plurals: ['one' => 'Albanian lek (1946–1965)', 'other' => 'Albanian lekë (1946–1965)']),
    'ALL' => new C('ALL', 'Albanian Lek', plurals: ['one' => 'Albanian lek', 'other' => 'Albanian lekë']),
    'AMD' => new C('AMD', 'Armenian Dram', narrow: '֏', plurals: ['one' => 'Armenian dram', 'other' => 'Armenian drams']),
    'ANG' => new C('ANG', 'Netherlands Antillean Guilder', plurals: ['one' => 'Netherlands Antillean guilder', 'other' => 'Netherlands Antillean guilders']),
    'AOA' => new C('AOA', 'Angolan Kwanza', narrow: 'Kz', plurals: ['one' => 'Angolan kwanza', 'other' => 'Angolan kwanzas']),
    'AOK' => new C('AOK', 'Angolan Kwanza (1977–1991)', plurals: ['one' => 'Angolan kwanza (1977–1991)', 'other' => 'Angolan kwanzas (1977–1991)']),
    'AON' => new C('AON', 'Angolan New Kwanza (1990–2000)', plurals: ['one' => 'Angolan new kwanza (1990–2000)', 'other' => 'Angolan new kwanzas (1990–2000)']),
    'AOR' => new C('AOR', 'Angolan Readjusted Kwanza (1995–1999)', plurals: ['one' => 'Angolan readjusted kwanza (1995–1999)', 'other' => 'Angolan readjusted kwanzas (1995–1999)']),
    'ARA' => new C('ARA', 'Argentine Austral', plurals: ['one' => 'Argentine austral', 'other' => 'Argentine australs']),
    'ARL' => new C('ARL', 'Argentine Peso Ley (1970–1983)', plurals: ['one' => 'Argentine peso ley (1970–1983)', 'other' => 'Argentine pesos ley (1970–1983)']),
    'ARM' => new C('ARM', 'Argentine Peso (1881–1970)', plurals: ['one' => 'Argentine peso (1881–1970)', 'other' => 'Argentine pesos (1881–1970)']),
    'ARP' => new C('ARP', 'Argentine Peso (1983–1985)', plurals: ['one' => 'Argentine peso (1983–1985)', 'other' => 'Argentine pesos (1983–1985)']),
    'ARS' => new C('ARS', 'Argentine Peso', narrow: '$', plurals: ['one' => 'Argentine peso', 'other' => 'Argentine pesos']),
    'ATS' => new C('ATS', 'Austrian Schilling', plurals: ['one' => 'Austrian schilling', 'other' => 'Austrian schillings']),
    'AUD' => new C('AUD', 'Australian Dollar', 'A$', '$', ['one' => 'Australian dollar', 'other' => 'Australian dollars']),
    'AWG' => new C('AWG', 'Aruban Florin', plurals: 'Aruban florin'),
    'AZM' => new C('AZM', 'Azerbaijani Manat (1993–2006)', plurals: ['one' => 'Azerbaijani manat (1993–2006)', 'other' => 'Azerbaijani manats (1993–2006)']),
    'AZN' => new C('AZN', 'Azerbaijani Manat', narrow: '₼', plurals: ['one' => 'Azerbaijani manat', 'other' => 'Azerbaijani manats']),
    'BAD' => new C('BAD', 'Bosnia-Herzegovina Dinar (1992–1994)', plurals: ['one' => 'Bosnia-Herzegovina dinar (1992–1994)', 'other' => 'Bosnia-Herzegovina dinars (1992–1994)']),
    'BAM' => new C('BAM', 'Bosnia-Herzegovina Convertible Mark', narrow: 'KM', plurals: ['one' => 'Bosnia-Herzegovina convertible mark', 'other' => 'Bosnia-Herzegovina convertible marks']),
    'BAN' => new C('BAN', 'Bosnia-Herzegovina New Dinar (1994–1997)', plurals: ['one' => 'Bosnia-Herzegovina new dinar (1994–1997)', 'other' => 'Bosnia-Herzegovina new dinars (1994–1997)']),
    'BBD' => new C('BBD', 'Barbadian Dollar', narrow: '$', plurals: ['one' => 'Barbadian dollar', 'other' => 'Barbadian dollars']),
    'BDT' => new C('BDT', 'Bangladeshi Taka', narrow: '৳', plurals: ['one' => 'Bangladeshi taka', 'other' => 'Bangladeshi takas']),
    'BEC' => new C('BEC', 'Belgian Franc (convertible)', plurals: ['one' => 'Belgian franc (convertible)', 'other' => 'Belgian francs (convertible)']),
    'BEF' => new C('BEF', 'Belgian Franc', plurals: ['one' => 'Belgian franc', 'other' => 'Belgian francs']),
    'BEL' => new C('BEL', 'Belgian Franc (financial)', plurals: ['one' => 'Belgian franc (financial)', 'other' => 'Belgian francs (financial)']),
    'BGL' => new C('BGL', 'Bulgarian Hard Lev', plurals: ['one' => 'Bulgarian hard lev', 'other' => 'Bulgarian hard leva']),
    'BGM' => new C('BGM', 'Bulgarian Socialist Lev', plurals: ['one' => 'Bulgarian socialist lev', 'other' => 'Bulgarian socialist leva']),
    'BGN' => new C('BGN', 'Bulgarian Lev', plurals: ['one' => 'Bulgarian lev', 'other' => 'Bulgarian leva']),
    'BGO' => new C('BGO', 'Bulgarian Lev (1879–1952)', plurals: ['one' => 'Bulgarian lev (1879–1952)', 'other' => 'Bulgarian leva (1879–1952)']),
    'BHD' => new C('BHD', 'Bahraini Dinar', plurals: ['one' => 'Bahraini dinar', 'other' => 'Bahraini dinars'], minorUnits: 3),
    'BIF' => new C('BIF', 'Burundian Franc', plurals: ['one' => 'Burundian franc', 'other' => 'Burundian francs'], minorUnits: 0),
    'BMD' => new C('BMD', 'Bermudan Dollar', narrow: '$', plurals: ['one' => 'Bermudan dollar', 'other' => 'Bermudan dollars']),
    'BND' => new C('BND', 'Brunei Dollar', narrow: '$', plurals: ['one' => 'Brunei dollar', 'other' => 'Brunei dollars']),
    'BOB' => new C('BOB', 'Bolivian Boliviano', narrow: 'Bs', plurals: ['one' => 'Bolivian boliviano', 'other' => 'Bolivian bolivianos']),
    'BOL' => new C('BOL', 'Bolivian Boliviano (1863–1963)', plurals: ['one' => 'Bolivian boliviano (1863–1963)', 'other' => 'Bolivian bolivianos (1863–1963)']),
    'BOP' => new C('BOP', 'Bolivian Peso', plurals: ['one' => 'Bolivian peso', 'other' => 'Bolivian pesos']),
    'BOV' => new C('BOV', 'Bolivian Mvdol', plurals: ['one' => 'Bolivian mvdol', 'other' => 'Bolivian mvdols']),
    'BRB' => new C('BRB', 'Brazilian New Cruzeiro (1967–1986)', plurals: ['one' => 'Brazilian new cruzeiro (1967–1986)', 'other' => 'Brazilian new cruzeiros (1967–1986)']),
    'BRC' => new C('BRC', 'Brazilian Cruzado (1986–1989)', plurals: ['one' => 'Brazilian cruzado (1986–1989)', 'other' => 'Brazilian cruzados (1986–1989)']),
    'BRE' => new C('BRE', 'Brazilian Cruzeiro (1990–1993)', plurals: ['one' => 'Brazilian cruzeiro (1990–1993)', 'other' => 'Brazilian cruzeiros (1990–1993)']),
    'BRL' => new C('BRL', 'Brazilian Real', 'R$', 'R$', ['one' => 'Brazilian real', 'other' => 'Brazilian reals']),
    'BRN' => new C('BRN', 'Brazilian New Cruzado (1989–1990)', plurals: ['one' => 'Brazilian new cruzado (1989–1990)', 'other' => 'Brazilian new cruzados (1989–1990)']),
    'BRR' => new C('BRR', 'Brazilian Cruzeiro (1993–1994)', plurals: ['one' => 'Brazilian cruzeiro (1993–1994)', 'other' => 'Brazilian cruzeiros (1993–1994)']),
    'BRZ' => new C('BRZ', 'Brazilian Cruzeiro (1942–1967)', plurals: ['one' => 'Brazilian cruzeiro (1942–1967)', 'other' => 'Brazilian cruzeiros (1942–1967)']),
    'BSD' => new C('BSD', 'Bahamian Dollar', narrow: '$', plurals: ['one' => 'Bahamian dollar', 'other' => 'Bahamian dollars']),
    'BTN' => new C('BTN', 'Bhutanese Ngultrum', plurals: ['one' => 'Bhutanese ngultrum', 'other' => 'Bhutanese ngultrums']),
    'BUK' => new C('BUK', 'Burmese Kyat', plurals: ['one' => 'Burmese kyat', 'other' => 'Burmese kyats']),
    'BWP' => new C('BWP', 'Botswanan Pula', narrow: 'P', plurals: ['one' => 'Botswanan pula', 'other' => 'Botswanan pulas']),
    'BYB' => new C('BYB', 'Belarusian Ruble (1994–1999)', plurals: ['one' => 'Belarusian ruble (1994–1999)', 'other' => 'Belarusian rubles (1994–1999)']),
    'BYN' => new C('BYN', 'Belarusian Ruble', plurals: ['one' => 'Belarusian ruble', 'other' => 'Belarusian rubles']),
    'BYR' => new C('BYR', 'Belarusian Ruble (2000–2016)', plurals: ['one' => 'Belarusian ruble (2000–2016)', 'other' => 'Belarusian rubles (2000–2016)']),
    'BZD' => new C('BZD', 'Belize Dollar', narrow: '$', plurals: ['one' => 'Belize dollar', 'other' => 'Belize dollars']),
    'CAD' => new C('CAD', 'Canadian Dollar', 'CA$', '$', ['one' => 'Canadian dollar', 'other' => 'Canadian dollars']),
    'CDF' => new C('CDF', 'Congolese Franc', plurals: ['one' => 'Congolese franc', 'other' => 'Congolese francs']),
    'CHE' => new C('CHE', 'WIR Euro', plurals: ['one' => 'WIR euro', 'other' => 'WIR euros']),
    'CHF' => new C('CHF', 'Swiss Franc', plurals: ['one' => 'Swiss franc', 'other' => 'Swiss francs']),
    'CHW' => new C('CHW', 'WIR Franc', plurals: ['one' => 'WIR franc', 'other' => 'WIR francs']),
    'CLE' => new C('CLE', 'Chilean Escudo', plurals: ['one' => 'Chilean escudo', 'other' => 'Chilean escudos']),
    'CLF' => new C('CLF', 'Chilean Unit of Account (UF)', plurals: ['one' => 'Chilean unit of account (UF)', 'other' => 'Chilean units of account (UF)'], minorUnits: 4),
    'CLP' => new C('CLP', 'Chilean Peso', narrow: '$', plurals: ['one' => 'Chilean peso', 'other' => 'Chilean pesos'], minorUnits: 0),
    'CNH' => new C('CNH', 'Chinese Yuan (offshore)', plurals: 'Chinese yuan (offshore)'),
    'CNX' => new C('CNX', 'Chinese People’s Bank Dollar', plurals: ['one' => 'Chinese People’s Bank dollar', 'other' => 'Chinese People’s Bank dollars']),
    'CNY' => new C('CNY', 'Chinese Yuan', 'CN¥', '¥', 'Chinese yuan'),
    'COP' => new C('COP', 'Colombian Peso', narrow: '$', plurals: ['one' => 'Colombian peso', 'other' => 'Colombian pesos']),
    'COU' => new C('COU', 'Colombian Real Value Unit', plurals: ['one' => 'Colombian real value unit', 'other' => 'Colombian real value units']),
    'CRC' => new C('CRC', 'Costa Rican Colón', narrow: '₡', plurals: ['one' => 'Costa Rican colón', 'other' => 'Costa Rican colóns']),
    'CSD' => new C('CSD', 'Serbian Dinar (2002–2006)', plurals: ['one' => 'Serbian dinar (2002–2006)', 'other' => 'Serbian dinars (2002–2006)']),
    'CSK' => new C('CSK', 'Czechoslovak Hard Koruna', plurals: ['one' => 'Czechoslovak hard koruna', 'other' => 'Czechoslovak hard korunas']),
    'CUC' => new C('CUC', 'Cuban Convertible Peso', narrow: '$', plurals: ['one' => 'Cuban convertible peso', 'other' => 'Cuban convertible pesos']),
    'CUP' => new C('CUP', 'Cuban Peso', narrow: '$', plurals: ['one' => 'Cuban peso', 'other' => 'Cuban pesos']),
    'CVE' => new C('CVE', 'Cape Verdean Escudo', plurals: ['one' => 'Cape Verdean escudo', 'other' => 'Cape Verdean escudos']),
    'CYP' => new C('CYP', 'Cypriot Pound', plurals: ['one' => 'Cypriot pound', 'other' => 'Cypriot pounds']),
    'CZK' => new C('CZK', 'Czech Koruna', narrow: 'Kč', plurals: ['one' => 'Czech koruna', 'other' => 'Czech korunas']),
    'DDM' => new C('DDM', 'East German Mark', plurals: ['one' => 'East German mark', 'other' => 'East German marks']),
    'DEM' => new C('DEM', 'German Mark', plurals: ['one' => 'German mark', 'other' => 'German marks']),
    'DJF' => new C('DJF', 'Djiboutian Franc', plurals: ['one' => 'Djiboutian franc', 'other' => 'Djiboutian francs'], minorUnits: 0),
    'DKK' => new C('DKK', 'Danish Krone', narrow: 'kr', plurals: ['one' => 'Danish krone', 'other' => 'Danish kroner']),
    'DOP' => new C('DOP', 'Dominican Peso', narrow: '$', plurals: ['one' => 'Dominican peso', 'other' => 'Dominican pesos']),
    'DZD' => new C('DZD', 'Algerian Dinar', plurals: ['one' => 'Algerian dinar', 'other' => 'Algerian dinars']),
    'ECS' => new C('ECS', 'Ecuadorian Sucre', plurals: ['one' => 'Ecuadorian sucre', 'other' => 'Ecuadorian sucres']),
    'ECV' => new C('ECV', 'Ecuadorian Unit of Constant Value', plurals: ['one' => 'Ecuadorian unit of constant value', 'other' => 'Ecuadorian units of constant value']),
    'EEK' => new C('EEK', 'Estonian Kroon', plurals: ['one' => 'Estonian kroon', 'other' => 'Estonian kroons']),
    'EGP' => new C('EGP', 'Egyptian Pound', narrow: 'E£', plurals: ['one' => 'Egyptian pound', 'other' => 'Egyptian pounds']),
    'ERN' => new C('ERN', 'Eritrean Nakfa', plurals: ['one' => 'Eritrean nakfa', 'other' => 'Eritrean nakfas']),
    'ESA' => new C('ESA', 'Spanish Peseta (A account)', plurals: ['one' => 'Spanish peseta (A account)', 'other' => 'Spanish pesetas (A account)']),
    'ESB' => new C('ESB', 'Spanish Peseta (convertible account)', plurals: ['one' => 'Spanish peseta (convertible account)', 'other' => 'Spanish pesetas (convertible account)']),
    'ESP' => new C('ESP', 'Spanish Peseta', narrow: '₧', plurals: ['one' => 'Spanish peseta', 'other' => 'Spanish pesetas']),
    'ETB' => new C('ETB', 'Ethiopian Birr', plurals: ['one' => 'Ethiopian birr', 'other' => 'Ethiopian birrs']),
    'EUR' => new C('EUR', 'Euro', '€', '€', ['one' => 'euro', 'other' => 'euros']),
    'FIM' => new C('FIM', 'Finnish Markka', plurals: ['one' => 'Finnish markka', 'other' => 'Finnish markkas']),
    'FJD' => new C('FJD', 'Fijian Dollar', narrow: '$', plurals: ['one' => 'Fijian dollar', 'other' => 'Fijian dollars']),
    'FKP' => new C('FKP', 'Falkland Islands Pound', narrow: '£', plurals: ['one' => 'Falkland Islands pound', 'other' => 'Falkland Islands pounds']),
    'FRF' => new C('FRF', 'French Franc', plurals: ['one' => 'French franc', 'other' => 'French francs']),
    'GBP' => new C('GBP', 'British Pound', '£', '£', ['one' => 'British pound', 'other' => 'British pounds']),
    'GEK' => new C('GEK', 'Georgian Kupon Larit', plurals: ['one' => 'Georgian kupon larit', 'other' => 'Georgian kupon larits']),
    'GEL' => new C('GEL', 'Georgian Lari', narrow: '₾', plurals: ['one' => 'Georgian lari', 'other' => 'Georgian laris']),
    'GHC' => new C('GHC', 'Ghanaian Cedi (1979–2007)', plurals: ['one' => 'Ghanaian cedi (1979–2007)', 'other' => 'Ghanaian cedis (1979–2007)']),
    'GHS' => new C('GHS', 'Ghanaian Cedi', narrow: 'GH₵', plurals: ['one' => 'Ghanaian cedi', 'other' => 'Ghanaian cedis']),
    'GIP' => new C('GIP', 'Gibraltar Pound', narrow: '£', plurals: ['one' => 'Gibraltar pound', 'other' => 'Gibraltar pounds']),
    'GMD' => new C('GMD', 'Gambian Dalasi', plurals: ['one' => 'Gambian dalasi', 'other' => 'Gambian dalasis']),
    'GNF' => new C('GNF', 'Guinean Franc', narrow: 'FG', plurals: ['one' => 'Guinean franc', 'other' => 'Guinean francs'], minorUnits: 0),
    'GNS' => new C('GNS', 'Guinean Syli', plurals: ['one' => 'Guinean syli', 'other' => 'Guinean sylis']),
    'GQE' => new C('GQE', 'Equatorial Guinean Ekwele', plurals: 'Equatorial Guinean ekwele'),
    'GRD' => new C('GRD', 'Greek Drachma', plurals: ['one' => 'Greek drachma', 'other' => 'Greek drachmas']),
    'GTQ' => new C('GTQ', 'Guatemalan Quetzal', narrow: 'Q', plurals: ['one' => 'Guatemalan quetzal', 'other' => 'Guatemalan quetzals']),
    'GWE' => new C('GWE', 'Portuguese Guinea Escudo', plurals: ['one' => 'Portuguese Guinea escudo', 'other' => 'Portuguese Guinea escudos']),
    'GWP' => new C('GWP', 'Guinea-Bissau Peso', plurals: ['one' => 'Guinea-Bissau peso', 'other' => 'Guinea-Bissau pesos']),
    'GYD' => new C('GYD', 'Guyanaese Dollar', narrow: '$', plurals: ['one' => 'Guyanaese dollar', 'other' => 'Guyanaese dollars']),
    'HKD' => new C('HKD', 'Hong Kong Dollar', 'HK$', '$', ['one' => 'Hong Kong dollar', 'other' => 'Hong Kong dollars']),
    'HNL' => new C('HNL', 'Honduran Lempira', narrow: 'L', plurals: ['one' => 'Honduran lempira', 'other' => 'Honduran lempiras']),
    'HRD' => new C('HRD', 'Croatian Dinar', plurals: ['one' => 'Croatian dinar', 'other' => 'Croatian dinars']),
    'HRK' => new C('HRK', 'Croatian Kuna', narrow: 'kn', plurals: ['one' => 'Croatian kuna', 'other' => 'Croatian kunas']),
    'HTG' => new C('HTG', 'Haitian Gourde', plurals: ['one' => 'Haitian gourde', 'other' => 'Haitian gourdes']),
    'HUF' => new C('HUF', 'Hungarian Forint', narrow: 'Ft', plurals: ['one' => 'Hungarian forint', 'other' => 'Hungarian forints']),
    'IDR' => new C('IDR', 'Indonesian Rupiah', narrow: 'Rp', plurals: ['one' => 'Indonesian rupiah', 'other' => 'Indonesian rupiahs']),
    'IEP' => new C('IEP', 'Irish Pound', plurals: ['one' => 'Irish pound', 'other' => 'Irish pounds']),
    'ILP' => new C('ILP', 'Israeli Pound', plurals: ['one' => 'Israeli pound', 'other' => 'Israeli pounds']),
    'ILR' => new C('ILR', 'Israeli Shekel (1980–1985)', plurals: ['one' => 'Israeli shekel (1980–1985)', 'other' => 'Israeli shekels (1980–1985)']),
    'ILS' => new C('ILS', 'Israeli New Shekel', '₪', '₪', ['one' => 'Israeli new shekel', 'other' => 'Israeli new shekels']),
    'INR' => new C('INR', 'Indian Rupee', '₹', '₹', ['one' => 'Indian rupee', 'other' => 'Indian rupees']),
    'IQD' => new C('IQD', 'Iraqi Dinar', plurals: ['one' => 'Iraqi dinar', 'other' => 'Iraqi dinars'], minorUnits: 3),
    'IRR' => new C('IRR', 'Iranian Rial', plurals: ['one' => 'Iranian rial', 'other' => 'Iranian rials']),
    'ISJ' => new C('ISJ', 'Icelandic Króna (1918–1981)', plurals: ['one' => 'Icelandic króna (1918–1981)', 'other' => 'Icelandic krónur (1918–1981)']),
    'ISK' => new C('ISK', 'Icelandic Króna', narrow: 'kr', plurals: ['one' => 'Icelandic króna', 'other' => 'Icelandic krónur'], minorUnits: 0),
    'ITL' => new C('ITL', 'Italian Lira', plurals: ['one' => 'Italian lira', 'other' => 'Italian liras']),
    'JMD' => new C('JMD', 'Jamaican Dollar', narrow: '$', plurals: ['one' => 'Jamaican dollar', 'other' => 'Jamaican dollars']),
    'JOD' => new C('JOD', 'Jordanian Dinar', plurals: ['one' => 'Jordanian dinar', 'other' => 'Jordanian dinars'], minorUnits: 3),
    'JPY' => new C('JPY', 'Japanese Yen', '¥', '¥', 'Japanese yen', 0),
    'KES' => new C('KES', 'Kenyan Shilling', plurals: ['one' => 'Kenyan shilling', 'other' => 'Kenyan shillings']),
    'KGS' => new C('KGS', 'Kyrgystani Som', narrow: '⃀', plurals: ['one' => 'Kyrgystani som', 'other' => 'Kyrgystani soms']),
    'KHR' => new C('KHR', 'Cambodian Riel', narrow: '៛', plurals: ['one' => 'Cambodian riel', 'other' => 'Cambodian riels']),
    'KMF' => new C('KMF', 'Comorian Franc', narrow: 'CF', plurals: ['one' => 'Comorian franc', 'other' => 'Comorian francs'], minorUnits: 0),
    'KPW' => new C('KPW', 'North Korean Won', narrow: '₩', plurals: 'North Korean won'),
    'KRH' => new C('KRH', 'South Korean Hwan (1953–1962)', plurals: 'South Korean hwan (1953–1962)'),
    'KRO' => new C('KRO', 'South Korean Won (1945–1953)', plurals: 'South Korean won (1945–1953)'),
    'KRW' => new C('KRW', 'South Korean Won', '₩', '₩', 'South Korean won', 0),
    'KWD' => new C('KWD', 'Kuwaiti Dinar', plurals: ['one' => 'Kuwaiti dinar', 'other' => 'Kuwaiti dinars'], minorUnits: 3),
    'KYD' => new C('KYD', 'Cayman Islands Dollar', narrow: '$', plurals: ['one' => 'Cayman Islands dollar', 'other' => 'Cayman Islands dollars']),
    'KZT' => new C('KZT', 'Kazakhstani Tenge', narrow: '₸', plurals: ['one' => 'Kazakhstani tenge', 'other' => 'Kazakhstani tenges']),
    'LAK' => new C('LAK', 'Laotian Kip', narrow: '₭', plurals: ['one' => 'Laotian kip', 'other' => 'Laotian kips']),
    'LBP' => new C('LBP', 'Lebanese Pound', narrow: 'L£', plurals: ['one' => 'Lebanese pound', 'other' => 'Lebanese pounds']),
    'LKR' => new C('LKR', 'Sri Lankan Rupee', narrow: 'Rs', plurals: ['one' => 'Sri Lankan rupee', 'other' => 'Sri Lankan rupees']),
    'LRD' => new C('LRD', 'Liberian Dollar', narrow: '$', plurals: ['one' => 'Liberian dollar', 'other' => 'Liberian dollars']),
    'LSL' => new C('LSL', 'Lesotho Loti', plurals: ['one' => 'Lesotho loti', 'other' => 'Lesotho lotis']),
    'LTL' => new C('LTL', 'Lithuanian Litas', narrow: 'Lt', plurals: ['one' => 'Lithuanian litas', 'other' => 'Lithuanian litai']),
    'LTT' => new C('LTT', 'Lithuanian Talonas', plurals: ['one' => 'Lithuanian talonas', 'other' => 'Lithuanian talonases']),
    'LUC' => new C('LUC', 'Luxembourgian Convertible Franc', plurals: ['one' => 'Luxembourgian convertible franc', 'other' => 'Luxembourgian convertible francs']),
    'LUF' => new C('LUF', 'Luxembourgian Franc', plurals: ['one' => 'Luxembourgian franc', 'other' => 'Luxembourgian francs']),
    'LUL' => new C('LUL', 'Luxembourg Financial Franc', plurals: ['one' => 'Luxembourg financial franc', 'other' => 'Luxembourg financial francs']),
    'LVL' => new C('LVL', 'Latvian Lats', narrow: 'Ls', plurals: ['one' => 'Latvian lats', 'other' => 'Latvian lati']),
    'LVR' => new C('LVR', 'Latvian Ruble', plurals: ['one' => 'Latvian ruble', 'other' => 'Latvian rubles']),
    'LYD' => new C('LYD', 'Libyan Dinar', plurals: ['one' => 'Libyan dinar', 'other' => 'Libyan dinars'], minorUnits: 3),
    'MAD' => new C('MAD', 'Moroccan Dirham', plurals: ['one' => 'Moroccan dirham', 'other' => 'Moroccan dirhams']),
    'MAF' => new C('MAF', 'Moroccan Franc', plurals: ['one' => 'Moroccan franc', 'other' => 'Moroccan francs']),
    'MCF' => new C('MCF', 'Monegasque Franc', plurals: ['one' => 'Monegasque franc', 'other' => 'Monegasque francs']),
    'MDC' => new C('MDC', 'Moldovan Cupon', plurals: 'Moldovan cupon'),
    'MDL' => new C('MDL', 'Moldovan Leu', plurals: ['one' => 'Moldovan leu', 'other' => 'Moldovan lei']),
    'MGA' => new C('MGA', 'Malagasy Ariary', narrow: 'Ar', plurals: ['one' => 'Malagasy ariary', 'other' => 'Malagasy ariaries']),
    'MGF' => new C('MGF', 'Malagasy Franc', plurals: ['one' => 'Malagasy franc', 'other' => 'Malagasy francs']),
    'MKD' => new C('MKD', 'Macedonian Denar', plurals: ['one' => 'Macedonian denar', 'other' => 'Macedonian denari']),
    'MKN' => new C('MKN', 'Macedonian Denar (1992–1993)', plurals: ['one' => 'Macedonian denar (1992–1993)', 'other' => 'Macedonian denari (1992–1993)']),
    'MLF' => new C('MLF', 'Malian Franc', plurals: ['one' => 'Malian franc', 'other' => 'Malian francs']),
    'MMK' => new C('MMK', 'Myanmar Kyat', narrow: 'K', plurals: ['one' => 'Myanmar kyat', 'other' => 'Myanmar kyats']),
    'MNT' => new C('MNT', 'Mongolian Tugrik', narrow: '₮', plurals: ['one' => 'Mongolian tugrik', 'other' => 'Mongolian tugriks']),
    'MOP' => new C('MOP', 'Macanese Pataca', plurals: ['one' => 'Macanese pataca', 'other' => 'Macanese patacas']),
    'MRO' => new C('MRO', 'Mauritanian Ouguiya (1973–2017)', plurals: ['one' => 'Mauritanian ouguiya (1973–2017)', 'other' => 'Mauritanian ouguiyas (1973–2017)']),
    'MRU' => new C('MRU', 'Mauritanian Ouguiya', plurals: ['one' => 'Mauritanian ouguiya', 'other' => 'Mauritanian ouguiyas']),
    'MTL' => new C('MTL', 'Maltese Lira', plurals: 'Maltese lira'),
    'MTP' => new C('MTP', 'Maltese Pound', plurals: ['one' => 'Maltese pound', 'other' => 'Maltese pounds']),
    'MUR' => new C('MUR', 'Mauritian Rupee', narrow: 'Rs', plurals: ['one' => 'Mauritian rupee', 'other' => 'Mauritian rupees']),
    'MVP' => new C('MVP', 'Maldivian Rupee (1947–1981)', plurals: ['one' => 'Maldivian rupee (1947–1981)', 'other' => 'Maldivian rupees (1947–1981)']),
    'MVR' => new C('MVR', 'Maldivian Rufiyaa', plurals: ['one' => 'Maldivian rufiyaa', 'other' => 'Maldivian rufiyaas']),
    'MWK' => new C('MWK', 'Malawian Kwacha', plurals: ['one' => 'Malawian kwacha', 'other' => 'Malawian kwachas']),
    'MXN' => new C('MXN', 'Mexican Peso', 'MX$', '$', ['one' => 'Mexican peso', 'other' => 'Mexican pesos']),
    'MXP' => new C('MXP', 'Mexican Silver Peso (1861–1992)', plurals: ['one' => 'Mexican silver peso (1861–1992)', 'other' => 'Mexican silver pesos (1861–1992)']),
    'MXV' => new C('MXV', 'Mexican Investment Unit', plurals: ['one' => 'Mexican investment unit', 'other' => 'Mexican investment units']),
    'MYR' => new C('MYR', 'Malaysian Ringgit', narrow: 'RM', plurals: ['one' => 'Malaysian ringgit', 'other' => 'Malaysian ringgits']),
    'MZE' => new C('MZE', 'Mozambican Escudo', plurals: ['one' => 'Mozambican escudo', 'other' => 'Mozambican escudos']),
    'MZM' => new C('MZM', 'Mozambican Metical (1980–2006)', plurals: ['one' => 'Mozambican metical (1980–2006)', 'other' => 'Mozambican meticals (1980–2006)']),
    'MZN' => new C('MZN', 'Mozambican Metical', plurals: ['one' => 'Mozambican metical', 'other' => 'Mozambican meticals']),
    'NAD' => new C('NAD', 'Namibian Dollar', narrow: '$', plurals: ['one' => 'Namibian dollar', 'other' => 'Namibian dollars']),
    'NGN' => new C('NGN', 'Nigerian Naira', narrow: '₦', plurals: ['one' => 'Nigerian naira', 'other' => 'Nigerian nairas']),
    'NIC' => new C('NIC', 'Nicaraguan Córdoba (1988–1991)', plurals: ['one' => 'Nicaraguan córdoba (1988–1991)', 'other' => 'Nicaraguan córdobas (1988–1991)']),
    'NIO' => new C('NIO', 'Nicaraguan Córdoba', narrow: 'C$', plurals: ['one' => 'Nicaraguan córdoba', 'other' => 'Nicaraguan córdobas']),
    'NLG' => new C('NLG', 'Dutch Guilder', plurals: ['one' => 'Dutch guilder', 'other' => 'Dutch guilders']),
    'NOK' => new C('NOK', 'Norwegian Krone', narrow: 'kr', plurals: ['one' => 'Norwegian krone', 'other' => 'Norwegian kroner']),
    'NPR' => new C('NPR', 'Nepalese Rupee', narrow: 'Rs', plurals: ['one' => 'Nepalese rupee', 'other' => 'Nepalese rupees']),
    'NZD' => new C('NZD', 'New Zealand Dollar', 'NZ$', '$', ['one' => 'New Zealand dollar', 'other' => 'New Zealand dollars']),
    'OMR' => new C('OMR', 'Omani Rial', plurals: ['one' => 'Omani rial', 'other' => 'Omani rials'], minorUnits: 3),
    'PAB' => new C('PAB', 'Panamanian Balboa', plurals: ['one' => 'Panamanian balboa', 'other' => 'Panamanian balboas']),
    'PEI' => new C('PEI', 'Peruvian Inti', plurals: ['one' => 'Peruvian inti', 'other' => 'Peruvian intis']),
    'PEN' => new C('PEN', 'Peruvian Sol', plurals: ['one' => 'Peruvian sol', 'other' => 'Peruvian soles']),
    'PES' => new C('PES', 'Peruvian Sol (1863–1965)', plurals: ['one' => 'Peruvian sol (1863–1965)', 'other' => 'Peruvian soles (1863–1965)']),
    'PGK' => new C('PGK', 'Papua New Guinean Kina', plurals: 'Papua New Guinean kina'),
    'PHP' => new C('PHP', 'Philippine Peso', '₱', '₱', ['one' => 'Philippine peso', 'other' => 'Philippine pesos']),
    'PKR' => new C('PKR', 'Pakistani Rupee', narrow: 'Rs', plurals: ['one' => 'Pakistani rupee', 'other' => 'Pakistani rupees']),
    'PLN' => new C('PLN', 'Polish Zloty', narrow: 'zł', plurals: ['one' => 'Polish zloty', 'other' => 'Polish zlotys']),
    'PLZ' => new C('PLZ', 'Polish Zloty (1950–1995)', plurals: ['one' => 'Polish zloty (PLZ)', 'other' => 'Polish zlotys (PLZ)']),
    'PTE' => new C('PTE', 'Portuguese Escudo', plurals: ['one' => 'Portuguese escudo', 'other' => 'Portuguese escudos']),
    'PYG' => new C('PYG', 'Paraguayan Guarani', narrow: '₲', plurals: ['one' => 'Paraguayan guarani', 'other' => 'Paraguayan guaranis'], minorUnits: 0),
    'QAR' => new C('QAR', 'Qatari Riyal', plurals: ['one' => 'Qatari riyal', 'other' => 'Qatari riyals']),
    'RHD' => new C('RHD', 'Rhodesian Dollar', plurals: ['one' => 'Rhodesian dollar', 'other' => 'Rhodesian dollars']),
    'ROL' => new C('ROL', 'Romanian Leu (1952–2006)', plurals: ['one' => 'Romanian leu (1952–2006)', 'other' => 'Romanian Lei (1952–2006)']),
    'RON' => new C('RON', 'Romanian Leu', narrow: 'lei', plurals: ['one' => 'Romanian leu', 'other' => 'Romanian lei']),
    'RSD' => new C('RSD', 'Serbian Dinar', plurals: ['one' => 'Serbian dinar', 'other' => 'Serbian dinars']),
    'RUB' => new C('RUB', 'Russian Ruble', narrow: '₽', plurals: ['one' => 'Russian ruble', 'other' => 'Russian rubles']),
    'RUR' => new C('RUR', 'Russian Ruble (1991–1998)', plurals: ['one' => 'Russian ruble (1991–1998)', 'other' => 'Russian rubles (1991–1998)']),
    'RWF' => new C('RWF', 'Rwandan Franc', narrow: 'RF', plurals: ['one' => 'Rwandan franc', 'other' => 'Rwandan francs'], minorUnits: 0),
    'SAR' => new C('SAR', 'Saudi Riyal', plurals: ['one' => 'Saudi riyal', 'other' => 'Saudi riyals']),
    'SBD' => new C('SBD', 'Solomon Islands Dollar', narrow: '$', plurals: ['one' => 'Solomon Islands dollar', 'other' => 'Solomon Islands dollars']),
    'SCR' => new C('SCR', 'Seychellois Rupee', plurals: ['one' => 'Seychellois rupee', 'other' => 'Seychellois rupees']),
    'SDD' => new C('SDD', 'Sudanese Dinar (1992–2007)', plurals: ['one' => 'Sudanese dinar (1992–2007)', 'other' => 'Sudanese dinars (1992–2007)']),
    'SDG' => new C('SDG', 'Sudanese Pound', plurals: ['one' => 'Sudanese pound', 'other' => 'Sudanese pounds']),
    'SDP' => new C('SDP', 'Sudanese Pound (1957–1998)', plurals: ['one' => 'Sudanese pound (1957–1998)', 'other' => 'Sudanese pounds (1957–1998)']),
    'SEK' => new C('SEK', 'Swedish Krona', narrow: 'kr', plurals: ['one' => 'Swedish krona', 'other' => 'Swedish kronor']),
    'SGD' => new C('SGD', 'Singapore Dollar', narrow: '$', plurals: ['one' => 'Singapore dollar', 'other' => 'Singapore dollars']),
    'SHP' => new C('SHP', 'St. Helena Pound', narrow: '£', plurals: ['one' => 'St. Helena pound', 'other' => 'St. Helena pounds']),
    'SIT' => new C('SIT', 'Slovenian Tolar', plurals: ['one' => 'Slovenian tolar', 'other' => 'Slovenian tolars']),
    'SKK' => new C('SKK', 'Slovak Koruna', plurals: ['one' => 'Slovak koruna', 'other' => 'Slovak korunas']),
    'SLE' => new C('SLE', 'Sierra Leonean Leone', plurals: ['one' => 'Sierra Leonean leone', 'other' => 'Sierra Leonean leones']),
    'SLL' => new C('SLL', 'Sierra Leonean Leone (1964—2022)', plurals: ['one' => 'Sierra Leonean leone (1964—2022)', 'other' => 'Sierra Leonean leones (1964—2022)']),
    'SOS' => new C('SOS', 'Somali Shilling', plurals: ['one' => 'Somali shilling', 'other' => 'Somali shillings']),
    'SRD' => new C('SRD', 'Surinamese Dollar', narrow: '$', plurals: ['one' => 'Surinamese dollar', 'other' => 'Surinamese dollars']),
    'SRG' => new C('SRG', 'Surinamese Guilder', plurals: ['one' => 'Surinamese guilder', 'other' => 'Surinamese guilders']),
    'SSP' => new C('SSP', 'South Sudanese Pound', narrow: '£', plurals: ['one' => 'South Sudanese pound', 'other' => 'South Sudanese pounds']),
    'STD' => new C('STD', 'São Tomé & Príncipe Dobra (1977–2017)', plurals: ['one' => 'São Tomé & Príncipe dobra (1977–2017)', 'other' => 'São Tomé & Príncipe dobras (1977–2017)']),
    'STN' => new C('STN', 'São Tomé & Príncipe Dobra', narrow: 'Db', plurals: ['one' => 'São Tomé & Príncipe dobra', 'other' => 'São Tomé & Príncipe dobras']),
    'SUR' => new C('SUR', 'Soviet Rouble', plurals: ['one' => 'Soviet rouble', 'other' => 'Soviet roubles']),
    'SVC' => new C('SVC', 'Salvadoran Colón', plurals: ['one' => 'Salvadoran colón', 'other' => 'Salvadoran colones']),
    'SYP' => new C('SYP', 'Syrian Pound', narrow: '£', plurals: ['one' => 'Syrian pound', 'other' => 'Syrian pounds']),
    'SZL' => new C('SZL', 'Swazi Lilangeni', plurals: ['one' => 'Swazi lilangeni', 'other' => 'Swazi emalangeni']),
    'THB' => new C('THB', 'Thai Baht', narrow: '฿', plurals: 'Thai baht'),
    'TJR' => new C('TJR', 'Tajikistani Ruble', plurals: ['one' => 'Tajikistani ruble', 'other' => 'Tajikistani rubles']),
    'TJS' => new C('TJS', 'Tajikistani Somoni', plurals: ['one' => 'Tajikistani somoni', 'other' => 'Tajikistani somonis']),
    'TMM' => new C('TMM', 'Turkmenistani Manat (1993–2009)', plurals: 'Turkmenistani manat (1993–2009)'),
    'TMT' => new C('TMT', 'Turkmenistani Manat', plurals: 'Turkmenistani manat'),
    'TND' => new C('TND', 'Tunisian Dinar', plurals: ['one' => 'Tunisian dinar', 'other' => 'Tunisian dinars'], minorUnits: 3),
    'TOP' => new C('TOP', 'Tongan Paʻanga', narrow: 'T$', plurals: 'Tongan paʻanga'),
    'TPE' => new C('TPE', 'Timorese Escudo', plurals: ['one' => 'Timorese escudo', 'other' => 'Timorese escudos']),
    'TRL' => new C('TRL', 'Turkish Lira (1922–2005)', plurals: ['one' => 'Turkish lira (1922–2005)', 'other' => 'Turkish Lira (1922–2005)']),
    'TRY' => new C('TRY', 'Turkish Lira', narrow: '₺', plurals: ['one' => 'Turkish lira', 'other' => 'Turkish Lira']),
    'TTD' => new C('TTD', 'Trinidad & Tobago Dollar', narrow: '$', plurals: ['one' => 'Trinidad & Tobago dollar', 'other' => 'Trinidad & Tobago dollars']),
    'TWD' => new C('TWD', 'New Taiwan Dollar', 'NT$', '$', ['one' => 'New Taiwan dollar', 'other' => 'New Taiwan dollars']),
    'TZS' => new C('TZS', 'Tanzanian Shilling', plurals: ['one' => 'Tanzanian shilling', 'other' => 'Tanzanian shillings']),
    'UAH' => new C('UAH', 'Ukrainian Hryvnia', narrow: '₴', plurals: ['one' => 'Ukrainian hryvnia', 'other' => 'Ukrainian hryvnias']),
    'UAK' => new C('UAK', 'Ukrainian Karbovanets', plurals: ['one' => 'Ukrainian karbovanets', 'other' => 'Ukrainian karbovantsiv']),
    'UGS' => new C('UGS', 'Ugandan Shilling (1966–1987)', plurals: ['one' => 'Ugandan shilling (1966–1987)', 'other' => 'Ugandan shillings (1966–1987)']),
    'UGX' => new C('UGX', 'Ugandan Shilling', plurals: ['one' => 'Ugandan shilling', 'other' => 'Ugandan shillings'], minorUnits: 0),
    'USD' => new C('USD', 'US Dollar', '$', '$', ['one' => 'US dollar', 'other' => 'US dollars']),
    'USN' => new C('USN', 'US Dollar (Next day)', plurals: ['one' => 'US dollar (next day)', 'other' => 'US dollars (next day)']),
    'USS' => new C('USS', 'US Dollar (Same day)', plurals: ['one' => 'US dollar (same day)', 'other' => 'US dollars (same day)']),
    'UYI' => new C('UYI', 'Uruguayan Peso (Indexed Units)', plurals: ['one' => 'Uruguayan peso (indexed units)', 'other' => 'Uruguayan pesos (indexed units)'], minorUnits: 0),
    'UYP' => new C('UYP', 'Uruguayan Peso (1975–1993)', plurals: ['one' => 'Uruguayan peso (1975–1993)', 'other' => 'Uruguayan pesos (1975–1993)']),
    'UYU' => new C('UYU', 'Uruguayan Peso', narrow: '$', plurals: ['one' => 'Uruguayan peso', 'other' => 'Uruguayan pesos']),
    'UYW' => new C('UYW', 'Uruguayan Nominal Wage Index Unit', plurals: ['one' => 'Uruguayan nominal wage index unit', 'other' => 'Uruguayan nominal wage index units'], minorUnits: 4),
    'UZS' => new C('UZS', 'Uzbekistani Som', plurals: 'Uzbekistani som'),
    'VEB' => new C('VEB', 'Venezuelan Bolívar (1871–2008)', plurals: ['one' => 'Venezuelan bolívar (1871–2008)', 'other' => 'Venezuelan bolívars (1871–2008)']),
    'VED' => new C('VED', 'Bolívar Soberano', plurals: ['one' => 'Bolívar Soberano', 'other' => 'Bolívar Soberanos']),
    'VEF' => new C('VEF', 'Venezuelan Bolívar (2008–2018)', narrow: 'Bs', plurals: ['one' => 'Venezuelan bolívar (2008–2018)', 'other' => 'Venezuelan bolívars (2008–2018)']),
    'VES' => new C('VES', 'Venezuelan Bolívar', plurals: ['one' => 'Venezuelan bolívar', 'other' => 'Venezuelan bolívars']),
    'VND' => new C('VND', 'Vietnamese Dong', '₫', '₫', 'Vietnamese dong', 0),
    'VNN' => new C('VNN', 'Vietnamese Dong (1978–1985)', plurals: 'Vietnamese dong (1978–1985)'),
    'VUV' => new C('VUV', 'Vanuatu Vatu', plurals: ['one' => 'Vanuatu vatu', 'other' => 'Vanuatu vatus'], minorUnits: 0),
    'WST' => new C('WST', 'Samoan Tala', plurals: 'Samoan tala'),
    'XAF' => new C('XAF', 'Central African CFA Franc', 'FCFA', plurals: ['one' => 'Central African CFA franc', 'other' => 'Central African CFA francs'], minorUnits: 0),
    'XAG' => new C('XAG', 'Silver', plurals: ['one' => 'troy ounce of silver', 'other' => 'troy ounces of silver']),
    'XAU' => new C('XAU', 'Gold', plurals: ['one' => 'troy ounce of gold', 'other' => 'troy ounces of gold']),
    'XBA' => new C('XBA', 'European Composite Unit', plurals: ['one' => 'European composite unit', 'other' => 'European composite units']),
    'XBB' => new C('XBB', 'European Monetary Unit', plurals: ['one' => 'European monetary unit', 'other' => 'European monetary units']),
    'XBC' => new C('XBC', 'European Unit of Account (XBC)', plurals: ['one' => 'European unit of account (XBC)', 'other' => 'European units of account (XBC)']),
    'XBD' => new C('XBD', 'European Unit of Account (XBD)', plurals: ['one' => 'European unit of account (XBD)', 'other' => 'European units of account (XBD)']),
    'XCD' => new C('XCD', 'East Caribbean Dollar', 'EC$', '$', ['one' => 'East Caribbean dollar', 'other' => 'East Caribbean dollars']),
    'XCG' => new C('XCG', 'Caribbean guilder', 'Cg.', plurals: ['one' => 'Caribbean guilder', 'other' => 'Caribbean guilders']),
    'XDR' => new C('XDR', 'Special Drawing Rights', plurals: 'special drawing rights'),
    'XEU' => new C('XEU', 'European Currency Unit', plurals: ['one' => 'European currency unit', 'other' => 'European currency units']),
    'XFO' => new C('XFO', 'French Gold Franc', plurals: ['one' => 'French gold franc', 'other' => 'French gold francs']),
    'XFU' => new C('XFU', 'French UIC-Franc', plurals: ['one' => 'French UIC-franc', 'other' => 'French UIC-francs']),
    'XOF' => new C('XOF', 'West African CFA Franc', "F\u{202F}CFA", plurals: ['one' => 'West African CFA franc', 'other' => 'West African CFA francs'], minorUnits: 0),
    'XPD' => new C('XPD', 'Palladium', plurals: ['one' => 'troy ounce of palladium', 'other' => 'troy ounces of palladium']),
    'XPF' => new C('XPF', 'CFP Franc', 'CFPF', plurals: ['one' => 'CFP franc', 'other' => 'CFP francs'], minorUnits: 0),
    'XPT' => new C('XPT', 'Platinum', plurals: ['one' => 'troy ounce of platinum', 'other' => 'troy ounces of platinum']),
    'XRE' => new C('XRE', 'RINET Funds', plurals: ['one' => 'RINET Funds unit', 'other' => 'RINET Funds units']),
    'XSU' => new C('XSU', 'Sucre', plurals: ['one' => 'Sucre', 'other' => 'Sucres']),
    'XTS' => new C('XTS', 'Testing Currency Code', plurals: ['one' => 'Testing Currency unit', 'other' => 'Testing Currency units']),
    'XUA' => new C('XUA', 'ADB Unit of Account', plurals: ['one' => 'ADB unit of account', 'other' => 'ADB units of account']),
    'XXX' => new C('XXX', 'Unknown Currency', '¤', plurals: ['one' => '(unknown unit of currency)', 'other' => '(unknown currency)']),
    'YDD' => new C('YDD', 'Yemeni Dinar', plurals: ['one' => 'Yemeni dinar', 'other' => 'Yemeni dinars']),
    'YER' => new C('YER', 'Yemeni Rial', plurals: ['one' => 'Yemeni rial', 'other' => 'Yemeni rials']),
    'YUD' => new C('YUD', 'Yugoslavian Hard Dinar (1966–1990)', plurals: ['one' => 'Yugoslavian hard dinar (1966–1990)', 'other' => 'Yugoslavian hard dinars (1966–1990)']),
    'YUM' => new C('YUM', 'Yugoslavian New Dinar (1994–2002)', plurals: ['one' => 'Yugoslavian new dinar (1994–2002)', 'other' => 'Yugoslavian new dinars (1994–2002)']),
    'YUN' => new C('YUN', 'Yugoslavian Convertible Dinar (1990–1992)', plurals: ['one' => 'Yugoslavian convertible dinar (1990–1992)', 'other' => 'Yugoslavian convertible dinars (1990–1992)']),
    'YUR' => new C('YUR', 'Yugoslavian Reformed Dinar (1992–1993)', plurals: ['one' => 'Yugoslavian reformed dinar (1992–1993)', 'other' => 'Yugoslavian reformed dinars (1992–1993)']),
    'ZAL' => new C('ZAL', 'South African Rand (financial)', plurals: ['one' => 'South African rand (financial)', 'other' => 'South African rands (financial)']),
    'ZAR' => new C('ZAR', 'South African Rand', narrow: 'R', plurals: 'South African rand'),
    'ZMK' => new C('ZMK', 'Zambian Kwacha (1968–2012)', plurals: ['one' => 'Zambian kwacha (1968–2012)', 'other' => 'Zambian kwachas (1968–2012)']),
    'ZMW' => new C('ZMW', 'Zambian Kwacha', narrow: 'ZK', plurals: ['one' => 'Zambian kwacha', 'other' => 'Zambian kwachas']),
    'ZRN' => new C('ZRN', 'Zairean New Zaire (1993–1998)', plurals: ['one' => 'Zairean new zaire (1993–1998)', 'other' => 'Zairean new zaires (1993–1998)']),
    'ZRZ' => new C('ZRZ', 'Zairean Zaire (1971–1993)', plurals: ['one' => 'Zairean zaire (1971–1993)', 'other' => 'Zairean zaires (1971–1993)']),
    'ZWD' => new C('ZWD', 'Zimbabwean Dollar (1980–2008)', plurals: ['one' => 'Zimbabwean dollar (1980–2008)', 'other' => 'Zimbabwean dollars (1980–2008)']),
    'ZWL' => new C('ZWL', 'Zimbabwean Dollar (2009)', plurals: ['one' => 'Zimbabwean dollar (2009)', 'other' => 'Zimbabwean dollars (2009)']),
    'ZWR' => new C('ZWR', 'Zimbabwean Dollar (2008)', plurals: ['one' => 'Zimbabwean dollar (2008)', 'other' => 'Zimbabwean dollars (2008)']),
];
