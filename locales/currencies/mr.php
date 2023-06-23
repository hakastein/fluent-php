<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'संयुक्त अरब अमीरात दिरहॅम', plurals: 'संयुक्त अरब अमीरात दिरहॅम'),
    'AFN' => new C('AFN', 'अफगाण अफगाणी', narrow: '؋', plurals: 'अफगाण अफगाणी'),
    'ALL' => new C('ALL', 'अल्बानियन लेक', plurals: ['one' => 'अल्बानियन लेक', 'other' => 'अल्बानियन लेके']),
    'AMD' => new C('AMD', 'आर्मेनियन द्रॅम', narrow: '֏', plurals: 'आर्मेनियन द्रॅम'),
    'ANG' => new C('ANG', 'नेदरलँडचा अँटिलीन गिल्डर', plurals: ['one' => 'नेदरलँडचा अँटिलीन गिल्डर', 'other' => 'नेदरलँडचे अँटिलीन गिल्डर्स']),
    'AOA' => new C('AOA', 'अँगोलन क्वॅन्झा', narrow: 'Kz', plurals: ['one' => 'अँगोलन क्वॅन्झा', 'other' => 'अँगोलन क्वॅन्झास']),
    'ARS' => new C('ARS', 'अर्जेंटाइन पेसो', narrow: '$', plurals: ['one' => 'अर्जेंटाइन पेसो', 'other' => 'अर्जेंटाइन पेसोज']),
    'AUD' => new C('AUD', 'ऑस्ट्रेलियन डॉलर', 'A$', narrow: '$', plurals: ['one' => 'ऑस्ट्रेलियन डॉलर', 'other' => 'ऑस्ट्रेलियन डॉलर्स']),
    'AWG' => new C('AWG', 'अरुबा फ्लोरिन', plurals: 'अरुबा फ्लोरिन'),
    'AZN' => new C('AZN', 'अझरबैझानी मानाट', narrow: '₼', plurals: 'अझरबैझानी मानाट'),
    'BAM' => new C('BAM', 'बोस्निया-हर्जेगोविना विनिमय मार्क', narrow: 'KM', plurals: ['one' => 'बोस्निया-हर्जेगोविना विनिमय मार्क', 'other' => 'बोस्निया-हर्जेगोविना विनिमय मार्क्स']),
    'BBD' => new C('BBD', 'बार्बाडियन डॉलर', narrow: '$', plurals: ['one' => 'बार्बाडियन डॉलर', 'other' => 'बार्बाडियन डॉलर्स']),
    'BDT' => new C('BDT', 'बांगलादेशी टका', narrow: '৳', plurals: 'बांगलादेशी टका'),
    'BGN' => new C('BGN', 'बल्गेरियन लेव', plurals: ['one' => 'बल्गेरियन लेव', 'other' => 'बल्गेरियन लेवा']),
    'BHD' => new C('BHD', 'बाहरिनी दिनार', plurals: 'बाहरिनी दिनार', minorUnits: 3),
    'BIF' => new C('BIF', 'बुरुंडियन फ्रँक', plurals: ['one' => 'बुरुंडियन फ्रँक', 'other' => 'बुरुंडियन फ्रँक्स'], minorUnits: 0),
    'BMD' => new C('BMD', 'बर्मुडा डॉलर', narrow: '$', plurals: ['one' => 'बर्मुडा डॉलर', 'other' => 'बर्मुडा डॉलर्स']),
    'BND' => new C('BND', 'ब्रुनेई डॉलर', narrow: '$', plurals: ['one' => 'ब्रुनेई डॉलर', 'other' => 'ब्रुनेई डॉलर्स']),
    'BOB' => new C('BOB', 'बोलिव्हियन बोलिव्हियानो', narrow: 'Bs', plurals: ['one' => 'बोलिव्हियन बोलिव्हियानो', 'other' => 'बोलिव्हियन बोलिव्हियानोज']),
    'BRL' => new C('BRL', 'ब्राझिलियन रियाल', 'R$', narrow: 'R$', plurals: ['one' => 'ब्राझिलियन रियाल', 'other' => 'ब्राझिलियन रियाल्स']),
    'BSD' => new C('BSD', 'बहामी डॉलर', narrow: '$', plurals: ['one' => 'बहामी डॉलर', 'other' => 'बहामी डॉलर्स']),
    'BTN' => new C('BTN', 'भूतानी एंगल्ट्रम', plurals: 'भूतानी एंगल्ट्रम'),
    'BWP' => new C('BWP', 'बोट्सवानन पुला', narrow: 'P', plurals: ['one' => 'बोट्सवानन पुला', 'other' => 'बोट्सवाना पुलाज']),
    'BYN' => new C('BYN', 'बेलारुशियन रुबल', plurals: ['one' => 'बेलारुशियन रुबल', 'other' => 'बेलारुशियन रुबल्स']),
    'BYR' => new C('BYR', 'बेलारुशियन रुबल (2000–2016)', plurals: ['one' => 'बेलारुशियन रुबल (2000–2016)', 'other' => 'बेलारुशियन रुबल्स (2000–2016)']),
    'BZD' => new C('BZD', 'बेलीझ डॉलर', narrow: '$', plurals: ['one' => 'बेलीझ डॉलर', 'other' => 'बेलीझ डॉलर्स']),
    'CAD' => new C('CAD', 'कॅनडियन डॉलर', 'CA$', narrow: '$', plurals: ['one' => 'कॅनडियन डॉलर', 'other' => 'कॅनडियन डॉलर्स']),
    'CDF' => new C('CDF', 'काँगोलीज फ्रँक', plurals: ['one' => 'काँगोलीज फ्रँक', 'other' => 'काँगोलीज फ्रँक्स']),
    'CHF' => new C('CHF', 'स्विस फ्रँक', plurals: ['one' => 'स्विस फ्रँक', 'other' => 'स्विस फ्रँक्स']),
    'CLP' => new C('CLP', 'चिली पेसो', narrow: '$', plurals: ['one' => 'चिली पेसो', 'other' => 'चिली पेसोज'], minorUnits: 0),
    'CNH' => new C('CNH', 'चिनी युआन (ऑफशोर)', plurals: 'चिनी युआन (ऑफशोर)'),
    'CNY' => new C('CNY', 'चीनी युआन', 'CN¥', narrow: '¥', plurals: 'चीनी युआन'),
    'COP' => new C('COP', 'कोलंबियन पेसो', narrow: '$', plurals: ['one' => 'कोलंबियन पेसो', 'other' => 'कोलंबियन पेसोज']),
    'CRC' => new C('CRC', 'कोस्टारिकन कोलोन', narrow: '₡', plurals: ['one' => 'कोस्टारिकन कोलोन', 'other' => 'कोस्टारिकन कोलोन्स']),
    'CUC' => new C('CUC', 'क्यूबन विनिमय पेसो', narrow: '$', plurals: ['one' => 'क्यूबन विनिमय पेसो', 'other' => 'क्यूबन विनिमय पेसोज']),
    'CUP' => new C('CUP', 'क्यूबन पेसो', narrow: '$', plurals: ['one' => 'क्यूबन पेसो', 'other' => 'क्यूबन पेसोज']),
    'CVE' => new C('CVE', 'केप व्हर्डेयन एस्कुडो', plurals: ['one' => 'केप व्हर्डेयन एस्कुडो', 'other' => 'केप व्हर्डेयन एस्कुडोज']),
    'CZK' => new C('CZK', 'झेक प्रजासत्ताक कोरुना', narrow: 'Kč', plurals: ['one' => 'झेक प्रजासत्ताक कोरुना', 'other' => 'झेक प्रजासत्ताक कोरुनाज']),
    'DJF' => new C('DJF', 'जिबौटियन फ्रँक', plurals: ['one' => 'जिबौटियन फ्रँक', 'other' => 'जिबौटियन फ्रँक्स'], minorUnits: 0),
    'DKK' => new C('DKK', 'डॅनिश क्रोन', narrow: 'kr', plurals: 'डॅनिश क्रोन'),
    'DOP' => new C('DOP', 'डोमिनिकन पेसो', narrow: '$', plurals: ['one' => 'डोमिनिकन पेसो', 'other' => 'डोमिनिकन पेसोज']),
    'DZD' => new C('DZD', 'अल्जेरियन दिनार', plurals: 'अल्जेरियन दिनार'),
    'EGP' => new C('EGP', 'इजिप्शियन पाउंड', narrow: 'E£', plurals: ['one' => 'इजिप्शियन पाउंड', 'other' => 'इजिप्शियन पाउंड्स']),
    'ERN' => new C('ERN', 'इरिट्रियन नाक्फा', plurals: ['one' => 'इरिट्रियन नाक्फा', 'other' => 'इरिट्रियन नाक्फाज']),
    'ETB' => new C('ETB', 'इथिओपियन बिर', plurals: ['one' => 'इथिओपियन बिर', 'other' => 'इथिओपियन बिर्स']),
    'EUR' => new C('EUR', 'युरो', '€', narrow: '€', plurals: 'युरो'),
    'FJD' => new C('FJD', 'फिजियन डॉलर', narrow: '$', plurals: 'फिजियन डॉलर्स'),
    'FKP' => new C('FKP', 'फॉकलंड आयलंड पाउंड', narrow: '£', plurals: ['one' => 'फॉकलंड आयलंड पाउंड', 'other' => 'फॉकलंड आयलंड पाउंड्स']),
    'GBP' => new C('GBP', 'ब्रिटिश पाऊंड', '£', narrow: '£', plurals: ['one' => 'ब्रिटिश पाऊंड', 'other' => 'ब्रिटिश पाऊंड्स']),
    'GEL' => new C('GEL', 'जॉर्जियन लारी', narrow: '₾', plurals: 'जॉर्जियन लारी'),
    'GHS' => new C('GHS', 'घानीयन सेडी', narrow: 'GH₵', plurals: ['one' => 'घानीयन सेडी', 'other' => 'घानीयन सेडीस']),
    'GIP' => new C('GIP', 'जिब्राल्टर पाउंड', narrow: '£', plurals: ['one' => 'जिब्राल्टर पाउंड', 'other' => 'जिब्राल्टर पाउंड्स']),
    'GMD' => new C('GMD', 'गाम्बियन डालासी', plurals: ['one' => 'गाम्बियन डालासी', 'other' => 'गाम्बियन डालासीस']),
    'GNF' => new C('GNF', 'गिनी फ्रँक', narrow: 'FG', plurals: ['one' => 'गिनी फ्रँक', 'other' => 'गिनी फ्रँक्स'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'ग्वाटेमालाचे क्वेत्झाल', narrow: 'Q', plurals: ['one' => 'ग्वाटेमालाचे क्वेत्झाल', 'other' => 'ग्वाटेमालाचे क्वेत्झाल्स']),
    'GYD' => new C('GYD', 'गयाना डॉलर', narrow: '$', plurals: ['one' => 'गयाना डॉलर', 'other' => 'गयाना डॉलर्स']),
    'HKD' => new C('HKD', 'हाँगकाँग डॉलर', 'HK$', narrow: '$', plurals: ['one' => 'हाँगकाँग डॉलर', 'other' => 'हाँगकाँग डॉलर्स']),
    'HNL' => new C('HNL', 'होन्डुरन लेंपिरा', narrow: 'L', plurals: ['one' => 'होन्डुरन लेंपिरा', 'other' => 'होन्डुरन लेंपिराज']),
    'HRK' => new C('HRK', 'क्रोएशियन कूना', narrow: 'kn', plurals: ['one' => 'क्रोएशियन कूना', 'other' => 'क्रोएशियन कूनाज']),
    'HTG' => new C('HTG', 'हैती गोअर्ड', plurals: ['one' => 'हैती गोअर्ड', 'other' => 'हैती गोअर्ड्स']),
    'HUF' => new C('HUF', 'हंगेरियन फॉरिन्ट', narrow: 'Ft', plurals: ['one' => 'हंगेरियन फॉरिन्ट', 'other' => 'हंगेरियन फॉरिन्ट्स']),
    'IDR' => new C('IDR', 'इंडोनेशियन रुपिया', narrow: 'Rp', plurals: 'इंडोनेशियन रुपिया'),
    'ILS' => new C('ILS', 'ईस्त्रायली न्यू शेकेल', '₪', narrow: '₪', plurals: 'ईस्त्रायली न्यू शेकेल'),
    'INR' => new C('INR', 'भारतीय रुपया', '₹', narrow: '₹', plurals: ['one' => 'भारतीय रुपया', 'other' => 'भारतीय रुपये']),
    'IQD' => new C('IQD', 'इराकी दिनार', plurals: 'इराकी दिनार', minorUnits: 3),
    'IRR' => new C('IRR', 'इराणी रियाल', plurals: 'इराणी रियाल'),
    'ISK' => new C('ISK', 'आइसलँडिक क्रोना', narrow: 'kr', plurals: ['one' => 'आइसलँडिक क्रोना', 'other' => 'आइसलँडिक क्रोन्युर'], minorUnits: 0),
    'JMD' => new C('JMD', 'जमैकन डॉलर', narrow: '$', plurals: ['one' => 'जमैकन डॉलर', 'other' => 'जमैकन डॉलर्स']),
    'JOD' => new C('JOD', 'जॉर्डनियन दिनार', plurals: 'जॉर्डनियन दिनार', minorUnits: 3),
    'JPY' => new C('JPY', 'जपानी येन', 'JP¥', narrow: '¥', plurals: 'जपानी येन', minorUnits: 0),
    'KES' => new C('KES', 'केनियन शिलिंग', plurals: ['one' => 'केनियन शिलिंग', 'other' => 'केनियन शिलिंग्स']),
    'KGS' => new C('KGS', 'किरगिस्तानी सॉम', plurals: 'किरगिस्तानी सॉम'),
    'KHR' => new C('KHR', 'कंबोडियन रियेल', narrow: '៛', plurals: 'कंबोडियन रियेल'),
    'KMF' => new C('KMF', 'कोमोरियन फ्रँक', narrow: 'CF', plurals: ['one' => 'कोमोरियन फ्रँक', 'other' => 'कोमोरियन फ्रँक्स'], minorUnits: 0),
    'KPW' => new C('KPW', 'उत्तर कोरियन वॉन', narrow: '₩', plurals: 'उत्तर कोरियन वॉन'),
    'KRW' => new C('KRW', 'दक्षिण कोरियन वॉन', '₩', narrow: '₩', plurals: 'दक्षिण कोरियन वॉन', minorUnits: 0),
    'KWD' => new C('KWD', 'कुवैती दिनार', plurals: 'कुवैती दिनार', minorUnits: 3),
    'KYD' => new C('KYD', 'केमेन आयलॅंड डॉलर', narrow: '$', plurals: ['one' => 'केमेन आयलॅंड डॉलर', 'other' => 'केमेन आयलॅंड डॉलर्स']),
    'KZT' => new C('KZT', 'कझाकिस्तानी तेंगे', narrow: '₸', plurals: 'कझाकिस्तानी तेंगे'),
    'LAK' => new C('LAK', 'लाओशियन किप', narrow: '₭', plurals: 'लाओशियन किप'),
    'LBP' => new C('LBP', 'लेबनीज पाउंड', narrow: 'L£', plurals: ['one' => 'लेबनीज पाउंड', 'other' => 'लेबनीज पाउंड्स']),
    'LKR' => new C('LKR', 'श्रीलंकन रुपया', narrow: 'Rs', plurals: ['one' => 'श्रीलंकन रुपया', 'other' => 'श्रीलंकन रुपये']),
    'LRD' => new C('LRD', 'लाइबेरियन डॉलर', narrow: '$', plurals: ['one' => 'लाइबेरियन डॉलर', 'other' => 'लाइबेरियन डॉलर्स']),
    'LSL' => new C('LSL', 'लेसोटो लोटी', plurals: 'लेसोटो लोटी'),
    'LTL' => new C('LTL', 'लिथुआनियन लिटास', narrow: 'Lt', plurals: ['one' => 'लिथुआनियन लिटास', 'other' => 'लिथुआनियन लिटाई']),
    'LVL' => new C('LVL', 'लाट्व्हियन लाट्झ', narrow: 'Ls', plurals: ['one' => 'लाट्व्हियन लाट्झ', 'other' => 'लाट्व्हियन लाटी']),
    'LYD' => new C('LYD', 'लिबियाचा दिनार', plurals: ['one' => 'लिबियाचा दिनार', 'other' => 'लिबियन दिनार'], minorUnits: 3),
    'MAD' => new C('MAD', 'मोरोक्को दिरहॅम', plurals: ['one' => 'मोरोक्को दिरहॅम', 'other' => 'मोरोक्कन दिरहाम']),
    'MDL' => new C('MDL', 'मोल्डोवन लेउ', plurals: ['one' => 'मोल्डोवन लेउ', 'other' => 'मोल्डोवन लेई']),
    'MGA' => new C('MGA', 'मालागासी एरियारी', narrow: 'Ar', plurals: ['one' => 'मालागासी एरियारी', 'other' => 'मालागासी एरियारीज']),
    'MKD' => new C('MKD', 'मॅसेडोनियन देनार', plurals: ['one' => 'मॅसेडोनियन देनार', 'other' => 'मॅसेडोनियन देनारी']),
    'MMK' => new C('MMK', 'म्यानमार क्याट', narrow: 'K', plurals: 'म्यानमार क्याट'),
    'MNT' => new C('MNT', 'मंगोलियन टुग्रिक', narrow: '₮', plurals: ['one' => 'मंगोलियन टुग्रिक', 'other' => 'मंगोलियन टुग्रिक्स']),
    'MOP' => new C('MOP', 'मॅकॅनीज् पटाका', plurals: ['one' => 'मॅकॅनीज् पटाका', 'other' => 'मॅकॅनीज् पटाकाज']),
    'MRO' => new C('MRO', 'मॉरिटानियन ओगिया (1973–2017)', plurals: ['one' => 'मॉरिटानियन ओगिया (1973–2017)', 'other' => 'मॉरिटानियन ओगियाज (1973–2017)']),
    'MRU' => new C('MRU', 'मॉरिटानियन ओगिया', plurals: ['one' => 'मॉरिटानियन ओगिया', 'other' => 'मॉरिटानियन ओगियाज']),
    'MUR' => new C('MUR', 'मॉरिशियन रुपी', narrow: 'Rs', plurals: ['one' => 'मॉरिशियन रुपी', 'other' => 'मॉरिशियन रुपीज']),
    'MVR' => new C('MVR', 'मालदीवियन रुफिया', plurals: 'मालदीवियन रुफिया'),
    'MWK' => new C('MWK', 'मालावियन क्वाचा', plurals: ['one' => 'मालावियन क्वाचा', 'other' => 'मालावियन क्वाचास']),
    'MXN' => new C('MXN', 'मेक्सिको पेसो', 'MX$', narrow: '$', plurals: ['one' => 'मेक्सिको पेसो', 'other' => 'मेक्सिको पेसोज']),
    'MYR' => new C('MYR', 'मलेशियन रिंगिट', narrow: 'RM', plurals: 'मलेशियन रिंगिट'),
    'MZN' => new C('MZN', 'मोझांबिकन मेटिकल', plurals: ['one' => 'मोझांबिकन मेटिकल', 'other' => 'मोझांबिकन मेटिकल्स']),
    'NAD' => new C('NAD', 'नमिबियन डॉलर', narrow: '$', plurals: ['one' => 'नमिबियन डॉलर', 'other' => 'नमिबियन डॉलर्स']),
    'NGN' => new C('NGN', 'नायजेरियन नायरा', narrow: '₦', plurals: ['one' => 'नायजेरियन नायरा', 'other' => 'नायजेरियन नायराज']),
    'NIO' => new C('NIO', 'निकाराग्वन कोर्डोबा', narrow: 'C$', plurals: ['one' => 'निकाराग्वन कोर्डोबा', 'other' => 'निकाराग्वन कोर्डोबाज']),
    'NOK' => new C('NOK', 'नॉर्वेजियन क्रोन', narrow: 'kr', plurals: ['one' => 'नॉर्वेजियन क्रोन', 'other' => 'नॉर्वेजियन क्रोनर']),
    'NPR' => new C('NPR', 'नेपाळी रुपया', narrow: 'Rs', plurals: ['one' => 'नेपाळी रुपया', 'other' => 'नेपाळी रुपये']),
    'NZD' => new C('NZD', 'न्यूझीलँड डॉलर', 'NZ$', narrow: '$', plurals: ['one' => 'न्यूझीलँड डॉलर', 'other' => 'न्यूझीलँड डॉलर्स']),
    'OMR' => new C('OMR', 'ओमानी रियाल', plurals: 'ओमानी रियाल', minorUnits: 3),
    'PAB' => new C('PAB', 'पनामा बाल्बोआ', plurals: ['one' => 'पनामा बाल्बोआ', 'other' => 'पनामा बाल्बोआज']),
    'PEN' => new C('PEN', 'पेरुवियन सोल', plurals: ['one' => 'पेरुवियन सोल', 'other' => 'पेरुवियन सोल्स']),
    'PGK' => new C('PGK', 'पापुआ न्यू गिनीयन किना', plurals: 'पापुआ न्यू गिनीयन किना'),
    'PHP' => new C('PHP', 'फिलिपिनी पेसो', narrow: '₱', plurals: ['one' => 'फिलिपिनी पेसो', 'other' => 'फिलिपिनी पेसोज']),
    'PKR' => new C('PKR', 'पाकिस्तानी रुपया', narrow: 'Rs', plurals: ['one' => 'पाकिस्तानी रुपया', 'other' => 'पाकिस्तानी रुपये']),
    'PLN' => new C('PLN', 'पोलिश झ्लॉटी', narrow: 'zł', plurals: ['one' => 'पोलिश झ्लॉटी', 'other' => 'पोलिश झ्लॉटीज']),
    'PYG' => new C('PYG', 'पराग्वे ग्वारानी', narrow: '₲', plurals: ['one' => 'पराग्वे ग्वारानी', 'other' => 'पराग्वे ग्वारानीज'], minorUnits: 0),
    'QAR' => new C('QAR', 'कतारी रियाल', plurals: 'कतारी रियाल'),
    'RON' => new C('RON', 'रोमानियन लेऊ', narrow: 'lei', plurals: ['one' => 'रोमानियन लेऊ', 'other' => 'रोमानियन लेई']),
    'RSD' => new C('RSD', 'सर्बियन दिनार', plurals: 'सर्बियन दिनार'),
    'RUB' => new C('RUB', 'रशियन रुबल', narrow: '₽', plurals: ['one' => 'रशियन रुबल', 'other' => 'रशियन रुबल्स']),
    'RWF' => new C('RWF', 'रवांडा फ्रँक', narrow: 'RF', plurals: ['one' => 'रवांडा फ्रँक', 'other' => 'रवांडा फ्रँक्स'], minorUnits: 0),
    'SAR' => new C('SAR', 'सौदी रियाल', plurals: 'सौदी रियाल'),
    'SBD' => new C('SBD', 'सोलोमन आयलँड्स डॉलर', narrow: '$', plurals: ['one' => 'सोलोमन आयलँड्स डॉलर', 'other' => 'सोलोमन आयलँड्स डॉलर्स']),
    'SCR' => new C('SCR', 'सेशेलोईस रुपी', plurals: ['one' => 'सेशेलोईस रुपी', 'other' => 'सेशेलोईस रुपीज']),
    'SDG' => new C('SDG', 'सुदानी पाउंड', plurals: ['one' => 'सुदानी पाउंड', 'other' => 'सुदानी पाउंड्स']),
    'SEK' => new C('SEK', 'स्वीडिश क्रोना', narrow: 'kr', plurals: ['one' => 'स्वीडिश क्रोना', 'other' => 'स्वीडिश क्रोनोर']),
    'SGD' => new C('SGD', 'सिंगापूर डॉलर', narrow: '$', plurals: ['one' => 'सिंगापूर डॉलर', 'other' => 'सिंगापूर डॉलर्स']),
    'SHP' => new C('SHP', 'सेंट हेलेना पाउंड', narrow: '£', plurals: ['one' => 'सेंट हेलेना पाउंड', 'other' => 'सेंट हेलेना पाउंड्स']),
    'SLL' => new C('SLL', 'सिएरा लिऑनचा लिऑन', plurals: ['one' => 'सिएरा लिऑनचा लिऑन', 'other' => 'सिएरा लिऑनचे लिऑन्स']),
    'SOS' => new C('SOS', 'सोमाली शिलिंग', plurals: ['one' => 'सोमाली शिलिंग्स', 'other' => 'सोमाली शिलिंग']),
    'SRD' => new C('SRD', 'सुरिनामी डॉलर', narrow: '$', plurals: ['one' => 'सुरिनामी डॉलर', 'other' => 'सुरिनामी डॉलर्स']),
    'SSP' => new C('SSP', 'दक्षिण सुदानी पाउंड', narrow: '£', plurals: ['one' => 'दक्षिण सुदानी पाउंड', 'other' => 'दक्षिण सुदानी पाउंड्स']),
    'STD' => new C('STD', 'साओ टोम आणि प्रिन्सिपे डोबरा (1977–2017)', plurals: ['one' => 'साओ टोम आणि प्रिन्सिपे डोबरा (1977–2017)', 'other' => 'साओ टोम आणि प्रिन्सिपे डोबराज (1977–2017)']),
    'STN' => new C('STN', 'साओ टोम आणि प्रिन्सिपे डोबरा', narrow: 'Db', plurals: ['one' => 'साओ टोम आणि प्रिन्सिपे डोबरा', 'other' => 'साओ टोम आणि प्रिन्सिपे डोबराज']),
    'SYP' => new C('SYP', 'सीरियन पाउंड', narrow: '£', plurals: ['one' => 'सीरियन पाउंड', 'other' => 'सीरियन पाउंड्स']),
    'SZL' => new C('SZL', 'स्वाझी लीलांगेनी', plurals: ['one' => 'स्वाझी लीलांगेनी', 'other' => 'स्वाझी एमालांगेनी']),
    'THB' => new C('THB', 'थाई बाहत', '฿', narrow: '฿', plurals: 'थाई बाहत'),
    'TJS' => new C('TJS', 'ताजकीस्तानी सोमोनी', plurals: ['one' => 'ताजकीस्तानी सोमोनी', 'other' => 'ताजकीस्तानी सोमोनीज']),
    'TMT' => new C('TMT', 'तुर्कमेनिस्तानी मानाट', plurals: 'तुर्कमेनिस्तानी मानाट'),
    'TND' => new C('TND', 'ट्यूनिशियन दिनार', plurals: 'ट्यूनिशियन दिनार', minorUnits: 3),
    'TOP' => new C('TOP', 'टोंगन पाआंगा', narrow: 'T$', plurals: 'टोंगन पाआंगा'),
    'TRY' => new C('TRY', 'तुर्की लिरा', narrow: '₺', plurals: 'तुर्की लिरा'),
    'TTD' => new C('TTD', 'त्रिनिदाद आणि टोबॅगो डॉलर', narrow: '$', plurals: ['one' => 'त्रिनिदाद आणि टोबॅगो डॉलर', 'other' => 'त्रिनिदाद आणि टोबॅगो डॉलर्स']),
    'TWD' => new C('TWD', 'न्यू तैवान डॉलर', 'NT$', narrow: 'NT$', plurals: ['one' => 'न्यू तैवान डॉलर', 'other' => 'न्यू तैवान डॉलर्स']),
    'TZS' => new C('TZS', 'टांझानियन शिलिंग', plurals: ['one' => 'टांझानियन शिलिंग', 'other' => 'टांझानियन शिलिंग्स']),
    'UAH' => new C('UAH', 'युक्रेनियन रिवनिया', narrow: '₴', plurals: ['one' => 'युक्रेनियन रिवनिया', 'other' => 'युक्रेनियन रिवनियाज']),
    'UGX' => new C('UGX', 'युगांडा शिलिंग', plurals: ['one' => 'युगांडा शिलिंग', 'other' => 'युगांडा शिलिंग्स'], minorUnits: 0),
    'USD' => new C('USD', 'यूएस डॉलर', '$', narrow: '$', plurals: ['one' => 'यूएस डॉलर', 'other' => 'यूएस डॉलर्स']),
    'UYU' => new C('UYU', 'उरुग्वेचा पेसो', narrow: '$', plurals: ['one' => 'उरुग्वेचा पेसो', 'other' => 'उरुग्वेचे पेसोज']),
    'UZS' => new C('UZS', 'उझबेकिस्तानी सोम', plurals: 'उझबेकिस्तानी सोम'),
    'VEF' => new C('VEF', 'व्हेनेझुएला बोलिव्हार (2008–2018)', narrow: 'Bs', plurals: ['one' => 'व्हेनेझुएला बोलिव्हार (2008–2018)', 'other' => 'व्हेनेझुएला बोलिव्हार्स (2008–2018)']),
    'VES' => new C('VES', 'व्हेनेझुएला बोलिव्हार', plurals: ['one' => 'व्हेनेझुएला बोलिव्हार', 'other' => 'व्हेनेझुएला बोलिव्हार्स']),
    'VND' => new C('VND', 'व्हिएतनामी डोंग', '₫', narrow: '₫', plurals: 'व्हिएतनामी डोंग', minorUnits: 0),
    'VUV' => new C('VUV', 'वानुआतु वाटु', plurals: 'वानुआतु वाटु', minorUnits: 0),
    'WST' => new C('WST', 'सामोअन टाला', plurals: 'सामोअन टाला'),
    'XAF' => new C('XAF', 'मध्य आफ्रिकन [CFA] फ्रँक', 'FCFA', plurals: 'मध्य आफ्रिकन [CFA] फ्रँक', minorUnits: 0),
    'XCD' => new C('XCD', 'पूर्व कॅरीबियन डॉलर', 'EC$', narrow: '$', plurals: ['one' => 'पूर्व कॅरीबियन डॉलर', 'other' => 'पूर्व कॅरीबियन डॉलर्स']),
    'XOF' => new C('XOF', 'पश्चिम आफ्रिकन [CFA] फ्रँक', "F\u{202F}CFA", plurals: ['one' => 'पश्चिम आफ्रिकन [CFA] फ्रँक', 'other' => 'पश्चिम आफ्रिकन [CFA] फ्रँक्स'], minorUnits: 0),
    'XPF' => new C('XPF', '[CFP] फ्रँक', 'CFPF', plurals: ['one' => '[CFP] फ्रँक', 'other' => '[CFP] फ्रँक्स'], minorUnits: 0),
    'XXX' => new C('XXX', 'अज्ञात चलन', '¤', plurals: ['one' => '(चलनाचे अज्ञात एकक)', 'other' => '(अज्ञात चलन)']),
    'YER' => new C('YER', 'येमेनी रियाल', plurals: 'येमेनी रियाल'),
    'ZAR' => new C('ZAR', 'दक्षिण आफ्रिकी रँड', narrow: 'R', plurals: 'दक्षिण आफ्रिकी रँड'),
    'ZMK' => new C('ZMK', 'झांबियन क्वाचा (1968–2012)'),
    'ZMW' => new C('ZMW', 'झांबियन क्वाचा', narrow: 'ZK', plurals: ['one' => 'झांबियन क्वाचा', 'other' => 'झांबियन क्वाचास']),
];
