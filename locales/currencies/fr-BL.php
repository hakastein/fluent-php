<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'peseta andorrane', plurals: ['one' => 'peseta andorrane', 'other' => 'pesetas andorranes']),
    'AED' => new C('AED', 'dirham des Émirats arabes unis', plurals: ['one' => 'dirham des Émirats arabes unis', 'other' => 'dirhams des Émirats arabes unis']),
    'AFA' => new C('AFA', 'afghani (1927–2002)', plurals: ['one' => 'afghani (1927–2002)', 'other' => 'afghanis (1927–2002)']),
    'AFN' => new C('AFN', 'afghani afghan', plurals: ['one' => 'afghani afghan', 'other' => 'afghanis afghan']),
    'ALK' => new C('ALK', 'lek albanais (1947–1961)', plurals: ['one' => 'lek albanais (1947–1961)', 'other' => 'leks albanais (1947–1961)']),
    'ALL' => new C('ALL', 'lek albanais', plurals: ['one' => 'lek albanais', 'other' => 'leks albanais']),
    'AMD' => new C('AMD', 'dram arménien', plurals: ['one' => 'dram arménien', 'other' => 'drams arméniens']),
    'ANG' => new C('ANG', 'florin antillais', plurals: ['one' => 'florin antillais', 'other' => 'florins antillais']),
    'AOA' => new C('AOA', 'kwanza angolais', plurals: ['one' => 'kwanza angolais', 'other' => 'kwanzas angolais']),
    'AOK' => new C('AOK', 'kwanza angolais (1977–1990)', plurals: ['one' => 'kwanza angolais (1977–1990)', 'other' => 'kwanzas angolais (1977–1990)']),
    'AON' => new C('AON', 'nouveau kwanza angolais (1990–2000)', plurals: ['one' => 'nouveau kwanza angolais (1990–2000)', 'other' => 'nouveaux kwanzas angolais (1990–2000)']),
    'AOR' => new C('AOR', 'kwanza angolais réajusté (1995–1999)', plurals: ['one' => 'kwanza angolais réajusté (1995–1999)', 'other' => 'kwanzas angolais réajustés (1995–1999)']),
    'ARA' => new C('ARA', 'austral argentin', plurals: ['one' => 'austral argentin', 'other' => 'australs argentins']),
    'ARL' => new C('ARL'),
    'ARM' => new C('ARM'),
    'ARP' => new C('ARP', 'peso argentin (1983–1985)', plurals: ['one' => 'peso argentin (1983–1985)', 'other' => 'pesos argentins (1983–1985)']),
    'ARS' => new C('ARS', 'peso argentin', '$AR', plurals: ['one' => 'peso argentin', 'other' => 'pesos argentins']),
    'ATS' => new C('ATS', 'schilling autrichien', plurals: ['one' => 'schilling autrichien', 'other' => 'schillings autrichiens']),
    'AUD' => new C('AUD', 'dollar australien', '$AU', plurals: ['one' => 'dollar australien', 'other' => 'dollars australiens']),
    'AWG' => new C('AWG', 'florin arubais', plurals: ['one' => 'florin arubais', 'other' => 'florins arubais']),
    'AZM' => new C('AZM', 'manat azéri (1993–2006)', plurals: ['one' => 'manat azéri (1993–2006)', 'other' => 'manats azéris (1993–2006)']),
    'AZN' => new C('AZN', 'manat azéri', plurals: ['one' => 'manat azéri', 'other' => 'manats azéris']),
    'BAD' => new C('BAD', 'dinar bosniaque', plurals: ['one' => 'dinar bosniaque', 'other' => 'dinars bosniaques']),
    'BAM' => new C('BAM', 'mark convertible bosniaque', plurals: ['one' => 'mark convertible bosniaque', 'other' => 'marks convertibles bosniaques']),
    'BAN' => new C('BAN'),
    'BBD' => new C('BBD', 'dollar barbadien', plurals: ['one' => 'dollar barbadien', 'other' => 'dollars barbadiens']),
    'BDT' => new C('BDT', 'taka bangladeshi', plurals: ['one' => 'taka bangladeshi', 'other' => 'takas bangladeshis']),
    'BEC' => new C('BEC', 'franc belge (convertible)', plurals: ['one' => 'franc belge (convertible)', 'other' => 'francs belges (convertibles)']),
    'BEF' => new C('BEF', 'franc belge', 'FB', plurals: ['one' => 'franc belge', 'other' => 'francs belges']),
    'BEL' => new C('BEL', 'franc belge (financier)', plurals: ['one' => 'franc belge (financier)', 'other' => 'francs belges (financiers)']),
    'BGL' => new C('BGL', 'lev bulgare (1962–1999)', plurals: ['one' => 'lev bulgare (1962–1999)', 'other' => 'levs bulgares (1962–1999)']),
    'BGM' => new C('BGM'),
    'BGN' => new C('BGN', 'lev bulgare', plurals: ['one' => 'lev bulgare', 'other' => 'levs bulgares']),
    'BGO' => new C('BGO'),
    'BHD' => new C('BHD', 'dinar bahreïni', plurals: ['one' => 'dinar bahreïni', 'other' => 'dinars bahreïnis'], minorUnits: 3),
    'BIF' => new C('BIF', 'franc burundais', plurals: ['one' => 'franc burundais', 'other' => 'francs burundais'], minorUnits: 0),
    'BMD' => new C('BMD', 'dollar bermudien', '$BM', plurals: ['one' => 'dollar bermudien', 'other' => 'dollars bermudiens']),
    'BND' => new C('BND', 'dollar brunéien', '$BN', plurals: ['one' => 'dollar brunéien', 'other' => 'dollars brunéiens']),
    'BOB' => new C('BOB', 'boliviano bolivien', plurals: ['one' => 'boliviano bolivien', 'other' => 'bolivianos boliviens']),
    'BOL' => new C('BOL'),
    'BOP' => new C('BOP', 'peso bolivien', plurals: ['one' => 'peso bolivien', 'other' => 'pesos boliviens']),
    'BOV' => new C('BOV', 'mvdol bolivien', plurals: ['one' => 'mvdol bolivien', 'other' => 'mvdols boliviens']),
    'BRB' => new C('BRB', 'nouveau cruzeiro brésilien (1967–1986)', plurals: ['one' => 'nouveau cruzeiro brésilien (1967–1986)', 'other' => 'nouveaux cruzeiros brésiliens (1967–1986)']),
    'BRC' => new C('BRC', 'cruzado brésilien (1986–1989)', plurals: ['one' => 'cruzado brésilien (1986–1989)', 'other' => 'cruzados brésiliens (1986–1989)']),
    'BRE' => new C('BRE', 'cruzeiro brésilien (1990–1993)', plurals: ['one' => 'cruzeiro brésilien (1990–1993)', 'other' => 'cruzeiros brésiliens (1990–1993)']),
    'BRL' => new C('BRL', 'réal brésilien', 'R$', plurals: ['one' => 'réal brésilien', 'other' => 'réals brésiliens']),
    'BRN' => new C('BRN', 'nouveau cruzado', plurals: ['one' => 'nouveau cruzado brésilien (1989–1990)', 'other' => 'nouveaux cruzados brésiliens (1989–1990)']),
    'BRR' => new C('BRR', 'cruzeiro', plurals: ['one' => 'cruzeiro réal brésilien (1993–1994)', 'other' => 'cruzeiros réals brésiliens (1993–1994)']),
    'BRZ' => new C('BRZ'),
    'BSD' => new C('BSD', 'dollar bahaméen', plurals: ['one' => 'dollar bahaméen', 'other' => 'dollars bahaméens']),
    'BTN' => new C('BTN', 'ngultrum bouthanais', plurals: ['one' => 'ngultrum bouthanais', 'other' => 'ngultrums bouthanais']),
    'BUK' => new C('BUK', 'kyat birman', plurals: ['one' => 'kyat birman', 'other' => 'kyats birmans']),
    'BWP' => new C('BWP', 'pula botswanais', plurals: ['one' => 'pula botswanais', 'other' => 'pulas botswanais']),
    'BYB' => new C('BYB', 'nouveau rouble biélorusse (1994–1999)', plurals: ['one' => 'nouveau rouble biélorusse (1994–1999)', 'other' => 'nouveaux roubles biélorusses (1994–1999)']),
    'BYN' => new C('BYN', 'rouble biélorusse', plurals: ['one' => 'rouble biélorusse', 'other' => 'roubles biélorusses']),
    'BYR' => new C('BYR', 'rouble biélorusse (2000–2016)', plurals: ['one' => 'rouble biélorusse (2000–2016)', 'other' => 'roubles biélorusses (2000–2016)']),
    'BZD' => new C('BZD', 'dollar bélizéen', '$BZ', plurals: ['one' => 'dollar bélizéen', 'other' => 'dollars bélizéens']),
    'CAD' => new C('CAD', 'dollar canadien', '$CA', plurals: ['one' => 'dollar canadien', 'other' => 'dollars canadiens']),
    'CDF' => new C('CDF', 'franc congolais', plurals: ['one' => 'franc congolais', 'other' => 'francs congolais']),
    'CHE' => new C('CHE', 'euro WIR', plurals: ['one' => 'euro WIR', 'other' => 'euros WIR']),
    'CHF' => new C('CHF', 'franc suisse', plurals: ['one' => 'franc suisse', 'other' => 'francs suisses']),
    'CHW' => new C('CHW', 'franc WIR', plurals: ['one' => 'franc WIR', 'other' => 'francs WIR']),
    'CLE' => new C('CLE'),
    'CLF' => new C('CLF', 'unité d’investissement chilienne', plurals: ['one' => 'unité d’investissement chilienne', 'other' => 'unités d’investissement chiliennes'], minorUnits: 4),
    'CLP' => new C('CLP', 'peso chilien', '$CL', plurals: ['one' => 'peso chilien', 'other' => 'pesos chiliens'], minorUnits: 0),
    'CNH' => new C('CNH', 'yuan chinois (zone extracôtière)', plurals: ['one' => 'yuan chinois (zone extracôtière)', 'other' => 'yuans chinois (zone extracôtière)']),
    'CNX' => new C('CNX'),
    'CNY' => new C('CNY', 'yuan renminbi chinois', plurals: ['one' => 'yuan renminbi chinois', 'other' => 'yuans renminbi chinois']),
    'COP' => new C('COP', 'peso colombien', '$CO', plurals: ['one' => 'peso colombien', 'other' => 'pesos colombiens']),
    'COU' => new C('COU', 'unité de valeur réelle colombienne', plurals: ['one' => 'unité de valeur réelle colombienne', 'other' => 'unités de valeur réelle colombiennes']),
    'CRC' => new C('CRC', 'colón costaricain', plurals: ['one' => 'colón costaricain', 'other' => 'colóns costaricains']),
    'CSD' => new C('CSD', 'dinar serbo-monténégrin', plurals: ['one' => 'dinar serbo-monténégrin', 'other' => 'dinars serbo-monténégrins']),
    'CSK' => new C('CSK', 'couronne forte tchécoslovaque', plurals: ['one' => 'couronne forte tchécoslovaque', 'other' => 'couronnes fortes tchécoslovaques']),
    'CUC' => new C('CUC', 'peso cubain convertible', plurals: ['one' => 'peso cubain convertible', 'other' => 'pesos cubains convertibles']),
    'CUP' => new C('CUP', 'peso cubain', plurals: ['one' => 'peso cubain', 'other' => 'pesos cubains']),
    'CVE' => new C('CVE', 'escudo capverdien', plurals: ['one' => 'escudo capverdien', 'other' => 'escudos capverdiens']),
    'CYP' => new C('CYP', 'livre chypriote', '£CY', plurals: ['one' => 'livre chypriote', 'other' => 'livres chypriotes']),
    'CZK' => new C('CZK', 'couronne tchèque', plurals: ['one' => 'couronne tchèque', 'other' => 'couronnes tchèques']),
    'DDM' => new C('DDM', 'mark est-allemand', plurals: ['one' => 'mark est-allemand', 'other' => 'marks est-allemands']),
    'DEM' => new C('DEM', 'mark allemand', plurals: ['one' => 'mark allemand', 'other' => 'marks allemands']),
    'DJF' => new C('DJF', 'franc djiboutien', plurals: ['one' => 'franc djiboutien', 'other' => 'francs djiboutiens'], minorUnits: 0),
    'DKK' => new C('DKK', 'couronne danoise', plurals: ['one' => 'couronne danoise', 'other' => 'couronnes danoises']),
    'DOP' => new C('DOP', 'peso dominicain', plurals: ['one' => 'peso dominicain', 'other' => 'pesos dominicains']),
    'DZD' => new C('DZD', 'dinar algérien', plurals: ['one' => 'dinar algérien', 'other' => 'dinars algériens']),
    'ECS' => new C('ECS', 'sucre équatorien', plurals: ['one' => 'sucre équatorien', 'other' => 'sucres équatoriens']),
    'ECV' => new C('ECV', 'unité de valeur constante équatoriale (UVC)', plurals: ['one' => 'unité de valeur constante équatorienne (UVC)', 'other' => 'unités de valeur constante équatoriennes (UVC)']),
    'EEK' => new C('EEK', 'couronne estonienne', plurals: ['one' => 'couronne estonienne', 'other' => 'couronnes estoniennes']),
    'EGP' => new C('EGP', 'livre égyptienne', plurals: ['one' => 'livre égyptienne', 'other' => 'livres égyptiennes']),
    'ERN' => new C('ERN', 'nafka érythréen', plurals: ['one' => 'nafka érythréen', 'other' => 'nafkas érythréens']),
    'ESA' => new C('ESA', 'peseta espagnole (compte A)', plurals: ['one' => 'peseta espagnole (compte A)', 'other' => 'pesetas espagnoles (compte A)']),
    'ESB' => new C('ESB', 'peseta espagnole (compte convertible)', plurals: ['one' => 'peseta espagnole (compte convertible)', 'other' => 'pesetas espagnoles (compte convertible)']),
    'ESP' => new C('ESP', 'peseta espagnole', plurals: ['one' => 'peseta espagnole', 'other' => 'pesetas espagnoles']),
    'ETB' => new C('ETB', 'birr éthiopien', plurals: ['one' => 'birr éthiopien', 'other' => 'birrs éthiopiens']),
    'EUR' => new C('EUR', 'euro', '€', plurals: ['one' => 'euro', 'other' => 'euros']),
    'FIM' => new C('FIM', 'mark finlandais', plurals: ['one' => 'mark finlandais', 'other' => 'marks finlandais']),
    'FJD' => new C('FJD', 'dollar fidjien', '$FJ', plurals: ['one' => 'dollar fidjien', 'other' => 'dollars fidjiens']),
    'FKP' => new C('FKP', 'livre des îles Malouines', '£FK', plurals: ['one' => 'livre des îles Malouines', 'other' => 'livres des îles Malouines']),
    'FRF' => new C('FRF', 'franc français', 'F', plurals: ['one' => 'franc français', 'other' => 'francs français']),
    'GBP' => new C('GBP', 'livre sterling', '£GB', plurals: ['one' => 'livre sterling', 'other' => 'livres sterling']),
    'GEK' => new C('GEK', 'coupon de lari géorgien', plurals: ['one' => 'coupon de lari géorgien', 'other' => 'coupons de lari géorgiens']),
    'GEL' => new C('GEL', 'lari géorgien', plurals: ['one' => 'lari géorgien', 'other' => 'lari géorgiens']),
    'GHC' => new C('GHC', 'cédi', plurals: ['one' => 'cédi ghanéen (1967–2007)', 'other' => 'cédis ghanéens (1967–2007)']),
    'GHS' => new C('GHS', 'cédi ghanéen', plurals: ['one' => 'cédi ghanéen', 'other' => 'cédis ghanéens']),
    'GIP' => new C('GIP', 'livre de Gibraltar', '£GI', plurals: ['one' => 'livre de Gibraltar', 'other' => 'livres de Gibraltar']),
    'GMD' => new C('GMD', 'dalasi gambien', plurals: ['one' => 'dalasi gambien', 'other' => 'dalasis gambiens']),
    'GNF' => new C('GNF', 'franc guinéen', plurals: ['one' => 'franc guinéen', 'other' => 'francs guinéens'], minorUnits: 0),
    'GNS' => new C('GNS', 'syli guinéen', plurals: ['one' => 'syli guinéen', 'other' => 'sylis guinéens']),
    'GQE' => new C('GQE', 'ekwélé équatoguinéen', plurals: ['one' => 'ekwélé équatoguinéen', 'other' => 'ekwélés équatoguinéens']),
    'GRD' => new C('GRD', 'drachme grecque', plurals: ['one' => 'drachme grecque', 'other' => 'drachmes grecques']),
    'GTQ' => new C('GTQ', 'quetzal guatémaltèque', plurals: ['one' => 'quetzal guatémaltèque', 'other' => 'quetzals guatémaltèques']),
    'GWE' => new C('GWE', 'escudo de Guinée portugaise', plurals: ['one' => 'escudo de Guinée portugaise', 'other' => 'escudos de Guinée portugaise']),
    'GWP' => new C('GWP', 'peso bissau-guinéen', plurals: ['one' => 'peso bissau-guinéen', 'other' => 'pesos bissau-guinéens']),
    'GYD' => new C('GYD', 'dollar du Guyana', plurals: ['one' => 'dollar du Guyana', 'other' => 'dollars du Guyana']),
    'HKD' => new C('HKD', 'dollar de Hong Kong', plurals: ['one' => 'dollar de Hong Kong', 'other' => 'dollars de Hong Kong']),
    'HNL' => new C('HNL', 'lempira hondurien', plurals: ['one' => 'lempira hondurien', 'other' => 'lempiras honduriens']),
    'HRD' => new C('HRD', 'dinar croate', plurals: ['one' => 'dinar croate', 'other' => 'dinars croates']),
    'HRK' => new C('HRK', 'kuna croate', plurals: ['one' => 'kuna croate', 'other' => 'kunas croates']),
    'HTG' => new C('HTG', 'gourde haïtienne', plurals: ['one' => 'gourde haïtienne', 'other' => 'gourdes haïtiennes']),
    'HUF' => new C('HUF', 'forint hongrois', plurals: ['one' => 'forint hongrois', 'other' => 'forints hongrois']),
    'IDR' => new C('IDR', 'roupie indonésienne', plurals: ['one' => 'roupie indonésienne', 'other' => 'roupies indonésiennes']),
    'IEP' => new C('IEP', 'livre irlandaise', '£IE', plurals: ['one' => 'livre irlandaise', 'other' => 'livres irlandaises']),
    'ILP' => new C('ILP', 'livre israélienne', '£IL', plurals: ['one' => 'livre israélienne', 'other' => 'livres israéliennes']),
    'ILR' => new C('ILR'),
    'ILS' => new C('ILS', 'nouveau shekel israélien', '₪', plurals: ['one' => 'nouveau shekel israélien', 'other' => 'nouveaux shekels israéliens']),
    'INR' => new C('INR', 'roupie indienne', '₹', plurals: ['one' => 'roupie indienne', 'other' => 'roupies indiennes']),
    'IQD' => new C('IQD', 'dinar irakien', plurals: ['one' => 'dinar irakien', 'other' => 'dinars irakiens'], minorUnits: 3),
    'IRR' => new C('IRR', 'riyal iranien', plurals: ['one' => 'riyal iranien', 'other' => 'riyals iraniens']),
    'ISJ' => new C('ISJ'),
    'ISK' => new C('ISK', 'couronne islandaise', plurals: ['one' => 'couronne islandaise', 'other' => 'couronnes islandaises'], minorUnits: 0),
    'ITL' => new C('ITL', 'lire italienne', '₤IT', plurals: ['one' => 'lire italienne', 'other' => 'lires italiennes']),
    'JMD' => new C('JMD', 'dollar jamaïcain', plurals: ['one' => 'dollar jamaïcain', 'other' => 'dollars jamaïcains']),
    'JOD' => new C('JOD', 'dinar jordanien', plurals: ['one' => 'dinar jordanien', 'other' => 'dinars jordaniens'], minorUnits: 3),
    'JPY' => new C('JPY', 'yen japonais', plurals: ['one' => 'yen japonais', 'other' => 'yens japonais'], minorUnits: 0),
    'KES' => new C('KES', 'shilling kényan', plurals: ['one' => 'shilling kényan', 'other' => 'shillings kényans']),
    'KGS' => new C('KGS', 'som kirghize', plurals: ['one' => 'som kirghize', 'other' => 'soms kirghizes']),
    'KHR' => new C('KHR', 'riel cambodgien', plurals: ['one' => 'riel cambodgien', 'other' => 'riels cambodgiens']),
    'KMF' => new C('KMF', 'franc comorien', plurals: ['one' => 'franc comorien', 'other' => 'francs comoriens'], minorUnits: 0),
    'KPW' => new C('KPW', 'won nord-coréen', plurals: ['one' => 'won nord-coréen', 'other' => 'wons nord-coréens']),
    'KRH' => new C('KRH'),
    'KRO' => new C('KRO'),
    'KRW' => new C('KRW', 'won sud-coréen', '₩', plurals: ['one' => 'won sud-coréen', 'other' => 'wons sud-coréens'], minorUnits: 0),
    'KWD' => new C('KWD', 'dinar koweïtien', plurals: ['one' => 'dinar koweïtien', 'other' => 'dinar koweïtiens'], minorUnits: 3),
    'KYD' => new C('KYD', 'dollar des îles Caïmans', plurals: ['one' => 'dollar des îles Caïmans', 'other' => 'dollars des îles Caïmans']),
    'KZT' => new C('KZT', 'tenge kazakh', plurals: ['one' => 'tenge kazakh', 'other' => 'tenges kazakhs']),
    'LAK' => new C('LAK', 'kip loatien', plurals: ['one' => 'kip loatien', 'other' => 'kips loatiens']),
    'LBP' => new C('LBP', 'livre libanaise', '£LB', plurals: ['one' => 'livre libanaise', 'other' => 'livres libanaises']),
    'LKR' => new C('LKR', 'roupie srilankaise', plurals: ['one' => 'roupie srilankaise', 'other' => 'roupies srilankaises']),
    'LRD' => new C('LRD', 'dollar libérien', plurals: ['one' => 'dollar libérien', 'other' => 'dollars libériens']),
    'LSL' => new C('LSL', 'loti lesothan', plurals: ['one' => 'loti lesothan', 'other' => 'maloti lesothans']),
    'LTL' => new C('LTL', 'litas lituanien', plurals: ['one' => 'litas lituanien', 'other' => 'litas lituaniens']),
    'LTT' => new C('LTT', 'talonas lituanien', plurals: ['one' => 'talonas lituanien', 'other' => 'talonas lituaniens']),
    'LUC' => new C('LUC', 'franc convertible luxembourgeois', plurals: ['one' => 'franc convertible luxembourgeois', 'other' => 'francs convertibles luxembourgeois']),
    'LUF' => new C('LUF', 'franc luxembourgeois', plurals: ['one' => 'franc luxembourgeois', 'other' => 'francs luxembourgeois']),
    'LUL' => new C('LUL', 'franc financier luxembourgeois', plurals: ['one' => 'franc financier luxembourgeois', 'other' => 'francs financiers luxembourgeois']),
    'LVL' => new C('LVL', 'lats letton', plurals: ['one' => 'lats letton', 'other' => 'lats lettons']),
    'LVR' => new C('LVR', 'rouble letton', plurals: ['one' => 'rouble letton', 'other' => 'roubles lettons']),
    'LYD' => new C('LYD', 'dinar libyen', plurals: ['one' => 'dinar libyen', 'other' => 'dinars libyens'], minorUnits: 3),
    'MAD' => new C('MAD', 'dirham marocain', plurals: ['one' => 'dirham marocain', 'other' => 'dirhams marocains']),
    'MAF' => new C('MAF', 'franc marocain', plurals: ['one' => 'franc marocain', 'other' => 'francs marocains']),
    'MCF' => new C('MCF'),
    'MDC' => new C('MDC'),
    'MDL' => new C('MDL', 'leu moldave', plurals: ['one' => 'leu moldave', 'other' => 'leus moldaves']),
    'MGA' => new C('MGA', 'ariary malgache', plurals: ['one' => 'ariary malgache', 'other' => 'ariarys malgaches']),
    'MGF' => new C('MGF', 'franc malgache', plurals: ['one' => 'franc malgache', 'other' => 'francs malgaches']),
    'MKD' => new C('MKD', 'denar macédonien', plurals: ['one' => 'denar macédonien', 'other' => 'denars macédoniens']),
    'MKN' => new C('MKN'),
    'MLF' => new C('MLF', 'franc malien', plurals: ['one' => 'franc malien', 'other' => 'francs maliens']),
    'MMK' => new C('MMK', 'kyat myanmarais', plurals: ['one' => 'kyat myanmarais', 'other' => 'kyats myanmarais']),
    'MNT' => new C('MNT', 'tugrik mongol', plurals: ['one' => 'tugrik mongol', 'other' => 'tugriks mongols']),
    'MOP' => new C('MOP', 'pataca macanaise', plurals: ['one' => 'pataca macanaise', 'other' => 'patacas macanaises']),
    'MRO' => new C('MRO', 'ouguiya mauritanien (1973–2017)', plurals: ['one' => 'ouguiya mauritanien (1973–2017)', 'other' => 'ouguiyas mauritaniens (1973–2017)']),
    'MRU' => new C('MRU', 'ouguiya mauritanien', plurals: ['one' => 'ouguiya mauritanien', 'other' => 'ouguiyas mauritaniens']),
    'MTL' => new C('MTL', 'lire maltaise', plurals: ['one' => 'lire maltaise', 'other' => 'lires maltaises']),
    'MTP' => new C('MTP', 'livre maltaise', '£MT', plurals: ['one' => 'livre maltaise', 'other' => 'livres maltaises']),
    'MUR' => new C('MUR', 'roupie mauricienne', plurals: ['one' => 'roupie mauricienne', 'other' => 'roupies mauriciennes']),
    'MVP' => new C('MVP'),
    'MVR' => new C('MVR', 'rufiyaa maldivien', plurals: ['one' => 'rufiyaa maldivienne', 'other' => 'rufiyaas maldiviennes']),
    'MWK' => new C('MWK', 'kwacha malawite', plurals: ['one' => 'kwacha malawite', 'other' => 'kwachas malawites']),
    'MXN' => new C('MXN', 'peso mexicain', '$MX', plurals: ['one' => 'peso mexicain', 'other' => 'pesos mexicains']),
    'MXP' => new C('MXP', 'peso d’argent mexicain (1861–1992)', plurals: ['one' => 'peso d’argent mexicain (1861–1992)', 'other' => 'pesos d’argent mexicains (1861–1992)']),
    'MXV' => new C('MXV', 'unité de conversion mexicaine (UDI)', plurals: ['one' => 'unité de conversion mexicaine (UDI)', 'other' => 'unités de conversion mexicaines (UDI)']),
    'MYR' => new C('MYR', 'ringgit malais', plurals: ['one' => 'ringgit malais', 'other' => 'ringgits malais']),
    'MZE' => new C('MZE', 'escudo mozambicain', plurals: ['one' => 'escudo mozambicain', 'other' => 'escudos mozambicains']),
    'MZM' => new C('MZM', 'métical', plurals: ['one' => 'metical mozambicain (1980–2006)', 'other' => 'meticais mozambicains (1980–2006)']),
    'MZN' => new C('MZN', 'metical mozambicain', plurals: ['one' => 'metical mozambicain', 'other' => 'meticais mozambicains']),
    'NAD' => new C('NAD', 'dollar namibien', '$NA', plurals: ['one' => 'dollar namibien', 'other' => 'dollars namibiens']),
    'NGN' => new C('NGN', 'naira nigérian', plurals: ['one' => 'naira nigérian', 'other' => 'nairas nigérians']),
    'NIC' => new C('NIC', 'cordoba', plurals: ['one' => 'córdoba nicaraguayen (1912–1988)', 'other' => 'córdobas nicaraguayens (1912–1988)']),
    'NIO' => new C('NIO', 'córdoba oro nicaraguayen', plurals: ['one' => 'córdoba oro nicaraguayen', 'other' => 'córdobas oro nicaraguayens']),
    'NLG' => new C('NLG', 'florin néerlandais', plurals: ['one' => 'florin néerlandais', 'other' => 'florins néerlandais']),
    'NOK' => new C('NOK', 'couronne norvégienne', plurals: ['one' => 'couronne norvégienne', 'other' => 'couronnes norvégiennes']),
    'NPR' => new C('NPR', 'roupie népalaise', plurals: ['one' => 'roupie népalaise', 'other' => 'roupies népalaises']),
    'NZD' => new C('NZD', 'dollar néo-zélandais', '$NZ', plurals: ['one' => 'dollar néo-zélandais', 'other' => 'dollars néo-zélandais']),
    'OMR' => new C('OMR', 'riyal omanais', plurals: ['one' => 'riyal omanais', 'other' => 'riyals omanis'], minorUnits: 3),
    'PAB' => new C('PAB', 'balboa panaméen', plurals: ['one' => 'balboa panaméen', 'other' => 'balboas panaméens']),
    'PEI' => new C('PEI', 'inti péruvien', plurals: ['one' => 'inti péruvien', 'other' => 'intis péruviens']),
    'PEN' => new C('PEN', 'sol péruvien', plurals: ['one' => 'sol péruvien', 'other' => 'sols péruviens']),
    'PES' => new C('PES', 'sol péruvien (1863–1985)', plurals: ['one' => 'sol péruvien (1863–1985)', 'other' => 'sols péruviens (1863–1985)']),
    'PGK' => new C('PGK', 'kina papouan-néo-guinéen', plurals: ['one' => 'kina papouan-néo-guinéen', 'other' => 'kinas papouan-néo-guinéens']),
    'PHP' => new C('PHP', 'peso philippin', plurals: ['one' => 'peso philippin', 'other' => 'pesos philippins']),
    'PKR' => new C('PKR', 'roupie pakistanaise', plurals: ['one' => 'roupie pakistanaise', 'other' => 'roupies pakistanaises']),
    'PLN' => new C('PLN', 'zloty polonais', plurals: ['one' => 'zloty polonais', 'other' => 'zlotys polonais']),
    'PLZ' => new C('PLZ', 'zloty (1950–1995)', plurals: ['one' => 'zloty polonais (1950–1995)', 'other' => 'zlotys polonais (1950–1995)']),
    'PTE' => new C('PTE', 'escudo portugais', plurals: ['one' => 'escudo portugais', 'other' => 'escudos portugais']),
    'PYG' => new C('PYG', 'guaraní paraguayen', plurals: ['one' => 'guaraní paraguayen', 'other' => 'guaranís paraguayens'], minorUnits: 0),
    'QAR' => new C('QAR', 'riyal qatari', plurals: ['one' => 'riyal qatari', 'other' => 'riyals qataris']),
    'RHD' => new C('RHD', 'dollar rhodésien', '$RH', plurals: ['one' => 'dollar rhodésien', 'other' => 'dollars rhodésiens']),
    'ROL' => new C('ROL', 'ancien leu roumain', plurals: ['one' => 'leu roumain (1952–2005)', 'other' => 'lei roumains (1952–2005)']),
    'RON' => new C('RON', 'leu roumain', plurals: ['one' => 'leu roumain', 'other' => 'lei roumains']),
    'RSD' => new C('RSD', 'dinar serbe', plurals: ['one' => 'dinar serbe', 'other' => 'dinars serbes']),
    'RUB' => new C('RUB', 'rouble russe', plurals: ['one' => 'rouble russe', 'other' => 'roubles russes']),
    'RUR' => new C('RUR', 'rouble russe (1991–1998)', plurals: ['one' => 'rouble russe (1991–1998)', 'other' => 'roubles russes (1991–1998)']),
    'RWF' => new C('RWF', 'franc rwandais', plurals: ['one' => 'franc rwandais', 'other' => 'francs rwandais'], minorUnits: 0),
    'SAR' => new C('SAR', 'riyal saoudien', plurals: ['one' => 'riyal saoudien', 'other' => 'riyals saoudiens']),
    'SBD' => new C('SBD', 'dollar des îles Salomon', '$SB', plurals: ['one' => 'dollar des îles Salomon', 'other' => 'dollars des îles Salomon']),
    'SCR' => new C('SCR', 'roupie des Seychelles', plurals: ['one' => 'roupie des Seychelles', 'other' => 'roupies des Seychelles']),
    'SDD' => new C('SDD', 'dinar soudanais', plurals: ['one' => 'dinar soudanais (1992–2007)', 'other' => 'dinars soudanais (1992–2007)']),
    'SDG' => new C('SDG', 'livre soudanaise', plurals: ['one' => 'livre soudanaise', 'other' => 'livres soudanaises']),
    'SDP' => new C('SDP', 'livre soudanaise (1956–2007)', plurals: ['one' => 'livre soudanaise (1956–2007)', 'other' => 'livres soudanaises (1956–2007)']),
    'SEK' => new C('SEK', 'couronne suédoise', plurals: ['one' => 'couronne suédoise', 'other' => 'couronnes suédoises']),
    'SGD' => new C('SGD', 'dollar de Singapour', '$SG', plurals: ['one' => 'dollar de Singapour', 'other' => 'dollars de Singapour']),
    'SHP' => new C('SHP', 'livre de Sainte-Hélène', plurals: ['one' => 'livre de Sainte-Hélène', 'other' => 'livres de Sainte-Hélène']),
    'SIT' => new C('SIT', 'tolar slovène', plurals: ['one' => 'tolar slovène', 'other' => 'tolars slovènes']),
    'SKK' => new C('SKK', 'couronne slovaque', plurals: ['one' => 'couronne slovaque', 'other' => 'couronnes slovaques']),
    'SLL' => new C('SLL', 'leone sierra-léonais', plurals: ['one' => 'leone sierra-léonais', 'other' => 'leones sierra-léonais']),
    'SOS' => new C('SOS', 'shilling somalien', plurals: ['one' => 'shilling somalien', 'other' => 'shillings somaliens']),
    'SRD' => new C('SRD', 'dollar surinamais', '$SR', plurals: ['one' => 'dollar surinamais', 'other' => 'dollars surinamais']),
    'SRG' => new C('SRG', 'florin surinamais', plurals: ['one' => 'florin surinamais', 'other' => 'florins surinamais']),
    'SSP' => new C('SSP', 'livre sud-soudanaise', plurals: ['one' => 'livre sud-soudanaise', 'other' => 'livres sud-soudanaises']),
    'STD' => new C('STD', 'dobra santoméen (1977–2017)', plurals: ['one' => 'dobra santoméen (1977–2017)', 'other' => 'dobras santoméens (1977–2017)']),
    'STN' => new C('STN', 'dobra santoméen', plurals: ['one' => 'dobra santoméen', 'other' => 'dobras santoméens']),
    'SUR' => new C('SUR', 'rouble soviétique', plurals: ['one' => 'rouble soviétique', 'other' => 'roubles soviétiques']),
    'SVC' => new C('SVC', 'colón salvadorien', plurals: ['one' => 'colón salvadorien', 'other' => 'colóns salvadoriens']),
    'SYP' => new C('SYP', 'livre syrienne', plurals: ['one' => 'livre syrienne', 'other' => 'livres syriennes']),
    'SZL' => new C('SZL', 'lilangeni swazi', plurals: ['one' => 'lilangeni swazi', 'other' => 'lilangenis swazis']),
    'THB' => new C('THB', 'baht thaïlandais', plurals: ['one' => 'baht thaïlandais', 'other' => 'bahts thaïlandais']),
    'TJR' => new C('TJR', 'rouble tadjik', plurals: ['one' => 'rouble tadjik', 'other' => 'roubles tadjiks']),
    'TJS' => new C('TJS', 'somoni tadjik', plurals: ['one' => 'somoni tadjik', 'other' => 'somonis tadjiks']),
    'TMM' => new C('TMM', 'manat turkmène', plurals: ['one' => 'manat turkmène', 'other' => 'manats turkmènes']),
    'TMT' => new C('TMT', 'nouveau manat turkmène', plurals: ['one' => 'nouveau manat turkmène', 'other' => 'nouveaux manats turkmènes']),
    'TND' => new C('TND', 'dinar tunisien', plurals: ['one' => 'dinar tunisien', 'other' => 'dinars tunisiens'], minorUnits: 3),
    'TOP' => new C('TOP', 'pa’anga tongan', plurals: ['one' => 'pa’anga tongan', 'other' => 'pa’angas tongans']),
    'TPE' => new C('TPE', 'escudo timorais', plurals: ['one' => 'escudo timorais', 'other' => 'escudos timorais']),
    'TRL' => new C('TRL', 'livre turque (1844–2005)', plurals: ['one' => 'livre turque (1844–2005)', 'other' => 'livres turques (1844–2005)']),
    'TRY' => new C('TRY', 'livre turque', plurals: ['one' => 'livre turque', 'other' => 'livres turques']),
    'TTD' => new C('TTD', 'dollar de Trinité-et-Tobago', '$TT', plurals: ['one' => 'dollar de Trinité-et-Tobago', 'other' => 'dollars de Trinité-et-Tobago']),
    'TWD' => new C('TWD', 'nouveau dollar taïwanais', plurals: ['one' => 'nouveau dollar taïwanais', 'other' => 'nouveaux dollars taïwanais']),
    'TZS' => new C('TZS', 'shilling tanzanien', plurals: ['one' => 'shilling tanzanien', 'other' => 'shillings tanzaniens']),
    'UAH' => new C('UAH', 'hryvnia ukrainienne', plurals: ['one' => 'hryvnia ukrainienne', 'other' => 'hryvnias ukrainiennes']),
    'UAK' => new C('UAK', 'karbovanetz', plurals: ['one' => 'karbovanets ukrainien (1992–1996)', 'other' => 'karbovanets ukrainiens (1992–1996)']),
    'UGS' => new C('UGS', 'shilling ougandais (1966–1987)', plurals: ['one' => 'shilling ougandais (1966–1987)', 'other' => 'shillings ougandais (1966–1987)']),
    'UGX' => new C('UGX', 'shilling ougandais', plurals: ['one' => 'shilling ougandais', 'other' => 'shillings ougandais'], minorUnits: 0),
    'USD' => new C('USD', 'dollar des États-Unis', '$US', plurals: ['one' => 'dollar des États-Unis', 'other' => 'dollars des États-Unis']),
    'USN' => new C('USN', 'dollar des Etats-Unis (jour suivant)', plurals: ['one' => 'dollar des États-Unis (jour suivant)', 'other' => 'dollars des États-Unis (jour suivant)']),
    'USS' => new C('USS', 'dollar des Etats-Unis (jour même)', plurals: ['one' => 'dollar des États-Unis (jour même)', 'other' => 'dollars des États-Unis (jour même)']),
    'UYI' => new C('UYI', 'peso uruguayen (unités indexées)', plurals: ['one' => 'peso uruguayen (unités indexées)', 'other' => 'pesos uruguayen (unités indexées)'], minorUnits: 0),
    'UYP' => new C('UYP', 'peso uruguayen (1975–1993)', plurals: ['one' => 'peso uruguayen (1975–1993)', 'other' => 'pesos uruguayens (1975–1993)']),
    'UYU' => new C('UYU', 'peso uruguayen', '$UY', plurals: ['one' => 'peso uruguayen', 'other' => 'pesos uruguayens']),
    'UYW' => new C('UYW', minorUnits: 4),
    'UZS' => new C('UZS', 'sum ouzbek', plurals: ['one' => 'sum ouzbek', 'other' => 'sums ouzbeks']),
    'VEB' => new C('VEB', 'bolivar vénézuélien (1871–2008)', plurals: ['one' => 'bolivar vénézuélien (1871–2008)', 'other' => 'bolivar vénézuélien (1871–2008)']),
    'VEF' => new C('VEF', 'bolivar vénézuélien (2008–2018)', plurals: ['one' => 'bolivar vénézuélien (2008–2018)', 'other' => 'bolivars vénézuéliens (2008–2018)']),
    'VES' => new C('VES', 'bolivar vénézuélien', plurals: ['one' => 'bolivar vénézuélien', 'other' => 'bolivars vénézuéliens']),
    'VND' => new C('VND', 'dông vietnamien', '₫', plurals: ['one' => 'dông vietnamien', 'other' => 'dôngs vietnamiens'], minorUnits: 0),
    'VNN' => new C('VNN'),
    'VUV' => new C('VUV', 'vatu vanuatuan', plurals: ['one' => 'vatu vanuatuan', 'other' => 'vatus vanuatuans'], minorUnits: 0),
    'WST' => new C('WST', 'tala samoan', '$WS', plurals: ['one' => 'tala samoan', 'other' => 'talas samoans']),
    'XAF' => new C('XAF', 'franc CFA (BEAC)', 'FCFA', plurals: ['one' => 'franc CFA (BEAC)', 'other' => 'francs CFA (BEAC)'], minorUnits: 0),
    'XAG' => new C('XAG', 'argent', plurals: ['one' => 'once troy d’argent', 'other' => 'onces troy d’argent']),
    'XAU' => new C('XAU', 'or', plurals: ['one' => 'once troy d’or', 'other' => 'onces troy d’or']),
    'XBA' => new C('XBA', 'unité européenne composée', plurals: ['one' => 'unité composée européenne (EURCO)', 'other' => 'unités composées européennes (EURCO)']),
    'XBB' => new C('XBB', 'unité monétaire européenne', plurals: ['one' => 'unité monétaire européenne (UME–6)', 'other' => 'unités monétaires européennes (UME–6)']),
    'XBC' => new C('XBC', 'unité de compte européenne (XBC)', plurals: ['one' => 'unité de compte 9 européenne (UEC–9)', 'other' => 'unités de compte 9 européennes (UEC–9)']),
    'XBD' => new C('XBD', 'unité de compte européenne (XBD)', plurals: ['one' => 'unité de compte 17 européenne (UEC–17)', 'other' => 'unités de compte 17 européennes (UEC–17)']),
    'XCD' => new C('XCD', 'dollar des Caraïbes orientales', plurals: ['one' => 'dollar des Caraïbes orientales', 'other' => 'dollars des Caraïbes orientales']),
    'XDR' => new C('XDR', 'droit de tirage spécial', plurals: ['one' => 'droit de tirage spécial', 'other' => 'droits de tirage spéciaux']),
    'XEU' => new C('XEU', 'unité de compte européenne (ECU)'),
    'XFO' => new C('XFO', 'franc or', plurals: ['one' => 'franc or', 'other' => 'francs or']),
    'XFU' => new C('XFU', 'franc UIC', plurals: ['one' => 'franc UIC', 'other' => 'francs UIC']),
    'XOF' => new C('XOF', 'franc CFA (BCEAO)', 'F CFA', plurals: ['one' => 'franc CFA (BCEAO)', 'other' => 'francs CFA (BCEAO)'], minorUnits: 0),
    'XPD' => new C('XPD', 'palladium', plurals: ['one' => 'once troy de palladium', 'other' => 'onces troy de palladium']),
    'XPF' => new C('XPF', 'franc CFP', 'FCFP', plurals: ['one' => 'franc CFP', 'other' => 'francs CFP'], minorUnits: 0),
    'XPT' => new C('XPT', 'platine', plurals: ['one' => 'once troy de platine', 'other' => 'onces troy de platine']),
    'XRE' => new C('XRE', 'type de fonds RINET', plurals: ['one' => 'unité de fonds RINET', 'other' => 'unités de fonds RINET']),
    'XSU' => new C('XSU'),
    'XTS' => new C('XTS', '(devise de test)', plurals: ['one' => '(devise de test)', 'other' => '(devises de test)']),
    'XUA' => new C('XUA'),
    'XXX' => new C('XXX', 'devise inconnue ou non valide', '¤', plurals: ['one' => 'devise inconnue', 'other' => 'devises inconnues']),
    'YDD' => new C('YDD', 'dinar du Yémen', plurals: ['one' => 'dinar nord-yéménite', 'other' => 'dinars nord-yéménites']),
    'YER' => new C('YER', 'riyal yéménite', plurals: ['one' => 'riyal yéménite', 'other' => 'riyals yéménites']),
    'YUD' => new C('YUD', 'nouveau dinar yougoslave', plurals: ['one' => 'dinar fort yougoslave (1966–1989)', 'other' => 'dinars forts yougoslaves (1966–1989)']),
    'YUM' => new C('YUM', 'dinar yougoslave Noviy', plurals: ['one' => 'nouveau dinar yougoslave (1994–2003)', 'other' => 'nouveaux dinars yougoslaves (1994–2003)']),
    'YUN' => new C('YUN', 'dinar yougoslave convertible', plurals: ['one' => 'dinar convertible yougoslave (1990–1992)', 'other' => 'dinars convertibles yougoslaves (1990–1992)']),
    'YUR' => new C('YUR'),
    'ZAL' => new C('ZAL', 'rand sud-africain (financier)', plurals: ['one' => 'rand sud-africain (financier)', 'other' => 'rands sud-africains (financiers)']),
    'ZAR' => new C('ZAR', 'rand sud-africain', plurals: ['one' => 'rand sud-africain', 'other' => 'rands sud-africains']),
    'ZMK' => new C('ZMK', 'kwacha zambien (1968–2012)', plurals: ['one' => 'kwacha zambien (1968–2012)', 'other' => 'kwachas zambiens (1968–2012)']),
    'ZMW' => new C('ZMW', 'kwacha zambien', plurals: ['one' => 'kwacha zambien', 'other' => 'kwachas zambiens']),
    'ZRN' => new C('ZRN', 'nouveau zaïre zaïrien', plurals: ['one' => 'nouveau zaïre zaïrien', 'other' => 'nouveaux zaïres zaïriens']),
    'ZRZ' => new C('ZRZ', 'zaïre zaïrois', plurals: ['one' => 'zaïre zaïrois', 'other' => 'zaïres zaïrois']),
    'ZWD' => new C('ZWD', 'dollar zimbabwéen', plurals: ['one' => 'dollar zimbabwéen', 'other' => 'dollars zimbabwéens']),
    'ZWL' => new C('ZWL', 'dollar zimbabwéen (2009)', plurals: ['one' => 'dollar zimbabwéen (2009)', 'other' => 'dollars zimbabwéens (2009)']),
    'ZWR' => new C('ZWR', 'dollar zimbabwéen (2008)', plurals: ['one' => 'dollar zimbabwéen (2008)', 'other' => 'dollars zimbabwéens (2008)']),
];
