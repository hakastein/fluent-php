<?php

use Major\Fluent\Formatters\Number\Locale\Locale;
use Major\Fluent\Formatters\Number\Locale\Symbols;

return new Locale(
    'Turkish',
    'latn',
    '#,##0.###',
    '%#,##0',
    '¤#,##0.00',
    1,
    new Symbols(',', '.', '%', '-'),
);
