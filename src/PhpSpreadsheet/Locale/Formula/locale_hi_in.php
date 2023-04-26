<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for हिन्दी (Hindi)
 */
class locale_hi_in extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "hi-in";

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
        "SPILL" => "#स्पिल!",
        "CONNECT" => "#CONNECT!",
        "BLOCKED" => "#BLOCKED!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#FIELD!",
        "CALC" => "#CALC!",
        "EXTERNAL" => "#EXTERNAL!",
    );

}
