<?php

use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Symbols;

return new Locale(
    'French (Mauritius)',
    'latn',
    '#,##0.###',
    "#,##0\u{00A0}%",
    "#,##0.00\u{00A0}¤",
    1,
    new Symbols(',', ' ', '%', '+', '-'),
);
