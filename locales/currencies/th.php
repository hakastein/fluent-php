<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'เปเซตาอันดอร์รา'),
    'AED' => new C('AED', 'เดอร์แฮมสหรัฐอาหรับเอมิเรตส์', plurals: ['other' => 'เดอร์แฮมสหรัฐอาหรับเอมิเรตส์']),
    'AFA' => new C('AFA', 'อัฟกานีอัฟกานิสถาน (1927–2002)'),
    'AFN' => new C('AFN', 'อัฟกานิอัฟกานิสถาน', narrow: '؋', plurals: ['other' => 'อัฟกานิอัฟกานิสถาน']),
    'ALL' => new C('ALL', 'เลกแอลเบเนีย', plurals: ['other' => 'เลกแอลเบเนีย']),
    'AMD' => new C('AMD', 'แดรมอาร์เมเนีย', narrow: '֏', plurals: ['other' => 'แดรมอาร์เมเนีย']),
    'ANG' => new C('ANG', 'กิลเดอร์เนเธอร์แลนด์แอนทิลลิส', plurals: ['other' => 'กิลเดอร์เนเธอร์แลนด์แอนทิลลิส']),
    'AOA' => new C('AOA', 'กวานซาแองโกลา', narrow: 'Kz', plurals: ['other' => 'กวานซาแองโกลา']),
    'AOK' => new C('AOK', 'กวานซาแองโกลา (1977–1990)'),
    'AON' => new C('AON', 'นิวกวานซาแองโกลา (1990–2000)'),
    'AOR' => new C('AOR', 'กวานซารีจัสทาโดแองโกลา (1995–1999)'),
    'ARA' => new C('ARA', 'ออสตรัลอาร์เจนตินา'),
    'ARL' => new C('ARL', 'เปโซเลย์อาร์เจนตินา (1970–1983)'),
    'ARM' => new C('ARM', 'เปโซอาร์เจนตินา (1881–1970)'),
    'ARP' => new C('ARP', 'เปโซอาร์เจนตินา (1983–1985)'),
    'ARS' => new C('ARS', 'เปโซอาร์เจนตินา', narrow: '$', plurals: ['other' => 'เปโซอาร์เจนตินา']),
    'ATS' => new C('ATS', 'ชิลลิงออสเตรีย'),
    'AUD' => new C('AUD', 'ดอลลาร์ออสเตรเลีย', 'AU$', narrow: '$', plurals: ['other' => 'ดอลลาร์ออสเตรเลีย']),
    'AWG' => new C('AWG', 'ฟลอรินอารูบา', plurals: ['other' => 'ฟลอรินอารูบา']),
    'AZM' => new C('AZM', 'มานัตอาเซอร์ไบจาน (1993–2006)'),
    'AZN' => new C('AZN', 'มานัตอาเซอร์ไบจาน', narrow: '₼', plurals: ['other' => 'มานัตอาเซอร์ไบจาน']),
    'BAD' => new C('BAD', 'ดีนาร์บอสเนีย-เฮอร์เซโกวีนา'),
    'BAM' => new C('BAM', 'มาร์กบอสเนีย-เฮอร์เซโกวีนา', narrow: 'KM', plurals: ['other' => 'มาร์กบอสเนีย-เฮอร์เซโกวีนา']),
    'BAN' => new C('BAN', 'ดีนาร์ใหม่บอสเนีย-เฮอร์เซโกวีนา (1994–1997)'),
    'BBD' => new C('BBD', 'ดอลลาร์บาร์เบโดส', narrow: '$', plurals: ['other' => 'ดอลลาร์บาร์เบโดส']),
    'BDT' => new C('BDT', 'ตากาบังกลาเทศ', narrow: '৳', plurals: ['other' => 'ตากาบังกลาเทศ']),
    'BEC' => new C('BEC', 'ฟรังก์เบลเยียม (เปลี่ยนแปลงได้)'),
    'BEF' => new C('BEF', 'ฟรังก์เบลเยียม'),
    'BEL' => new C('BEL', 'ฟรังก์เบลเยียม (การเงิน)'),
    'BGL' => new C('BGL', 'ฮาร์ดเลฟบัลแกเรีย'),
    'BGM' => new C('BGM', 'โซเชียลลิสต์เลฟบัลแกเรีย'),
    'BGN' => new C('BGN', 'เลฟบัลแกเรีย', plurals: ['other' => 'เลฟบัลแกเรีย']),
    'BGO' => new C('BGO', 'เลฟบัลเกเรีย (1879–1952)'),
    'BHD' => new C('BHD', 'ดีนาร์บาห์เรน', plurals: ['other' => 'ดีนาร์บาห์เรน'], minorUnits: 3),
    'BIF' => new C('BIF', 'ฟรังก์บุรุนดี', plurals: ['other' => 'ฟรังก์บุรุนดี'], minorUnits: 0),
    'BMD' => new C('BMD', 'ดอลลาร์เบอร์มิวดา', narrow: '$', plurals: ['other' => 'ดอลลาร์เบอร์มิวดา']),
    'BND' => new C('BND', 'ดอลลาร์บรูไน', narrow: '$', plurals: ['other' => 'ดอลลาร์บรูไน']),
    'BOB' => new C('BOB', 'โบลิเวียโนโบลิเวีย', narrow: 'Bs', plurals: ['other' => 'โบลิเวียโนโบลิเวีย']),
    'BOL' => new C('BOL', 'โบลิเวียโนโบลิเวีย (1863–1963)'),
    'BOP' => new C('BOP', 'เปโซโบลิเวีย'),
    'BOV' => new C('BOV', 'มฟดอลโบลิเวีย'),
    'BRB' => new C('BRB', 'ครูเซโรโนโวบราซิล (1967–1986)'),
    'BRC' => new C('BRC', 'ครูซาโดบราซิล'),
    'BRE' => new C('BRE', 'ครูเซโรบราซิล (1990–1993)'),
    'BRL' => new C('BRL', 'เรียลบราซิล', 'R$', narrow: 'R$', plurals: ['other' => 'เรียลบราซิล']),
    'BRN' => new C('BRN', 'ครูซาโดโนโวบราซิล'),
    'BRR' => new C('BRR', 'ครูเซโรบราซิล'),
    'BRZ' => new C('BRZ', 'ครูเซโรบราซิล (1942–1967)'),
    'BSD' => new C('BSD', 'ดอลลาร์บาฮามาส', narrow: '$', plurals: ['other' => 'ดอลลาร์บาฮามาส']),
    'BTN' => new C('BTN', 'เอ็งกุลตรัมภูฏาน', plurals: ['other' => 'เอ็งกุลตรัมภูฏาน']),
    'BUK' => new C('BUK', 'จ๊าดพม่า'),
    'BWP' => new C('BWP', 'ปูลาบอตสวานา', narrow: 'P', plurals: ['other' => 'ปูลาบอตสวานา']),
    'BYB' => new C('BYB', 'นิวรูเบิลเบลารุส (1994–1999)'),
    'BYN' => new C('BYN', 'รูเบิลเบลารุส', narrow: 'р.', plurals: ['other' => 'รูเบิลเบลารุส']),
    'BYR' => new C('BYR', 'รูเบิลเบลารุส (2000–2016)', plurals: ['other' => 'รูเบิลเบลารุส (2000–2016)']),
    'BZD' => new C('BZD', 'ดอลลาร์เบลีซ', narrow: '$', plurals: ['other' => 'ดอลลาร์เบลีซ']),
    'CAD' => new C('CAD', 'ดอลลาร์แคนาดา', 'CA$', narrow: '$', plurals: ['other' => 'ดอลลาร์แคนาดา']),
    'CDF' => new C('CDF', 'ฟรังก์คองโก', plurals: ['other' => 'ฟรังก์คองโก']),
    'CHE' => new C('CHE', 'ยูโรดับเบิลยูไออาร์'),
    'CHF' => new C('CHF', 'ฟรังก์สวิส', plurals: ['other' => 'ฟรังก์สวิส']),
    'CHW' => new C('CHW', 'ฟรังก์ดับเบิลยูไออาร์'),
    'CLE' => new C('CLE', 'เอสคูโดชิลี'),
    'CLF' => new C('CLF', 'ฟูเมนโตชิลี', minorUnits: 4),
    'CLP' => new C('CLP', 'เปโซชิลี', narrow: '$', plurals: ['other' => 'เปโซชิลี'], minorUnits: 0),
    'CNH' => new C('CNH', 'หยวน', plurals: ['other' => 'หยวน']),
    'CNY' => new C('CNY', 'หยวนจีน', 'CN¥', narrow: '¥', plurals: ['other' => 'หยวนจีน']),
    'COP' => new C('COP', 'เปโซโคลอมเบีย', narrow: '$', plurals: ['other' => 'เปโซโคลอมเบีย']),
    'COU' => new C('COU', 'วาเลอร์เรียลโคลอมเบีย'),
    'CRC' => new C('CRC', 'โกลองคอสตาริกา', narrow: '₡', plurals: ['other' => 'โกลองคอสตาริกา']),
    'CSD' => new C('CSD', 'ดีนาร์เซอร์เบียเก่า'),
    'CSK' => new C('CSK', 'ฮาร์ดโครูนาเช็กโกสโลวัก'),
    'CUC' => new C('CUC', 'เปโซคิวบา (แปลงสภาพ)', narrow: '$', plurals: ['other' => 'เปโซคิวบา (แปลงสภาพ)']),
    'CUP' => new C('CUP', 'เปโซคิวบา', narrow: '$', plurals: ['other' => 'เปโซคิวบา']),
    'CVE' => new C('CVE', 'เอสคูโดเคปเวิร์ด', plurals: ['other' => 'เอสคูโดเคปเวิร์ด']),
    'CYP' => new C('CYP', 'ปอนด์ไซปรัส'),
    'CZK' => new C('CZK', 'โครูนาสาธารณรัฐเช็ก', narrow: 'Kč', plurals: ['other' => 'โครูนาสาธารณรัฐเช็ก']),
    'DDM' => new C('DDM', 'มาร์กเยอรมันตะวันออก'),
    'DEM' => new C('DEM', 'มาร์กเยอรมัน'),
    'DJF' => new C('DJF', 'ฟรังก์จิบูตี', plurals: ['other' => 'ฟรังก์จิบูตี'], minorUnits: 0),
    'DKK' => new C('DKK', 'โครนเดนมาร์ก', narrow: 'kr', plurals: ['other' => 'โครนเดนมาร์ก']),
    'DOP' => new C('DOP', 'เปโซโดมินิกัน', narrow: '$', plurals: ['other' => 'เปโซโดมินิกัน']),
    'DZD' => new C('DZD', 'ดีนาร์แอลจีเรีย', plurals: ['other' => 'ดีนาร์แอลจีเรีย']),
    'ECS' => new C('ECS', 'ซูเกรเอกวาดอร์'),
    'ECV' => new C('ECV', 'วาเลอร์คอนสแตนต์เอกวาดอร์'),
    'EEK' => new C('EEK', 'ครูนเอสโตเนีย'),
    'EGP' => new C('EGP', 'ปอนด์อียิปต์', narrow: 'E£', plurals: ['other' => 'ปอนด์อียิปต์']),
    'ERN' => new C('ERN', 'แนกฟาเอริเทรีย', plurals: ['other' => 'แนกฟาเอริเทรีย']),
    'ESA' => new C('ESA', 'เปเซตาสเปน (บัญชีเอ)'),
    'ESB' => new C('ESB', 'เปเซตาสเปน (บัญชีที่เปลี่ยนแปลงได้)'),
    'ESP' => new C('ESP', 'เปเซตาสเปน', narrow: '₧'),
    'ETB' => new C('ETB', 'เบอรร์เอธิโอเปีย', plurals: ['other' => 'เบอรร์เอธิโอเปีย']),
    'EUR' => new C('EUR', 'ยูโร', '€', narrow: '€', plurals: ['other' => 'ยูโร']),
    'FIM' => new C('FIM', 'มาร์กกาฟินแลนด์'),
    'FJD' => new C('FJD', 'ดอลลาร์ฟิจิ', narrow: '$', plurals: ['other' => 'ดอลลาร์ฟิจิ']),
    'FKP' => new C('FKP', 'ปอนด์หมู่เกาะฟอล์กแลนด์', narrow: '£', plurals: ['other' => 'ปอนด์หมู่เกาะฟอล์กแลนด์']),
    'FRF' => new C('FRF', 'ฟรังก์ฝรั่งเศส'),
    'GBP' => new C('GBP', 'ปอนด์สเตอร์ลิง (สหราชอาณาจักร)', '£', narrow: '£', plurals: ['other' => 'ปอนด์สเตอร์ลิง (สหราชอาณาจักร)']),
    'GEK' => new C('GEK', 'คูปอนลาริตจอร์เจีย'),
    'GEL' => new C('GEL', 'ลารีจอร์เจีย', narrow: '₾', plurals: ['other' => 'ลารีจอร์เจีย']),
    'GHC' => new C('GHC', 'เซดีกานา (1979–2007)'),
    'GHS' => new C('GHS', 'เซดีกานา', narrow: 'GH₵', plurals: ['other' => 'เซดีกานา']),
    'GIP' => new C('GIP', 'ปอนด์ยิบรอลตาร์', narrow: '£', plurals: ['other' => 'ปอนด์ยิบรอลตาร์']),
    'GMD' => new C('GMD', 'ดาลาซีแกมเบีย', plurals: ['other' => 'ดาลาซีแกมเบีย']),
    'GNF' => new C('GNF', 'ฟรังก์กินี', narrow: 'FG', plurals: ['other' => 'ฟรังก์กินี'], minorUnits: 0),
    'GNS' => new C('GNS', 'ไซลีกินี'),
    'GQE' => new C('GQE', 'เอ็กเวเลอิเควทอเรียลกินี'),
    'GRD' => new C('GRD', 'ดรัชมากรีก'),
    'GTQ' => new C('GTQ', 'เควตซัลกัวเตมาลา', narrow: 'Q', plurals: ['other' => 'เควตซัลกัวเตมาลา']),
    'GWE' => new C('GWE', 'เอสคูโดกินีโปรตุเกส'),
    'GWP' => new C('GWP', 'เปโซกินี-บิสเซา'),
    'GYD' => new C('GYD', 'ดอลลาร์กายอานา', narrow: '$', plurals: ['other' => 'ดอลลาร์กายอานา']),
    'HKD' => new C('HKD', 'ดอลลาร์ฮ่องกง', 'HK$', narrow: '$', plurals: ['other' => 'ดอลลาร์ฮ่องกง']),
    'HNL' => new C('HNL', 'เลมปิราฮอนดูรัส', narrow: 'L', plurals: ['other' => 'เลมปิราฮอนดูรัส']),
    'HRD' => new C('HRD', 'ดีนาร์โครเอเชีย'),
    'HRK' => new C('HRK', 'คูนาโครเอเชีย', narrow: 'kn', plurals: ['other' => 'คูนาโครเอเชีย']),
    'HTG' => new C('HTG', 'กูร์ดเฮติ', plurals: ['other' => 'กูร์ดเฮติ']),
    'HUF' => new C('HUF', 'ฟอรินต์ฮังการี', narrow: 'Ft', plurals: ['other' => 'ฟอรินต์ฮังการี']),
    'IDR' => new C('IDR', 'รูเปียห์อินโดนีเซีย', narrow: 'Rp', plurals: ['other' => 'รูเปียห์อินโดนีเซีย']),
    'IEP' => new C('IEP', 'ปอนด์ไอริช'),
    'ILP' => new C('ILP', 'ปอนด์อิสราเอล'),
    'ILS' => new C('ILS', 'นิวเชเกลอิสราเอล', '₪', narrow: '₪', plurals: ['other' => 'นิวเชเกลอิสราเอล']),
    'INR' => new C('INR', 'รูปีอินเดีย', '₹', narrow: '₹', plurals: ['other' => 'รูปีอินเดีย']),
    'IQD' => new C('IQD', 'ดีนาร์อิรัก', plurals: ['other' => 'ดีนาร์อิรัก'], minorUnits: 3),
    'IRR' => new C('IRR', 'เรียลอิหร่าน', plurals: ['other' => 'เรียลอิหร่าน']),
    'ISK' => new C('ISK', 'โครนาไอซ์แลนด์', narrow: 'kr', plurals: ['other' => 'โครนาไอซ์แลนด์'], minorUnits: 0),
    'ITL' => new C('ITL', 'ลีราอิตาลี'),
    'JMD' => new C('JMD', 'ดอลลาร์จาเมกา', narrow: '$', plurals: ['other' => 'ดอลลาร์จาเมกา']),
    'JOD' => new C('JOD', 'ดีนาร์จอร์แดน', plurals: ['other' => 'ดีนาร์จอร์แดน'], minorUnits: 3),
    'JPY' => new C('JPY', 'เยนญี่ปุ่น', '¥', narrow: '¥', plurals: ['other' => 'เยนญี่ปุ่น'], minorUnits: 0),
    'KES' => new C('KES', 'ชิลลิงเคนยา', plurals: ['other' => 'ชิลลิงเคนยา']),
    'KGS' => new C('KGS', 'ซอมคีร์กีซสถาน', plurals: ['other' => 'ซอมคีร์กีซสถาน']),
    'KHR' => new C('KHR', 'เรียลกัมพูชา', narrow: '៛', plurals: ['other' => 'เรียลกัมพูชา']),
    'KMF' => new C('KMF', 'ฟรังก์คอโมโรส', narrow: 'CF', plurals: ['other' => 'ฟรังก์คอโมโรส'], minorUnits: 0),
    'KPW' => new C('KPW', 'วอนเกาหลีเหนือ', narrow: '₩', plurals: ['other' => 'วอนเกาหลีเหนือ']),
    'KRH' => new C('KRH', 'ฮวานเกาหลีใต้ (1953–1962)'),
    'KRO' => new C('KRO', 'วอนเกาหลีใต้ (1945–1953)'),
    'KRW' => new C('KRW', 'วอนเกาหลีใต้', '₩', narrow: '₩', plurals: ['other' => 'วอนเกาหลีใต้'], minorUnits: 0),
    'KWD' => new C('KWD', 'ดีนาร์คูเวต', plurals: ['other' => 'ดีนาร์คูเวต'], minorUnits: 3),
    'KYD' => new C('KYD', 'ดอลลาร์หมู่เกาะเคย์แมน', narrow: '$', plurals: ['other' => 'ดอลลาร์หมู่เกาะเคย์แมน']),
    'KZT' => new C('KZT', 'เทงเจคาซัคสถาน', narrow: '₸', plurals: ['other' => 'เทงเจคาซัคสถาน']),
    'LAK' => new C('LAK', 'กีบลาว', narrow: '₭', plurals: ['other' => 'กีบลาว']),
    'LBP' => new C('LBP', 'ปอนด์เลบานอน', narrow: 'L£', plurals: ['other' => 'ปอนด์เลบานอน']),
    'LKR' => new C('LKR', 'รูปีศรีลังกา', narrow: 'Rs', plurals: ['other' => 'รูปีศรีลังกา']),
    'LRD' => new C('LRD', 'ดอลลาร์ไลบีเรีย', narrow: '$', plurals: ['other' => 'ดอลลาร์ไลบีเรีย']),
    'LSL' => new C('LSL', 'โลตีเลโซโท'),
    'LTL' => new C('LTL', 'ลีตัสลิทัวเนีย', narrow: 'Lt', plurals: ['other' => 'ลีตัสลิทัวเนีย']),
    'LTT' => new C('LTT', 'ทาโลนัสลิทัวเนีย'),
    'LUC' => new C('LUC', 'คอนเวอร์ทิเบิลฟรังก์ลักเซมเบิร์ก'),
    'LUF' => new C('LUF', 'ฟรังก์ลักเซมเบิร์ก'),
    'LUL' => new C('LUL', 'ไฟแนลเชียลฟรังก์ลักเซมเบิร์ก'),
    'LVL' => new C('LVL', 'ลัตส์ลัตเวีย', narrow: 'Ls', plurals: ['other' => 'ลัตส์ลัตเวีย']),
    'LVR' => new C('LVR', 'รูเบิลลัตเวีย'),
    'LYD' => new C('LYD', 'ดีนาร์ลิเบีย', plurals: ['other' => 'ดีนาร์ลิเบีย'], minorUnits: 3),
    'MAD' => new C('MAD', 'ดีแรห์มโมร็อกโก', plurals: ['other' => 'ดีแรห์มโมร็อกโก']),
    'MAF' => new C('MAF', 'ฟรังก์โมร็อกโก'),
    'MCF' => new C('MCF', 'ฟรังก์โมนาโก'),
    'MDC' => new C('MDC', 'บัตรปันส่วนมอลโดวา'),
    'MDL' => new C('MDL', 'ลิวมอลโดวา', plurals: ['other' => 'ลิวมอลโดวา']),
    'MGA' => new C('MGA', 'อาเรียรีมาลากาซี', narrow: 'Ar', plurals: ['other' => 'อาเรียรีมาลากาซี']),
    'MGF' => new C('MGF', 'ฟรังก์มาดากัสการ์'),
    'MKD' => new C('MKD', 'ดีนาร์มาซิโดเนีย', plurals: ['other' => 'ดีนาร์มาซิโดเนีย']),
    'MKN' => new C('MKN', 'ดีนาร์มาซิโดเนีย (1992–1993)'),
    'MLF' => new C('MLF', 'ฟรังก์มาลี'),
    'MMK' => new C('MMK', 'จ๊าตพม่า', narrow: 'K', plurals: ['other' => 'จ๊าตพม่า']),
    'MNT' => new C('MNT', 'ทูกริกมองโกเลีย', narrow: '₮', plurals: ['other' => 'ทูกริกมองโกเลีย']),
    'MOP' => new C('MOP', 'ปาตากามาเก๊า', plurals: ['other' => 'ปาตากามาเก๊า']),
    'MRO' => new C('MRO', 'อูกียามอริเตเนีย (1973–2017)', plurals: ['other' => 'อูกียามอริเตเนีย (1973–2017)']),
    'MRU' => new C('MRU', 'อูกียามอริเตเนีย', plurals: ['other' => 'อูกียามอริเตเนีย']),
    'MTL' => new C('MTL', 'ลีรามอลตา'),
    'MTP' => new C('MTP', 'ปอนด์มอลตา'),
    'MUR' => new C('MUR', 'รูปีมอริเชียส', narrow: 'Rs', plurals: ['other' => 'รูปีมอริเชียส']),
    'MVR' => new C('MVR', 'รูฟิยามัลดีฟส์', plurals: ['other' => 'รูฟิยามัลดีฟส์']),
    'MWK' => new C('MWK', 'ควาชามาลาวี', plurals: ['other' => 'ควาชามาลาวี']),
    'MXN' => new C('MXN', 'เปโซเม็กซิโก', 'MX$', narrow: '$', plurals: ['other' => 'เปโซเม็กซิโก']),
    'MXP' => new C('MXP', 'เงินเปโซเม็กซิโก (1861–1992)'),
    'MXV' => new C('MXV', 'ยูนิแดด ดี อินเวอร์ชั่น เม็กซิโก'),
    'MYR' => new C('MYR', 'ริงกิตมาเลเซีย', narrow: 'RM', plurals: ['other' => 'ริงกิตมาเลเซีย']),
    'MZE' => new C('MZE', 'เอสคูโดโมซัมบิก'),
    'MZM' => new C('MZM', 'เมติคัลโมซัมบิกเก่า'),
    'MZN' => new C('MZN', 'เมติคัลโมซัมบิก', plurals: ['other' => 'เมติคัลโมซัมบิก']),
    'NAD' => new C('NAD', 'ดอลลาร์นามิเบีย', narrow: '$', plurals: ['other' => 'ดอลลาร์นามิเบีย']),
    'NGN' => new C('NGN', 'ไนราไนจีเรีย', narrow: '₦', plurals: ['other' => 'ไนราไนจีเรีย']),
    'NIC' => new C('NIC', 'คอร์โดบานิการากัว'),
    'NIO' => new C('NIO', 'กอร์โดบานิการากัว', narrow: 'C$', plurals: ['other' => 'กอร์โดบานิการากัว']),
    'NLG' => new C('NLG', 'กิลเดอร์เนเธอร์แลนด์'),
    'NOK' => new C('NOK', 'โครนนอร์เวย์', narrow: 'kr', plurals: ['other' => 'โครนนอร์เวย์']),
    'NPR' => new C('NPR', 'รูปีเนปาล', narrow: 'Rs', plurals: ['other' => 'รูปีเนปาล']),
    'NZD' => new C('NZD', 'ดอลลาร์นิวซีแลนด์', 'NZ$', narrow: '$', plurals: ['other' => 'ดอลลาร์นิวซีแลนด์']),
    'OMR' => new C('OMR', 'เรียลโอมาน', plurals: ['other' => 'เรียลโอมาน'], minorUnits: 3),
    'PAB' => new C('PAB', 'บัลบัวปานามา', plurals: ['other' => 'บัลบัวปานามา']),
    'PEI' => new C('PEI', 'อินตีเปรู'),
    'PEN' => new C('PEN', 'ซอลเปรู', plurals: ['other' => 'ซอลเปรู']),
    'PES' => new C('PES', 'ซอลเปรู (1863–1965)', plurals: ['other' => 'ซอลเปรู(1863–1965)']),
    'PGK' => new C('PGK', 'กีนาปาปัวนิวกินี', plurals: ['other' => 'กีนาปาปัวนิวกินี']),
    'PHP' => new C('PHP', 'เปโซฟิลิปปินส์', narrow: '₱', plurals: ['other' => 'เปโซฟิลิปปินส์']),
    'PKR' => new C('PKR', 'รูปีปากีสถาน', narrow: 'Rs', plurals: ['other' => 'รูปีปากีสถาน']),
    'PLN' => new C('PLN', 'ซลอตีโปแลนด์', narrow: 'zł', plurals: ['other' => 'ซลอตีโปแลนด์']),
    'PLZ' => new C('PLZ', 'ซลอตีโปแลนด์ (1950–1995)'),
    'PTE' => new C('PTE', 'เอสคูโดโปรตุเกส'),
    'PYG' => new C('PYG', 'กวารานีปารากวัย', narrow: '₲', plurals: ['other' => 'กวารานีปารากวัย'], minorUnits: 0),
    'QAR' => new C('QAR', 'เรียลกาตาร์', plurals: ['other' => 'เรียลกาตาร์']),
    'RHD' => new C('RHD', 'ดอลลาร์โรดีเซีย'),
    'ROL' => new C('ROL', 'ลิวโรมาเนียเก่า'),
    'RON' => new C('RON', 'ลิวโรมาเนีย', narrow: 'lei', plurals: ['other' => 'ลิวโรมาเนีย']),
    'RSD' => new C('RSD', 'ดีนาร์เซอร์เบีย', plurals: ['other' => 'ดีนาร์เซอร์เบีย']),
    'RUB' => new C('RUB', 'รูเบิลรัสเซีย', narrow: '₽', plurals: ['other' => 'รูเบิลรัสเซีย']),
    'RUR' => new C('RUR', 'รูเบิลรัสเซีย (1991–1998)'),
    'RWF' => new C('RWF', 'ฟรังก์รวันดา', narrow: 'RF', plurals: ['other' => 'ฟรังก์รวันดา'], minorUnits: 0),
    'SAR' => new C('SAR', 'ริยัลซาอุดีอาระเบีย', plurals: ['other' => 'ริยัลซาอุดีอาระเบีย']),
    'SBD' => new C('SBD', 'ดอลลาร์หมู่เกาะโซโลมอน', narrow: '$', plurals: ['other' => 'ดอลลาร์หมู่เกาะโซโลมอน']),
    'SCR' => new C('SCR', 'รูปีเซเชลส์', plurals: ['other' => 'รูปีเซเชลส์']),
    'SDD' => new C('SDD', 'ดีนาร์ซูดานเก่า'),
    'SDG' => new C('SDG', 'ปอนด์ซูดาน', plurals: ['other' => 'ปอนด์ซูดาน']),
    'SDP' => new C('SDP', 'ปอนด์ซูดานเก่า'),
    'SEK' => new C('SEK', 'โครนาสวีเดน', narrow: 'kr', plurals: ['other' => 'โครนาสวีเดน']),
    'SGD' => new C('SGD', 'ดอลลาร์สิงคโปร์', narrow: '$', plurals: ['other' => 'ดอลลาร์สิงคโปร์']),
    'SHP' => new C('SHP', 'ปอนด์เซนต์เฮเลนา', narrow: '£', plurals: ['other' => 'ปอนด์เซนต์เฮเลนา']),
    'SIT' => new C('SIT', 'ทอลาร์สโลวีเนีย'),
    'SKK' => new C('SKK', 'โครูนาสโลวัก'),
    'SLL' => new C('SLL', 'ลีโอนเซียร์ราลีโอน', plurals: ['other' => 'ลีโอนเซียร์ราลีโอน']),
    'SOS' => new C('SOS', 'ชิลลิงโซมาเลีย', plurals: ['other' => 'ชิลลิงโซมาเลีย']),
    'SRD' => new C('SRD', 'ดอลลาร์ซูรินาเม', narrow: '$', plurals: ['other' => 'ดอลลาร์ซูรินาเม']),
    'SRG' => new C('SRG', 'กิลเดอร์ซูรินาเม'),
    'SSP' => new C('SSP', 'ปอนด์ซูดานใต้', narrow: '£', plurals: ['other' => 'ปอนด์ซูดานใต้']),
    'STD' => new C('STD', 'ดอบราเซาตูเมและปรินซิปี (1977–2017)', plurals: ['other' => 'ดอบราเซาตูเมและปรินซิปี (1977–2017)']),
    'STN' => new C('STN', 'ดอบราเซาตูเมและปรินซิปี', narrow: 'Db', plurals: ['other' => 'ดอบราเซาตูเมและปรินซิปี']),
    'SUR' => new C('SUR', 'รูเบิลโซเวียต'),
    'SVC' => new C('SVC', 'โคลอนเอลซัลวาดอร์'),
    'SYP' => new C('SYP', 'ปอนด์ซีเรีย', narrow: '£', plurals: ['other' => 'ปอนด์ซีเรีย']),
    'SZL' => new C('SZL', 'ลิลันเจนีสวาซิ', plurals: ['other' => 'ลิลันเจนีสวาซิ']),
    'THB' => new C('THB', 'บาท', '฿', narrow: '฿', plurals: ['other' => 'บาทไทย']),
    'TJR' => new C('TJR', 'รูเบิลทาจิกิสถาน'),
    'TJS' => new C('TJS', 'โซโมนิทาจิกิสถาน', plurals: ['other' => 'โซโมนิทาจิกิสถาน']),
    'TMM' => new C('TMM', 'มานัตเติร์กเมนิสถาน (1993–2009)'),
    'TMT' => new C('TMT', 'มานัตเติร์กเมนิสถาน', plurals: ['other' => 'มานัตเติร์กเมนิสถาน']),
    'TND' => new C('TND', 'ดีนาร์ตูนิเซีย', plurals: ['other' => 'ดีนาร์ตูนิเซีย'], minorUnits: 3),
    'TOP' => new C('TOP', 'พาแองกาตองกา', narrow: 'T$', plurals: ['other' => 'พาแองกาตองกา']),
    'TPE' => new C('TPE', 'เอสคูโดติมอร์'),
    'TRL' => new C('TRL', 'ลีราตุรกีเก่า'),
    'TRY' => new C('TRY', 'ลีราตุรกี', narrow: '₺', plurals: ['other' => 'ลีราตุรกี']),
    'TTD' => new C('TTD', 'ดอลลาร์ตรินิแดดและโตเบโก', narrow: '$', plurals: ['other' => 'ดอลลาร์ตรินิแดดและโตเบโก']),
    'TWD' => new C('TWD', 'ดอลลาร์ไต้หวันใหม่', 'NT$', narrow: 'NT$', plurals: ['other' => 'ดอลลาร์ไต้หวันใหม่']),
    'TZS' => new C('TZS', 'ชิลลิงแทนซาเนีย', plurals: ['other' => 'ชิลลิงแทนซาเนีย']),
    'UAH' => new C('UAH', 'ฮรีฟเนียยูเครน', narrow: '₴', plurals: ['other' => 'ฮรีฟเนียยูเครน']),
    'UAK' => new C('UAK', 'คาร์โบวาเนตซ์ยูเครน'),
    'UGS' => new C('UGS', 'ชิลลิงยูกันดา (1966–1987)'),
    'UGX' => new C('UGX', 'ชิลลิงยูกันดา', plurals: ['other' => 'ชิลลิงยูกันดา'], minorUnits: 0),
    'USD' => new C('USD', 'ดอลลาร์สหรัฐ', 'US$', narrow: '$', plurals: ['other' => 'ดอลลาร์สหรัฐ']),
    'USN' => new C('USN', 'ดอลลาร์สหรัฐ (วันถัดไป)', plurals: ['other' => 'ดอลลาร์สหรัฐ (วันถัดไป)']),
    'USS' => new C('USS', 'ดอลลาร์สหรัฐ (วันเดียวกัน)', plurals: ['other' => 'ดอลลาร์สหรัฐ (วันเดียวกัน)']),
    'UYI' => new C('UYI', 'เปโซเอนยูนิแดดเซสอินเด็กซาแดสอุรุกวัย', minorUnits: 0),
    'UYP' => new C('UYP', 'เปโซอุรุกวัย (1975–1993)'),
    'UYU' => new C('UYU', 'เปโซอุรุกวัย', narrow: '$', plurals: ['other' => 'เปโซอุรุกวัย']),
    'UZS' => new C('UZS', 'ซอมอุซเบกิสถาน', plurals: ['other' => 'ซอมอุซเบกิสถาน']),
    'VEB' => new C('VEB', 'โบลิวาร์เวเนซุเอลา (1871–2008)'),
    'VEF' => new C('VEF', 'โบลิวาร์เวเนซุเอลา', narrow: 'Bs', plurals: ['other' => 'โบลิวาร์เวเนซุเอลา']),
    'VES' => new C('VES', 'โบลีวาร์เวเนซุเอลา', plurals: ['other' => 'โบลีวาร์แห่งเวเนซุเอลา']),
    'VND' => new C('VND', 'ดองเวียดนาม', '₫', narrow: '₫', plurals: ['other' => 'ดองเวียดนาม'], minorUnits: 0),
    'VNN' => new C('VNN', 'ดองเวียดนาม (1978–1985)'),
    'VUV' => new C('VUV', 'วาตูวานูอาตู', plurals: ['other' => 'วาตูวานูอาตู'], minorUnits: 0),
    'WST' => new C('WST', 'ทาลาซามัว', plurals: ['other' => 'ทาลาซามัว']),
    'XAF' => new C('XAF', 'ฟรังก์เซฟาธนาคารรัฐแอฟริกากลาง', 'FCFA', plurals: ['other' => 'ฟรังก์เซฟาธนาคารรัฐแอฟริกากลาง'], minorUnits: 0),
    'XAG' => new C('XAG', 'เงิน'),
    'XAU' => new C('XAU', 'ทอง'),
    'XBA' => new C('XBA', 'หน่วยคอมโพสิตยุโรป'),
    'XBB' => new C('XBB', 'หน่วยโมเนทารียุโรป'),
    'XBC' => new C('XBC', 'หน่วยบัญชียุโรป [XBC]'),
    'XBD' => new C('XBD', 'หน่วยบัญชียุโรป [XBD]'),
    'XCD' => new C('XCD', 'ดอลลาร์แคริบเบียนตะวันออก', 'EC$', narrow: '$', plurals: ['other' => 'ดอลลาร์แคริบเบียนตะวันออก']),
    'XDR' => new C('XDR', 'สิทธิถอนเงินพิเศษ'),
    'XEU' => new C('XEU', 'หน่วยสกุลเงินยุโรป'),
    'XFO' => new C('XFO', 'ฟรังก์ทองฝรั่งเศส'),
    'XFU' => new C('XFU', 'ฟรังก์ยูไอซีฝรั่งเศส'),
    'XOF' => new C('XOF', 'ฟรังก์เซฟาธนาคารกลางรัฐแอฟริกาตะวันตก', "F\u{202F}CFA", plurals: ['other' => 'ฟรังก์เซฟาธนาคารกลางรัฐแอฟริกาตะวันตก'], minorUnits: 0),
    'XPD' => new C('XPD', 'พัลเลเดียม'),
    'XPF' => new C('XPF', 'ฟรังก์ซีเอฟพี', 'CFPF', plurals: ['other' => 'ฟรังก์ซีเอฟพี'], minorUnits: 0),
    'XPT' => new C('XPT', 'แพลตินัม'),
    'XRE' => new C('XRE', 'กองทุนไรเน็ต'),
    'XSU' => new C('XSU', 'ซูเกร'),
    'XTS' => new C('XTS', 'รหัสทดสอบสกุลเงิน'),
    'XUA' => new C('XUA', 'หน่วยบัญชี เอดีบี'),
    'XXX' => new C('XXX', 'ไม่ทราบชื่อสกุลเงิน', plurals: ['other' => '(ไม่ทราบชื่อสกุลเงิน)']),
    'YDD' => new C('YDD', 'ดีนาร์เยเมน'),
    'YER' => new C('YER', 'เรียลเยเมน', plurals: ['other' => 'เรียลเยเมน']),
    'YUD' => new C('YUD', 'ฮาร์ดดีนาร์ยูโกสลาเวีย'),
    'YUM' => new C('YUM', 'โนวิย์ดีนาร์ยูโกสลาเวีย'),
    'YUN' => new C('YUN', 'คอนเวอร์ทิเบิลดีนาร์ยูโกสลาเวีย'),
    'YUR' => new C('YUR', 'ดีนาร์ปฏิรูปยูโกสลาเวีย (1992–1993)'),
    'ZAL' => new C('ZAL', 'แรนด์แอฟริกาใต้ (การเงิน)'),
    'ZAR' => new C('ZAR', 'แรนด์แอฟริกาใต้', narrow: 'R', plurals: ['other' => 'แรนด์แอฟริกาใต้']),
    'ZMK' => new C('ZMK', 'ควาชาแซมเบีย (1968–2012)'),
    'ZMW' => new C('ZMW', 'ควาชาแซมเบีย', narrow: 'ZK', plurals: ['other' => 'ควาชาแซมเบีย']),
    'ZRN' => new C('ZRN', 'นิวแซร์คองโก'),
    'ZRZ' => new C('ZRZ', 'แซร์คองโก'),
    'ZWD' => new C('ZWD', 'ดอลลาร์ซิมบับเว'),
    'ZWL' => new C('ZWL', 'ดอลลาร์ซิมบับเว (2009)'),
    'ZWR' => new C('ZWR', 'ดอลลาร์ซิมบับเว (2008)'),
];
