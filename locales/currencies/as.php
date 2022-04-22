<?php

use Major\Fluent\Formatters\Number\Locale\Currency as C;

return [
    'AED' => new C('AED', 'সংযুক্ত আৰব আমিৰাত ডিৰহেম', plurals: ['one' => 'UAE ডিৰহেম', 'other' => 'UAE ডিৰহেম']),
    'AFN' => new C('AFN', 'আফগান আফগানী', narrow: '؋', plurals: ['one' => 'আফগান আফগানী', 'other' => 'আফগান আফগানী']),
    'ALL' => new C('ALL', 'আলবেনীয় লেক', plurals: ['one' => 'আলবেনীয় লেক', 'other' => 'আলবেনীয় লেক']),
    'AMD' => new C('AMD', 'আৰ্মেনিয়ান ড্ৰাম', narrow: '֏', plurals: ['one' => 'আৰ্মেনিয়ান ড্ৰাম', 'other' => 'আৰ্মেনিয়ান ড্ৰাম']),
    'ANG' => new C('ANG', 'নেডাৰলেণ্ডছ এণ্টিলিয়েন গিল্ডাৰ', plurals: ['one' => 'নেডাৰলেণ্ডছ এণ্টিলিয়েন গিল্ডাৰ', 'other' => 'নেডাৰলেণ্ডছ এণ্টিলিয়েন গিল্ডাৰ']),
    'AOA' => new C('AOA', 'এংগোলান কোৱাঞ্জা', narrow: 'Kz', plurals: ['one' => 'এংগোলান কোৱাঞ্জা', 'other' => 'এংগোলান কোৱাঞ্জা']),
    'ARS' => new C('ARS', 'আৰ্জেণ্টাইন পেছো', narrow: '$', plurals: ['one' => 'আৰ্জেণ্টাইন পেছো', 'other' => 'আৰ্জেণ্টাইন পেছো']),
    'AUD' => new C('AUD', 'অষ্ট্ৰেলিয়ান ডলাৰ', 'A$', narrow: '$', plurals: ['one' => 'অষ্ট্ৰেলিয়ান ডলাৰ', 'other' => 'অষ্ট্ৰেলিয়ান ডলাৰ']),
    'AWG' => new C('AWG', 'আৰুবান ফ্ল’ৰিন', plurals: ['one' => 'আৰুবান ফ্ল’ৰিন', 'other' => 'আৰুবান ফ্ল’ৰিন']),
    'AZN' => new C('AZN', 'আজেৰবাইজানী মানাত', narrow: '₼', plurals: ['one' => 'আজেৰবাইজানী মানাত', 'other' => 'আজেৰবাইজানী মানাত']),
    'BAM' => new C('BAM', 'ব’ছনিয়া আৰু হাৰ্জেগ’ভিনা কনভাৰ্টিব্‌ল মাৰ্ক', narrow: 'KM', plurals: ['one' => 'ব’ছনিয়া আৰু হাৰ্জেগ’ভিনা কনভাৰ্টিব্‌ল মাৰ্ক', 'other' => 'ব’ছনিয়া আৰু হাৰ্জেগ’ভিনা কনভাৰ্টিব্‌ল মাৰ্ক']),
    'BBD' => new C('BBD', 'বাৰ্বাডিয়ান ডলাৰ', narrow: '$', plurals: ['one' => 'বাৰ্বাডিয়ান ডলাৰ', 'other' => 'বাৰ্বাডিয়ান ডলাৰ']),
    'BDT' => new C('BDT', 'বাংলাদেশী টাকা', narrow: '৳', plurals: ['one' => 'বাংলাদেশী টাকা', 'other' => 'বাংলাদেশী টাকা']),
    'BGN' => new C('BGN', 'বুলগেৰীয় লেভ', plurals: ['one' => 'বুলগেৰীয় লেভ', 'other' => 'বুলগেৰীয় লেভ']),
    'BHD' => new C('BHD', 'বাহৰেইনী ডিনাৰ', plurals: ['one' => 'বাহৰেইনী ডিনাৰ', 'other' => 'বাহৰেইনী ডিনাৰ'], minorUnits: 3),
    'BIF' => new C('BIF', 'বুৰুণ্ডিয়ান ফ্ৰেংক', plurals: ['one' => 'বুৰুণ্ডিয়ান ফ্ৰেংক', 'other' => 'বুৰুণ্ডিয়ান ফ্ৰেংক'], minorUnits: 0),
    'BMD' => new C('BMD', 'বাৰ্মুডান ডলাৰ', narrow: '$', plurals: ['one' => 'বাৰ্মুডান ডলাৰ', 'other' => 'বাৰ্মুডান ডলাৰ']),
    'BND' => new C('BND', 'ব্ৰুনেই ডলাৰ', narrow: '$', plurals: ['one' => 'ব্ৰুনেই ডলাৰ', 'other' => 'ব্ৰুনেই ডলাৰ']),
    'BOB' => new C('BOB', 'বলিভিয়ান বলিভিয়ানো', narrow: 'Bs', plurals: ['one' => 'বলিভিয়ান বলিভিয়ানো', 'other' => 'বলিভিয়ান বলিভিয়ানো']),
    'BRL' => new C('BRL', 'ব্ৰাজিলিয়ান ৰিয়েল', 'R$', narrow: 'R$', plurals: ['one' => 'ব্ৰাজিলিয়ান ৰিয়েল', 'other' => 'ব্ৰাজিলিয়ান ৰিয়েল']),
    'BSD' => new C('BSD', 'বাহামিয়ান ডলাৰ', narrow: '$', plurals: ['one' => 'বাহামিয়ান ডলাৰ', 'other' => 'বাহামিয়ান ডলাৰ']),
    'BTN' => new C('BTN', 'ভুটানী নংগলট্ৰাম', plurals: ['one' => 'ভুটানী নংগলট্ৰাম', 'other' => 'ভুটানী নংগলট্ৰাম']),
    'BWP' => new C('BWP', 'ব’টচোৱানান পুলা', narrow: 'P', plurals: ['one' => 'ব’টচোৱানান পুলা', 'other' => 'ব’টচোৱানান পুলা']),
    'BYN' => new C('BYN', 'বেলাৰুছীয় ৰুবেল', narrow: 'р.', plurals: ['one' => 'বেলাৰুছীয় ৰুবেল', 'other' => 'বেলাৰুছীয় ৰুবেল']),
    'BZD' => new C('BZD', 'বেলিজ ডলাৰ', narrow: '$', plurals: ['one' => 'বেলিজ ডলাৰ', 'other' => 'বেলিজ ডলাৰ']),
    'CAD' => new C('CAD', 'কানাডিয়ান ডলাৰ', 'CA$', narrow: '$', plurals: ['one' => 'কানাডিয়ান ডলাৰ', 'other' => 'কানাডিয়ান ডলাৰ']),
    'CDF' => new C('CDF', 'কংগো ফ্ৰেংক', plurals: ['one' => 'কংগো ফ্ৰেংক', 'other' => 'কংগো ফ্ৰেংক']),
    'CHF' => new C('CHF', 'চুইছ ফ্ৰেংক', plurals: ['one' => 'চুইছ ফ্ৰেংক', 'other' => 'চুইছ ফ্ৰেংক']),
    'CLP' => new C('CLP', 'চিলিয়ান পেছো', narrow: '$', plurals: ['one' => 'চিলিয়ান পেছো', 'other' => 'চিলিয়ান পেছো'], minorUnits: 0),
    'CNH' => new C('CNH', 'চীনা ইউৱান (অফশ্ব’ৰ)', plurals: ['one' => 'চীনা ইউৱান (অফশ্ব’ৰ)', 'other' => 'চীনা ইউৱান (অফশ্ব’ৰ)']),
    'CNY' => new C('CNY', 'চীনা ইউৱান', 'CN¥', narrow: '¥', plurals: ['one' => 'চীনা ইউৱান', 'other' => 'চীনা ইউৱান']),
    'COP' => new C('COP', 'কলম্বিয়ান পেছো', narrow: '$', plurals: ['one' => 'কলম্বিয়ান পেছো', 'other' => 'কলম্বিয়ান পেছো']),
    'CRC' => new C('CRC', 'কোষ্টা ৰিকান কোলন', narrow: '₡', plurals: ['one' => 'কোষ্টা ৰিকান কোলন', 'other' => 'কোষ্টা ৰিকান কোলন']),
    'CUC' => new C('CUC', 'কিউবান ৰূপান্তৰযোগ্য পেছো', narrow: '$', plurals: ['one' => 'কিউবান ৰূপান্তৰযোগ্য পেছো', 'other' => 'কিউবান ৰূপান্তৰযোগ্য পেছো']),
    'CUP' => new C('CUP', 'কিউবান পেছো', narrow: '$', plurals: ['one' => 'কিউবান পেছো', 'other' => 'কিউবান পেছো']),
    'CVE' => new C('CVE', 'কেপ ভাৰ্দে এছকুডো', plurals: ['one' => 'কেপ ভাৰ্দে এছকুডো', 'other' => 'কেপ ভাৰ্দে এছকুডো']),
    'CZK' => new C('CZK', 'চেক কোৰুনা', narrow: 'Kč', plurals: ['one' => 'চেক কোৰুনা', 'other' => 'চেক কোৰুনা']),
    'DJF' => new C('DJF', 'জিবুটি ফ্ৰেংক', plurals: ['one' => 'জিবুটি ফ্ৰেংক', 'other' => 'জিবুটি ফ্ৰেংক'], minorUnits: 0),
    'DKK' => new C('DKK', 'ডেনিচ ক্ৰোন', narrow: 'kr', plurals: ['one' => 'ডেনিচ ক্ৰোন', 'other' => 'ডেনিচ ক্ৰোন']),
    'DOP' => new C('DOP', 'ড’মিনিকান পেছো', narrow: '$', plurals: ['one' => 'ড’মিনিকান পেছো', 'other' => 'ড’মিনিকান পেছো']),
    'DZD' => new C('DZD', 'আলজেৰীয় ডিনাৰ', plurals: ['one' => 'আলজেৰীয় ডিনাৰ', 'other' => 'আলজেৰীয় ডিনাৰ']),
    'EGP' => new C('EGP', 'ইজিপ্তৰ পাউণ্ড', narrow: 'E£', plurals: ['one' => 'ইজিপ্তৰ পাউণ্ড', 'other' => 'ইজিপ্তৰ পাউণ্ড']),
    'ERN' => new C('ERN', 'এৰিট্ৰিয়ন নাক্‌ফা', plurals: ['one' => 'এৰিট্ৰিয়ন নাক্‌ফা', 'other' => 'এৰিট্ৰিয়ন নাক্‌ফা']),
    'ETB' => new C('ETB', 'ইথিঅ’পিয়ান বিৰ', plurals: ['one' => 'ইথিঅ’পিয়ান বিৰ', 'other' => 'ইথিঅ’পিয়ান বিৰ']),
    'EUR' => new C('EUR', 'ইউৰো', '€', narrow: '€', plurals: ['one' => 'ইউৰো', 'other' => 'ইউৰো']),
    'FJD' => new C('FJD', 'ফিজিয়ান ডলাৰ', narrow: '$', plurals: ['one' => 'ফিজিয়ান ডলাৰ', 'other' => 'ফিজিয়ান ডলাৰ']),
    'FKP' => new C('FKP', 'ফকলেণ্ড দ্বীপপুঞ্জৰ পাউণ্ড', narrow: '£', plurals: ['one' => 'ফকলেণ্ড দ্বীপপুঞ্জৰ পাউণ্ড', 'other' => 'ফকলেণ্ড দ্বীপপুঞ্জৰ পাউণ্ড']),
    'GBP' => new C('GBP', 'ব্ৰিটিছ পাউণ্ড', '£', narrow: '£', plurals: ['one' => 'ব্ৰিটিছ পাউণ্ড', 'other' => 'ব্ৰিটিছ পাউণ্ড']),
    'GEL' => new C('GEL', 'জৰ্জিয়ান লাৰি', narrow: '₾', plurals: ['one' => 'জৰ্জিয়ান লাৰি', 'other' => 'জৰ্জিয়ান লাৰি']),
    'GHS' => new C('GHS', 'ঘানাৰ চেডি', narrow: 'GH₵', plurals: ['one' => 'ঘানাৰ চেডি', 'other' => 'ঘানাৰ চেডি']),
    'GIP' => new C('GIP', 'জিব্ৰাল্টৰ পাউণ্ড', narrow: '£', plurals: ['one' => 'জিব্ৰাল্টৰ পাউণ্ড', 'other' => 'জিব্ৰাল্টৰ পাউণ্ড']),
    'GMD' => new C('GMD', 'গাম্বিয়া ডালাছি', plurals: ['one' => 'গাম্বিয়া ডালাছি', 'other' => 'গাম্বিয়া ডালাছি']),
    'GNF' => new C('GNF', 'গিনি ফ্ৰেংক', narrow: 'FG', plurals: ['one' => 'গিনি ফ্ৰেংক', 'other' => 'গিনি ফ্ৰেংক'], minorUnits: 0),
    'GTQ' => new C('GTQ', 'গুৱাটেমালা কুৱেৎজাল', narrow: 'Q', plurals: ['one' => 'গুৱাটেমালা কুৱেৎজাল', 'other' => 'গুৱাটেমালা কুৱেৎজাল']),
    'GYD' => new C('GYD', 'গায়ানিজ ডলাৰ', narrow: '$', plurals: ['one' => 'গায়ানিজ ডলাৰ', 'other' => 'গায়ানিজ ডলাৰ']),
    'HKD' => new C('HKD', 'হং কং ডলাৰ', 'HK$', narrow: '$', plurals: ['one' => 'হং কং ডলাৰ', 'other' => 'হং কং ডলাৰ']),
    'HNL' => new C('HNL', 'হোন্দুৰান লেম্পিৰা', narrow: 'L', plurals: ['one' => 'হোন্দুৰান লেম্পিৰা', 'other' => 'হোন্দুৰান লেম্পিৰা']),
    'HRK' => new C('HRK', 'ক্ৰোৱেছিয়ান কুনা', narrow: 'kn', plurals: ['one' => 'ক্ৰোৱেছিয়ান কুনা', 'other' => 'ক্ৰোৱেছিয়ান কুনা']),
    'HTG' => new C('HTG', 'হাইটিয়ান গৌৰ্ড', plurals: ['one' => 'হাইটিয়ান গৌৰ্ড', 'other' => 'হাইটিয়ান গৌৰ্ড']),
    'HUF' => new C('HUF', 'হাংগেৰীয়ান ফ’ৰিণ্ট', narrow: 'Ft', plurals: ['one' => 'হাংগেৰীয়ান ফ’ৰিণ্ট', 'other' => 'হাংগেৰীয়ান ফ’ৰিণ্ট']),
    'IDR' => new C('IDR', 'ইণ্ডোনেচিয়ান ৰুপিয়াহ', narrow: 'Rp', plurals: ['one' => 'ইণ্ডোনেচিয়ান ৰুপিয়াহ', 'other' => 'ইণ্ডোনেচিয়ান ৰুপিয়াহ']),
    'ILS' => new C('ILS', 'ইজৰাইলী নিউ শ্বেকেল', '₪', narrow: '₪', plurals: ['one' => 'ইজৰাইলী নিউ শ্বেকেল', 'other' => 'ইজৰাইলী নিউ শ্বেকেল']),
    'INR' => new C('INR', 'ভাৰতীয় ৰুপী', '₹', narrow: '₹', plurals: ['one' => 'ভাৰতীয় ৰুপী', 'other' => 'ভাৰতীয় ৰুপী']),
    'IQD' => new C('IQD', 'ইৰাকী ডিনাৰ', plurals: ['one' => 'ইৰাকী ডিনাৰ', 'other' => 'ইৰাকী ডিনাৰ'], minorUnits: 3),
    'IRR' => new C('IRR', 'ইৰানীয়ান ৰিয়েল', plurals: ['one' => 'ইৰানীয়ান ৰিয়েল', 'other' => 'ইৰানীয়ান ৰিয়েল']),
    'ISK' => new C('ISK', 'আইচলেণ্ডিক ক্ৰোনা', narrow: 'kr', plurals: ['one' => 'আইচলেণ্ডিক ক্ৰোনা', 'other' => 'আইচলেণ্ডিক ক্ৰোনাৰ'], minorUnits: 0),
    'JMD' => new C('JMD', 'জামাইকান ডলাৰ', narrow: '$', plurals: ['one' => 'জামাইকান ডলাৰ', 'other' => 'জামাইকান ডলাৰ']),
    'JOD' => new C('JOD', 'জৰ্ডানিয়ান ডিনাৰ', plurals: ['one' => 'জৰ্ডানিয়ান ডিনাৰ', 'other' => 'জৰ্ডানিয়ান ডিনাৰ'], minorUnits: 3),
    'JPY' => new C('JPY', 'জাপানী য়েন', 'JP¥', narrow: '¥', plurals: ['one' => 'জাপানী য়েন', 'other' => 'জাপানী য়েন'], minorUnits: 0),
    'KES' => new C('KES', 'কেনিয়ান শ্বিলিং', plurals: ['one' => 'কেনিয়ান শ্বিলিং', 'other' => 'কেনিয়ান শ্বিলিং']),
    'KGS' => new C('KGS', 'কিৰ্গিস্তানী ছোম', plurals: ['one' => 'কিৰ্গিস্তানী ছোম', 'other' => 'কিৰ্গিস্তানী ছোম']),
    'KHR' => new C('KHR', 'কেম্ব’ডিয়ান ৰিয়েল', narrow: '៛', plurals: ['one' => 'কেম্ব’ডিয়ান ৰিয়েল', 'other' => 'কেম্ব’ডিয়ান ৰিয়েল']),
    'KMF' => new C('KMF', 'ক’মোৰিয়ান ফ্ৰেংক', narrow: 'CF', plurals: ['one' => 'ক’মোৰিয়ান ফ্ৰেংক', 'other' => 'ক’মোৰিয়ান ফ্ৰেংক'], minorUnits: 0),
    'KPW' => new C('KPW', 'উত্তৰ কোৰিয়াৰ ওৱান', narrow: '₩', plurals: ['one' => 'উত্তৰ কোৰিয়াৰ ওৱান', 'other' => 'উত্তৰ কোৰিয়াৰ ওৱান']),
    'KRW' => new C('KRW', 'দক্ষিণ কোৰিয়াৰ ওৱান', '₩', narrow: '₩', plurals: ['one' => 'দক্ষিণ কোৰিয়াৰ ওৱান', 'other' => 'দক্ষিণ কোৰিয়াৰ ওৱান'], minorUnits: 0),
    'KWD' => new C('KWD', 'কুৱেইটি ডিনাৰ', plurals: ['one' => 'কুৱেইটি ডিনাৰ', 'other' => 'কুৱেইটি ডিনাৰ'], minorUnits: 3),
    'KYD' => new C('KYD', 'কেইমেন দ্বীপপুঞ্জৰ ডলাৰ', narrow: '$', plurals: ['one' => 'কেইমেন দ্বীপপুঞ্জৰ ডলাৰ', 'other' => 'কেইমেন দ্বীপপুঞ্জৰ ডলাৰ']),
    'KZT' => new C('KZT', 'কাজাখস্তানী তেঞ্জ', narrow: '₸', plurals: ['one' => 'কাজাখস্তানী তেঞ্জ', 'other' => 'কাজাখস্তানী তেঞ্জ']),
    'LAK' => new C('LAK', 'লাওচিয়ান কিপ', narrow: '₭', plurals: ['one' => 'লাওচিয়ান কিপ', 'other' => 'লাওচিয়ান কিপ']),
    'LBP' => new C('LBP', 'লেবানীজ পাউণ্ড', narrow: 'L£', plurals: ['one' => 'লেবানীজ পাউণ্ড', 'other' => 'লেবানীজ পাউণ্ড']),
    'LKR' => new C('LKR', 'শ্ৰীলংকান ৰুপী', narrow: 'Rs', plurals: ['one' => 'শ্ৰীলংকান ৰুপী', 'other' => 'শ্ৰীলংকান ৰুপী']),
    'LRD' => new C('LRD', 'লাইবেৰিয়ান ডলাৰ', narrow: '$', plurals: ['one' => 'লাইবেৰিয়ান ডলাৰ', 'other' => 'লাইবেৰিয়ান ডলাৰ']),
    'LSL' => new C('LSL', 'লেচোথো লোটি', plurals: ['one' => 'লেচোথো লোটি', 'other' => 'লেচোথো লোটিচ']),
    'LYD' => new C('LYD', 'লিবিয়ান ডিনাৰ', plurals: ['one' => 'লিবিয়ান ডিনাৰ', 'other' => 'লিবিয়ান ডিনাৰ'], minorUnits: 3),
    'MAD' => new C('MAD', 'মৰোক্কান ডিৰহাম', plurals: ['one' => 'মৰোক্কান ডিৰহাম', 'other' => 'মৰোক্কান ডিৰহাম']),
    'MDL' => new C('MDL', 'মোলডোভান লেউ', plurals: ['one' => 'মোলডোভান লেউ', 'other' => 'মোলডোভান লেই']),
    'MGA' => new C('MGA', 'মালাগাছী এৰিয়াৰী', narrow: 'Ar', plurals: ['one' => 'মালাগাছী এৰিয়াৰী', 'other' => 'মালাগাছী এৰিয়াৰী']),
    'MKD' => new C('MKD', 'মেচিডোনীয় ডেনাৰ', plurals: ['one' => 'মেচিডোনীয় ডেনাৰ', 'other' => 'মেচিডোনীয় ডেনাৰ']),
    'MMK' => new C('MMK', 'ম্যানমাৰ কিয়াট', narrow: 'K', plurals: ['one' => 'ম্যানমাৰ কিয়াট', 'other' => 'ম্যানমাৰ কিয়াট']),
    'MNT' => new C('MNT', 'মঙ্গোলিয়ান টুৰ্গিক', narrow: '₮', plurals: ['one' => 'মঙ্গোলিয়ান টুৰ্গিক', 'other' => 'মঙ্গোলিয়ান টুৰ্গিক']),
    'MOP' => new C('MOP', 'মেকানীজ পাটাকা', plurals: ['one' => 'মেকানীজ পাটাকা', 'other' => 'মেকানীজ পাটাকা']),
    'MRO' => new C('MRO', 'ম’ৰিটেনিয়ান ঔগুইয়া (1973–2017)', plurals: ['one' => 'ম’ৰিটেনিয়ান ঔগুইয়া (1973–2017)', 'other' => 'ম’ৰিটেনিয়ান ঔগুইয়া (1973–2017)']),
    'MRU' => new C('MRU', 'ম’ৰিটেনিয়ান ঔগুইয়া', plurals: ['one' => 'ম’ৰিটেনিয়ান ঔগুইয়া', 'other' => 'ম’ৰিটেনিয়ান ঔগুইয়া']),
    'MUR' => new C('MUR', 'মৰিচিয়ান ৰুপী', narrow: 'Rs', plurals: ['one' => 'মৰিচিয়ান ৰুপী', 'other' => 'মৰিচিয়ান ৰুপী']),
    'MVR' => new C('MVR', 'মালডিভিয়ান ৰুফিয়া', plurals: ['one' => 'মালডিভিয়ান ৰুফিয়া', 'other' => 'মালডিভিয়ান ৰুফিয়া']),
    'MWK' => new C('MWK', 'মালাউইয়ান কোৱাচা', plurals: ['one' => 'মালাউইয়ান কোৱাচা', 'other' => 'মালাউইয়ান কোৱাচা']),
    'MXN' => new C('MXN', 'মেক্সিকান পেছো', 'MX$', narrow: '$', plurals: ['one' => 'মেক্সিকান পেছো', 'other' => 'মেক্সিকান পেছো']),
    'MYR' => new C('MYR', 'মালায়েচিয়ান ৰিংগিট', narrow: 'RM', plurals: ['one' => 'মালায়েচিয়ান ৰিংগিট', 'other' => 'মালায়েচিয়ান ৰিংগিট']),
    'MZN' => new C('MZN', 'মোজাম্বিকান মেটিকল', plurals: ['one' => 'মোজাম্বিকান মেটিকল', 'other' => 'মোজাম্বিকান মেটিকল']),
    'NAD' => new C('NAD', 'নামিবিয়ান ডলাৰ', narrow: '$', plurals: ['one' => 'নামিবিয়ান ডলাৰ', 'other' => 'নামিবিয়ান ডলাৰ']),
    'NGN' => new C('NGN', 'নাইজেৰিয়ান নাইৰা', narrow: '₦', plurals: ['one' => 'নাইজেৰিয়ান নাইৰা', 'other' => 'নাইজেৰিয়ান নাইৰা']),
    'NIO' => new C('NIO', 'নিকাৰাগুৱান কোৰ্ডোবা', narrow: 'C$', plurals: ['one' => 'নিকাৰাগুৱান কোৰ্ডোবা', 'other' => 'নিকাৰাগুৱান কোৰ্ডোবা']),
    'NOK' => new C('NOK', 'নৰৱেজিয়ান ক্ৰোন', narrow: 'kr', plurals: ['one' => 'নৰৱেজিয়ান ক্ৰোন', 'other' => 'নৰৱেজিয়ান ক্ৰোনাৰ']),
    'NPR' => new C('NPR', 'নেপালী ৰুপী', narrow: 'Rs', plurals: ['one' => 'নেপালী ৰুপী', 'other' => 'নেপালী ৰুপী']),
    'NZD' => new C('NZD', 'নিউজিলেণ্ড ডলাৰ', 'NZ$', narrow: '$', plurals: ['one' => 'নিউজিলেণ্ড ডলাৰ', 'other' => 'নিউজিলেণ্ড ডলাৰ']),
    'OMR' => new C('OMR', 'ওমানি ৰিয়েল', plurals: ['one' => 'ওমানি ৰিয়েল', 'other' => 'ওমানি ৰিয়েল'], minorUnits: 3),
    'PAB' => new C('PAB', 'পানামেনিয়ান বাল্বোৱা', plurals: ['one' => 'পানামেনিয়ান বাল্বোৱা', 'other' => 'পানামেনিয়ান বাল্বোৱা']),
    'PEN' => new C('PEN', 'পেৰুভিয়ান ছ’ল', plurals: ['one' => 'পেৰুভিয়ান ছ’ল', 'other' => 'পেৰুভিয়ান ছ’ল']),
    'PGK' => new C('PGK', 'পাপুৱা নিউ গিনি কিনা', plurals: ['one' => 'পাপুৱা নিউ গিনি কিনা', 'other' => 'পাপুৱা নিউ গিনি কিনা']),
    'PHP' => new C('PHP', 'ফিলিপিন পেইছ’', narrow: '₱', plurals: ['one' => 'ফিলিপিন পেইছ’', 'other' => 'ফিলিপিন পেইছ’']),
    'PKR' => new C('PKR', 'পাকিস্তানী ৰুপী', narrow: 'Rs', plurals: ['one' => 'পাকিস্তানী ৰুপী', 'other' => 'পাকিস্তানী ৰুপী']),
    'PLN' => new C('PLN', 'প’লিচ জোল্টী', narrow: 'zł', plurals: ['one' => 'প’লিচ জোল্টী', 'other' => 'প’লিচ জোল্টী']),
    'PYG' => new C('PYG', 'পাৰাগুয়ান গুৱাৰানি', narrow: '₲', plurals: ['one' => 'পাৰাগুয়ান গুৱাৰানি', 'other' => 'পাৰাগুয়ান গুৱাৰানি'], minorUnits: 0),
    'QAR' => new C('QAR', 'কাটাৰি ৰিয়েল', plurals: ['one' => 'কাটাৰি ৰিয়েল', 'other' => 'কাটাৰি ৰিয়েল']),
    'RON' => new C('RON', 'ৰোমানীয় লেউ', narrow: 'lei', plurals: ['one' => 'ৰোমানীয় লেউ', 'other' => 'ৰোমানীয় লেউ']),
    'RSD' => new C('RSD', 'চাৰ্বিয়ান ডিনাৰ', plurals: ['one' => 'চাৰ্বিয়ান ডিনাৰ', 'other' => 'চাৰ্বিয়ান ডিনাৰ']),
    'RUB' => new C('RUB', 'ৰাছিয়ান ৰুব্‌ল', narrow: '₽', plurals: ['one' => 'ৰাছিয়ান ৰুব্‌ল', 'other' => 'ৰাছিয়ান ৰুব্‌ল']),
    'RWF' => new C('RWF', 'ৰোৱান্দান ফ্ৰেংক', narrow: 'RF', plurals: ['one' => 'ৰোৱান্দান ফ্ৰেংক', 'other' => 'ৰোৱান্দান ফ্ৰেংক'], minorUnits: 0),
    'SAR' => new C('SAR', 'চৌডি ৰিয়েল', plurals: ['one' => 'চৌডি ৰিয়েল', 'other' => 'চৌডি ৰিয়েল']),
    'SBD' => new C('SBD', 'চোলোমোন দ্বীপপুঞ্জৰ ডলাৰ', narrow: '$', plurals: ['one' => 'চোলোমোন দ্বীপপুঞ্জৰ ডলাৰ', 'other' => 'চোলোমোন দ্বীপপুঞ্জৰ ডলাৰ']),
    'SCR' => new C('SCR', 'ছেচেলৱা ৰুপী', plurals: ['one' => 'ছেচেলৱা ৰুপী', 'other' => 'ছেচেলৱা ৰুপী']),
    'SDG' => new C('SDG', 'চুডানী পাউণ্ড', plurals: ['one' => 'চুডানী পাউণ্ড', 'other' => 'চুডানী পাউণ্ড']),
    'SEK' => new C('SEK', 'চুইডিছ ক্ৰোনা', narrow: 'kr', plurals: ['one' => 'চুইডিছ ক্ৰোনা', 'other' => 'চুইডিছ ক্ৰোনোৰ']),
    'SGD' => new C('SGD', 'ছিংগাপুৰ ডলাৰ', narrow: '$', plurals: ['one' => 'ছিংগাপুৰ ডলাৰ', 'other' => 'ছিংগাপুৰ ডলাৰ']),
    'SHP' => new C('SHP', 'ছেইণ্ট হেলেনা পাউণ্ড', narrow: '£', plurals: ['one' => 'ছেইণ্ট হেলেনা পাউণ্ড', 'other' => 'ছেইণ্ট হেলেনা পাউণ্ড']),
    'SLL' => new C('SLL', 'চিয়েৰা লিঅ’নৰ লিঅ’ন', plurals: ['one' => 'চিয়েৰা লিঅ’নৰ লিঅ’ন', 'other' => 'চিয়েৰা লিঅ’নৰ লিঅ’ন']),
    'SOS' => new C('SOS', 'চোমালি শ্বিলিং', plurals: ['one' => 'চোমালি শ্বিলিং', 'other' => 'চোমালি শ্বিলিং']),
    'SRD' => new C('SRD', 'ছুৰিনামী ডলাৰ', narrow: '$', plurals: ['one' => 'ছুৰিনামী ডলাৰ', 'other' => 'ছুৰিনামী ডলাৰ']),
    'SSP' => new C('SSP', 'দক্ষিণ চুডানীজ পাউণ্ড', narrow: '£', plurals: ['one' => 'দক্ষিণ চুডানীজ পাউণ্ড', 'other' => 'দক্ষিণ চুডানীজ পাউণ্ড']),
    'STD' => new C('STD', 'চাও টোমে আৰু প্ৰিনচিপে ডোব্‌ৰা (1977–2017)', plurals: ['one' => 'চাও টোমে আৰু প্ৰিনচিপে ডোব্‌ৰা (1977–2017)', 'other' => 'চাও টোমে আৰু প্ৰিনচিপে ডোব্‌ৰা (1977–2017)']),
    'STN' => new C('STN', 'চাও টোমে আৰু প্ৰিনচিপে ডোব্‌ৰা', narrow: 'Db', plurals: ['one' => 'চাও টোমে আৰু প্ৰিনচিপে ডোব্‌ৰা', 'other' => 'চাও টোমে আৰু প্ৰিনচিপে ডোব্‌ৰা']),
    'SYP' => new C('SYP', 'চিৰিয়ান পাউণ্ড', narrow: '£', plurals: ['one' => 'চিৰিয়ান পাউণ্ড', 'other' => 'চিৰিয়ান পাউণ্ড']),
    'SZL' => new C('SZL', 'স্বাজি লিলেংগেনি', plurals: ['one' => 'স্বাজি লিলেংগেনি', 'other' => 'স্বাজি এমেলানজেনি']),
    'THB' => new C('THB', 'থাই বাত', narrow: '฿', plurals: ['one' => 'থাই বাত', 'other' => 'থাই বাত']),
    'TJS' => new C('TJS', 'তাজিকিস্তানী ছোমনি', plurals: ['one' => 'তাজিকিস্তানী ছোমনি', 'other' => 'তাজিকিস্তানী ছোমনি']),
    'TMT' => new C('TMT', 'তুৰ্কমেনিস্তানী মানাত', plurals: ['one' => 'তুৰ্কমেনিস্তানী মানাত', 'other' => 'তুৰ্কমেনিস্তানী মানাত']),
    'TND' => new C('TND', 'টুনিচিয়ান ডিনাৰ', plurals: ['one' => 'টুনিচিয়ান ডিনাৰ', 'other' => 'টুনিচিয়ান ডিনাৰ'], minorUnits: 3),
    'TOP' => new C('TOP', 'টংগান পাআংগা', narrow: 'T$', plurals: ['one' => 'টংগান পাআংগা', 'other' => 'টংগান পাআংগা']),
    'TRY' => new C('TRY', 'তুৰ্কীৰ লিৰা', narrow: '₺', plurals: ['one' => 'তুৰ্কীৰ লিৰা', 'other' => 'তুৰ্কীৰ লিৰা']),
    'TTD' => new C('TTD', 'ট্ৰিনিডাড আৰু টোবাগো ডলাৰ', narrow: '$', plurals: ['one' => 'ট্ৰিনিডাড আৰু টোবাগো ডলাৰ', 'other' => 'ট্ৰিনিডাড আৰু টোবাগো ডলাৰ']),
    'TWD' => new C('TWD', 'নিউ টাইৱান ডলাৰ', 'NT$', narrow: '$', plurals: ['one' => 'নিউ টাইৱান ডলাৰ', 'other' => 'নিউ টাইৱান ডলাৰ']),
    'TZS' => new C('TZS', 'টানজানিয়ান শ্বিলিং', plurals: ['one' => 'টানজানিয়ান শ্বিলিং', 'other' => 'টানজানিয়ান শ্বিলিং']),
    'UAH' => new C('UAH', 'ইউক্ৰেইনীয় হৃভনিয়া', narrow: '₴', plurals: ['one' => 'ইউক্ৰেইনীয় হৃভনিয়া', 'other' => 'ইউক্ৰেইনীয় হৃভনিয়া']),
    'UGX' => new C('UGX', 'উগাণ্ডান শ্বিলিং', plurals: ['one' => 'উগাণ্ডান শ্বিলিং', 'other' => 'উগাণ্ডান শ্বিলিং'], minorUnits: 0),
    'USD' => new C('USD', 'ইউ. এছ. ডলাৰ', 'US$', narrow: '$', plurals: ['one' => 'ইউ. এছ. ডলাৰ', 'other' => 'ইউ. এছ. ডলাৰ']),
    'UYU' => new C('UYU', 'উৰুগুৱেয়ান পেছো', narrow: '$', plurals: ['one' => 'উৰুগুৱেয়ান পেছো', 'other' => 'উৰুগুৱেয়ান পেছো']),
    'UZS' => new C('UZS', 'উজবেকিস্তানী ছোম', plurals: ['one' => 'উজবেকিস্তানী ছোম', 'other' => 'উজবেকিস্তানী ছোম']),
    'VEB' => new C('VEB', 'ভেনিজুৱেলান বলিভাৰ (1871–2008)', plurals: ['one' => 'ভেনিজুৱেলান বলিভাৰ (1871–2008)', 'other' => 'ভেনিজুৱেলান বলিভাৰ (1871–2008)']),
    'VEF' => new C('VEF', 'ভেনিজুৱেলান বলিভাৰ (2008–2018)', narrow: 'Bs', plurals: ['one' => 'ভেনিজুৱেলান বলিভাৰ (2008–2018)', 'other' => 'ভেনিজুৱেলান বলিভাৰ (2008–2018)']),
    'VES' => new C('VES', 'ভেনিজুৱেলান বলিভাৰ', plurals: ['one' => 'ভেনিজুৱেলান ব’লিভাৰ', 'other' => 'ভেনিজুৱেলান ব’লিভাৰছ্']),
    'VND' => new C('VND', 'ভিয়েটনামীজ ডং', '₫', narrow: '₫', plurals: ['one' => 'ভিয়েটনামীজ ডং', 'other' => 'ভিয়েটনামীজ ডং'], minorUnits: 0),
    'VUV' => new C('VUV', 'ভানাটুৰ ভাটু', plurals: ['one' => 'ভানাটুৰ ভাটু', 'other' => 'ভানাটুৰ ভাটু'], minorUnits: 0),
    'WST' => new C('WST', 'ছামোৱান টালা', plurals: ['one' => 'ছামোৱান টালা', 'other' => 'ছামোৱান টালা']),
    'XAF' => new C('XAF', 'মধ্য আফ্ৰিকান CFA ফ্ৰেংক', 'FCFA', plurals: ['one' => 'মধ্য আফ্ৰিকান CFA ফ্ৰেংক', 'other' => 'মধ্য আফ্ৰিকান CFA ফ্ৰেংক'], minorUnits: 0),
    'XCD' => new C('XCD', 'ইষ্ট কেৰিবিয়ান ডলাৰ', 'EC$', narrow: '$', plurals: ['one' => 'ইষ্ট কেৰিবিয়ান ডলাৰ', 'other' => 'ইষ্ট কেৰিবিয়ান ডলাৰ']),
    'XOF' => new C('XOF', 'পশ্চিম আফ্ৰিকান CFA ফ্ৰেংক', "F\u{202F}CFA", plurals: ['one' => 'পশ্চিম আফ্ৰিকান CFA ফ্ৰেংক', 'other' => 'পশ্চিম আফ্ৰিকান CFA ফ্ৰেংক'], minorUnits: 0),
    'XPF' => new C('XPF', 'CFP ফ্ৰেংক', 'CFPF', plurals: ['one' => 'CFP ফ্ৰেংক', 'other' => 'CFP ফ্ৰেংক'], minorUnits: 0),
    'XXX' => new C('XXX', 'অজ্ঞাত মুদ্ৰা', '¤', plurals: ['one' => '(মুদ্ৰাৰ একক অজ্ঞাত)', 'other' => '(অজ্ঞাত মুদ্ৰা)']),
    'YER' => new C('YER', 'য়েমেনী ৰিয়েল', plurals: ['one' => 'য়েমেনী ৰিয়েল', 'other' => 'য়েমেনী ৰিয়েল']),
    'ZAR' => new C('ZAR', 'দক্ষিণ আফ্ৰিকাৰ ৰাণ্ড', narrow: 'R', plurals: ['one' => 'দক্ষিণ আফ্ৰিকাৰ ৰাণ্ড', 'other' => 'দক্ষিণ আফ্ৰিকাৰ ৰাণ্ড']),
    'ZMW' => new C('ZMW', 'জাম্বিয়ান কোৱাচা', narrow: 'ZK', plurals: ['one' => 'জাম্বিয়ান কোৱাচা', 'other' => 'জাম্বিয়ান কোৱাচা']),
];
