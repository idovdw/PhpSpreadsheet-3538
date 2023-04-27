<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;

class lang_pt_pt extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0816;

    /**
     * @var string The locale tag
     */
    protected $tag = 'pt-pt';

    /**
     * @var string The currency code "€"
     */
    protected $currencyCode = "\u{20AC}";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ',';

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = ' ';

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
            'segunda-feira',
            'terça-feira',
            'quarta-feira',
            'quinta-feira',
            'sexta-feira',
            'sábado',
            'domingo',
        ],
        // Short name
        'short' => [
            'seg',
            'ter',
            'qua',
            'qui',
            'sex',
            'sáb',
            'dom',
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        'full' => [
            'janeiro',
            'fevereiro',
            'março',
            'abril',
            'maio',
            'junho',
            'julho',
            'agosto',
            'setembro',
            'outubro',
            'novembro',
            'dezembro',
        ],
        // Short name
        'short' => [
            'jan',
            'fev',
            'mar',
            'abr',
            'mai',
            'jun',
            'jul',
            'ago',
            'set',
            'out',
            'nov',
            'dez',
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        '"$" #,##0;"$" -#,##0' => '"$",#,##0;"$" -#,##0',
        '"$" #,##0;[Red]"$" -#,##0' => '"$",#,##0;[Red]"$" -#,##0',
        '"$" #,##0.00;"$" -#,##0.00' => '"$",#,##0.00;"$" -#,##0.00',
        '"$" #,##0.00;[Red]"$" -#,##0.00' => '"$",#,##0.00;[Red]"$" -#,##0.00',
        '# ?/?' => '#" "?/?',
        '# ??/??' => '#" "??/??',
        'm/d/yyyy' => 'dd/mm/yyyy',
        'd-mmm-yy' => 'dd/mmm/yy',
        'd-mmm' => 'dd/mmm',
        'mmm-yy' => 'mmm/yy',
        'h:mm' => 'hh:mm',
        'h:mm:ss' => 'hh:mm:ss',
        'm/d/yyyy h:mm' => 'dd/mm/yyyy hh:mm',
        '#,##0_);(#,##0)' => '#,##0;-#,##0',
        '#,##0_);[Red](#,##0)' => '#,##0;[Red]-#,##0',
        '#,##0.00_);(#,##0.00)' => '#,##0.00;-#,##0.00',
        '#,##0.00_);[Red](#,##0.00)' => '#,##0.00;[Red]-#,##0.00',
        '_ * #,##0_ ;_ * -#,##0_ ;_ * "-"_ ;_ @_ ' => '_ *,#,##0_ ;_ * -#,##0_ ;_ * "-"_ ;_ @_ ',
        '_ "$" * #,##0_ ;_ "$" * -#,##0_ ;_ "$" * "-"_ ;_ @_ ' => '_ "$" *,#,##0_ ;_ "$" * -#,##0_ ;_ "$" * "-"_ ;_ @_ ',
        '_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * "-"??_ ;_ @_ ' => '_ *,#,##0.00_ ;_ * -#,##0.00_ ;_ * "-"??_ ;_ @_ ',
        '_ "$" * #,##0.00_ ;_ "$" * -#,##0.00_ ;_ "$" * "-"??_ ;_ @_ ' => '_ "$" *,#,##0.00_ ;_ "$" * -#,##0.00_ ;_ "$" * "-"??_ ;_ @_ ',
        '0.00_ ;-0.00 ' => '0.00_ ;-0.00\\ ',
        '#,##0.00_ ;-#,##0.00 ' => '#,##0.00_ ;-#,##0.00\\ ',
        '0.00_ ;[Red]-0.00 ' => '0.00_ ;[Red]-0.00\\ ',
        '#,##0.00_ ;[Red]-#,##0.00 ' => '#,##0.00_ ;[Red]-#,##0.00\\ ',
        '$ #,##0.00' => '$,#,##0.00',
        '$ #,##0.00;[Red]$ #,##0.00' => '$,#,##0.00;[Red]$,#,##0.00',
        '$ #,##0.00;$ -#,##0.00' => '$,#,##0.00;$ -#,##0.00',
        '$ #,##0.00;[Red]$ -#,##0.00' => '$,#,##0.00;[Red]$ -#,##0.00',
        '_ $ * #,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ' => '_ $ *,#,##0_ ;_ $ * -#,##0_ ;_ $ * "-"_ ;_ @_ ',
        '_-[$£-809]* #,##0_-;-[$£-809]* #,##0_-;_-[$£-809]* "-"_-;_-@_-' => '_-[$£-809]*,#,##0_-;-[$£-809]*,#,##0_-;_-[$£-809]* "-"_-;_-@_-',
        '_ [$XBC] * #,##0.0_ ;_ [$XBC] * -#,##0.0_ ;_ [$XBC] * "-"?_ ;_ @_ ' => '_ [$XBC] *,#,##0.0_ ;_ [$XBC] * -#,##0.0_ ;_ [$XBC] * "-"?_ ;_ @_ ',
        '_ [$XB5] * #,##0.0_ ;_ [$XB5] * -#,##0.0_ ;_ [$XB5] * "-"?_ ;_ @_ ' => '_ [$XB5] *,#,##0.0_ ;_ [$XB5] * -#,##0.0_ ;_ [$XB5] * "-"?_ ;_ @_ ',
        '_ $ * #,##0.0_ ;_ $ * -#,##0.0_ ;_ $ * "-"?_ ;_ @_ ' => '_ $ *,#,##0.0_ ;_ $ * -#,##0.0_ ;_ $ * "-"?_ ;_ @_ ',
        '_ [$XCD] * #,##0.0_ ;_ [$XCD] * -#,##0.0_ ;_ [$XCD] * "-"?_ ;_ @_ ' => '_ [$XCD] *,#,##0.0_ ;_ [$XCD] * -#,##0.0_ ;_ [$XCD] * "-"?_ ;_ @_ ',
        '_-[$Rp-3809]* #,##0.0_-;-[$Rp-3809]* #,##0.0_-;_-[$Rp-3809]* "-"?_-;_-@_-' => '_-[$Rp-3809]*,#,##0.0_-;-[$Rp-3809]*,#,##0.0_-;_-[$Rp-3809]* "-"?_-;_-@_-',
        '_ [$WST] * #,##0.0_ ;_ [$WST] * -#,##0.0_ ;_ [$WST] * "-"?_ ;_ @_ ' => '_ [$WST] *,#,##0.0_ ;_ [$WST] * -#,##0.0_ ;_ [$WST] * "-"?_ ;_ @_ ',
        '_ $ * #,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ' => '_ $ *,#,##0.00_ ;_ $ * -#,##0.00_ ;_ $ * "-"??_ ;_ @_ ',
        "_ [\$\u{20B9}-447]* #,##0.00_ ;_ [\$\u{20B9}-447]* -#,##0.00_ ;_ [\$\u{20B9}-447]* \"-\"??_ ;_ @_ " => "_ [\$\u{20B9}-447]*,#,##0.00_ ;_ [\$\u{20B9}-447]* -#,##0.00_ ;_ [\$\u{20B9}-447]* \"-\"??_ ;_ @_ ",
        "_-* #,##0.0 [\$\u{631}.\u{639}.\u{200F}-2001]_-;-* #,##0.0 [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-* \"-\"? [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-@_-" => "_-*,#,##0.0\\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;-*,#,##0.0\\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-* \"-\"?\\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-@_-",
        '_ [$XAF] * #,##0.0_ ;_ [$XAF] * -#,##0.0_ ;_ [$XAF] * "-"?_ ;_ @_ ' => '_ [$XAF] *,#,##0.0_ ;_ [$XAF] * -#,##0.0_ ;_ [$XAF] * "-"?_ ;_ @_ ',
        '_ $ * #,##0.000_ ;_ $ * -#,##0.000_ ;_ $ * "-"???_ ;_ @_ ' => '_ $ *,#,##0.000_ ;_ $ * -#,##0.000_ ;_ $ * "-"???_ ;_ @_ ',
        '_-[$$-409]* #,##0.000_ ;_-[$$-409]* -#,##0.000 ;_-[$$-409]* "-"???_ ;_-@_ ' => '_-[$$-409]*,#,##0.000_ ;_-[$$-409]* -#,##0.000\\ ;_-[$$-409]* "-"???_ ;_-@_ ',
        '_ [$¥-804]* #,##0.0_ ;_ [$¥-804]* -#,##0.0_ ;_ [$¥-804]* "-"?_ ;_ @_ ' => '_ [$¥-804]*,#,##0.0_ ;_ [$¥-804]* -#,##0.0_ ;_ [$¥-804]* "-"?_ ;_ @_ ',
        '_ [$UAH] * #,##0.0_ ;_ [$UAH] * -#,##0.0_ ;_ [$UAH] * "-"?_ ;_ @_ ' => '_ [$UAH] *,#,##0.0_ ;_ [$UAH] * -#,##0.0_ ;_ [$UAH] * "-"?_ ;_ @_ ',
        '[$-F800]dddd, mmmm dd, yyyy' => 'd"{ de }"mmmm"{ de }"yyyy',
        '[$-F400]h:mm:ss AM/PM' => 'h:mm:ss',
        '# ?/4' => '#\\,?/4',
        '# ??/100' => '#\\,??/100',
        '# ?/8' => '#\\,?/8',
        '# ???/???' => '#\\,???/???',
        '# ??/16' => '#\\,??/16',
        '# ?/2' => '#\\,?/2',
        '# ?/10' => '#\\,?/10',
    ];
}
