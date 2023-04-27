<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;

/**
 * Locale class for Polski (Polish).
 */
class locale_pl_pl extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'pl-pl';

    /**
     * @var string International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 48,
        'xlCountrySetting' => 48,
        'xlDecimalSeparator' => ',',
        'xlThousandsSeparator' => ' ',
        'xlListSeparator' => ';',
        'xlUpperCaseRowLetter' => 'W',
        'xlUpperCaseColumnLetter' => 'K',
        'xlLowerCaseRowLetter' => 'w',
        'xlLowerCaseColumnLetter' => 'k',
        'xlLeftBracket' => '[',
        'xlRightBracket' => ']',
        'xlLeftBrace' => '{',
        'xlRightBrace' => '}',
        'xlColumnSeparator' => '\\',
        'xlRowSeparator' => ';',
        'xlAlternateArraySeparator' => '@',
        'xlDateSeparator' => '.',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'r',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'g',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "z\u{142}",
        'xlGeneralFormatName' => 'Standardowy',
        'xlCurrencyDigits' => 2,
        'xlCurrencyNegative' => 1,
        'xlNoncurrencyDigits' => 2,
        'xlMonthNameChars' => 3,
        'xlWeekdayNameChars' => 3,
        'xlDateOrder' => 1,
        'xl24HourClock' => true,
        'xlNonEnglishFunctions' => true,
        'xlMetric' => true,
        'xlCurrencySpaceBefore' => true,
        'xlCurrencyBefore' => false,
        'xlCurrencyMinusSign' => true,
        'xlCurrencyTrailingZeros' => true,
        'xlCurrencyLeadingZeros' => true,
        'xlMonthLeadingZero' => true,
        'xlDayLeadingZero' => true,
        'xl4DigitYears' => true,
        'xlMDY' => false,
        'xlTimeLeadingZero' => true,
    ];

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ';';

    /**
     * @var string TRUE/FALSE/NULL representation
     */
    protected $aBooleanRepresentation = [
        'TRUE' => 'PRAWDA',
        'FALSE' => "FA\u{141}SZ",
        'NULL' => 'NULL',
    ];

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = [
        'NULL' => '#ZERO!',
        'DIV0' => '#DZIEL/0!',
        'VALUE' => '#ARG!',
        'REF' => '#ADR!',
        'NAME' => '#NAZWA?',
        'NUM' => '#LICZBA!',
        'NA' => '#N/D',
        'GETTINGDATA' => '#POBIERANIE_DANYCH!',
        'SPILL' => '#ROZLANIE!',
        'CONNECT' => "#PO\u{141}\u{104}CZ!",
        'BLOCKED' => '#ZABLOKOWANE!',
        'UNKNOWN' => '#NIEZNANE!',
        'FIELD' => '#POLE!',
        'CALC' => '#OBL!',
        'EXTERNAL' => '#EXTERNAL!',
    ];

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $functions_legacy = [
        // Funkcje daty i czasu (Date and time functions)
        'DATEDIF' => "DATA.RÓ\u{17B}NICA",

        // Funkcje finansowe (Financial functions)
        'STOCKHISTORY' => 'HISTORIA.AKCJI',

        // Funkcje logiczne (Logical functions)
        'BYROW' => 'WIERSZAMI',

        // Funkcje wyszukiwania i odwoływania (Lookup and reference functions)
        '*RC' => 'WK',
        'CHOOSECOLS' => 'WYBIERZ.KOLUMNY',
        'CHOOSEROWS' => 'WYBIERZ.WIERSZE',
        'DROP' => "POMI\u{143}",
        'EXPAND' => 'ROZSZERZ',
        'FILTER' => 'FILTRUJ',
        'HSTACK' => 'STOS.POZ',
        'SORT' => 'SORTUJ',
        'SORTBY' => "SORTUJ.WED\u{141}UG",
        'TAKE' => 'WYCINEK',
        'TOCOL' => 'DO.KOLUMNY',
        'TOROW' => 'DO.WIERSZA',
        'UNIQUE' => 'UNIKATOWE',
        'VSTACK' => 'STOS.PION',
        'WRAPCOLS' => "ZAWI\u{143}.KOLUMNY",
        'WRAPROWS' => "ZAWI\u{143}.WIERSZE",
        'XLOOKUP' => 'X.WYSZUKAJ',
        'XMATCH' => 'X.DOPASUJ',

        // Funkcje matematyczne i trygonometryczne (Math and trigonometry functions)
        'RANDARRAY' => 'LOSOWA.TABLICA',
        'SEQUENCE' => 'SEKWENCJA',

        // Funkcje tekstowe (Text functions)
        'ARRAYTOTEXT' => 'TABLICA.NA.TEKST',
        'FINDB' => "ZNAJD\u{179}B",
        'LEFTB' => 'LEWYB',
        'LENB' => "D\u{141}.B",
        'MIDB' => 'FRAGMENT.TEKSTU.B',
        'REPLACEB' => "ZAST\u{104}P.B",
        'RIGHTB' => 'PRAWY.B',
        'SEARCHB' => 'SZUKAJ.TEKST.B',
        'TEXTAFTER' => 'TEKST.PO',
        'TEXTBEFORE' => 'TEKST.PRZED',
        'TEXTSPLIT' => 'PODZIEL.TEKST',
        'VALUETOTEXT' => "WARTO\u{15A}\u{106}.NA.TEKST",

        // Dodatki i automatyzacja (Add-in and automation)
        'CALL' => "WYWO\u{141}AJ",
        'REGISTER.ID' => 'REJESTR.KOD',
    ];

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = [
        // Funkcje kostki (Cube functions)
        'CUBEKPIMEMBER' => "ELEMENT.KPI.MODU\u{141}U",
        'CUBEMEMBER' => "ELEMENT.MODU\u{141}U",
        'CUBEMEMBERPROPERTY' => "W\u{141}A\u{15A}CIWO\u{15A}\u{106}.ELEMENTU.MODU\u{141}U",
        'CUBERANKEDMEMBER' => "USZEREGOWANY.ELEMENT.MODU\u{141}U",
        'CUBESET' => "ZESTAW.MODU\u{141}ÓW",
        'CUBESETCOUNT' => "LICZNIK.MODU\u{141}ÓW.ZESTAWU",
        'CUBEVALUE' => "WARTO\u{15A}\u{106}.MODU\u{141}U",

        // Funkcje bazy danych (Database functions)
        'DAVERAGE' => "BD.\u{15A}REDNIA",
        'DCOUNT' => 'BD.ILE.REKORDÓW',
        'DCOUNTA' => 'BD.ILE.REKORDÓW.A',
        'DGET' => 'BD.POLE',
        'DMAX' => 'BD.MAX',
        'DMIN' => 'BD.MIN',
        'DPRODUCT' => 'BD.ILOCZYN',
        'DSTDEV' => 'BD.ODCH.STANDARD',
        'DSTDEVP' => 'BD.ODCH.STANDARD.POPUL',
        'DSUM' => 'BD.SUMA',
        'DVAR' => 'BD.WARIANCJA',
        'DVARP' => 'BD.WARIANCJA.POPUL',

        // Funkcje daty i czasu (Date and time functions)
        'DATE' => 'DATA',
        'DATEDIF' => "DATA.RÓ\u{17B}NICA",
        'DATESTRING' => "DATA.CI\u{104}G.ZNAK",
        'DATEVALUE' => "DATA.WARTO\u{15A}\u{106}",
        'DAY' => "DZIE\u{143}",
        'DAYS' => 'DNI',
        'DAYS360' => 'DNI.360',
        'EDATE' => 'NR.SER.DATY',
        'EOMONTH' => 'NR.SER.OST.DN.MIES',
        'HOUR' => 'GODZINA',
        'ISOWEEKNUM' => 'ISO.NUM.TYG',
        'MINUTE' => 'MINUTA',
        'MONTH' => "MIESI\u{104}C",
        'NETWORKDAYS' => 'DNI.ROBOCZE',
        'NETWORKDAYS.INTL' => 'DNI.ROBOCZE.NIESTAND',
        'NOW' => 'TERAZ',
        'SECOND' => 'SEKUNDA',
        'THAIDAYOFWEEK' => "TAJ.DZIE\u{143}.TYGODNIA",
        'THAIMONTHOFYEAR' => "TAJ.MIESI\u{104}C.ROKU",
        'THAIYEAR' => 'TAJ.ROK',
        'TIME' => 'CZAS',
        'TIMEVALUE' => "CZAS.WARTO\u{15A}\u{106}",
        'TODAY' => "DZI\u{15A}",
        'WEEKDAY' => "DZIE\u{143}.TYG",
        'WEEKNUM' => 'NUM.TYG',
        'WORKDAY' => "DZIE\u{143}.ROBOCZY",
        'WORKDAY.INTL' => "DZIE\u{143}.ROBOCZY.NIESTAND",
        'YEAR' => 'ROK',
        'YEARFRAC' => "CZ\u{118}\u{15A}\u{106}.ROKU",

        // Funkcje techniczne (Engineering functions)
        'BESSELI' => 'BESSEL.I',
        'BESSELJ' => 'BESSEL.J',
        'BESSELK' => 'BESSEL.K',
        'BESSELY' => 'BESSEL.Y',
        'BIN2DEC' => 'DWÓJK.NA.DZIES',
        'BIN2HEX' => 'DWÓJK.NA.SZESN',
        'BIN2OCT' => 'DWÓJK.NA.ÓSM',
        'BITLSHIFT' => "BIT.PRZESUNI\u{118}CIE.W.LEWO",
        'BITRSHIFT' => "BIT.PRZESUNI\u{118}CIE.W.PRAWO",
        'COMPLEX' => 'LICZBA.ZESP',
        'CONVERT' => 'KONWERTUJ',
        'DEC2BIN' => 'DZIES.NA.DWÓJK',
        'DEC2HEX' => 'DZIES.NA.SZESN',
        'DEC2OCT' => 'DZIES.NA.ÓSM',
        'DELTA' => 'CZY.RÓWNE',
        'ERF' => "FUNKCJA.B\u{141}",
        'ERF.PRECISE' => "FUNKCJA.B\u{141}.DOK\u{141}",
        'ERFC' => "KOMP.FUNKCJA.B\u{141}",
        'ERFC.PRECISE' => "KOMP.FUNKCJA.B\u{141}.DOK\u{141}",
        'GESTEP' => "SPRAWD\u{179}.PRÓG",
        'HEX2BIN' => 'SZESN.NA.DWÓJK',
        'HEX2DEC' => 'SZESN.NA.DZIES',
        'HEX2OCT' => 'SZESN.NA.ÓSM',
        'IMABS' => "MODU\u{141}.LICZBY.ZESP",
        'IMAGINARY' => 'CZ.UROJ.LICZBY.ZESP',
        'IMARGUMENT' => 'ARG.LICZBY.ZESP',
        'IMCONJUGATE' => "SPRZ\u{118}\u{17B}.LICZBY.ZESP",
        'IMCOS' => 'COS.LICZBY.ZESP',
        'IMCOSH' => 'COSH.LICZBY.ZESP',
        'IMCOT' => 'COT.LICZBY.ZESP',
        'IMCSC' => 'CSC.LICZBY.ZESP',
        'IMCSCH' => 'CSCH.LICZBY.ZESP',
        'IMDIV' => 'ILORAZ.LICZB.ZESP',
        'IMEXP' => 'EXP.LICZBY.ZESP',
        'IMLN' => 'LN.LICZBY.ZESP',
        'IMLOG10' => 'LOG10.LICZBY.ZESP',
        'IMLOG2' => 'LOG2.LICZBY.ZESP',
        'IMPOWER' => "POT\u{118}GA.LICZBY.ZESP",
        'IMPRODUCT' => 'ILOCZYN.LICZB.ZESP',
        'IMREAL' => 'CZ.RZECZ.LICZBY.ZESP',
        'IMSEC' => 'SEC.LICZBY.ZESP',
        'IMSECH' => 'SECH.LICZBY.ZESP',
        'IMSIN' => 'SIN.LICZBY.ZESP',
        'IMSINH' => 'SINH.LICZBY.ZESP',
        'IMSQRT' => 'PIERWIASTEK.LICZBY.ZESP',
        'IMSUB' => "RÓ\u{17B}N.LICZB.ZESP",
        'IMSUM' => 'SUMA.LICZB.ZESP',
        'IMTAN' => 'TAN.LICZBY.ZESP',
        'OCT2BIN' => 'ÓSM.NA.DWÓJK',
        'OCT2DEC' => 'ÓSM.NA.DZIES',
        'OCT2HEX' => 'ÓSM.NA.SZESN',

        // Funkcje finansowe (Financial functions)
        'ACCRINT' => 'NAL.ODS',
        'ACCRINTM' => 'NAL.ODS.WYKUP',
        'AMORDEGRC' => 'AMORT.NIELIN',
        'AMORLINC' => 'AMORT.LIN',
        'COUPDAYBS' => "WYP\u{141}.DNI.OD.POCZ",
        'COUPDAYS' => "WYP\u{141}.DNI",
        'COUPDAYSNC' => "WYP\u{141}.DNI.NAST",
        'COUPNCD' => "WYP\u{141}.DATA.NAST",
        'COUPNUM' => "WYP\u{141}.LICZBA",
        'COUPPCD' => "WYP\u{141}.DATA.POPRZ",
        'CUMIPMT' => "SP\u{141}AC.ODS",
        'CUMPRINC' => "SP\u{141}AC.KAPIT",
        'DISC' => 'STOPA.DYSK',
        'DOLLARDE' => 'CENA.DZIES',
        'DOLLARFR' => "CENA.U\u{141}AM",
        'DURATION' => 'ROCZ.PRZYCH',
        'EFFECT' => 'EFEKTYWNA',
        'FVSCHEDULE' => "WART.PRZYSZ\u{141}.KAP",
        'INTRATE' => 'STOPA.PROC',
        'MDURATION' => 'ROCZ.PRZYCH.M',
        'NOMINAL' => 'NOMINALNA',
        'ODDFPRICE' => 'CENA.PIERW.OKR',
        'ODDFYIELD' => 'RENT.PIERW.OKR',
        'ODDLPRICE' => 'CENA.OST.OKR',
        'ODDLYIELD' => 'RENT.OST.OKR',
        'PDURATION' => 'O.CZAS.TRWANIA',
        'PRICE' => 'CENA',
        'PRICEDISC' => 'CENA.DYSK',
        'PRICEMAT' => 'CENA.WYKUP',
        'RECEIVED' => 'KWOTA.WYKUP',
        'RRI' => 'RÓWNOW.STOPA.PROC',
        'STOCKHISTORY' => 'HISTORIA.AKCJI',
        'TBILLEQ' => 'RENT.EKW.BS',
        'TBILLPRICE' => 'CENA.BS',
        'TBILLYIELD' => 'RENT.BS',
        'YIELD' => "RENTOWNO\u{15A}\u{106}",
        'YIELDDISC' => 'RENT.DYSK',
        'YIELDMAT' => 'RENT.WYKUP',

        // Funkcje informacyjne (Information functions)
        'CELL' => 'KOMÓRKA',
        'ERROR.TYPE' => "NR.B\u{141}\u{118}DU",
        'ISBLANK' => 'CZY.PUSTA',
        'ISERR' => "CZY.B\u{141}",
        'ISERROR' => "CZY.B\u{141}\u{104}D",
        'ISEVEN' => 'CZY.PARZYSTE',
        'ISFORMULA' => "CZY.FORMU\u{141}A",
        'ISLOGICAL' => 'CZY.LOGICZNA',
        'ISNA' => 'CZY.BRAK',
        'ISNONTEXT' => 'CZY.NIE.TEKST',
        'ISNUMBER' => 'CZY.LICZBA',
        'ISODD' => 'CZY.NIEPARZYSTE',
        'ISREF' => 'CZY.ADR',
        'ISTEXT' => 'CZY.TEKST',
        'NA' => 'BRAK',
        'SHEET' => 'ARKUSZ',
        'SHEETS' => 'ARKUSZE',
        'TYPE' => 'TYP',

        // Funkcje logiczne (Logical functions)
        'AND' => 'ORAZ',
        'BYROW' => 'WIERSZAMI',
        'IF' => "JE\u{17B}ELI",
        'IFERROR' => "JE\u{17B}ELI.B\u{141}\u{104}D",
        'IFNA' => "JE\u{17B}ELI.ND",
        'IFS' => 'WARUNKI',
        'NOT' => 'NIE',
        'OR' => 'LUB',
        'SWITCH' => "PRZE\u{141}\u{104}CZ",

        // Funkcje wyszukiwania i odwoływania (Lookup and reference functions)
        '*RC' => 'WK',
        'ADDRESS' => 'ADRES',
        'AREAS' => 'OBSZARY',
        'CHOOSE' => 'WYBIERZ',
        'CHOOSECOLS' => 'WYBIERZ.KOLUMNY',
        'CHOOSEROWS' => 'WYBIERZ.WIERSZE',
        'COLUMN' => 'NR.KOLUMNY',
        'COLUMNS' => 'LICZBA.KOLUMN',
        'DROP' => "POMI\u{143}",
        'EXPAND' => 'ROZSZERZ',
        'FILTER' => 'FILTRUJ',
        'FORMULATEXT' => "FORMU\u{141}A.TEKST",
        'GETPIVOTDATA' => "WE\u{179}DANETABELI",
        'HLOOKUP' => 'WYSZUKAJ.POZIOMO',
        'HSTACK' => 'STOS.POZ',
        'HYPERLINK' => "HIPER\u{141}\u{104}CZE",
        'INDEX' => 'INDEKS',
        'INDIRECT' => "ADR.PO\u{15A}R",
        'LOOKUP' => 'WYSZUKAJ',
        'MATCH' => "PODAJ.POZYCJ\u{118}",
        'OFFSET' => "PRZESUNI\u{118}CIE",
        'ROW' => 'WIERSZ',
        'ROWS' => 'ILE.WIERSZY',
        'RTD' => 'DANE.CZASU.RZECZ',
        'SORT' => 'SORTUJ',
        'SORTBY' => "SORTUJ.WED\u{141}UG",
        'TAKE' => 'WYCINEK',
        'TOCOL' => 'DO.KOLUMNY',
        'TOROW' => 'DO.WIERSZA',
        'TRANSPOSE' => 'TRANSPONUJ',
        'UNIQUE' => 'UNIKATOWE',
        'VLOOKUP' => 'WYSZUKAJ.PIONOWO',
        'VSTACK' => 'STOS.PION',
        'WRAPCOLS' => "ZAWI\u{143}.KOLUMNY",
        'WRAPROWS' => "ZAWI\u{143}.WIERSZE",
        'XLOOKUP' => 'X.WYSZUKAJ',
        'XMATCH' => 'X.DOPASUJ',

        // Funkcje matematyczne i trygonometryczne (Math and trigonometry functions)
        'ABS' => "MODU\u{141}.LICZBY",
        'AGGREGATE' => 'AGREGUJ',
        'ARABIC' => 'ARABSKIE',
        'BASE' => 'PODSTAWA',
        'CEILING.MATH' => "ZAOKR.W.GÓR\u{118}.MATEMATYCZNE",
        'CEILING.PRECISE' => "ZAOKR.W.GÓR\u{118}.DOK\u{141}",
        'COMBIN' => 'KOMBINACJE',
        'COMBINA' => 'KOMBINACJE.A',
        'DECIMAL' => "DZIESI\u{118}TNA",
        'DEGREES' => 'STOPNIE',
        'ECMA.CEILING' => "ECMA.ZAOKR.W.GÓR\u{118}",
        'EVEN' => 'ZAOKR.DO.PARZ',
        'FACT' => 'SILNIA',
        'FACTDOUBLE' => 'SILNIA.DWUKR',
        'FLOOR.MATH' => "ZAOKR.W.DÓ\u{141}.MATEMATYCZNE",
        'FLOOR.PRECISE' => "ZAOKR.W.DÓ\u{141}.DOK\u{141}",
        'GCD' => 'NAJW.WSP.DZIEL',
        'INT' => "ZAOKR.DO.CA\u{141}K",
        'ISO.CEILING' => "ISO.ZAOKR.W.GÓR\u{118}",
        'LCM' => 'NAJMN.WSP.WIEL',
        'MDETERM' => 'WYZNACZNIK.MACIERZY',
        'MINVERSE' => 'MACIERZ.ODW',
        'MMULT' => 'MACIERZ.ILOCZYN',
        'MROUND' => 'ZAOKR.DO.WIELOKR',
        'MULTINOMIAL' => 'WIELOMIAN',
        'MUNIT' => 'MACIERZ.JEDNOSTKOWA',
        'ODD' => 'ZAOKR.DO.NPARZ',
        'POWER' => "POT\u{118}GA",
        'PRODUCT' => 'ILOCZYN',
        'QUOTIENT' => "CZ.CA\u{141}K.DZIELENIA",
        'RADIANS' => 'RADIANY',
        'RAND' => 'LOS',
        'RANDARRAY' => 'LOSOWA.TABLICA',
        'RANDBETWEEN' => 'LOS.ZAKR',
        'ROMAN' => 'RZYMSKIE',
        'ROUND' => 'ZAOKR',
        'ROUNDBAHTDOWN' => "ZAOKR.DÓ\u{141}.BAT",
        'ROUNDBAHTUP' => 'ZAOKR.GÓRA.BAT',
        'ROUNDDOWN' => "ZAOKR.DÓ\u{141}",
        'ROUNDUP' => 'ZAOKR.GÓRA',
        'SEQUENCE' => 'SEKWENCJA',
        'SERIESSUM' => 'SUMA.SZER.POT',
        'SIGN' => 'ZNAK.LICZBY',
        'SQRT' => 'PIERWIASTEK',
        'SQRTPI' => 'PIERW.PI',
        'SUBTOTAL' => "SUMY.CZ\u{118}\u{15A}CIOWE",
        'SUM' => 'SUMA',
        'SUMIF' => "SUMA.JE\u{17B}ELI",
        'SUMIFS' => 'SUMA.WARUNKÓW',
        'SUMPRODUCT' => 'SUMA.ILOCZYNÓW',
        'SUMSQ' => 'SUMA.KWADRATÓW',
        'SUMX2MY2' => 'SUMA.X2.M.Y2',
        'SUMX2PY2' => 'SUMA.X2.P.Y2',
        'SUMXMY2' => 'SUMA.XMY.2',
        'TRUNC' => "LICZBA.CA\u{141}K",

        // Funkcje statystyczne (Statistical functions)
        'AVEDEV' => "ODCH.\u{15A}REDNIE",
        'AVERAGE' => "\u{15A}REDNIA",
        'AVERAGEA' => "\u{15A}REDNIA.A",
        'AVERAGEIF' => "\u{15A}REDNIA.JE\u{17B}ELI",
        'AVERAGEIFS' => "\u{15A}REDNIA.WARUNKÓW",
        'BETA.DIST' => "ROZK\u{141}.BETA",
        'BETA.INV' => "ROZK\u{141}.BETA.ODWR",
        'BINOM.DIST' => "ROZK\u{141}.DWUM",
        'BINOM.DIST.RANGE' => "ROZK\u{141}.DWUM.ZAKRES",
        'BINOM.INV' => "ROZK\u{141}.DWUM.ODWR",
        'CHISQ.DIST' => "ROZK\u{141}.CHI",
        'CHISQ.DIST.RT' => "ROZK\u{141}.CHI.PS",
        'CHISQ.INV' => "ROZK\u{141}.CHI.ODWR",
        'CHISQ.INV.RT' => "ROZK\u{141}.CHI.ODWR.PS",
        'CHISQ.TEST' => 'CHI.TEST',
        'CONFIDENCE.NORM' => "UFNO\u{15A}\u{106}.NORM",
        'CONFIDENCE.T' => "UFNO\u{15A}\u{106}.T",
        'CORREL' => 'WSP.KORELACJI',
        'COUNT' => 'ILE.LICZB',
        'COUNTA' => 'ILE.NIEPUSTYCH',
        'COUNTBLANK' => 'LICZ.PUSTE',
        'COUNTIF' => "LICZ.JE\u{17B}ELI",
        'COUNTIFS' => 'LICZ.WARUNKI',
        'COVARIANCE.P' => 'KOWARIANCJA.POPUL',
        'COVARIANCE.S' => 'KOWARIANCJA.PRÓBKI',
        'DEVSQ' => 'ODCH.KWADRATOWE',
        'EXPON.DIST' => "ROZK\u{141}.EXP",
        'F.DIST' => "ROZK\u{141}.F",
        'F.DIST.RT' => "ROZK\u{141}.F.PS",
        'F.INV' => "ROZK\u{141}.F.ODWR",
        'F.INV.RT' => "ROZK\u{141}.F.ODWR.PS",
        'FISHER' => "ROZK\u{141}AD.FISHER",
        'FISHERINV' => "ROZK\u{141}AD.FISHER.ODW",
        'FREQUENCY' => "CZ\u{118}STO\u{15A}\u{106}",
        'GAMMA.DIST' => "ROZK\u{141}.GAMMA",
        'GAMMA.INV' => "ROZK\u{141}.GAMMA.ODWR",
        'GAMMALN' => "ROZK\u{141}AD.LIN.GAMMA",
        'GAMMALN.PRECISE' => "ROZK\u{141}AD.LIN.GAMMA.DOK\u{141}",
        'GEOMEAN' => "\u{15A}REDNIA.GEOMETRYCZNA",
        'GROWTH' => 'REGEXPW',
        'HARMEAN' => "\u{15A}REDNIA.HARMONICZNA",
        'HYPGEOM.DIST' => "ROZK\u{141}.HIPERGEOM",
        'INTERCEPT' => "ODCI\u{118}TA",
        'KURT' => 'KURTOZA',
        'LARGE' => 'MAX.K',
        'LINEST' => 'REGLINP',
        'LOGEST' => 'REGEXPP',
        'LOGNORM.DIST' => "ROZK\u{141}.LOG",
        'LOGNORM.INV' => "ROZK\u{141}.LOG.ODWR",
        'MAXA' => 'MAX.A',
        'MAXIFS' => 'MAKS.WARUNKÓW',
        'MEDIAN' => 'MEDIANA',
        'MINA' => 'MIN.A',
        'MINIFS' => 'MIN.WARUNKÓW',
        'MODE.MULT' => "WYST.NAJCZ\u{118}\u{15A}CIEJ.TABL",
        'MODE.SNGL' => "WYST.NAJCZ\u{118}\u{15A}CIEJ.WART",
        'NEGBINOM.DIST' => "ROZK\u{141}.DWUM.PRZEC",
        'NORM.DIST' => "ROZK\u{141}.NORMALNY",
        'NORM.INV' => "ROZK\u{141}.NORMALNY.ODWR",
        'NORM.S.DIST' => "ROZK\u{141}.NORMALNY.S",
        'NORM.S.INV' => "ROZK\u{141}.NORMALNY.S.ODWR",
        'PERCENTILE.EXC' => 'PERCENTYL.PRZEDZ.OTW',
        'PERCENTILE.INC' => 'PERCENTYL.PRZEDZ.ZAMK',
        'PERCENTRANK.EXC' => 'PROC.POZ.PRZEDZ.OTW',
        'PERCENTRANK.INC' => 'PROC.POZ.PRZEDZ.ZAMK',
        'PERMUT' => 'PERMUTACJE',
        'PERMUTATIONA' => 'PERMUTACJE.A',
        'POISSON.DIST' => "ROZK\u{141}.POISSON",
        'PROB' => 'PRAWDPD',
        'QUARTILE.EXC' => 'KWARTYL.PRZEDZ.OTW',
        'QUARTILE.INC' => 'KWARTYL.PRZEDZ.ZAMK',
        'RANK.AVG' => "POZYCJA.\u{15A}R",
        'RANK.EQ' => 'POZYCJA.NAJW',
        'RSQ' => 'R.KWADRAT',
        'SKEW' => "SKO\u{15A}NO\u{15A}\u{106}",
        'SKEW.P' => "SKO\u{15A}NO\u{15A}\u{106}.P",
        'SLOPE' => 'NACHYLENIE',
        'SMALL' => 'MIN.K',
        'STANDARDIZE' => 'NORMALIZUJ',
        'STDEV.P' => 'ODCH.STAND.POPUL',
        'STDEV.S' => 'ODCH.STANDARD.PRÓBKI',
        'STDEVA' => 'ODCH.STANDARDOWE.A',
        'STDEVPA' => 'ODCH.STANDARD.POPUL.A',
        'STEYX' => "REGB\u{141}STD",
        'T.DIST' => "ROZK\u{141}.T",
        'T.DIST.2T' => "ROZK\u{141}.T.DS",
        'T.DIST.RT' => "ROZK\u{141}.T.PS",
        'T.INV' => "ROZK\u{141}.T.ODWR",
        'T.INV.2T' => "ROZK\u{141}.T.ODWR.DS",
        'TREND' => 'REGLINW',
        'TRIMMEAN' => "\u{15A}REDNIA.WEWN",
        'VAR.P' => 'WARIANCJA.POP',
        'VAR.S' => 'WARIANCJA.PRÓBKI',
        'VARA' => 'WARIANCJA.A',
        'VARPA' => 'WARIANCJA.POPUL.A',
        'WEIBULL.DIST' => "ROZK\u{141}.WEIBULL",

        // Funkcje tekstowe (Text functions)
        'ARRAYTOTEXT' => 'TABLICA.NA.TEKST',
        'BAHTTEXT' => 'BAT.TEKST',
        'CHAR' => 'ZNAK',
        'CLEAN' => "OCZY\u{15A}\u{106}",
        'CODE' => 'KOD',
        'CONCAT' => "Z\u{141}\u{104}CZ.TEKST",
        'DOLLAR' => 'KWOTA',
        'EXACT' => 'PORÓWNAJ',
        'FIND' => "ZNAJD\u{179}",
        'FINDB' => "ZNAJD\u{179}B",
        'FIXED' => 'ZAOKR.DO.TEKST',
        'ISTHAIDIGIT' => 'CZY.CYFRA.TAJ',
        'LEFT' => 'LEWY',
        'LEFTB' => 'LEWYB',
        'LEN' => "D\u{141}",
        'LENB' => "D\u{141}.B",
        'LOWER' => "LITERY.MA\u{141}E",
        'MID' => 'FRAGMENT.TEKSTU',
        'MIDB' => 'FRAGMENT.TEKSTU.B',
        'NUMBERVALUE' => "WARTO\u{15A}\u{106}.LICZBOWA",
        'PROPER' => 'Z.WIELKIEJ.LITERY',
        'REPLACE' => "ZAST\u{104}P",
        'REPLACEB' => "ZAST\u{104}P.B",
        'REPT' => 'POWT',
        'RIGHT' => 'PRAWY',
        'RIGHTB' => 'PRAWY.B',
        'SEARCH' => 'SZUKAJ.TEKST',
        'SEARCHB' => 'SZUKAJ.TEKST.B',
        'SUBSTITUTE' => 'PODSTAW',
        'TEXT' => 'TEKST',
        'TEXTAFTER' => 'TEKST.PO',
        'TEXTBEFORE' => 'TEKST.PRZED',
        'TEXTJOIN' => "PO\u{141}\u{104}CZ.TEKSTY",
        'TEXTSPLIT' => 'PODZIEL.TEKST',
        'THAIDIGIT' => 'TAJ.CYFRA',
        'THAINUMSOUND' => "TAJ.D\u{179}WI\u{118}K.NUM",
        'THAINUMSTRING' => "TAJ.CI\u{104}G.NUM",
        'THAISTRINGLENGTH' => "TAJ.D\u{141}UGO\u{15A}\u{106}.CI\u{104}GU",
        'TRIM' => "USU\u{143}.ZB\u{118}DNE.ODST\u{118}PY",
        'UNICHAR' => 'ZNAK.UNICODE',
        'UPPER' => 'LITERY.WIELKIE',
        'VALUE' => "WARTO\u{15A}\u{106}",
        'VALUETOTEXT' => "WARTO\u{15A}\u{106}.NA.TEKST",

        // Funkcje zgodności (Compatibility functions)
        'BETADIST' => "ROZK\u{141}AD.BETA",
        'BETAINV' => "ROZK\u{141}AD.BETA.ODW",
        'BINOMDIST' => "ROZK\u{141}AD.DWUM",
        'CEILING' => "ZAOKR.W.GÓR\u{118}",
        'CHIDIST' => "ROZK\u{141}AD.CHI",
        'CHIINV' => "ROZK\u{141}AD.CHI.ODW",
        'CHITEST' => 'TEST.CHI',
        'CONCATENATE' => "Z\u{141}\u{104}CZ.TEKSTY",
        'CONFIDENCE' => "UFNO\u{15A}\u{106}",
        'COVAR' => 'KOWARIANCJA',
        'CRITBINOM' => "PRÓG.ROZK\u{141}AD.DWUM",
        'EXPONDIST' => "ROZK\u{141}AD.EXP",
        'FDIST' => "ROZK\u{141}AD.F",
        'FINV' => "ROZK\u{141}AD.F.ODW",
        'FLOOR' => "ZAOKR.W.DÓ\u{141}",
        'FORECAST' => 'REGLINX',
        'FTEST' => 'TEST.F',
        'GAMMADIST' => "ROZK\u{141}AD.GAMMA",
        'GAMMAINV' => "ROZK\u{141}AD.GAMMA.ODW",
        'HYPGEOMDIST' => "ROZK\u{141}AD.HIPERGEOM",
        'LOGINV' => "ROZK\u{141}AD.LOG.ODW",
        'LOGNORMDIST' => "ROZK\u{141}AD.LOG",
        'MODE' => "WYST.NAJCZ\u{118}\u{15A}CIEJ",
        'NEGBINOMDIST' => "ROZK\u{141}AD.DWUM.PRZEC",
        'NORMDIST' => "ROZK\u{141}AD.NORMALNY",
        'NORMINV' => "ROZK\u{141}AD.NORMALNY.ODW",
        'NORMSDIST' => "ROZK\u{141}AD.NORMALNY.S",
        'NORMSINV' => "ROZK\u{141}AD.NORMALNY.S.ODW",
        'PERCENTILE' => 'PERCENTYL',
        'PERCENTRANK' => 'PROCENT.POZYCJA',
        'POISSON' => "ROZK\u{141}AD.POISSON",
        'QUARTILE' => 'KWARTYL',
        'RANK' => 'POZYCJA',
        'STDEV' => 'ODCH.STANDARDOWE',
        'STDEVP' => 'ODCH.STANDARD.POPUL',
        'TDIST' => "ROZK\u{141}AD.T",
        'TINV' => "ROZK\u{141}AD.T.ODW",
        'TTEST' => 'TEST.T',
        'VAR' => 'WARIANCJA',
        'VARP' => 'WARIANCJA.POPUL',
        'WEIBULL' => "ROZK\u{141}AD.WEIBULL",
        'ZTEST' => 'TEST.Z',

        // Dodatki i automatyzacja (Add-in and automation)
        'CALL' => "WYWO\u{141}AJ",
        'REGISTER.ID' => 'REJESTR.KOD',
    ];
}
