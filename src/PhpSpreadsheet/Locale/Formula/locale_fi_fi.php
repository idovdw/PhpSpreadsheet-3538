<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;

/**
 * Locale class for Suomi (Finnish).
 */
class locale_fi_fi extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'fi-fi';

    /**
     * @var string International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 358,
        'xlCountrySetting' => 358,
        'xlDecimalSeparator' => ',',
        'xlThousandsSeparator' => ' ',
        'xlListSeparator' => ';',
        'xlUpperCaseRowLetter' => 'R',
        'xlUpperCaseColumnLetter' => 'S',
        'xlLowerCaseRowLetter' => 'r',
        'xlLowerCaseColumnLetter' => 's',
        'xlLeftBracket' => '[',
        'xlRightBracket' => ']',
        'xlLeftBrace' => '{',
        'xlRightBrace' => '}',
        'xlColumnSeparator' => '\\',
        'xlRowSeparator' => ';',
        'xlAlternateArraySeparator' => '@',
        'xlDateSeparator' => '.',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'v',
        'xlMonthCode' => 'k',
        'xlDayCode' => 'p',
        'xlHourCode' => 't',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{20AC}",
        'xlGeneralFormatName' => 'Yleinen',
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
        'xlMonthLeadingZero' => false,
        'xlDayLeadingZero' => false,
        'xl4DigitYears' => true,
        'xlMDY' => false,
        'xlTimeLeadingZero' => false,
    ];

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ';';

    /**
     * @var string TRUE/FALSE/NULL representation
     */
    protected $aBooleanRepresentation = [
        'TRUE' => 'TOSI',
        'FALSE' => 'EPÄTOSI',
        'NULL' => 'NULL',
    ];

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = [
        'NULL' => '#TYHJÄ!',
        'DIV0' => '#JAKO/0!',
        'VALUE' => '#ARVO!',
        'REF' => '#VIITTAUS!',
        'NAME' => '#NIMI?',
        'NUM' => '#LUKU!',
        'NA' => '#PUUTTUU!',
        'GETTINGDATA' => '#HAETAAN_TIETOJA!',
        'SPILL' => '#LEVITTYMINEN!',
        'CONNECT' => '#YHDISTÄ!',
        'BLOCKED' => '#ESTETTY!',
        'UNKNOWN' => '#TUNTEMATON!',
        'FIELD' => '#KENTTÄ!',
        'CALC' => '#LASKE!',
        'EXTERNAL' => '#ULKOINEN!',
    ];

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $functions_legacy = [
        // Päivämäärä- ja aikafunktiot (Date and time functions)
        'DATEDIF' => 'PVMERO',

        // Rahoitusfunktiot (Financial functions)
        'STOCKHISTORY' => 'OSAKEHISTORIA',

        // Haku- ja viittausfunktiot (Lookup and reference functions)
        '*RC' => 'RS',
        'CHOOSECOLS' => 'VALITSESARAKKEET',
        'CHOOSEROWS' => 'VALITSERIVIT',
        'DROP' => 'HYLKÄÄ',
        'EXPAND' => 'LAAJENNA',
        'FILTER' => 'SUODATA',
        'HSTACK' => 'HPINO',
        'SORT' => 'LAJITTELE',
        'SORTBY' => 'LAJITTELE.ARVOJEN.PERUSTEELLA',
        'TAKE' => 'OTA',
        'TOCOL' => 'SARAKKEESEEN',
        'TOROW' => 'RIVIIN',
        'UNIQUE' => 'AINUTKERTAISET.ARVOT',
        'VSTACK' => 'VPINO',
        'WRAPCOLS' => 'RIVITÄSAR',
        'WRAPROWS' => 'RIVITÄRIV',
        'XLOOKUP' => 'XHAKU',
        'XMATCH' => 'XVASTINE',

        // Matemaattiset ja trigonometriset funktiot (Math and trigonometry functions)
        'RANDARRAY' => 'SATUNN.MATRIISI',
        'SEQUENCE' => 'JONO',

        // Tekstifunktiot (Text functions)
        'ARRAYTOTEXT' => 'MATRIISI.TEKSTIKSI',
        'FINDB' => 'ETSIB',
        'LEFTB' => 'VASENB',
        'LENB' => 'PITUUSB',
        'MIDB' => 'POIMI.TEKSTIB',
        'REPLACEB' => 'KORVAAB',
        'RIGHTB' => 'OIKEAB',
        'SEARCHB' => 'KÄY.LÄPIB',
        'TEXTAFTER' => 'TEKSTI.JÄLKEEN',
        'TEXTBEFORE' => 'TEKSTI.ENNEN',
        'TEXTSPLIT' => 'TEKSTIJAKO',
        'VALUETOTEXT' => 'ARVO.TEKSTIKSI',

        // Liitännäinen ja automatisointi (Add-in and automation)
        'CALL' => 'KUTSU',
        'REGISTER.ID' => 'REKISTERI.TUNNUS',
    ];

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = [
        // Kuutiofunktiot (Cube functions)
        'CUBEKPIMEMBER' => 'KUUTIOKPIJÄSEN',
        'CUBEMEMBER' => 'KUUTIONJÄSEN',
        'CUBEMEMBERPROPERTY' => 'KUUTIONJÄSENENOMINAISUUS',
        'CUBERANKEDMEMBER' => 'KUUTIONLUOKITELTUJÄSEN',
        'CUBESET' => 'KUUTIOJOUKKO',
        'CUBESETCOUNT' => 'KUUTIOJOUKKOJENMÄÄRÄ',
        'CUBEVALUE' => 'KUUTIONARVO',

        // Tietokantafunktiot (Database functions)
        'DAVERAGE' => 'TKESKIARVO',
        'DCOUNT' => 'TLASKE',
        'DCOUNTA' => 'TLASKEA',
        'DGET' => 'TNOUDA',
        'DMAX' => 'TMAKS',
        'DMIN' => 'TMIN',
        'DPRODUCT' => 'TTULO',
        'DSTDEV' => 'TKESKIHAJONTA',
        'DSTDEVP' => 'TKESKIHAJONTAP',
        'DSUM' => 'TSUMMA',
        'DVAR' => 'TVARIANSSI',
        'DVARP' => 'TVARIANSSIP',

        // Päivämäärä- ja aikafunktiot (Date and time functions)
        'DATE' => 'PÄIVÄYS',
        'DATEDIF' => 'PVMERO',
        'DATESTRING' => 'PVMMERKKIJONO',
        'DATEVALUE' => 'PÄIVÄYSARVO',
        'DAY' => 'PÄIVÄ',
        'DAYS' => 'PÄIVÄT',
        'DAYS360' => 'PÄIVÄT360',
        'EDATE' => 'PÄIVÄ.KUUKAUSI',
        'EOMONTH' => 'KUUKAUSI.LOPPU',
        'HOUR' => 'TUNNIT',
        'ISOWEEKNUM' => 'VIIKKO.ISO.NRO',
        'MINUTE' => 'MINUUTIT',
        'MONTH' => 'KUUKAUSI',
        'NETWORKDAYS' => 'TYÖPÄIVÄT',
        'NETWORKDAYS.INTL' => 'TYÖPÄIVÄT.KANSVÄL',
        'NOW' => 'NYT',
        'SECOND' => 'SEKUNNIT',
        'THAIDAYOFWEEK' => 'THAI.VIIKONPÄIVÄ',
        'THAIMONTHOFYEAR' => 'THAI.KUUKAUSI',
        'THAIYEAR' => 'THAI.VUOSI',
        'TIME' => 'AIKA',
        'TIMEVALUE' => 'AIKA_ARVO',
        'TODAY' => 'TÄMÄ.PÄIVÄ',
        'WEEKDAY' => 'VIIKONPÄIVÄ',
        'WEEKNUM' => 'VIIKKO.NRO',
        'WORKDAY' => 'TYÖPÄIVÄ',
        'WORKDAY.INTL' => 'TYÖPÄIVÄ.KANSVÄL',
        'YEAR' => 'VUOSI',
        'YEARFRAC' => 'VUOSI.OSA',

        // Tekniset funktiot (Engineering functions)
        'BIN2DEC' => 'BINDES',
        'BIN2HEX' => 'BINHEKSA',
        'BIN2OCT' => 'BINOKT',
        'BITAND' => 'BITTI.JA',
        'BITLSHIFT' => 'BITTI.SIIRTO.V',
        'BITOR' => 'BITTI.TAI',
        'BITRSHIFT' => 'BITTI.SIIRTO.O',
        'BITXOR' => 'BITTI.EHDOTON.TAI',
        'COMPLEX' => 'KOMPLEKSI',
        'CONVERT' => 'MUUNNA',
        'DEC2BIN' => 'DESBIN',
        'DEC2HEX' => 'DESHEKSA',
        'DEC2OCT' => 'DESOKT',
        'DELTA' => 'SAMA.ARVO',
        'ERF' => 'VIRHEFUNKTIO',
        'ERF.PRECISE' => 'VIRHEFUNKTIO.TARKKA',
        'ERFC' => 'VIRHEFUNKTIO.KOMPLEMENTTI',
        'ERFC.PRECISE' => 'VIRHEFUNKTIO.KOMPLEMENTTI.TARKKA',
        'GESTEP' => 'RAJA',
        'HEX2BIN' => 'HEKSABIN',
        'HEX2DEC' => 'HEKSADES',
        'HEX2OCT' => 'HEKSAOKT',
        'IMABS' => 'KOMPLEKSI.ABS',
        'IMAGINARY' => 'KOMPLEKSI.IMAG',
        'IMARGUMENT' => 'KOMPLEKSI.ARG',
        'IMCONJUGATE' => 'KOMPLEKSI.KONJ',
        'IMCOS' => 'KOMPLEKSI.COS',
        'IMCOT' => 'KOMPLEKSI.COT',
        'IMCSC' => 'KOMPLEKSI.KOSEK',
        'IMCSCH' => 'KOMPLEKSI.KOSEKH',
        'IMDIV' => 'KOMPLEKSI.OSAM',
        'IMEXP' => 'KOMPLEKSI.EKSP',
        'IMLN' => 'KOMPLEKSI.LN',
        'IMLOG10' => 'KOMPLEKSI.LOG10',
        'IMLOG2' => 'KOMPLEKSI.LOG2',
        'IMPOWER' => 'KOMPLEKSI.POT',
        'IMPRODUCT' => 'KOMPLEKSI.TULO',
        'IMREAL' => 'KOMPLEKSI.REAALI',
        'IMSEC' => 'KOMPLEKSI.SEK',
        'IMSECH' => 'KOMPLEKSI.SEKH',
        'IMSIN' => 'KOMPLEKSI.SIN',
        'IMSINH' => 'KOMPLEKSI.SINH',
        'IMSQRT' => 'KOMPLEKSI.NELIÖJ',
        'IMSUB' => 'KOMPLEKSI.EROTUS',
        'IMSUM' => 'KOMPLEKSI.SUM',
        'IMTAN' => 'KOMPLEKSI.TAN',
        'OCT2BIN' => 'OKTBIN',
        'OCT2DEC' => 'OKTDES',
        'OCT2HEX' => 'OKTHEKSA',

        // Rahoitusfunktiot (Financial functions)
        'ACCRINT' => 'KERTYNYT.KORKO',
        'ACCRINTM' => 'KERTYNYT.KORKO.LOPUSSA',
        'COUPDAYBS' => 'KORKOPÄIVÄT.ALUSTA',
        'COUPDAYS' => 'KORKOPÄIVÄT',
        'COUPDAYSNC' => 'KORKOPÄIVÄT.SEURAAVA',
        'COUPNCD' => 'KORKOPÄIVÄ.SEURAAVA',
        'COUPNUM' => 'KORKOPÄIVÄ.JAKSOT',
        'COUPPCD' => 'KORKOPÄIVÄ.EDELLINEN',
        'CUMIPMT' => 'MAKSETTU.KORKO',
        'CUMPRINC' => 'MAKSETTU.LYHENNYS',
        'DISC' => 'DISKONTTOKORKO',
        'DOLLARDE' => 'VALUUTTA.DES',
        'DOLLARFR' => 'VALUUTTA.MURTO',
        'DURATION' => 'KESTO',
        'EFFECT' => 'KORKO.EFEKT',
        'FV' => 'TULEVA.ARVO',
        'FVSCHEDULE' => 'TULEVA.ARVO.ERIKORKO',
        'INTRATE' => 'KORKO.ARVOPAPERI',
        'IRR' => 'SISÄINEN.KORKO',
        'MDURATION' => 'KESTO.MUUNN',
        'MIRR' => 'MSISÄINEN',
        'NOMINAL' => 'KORKO.VUOSI',
        'NPER' => 'NJAKSO',
        'NPV' => 'NNA',
        'ODDFPRICE' => 'PARITON.ENS.NIMELLISARVO',
        'ODDFYIELD' => 'PARITON.ENS.TUOTTO',
        'ODDLPRICE' => 'PARITON.VIIM.NIMELLISARVO',
        'ODDLYIELD' => 'PARITON.VIIM.TUOTTO',
        'PDURATION' => 'KESTO.JAKSO',
        'PMT' => 'MAKSU',
        'PRICE' => 'HINTA',
        'PRICEDISC' => 'HINTA.DISK',
        'PRICEMAT' => 'HINTA.LUNASTUS',
        'PV' => 'NA',
        'RATE' => 'KORKO',
        'RECEIVED' => 'SAATU.HINTA',
        'RRI' => 'TOT.ROI',
        'SLN' => 'STP',
        'STOCKHISTORY' => 'OSAKEHISTORIA',
        'SYD' => 'VUOSIPOISTO',
        'TBILLEQ' => 'OBLIG.TUOTTOPROS',
        'TBILLPRICE' => 'OBLIG.HINTA',
        'TBILLYIELD' => 'OBLIG.TUOTTO',
        'XIRR' => 'SISÄINEN.KORKO.JAKSOTON',
        'XNPV' => 'NNA.JAKSOTON',
        'YIELD' => 'TUOTTO',
        'YIELDDISC' => 'TUOTTO.DISK',
        'YIELDMAT' => 'TUOTTO.ERÄP',

        // Tietotekniset funktiot (Information functions)
        'CELL' => 'SOLU',
        'ERROR.TYPE' => 'VIRHEEN.LAJI',
        'INFO' => 'KUVAUS',
        'ISBLANK' => 'ONTYHJÄ',
        'ISERR' => 'ONVIRH',
        'ISERROR' => 'ONVIRHE',
        'ISEVEN' => 'ONPARILLINEN',
        'ISFORMULA' => 'ONKAAVA',
        'ISLOGICAL' => 'ONTOTUUS',
        'ISNA' => 'ONPUUTTUU',
        'ISNONTEXT' => 'ONEI_TEKSTI',
        'ISNUMBER' => 'ONLUKU',
        'ISODD' => 'ONPARITON',
        'ISREF' => 'ONVIITT',
        'ISTEXT' => 'ONTEKSTI',
        'NA' => 'PUUTTUU',
        'SHEET' => 'TAULUKKO',
        'SHEETS' => 'TAULUKOT',
        'TYPE' => 'TYYPPI',

        // Logiikkafunktiot (Logical functions)
        'AND' => 'JA',
        'IF' => 'JOS',
        'IFERROR' => 'JOSVIRHE',
        'IFNA' => 'JOSPUUTTUU',
        'IFS' => 'JOS.JOUKKO',
        'NOT' => 'EI',
        'OR' => 'TAI',
        'SWITCH' => 'MUUTA',
        'XOR' => 'EHDOTON.TAI',

        // Haku- ja viittausfunktiot (Lookup and reference functions)
        '*RC' => 'RS',
        'ADDRESS' => 'OSOITE',
        'AREAS' => 'ALUEET',
        'CHOOSE' => 'VALITSE.INDEKSI',
        'CHOOSECOLS' => 'VALITSESARAKKEET',
        'CHOOSEROWS' => 'VALITSERIVIT',
        'COLUMN' => 'SARAKE',
        'COLUMNS' => 'SARAKKEET',
        'DROP' => 'HYLKÄÄ',
        'EXPAND' => 'LAAJENNA',
        'FILTER' => 'SUODATA',
        'FORMULATEXT' => 'KAAVA.TEKSTI',
        'GETPIVOTDATA' => 'NOUDA.PIVOT.TIEDOT',
        'HLOOKUP' => 'VHAKU',
        'HSTACK' => 'HPINO',
        'HYPERLINK' => 'HYPERLINKKI',
        'INDEX' => 'INDEKSI',
        'INDIRECT' => 'EPÄSUORA',
        'LOOKUP' => 'HAKU',
        'MATCH' => 'VASTINE',
        'OFFSET' => 'SIIRTYMÄ',
        'ROW' => 'RIVI',
        'ROWS' => 'RIVIT',
        'SORT' => 'LAJITTELE',
        'SORTBY' => 'LAJITTELE.ARVOJEN.PERUSTEELLA',
        'TAKE' => 'OTA',
        'TOCOL' => 'SARAKKEESEEN',
        'TOROW' => 'RIVIIN',
        'TRANSPOSE' => 'TRANSPONOI',
        'UNIQUE' => 'AINUTKERTAISET.ARVOT',
        'VLOOKUP' => 'PHAKU',
        'VSTACK' => 'VPINO',
        'WRAPCOLS' => 'RIVITÄSAR',
        'WRAPROWS' => 'RIVITÄRIV',
        'XLOOKUP' => 'XHAKU',
        'XMATCH' => 'XVASTINE',

        // Matemaattiset ja trigonometriset funktiot (Math and trigonometry functions)
        'ABS' => 'ITSEISARVO',
        'AGGREGATE' => 'KOOSTE',
        'ARABIC' => 'ARABIA',
        'BASE' => 'PERUS',
        'CEILING.MATH' => 'PYÖRISTÄ.KERR.YLÖS.MATEMAATTINEN',
        'CEILING.PRECISE' => 'PYÖRISTÄ.KERR.YLÖS.TARKKA',
        'COMBIN' => 'KOMBINAATIO',
        'COMBINA' => 'KOMBINAATIOA',
        'CSC' => 'KOSEK',
        'CSCH' => 'KOSEKH',
        'DECIMAL' => 'DESIMAALI',
        'DEGREES' => 'ASTEET',
        'ECMA.CEILING' => 'ECMA.PYÖRISTÄ.KERR.YLÖS',
        'EVEN' => 'PARILLINEN',
        'EXP' => 'EKSPONENTTI',
        'FACT' => 'KERTOMA',
        'FACTDOUBLE' => 'KERTOMA.OSA',
        'FLOOR.MATH' => 'PYÖRISTÄ.KERR.ALAS.MATEMAATTINEN',
        'FLOOR.PRECISE' => 'PYÖRISTÄ.KERR.ALAS.TARKKA',
        'GCD' => 'SUURIN.YHT.TEKIJÄ',
        'INT' => 'KOKONAISLUKU',
        'ISO.CEILING' => 'ISO.PYÖRISTÄ.KERR.YLÖS',
        'LCM' => 'PIENIN.YHT.JAETTAVA',
        'LN' => 'LUONNLOG',
        'MINVERSE' => 'MKÄÄNTEINEN',
        'MMULT' => 'MKERRO',
        'MOD' => 'JAKOJ',
        'MROUND' => 'PYÖRISTÄ.KERR',
        'MULTINOMIAL' => 'MULTINOMI',
        'MUNIT' => 'YKSIKKÖM',
        'ODD' => 'PARITON',
        'PI' => 'PII',
        'POWER' => 'POTENSSI',
        'PRODUCT' => 'TULO',
        'QUOTIENT' => 'OSAMÄÄRÄ',
        'RADIANS' => 'RADIAANIT',
        'RAND' => 'SATUNNAISLUKU',
        'RANDARRAY' => 'SATUNN.MATRIISI',
        'RANDBETWEEN' => 'SATUNNAISLUKU.VÄLILTÄ',
        'ROUND' => 'PYÖRISTÄ',
        'ROUNDBAHTDOWN' => 'PYÖRISTÄ.BAHT.ALAS',
        'ROUNDBAHTUP' => 'PYÖRISTÄ.BAHT.YLÖS',
        'ROUNDDOWN' => 'PYÖRISTÄ.DES.ALAS',
        'ROUNDUP' => 'PYÖRISTÄ.DES.YLÖS',
        'SEC' => 'SEK',
        'SECH' => 'SEKH',
        'SEQUENCE' => 'JONO',
        'SERIESSUM' => 'SARJA.SUMMA',
        'SIGN' => 'ETUMERKKI',
        'SQRT' => 'NELIÖJUURI',
        'SQRTPI' => 'NELIÖJUURI.PII',
        'SUBTOTAL' => 'VÄLISUMMA',
        'SUM' => 'SUMMA',
        'SUMIF' => 'SUMMA.JOS',
        'SUMIFS' => 'SUMMA.JOS.JOUKKO',
        'SUMPRODUCT' => 'TULOJEN.SUMMA',
        'SUMSQ' => 'NELIÖSUMMA',
        'SUMX2MY2' => 'NELIÖSUMMIEN.EROTUS',
        'SUMX2PY2' => 'NELIÖSUMMIEN.SUMMA',
        'SUMXMY2' => 'EROTUSTEN.NELIÖSUMMA',
        'TRUNC' => 'KATKAISE',

        // Tilastolliset funktiot (Statistical functions)
        'AVEDEV' => 'KESKIPOIKKEAMA',
        'AVERAGE' => 'KESKIARVO',
        'AVERAGEA' => 'KESKIARVOA',
        'AVERAGEIF' => 'KESKIARVO.JOS',
        'AVERAGEIFS' => 'KESKIARVO.JOS.JOUKKO',
        'BETA.DIST' => 'BEETA.JAKAUMA',
        'BETA.INV' => 'BEETA.KÄÄNT',
        'BINOM.DIST' => 'BINOMI.JAKAUMA',
        'BINOM.DIST.RANGE' => 'BINOMI.JAKAUMA.ALUE',
        'BINOM.INV' => 'BINOMIJAKAUMA.KÄÄNT',
        'CHISQ.DIST' => 'CHINELIÖ.JAKAUMA',
        'CHISQ.DIST.RT' => 'CHINELIÖ.JAKAUMA.OH',
        'CHISQ.INV' => 'CHINELIÖ.KÄÄNT',
        'CHISQ.INV.RT' => 'CHINELIÖ.KÄÄNT.OH',
        'CHISQ.TEST' => 'CHINELIÖ.TESTI',
        'CONFIDENCE.NORM' => 'LUOTTAMUSVÄLI.NORM',
        'CONFIDENCE.T' => 'LUOTTAMUSVÄLI.T',
        'CORREL' => 'KORRELAATIO',
        'COUNT' => 'LASKE',
        'COUNTA' => 'LASKE.A',
        'COUNTBLANK' => 'LASKE.TYHJÄT',
        'COUNTIF' => 'LASKE.JOS',
        'COUNTIFS' => 'LASKE.JOS.JOUKKO',
        'COVARIANCE.P' => 'KOVARIANSSI.P',
        'COVARIANCE.S' => 'KOVARIANSSI.S',
        'DEVSQ' => 'OIKAISTU.NELIÖSUMMA',
        'EXPON.DIST' => 'EKSPONENTIAALI.JAKAUMA',
        'F.DIST' => 'F.JAKAUMA',
        'F.DIST.RT' => 'F.JAKAUMA.OH',
        'F.INV' => 'F.KÄÄNT',
        'F.INV.RT' => 'F.KÄÄNT.OH',
        'F.TEST' => 'F.TESTI',
        'FISHERINV' => 'FISHER.KÄÄNT',
        'FORECAST.ETS' => 'ENNUSTE.ETS',
        'FORECAST.ETS.CONFINT' => 'ENNUSTE.ETS.CONFINT',
        'FORECAST.ETS.SEASONALITY' => 'ENNUSTE.ETS.KAUSIVAIHTELU',
        'FORECAST.ETS.STAT' => 'ENNUSTE.ETS.STAT',
        'FORECAST.LINEAR' => 'ENNUSTE.LINEAARINEN',
        'FREQUENCY' => 'TAAJUUS',
        'GAMMA.DIST' => 'GAMMA.JAKAUMA',
        'GAMMA.INV' => 'GAMMA.JAKAUMA.KÄÄNT',
        'GAMMALN.PRECISE' => 'GAMMALN.TARKKA',
        'GEOMEAN' => 'KESKIARVO.GEOM',
        'GROWTH' => 'KASVU',
        'HARMEAN' => 'KESKIARVO.HARM',
        'HYPGEOM.DIST' => 'HYPERGEOM_JAKAUMA',
        'INTERCEPT' => 'LEIKKAUSPISTE',
        'LARGE' => 'SUURI',
        'LINEST' => 'LINREGR',
        'LOGEST' => 'LOGREGR',
        'LOGNORM.DIST' => 'LOGNORM_JAKAUMA',
        'LOGNORM.INV' => 'LOGNORM.KÄÄNT',
        'MAX' => 'MAKS',
        'MAXA' => 'MAKSA',
        'MAXIFS' => 'MAKS.JOS.JOUKKO',
        'MEDIAN' => 'MEDIAANI',
        'MINIFS' => 'MIN.JOS.JOUKKO',
        'MODE.MULT' => 'MOODI.USEA',
        'MODE.SNGL' => 'MOODI.YKSI',
        'NEGBINOM.DIST' => 'BINOMI.JAKAUMA.NEG',
        'NORM.DIST' => 'NORMAALI.JAKAUMA',
        'NORM.INV' => 'NORMAALI.JAKAUMA.KÄÄNT',
        'NORM.S.DIST' => 'NORM_JAKAUMA.NORMIT',
        'NORM.S.INV' => 'NORM_JAKAUMA.KÄÄNT',
        'PERCENTILE.EXC' => 'PROSENTTIPISTE.ULK',
        'PERCENTILE.INC' => 'PROSENTTIPISTE.SIS',
        'PERCENTRANK.EXC' => 'PROSENTTIJÄRJESTYS.ULK',
        'PERCENTRANK.INC' => 'PROSENTTIJÄRJESTYS.SIS',
        'PERMUT' => 'PERMUTAATIO',
        'PERMUTATIONA' => 'PERMUTAATIOA',
        'PHI' => 'FII',
        'POISSON.DIST' => 'POISSON.JAKAUMA',
        'PROB' => 'TODENNÄKÖISYYS',
        'QUARTILE.EXC' => 'NELJÄNNES.ULK',
        'QUARTILE.INC' => 'NELJÄNNES.SIS',
        'RANK.AVG' => 'ARVON.MUKAAN.KESKIARVO',
        'RANK.EQ' => 'ARVON.MUKAAN.TASAN',
        'RSQ' => 'PEARSON.NELIÖ',
        'SKEW' => 'JAKAUMAN.VINOUS',
        'SKEW.P' => 'JAKAUMAN.VINOUS.POP',
        'SLOPE' => 'KULMAKERROIN',
        'SMALL' => 'PIENI',
        'STANDARDIZE' => 'NORMITA',
        'STDEV.P' => 'KESKIHAJONTA.P',
        'STDEV.S' => 'KESKIHAJONTA.S',
        'STDEVA' => 'KESKIHAJONTAA',
        'STDEVPA' => 'KESKIHAJONTAPA',
        'STEYX' => 'KESKIVIRHE',
        'T.DIST' => 'T.JAKAUMA',
        'T.DIST.2T' => 'T.JAKAUMA.2S',
        'T.DIST.RT' => 'T.JAKAUMA.OH',
        'T.INV' => 'T.KÄÄNT',
        'T.INV.2T' => 'T.KÄÄNT.2S',
        'T.TEST' => 'T.TESTI',
        'TREND' => 'SUUNTAUS',
        'TRIMMEAN' => 'KESKIARVO.TASATTU',
        'WEIBULL.DIST' => 'WEIBULL.JAKAUMA',
        'Z.TEST' => 'Z.TESTI',

        // Tekstifunktiot (Text functions)
        'ARRAYTOTEXT' => 'MATRIISI.TEKSTIKSI',
        'BAHTTEXT' => 'BAHTTEKSTI',
        'CHAR' => 'MERKKI',
        'CLEAN' => 'SIIVOA',
        'CODE' => 'KOODI',
        'CONCAT' => 'YHDISTÄ',
        'DOLLAR' => 'VALUUTTA',
        'EXACT' => 'VERTAA',
        'FIND' => 'ETSI',
        'FINDB' => 'ETSIB',
        'FIXED' => 'KIINTEÄ',
        'ISTHAIDIGIT' => 'ON.THAI.NUMERO',
        'LEFT' => 'VASEN',
        'LEFTB' => 'VASENB',
        'LEN' => 'PITUUS',
        'LENB' => 'PITUUSB',
        'LOWER' => 'PIENET',
        'MID' => 'POIMI.TEKSTI',
        'MIDB' => 'POIMI.TEKSTIB',
        'NUMBERVALUE' => 'NROARVO',
        'PHONETIC' => 'FONEETTINEN',
        'PROPER' => 'ERISNIMI',
        'REPLACE' => 'KORVAA',
        'REPLACEB' => 'KORVAAB',
        'REPT' => 'TOISTA',
        'RIGHT' => 'OIKEA',
        'RIGHTB' => 'OIKEAB',
        'SEARCH' => 'KÄY.LÄPI',
        'SEARCHB' => 'KÄY.LÄPIB',
        'SUBSTITUTE' => 'VAIHDA',
        'TEXT' => 'TEKSTI',
        'TEXTAFTER' => 'TEKSTI.JÄLKEEN',
        'TEXTBEFORE' => 'TEKSTI.ENNEN',
        'TEXTJOIN' => 'TEKSTI.YHDISTÄ',
        'TEXTSPLIT' => 'TEKSTIJAKO',
        'THAIDIGIT' => 'THAI.NUMERO',
        'THAINUMSOUND' => 'THAI.LUKU.ÄÄNI',
        'THAINUMSTRING' => 'THAI.LUKU.MERKKIJONO',
        'THAISTRINGLENGTH' => 'THAI.MERKKIJONON.PITUUS',
        'TRIM' => 'POISTA.VÄLIT',
        'UNICHAR' => 'UNICODEMERKKI',
        'UPPER' => 'ISOT',
        'VALUE' => 'ARVO',
        'VALUETOTEXT' => 'ARVO.TEKSTIKSI',

        // Web-toimintofunktiot (Web functions)
        'ENCODEURL' => 'URLKOODAUS',
        'FILTERXML' => 'SUODATA.XML',
        'WEBSERVICE' => 'VERKKOPALVELU',

        // Yhteensopivuusfunktiot (Compatibility functions)
        'BETADIST' => 'BEETAJAKAUMA',
        'BETAINV' => 'BEETAJAKAUMA.KÄÄNT',
        'BINOMDIST' => 'BINOMIJAKAUMA',
        'CEILING' => 'PYÖRISTÄ.KERR.YLÖS',
        'CHIDIST' => 'CHIJAKAUMA',
        'CHIINV' => 'CHIJAKAUMA.KÄÄNT',
        'CHITEST' => 'CHITESTI',
        'CONCATENATE' => 'KETJUTA',
        'CONFIDENCE' => 'LUOTTAMUSVÄLI',
        'COVAR' => 'KOVARIANSSI',
        'CRITBINOM' => 'BINOMIJAKAUMA.KRIT',
        'EXPONDIST' => 'EKSPONENTIAALIJAKAUMA',
        'FDIST' => 'FJAKAUMA',
        'FINV' => 'FJAKAUMA.KÄÄNT',
        'FLOOR' => 'PYÖRISTÄ.KERR.ALAS',
        'FORECAST' => 'ENNUSTE',
        'FTEST' => 'FTESTI',
        'GAMMADIST' => 'GAMMAJAKAUMA',
        'GAMMAINV' => 'GAMMAJAKAUMA.KÄÄNT',
        'HYPGEOMDIST' => 'HYPERGEOM.JAKAUMA',
        'LOGINV' => 'LOGNORM.JAKAUMA.KÄÄNT',
        'LOGNORMDIST' => 'LOGNORM.JAKAUMA',
        'MODE' => 'MOODI',
        'NEGBINOMDIST' => 'BINOMIJAKAUMA.NEG',
        'NORMDIST' => 'NORM.JAKAUMA',
        'NORMINV' => 'NORM.JAKAUMA.KÄÄNT',
        'NORMSDIST' => 'NORM.JAKAUMA.NORMIT',
        'NORMSINV' => 'NORM.JAKAUMA.NORMIT.KÄÄNT',
        'PERCENTILE' => 'PROSENTTIPISTE',
        'PERCENTRANK' => 'PROSENTTIJÄRJESTYS',
        'QUARTILE' => 'NELJÄNNES',
        'RANK' => 'ARVON.MUKAAN',
        'STDEV' => 'KESKIHAJONTA',
        'STDEVP' => 'KESKIHAJONTAP',
        'TDIST' => 'TJAKAUMA',
        'TINV' => 'TJAKAUMA.KÄÄNT',
        'TTEST' => 'TTESTI',
        'ZTEST' => 'ZTESTI',

        // Liitännäinen ja automatisointi (Add-in and automation)
        'CALL' => 'KUTSU',
        'REGISTER.ID' => 'REKISTERI.TUNNUS',
    ];
}
