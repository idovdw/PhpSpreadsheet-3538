<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_gu_in extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0447;

    /**
     * @var string The locale tag
     */
    protected $tag = 'gu-in';

    /**
     * @var string The currency code "₹"
     */
    protected $currencyCode = "\u{20B9}";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = '.';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = ',';

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
            "\u{AB8}\u{ACB}\u{AAE}\u{AB5}\u{ABE}\u{AB0}",
            "\u{AAE}\u{A82}\u{A97}\u{AB3}\u{AB5}\u{ABE}\u{AB0}",
            "\u{AAC}\u{AC1}\u{AA7}\u{AB5}\u{ABE}\u{AB0}",
            "\u{A97}\u{AC1}\u{AB0}\u{AC1}\u{AB5}\u{ABE}\u{AB0}",
            "\u{AB6}\u{AC1}\u{A95}\u{ACD}\u{AB0}\u{AB5}\u{ABE}\u{AB0}",
            "\u{AB6}\u{AA8}\u{ABF}\u{AB5}\u{ABE}\u{AB0}",
            "\u{AB0}\u{AB5}\u{ABF}\u{AB5}\u{ABE}\u{AB0}",
        ],
        // Short name
        'short' => [
            "\u{AB8}\u{ACB}\u{AAE}",
            "\u{AAE}\u{A82}\u{A97}\u{AB3}",
            "\u{AAC}\u{AC1}\u{AA7}",
            "\u{A97}\u{AC1}\u{AB0}\u{AC1}",
            "\u{AB6}\u{AC1}\u{A95}\u{ACD}\u{AB0}",
            "\u{AB6}\u{AA8}\u{ABF}",
            "\u{AB0}\u{AB5}\u{ABF}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            "\u{A9C}\u{ABE}\u{AA8}\u{ACD}\u{AAF}\u{AC1}\u{A86}\u{AB0}\u{AC0}",
            "\u{AAB}\u{AC7}\u{AAC}\u{ACD}\u{AB0}\u{AC1}\u{A86}\u{AB0}\u{AC0}",
            "\u{AAE}\u{ABE}\u{AB0}\u{ACD}\u{A9A}",
            "\u{A8F}\u{AAA}\u{ACD}\u{AB0}\u{ABF}\u{AB2}",
            "\u{AAE}\u{AC7}",
            "\u{A9C}\u{AC2}\u{AA8}",
            "\u{A9C}\u{AC1}\u{AB2}\u{ABE}\u{A88}",
            "\u{A91}\u{A97}\u{AB8}\u{ACD}\u{A9F}",
            "\u{AB8}\u{AAA}\u{ACD}\u{A9F}\u{AC7}\u{AAE}\u{ACD}\u{AAC}\u{AB0}",
            "\u{A91}\u{A95}\u{ACD}\u{A9F}\u{ACB}\u{AAC}\u{AB0}",
            "\u{AA8}\u{AB5}\u{AC7}\u{AAE}\u{ACD}\u{AAC}\u{AB0}",
            "\u{AA1}\u{ABF}\u{AB8}\u{AC7}\u{AAE}\u{ACD}\u{AAC}\u{AB0}",
        ],
        // Short name
        'short' => [
            "\u{A9C}\u{ABE}\u{AA8}\u{ACD}\u{AAF}\u{AC1}",
            "\u{AAB}\u{AC7}\u{AAC}\u{ACD}\u{AB0}\u{AC1}",
            "\u{AAE}\u{ABE}\u{AB0}\u{ACD}\u{A9A}",
            "\u{A8F}\u{AAA}\u{ACD}\u{AB0}\u{ABF}\u{AB2}",
            "\u{AAE}\u{AC7}",
            "\u{A9C}\u{AC2}\u{AA8}",
            "\u{A9C}\u{AC1}\u{AB2}\u{ABE}\u{A88}",
            "\u{A91}\u{A97}",
            "\u{AB8}\u{AAA}\u{ACD}\u{A9F}\u{AC7}",
            "\u{A91}\u{A95}\u{ACD}\u{A9F}\u{ACB}",
            "\u{AA8}\u{AB5}\u{AC7}",
            "\u{AA1}\u{ABF}\u{AB8}\u{AC7}",
        ],
    ];
}
