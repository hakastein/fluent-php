<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'Andorra peseeta', plurals: ['one' => 'Andorra peseeta', 'other' => 'Andorra peseetat']),
    'AED' => new C('AED', 'Araabia Ühendemiraatide dirhem', plurals: ['one' => 'Araabia Ühendemiraatide dirhem', 'other' => 'Araabia Ühendemiraatide dirhemit']),
    'AFA' => new C('AFA', 'Afganistani afgaani (1927–2002)', plurals: ['one' => 'Afganistani afgaani (1927–2002)', 'other' => 'Afganistani afgaanit (1927–2002)']),
    'AFN' => new C('AFN', 'Afganistani afgaani', narrow: '؋', plurals: ['one' => 'Afganistani afgaani', 'other' => 'Afganistani afgaanit']),
    'ALK' => new C('ALK', 'Albaania lekk (1946–1965)', plurals: ['one' => 'Albaania lekk (1946–1965)', 'other' => 'Albaania lekki (1946–1965)']),
    'ALL' => new C('ALL', 'Albaania lekk', plurals: ['one' => 'Albaania lekk', 'other' => 'Albaania lekki']),
    'AMD' => new C('AMD', 'Armeenia dramm', narrow: '֏', plurals: ['one' => 'Armeenia dramm', 'other' => 'Armeenia drammi']),
    'ANG' => new C('ANG', 'Hollandi Antillide kulden', plurals: ['one' => 'Hollandi Antillide kulden', 'other' => 'Hollandi Antillide kuldnat']),
    'AOA' => new C('AOA', 'Angola kvanza', narrow: 'Kz', plurals: ['one' => 'Angola kvanza', 'other' => 'Angola kvanzat']),
    'AOK' => new C('AOK', 'Angola kvanza (1977–1990)', plurals: ['one' => 'Angola kvanza (1977–1990)', 'other' => 'Angola kvanzat (1977–1990)']),
    'AON' => new C('AON', 'Angola kvanza (1990–2000)', plurals: ['one' => 'Angola kvanza (1990–2000)', 'other' => 'Angola kvanzat (1990–2000)']),
    'AOR' => new C('AOR', 'Angola reformitud kvanza, 1995–1999'),
    'ARA' => new C('ARA', 'Argentina austral'),
    'ARM' => new C('ARM', 'Argentina peeso (1881–1970)', plurals: ['one' => 'Argentina peeso (1881–1970)', 'other' => 'Argentina peesot (1881–1970)']),
    'ARP' => new C('ARP', 'Argentina peeso (1983–1985)', plurals: ['one' => 'Argentina peeso (1983–1985)', 'other' => 'Argentina peesot (1983–1985)']),
    'ARS' => new C('ARS', 'Argentina peeso', narrow: '$', plurals: ['one' => 'Argentina peeso', 'other' => 'Argentina peesot']),
    'ATS' => new C('ATS', 'Austria šilling', plurals: ['one' => 'Austria šilling', 'other' => 'Austria šillingit']),
    'AUD' => new C('AUD', 'Austraalia dollar', 'AU$', narrow: '$', plurals: ['one' => 'Austraalia dollar', 'other' => 'Austraalia dollarit']),
    'AWG' => new C('AWG', 'Aruba kulden', plurals: ['one' => 'Aruba kulden', 'other' => 'Aruba kuldnat']),
    'AZM' => new C('AZM', 'Aserbaidžaani manat (1993–2006)', plurals: ['one' => 'Aserbaidžaani manat (1993–2006)', 'other' => 'Aserbaidžaani manatit (1993–2006)']),
    'AZN' => new C('AZN', 'Aserbaidžaani manat', narrow: '₼', plurals: ['one' => 'Aserbaidžaani manat', 'other' => 'Aserbaidžaani manatit']),
    'BAD' => new C('BAD', 'Bosnia ja Hertsegoviina dinaar (1992–1994)', plurals: ['one' => 'Bosnia ja Hertsegoviina dinaar (1992–1994)', 'other' => 'Bosnia ja Hertsegoviina dinaari (1992–1994)']),
    'BAM' => new C('BAM', 'Bosnia ja Hertsegoviina konverteeritav mark', narrow: 'KM', plurals: ['one' => 'Bosnia ja Hertsegoviina konverteeritav mark', 'other' => 'Bosnia ja Hertsegoviina konverteeritavat marka']),
    'BAN' => new C('BAN', 'Bosnia ja Hertsegoviina uus dinaar (1994–1997)', plurals: ['one' => 'Bosnia ja Hertsegoviina uus dinaar (1994–1997)', 'other' => 'Bosnia ja Hertsegoviina uut dinaari (1994–1997)']),
    'BBD' => new C('BBD', 'Barbadose dollar', narrow: '$', plurals: ['one' => 'Barbadose dollar', 'other' => 'Barbadose dollarit']),
    'BDT' => new C('BDT', 'Bangladeshi taka', narrow: '৳', plurals: ['one' => 'Bangladeshi taka', 'other' => 'Bangladeshi takat']),
    'BEC' => new C('BEC', 'Belgia konverteeritav frank', plurals: ['one' => 'Belgia konverteeritav frank', 'other' => 'Belgia konverteeritavat franki']),
    'BEF' => new C('BEF', 'Belgia frank', plurals: ['one' => 'Belgia frank', 'other' => 'Belgia franki']),
    'BEL' => new C('BEL', 'Belgia arveldusfrank'),
    'BGL' => new C('BGL', 'Bulgaaria püsiv leev'),
    'BGN' => new C('BGN', 'Bulgaaria leev', plurals: ['one' => 'Bulgaaria leev', 'other' => 'Bulgaaria leevi']),
    'BGO' => new C('BGO', 'Bulgaaria leev (1879–1952)', plurals: ['one' => 'Bulgaaria leev (1879–1952)', 'other' => 'Bulgaaria leevi (1879–1952)']),
    'BHD' => new C('BHD', 'Bahreini dinaar', plurals: ['one' => 'Bahreini dinaar', 'other' => 'Bahreini dinaari'], minorUnits: 3),
    'BIF' => new C('BIF', 'Burundi frank', plurals: ['one' => 'Burundi frank', 'other' => 'Burundi franki'], minorUnits: 0),
    'BMD' => new C('BMD', 'Bermuda dollar', narrow: '$', plurals: ['one' => 'Bermuda dollar', 'other' => 'Bermuda dollarit']),
    'BND' => new C('BND', 'Brunei dollar', narrow: '$', plurals: ['one' => 'Brunei dollar', 'other' => 'Brunei dollarit']),
    'BOB' => new C('BOB', 'Boliivia boliviaano', narrow: 'Bs', plurals: ['one' => 'Boliivia boliviaano', 'other' => 'Boliivia boliviaanot']),
    'BOL' => new C('BOL', 'Boliivia boliviaano (1863–1963)', plurals: ['one' => 'Boliivia boliviaano (1863–1963)', 'other' => 'Boliivia boliviaanot (1863–1963)']),
    'BOP' => new C('BOP', 'Boliivia peeso', plurals: ['one' => 'Boliivia peeso', 'other' => 'Boliivia peesot']),
    'BRB' => new C('BRB', 'Brasiilia uus kruseiro (1967–1986)', plurals: ['one' => 'Brasiilia uus kruseiro (1967–1986)', 'other' => 'Brasiilia uut kruseirot (1967–1986)']),
    'BRC' => new C('BRC', 'Brasiilia krusado'),
    'BRE' => new C('BRE', 'Brasiilia kruseiro (1990–1993)', plurals: ['one' => 'Brasiilia kruseiro (1990–1993)', 'other' => 'Brasiilia kruseirot (1990–1993)']),
    'BRL' => new C('BRL', 'Brasiilia reaal', 'R$', narrow: 'R$', plurals: ['one' => 'Brasiilia reaal', 'other' => 'Brasiilia reaali']),
    'BRR' => new C('BRR', 'Brasiilia kruseiro (1993–1994)', plurals: ['one' => 'Brasiilia kruseiro (1993–1994)', 'other' => 'Brasiilia kruseirot (1993–1994)']),
    'BRZ' => new C('BRZ', 'Brasiilia kruseiro (1942–1967)', plurals: ['one' => 'Brasiilia kruseiro (1942–1967)', 'other' => 'Brasiilia kruseirot (1942–1967)']),
    'BSD' => new C('BSD', 'Bahama dollar', narrow: '$', plurals: ['one' => 'Bahama dollar', 'other' => 'Bahama dollarit']),
    'BTN' => new C('BTN', 'Bhutani ngultrum', plurals: ['one' => 'Bhutani ngultrum', 'other' => 'Bhutani ngultrumit']),
    'BUK' => new C('BUK', 'Birma kjatt', plurals: ['one' => 'Birma kjatt', 'other' => 'Birma kjatti']),
    'BWP' => new C('BWP', 'Botswana pula', narrow: 'P', plurals: ['one' => 'Botswana pula', 'other' => 'Botswana pulat']),
    'BYB' => new C('BYB', 'Valgevene uus rubla (1994–1999)', plurals: ['one' => 'Valgevene uus rubla (1994–1999)', 'other' => 'Valgevene uut rubla (1994–1999)']),
    'BYN' => new C('BYN', 'Valgevene rubla', plurals: 'Valgevene rubla'),
    'BYR' => new C('BYR', 'Valgevene rubla (2000–2016)', plurals: 'Valgevene rubla (2000–2016)'),
    'BZD' => new C('BZD', 'Belize’i dollar', narrow: '$', plurals: ['one' => 'Belize’i dollar', 'other' => 'Belize’i dollarit']),
    'CAD' => new C('CAD', 'Kanada dollar', 'CA$', narrow: '$', plurals: ['one' => 'Kanada dollar', 'other' => 'Kanada dollarit']),
    'CDF' => new C('CDF', 'Kongo frank', plurals: ['one' => 'Kongo frank', 'other' => 'Kongo franki']),
    'CHF' => new C('CHF', 'Šveitsi frank', plurals: ['one' => 'Šveitsi frank', 'other' => 'Šveitsi franki']),
    'CLE' => new C('CLE', 'Tšiili eskuudo', plurals: ['one' => 'Tšiili eskuudo', 'other' => 'Tšiili eskuudot']),
    'CLP' => new C('CLP', 'Tšiili peeso', narrow: '$', plurals: ['one' => 'Tšiili peeso', 'other' => 'Tšiili peesot'], minorUnits: 0),
    'CNH' => new C('CNH', 'Hiina jüaan (välismaine turg)', plurals: ['one' => 'Hiina jüaan (välismaine turg)', 'other' => 'Hiina jüaani (välismaine turg)']),
    'CNY' => new C('CNY', 'Hiina jüaan', 'CN¥', narrow: '¥', plurals: ['one' => 'Hiina jüaan', 'other' => 'Hiina jüaani']),
    'COP' => new C('COP', 'Colombia peeso', narrow: '$', plurals: ['one' => 'Colombia peeso', 'other' => 'Colombia peesot']),
    'CRC' => new C('CRC', 'Costa Rica koloon', narrow: '₡', plurals: ['one' => 'Costa Rica koloon', 'other' => 'Costa Rica kolooni']),
    'CSD' => new C('CSD', 'Serbia dinaar (2002–2006)', plurals: ['one' => 'Serbia dinaar (2002–2006)', 'other' => 'Serbia dinaari (2002–2006)']),
    'CUC' => new C('CUC', 'Kuuba konverteeritav peeso', narrow: '$', plurals: ['one' => 'Kuuba konverteeritav peeso', 'other' => 'Kuuba konverteeritavat peesot']),
    'CUP' => new C('CUP', 'Kuuba peeso', narrow: '$', plurals: ['one' => 'Kuuba peeso', 'other' => 'Kuuba peesot']),
    'CVE' => new C('CVE', 'Cabo Verde eskuudo', plurals: ['one' => 'Cabo Verde eskuudo', 'other' => 'Cabo Verde eskuudot']),
    'CYP' => new C('CYP', 'Küprose nael', plurals: ['one' => 'Küprose nael', 'other' => 'Küprose naela']),
    'CZK' => new C('CZK', 'Tšehhi kroon', narrow: 'Kč', plurals: ['one' => 'Tšehhi kroon', 'other' => 'Tšehhi krooni']),
    'DDM' => new C('DDM', 'Ida-Saksa mark', plurals: ['one' => 'Ida-Saksa mark', 'other' => 'Ida-Saksa marka']),
    'DEM' => new C('DEM', 'Saksa mark', plurals: ['one' => 'Saksa mark', 'other' => 'Saksa marka']),
    'DJF' => new C('DJF', 'Djibouti frank', plurals: ['one' => 'Djibouti frank', 'other' => 'Djibouti franki'], minorUnits: 0),
    'DKK' => new C('DKK', 'Taani kroon', narrow: 'kr', plurals: ['one' => 'Taani kroon', 'other' => 'Taani krooni']),
    'DOP' => new C('DOP', 'Dominikaani peeso', narrow: '$', plurals: ['one' => 'Dominikaani peeso', 'other' => 'Dominikaani peesot']),
    'DZD' => new C('DZD', 'Alžeeria dinaar', plurals: ['one' => 'Alžeeria dinaar', 'other' => 'Alžeeria dinaari']),
    'ECS' => new C('ECS', 'Ecuadori sukre', plurals: ['one' => 'Ecuadori sukre', 'other' => 'Ecuadori sukret']),
    'EEK' => new C('EEK', 'Eesti kroon', 'kr', plurals: ['one' => 'Eesti kroon', 'other' => 'Eesti krooni']),
    'EGP' => new C('EGP', 'Egiptuse nael', narrow: 'E£', plurals: ['one' => 'Egiptuse nael', 'other' => 'Egiptuse naela']),
    'ERN' => new C('ERN', 'Eritrea nakfa', plurals: ['one' => 'Eritrea nakfa', 'other' => 'Eritrea nakfat']),
    'ESP' => new C('ESP', 'Hispaania peseeta', narrow: '₧', plurals: ['one' => 'Hispaania peseeta', 'other' => 'Hispaania peseetat']),
    'ETB' => new C('ETB', 'Etioopia birr', plurals: ['one' => 'Etioopia birr', 'other' => 'Etioopia birri']),
    'EUR' => new C('EUR', 'euro', '€', narrow: '€', plurals: ['one' => 'euro', 'other' => 'eurot']),
    'FIM' => new C('FIM', 'Soome mark', plurals: ['one' => 'Soome mark', 'other' => 'Soome marka']),
    'FJD' => new C('FJD', 'Fidži dollar', narrow: '$', plurals: ['one' => 'Fidži dollar', 'other' => 'Fidži dollarit']),
    'FKP' => new C('FKP', 'Falklandi saarte nael', narrow: '£', plurals: ['one' => 'Falklandi saarte nael', 'other' => 'Falklandi saarte naela']),
    'FRF' => new C('FRF', 'Prantsuse frank', plurals: ['one' => 'Prantsuse frank', 'other' => 'Prantsuse franki']),
    'GBP' => new C('GBP', 'Suurbritannia naelsterling', '£', narrow: '£', plurals: ['one' => 'Suurbritannia naelsterling', 'other' => 'Suurbritannia naelsterlingit']),
    'GEL' => new C('GEL', 'Gruusia lari', narrow: '₾', plurals: 'Gruusia lari'),
    'GHC' => new C('GHC', 'Ghana sedi (1979–2007)', plurals: ['one' => 'Ghana sedi (1979–2007)', 'other' => 'Ghana sedit (1979–2007)']),
    'GHS' => new C('GHS', 'Ghana sedi', narrow: 'GH₵', plurals: ['one' => 'Ghana sedi', 'other' => 'Ghana sedit']),
    'GIP' => new C('GIP', 'Gibraltari nael', narrow: '£', plurals: ['one' => 'Gibraltari nael', 'other' => 'Gibraltari naela']),
    'GMD' => new C('GMD', 'Gambia dalasi', plurals: ['one' => 'Gambia dalasi', 'other' => 'Gambia dalasit']),
    'GNF' => new C('GNF', 'Guinea frank', narrow: 'FG', plurals: ['one' => 'Guinea frank', 'other' => 'Guinea franki'], minorUnits: 0),
    'GNS' => new C('GNS', 'Guinea syli'),
    'GRD' => new C('GRD', 'Kreeka drahm', plurals: ['one' => 'Kreeka drahm', 'other' => 'Kreeka drahmi']),
    'GTQ' => new C('GTQ', 'Guatemala ketsaal', narrow: 'Q', plurals: ['one' => 'Guatemala ketsaal', 'other' => 'Guatemala ketsaali']),
    'GWE' => new C('GWE', 'Portugali Guinea eskuudo', plurals: ['one' => 'Portugali Guinea eskuudo', 'other' => 'Portugali Guinea eskuudot']),
    'GWP' => new C('GWP', 'Guinea-Bissau peeso', plurals: ['one' => 'Guinea-Bissau peeso', 'other' => 'Guinea-Bissau peesot']),
    'GYD' => new C('GYD', 'Guyana dollar', narrow: '$', plurals: ['one' => 'Guyana dollar', 'other' => 'Guyana dollarit']),
    'HKD' => new C('HKD', 'Hongkongi dollar', 'HK$', narrow: '$', plurals: ['one' => 'Hongkongi dollar', 'other' => 'Hongkongi dollarit']),
    'HNL' => new C('HNL', 'Hondurase lempiira', narrow: 'L', plurals: ['one' => 'Hondurase lempiira', 'other' => 'Hondurase lempiirat']),
    'HRD' => new C('HRD', 'Horvaatia dinaar', plurals: ['one' => 'Horvaatia dinaar', 'other' => 'Horvaatia dinaari']),
    'HRK' => new C('HRK', 'Horvaatia kuna', narrow: 'kn', plurals: 'Horvaatia kuna'),
    'HTG' => new C('HTG', 'Haiti gurd', plurals: ['one' => 'Haiti gurd', 'other' => 'Haiti gurdi']),
    'HUF' => new C('HUF', 'Ungari forint', narrow: 'Ft', plurals: ['one' => 'Ungari forint', 'other' => 'Ungari forintit']),
    'IDR' => new C('IDR', 'Indoneesia ruupia', narrow: 'Rp', plurals: ['one' => 'Indoneesia ruupia', 'other' => 'Indoneesia ruupiat']),
    'IEP' => new C('IEP', 'Iiri nael', plurals: ['one' => 'Iiri nael', 'other' => 'Iiri naela']),
    'ILP' => new C('ILP', 'Iisraeli nael', plurals: ['one' => 'Iisraeli nael', 'other' => 'Iisraeli naela']),
    'ILR' => new C('ILR', 'Iisraeli seekel (1980–1985)', plurals: ['one' => 'Iisraeli seekel (1980–1985)', 'other' => 'Iisraeli seekelit (1980–1985)']),
    'ILS' => new C('ILS', 'Iisraeli uus seekel', '₪', narrow: '₪', plurals: ['one' => 'Iisraeli uus seekel', 'other' => 'Iisraeli uut seeklit']),
    'INR' => new C('INR', 'India ruupia', '₹', narrow: '₹', plurals: ['one' => 'India ruupia', 'other' => 'India ruupiat']),
    'IQD' => new C('IQD', 'Iraagi dinaar', plurals: ['one' => 'Iraagi dinaar', 'other' => 'Iraagi dinaari'], minorUnits: 3),
    'IRR' => new C('IRR', 'Iraani riaal', plurals: ['one' => 'Iraani riaal', 'other' => 'Iraani riaali']),
    'ISJ' => new C('ISJ', 'Islandi kroon (1918–1981)', plurals: ['one' => 'Islandi kroon (1918–1981)', 'other' => 'Islandi krooni (1918–1981)']),
    'ISK' => new C('ISK', 'Islandi kroon', narrow: 'kr', plurals: ['one' => 'Islandi kroon', 'other' => 'Islandi krooni'], minorUnits: 0),
    'ITL' => new C('ITL', 'Itaalia liir', plurals: ['one' => 'Itaalia liir', 'other' => 'Itaalia liiri']),
    'JMD' => new C('JMD', 'Jamaica dollar', narrow: '$', plurals: ['one' => 'Jamaica dollar', 'other' => 'Jamaica dollarit']),
    'JOD' => new C('JOD', 'Jordaania dinaar', plurals: ['one' => 'Jordaania dinaar', 'other' => 'Jordaania dinaari'], minorUnits: 3),
    'JPY' => new C('JPY', 'Jaapani jeen', '¥', narrow: '¥', plurals: ['one' => 'Jaapani jeen', 'other' => 'Jaapani jeeni'], minorUnits: 0),
    'KES' => new C('KES', 'Keenia šilling', plurals: ['one' => 'Keenia šilling', 'other' => 'Keenia šillingit']),
    'KGS' => new C('KGS', 'Kõrgõzstani somm', plurals: ['one' => 'Kõrgõzstani somm', 'other' => 'Kõrgõzstani sommi']),
    'KHR' => new C('KHR', 'Kambodža riaal', narrow: '៛', plurals: ['one' => 'Kambodža riaal', 'other' => 'Kambodža riaali']),
    'KMF' => new C('KMF', 'Komoori frank', narrow: 'CF', plurals: ['one' => 'Komoori frank', 'other' => 'Komoori franki'], minorUnits: 0),
    'KPW' => new C('KPW', 'Põhja-Korea vonn', narrow: '₩', plurals: ['one' => 'Põhja-Korea vonn', 'other' => 'Põhja-Korea vonni']),
    'KRO' => new C('KRO', 'Lõuna-Korea vonn (1945–1953)', plurals: ['one' => 'Lõuna-Korea vonn (1945–1953)', 'other' => 'Lõuna-Korea vonni (1945–1953)']),
    'KRW' => new C('KRW', 'Lõuna-Korea vonn', '₩', narrow: '₩', plurals: ['one' => 'Lõuna-Korea vonn', 'other' => 'Lõuna-Korea vonni'], minorUnits: 0),
    'KWD' => new C('KWD', 'Kuveidi dinaar', plurals: ['one' => 'Kuveidi dinaar', 'other' => 'Kuveidi dinaari'], minorUnits: 3),
    'KYD' => new C('KYD', 'Kaimanisaarte dollar', narrow: '$', plurals: ['one' => 'Kaimanisaarte dollar', 'other' => 'Kaimanisaarte dollarit']),
    'KZT' => new C('KZT', 'Kasahstani tenge', narrow: '₸', plurals: ['one' => 'Kasahstani tenge', 'other' => 'Kasahstani tenget']),
    'LAK' => new C('LAK', 'Laose kiip', narrow: '₭', plurals: ['one' => 'Laose kiip', 'other' => 'Laose kiipi']),
    'LBP' => new C('LBP', 'Liibanoni nael', narrow: 'L£', plurals: ['one' => 'Liibanoni nael', 'other' => 'Liibanoni naela']),
    'LKR' => new C('LKR', 'Sri Lanka ruupia', narrow: 'Rs', plurals: ['one' => 'Sri Lanka ruupia', 'other' => 'Sri Lanka ruupiat']),
    'LRD' => new C('LRD', 'Libeeria dollar', narrow: '$', plurals: ['one' => 'Libeeria dollar', 'other' => 'Libeeria dollarit']),
    'LSL' => new C('LSL', 'Lesotho loti', plurals: ['one' => 'Lesotho loti', 'other' => 'Lesotho lotit']),
    'LTL' => new C('LTL', 'Leedu litt', narrow: 'Lt', plurals: ['one' => 'Leedu litt', 'other' => 'Leedu litti']),
    'LUC' => new C('LUC', 'Luksemburgi konverteeritav frank', plurals: ['one' => 'Luksemburgi konverteeritav frank', 'other' => 'Luksemburgi konverteeritavat franki']),
    'LUF' => new C('LUF', 'Luksemburgi frank', plurals: ['one' => 'Luksemburgi frank', 'other' => 'Luksemburgi franki']),
    'LVL' => new C('LVL', 'Läti latt', narrow: 'Ls', plurals: ['one' => 'Läti latt', 'other' => 'Läti latti']),
    'LVR' => new C('LVR', 'Läti rubla', plurals: 'Läti rubla'),
    'LYD' => new C('LYD', 'Liibüa dinaar', plurals: ['one' => 'Liibüa dinaar', 'other' => 'Liibüa dinaari'], minorUnits: 3),
    'MAD' => new C('MAD', 'Maroko dirhem', plurals: ['one' => 'Maroko dirhem', 'other' => 'Maroko dirhemit']),
    'MAF' => new C('MAF', 'Maroko frank', plurals: ['one' => 'Maroko frank', 'other' => 'Maroko franki']),
    'MCF' => new C('MCF', 'Monaco frank', plurals: ['one' => 'Monaco frank', 'other' => 'Monaco franki']),
    'MDL' => new C('MDL', 'Moldova leu', plurals: ['one' => 'Moldova leu', 'other' => 'Moldova leud']),
    'MGA' => new C('MGA', 'Madagaskari ariari', narrow: 'Ar', plurals: ['one' => 'Madagaskari ariari', 'other' => 'Madagaskari ariarit']),
    'MGF' => new C('MGF', 'Madagaskari frank', plurals: ['one' => 'Madagaskari frank', 'other' => 'Madagaskar franki']),
    'MKD' => new C('MKD', 'Makedoonia dinaar', plurals: ['one' => 'Makedoonia dinaar', 'other' => 'Makedoonia dinaari']),
    'MKN' => new C('MKN', 'Makedoonia dinaar (1992–1993)', plurals: ['one' => 'Makedoonia dinaar (1992–1993)', 'other' => 'Makedoonia dinaari (1992–1993)']),
    'MLF' => new C('MLF', 'Mali frank', plurals: ['one' => 'Mali frank', 'other' => 'Mali franki']),
    'MMK' => new C('MMK', 'Myanmari kjatt', narrow: 'K', plurals: ['one' => 'Myanmari kjatt', 'other' => 'Myanmari kjatti']),
    'MNT' => new C('MNT', 'Mongoolia tugrik', narrow: '₮', plurals: ['one' => 'Mongoolia tugrik', 'other' => 'Mongoolia tugrikut']),
    'MOP' => new C('MOP', 'Macau pataaka', plurals: ['one' => 'Macau pataaka', 'other' => 'Macau pataakat']),
    'MRO' => new C('MRO', 'Mauritaania ugia (1973–2017)', plurals: ['one' => 'Mauritaania ugia (1973–2017)', 'other' => 'Mauritaania ugiat (1973–2017)']),
    'MRU' => new C('MRU', 'Mauritaania ugia', plurals: ['one' => 'Mauritaania ugia', 'other' => 'Mauritaania ugiat']),
    'MTL' => new C('MTL', 'Malta liir', plurals: ['one' => 'Malta liir', 'other' => 'Malta liiri']),
    'MTP' => new C('MTP', 'Malta nael', plurals: ['one' => 'Malta nael', 'other' => 'Malta naela']),
    'MUR' => new C('MUR', 'Mauritiuse ruupia', narrow: 'Rs', plurals: ['one' => 'Mauritiuse ruupia', 'other' => 'Mauritiuse ruupiat']),
    'MVP' => new C('MVP', 'Maldiivi ruupia (1947–1981)', plurals: ['one' => 'Maldiivi ruupia (1947–1981)', 'other' => 'Maldiivi ruupiat (1947–1981)']),
    'MVR' => new C('MVR', 'Maldiivi ruupia', plurals: ['one' => 'Maldiivi ruupia', 'other' => 'Maldiivi ruupiat']),
    'MWK' => new C('MWK', 'Malawi kvatša', plurals: ['one' => 'Malawi kvatša', 'other' => 'Malawi kvatšat']),
    'MXN' => new C('MXN', 'Mehhiko peeso', 'MX$', narrow: '$', plurals: ['one' => 'Mehhiko peeso', 'other' => 'Mehhiko peesot']),
    'MXP' => new C('MXP', 'Mehhiko peeso (1861–1992)', plurals: ['one' => 'Mehhiko peeso (1861–1992)', 'other' => 'Mehhiko peesot (1861–1992)']),
    'MYR' => new C('MYR', 'Malaisia ringgit', narrow: 'RM', plurals: ['one' => 'Malaisia ringgit', 'other' => 'Malaisia ringgitit']),
    'MZE' => new C('MZE', 'Mosambiigi eskuudo', plurals: ['one' => 'Mosambiigi eskuudo', 'other' => 'Mosambiigi eskuudot']),
    'MZM' => new C('MZM', 'Mosambiigi metikal (1980–2006)', plurals: ['one' => 'Mosambiigi metikal (1980–2006)', 'other' => 'Mosambiigi metikali (1980–2006)']),
    'MZN' => new C('MZN', 'Mosambiigi metikal', plurals: ['one' => 'Mosambiigi metikal', 'other' => 'Mosambiigi metikali']),
    'NAD' => new C('NAD', 'Namiibia dollar', narrow: '$', plurals: ['one' => 'Namiibia dollar', 'other' => 'Namiibia dollarit']),
    'NGN' => new C('NGN', 'Nigeeria naira', narrow: '₦', plurals: ['one' => 'Nigeeria naira', 'other' => 'Nigeeria nairat']),
    'NIC' => new C('NIC', 'Nicaragua kordoba (1988–1991)', plurals: ['one' => 'Nicaragua kordoba (1988–1991)', 'other' => 'Nicaragua kordobat (1988–1991)']),
    'NIO' => new C('NIO', 'Nicaragua kordoba', narrow: 'C$', plurals: ['one' => 'Nicaragua kordoba', 'other' => 'Nicaragua kordobat']),
    'NLG' => new C('NLG', 'Hollandi kulden', plurals: ['one' => 'Hollandi kulden', 'other' => 'Hollandi kuldnat']),
    'NOK' => new C('NOK', 'Norra kroon', narrow: 'kr', plurals: ['one' => 'Norra kroon', 'other' => 'Norra krooni']),
    'NPR' => new C('NPR', 'Nepali ruupia', narrow: 'Rs', plurals: ['one' => 'Nepali ruupia', 'other' => 'Nepali ruupiat']),
    'NZD' => new C('NZD', 'Uus-Meremaa dollar', 'NZ$', narrow: '$', plurals: ['one' => 'Uus-Meremaa dollar', 'other' => 'Uus-Meremaa dollarit']),
    'OMR' => new C('OMR', 'Omaani riaal', plurals: ['one' => 'Omaani riaal', 'other' => 'Omaani riaali'], minorUnits: 3),
    'PAB' => new C('PAB', 'Panama balboa', plurals: ['one' => 'Panama balboa', 'other' => 'Panama balboad']),
    'PEI' => new C('PEI', 'Peruu inti'),
    'PEN' => new C('PEN', 'Peruu soll', plurals: ['one' => 'Peruu soll', 'other' => 'Peruu solli']),
    'PES' => new C('PES', 'Peruu soll (1863–1965)', plurals: ['one' => 'Peruu soll (1863–1965)', 'other' => 'Peruu solli (1863–1965)']),
    'PGK' => new C('PGK', 'Paapua Uus-Guinea kina', plurals: ['one' => 'Paapua Uus-Guinea kina', 'other' => 'Paapua Uus-Guinea kinat']),
    'PHP' => new C('PHP', 'Filipiini peeso', narrow: '₱', plurals: ['one' => 'Filipiini peeso', 'other' => 'Filipiini peesot']),
    'PKR' => new C('PKR', 'Pakistani ruupia', narrow: 'Rs', plurals: ['one' => 'Pakistani ruupia', 'other' => 'Pakistani ruupiat']),
    'PLN' => new C('PLN', 'Poola zlott', narrow: 'zł', plurals: ['one' => 'Poola zlott', 'other' => 'Poola zlotti']),
    'PLZ' => new C('PLZ', 'Poola zlott (1950–1995)', plurals: ['one' => 'Poola zlott (1950–1995)', 'other' => 'Poola zlotti (1950–1995)']),
    'PTE' => new C('PTE', 'Portugali eskuudo', plurals: ['one' => 'Portugali eskuudo', 'other' => 'Portugali eskuudot']),
    'PYG' => new C('PYG', 'Paraguay guaranii', narrow: '₲', plurals: ['one' => 'Paraguay guaranii', 'other' => 'Paraguay guaraniid'], minorUnits: 0),
    'QAR' => new C('QAR', 'Katari riaal', plurals: ['one' => 'Katari riaal', 'other' => 'Katari riaali']),
    'RHD' => new C('RHD', 'Rodeesia dollar', plurals: ['one' => 'Rodeesia dollar', 'other' => 'Rodeesia dollarit']),
    'ROL' => new C('ROL', 'Rumeenia leu (1952–2006)', plurals: ['one' => 'Rumeenia leu (1952–2006)', 'other' => 'Rumeenia leud (1952–2006)']),
    'RON' => new C('RON', 'Rumeenia leu', narrow: 'lei', plurals: ['one' => 'Rumeenia leu', 'other' => 'Rumeenia leud']),
    'RSD' => new C('RSD', 'Serbia dinaar', plurals: ['one' => 'Serbia dinaar', 'other' => 'Serbia dinaari']),
    'RUB' => new C('RUB', 'Venemaa rubla', narrow: '₽', plurals: 'Venemaa rubla'),
    'RUR' => new C('RUR', 'Venemaa rubla (1991–1998)'),
    'RWF' => new C('RWF', 'Rwanda frank', narrow: 'RF', plurals: ['one' => 'Rwanda frank', 'other' => 'Rwanda franki'], minorUnits: 0),
    'SAR' => new C('SAR', 'Saudi Araabia riaal', plurals: ['one' => 'Saudi Araabia riaal', 'other' => 'Saudi Araabia riaali']),
    'SBD' => new C('SBD', 'Saalomoni Saarte dollar', narrow: '$', plurals: ['one' => 'Saalomoni Saarte dollar', 'other' => 'Saalomoni Saarte dollarit']),
    'SCR' => new C('SCR', 'Seišelli ruupia', plurals: ['one' => 'Seišelli ruupia', 'other' => 'Seišelli ruupiat']),
    'SDD' => new C('SDD', 'Sudaani dinaar (1992–2007)', plurals: ['one' => 'Sudaani dinaar (1992–2007)', 'other' => 'Sudaani dinaari (1992–2007)']),
    'SDG' => new C('SDG', 'Sudaani nael', plurals: ['one' => 'Sudaani nael', 'other' => 'Sudaani naela']),
    'SDP' => new C('SDP', 'Sudaani nael (1957–1998)', plurals: ['one' => 'Sudaani nael (1957–1998)', 'other' => 'Sudaani naela (1957–1998)']),
    'SEK' => new C('SEK', 'Rootsi kroon', narrow: 'kr', plurals: ['one' => 'Rootsi kroon', 'other' => 'Rootsi krooni']),
    'SGD' => new C('SGD', 'Singapuri dollar', narrow: '$', plurals: ['one' => 'Singapuri dollar', 'other' => 'Singapuri dollarit']),
    'SHP' => new C('SHP', 'Saint Helena nael', narrow: '£', plurals: ['one' => 'Saint Helena nael', 'other' => 'Saint Helena naela']),
    'SIT' => new C('SIT', 'Sloveenia tolar', plurals: ['one' => 'Sloveenia tolar', 'other' => 'Sloveenia tolarit']),
    'SKK' => new C('SKK', 'Slovaki kroon', plurals: ['one' => 'Slovaki kroon', 'other' => 'Slovaki krooni']),
    'SLL' => new C('SLL', 'Sierra Leone leoone', plurals: ['one' => 'Sierra Leone leoone', 'other' => 'Sierra Leone leoonet']),
    'SOS' => new C('SOS', 'Somaalia šilling', plurals: ['one' => 'Somaalia šilling', 'other' => 'Somaalia šillingit']),
    'SRD' => new C('SRD', 'Suriname dollar', narrow: '$', plurals: ['one' => 'Suriname dollar', 'other' => 'Suriname dollarit']),
    'SRG' => new C('SRG', 'Suriname kulden', plurals: ['one' => 'Suriname kulden', 'other' => 'Suriname kuldnat']),
    'SSP' => new C('SSP', 'Lõuna-Sudaani nael', narrow: '£', plurals: ['one' => 'Lõuna-Sudaani nael', 'other' => 'Lõuna-Sudaani naela']),
    'STD' => new C('STD', 'São Tomé ja Príncipe dobra (1977–2017)', plurals: ['one' => 'São Tomé ja Príncipe dobra (1977–2017)', 'other' => 'São Tomé ja Príncipe dobrat (1977–2017)']),
    'STN' => new C('STN', 'São Tomé ja Príncipe dobra', narrow: 'Db', plurals: ['one' => 'São Tomé ja Príncipe dobra', 'other' => 'São Tomé ja Príncipe dobrat']),
    'SUR' => new C('SUR', 'NSVL-i rubla'),
    'SVC' => new C('SVC', 'El Salvadori koloon', plurals: ['one' => 'El Salvadori koloon', 'other' => 'El Salvadori kolooni']),
    'SYP' => new C('SYP', 'Süüria nael', narrow: '£', plurals: ['one' => 'Süüria nael', 'other' => 'Süüria naela']),
    'SZL' => new C('SZL', 'Svaasimaa lilangeni', plurals: ['one' => 'Svaasimaa lilangeni', 'other' => 'Svaasimaa lilangenit']),
    'THB' => new C('THB', 'Tai baat', '฿', narrow: '฿', plurals: ['one' => 'Tai baat', 'other' => 'Tai baati']),
    'TJR' => new C('TJR', 'Tadžikistani rubla', plurals: 'Tadžikistani rubla'),
    'TJS' => new C('TJS', 'Tadžikistani somoni', plurals: ['one' => 'Tadžikistani somoni', 'other' => 'Tadžikistani somonit']),
    'TMM' => new C('TMM', 'Türkmenistani manat (1993–2009)', plurals: ['one' => 'Türkmenistani manat (1993–2009)', 'other' => 'Türkmenistani manatit (1993–2009)']),
    'TMT' => new C('TMT', 'Türkmenistani manat', plurals: ['one' => 'Türkmenistani manat', 'other' => 'Türkmenistani manatit']),
    'TND' => new C('TND', 'Tuneesia dinaar', plurals: ['one' => 'Tuneesia dinaar', 'other' => 'Tuneesia dinaari'], minorUnits: 3),
    'TOP' => new C('TOP', 'Tonga pa’anga', narrow: 'T$', plurals: ['one' => 'Tonga pa’anga', 'other' => 'Tonga pa’angat']),
    'TPE' => new C('TPE', 'Timori eskuudo', plurals: ['one' => 'Timori eskuudo', 'other' => 'Timori eskuudot']),
    'TRL' => new C('TRL', 'Türgi liir (1922–2005)', plurals: ['one' => 'Türgi liir (1922–2005)', 'other' => 'Türgi liiri (1922–2005)']),
    'TRY' => new C('TRY', 'Türgi liir', narrow: '₺', plurals: ['one' => 'Türgi liir', 'other' => 'Türgi liiri']),
    'TTD' => new C('TTD', 'Trinidadi ja Tobago dollar', narrow: '$', plurals: ['one' => 'Trinidadi ja Tobago dollar', 'other' => 'Trinidadi ja Tobago dollarit']),
    'TWD' => new C('TWD', 'uus Taiwani dollar', 'NT$', narrow: 'NT$', plurals: ['one' => 'uus Taiwani dollar', 'other' => 'uut Taiwani dollarit']),
    'TZS' => new C('TZS', 'Tansaania šilling', plurals: ['one' => 'Tansaania šilling', 'other' => 'Tansaania šillingit']),
    'UAH' => new C('UAH', 'Ukraina grivna', narrow: '₴', plurals: ['one' => 'Ukraina grivna', 'other' => 'Ukraina grivnat']),
    'UAK' => new C('UAK', 'Ukraina karbovanets'),
    'UGS' => new C('UGS', 'Uganda šilling (1966–1987)', plurals: ['one' => 'Uganda šilling (1966–1987)', 'other' => 'Uganda šillingit (1966–1987)']),
    'UGX' => new C('UGX', 'Uganda šilling', plurals: ['one' => 'Uganda šilling', 'other' => 'Uganda šillingit'], minorUnits: 0),
    'USD' => new C('USD', 'USA dollar', '$', narrow: '$', plurals: ['one' => 'USA dollar', 'other' => 'USA dollarit']),
    'USN' => new C('USN', 'USA järgmise päeva dollar'),
    'USS' => new C('USS', 'USA sama päeva dollar'),
    'UYP' => new C('UYP', 'Uruguay peeso (1975–1993)', plurals: ['one' => 'Uruguay peeso (1975–1993)', 'other' => 'Uruguay peesot (1975–1993)']),
    'UYU' => new C('UYU', 'Uruguay peeso', narrow: '$', plurals: ['one' => 'Uruguay peeso', 'other' => 'Uruguay peesot']),
    'UZS' => new C('UZS', 'Usbekistani somm', plurals: ['one' => 'Usbekistani somm', 'other' => 'Usbekistani sommi']),
    'VEB' => new C('VEB', 'Venezuela boliivar (1871–2008)', plurals: ['one' => 'Venezuela boliivar (1871–2008)', 'other' => 'Venezuela boliivarit (1871–2008)']),
    'VEF' => new C('VEF', 'Venezuela boliivar (2008–2018)', narrow: 'Bs', plurals: ['one' => 'Venezuela boliivar (2008–2018)', 'other' => 'Venezuela boliivarit (2008–2018)']),
    'VES' => new C('VES', 'Venezuela boliivar', plurals: ['one' => 'Venezuela boliivar', 'other' => 'Venezuela boliivarit']),
    'VND' => new C('VND', 'Vietnami dong', '₫', narrow: '₫', plurals: ['one' => 'Vietnami dong', 'other' => 'Vietnami dongi'], minorUnits: 0),
    'VNN' => new C('VNN', 'Vietnami dong (1978–1985)', plurals: ['one' => 'Vietnami dong (1978–1985)', 'other' => 'Vietnami dongi (1978–1985)']),
    'VUV' => new C('VUV', 'Vanuatu vatu', plurals: ['one' => 'Vanuatu vatu', 'other' => 'Vanuatu vatut'], minorUnits: 0),
    'WST' => new C('WST', 'Samoa taala', plurals: ['one' => 'Samoa taala', 'other' => 'Samoa taalat']),
    'XAF' => new C('XAF', 'Kesk-Aafrika CFA frank', 'FCFA', plurals: ['one' => 'Kesk-Aafrika CFA frank', 'other' => 'Kesk-Aafrika CFA franki'], minorUnits: 0),
    'XAG' => new C('XAG', 'hõbe', plurals: ['one' => 'troiunts hõbedat', 'other' => 'troiuntsi hõbedat']),
    'XAU' => new C('XAU', 'kuld', plurals: ['one' => 'troiunts kulda', 'other' => 'troiuntsi kulda']),
    'XBA' => new C('XBA', 'EURCO'),
    'XBB' => new C('XBB', 'Euroopa rahaühik'),
    'XBC' => new C('XBC', 'Euroopa rahaline arvestusühik (XBC)'),
    'XBD' => new C('XBD', 'Euroopa rahaline arvestusühik (XBD)'),
    'XCD' => new C('XCD', 'Ida-Kariibi dollar', 'EC$', narrow: '$', plurals: ['one' => 'Ida-Kariibi dollar', 'other' => 'Ida-Kariibi dollarit']),
    'XDR' => new C('XDR', 'Rahvusvahelise Valuutafondi arvestusühik'),
    'XEU' => new C('XEU', 'eküü', plurals: ['one' => 'eküü', 'other' => 'eküüd']),
    'XFO' => new C('XFO', 'Prantsuse kuldfrank', plurals: ['one' => 'Prantsuse kuldfrank', 'other' => 'Prantsuse kuldfranki']),
    'XFU' => new C('XFU', 'Prantsuse UIC-frank'),
    'XOF' => new C('XOF', 'Lääne-Aafrika CFA frank', "F\u{202F}CFA", plurals: ['one' => 'Lääne-Aafrika CFA frank', 'other' => 'Lääne-Aafrika CFA franki'], minorUnits: 0),
    'XPD' => new C('XPD', 'pallaadium', plurals: ['one' => 'troiunts pallaadiumit', 'other' => 'troiuntsi pallaadiumit']),
    'XPF' => new C('XPF', 'CFP frank', 'CFPF', plurals: ['one' => 'CFP frank', 'other' => 'CFP franki'], minorUnits: 0),
    'XPT' => new C('XPT', 'plaatina', plurals: ['one' => 'troiunts plaatinat', 'other' => 'troiuntsi plaatinat']),
    'XTS' => new C('XTS', 'vääringute testkood'),
    'XXX' => new C('XXX', 'määramata rahaühik', '¤', plurals: ['one' => '(määramata rahaühik)', 'other' => '(määramata rahaühikut)']),
    'YDD' => new C('YDD', 'Jeemeni dinaar', plurals: ['one' => 'Jeemeni dinaar', 'other' => 'Jeemeni dinaari']),
    'YER' => new C('YER', 'Jeemeni riaal', plurals: ['one' => 'Jeemeni riaal', 'other' => 'Jeemeni riaali']),
    'YUM' => new C('YUM', 'Jugoslaavia uus dinaar (1994–2002)', plurals: ['one' => 'Jugoslaavia uus dinaar (1994–2002)', 'other' => 'Jugoslaavia uut dinaari (1994–2002)']),
    'YUN' => new C('YUN', 'Jugoslaavia konverteeritav dinaar (1990–1992)', plurals: ['one' => 'Jugoslaavia konverteeritav dinaar (1990–1992)', 'other' => 'Jugoslaavia konverteeritavat dinaari (1990–1992)']),
    'ZAR' => new C('ZAR', 'Lõuna-Aafrika rand', narrow: 'R', plurals: ['one' => 'Lõuna-Aafrika rand', 'other' => 'Lõuna-Aafrika randi']),
    'ZMK' => new C('ZMK', 'Sambia kvatša (1968–2012)', plurals: ['one' => 'Sambia kvatša (1968–2012)', 'other' => 'Sambia kvatšat (1968–2012)']),
    'ZMW' => new C('ZMW', 'Sambia kvatša', narrow: 'ZK', plurals: ['one' => 'Sambia kvatša', 'other' => 'Sambia kvatšat']),
    'ZRZ' => new C('ZRZ', 'Sairi zaire'),
    'ZWD' => new C('ZWD', 'Zimbabwe dollar (1980–2008)', plurals: ['one' => 'Zimbabwe dollar (1980–2008)', 'other' => 'Zimbabwe dollarit (1980–2008)']),
    'ZWL' => new C('ZWL', 'Zimbabwe dollar (2009)', plurals: ['one' => 'Zimbabwe dollar (2009)', 'other' => 'Zimbabwe dollarit (2009)']),
    'ZWR' => new C('ZWR', 'Zimbabwe dollar (2008)', plurals: ['one' => 'Zimbabwe dollar (2008)', 'other' => 'Zimbabwe dollarit (2008)']),
];
