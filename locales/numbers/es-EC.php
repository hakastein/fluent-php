<?php

use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Symbols;

return new Locale(
    'Spanish (Ecuador)',
    'latn',
    '#,##0.###',
    "#,##0\u{00A0}%",
    '¤#,##0.00;¤-#,##0.00',
    1,
    new Symbols(',', '.', '-', '%'),
);
