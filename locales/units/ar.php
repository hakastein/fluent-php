<?php

use Major\Fluent\Formatters\Number\Locale\Unit as U;

return [
    'acre' => new U(['one' => 'فدان', 'other' => '{0} فدان'], ['one' => 'فدان', 'other' => '{0} فدان'], ['one' => 'فدان', 'other' => '{0} فدان']),
    'bit' => new U('{0} بت', '{0} بت', '{0} بت'),
    'byte' => new U('{0} بايت', '{0} بايت', '{0} ب'),
    'celsius' => new U('{0} درجة مئوية', '{0}°م', '{0}°م'),
    'centimeter' => new U('{0} سنتيمتر', '{0} سم', '{0} سم'),
    'day' => new U(['one' => 'يوم', 'two' => 'يومان', 'few' => '{0} أيام', 'many' => '{0} يومًا', 'other' => '{0} يوم'], ['one' => 'يوم', 'two' => 'يومان', 'few' => '{0} أيام', 'many' => '{0} يومًا', 'other' => '{0} يوم'], '{0} ي'),
    'degree' => new U(['one' => 'درجة', 'two' => 'درجتان', 'few' => '{0} درجات', 'other' => '{0} درجة'], ['one' => 'درجة', 'two' => 'درجتان', 'few' => '{0} درجات', 'other' => '{0} درجة'], ['two' => 'درجتان', 'few' => '{0} درجات', 'other' => '{0} درجة']),
    'fahrenheit' => new U('{0} درجة فهرنهايت', '{0}°ف', '{0}°ف'),
    'fluid-ounce' => new U(['one' => 'أونصة سائلة', 'two' => 'أونصتان سائلتان', 'other' => '{0} أونصة سائلة'], ['one' => 'أونصة س', 'two' => '{0} أونصة س', 'few' => '{0} أونصات سائلة', 'many' => '{0} أونصة س', 'other' => '{0} أونصة سائلة'], ['one' => 'أونصة س', 'other' => '{0} أونصة س']),
    'foot' => new U(['one' => 'قدم', 'other' => '{0} قدم'], ['one' => 'قدم', 'other' => '{0} قدم'], ['one' => 'قدم', 'many' => '{0} قدمًا', 'other' => '{0} قدم']),
    'gallon' => new U(['one' => 'غالون', 'other' => '{0} غالون'], ['one' => 'غالون', 'other' => '{0} غالون'], ['one' => 'غالون', 'other' => '{0} غالون']),
    'gigabit' => new U('{0} غيغابت', '{0} غيغابت', '{0} غ.بت'),
    'gigabyte' => new U('{0} غيغابايت', '{0} غ.ب', '{0} غ.ب'),
    'gram' => new U(['one' => 'غرام', 'two' => 'غرامان', 'few' => '{0} غرامات', 'many' => '{0} غرامًا', 'other' => '{0} غرام'], ['one' => 'غرام', 'other' => '{0} غرام'], '{0} غ'),
    'hectare' => new U('{0} هكتار', '{0} هكتار', '{0} هكتار'),
    'hour' => new U(['one' => 'ساعة', 'two' => 'ساعتان', 'few' => '{0} ساعات', 'other' => '{0} ساعة'], '{0} س', '{0} س'),
    'inch' => new U('{0} بوصة', '{0} بوصة', '{0} بوصة'),
    'kilobit' => new U('{0} كيلوبت', '{0} كيلوبت', '{0} ك.بت'),
    'kilobyte' => new U('{0} كيلوبايت', '{0} كيلوبايت', '{0} ك.ب'),
    'kilogram' => new U('{0} كيلوغرام', '{0} كغم', '{0} كغ'),
    'kilometer' => new U(['few' => '{0} كيلومترات', 'many' => '{0} كيلومترًا', 'other' => '{0} كيلومتر'], '{0} كم', '{0} كم'),
    'liter' => new U(['one' => 'لتر', 'other' => '{0} لتر'], ['one' => 'لتر', 'other' => '{0} لتر'], '{0} ل'),
    'megabit' => new U('{0} ميغابت', '{0} ميغابت', '{0} م.بت'),
    'megabyte' => new U('{0} ميغابايت', '{0} م.ب', '{0} م.ب'),
    'meter' => new U(['one' => 'متر', 'few' => '{0} أمتار', 'many' => '{0} مترًا', 'other' => '{0} متر'], ['one' => 'متر', 'two' => 'متران', 'few' => '{0} أمتار', 'many' => '{0} مترًا', 'other' => '{0} متر'], '{0} م'),
    'microsecond' => new U('{0} ميكروثانية', '{0} م.ث.', '{0} م.ث.'),
    'mile' => new U(['one' => 'ميل', 'two' => 'ميلان', 'few' => '{0} أميال', 'many' => '{0} ميلاً', 'other' => '{0} ميل'], ['one' => 'ميل', 'other' => '{0} ميل'], ['few' => '{0} أميال', 'many' => '{0} ميلاً', 'other' => '{0} ميل']),
    'mile-scandinavian' => new U('{0} ميل اسكندنافي', '{0} ميل اسكندنافي', '{0} ميل اسكندنافي'),
    'milliliter' => new U('{0} مليلتر', '{0} ملتر', '{0} ملتر'),
    'millimeter' => new U('{0} مليمتر', '{0} مم', '{0} مم'),
    'millisecond' => new U('{0} ملي ثانية', '{0} ملي ث', '{0} ملي ث'),
    'minute' => new U(['one' => 'دقيقة', 'two' => 'دقيقتان', 'few' => '{0} دقائق', 'other' => '{0} دقيقة'], '{0} د', '{0} د'),
    'month' => new U(['one' => 'شهر', 'two' => 'شهران', 'few' => '{0} أشهر', 'many' => '{0} شهرًا', 'other' => '{0} شهر'], ['one' => 'شهر', 'two' => 'شهران', 'few' => '{0} أشهر', 'many' => '{0} شهرًا', 'other' => '{0} شهر'], ['one' => 'شهر', 'two' => 'شهران', 'few' => '{0} أشهر', 'many' => '{0} شهرًا', 'other' => '{0} شهر']),
    'nanosecond' => new U('{0} نانو ثانية', '{0} ن.ث.', '{0} ن.ث.'),
    'ounce' => new U('{0} أونصة', ['one' => 'أونصة', 'other' => '{0} أونصة'], ['one' => 'أونصة', 'other' => '{0} أونصة']),
    'percent' => new U(['zero' => '{0}٪', 'two' => '{0}٪', 'few' => '{0}٪', 'many' => '{0}٪', 'other' => '{0} بالمائة'], '{0}٪', '{0}٪'),
    'petabyte' => new U('{0} بيتابايت', '{0} بيتابايت', '{0} بيتابايت'),
    'pound' => new U(['two' => 'رطلان', 'many' => '{0} رطلًا', 'other' => '{0} رطل'], '{0} رطل', '{0} رطل'),
    'second' => new U(['one' => 'ثانية', 'two' => 'ثانيتان', 'few' => '{0} ثوان', 'other' => '{0} ثانية'], '{0} ث', '{0} ث'),
    'stone' => new U('{0} ستون', '{0} ستون', '{0} ستون'),
    'terabit' => new U('{0} تيرابت', '{0} تيرابت', '{0} ت.بت'),
    'terabyte' => new U('{0} تيرابايت', '{0} تيرابايت', '{0} ت.ب'),
    'week' => new U(['one' => 'أسبوع', 'two' => 'أسبوعان', 'few' => '{0} أسابيع', 'many' => '{0} أسبوعًا', 'other' => '{0} أسبوع'], ['one' => 'أسبوع', 'two' => 'أسبوعان', 'few' => '{0} أسابيع', 'many' => '{0} أسبوعًا', 'other' => '{0} أسبوع'], '{0} أ'),
    'yard' => new U(['one' => 'ياردة', 'other' => '{0} ياردة'], ['one' => 'ياردة', 'other' => '{0} ياردة'], '{0} ياردة'),
    'year' => new U(['one' => 'سنة', 'two' => 'سنتان', 'few' => '{0} سنوات', 'other' => '{0} سنة'], ['one' => 'سنة واحدة', 'two' => 'سنتان', 'few' => '{0} سنوات', 'other' => '{0} سنة'], '{0} سنة'),
];
