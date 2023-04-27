<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_ff_latn_ng extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0467;

    /**
     * @var string The locale tag
     */
    protected $tag = 'ff-latn-ng';

    /**
     * @var string The currency code "₦"
     */
    protected $currencyCode = "\u{20A6}";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ',';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = "\u{a0}";

    /**
     * @var string The date separator
     */
    protected $dateSeparator = '/';

    /**
     * @var string[] The numerals representation (0 up to 9)
     */
    protected $numerals = [
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
        LocaleLayout::NUMERALS_ARABIC,
    ];

    /**
     * @var array[] Names of the days of the week
     */
    protected $weekdayNames = [
        // Full name
        'full' => [
            'altine',
            'talaata',
            'alarba',
            'alkamiisa',
            'aljumaa',
            'asete',
            'alete',
        ],
        // Short name
        'short' => [
            'alt.',
            'tal.',
            'alar.',
            'alk.',
            'alj.',
            'aset',
            'alet',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'samwiee',
            'feeburyee',
            'marsa',
            'awril',
            'me',
            "suye\u{14B}",
            'sulyee',
            'ut',
            'satambara',
            'oktoobar',
            'nowamburu',
            'deesamburu',
        ],
        // Short name
        'short' => [
            'samw',
            'feeb',
            'mar',
            'awr',
            'me',
            'suy',
            'sul',
            'ut',
            'sat',
            'okt',
            'now',
            'dees',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        '$ #,##0;$ -#,##0' => '$ #,##0;$ -#,##0',
        '$ #,##0;[Red]$ -#,##0' => '$ #,##0;[Red]$ -#,##0',
        '$ #,##0.00;$ -#,##0.00' => '$ #,##0.00;$ -#,##0.00',
        '$ #,##0.00;[Red]$ -#,##0.00' => '$ #,##0.00;[Red]$ -#,##0.00',
        '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ' => '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ',
        '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ' => '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'dddd"{, }"mmmm d"{, }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss AM/PM',
    ];
}
