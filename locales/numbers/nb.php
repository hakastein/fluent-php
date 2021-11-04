<?php

use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Symbols;

return new Locale(
    'Norwegian Bokmål',
    'latn',
    '#,##0.###',
    "#,##0\u{00A0}%",
    "¤\u{00A0}#,##0.00",
    1,
    new Symbols(',', "\u{00A0}", '−', '%'),
);
