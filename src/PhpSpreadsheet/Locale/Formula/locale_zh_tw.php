<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for 中文 (Chinese)
 */
class locale_zh_tw extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "zh-tw";

    /**
     * @var string International configuration
     */
    protected $aInternational = array(
        "xlCountryCode" => 886,
        "xlCountrySetting" => 886,
        "xlDecimalSeparator" => ".",
        "xlThousandsSeparator" => ",",
        "xlListSeparator" => ",",
        "xlUpperCaseRowLetter" => "R",
        "xlUpperCaseColumnLetter" => "C",
        "xlLowerCaseRowLetter" => "r",
        "xlLowerCaseColumnLetter" => "c",
        "xlLeftBracket" => "[",
        "xlRightBracket" => "]",
        "xlLeftBrace" => "{",
        "xlRightBrace" => "}",
        "xlColumnSeparator" => ",",
        "xlRowSeparator" => ";",
        "xlAlternateArraySeparator" => "@",
        "xlDateSeparator" => "/",
        "xlTimeSeparator" => ":",
        "xlYearCode" => "y",
        "xlMonthCode" => "m",
        "xlDayCode" => "d",
        "xlHourCode" => "h",
        "xlMinuteCode" => "m",
        "xlSecondCode" => "s",
        "xlCurrencyCode" => "NT\$",
        "xlGeneralFormatName" => "G/\u{901A}\u{7528}\u{683C}\u{5F0F}",
        "xlCurrencyDigits" => 2,
        "xlCurrencyNegative" => 1,
        "xlNoncurrencyDigits" => 2,
        "xlMonthNameChars" => 3,
        "xlWeekdayNameChars" => 3,
        "xlDateOrder" => 2,
        "xl24HourClock" => false,
        "xlNonEnglishFunctions" => false,
        "xlMetric" => true,
        "xlCurrencySpaceBefore" => false,
        "xlCurrencyBefore" => true,
        "xlCurrencyMinusSign" => true,
        "xlCurrencyTrailingZeros" => true,
        "xlCurrencyLeadingZeros" => true,
        "xlMonthLeadingZero" => false,
        "xlDayLeadingZero" => false,
        "xl4DigitYears" => true,
        "xlMDY" => true,
        "xlTimeLeadingZero" => true,
    );

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NULL!",
        "DIV0" => "#DIV/0!",
        "VALUE" => "#VALUE!",
        "REF" => "#REF!",
        "NAME" => "#NAME?",
        "NUM" => "#NUM!",
        "NA" => "#N/A",
        "GETTINGDATA" => "#GETTING_DATA!",
        "SPILL" => "#\u{6EA2}\u{51FA}!",
        "CONNECT" => "#\u{9023}\u{7DDA}!",
        "BLOCKED" => "#\u{5DF2}\u{5C01}\u{9396}!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $functions_legacy = array(
        // 查閱和參照函數 (Lookup and reference functions)
        "*RC" => "RC",

        // 文字函數 (Text functions)
        "DBCS" => "BIG5",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // 查閱和參照函數 (Lookup and reference functions)
        "*RC" => "RC",

        // 文字函數 (Text functions)
        "DBCS" => "BIG5",
    );

}
