<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Format;

use PhpOffice\PhpSpreadsheet\Locale\FormatLocale;
use PhpOffice\PhpSpreadsheet\Locale\LocaleLayout;


class lang_bg_bg extends FormatLocale
{
    /**
     * @var int Language code ID
     */
    protected $lcid = 0x0402;

    /**
     * @var string The locale tag
     */
    protected $tag = "bg-bg";

    /**
     * @var string The currency code "лв."
     */
    protected $currencyCode = "\u{43B}\u{432}.";

    /**
     * @var string The decimal separator
     */
    protected $decimalSeparator = ",";

    /**
     * @var string The thousands separator
     */
    protected $thousandsSeparator = " ";

    /**
     * @var string The date separator
     */
    protected $dateSeparator = ".";

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
        "full" => [
            "\u{43F}\u{43E}\u{43D}\u{435}\u{434}\u{435}\u{43B}\u{43D}\u{438}\u{43A}",
            "\u{432}\u{442}\u{43E}\u{440}\u{43D}\u{438}\u{43A}",
            "\u{441}\u{440}\u{44F}\u{434}\u{430}",
            "\u{447}\u{435}\u{442}\u{432}\u{44A}\u{440}\u{442}\u{44A}\u{43A}",
            "\u{43F}\u{435}\u{442}\u{44A}\u{43A}",
            "\u{441}\u{44A}\u{431}\u{43E}\u{442}\u{430}",
            "\u{43D}\u{435}\u{434}\u{435}\u{43B}\u{44F}",
        ],
        // Short name
        "short" => [
            "\u{43F}\u{43E}\u{43D}",
            "\u{432}\u{442}",
            "\u{441}\u{440}",
            "\u{447}\u{435}\u{442}\u{432}",
            "\u{43F}\u{435}\u{442}",
            "\u{441}\u{44A}\u{431}",
            "\u{43D}\u{435}\u{434}",
        ],
    ];

    /**
     * @var array[] Names of the months of the year
     */
    protected $monthNames = [
        // Full name
        "full" => [
            "\u{44F}\u{43D}\u{443}\u{430}\u{440}\u{438}",
            "\u{444}\u{435}\u{432}\u{440}\u{443}\u{430}\u{440}\u{438}",
            "\u{43C}\u{430}\u{440}\u{442}",
            "\u{430}\u{43F}\u{440}\u{438}\u{43B}",
            "\u{43C}\u{430}\u{439}",
            "\u{44E}\u{43D}\u{438}",
            "\u{44E}\u{43B}\u{438}",
            "\u{430}\u{432}\u{433}\u{443}\u{441}\u{442}",
            "\u{441}\u{435}\u{43F}\u{442}\u{435}\u{43C}\u{432}\u{440}\u{438}",
            "\u{43E}\u{43A}\u{442}\u{43E}\u{43C}\u{432}\u{440}\u{438}",
            "\u{43D}\u{43E}\u{435}\u{43C}\u{432}\u{440}\u{438}",
            "\u{434}\u{435}\u{43A}\u{435}\u{43C}\u{432}\u{440}\u{438}",
        ],
        // Short name
        "short" => [
            "\u{44F}\u{43D}\u{443}",
            "\u{444}\u{435}\u{432}",
            "\u{43C}\u{430}\u{440}",
            "\u{430}\u{43F}\u{440}",
            "\u{43C}\u{430}\u{439}",
            "\u{44E}\u{43D}\u{438}",
            "\u{44E}\u{43B}\u{438}",
            "\u{430}\u{432}\u{433}",
            "\u{441}\u{435}\u{43F}",
            "\u{43E}\u{43A}\u{442}",
            "\u{43D}\u{43E}\u{435}",
            "\u{434}\u{435}\u{43A}",
        ],
    ];

    /**
     * @var array<string,string> Replacement formats
     */
    protected $formatReplacements = [
        "\"\$\" #,##0;\"\$\" -#,##0" => "\"\$\",#,##0;\"\$\" -#,##0",
        "\"\$\" #,##0;[Red]\"\$\" -#,##0" => "\"\$\",#,##0;[Red]\"\$\" -#,##0",
        "\"\$\" #,##0.00;\"\$\" -#,##0.00" => "\"\$\",#,##0.00;\"\$\" -#,##0.00",
        "\"\$\" #,##0.00;[Red]\"\$\" -#,##0.00" => "\"\$\",#,##0.00;[Red]\"\$\" -#,##0.00",
        "# ?/?" => "#\" \"?/?",
        "# ??/??" => "#\" \"??/??",
        "m/d/yyyy" => "d/m/yyyy",
        "d-mmm-yy" => "d/mmm/yy",
        "d-mmm" => "d/mmm",
        "mmm-yy" => "mmm/yy",
        "m/d/yyyy h:mm" => "d/m/yyyy h:mm",
        "#,##0_);(#,##0)" => "#,##0;-#,##0",
        "#,##0_);[Red](#,##0)" => "#,##0;[Red]-#,##0",
        "#,##0.00_);(#,##0.00)" => "#,##0.00;-#,##0.00",
        "#,##0.00_);[Red](#,##0.00)" => "#,##0.00;[Red]-#,##0.00",
        "_ * #,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ " => "_ *,#,##0_ ;_ * -#,##0_ ;_ * \"-\"_ ;_ @_ ",
        "_ \"\$\" * #,##0_ ;_ \"\$\" * -#,##0_ ;_ \"\$\" * \"-\"_ ;_ @_ " => "_ \"\$\" *,#,##0_ ;_ \"\$\" * -#,##0_ ;_ \"\$\" * \"-\"_ ;_ @_ ",
        "_ * #,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ " => "_ *,#,##0.00_ ;_ * -#,##0.00_ ;_ * \"-\"??_ ;_ @_ ",
        "_ \"\$\" * #,##0.00_ ;_ \"\$\" * -#,##0.00_ ;_ \"\$\" * \"-\"??_ ;_ @_ " => "_ \"\$\" *,#,##0.00_ ;_ \"\$\" * -#,##0.00_ ;_ \"\$\" * \"-\"??_ ;_ @_ ",
        "0.00_ ;-0.00 " => "0.00_ ;-0.00\ ",
        "#,##0.00_ ;-#,##0.00 " => "#,##0.00_ ;-#,##0.00\ ",
        "0.00_ ;[Red]-0.00 " => "0.00_ ;[Red]-0.00\ ",
        "#,##0.00_ ;[Red]-#,##0.00 " => "#,##0.00_ ;[Red]-#,##0.00\ ",
        "\"\u{20AC}\" #,##0.00" => "\"\u{20AC}\",#,##0.00",
        "\"\u{20AC}\" #,##0.00;[Red]\"\u{20AC}\" #,##0.00" => "\"\u{20AC}\",#,##0.00;[Red]\"\u{20AC}\",#,##0.00",
        "\"\u{20AC}\" #,##0.00;\"\u{20AC}\" -#,##0.00" => "\"\u{20AC}\",#,##0.00;\"\u{20AC}\" -#,##0.00",
        "\"\u{20AC}\" #,##0.00;[Red]\"\u{20AC}\" -#,##0.00" => "\"\u{20AC}\",#,##0.00;[Red]\"\u{20AC}\" -#,##0.00",
        "_ \"\u{20AC}\" * #,##0_ ;_ \"\u{20AC}\" * -#,##0_ ;_ \"\u{20AC}\" * \"-\"_ ;_ @_ " => "_ \"\u{20AC}\" *,#,##0_ ;_ \"\u{20AC}\" * -#,##0_ ;_ \"\u{20AC}\" * \"-\"_ ;_ @_ ",
        "_-[\$£-809]* #,##0_-;-[\$£-809]* #,##0_-;_-[\$£-809]* \"-\"_-;_-@_-" => "_-[\$£-809]*,#,##0_-;-[\$£-809]*,#,##0_-;_-[\$£-809]* \"-\"_-;_-@_-",
        "_ [\$XBC] * #,##0.0_ ;_ [\$XBC] * -#,##0.0_ ;_ [\$XBC] * \"-\"?_ ;_ @_ " => "_ [\$XBC] *,#,##0.0_ ;_ [\$XBC] * -#,##0.0_ ;_ [\$XBC] * \"-\"?_ ;_ @_ ",
        "_ [\$XB5] * #,##0.0_ ;_ [\$XB5] * -#,##0.0_ ;_ [\$XB5] * \"-\"?_ ;_ @_ " => "_ [\$XB5] *,#,##0.0_ ;_ [\$XB5] * -#,##0.0_ ;_ [\$XB5] * \"-\"?_ ;_ @_ ",
        "_ \"\u{20AC}\" * #,##0.0_ ;_ \"\u{20AC}\" * -#,##0.0_ ;_ \"\u{20AC}\" * \"-\"?_ ;_ @_ " => "_ \"\u{20AC}\" *,#,##0.0_ ;_ \"\u{20AC}\" * -#,##0.0_ ;_ \"\u{20AC}\" * \"-\"?_ ;_ @_ ",
        "_ [\$XCD] * #,##0.0_ ;_ [\$XCD] * -#,##0.0_ ;_ [\$XCD] * \"-\"?_ ;_ @_ " => "_ [\$XCD] *,#,##0.0_ ;_ [\$XCD] * -#,##0.0_ ;_ [\$XCD] * \"-\"?_ ;_ @_ ",
        "_-[\$Rp-3809]* #,##0.0_-;-[\$Rp-3809]* #,##0.0_-;_-[\$Rp-3809]* \"-\"?_-;_-@_-" => "_-[\$Rp-3809]*,#,##0.0_-;-[\$Rp-3809]*,#,##0.0_-;_-[\$Rp-3809]* \"-\"?_-;_-@_-",
        "_ [\$WST] * #,##0.0_ ;_ [\$WST] * -#,##0.0_ ;_ [\$WST] * \"-\"?_ ;_ @_ " => "_ [\$WST] *,#,##0.0_ ;_ [\$WST] * -#,##0.0_ ;_ [\$WST] * \"-\"?_ ;_ @_ ",
        "_ \"\u{20AC}\" * #,##0.00_ ;_ \"\u{20AC}\" * -#,##0.00_ ;_ \"\u{20AC}\" * \"-\"??_ ;_ @_ " => "_ \"\u{20AC}\" *,#,##0.00_ ;_ \"\u{20AC}\" * -#,##0.00_ ;_ \"\u{20AC}\" * \"-\"??_ ;_ @_ ",
        "_ [\$\u{20B9}-447]* #,##0.00_ ;_ [\$\u{20B9}-447]* -#,##0.00_ ;_ [\$\u{20B9}-447]* \"-\"??_ ;_ @_ " => "_ [\$\u{20B9}-447]*,#,##0.00_ ;_ [\$\u{20B9}-447]* -#,##0.00_ ;_ [\$\u{20B9}-447]* \"-\"??_ ;_ @_ ",
        "_-* #,##0.0 [\$\u{631}.\u{639}.\u{200F}-2001]_-;-* #,##0.0 [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-* \"-\"? [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-@_-" => "_-*,#,##0.0\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;-*,#,##0.0\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-* \"-\"?\ [\$\u{631}.\u{639}.\u{200F}-2001]_-;_-@_-",
        "_ [\$XAF] * #,##0.0_ ;_ [\$XAF] * -#,##0.0_ ;_ [\$XAF] * \"-\"?_ ;_ @_ " => "_ [\$XAF] *,#,##0.0_ ;_ [\$XAF] * -#,##0.0_ ;_ [\$XAF] * \"-\"?_ ;_ @_ ",
        "_ \"\u{20AC}\" * #,##0.000_ ;_ \"\u{20AC}\" * -#,##0.000_ ;_ \"\u{20AC}\" * \"-\"???_ ;_ @_ " => "_ \"\u{20AC}\" *,#,##0.000_ ;_ \"\u{20AC}\" * -#,##0.000_ ;_ \"\u{20AC}\" * \"-\"???_ ;_ @_ ",
        "_-[\$\$-409]* #,##0.000_ ;_-[\$\$-409]* -#,##0.000 ;_-[\$\$-409]* \"-\"???_ ;_-@_ " => "_-[\$\$-409]*,#,##0.000_ ;_-[\$\$-409]* -#,##0.000\ ;_-[\$\$-409]* \"-\"???_ ;_-@_ ",
        "_ [\$¥-804]* #,##0.0_ ;_ [\$¥-804]* -#,##0.0_ ;_ [\$¥-804]* \"-\"?_ ;_ @_ " => "_ [\$¥-804]*,#,##0.0_ ;_ [\$¥-804]* -#,##0.0_ ;_ [\$¥-804]* \"-\"?_ ;_ @_ ",
        "_ [\$UAH] * #,##0.0_ ;_ [\$UAH] * -#,##0.0_ ;_ [\$UAH] * \"-\"?_ ;_ @_ " => "_ [\$UAH] *,#,##0.0_ ;_ [\$UAH] * -#,##0.0_ ;_ [\$UAH] * \"-\"?_ ;_ @_ ",
        "[\$-F800]dddd, mmmm dd, yyyy" => "dd mmm yyyy\"{ \u{433}.}\"",
        "[\$-F400]h:mm:ss AM/PM" => "h:mm:ss",
        "# ?/4" => "#\,?/4",
        "# ??/100" => "#\,??/100",
        "# ?/8" => "#\,?/8",
        "# ???/???" => "#\,???/???",
        "# ??/16" => "#\,??/16",
        "# ?/2" => "#\,?/2",
        "# ?/10" => "#\,?/10",
    ];

}
