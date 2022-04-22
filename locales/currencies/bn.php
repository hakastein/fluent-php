<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'ADP' => new C('ADP', 'এ্যান্ডোরান পেসেতা'),
    'AED' => new C('AED', 'সংযুক্ত আরব আমিরাত দিরহাম', plurals: ['one' => 'সংযুক্ত আরব আমিরাত দিরহাম', 'other' => 'সংযুক্ত আরব আমিরাত দিরহাম']),
    'AFA' => new C('AFA', 'আফগানি (১৯২৭–২০০২)'),
    'AFN' => new C('AFN', 'আফগান আফগানি', narrow: '؋', plurals: ['one' => 'আফগান আফগানি', 'other' => 'আফগান আফগানি']),
    'ALL' => new C('ALL', 'আলবেনিয়ান লেক', plurals: ['one' => 'আলবেনিয়ান লেক', 'other' => 'আলবেনিয়ান লেক']),
    'AMD' => new C('AMD', 'আরমেনিয়ান দ্রাম', narrow: '֏', plurals: ['one' => 'আরমেনিয়ান দ্রাম', 'other' => 'আরমেনিয়ান দ্রাম']),
    'ANG' => new C('ANG', 'নেদারল্যান্ড এ্যান্টিলিয়ান গুল্ডের', plurals: ['one' => 'নেদারল্যান্ড এ্যান্টিলিয়ান গুল্ডের', 'other' => 'নেদারল্যান্ড এ্যান্টিলিয়ান গুল্ডের']),
    'AOA' => new C('AOA', 'এ্যাঙ্গোলান কওয়ানজা', narrow: 'Kz', plurals: ['one' => 'এ্যাঙ্গোলান কওয়ানজা', 'other' => 'এ্যাঙ্গোলান কওয়ানজা']),
    'AOK' => new C('AOK', 'এ্যাঙ্গোলান কওয়ানজা (১৯৭৭–১৯৯০)'),
    'AON' => new C('AON', 'এ্যাঙ্গোলান নতুন কওয়ানজা (১৯৯৫–২০০০)'),
    'AOR' => new C('AOR', 'এ্যাঙ্গোলান কওয়ানজা (১৯৯৫–১৯৯৯)'),
    'ARA' => new C('ARA', 'আর্জেন্টিনা অস্ট্রাল'),
    'ARP' => new C('ARP', 'আর্জেন্টিনা পেসো (১৯৮৩–১৯৮৫)'),
    'ARS' => new C('ARS', 'আর্জেন্টিনা পেসো', narrow: '$', plurals: ['one' => 'আর্জেন্টিনা পেসো', 'other' => 'আর্জেন্টিনা পেসো']),
    'ATS' => new C('ATS', 'অস্ট্রিয়ান শিলিং'),
    'AUD' => new C('AUD', 'অস্ট্রেলিয়ান ডলার', 'A$', narrow: '$', plurals: ['one' => 'অস্ট্রেলিয়ান ডলার', 'other' => 'অস্ট্রেলিয়ান ডলার']),
    'AWG' => new C('AWG', 'আরুবা গিল্ডার', plurals: ['one' => 'আরুবা গিল্ডার', 'other' => 'আরুবা গিল্ডার']),
    'AZM' => new C('AZM', 'আজারবাইজান মানাত (১৯৯৩–২০০৬)'),
    'AZN' => new C('AZN', 'আজারবাইজান মানাত', narrow: '₼', plurals: ['one' => 'আজারবাইজান মানাত', 'other' => 'আজারবাইজান মানাত']),
    'BAD' => new C('BAD', 'বসনিয়া এবং হার্জেগোভিনা দিনার'),
    'BAM' => new C('BAM', 'বসনিয়া এবং হার্জেগোভিনা বিনিমেয় মার্ক', narrow: 'KM', plurals: ['one' => 'বসনিয়া এবং হার্জেগোভিনা বিনিমেয় মার্ক', 'other' => 'বসনিয়া এবং হার্জেগোভিনা বিনিমেয় মার্ক']),
    'BBD' => new C('BBD', 'বার্বেডোজ ডলার', narrow: '$', plurals: ['one' => 'বার্বেডোজ ডলার', 'other' => 'বার্বেডোজ ডলার']),
    'BDT' => new C('BDT', 'বাংলাদেশী টাকা', '৳', narrow: '৳', plurals: ['one' => 'বাংলাদেশী টাকা', 'other' => 'বাংলাদেশী টাকা']),
    'BEC' => new C('BEC', 'বেলজিয়ান ফ্রাঙ্ক (রূপান্তরযোগ্য)'),
    'BEF' => new C('BEF', 'বেলজিয়ান ফ্রাঙ্ক'),
    'BEL' => new C('BEL', 'বেলজিয়ান ফ্রাঙ্ক (আর্থিক)'),
    'BGL' => new C('BGL', 'বুলগেরীয় হার্ড লেভ'),
    'BGN' => new C('BGN', 'বুলগেরীয় লেভ', plurals: ['one' => 'বুলগেরীয় লেভ', 'other' => 'বুলগেরীয় লেভা']),
    'BHD' => new C('BHD', 'বাহরাইনি দিনার', plurals: ['one' => 'বাহরাইনি দিনার', 'other' => 'বাহরাইনি দিনার'], minorUnits: 3),
    'BIF' => new C('BIF', 'বুরুন্ডি ফ্রাঙ্ক', plurals: ['one' => 'বুরুন্ডি ফ্রাঙ্ক', 'other' => 'বুরুন্ডি ফ্রাঙ্ক'], minorUnits: 0),
    'BMD' => new C('BMD', 'বারমিউডান ডলার', narrow: '$', plurals: ['one' => 'বারমিউডান ডলার', 'other' => 'বারমিউডান ডলার']),
    'BND' => new C('BND', 'ব্রুনেই ডলার', narrow: '$', plurals: ['one' => 'ব্রুনেই ডলার', 'other' => 'ব্রুনেই ডলার']),
    'BOB' => new C('BOB', 'বলিভিয়ানো', narrow: 'Bs', plurals: ['one' => 'বলিভিয়ানো', 'other' => 'বলিভিয়ানো']),
    'BOP' => new C('BOP', 'বলিভিয়ান পেসো'),
    'BOV' => new C('BOV', 'বলিভিয়ান মভডোল'),
    'BRB' => new C('BRB', 'ব্রাজিলিয়ান ক্রুজেয়রোনোভো (১৯৬৭–১৯৮৬)'),
    'BRC' => new C('BRC', 'ব্রাজিলিয়ান ক্রুজেইডাউ'),
    'BRE' => new C('BRE', 'ব্রাজিলিয়ান ক্রুজেয়রো (১৯৯০–১৯৯৩)'),
    'BRL' => new C('BRL', 'ব্রাজিলিয়ান রিয়েল', 'R$', narrow: 'R$', plurals: ['one' => 'ব্রাজিলিয়ান রিয়েল', 'other' => 'ব্রাজিলিয়ান রিয়েল']),
    'BRN' => new C('BRN', 'ব্রাজিলিয়ান ক্রুজেইডো নোভো'),
    'BRR' => new C('BRR', 'ব্রাজিলিয়ান ক্রুজেয়রো'),
    'BSD' => new C('BSD', 'বাহামিয়ান ডলার', narrow: '$', plurals: ['one' => 'বাহামিয়ান ডলার', 'other' => 'বাহামিয়ান ডলার']),
    'BTN' => new C('BTN', 'ভুটানি এনগুল্ট্রুম', plurals: ['one' => 'ভুটানি এনগুল্ট্রুম', 'other' => 'ভুটানি এনগুল্ট্রুম']),
    'BUK' => new C('BUK', 'বর্মি কিয়াৎ'),
    'BWP' => new C('BWP', 'বতসোয়ানা পুলা', narrow: 'P', plurals: ['one' => 'বতসোয়ানা পুলা', 'other' => 'বতসোয়ানা পুলা']),
    'BYB' => new C('BYB', 'বেলারুশিয়ান নিউ রুবেল (১৯৯৪–১৯৯৯)'),
    'BYN' => new C('BYN', 'বেলারুশিয়ান রুবেল', narrow: 'р.', plurals: ['one' => 'বেলারুশিয়ান রুবেল', 'other' => 'বেলারুশিয়ান রুবেল']),
    'BYR' => new C('BYR', 'বেলারুশিয়ান রুবেল (2000–2016)', plurals: ['one' => 'বেলারুশিয়ান রুবেল (2000–2016)', 'other' => 'বেলারুশিয়ান রুবেল (2000–2016)']),
    'BZD' => new C('BZD', 'বেলিজ ডলার', narrow: '$', plurals: ['one' => 'বেলিজ ডলার', 'other' => 'বেলিজ ডলার']),
    'CAD' => new C('CAD', 'কানাডিয়ান ডলার', 'CA$', narrow: '$', plurals: ['one' => 'কানাডিয়ান ডলার', 'other' => 'কানাডিয়ান ডলার']),
    'CDF' => new C('CDF', 'কঙ্গোলিস ফ্র্যাঙ্ক', plurals: ['one' => 'কঙ্গোলিস ফ্র্যাঙ্ক', 'other' => 'কঙ্গোলিস ফ্র্যাঙ্ক']),
    'CHE' => new C('CHE', 'সুইজারল্যান্ড ইউরো'),
    'CHF' => new C('CHF', 'সুইস ফ্রাঁ', plurals: ['one' => 'সুইস ফ্রাঁ', 'other' => 'সুইস ফ্রাঁ']),
    'CHW' => new C('CHW', 'সুইজারল্যান্ড ফ্রাঙ্ক'),
    'CLF' => new C('CLF', 'চিলিয়ান উনিদাদেস দি ফোমেন্তো', minorUnits: 4),
    'CLP' => new C('CLP', 'চিলি পেসো', narrow: '$', plurals: ['one' => 'চিলি পেসো', 'other' => 'চিলি পেসো'], minorUnits: 0),
    'CNH' => new C('CNH', 'চাইনিজ ইউয়ান (অফশোর)', plurals: ['one' => 'চাইনিজ ইউয়ান (অফশোর)', 'other' => 'চাইনিজ ইউয়ান (অফশোর)']),
    'CNY' => new C('CNY', 'চীনা য়ুয়ান', 'CN¥', narrow: '¥', plurals: ['one' => 'চীনা য়ুয়ান', 'other' => 'চীনা য়ুয়ান']),
    'COP' => new C('COP', 'কলোম্বিয়ান পেসো', narrow: '$', plurals: ['one' => 'কলোম্বিয়ান পেসো', 'other' => 'কলোম্বিয়ান পেসো']),
    'COU' => new C('COU', 'উনিদাদ দি ভ্যালোর রিয়েল'),
    'CRC' => new C('CRC', 'কোস্টা রিকা কোলোন', narrow: '₡', plurals: ['one' => 'কোস্টা রিকা কোলোন', 'other' => 'কোস্টা রিকা কোলোন']),
    'CSD' => new C('CSD', 'প্রাচীন সারবিয়ান দিনার'),
    'CSK' => new C('CSK', 'চেকোস্লোভাক হার্ড কোরুনা'),
    'CUC' => new C('CUC', 'কিউবান রূপান্তরযোগ্য পেসো', narrow: '$', plurals: ['one' => 'কিউবান রূপান্তরযোগ্য পেসো', 'other' => 'কিউবান রূপান্তরযোগ্য পেসো']),
    'CUP' => new C('CUP', 'কিউবান পেসো', narrow: '$', plurals: ['one' => 'কিউবান পেসো', 'other' => 'কিউবান পেসো']),
    'CVE' => new C('CVE', 'কেপ ভার্দে এসকুডো', plurals: ['one' => 'কেপ ভার্দে এসকুডো', 'other' => 'কেপ ভার্দে এসকুডো']),
    'CYP' => new C('CYP', 'সাইপ্রাস পাউন্ড'),
    'CZK' => new C('CZK', 'চেক প্রজাতন্ত্র কোরুনা', narrow: 'Kč', plurals: ['one' => 'চেক প্রজাতন্ত্র কোরুনা', 'other' => 'চেক প্রজাতন্ত্র কোরুনা']),
    'DDM' => new C('DDM', 'পূর্ব জার্মান মার্ক'),
    'DEM' => new C('DEM', 'ডয়চ্ মার্ক'),
    'DJF' => new C('DJF', 'জিবুতি ফ্রাঙ্ক', plurals: ['one' => 'জিবুতি ফ্রাঙ্ক', 'other' => 'জিবুতি ফ্রাঙ্ক'], minorUnits: 0),
    'DKK' => new C('DKK', 'ড্যানিশ ক্রোন', narrow: 'kr', plurals: ['one' => 'ড্যানিশ ক্রোন', 'other' => 'ড্যানিশ ক্রৌন']),
    'DOP' => new C('DOP', 'ডোমিনিকান পেসো', narrow: '$', plurals: ['one' => 'ডোমিনিকান পেসো', 'other' => 'ডোমিনিকান পেসো']),
    'DZD' => new C('DZD', 'আলজেরীয় দিনার', plurals: ['one' => 'আলজেরীয় দিনার', 'other' => 'আলজেরীয় দিনার']),
    'ECS' => new C('ECS', 'ইকুয়াডোর সুক্রে'),
    'ECV' => new C('ECV', 'ইকুয়াডোর উনিদাদেস দি ভেলর কনসতান্তে (ইউভিসি)'),
    'EEK' => new C('EEK', 'এস্তোনিয়া ক্রুনি'),
    'EGP' => new C('EGP', 'মিশরীয় পাউন্ড', narrow: 'E£', plurals: ['one' => 'মিশরীয় পাউন্ড', 'other' => 'মিশরীয় পাউন্ড']),
    'ERN' => new C('ERN', 'এরিট্রিয়েন নাকফা', plurals: ['one' => 'এরিট্রিয়েন নাকফা', 'other' => 'এরিট্রিয়েন নাকফা']),
    'ESA' => new C('ESA', 'স্প্যানিশ পেসেতা (একই হিসাব)'),
    'ESB' => new C('ESB', 'স্প্যানিশ পেসেতা (রূপান্তরযোগ্য হিসাব)'),
    'ESP' => new C('ESP', 'স্প্যানিশ পেসেতা', narrow: '₧'),
    'ETB' => new C('ETB', 'ইথিওপিয়ান বির', plurals: ['one' => 'ইথিওপিয়ান বির', 'other' => 'ইথিওপিয়ান বির']),
    'EUR' => new C('EUR', 'ইউরো', '€', narrow: '€', plurals: ['one' => 'ইউরো', 'other' => 'ইউরো']),
    'FIM' => new C('FIM', 'ফিনিস মার্কা'),
    'FJD' => new C('FJD', 'ফিজি ডলার', narrow: '$', plurals: ['one' => 'ফিজি ডলার', 'other' => 'ফিজি ডলার']),
    'FKP' => new C('FKP', 'ফকল্যান্ড দ্বীপপুঞ্জ পাউন্ড', narrow: '£', plurals: ['one' => 'ফকল্যান্ড দ্বীপপুঞ্জ পাউন্ড', 'other' => 'ফকল্যান্ড দ্বীপপুঞ্জ পাউন্ড']),
    'FRF' => new C('FRF', 'ফরাসি ফ্রাঙ্ক'),
    'GBP' => new C('GBP', 'ব্রিটিশ পাউন্ড', '£', narrow: '£', plurals: ['one' => 'ব্রিটিশ পাউন্ড', 'other' => 'ব্রিটিশ পাউন্ড']),
    'GEK' => new C('GEK', 'জর্জিয়ান কুপন লারিট'),
    'GEL' => new C('GEL', 'জর্জিয়ান লারি', narrow: '₾', plurals: ['one' => 'জর্জিয়ান লারি', 'other' => 'জর্জিয়ান লারি']),
    'GHC' => new C('GHC', 'ঘানা সেডি (১৯৭৯–২০০৭)'),
    'GHS' => new C('GHS', 'ঘানা সেডি', narrow: 'GH₵', plurals: ['one' => 'ঘানা সেডি', 'other' => 'ঘানা সেডি']),
    'GIP' => new C('GIP', 'জিব্রাল্টার পাউন্ড', narrow: '£', plurals: ['one' => 'জিব্রাল্টার পাউন্ড', 'other' => 'জিব্রাল্টার পাউন্ড']),
    'GMD' => new C('GMD', 'গাম্বিয়া ডালাসি', plurals: ['one' => 'গাম্বিয়া ডালাসি', 'other' => 'গাম্বিয়া ডালাসি']),
    'GNF' => new C('GNF', 'গিনি ফ্রাঙ্ক', narrow: 'FG', plurals: ['one' => 'গিনি ফ্রাঙ্ক', 'other' => 'গিনি ফ্রাঙ্ক'], minorUnits: 0),
    'GNS' => new C('GNS', 'গিনি সাইলি'),
    'GQE' => new C('GQE', 'ইকুয়েটোরিয়াল গিনি ইকুয়িলি'),
    'GRD' => new C('GRD', 'গ্রীক দ্রাচমা'),
    'GTQ' => new C('GTQ', 'গুয়াতেমালা কুয়েৎজাল', narrow: 'Q', plurals: ['one' => 'গুয়াতেমালা কুয়েৎজাল', 'other' => 'গুয়াতেমালা কুয়েৎজাল']),
    'GWE' => new C('GWE', 'পর্তুগিজ গিনি এসকুডো'),
    'GWP' => new C('GWP', 'গিনি বিসাউ পেসো'),
    'GYD' => new C('GYD', 'গাইয়েনা ডলার', narrow: '$', plurals: ['one' => 'গাইয়েনা ডলার', 'other' => 'গাইয়েনা ডলার']),
    'HKD' => new C('HKD', 'হংকং ডলার', 'HK$', narrow: '$', plurals: ['one' => 'হংকং ডলার', 'other' => 'হংকং ডলার']),
    'HNL' => new C('HNL', 'হন্ডুরাস লেম্পিরা', narrow: 'L', plurals: ['one' => 'হন্ডুরাস লেম্পিরা', 'other' => 'হন্ডুরাস লেম্পিরা']),
    'HRD' => new C('HRD', 'ক্রোয়েশিয়ান দিনার'),
    'HRK' => new C('HRK', 'ক্রোয়েশিয়ান কুনা', narrow: 'kn', plurals: ['one' => 'ক্রোয়েশিয়ান কুনা', 'other' => 'ক্রোয়েশিয়ান কুনা']),
    'HTG' => new C('HTG', 'হাইতি গৌর্দে', plurals: ['one' => 'হাইতি গৌর্দে', 'other' => 'হাইতি গৌর্দে']),
    'HUF' => new C('HUF', 'হাঙ্গেরিয়ান ফোরিন্ট', narrow: 'Ft', plurals: ['one' => 'হাঙ্গেরিয়ান ফোরিন্ট', 'other' => 'হাঙ্গেরিয়ান ফোরিন্ট']),
    'IDR' => new C('IDR', 'ইন্দোনেশিয়ান রুপিয়াহ', narrow: 'Rp', plurals: ['one' => 'ইন্দোনেশিয়ান রুপিয়াহ', 'other' => 'ইন্দোনেশিয়ান রুপিয়াহ']),
    'IEP' => new C('IEP', 'ইরিশ পাউন্ড'),
    'ILP' => new C('ILP', 'ইস্রাইলি পাউন্ড'),
    'ILS' => new C('ILS', 'ইস্রাইলি নতুন শেকেল', '₪', narrow: '₪', plurals: ['one' => 'ইস্রাইলি নতুন শেকেল', 'other' => 'ইস্রাইলি নতুন শেকেল']),
    'INR' => new C('INR', 'ভারতীয় রুপি', '₹', narrow: '₹', plurals: ['one' => 'ভারতীয় রুপি', 'other' => 'ভারতীয় রুপি']),
    'IQD' => new C('IQD', 'ইরাকি দিনার', plurals: ['one' => 'ইরাকি দিনার', 'other' => 'ইরাকি দিনার'], minorUnits: 3),
    'IRR' => new C('IRR', 'ইরানিয়ান রিয়াল', plurals: ['one' => 'ইরানিয়ান রিয়াল', 'other' => 'ইরানিয়ান রিয়াল']),
    'ISK' => new C('ISK', 'আইসল্যান্ডীয় ক্রোনা', narrow: 'kr', plurals: ['one' => 'আইসল্যান্ডীয় ক্রোনা', 'other' => 'আইসল্যান্ড ক্রৌন'], minorUnits: 0),
    'ITL' => new C('ITL', 'ইতালীয় লিরা'),
    'JMD' => new C('JMD', 'জামাইকান ডলার', narrow: '$', plurals: ['one' => 'জামাইকান ডলার', 'other' => 'জামাইকান ডলার']),
    'JOD' => new C('JOD', 'জর্ডানিয়ান দিনার', plurals: ['one' => 'জর্ডানিয়ান দিনার', 'other' => 'জর্ডানিয়ান দিনার'], minorUnits: 3),
    'JPY' => new C('JPY', 'জাপানি ইয়েন', 'JP¥', narrow: '¥', plurals: ['one' => 'জাপানি ইয়েন', 'other' => 'জাপানি ইয়েন'], minorUnits: 0),
    'KES' => new C('KES', 'কেনিয়ান শিলিং', plurals: ['one' => 'কেনিয়ান শিলিং', 'other' => 'কেনিয়ান শিলিং']),
    'KGS' => new C('KGS', 'কিরগিজস্তান সোম', plurals: ['one' => 'কিরগিজস্তান সোম', 'other' => 'কিরগিজস্তান সোম']),
    'KHR' => new C('KHR', 'কম্বোডিয়ান রিয়েল', narrow: '៛', plurals: ['one' => 'কম্বোডিয়ান রিয়েল', 'other' => 'কম্বোডিয়ান রিয়েল']),
    'KMF' => new C('KMF', 'কম্বোরো ফ্রাঙ্ক', narrow: 'CF', plurals: ['one' => 'কমোরিয়ান ফ্রাঙ্ক', 'other' => 'কমোরিয়ান ফ্রাঙ্ক'], minorUnits: 0),
    'KPW' => new C('KPW', 'উত্তর কোরিয়ার ওন', narrow: '₩', plurals: ['one' => 'উত্তর কোরিয়ার ওন', 'other' => 'উত্তর কোরিয়ার ওন']),
    'KRW' => new C('KRW', 'দক্ষিণ কোরিয়ান ওন', '₩', narrow: '₩', plurals: ['one' => 'দক্ষিণ কোরিয়ান ওন', 'other' => 'দক্ষিণ কোরিয়ান ওন'], minorUnits: 0),
    'KWD' => new C('KWD', 'কুয়েতি দিনার', plurals: ['one' => 'কুয়েতি দিনার', 'other' => 'কুয়েতি দিনার'], minorUnits: 3),
    'KYD' => new C('KYD', 'কেম্যান দ্বীপপুঞ্জের ডলার', narrow: '$', plurals: ['one' => 'কেম্যান দ্বীপপুঞ্জের ডলার', 'other' => 'কেম্যান দ্বীপপুঞ্জের ডলার']),
    'KZT' => new C('KZT', 'কাজাখাস্তানি টেঙ্গে', narrow: '₸', plurals: ['one' => 'কাজাখাস্তানি টেঙ্গে', 'other' => 'কাজাখাস্তানি টেঙ্গে']),
    'LAK' => new C('LAK', 'লেউশান কিপ', narrow: '₭', plurals: ['one' => 'লেউশান কিপ', 'other' => 'লেউশান কিপ']),
    'LBP' => new C('LBP', 'লেবানিজ পাউন্ড', narrow: 'L£', plurals: ['one' => 'লেবানিজ পাউন্ড', 'other' => 'লেবানিজ পাউন্ড']),
    'LKR' => new C('LKR', 'শ্রীলঙ্কান রুপি', narrow: 'Rs', plurals: ['one' => 'শ্রীলঙ্কান রুপি', 'other' => 'শ্রীলঙ্কান রুপি']),
    'LRD' => new C('LRD', 'লিবেরিয়ান ডলার', narrow: '$', plurals: ['one' => 'লিবেরিয়ান ডলার', 'other' => 'লিবেরিয়ান ডলার']),
    'LSL' => new C('LSL', 'লেসুটু লোটি'),
    'LTL' => new C('LTL', 'লিথুইনিয়ান লিটা', narrow: 'Lt', plurals: ['one' => 'লিথুইনিয়ান লিটা', 'other' => 'লিথুইনিয়ান লিটা']),
    'LTT' => new C('LTT', 'লিথুইনিয়ান টালোন্যাস'),
    'LUC' => new C('LUC', 'লুক্সেমবার্গ রুপান্তযোগ্য ফ্রাঙ্ক'),
    'LUF' => new C('LUF', 'লুক্সেমবার্গ ফ্রাঙ্ক'),
    'LUL' => new C('LUL', 'লুক্সেমবার্গ ফাইনেনশিয়াল ফ্রাঙ্ক'),
    'LVL' => new C('LVL', 'ল্যাটভিয়ান ল্যাট্‌স', narrow: 'Ls', plurals: ['one' => 'ল্যাটভিয়ান ল্যাট্‌স', 'other' => 'ল্যাটভিয়ান ল্যাট্‌স']),
    'LVR' => new C('LVR', 'ল্যাটভিয়ান রুবল'),
    'LYD' => new C('LYD', 'লিবিয়ান দিনার', plurals: ['one' => 'লিবিয়ান দিনার', 'other' => 'লিবিয়ান দিনার'], minorUnits: 3),
    'MAD' => new C('MAD', 'মোরোক্কান দিরহাম', plurals: ['one' => 'মোরোক্কান দিরহাম', 'other' => 'মোরোক্কান দিরহাম']),
    'MAF' => new C('MAF', 'মোরোক্কান ফ্রাঙ্ক'),
    'MDL' => new C('MDL', 'মোল্ডোভান লেয়ু', plurals: ['one' => 'মোল্ডোভান লেয়ু', 'other' => 'মোল্ডোভান লেয়ু']),
    'MGA' => new C('MGA', 'মাদাগাস্কার আরিয়ারি', narrow: 'Ar', plurals: ['one' => 'মাদাগাস্কার আরিয়ারি', 'other' => 'মাদাগাস্কার আরিয়ারি']),
    'MGF' => new C('MGF', 'মাদাগাস্কার ফ্রাঙ্ক'),
    'MKD' => new C('MKD', 'ম্যাসেডোনিয়ান দিনার', plurals: ['one' => 'ম্যাসেডোনিয়ান দিনার', 'other' => 'ম্যাসেডোনিয়ান দিনার']),
    'MLF' => new C('MLF', 'মালি ফ্রাঙ্ক'),
    'MMK' => new C('MMK', 'মায়ানমার কিয়াত', narrow: 'K', plurals: ['one' => 'মায়ানমার কিয়াত', 'other' => 'মায়ানমার কিয়াত']),
    'MNT' => new C('MNT', 'মঙ্গোলিয়ান তুগরিক', narrow: '₮', plurals: ['one' => 'মঙ্গোলিয়ান তুগরিক', 'other' => 'মঙ্গোলিয়ান তুগরিক']),
    'MOP' => new C('MOP', 'ম্যাক্যাও পাটাকা', plurals: ['one' => 'ম্যাক্যাও পাটাকা', 'other' => 'ম্যাক্যাও পাটাকা']),
    'MRO' => new C('MRO', 'মৌরিতানিয়ান ওউগুইয়া (১৯৭৩–২০১৭)', plurals: ['one' => 'মৌরিতানিয়ান ওউগুইয়া (১৯৭৩–২০১৭)', 'other' => 'মৌরিতানিয়ান ওউগুইয়া (১৯৭৩–২০১৭)']),
    'MRU' => new C('MRU', 'মৌরিতানিয়ান ওউগুইয়া', plurals: ['one' => 'মৌরিতানিয়ান ওউগুইয়া', 'other' => 'মৌরিতানিয়ান ওউগুইয়া']),
    'MTL' => new C('MTL', 'মাল্টা লিরা'),
    'MTP' => new C('MTP', 'মাল্টা পাউন্ড'),
    'MUR' => new C('MUR', 'মৌরিতানিয়ান রুপি', narrow: 'Rs', plurals: ['one' => 'মৌরিতানিয়ান রুপি', 'other' => 'মৌরিতানিয়ান রুপি']),
    'MVR' => new C('MVR', 'মালদিভিয়ান রুফিয়া', plurals: ['one' => 'মালদিভিয়ান রুফিয়া', 'other' => 'মালদিভিয়ান রুফিয়া']),
    'MWK' => new C('MWK', 'মালাউইয়ান কওয়াচ', plurals: ['one' => 'মালাউইয়ান কওয়াচ', 'other' => 'মালাউইয়ান কওয়াচ']),
    'MXN' => new C('MXN', 'ম্যাক্সিকান পেসো', 'MX$', narrow: '$', plurals: ['one' => 'ম্যাক্সিকান পেসো', 'other' => 'ম্যাক্সিকান পেসো']),
    'MXP' => new C('MXP', 'ম্যাক্সিকান সিলভার পেসো (১৮৬১–১৯৯২)'),
    'MXV' => new C('MXV', 'মেক্সিকান উনিদাদ দি ইনভার্সান (UDI)'),
    'MYR' => new C('MYR', 'মালয়েশিয়ান রিঙ্গিৎ', narrow: 'RM', plurals: ['one' => 'মালয়েশিয়ান রিঙ্গিৎ', 'other' => 'মালয়েশিয়ান রিঙ্গিৎ']),
    'MZE' => new C('MZE', 'মোজাম্বিক এসকুডো'),
    'MZM' => new C('MZM', 'প্রাচীন মোজাম্বিক মেটিকেল'),
    'MZN' => new C('MZN', 'মোজাম্বিক মেটিকেল', plurals: ['one' => 'মোজাম্বিক মেটিকেল', 'other' => 'মোজাম্বিক মেটিকেল']),
    'NAD' => new C('NAD', 'নামিবিয়া ডলার', narrow: '$', plurals: ['one' => 'নামিবিয়া ডলার', 'other' => 'নামিবিয়া ডলার']),
    'NGN' => new C('NGN', 'নাইজেরিয়ান নায়রা', narrow: '₦', plurals: ['one' => 'নাইজেরিয়ান নায়রা', 'other' => 'নাইজেরিয়ান নায়রা']),
    'NIC' => new C('NIC', 'নিকারাগুয়ান কর্ডোবা (১৯৮৮–১৯৯১)'),
    'NIO' => new C('NIO', 'নিকারাগুয়ান কর্ডোবা', narrow: 'C$', plurals: ['one' => 'নিকারাগুয়ান কর্ডোবা', 'other' => 'নিকারাগুয়ান কর্ডোবা']),
    'NLG' => new C('NLG', 'নেদারল্যান্ড গুল্ডের'),
    'NOK' => new C('NOK', 'নরওয়েজিয়ান ক্রোন', narrow: 'kr', plurals: ['one' => 'নরওয়েজিয়ান ক্রোন', 'other' => 'নরওয়েজিয়ান ক্রোনার']),
    'NPR' => new C('NPR', 'নেপালি রুপি', narrow: 'Rs', plurals: ['one' => 'নেপালি রুপি', 'other' => 'নেপালি রুপি']),
    'NZD' => new C('NZD', 'নিউজিল্যান্ড ডলার', 'NZ$', narrow: '$', plurals: ['one' => 'নিউজিল্যান্ড ডলার', 'other' => 'নিউজিল্যান্ড ডলার']),
    'OMR' => new C('OMR', 'ওমানি রিয়াল', plurals: ['one' => 'ওমানি রিয়াল', 'other' => 'ওমানি রিয়াল'], minorUnits: 3),
    'PAB' => new C('PAB', 'পানামা বেলবোয়া', plurals: ['one' => 'পানামা বেলবোয়া', 'other' => 'পানামা বেলবোয়া']),
    'PEI' => new C('PEI', 'পেরুভিয়ান ইন্তি'),
    'PEN' => new C('PEN', 'পেরুভিয়ান সোল', plurals: ['one' => 'পেরুভিয়ান সোল', 'other' => 'পেরুভিয়ান সোল']),
    'PES' => new C('PES', 'পেরুভিয়ান সোল (1863–1965)', plurals: ['one' => 'পেরুভিয়ান সোল (1863–1965)', 'other' => 'পেরুভিয়ান সোল (1863–1965)']),
    'PGK' => new C('PGK', 'পাপুয়া নিউ গিনিয়ান কিনা', plurals: ['one' => 'পাপুয়া নিউ গিনিয়ান কিনা', 'other' => 'পাপুয়া নিউ গিনিয়ান কিনা']),
    'PHP' => new C('PHP', 'ফিলিপাইন পেসো', narrow: '₱', plurals: ['one' => 'ফিলিপাইন পেসো', 'other' => 'ফিলিপাইন পেসো']),
    'PKR' => new C('PKR', 'পাকিস্তানি রুপি', narrow: 'Rs', plurals: ['one' => 'পাকিস্তানি রুপি', 'other' => 'পাকিস্তানি রুপি']),
    'PLN' => new C('PLN', 'পোলিশ জ্লোটি', narrow: 'zł', plurals: ['one' => 'পোলিশ জ্লোটি', 'other' => 'পোলিশ জ্লোটি']),
    'PLZ' => new C('PLZ', 'পোলিশ জ্লোটি (১৯৫০–১৯৯৫)'),
    'PTE' => new C('PTE', 'পর্তুগিজ এসকুডো'),
    'PYG' => new C('PYG', 'প্যারাগুয়ান গুয়ারানি', narrow: '₲', plurals: ['one' => 'প্যারাগুয়ান গুয়ারানি', 'other' => 'প্যারাগুয়ান গুয়ারানি'], minorUnits: 0),
    'QAR' => new C('QAR', 'কাতার রিয়াল', plurals: ['one' => 'কাতার রিয়াল', 'other' => 'কাতার রিয়াল']),
    'RHD' => new C('RHD', 'রোডেশিয়ান ডলার'),
    'ROL' => new C('ROL', 'প্রাচীন রুমানিয়া লেয়ু'),
    'RON' => new C('RON', 'রুমানিয়া লেয়ু', narrow: 'lei', plurals: ['one' => 'রুমানিয়া লেয়ু', 'other' => 'রুমানিয়া লেয়ু']),
    'RSD' => new C('RSD', 'সারবিয়ান দিনার', plurals: ['one' => 'সারবিয়ান দিনার', 'other' => 'সারবিয়ান দিনার']),
    'RUB' => new C('RUB', 'রাশিয়ান রুবেল', narrow: '₽', plurals: ['one' => 'রাশিয়ান রুবেল', 'other' => 'রাশিয়ান রুবেল']),
    'RUR' => new C('RUR', 'রাশিয়ান রুবল (১৯৯১–১৯৯৮)'),
    'RWF' => new C('RWF', 'রুয়ান্ডান ফ্রাঙ্ক', narrow: 'RF', plurals: ['one' => 'রুয়ান্ডান ফ্রাঙ্ক', 'other' => 'রুয়ান্ডান ফ্রাঙ্ক'], minorUnits: 0),
    'SAR' => new C('SAR', 'সৌদি রিয়াল', plurals: ['one' => 'সৌদি রিয়াল', 'other' => 'সৌদি রিয়াল']),
    'SBD' => new C('SBD', 'সলোমন দ্বীপপুঞ্জ ডলার', narrow: '$', plurals: ['one' => 'সলোমন দ্বীপপুঞ্জ ডলার', 'other' => 'সলোমন দ্বীপপুঞ্জ ডলার']),
    'SCR' => new C('SCR', 'সেয়চেল্লোইস রুপি', plurals: ['one' => 'সেয়চেল্লোইস রুপি', 'other' => 'সেয়চেল্লোইস রুপি']),
    'SDD' => new C('SDD', 'প্রাচীন সুদানি দিনার'),
    'SDG' => new C('SDG', 'সুদানি পাউন্ড', plurals: ['one' => 'সুদানি পাউন্ড', 'other' => 'সুদানি পাউন্ড']),
    'SDP' => new C('SDP', 'প্রাচীন সুদানি পাউন্ড'),
    'SEK' => new C('SEK', 'সুইডিশ ক্রোনা', narrow: 'kr', plurals: ['one' => 'সুইডিশ ক্রোনা', 'other' => 'সুইডিশ ক্রোনা']),
    'SGD' => new C('SGD', 'সিঙ্গাপুর ডলার', narrow: '$', plurals: ['one' => 'সিঙ্গাপুর ডলার', 'other' => 'সিঙ্গাপুর ডলার']),
    'SHP' => new C('SHP', 'সেন্ট হেলেনা পাউন্ড', narrow: '£', plurals: ['one' => 'সেন্ট হেলেনা পাউন্ড', 'other' => 'সেন্ট হেলেনা পাউন্ড']),
    'SIT' => new C('SIT', 'স্লোভানিয়া টোলার'),
    'SKK' => new C('SKK', 'স্লোভাক কোরুনা'),
    'SLL' => new C('SLL', 'সিয়েরালিয়ন লিয়ন', plurals: ['one' => 'সিয়েরালিয়ন লিয়ন', 'other' => 'সিয়েরালিয়ন লিয়ন']),
    'SOS' => new C('SOS', 'সোমালি শিলিং', plurals: ['one' => 'সোমালি শিলিং', 'other' => 'সোমালি শিলিং']),
    'SRD' => new C('SRD', 'সুরিনাম ডলার', narrow: '$', plurals: ['one' => 'সুরিনাম ডলার', 'other' => 'সুরিনাম ডলার']),
    'SRG' => new C('SRG', 'সুরিনাম গিল্ডার'),
    'SSP' => new C('SSP', 'দক্ষিণ সুদানি পাউন্ড', narrow: '£', plurals: ['one' => 'দক্ষিণ সুদানি পাউন্ড', 'other' => 'দক্ষিণ সুদানি পাউন্ড']),
    'STD' => new C('STD', 'সাও টোমে এবং প্রিন্সিপে ডোবরা (১৯৭৭–২০১৭)', plurals: ['one' => 'সাও টোমে এবং প্রিন্সিপে ডোবরা (১৯৭৭–২০১৭)', 'other' => 'সাও টোমে এবং প্রিন্সিপে ডোবরা (১৯৭৭–২০১৭)']),
    'STN' => new C('STN', 'সাও টোমে এবং প্রিন্সিপে ডোবরা', narrow: 'Db', plurals: ['one' => 'সাও টোমে এবং প্রিন্সিপে ডোবরা', 'other' => 'সাও টোমে এবং প্রিন্সিপে ডোবরা']),
    'SUR' => new C('SUR', 'সোভিয়েত রুবল'),
    'SVC' => new C('SVC', 'এল স্যালভোডোর কোলোন'),
    'SYP' => new C('SYP', 'সিরিয়ান পাউন্ড', narrow: '£', plurals: ['one' => 'সিরিয়ান পাউন্ড', 'other' => 'সিরিয়ান পাউন্ড']),
    'SZL' => new C('SZL', 'সোয়াজিল্যান্ড লিলাঙ্গেনি', plurals: ['one' => 'সোয়াজিল্যান্ড লিলাঙ্গেনি', 'other' => 'সোয়াজিল্যান্ড লিলাঙ্গেনি']),
    'THB' => new C('THB', 'থাই বাত', '฿', narrow: '฿', plurals: ['one' => 'থাই বাত', 'other' => 'থাই বাত']),
    'TJR' => new C('TJR', 'তাজিকিস্তান রুবল'),
    'TJS' => new C('TJS', 'তাজিকিস্তান সোমোনি', plurals: ['one' => 'তাজিকিস্তান সোমোনি', 'other' => 'তাজিকিস্তান সোমোনি']),
    'TMM' => new C('TMM', 'তুর্কমেনিস্টানি মানাত'),
    'TMT' => new C('TMT', 'তুর্কমেনিস্তান মানত', plurals: ['one' => 'তুর্কমেনিস্তান মানত', 'other' => 'তুর্কমেনিস্তান মানত']),
    'TND' => new C('TND', 'তিউনেশিয়ান দিনার', plurals: ['one' => 'তিউনেশিয়ান দিনার', 'other' => 'তিউনেশিয়ান দিনার'], minorUnits: 3),
    'TOP' => new C('TOP', 'টোঙ্গা পা’আঙ্গা', narrow: 'T$', plurals: ['one' => 'টোঙ্গা পা’আঙ্গা', 'other' => 'টোঙ্গা পা’আঙ্গা']),
    'TPE' => new C('TPE', 'তিমুর এসকুডো'),
    'TRL' => new C('TRL', 'প্রাচীন তুর্কি লিরা'),
    'TRY' => new C('TRY', 'তুর্কি লিরা', narrow: '₺', plurals: ['one' => 'তুর্কি লিরা', 'other' => 'তুর্কি লিরা']),
    'TTD' => new C('TTD', 'ত্রিনিদাদ এবং টোবাগো ডলার', narrow: '$', plurals: ['one' => 'ত্রিনিদাদ এবং টোবাগো ডলার', 'other' => 'ত্রিনিদাদ এবং টোবাগো ডলার']),
    'TWD' => new C('TWD', 'নতুন তাইওয়ান ডলার', 'NT$', narrow: 'NT$', plurals: ['one' => 'নতুন তাইওয়ান ডলার', 'other' => 'নতুন তাইওয়ান ডলার']),
    'TZS' => new C('TZS', 'তাঞ্জনিয়া শিলিং', plurals: ['one' => 'তাঞ্জনিয়া শিলিং', 'other' => 'তাঞ্জনিয়া শিলিং']),
    'UAH' => new C('UAH', 'ইউক্রেইন হৃভনিয়া', narrow: '₴', plurals: ['one' => 'ইউক্রেইন হৃভনিয়া', 'other' => 'ইউক্রেইন হৃভনিয়া']),
    'UAK' => new C('UAK', 'ইউক্রেইন কার্বোভ্যান্টস'),
    'UGS' => new C('UGS', 'উগান্ডান শিলিং (১৯৬৬–১৯৮৭)'),
    'UGX' => new C('UGX', 'উগান্ডান শিলিং', plurals: ['one' => 'উগান্ডান শিলিং', 'other' => 'উগান্ডান শিলিং'], minorUnits: 0),
    'USD' => new C('USD', 'মার্কিন ডলার', 'US$', narrow: '$', plurals: ['one' => 'মার্কিন ডলার', 'other' => 'মার্কিন ডলার']),
    'USN' => new C('USN', 'মার্কিন ডলার (পরবর্তী দিন)'),
    'USS' => new C('USS', 'মার্কিন ডলার (একই দিন)'),
    'UYI' => new C('UYI', 'উরুগুয়ায়ান পেসো এন উনিদাদেস ইনডেক্সেডাস', minorUnits: 0),
    'UYP' => new C('UYP', 'উরুগুয়ে পেসো (১৯৭৫–১৯৯৩)'),
    'UYU' => new C('UYU', 'উরুগুয়ে পেসো', narrow: '$', plurals: ['one' => 'উরুগুয়ে পেসো', 'other' => 'উরুগুয়ে পেসো']),
    'UZS' => new C('UZS', 'উজবেকিস্তানি সোম', plurals: ['one' => 'উজবেকিস্তানি সোম', 'other' => 'উজবেকিস্তানি সোম']),
    'VEB' => new C('VEB', 'ভেনিজুয়েলান বলিভার (১৮৭১–২০০৮)'),
    'VEF' => new C('VEF', 'ভেনিজুয়েলীয় বলিভার (২০০৮–২০১৮)', narrow: 'Bs', plurals: ['one' => 'ভেনিজুয়েলীয় বলিভার (২০০৮–২০১৮)', 'other' => 'ভেনিজুয়েলীয় বলিভার (২০০৮–২০১৮)']),
    'VES' => new C('VES', 'ভেনিজুয়েলীয় বলিভার', plurals: ['one' => 'ভেনিজুয়েলীয় বলিভার', 'other' => 'ভেনিজুয়েলীয় বলিভার']),
    'VND' => new C('VND', 'ভিয়েতনামি ডঙ্গ', '₫', narrow: '₫', plurals: ['one' => 'ভিয়েতনামি ডঙ্গ', 'other' => 'ভিয়েতনামি ডঙ্গ'], minorUnits: 0),
    'VUV' => new C('VUV', 'ভানুয়াতু ভাতু', plurals: ['one' => 'ভানুয়াতু ভাতু', 'other' => 'ভানুয়াতু ভাতু'], minorUnits: 0),
    'WST' => new C('WST', 'সামোয়ান টালা', plurals: ['one' => 'সামোয়ান টালা', 'other' => 'সামোয়ান টালা']),
    'XAF' => new C('XAF', 'মধ্য আফ্রিকান [CFA] ফ্র্যাঙ্ক', 'FCFA', plurals: ['one' => 'মধ্য আফ্রিকান [CFA] ফ্র্যাঙ্ক', 'other' => 'মধ্য আফ্রিকান [CFA] ফ্র্যাঙ্ক'], minorUnits: 0),
    'XAG' => new C('XAG', 'সিলভার'),
    'XAU' => new C('XAU', 'গোল্ড'),
    'XBB' => new C('XBB', 'ইউরোপীয় আর্থিক একক'),
    'XCD' => new C('XCD', 'পূর্ব ক্যারাবিয়ান ডলার', 'EC$', narrow: '$', plurals: ['one' => 'পূর্ব ক্যারাবিয়ান ডলার', 'other' => 'পূর্ব ক্যারাবিয়ান ডলার']),
    'XEU' => new C('XEU', 'ইউরোপীয় মুদ্রা একক'),
    'XFO' => new C('XFO', 'ফরাসি গোল্ড ফ্রাঙ্ক'),
    'XFU' => new C('XFU', 'ফরাসি ইউআইসি - ফ্রাঙ্ক'),
    'XOF' => new C('XOF', 'পশ্চিম আফ্রিকান [CFA] ফ্র্যাঙ্ক', "F\u{202F}CFA", plurals: ['one' => 'পশ্চিম আফ্রিকান [CFA] ফ্র্যাঙ্ক', 'other' => 'পশ্চিম আফ্রিকান [CFA] ফ্র্যাঙ্ক'], minorUnits: 0),
    'XPD' => new C('XPD', 'প্যালেডিয়াম'),
    'XPF' => new C('XPF', 'সিএফপি ফ্র্যাঙ্ক', 'CFPF', plurals: ['one' => 'সিএফপি ফ্র্যাঙ্ক', 'other' => 'সিএফপি ফ্র্যাঙ্ক'], minorUnits: 0),
    'XPT' => new C('XPT', 'প্লাটিনাম'),
    'XXX' => new C('XXX', 'অজানা মুদ্রা', '¤', plurals: ['one' => '(মুদ্রার অজানা একক)', 'other' => '(অজানা মুদ্রা)']),
    'YDD' => new C('YDD', 'ইয়েমেনি দিনার'),
    'YER' => new C('YER', 'ইয়েমেনি রিয়াল', plurals: ['one' => 'ইয়েমেনি রিয়াল', 'other' => 'ইয়েমেনি রিয়াল']),
    'YUD' => new C('YUD', 'যুগোশ্লাভিয় হার্ড দিনার'),
    'YUM' => new C('YUM', 'যুগোশ্লাভিয় নোভি দিনার'),
    'YUN' => new C('YUN', 'যুগোশ্লাভিয় রুপান্তরযোগ্য দিনার'),
    'ZAL' => new C('ZAL', 'দক্ষিণ আফ্রিকান র‌্যান্ড'),
    'ZAR' => new C('ZAR', 'দক্ষিণ আফ্রিকান রেন্ড', narrow: 'R', plurals: ['one' => 'দক্ষিণ আফ্রিকান রেন্ড', 'other' => 'দক্ষিণ আফ্রিকান রেন্ড']),
    'ZMK' => new C('ZMK', 'জাম্বিয়ান কওয়াচা (১৯৬৮–২০১২)'),
    'ZMW' => new C('ZMW', 'জাম্বিয়ান কওয়াচা', narrow: 'ZK', plurals: ['one' => 'জাম্বিয়ান কওয়াচা', 'other' => 'জাম্বিয়ান কওয়াচা']),
    'ZRN' => new C('ZRN', 'জাইরিয়ান নিউ জাইরে'),
    'ZRZ' => new C('ZRZ', 'জাইরিয়ান জাইরে'),
    'ZWD' => new C('ZWD', 'জিম্বাবুয়ে ডলার (১৯৮০–২০০৮)'),
    'ZWL' => new C('ZWL', 'জিম্বাবুয়ে ডলার (২০০৯)'),
    'ZWR' => new C('ZWR', 'জিম্বাবুয়ে ডলার (২০০৮)'),
];
