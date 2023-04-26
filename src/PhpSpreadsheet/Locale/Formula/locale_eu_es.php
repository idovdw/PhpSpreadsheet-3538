<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Euskara (Basque)
 */
class locale_eu_es extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "eu-es";

    /**
     * @var string Argument separator
     */
    public $strArgumentSeparator = ";";

    /**
     * @var string TRUE/FALSE/NULL representation
     */
    protected $aBooleanRepresentation = ["TRUE" => "EGIAZKOA", "FALSE" => "FALTSUA", "NULL" => "NULL"];

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NULUA!",
        "DIV0" => "#ZATI/0!",
        "VALUE" => "#BALIOA!",
        "REF" => "#ERREF!",
        "NAME" => "#IZENA?",
        "NUM" => "#ZK!",
        "NA" => "#E/E",
        "GETTINGDATA" => "#DATUAK_LORTZEN!",
        "SPILL" => "#GAINEZKATZEA!",
        "CONNECT" => "#KONEKTATU!",
        "BLOCKED" => "#BLOKEATUTA!",
        "UNKNOWN" => "#UNKNOWN!",
        "FIELD" => "#EREMUA!",
        "CALC" => "#KALKULUA!",
        "EXTERNAL" => "#KANPOKOA!",
    );

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $functions_legacy = array(
        // Data eta ordu funtzioak (Date and time functions)
        "DATEDIF" => "DATADIF",

        // Bilaketa eta erreferentzia funtzioak (Lookup and reference functions)
        "*RC" => "RC",
        "CHOOSECOLS" => "AUKERATUZUTBK",
        "CHOOSEROWS" => "AUKERATUERRENKADAK",
        "DROP" => "BAZTERTU",
        "EXPAND" => "HEDATU",
        "FILTER" => "IRAGAZKIA",
        "HSTACK" => "MULTZOKATUH",
        "SORT" => "ORDENATU",
        "SORTBY" => "ORDENATUHONELA",
        "TAKE" => "HARTU",
        "TOCOL" => "ZUTABERA",
        "TOROW" => "ERRENKADARA",
        "UNIQUE" => "ESKLUSIBOAK",
        "VSTACK" => "MULTZOKATUV",
        "WRAPCOLS" => "BILDUZUTABEAK",
        "WRAPROWS" => "BILDUERRENKADAK",

        // Matematika eta trigonometria funtzioak (Math and trigonometry functions)
        "RANDARRAY" => "AUSAZKOMATRIZE",
        "SEQUENCE" => "SEKUENTZIA",

        // Testu funtzioak (Text functions)
        "FINDB" => "AURKITUB",
        "LEFTB" => "EZKERB",
        "LENB" => "LUZERAB",
        "MIDB" => "ERDIKOAKB",
        "REPLACEB" => "ORDEZTUB",
        "RIGHTB" => "ESKUINB",
        "SEARCHB" => "BILATUB",
        "TEXTAFTER" => "OSTEKOTESTUA",
        "TEXTBEFORE" => "AURREKOTESTUA",
        "TEXTSPLIT" => "ZATITUTESTUA",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Kubo funtzioak (Cube functions)
        "CUBEKPIMEMBER" => "KUBOA.KPI.KIDEA",
        "CUBEMEMBER" => "KUBOA.KIDEA",
        "CUBEMEMBERPROPERTY" => "KUBOAKIDE.PROPIETATEA",
        "CUBERANKEDMEMBER" => "KUBOA.KIDE.SAILKATUA",
        "CUBESET" => "KUBOA.EZARRI",
        "CUBESETCOUNT" => "KUBOA.MULTZOA.ZENBATU",
        "CUBEVALUE" => "KUBOA.BALIOA",

        // Datu-base funtzioak (Database functions)
        "DAVERAGE" => "DB.BATEZBESTEKOA",
        "DCOUNT" => "DB.ZENBATU",
        "DCOUNTA" => "DB.ZENBATU.A",
        "DGET" => "DB.IRAKURRI",
        "DMAX" => "DB.MAX",
        "DMIN" => "DB.MIN",
        "DPRODUCT" => "BD.BIDERKATU",
        "DSTDEV" => "DB.DESB.EST",
        "DSTDEVP" => "DB.DESB.EST.P",
        "DSUM" => "DB.BATU",
        "DVAR" => "DB.BAR",
        "DVARP" => "DB.BAR.P",

        // Data eta ordu funtzioak (Date and time functions)
        "DATE" => "DATA",
        "DATEDIF" => "DATADIF",
        "DATESTRING" => "DATA.KATEA",
        "DATEVALUE" => "DATA.BALIOA",
        "DAY" => "EGUNA",
        "DAYS" => "EGUNAK",
        "DAYS360" => "EGUNAK.360",
        "HOUR" => "ORDUA",
        "MINUTE" => "MINUTUA",
        "MONTH" => "HILABETEA",
        "NETWORKDAYS.INTL" => "LANEGUN.GARBIAK.NART",
        "NOW" => "ORAIN",
        "SECOND" => "SEGUNDOA",
        "THAIDAYOFWEEK" => "THAI.ASTEKO.EGUNA",
        "THAIMONTHOFYEAR" => "THAI.URTEKO.HILABETEA",
        "THAIYEAR" => "THAI.URTEA",
        "TIME" => "ORDUASZ",
        "TIMEVALUE" => "ORDUA.BALIOA",
        "TODAY" => "GAUR",
        "WEEKDAY" => "ASTEKO.EGUNA",
        "WORKDAY.INTL" => "LANEGUNA.NART",
        "YEAR" => "URTEA",

        // Ingeniaritza funtzioak (Engineering functions)
        "CONVERT" => "BIHURTU",
        "ERF.PRECISE" => "ERR.FUNTZ.ZEHATZA",
        "ERFC.PRECISE" => "ERR.FUNTZ.OSOA.ZEHATZA",

        // Finantza funtzioak (Financial functions)
        "DDB" => "AMOR.BEHE.FB",
        "DOLLARDE" => "MONETADE",
        "DOLLARFR" => "MONETAFR",
        "FV" => "ETORKIZUNEKO.BALIOA",
        "IPMT" => "ORD.INTERESA",
        "IRR" => "BET",
        "ISPMT" => "INT.ORDAINK",
        "MIRR" => "BETM",
        "NPER" => "PER.KOP",
        "NPV" => "UBG",
        "PMT" => "ORDAINKETA",
        "PPMT" => "ORD.INB.KAP",
        "PV" => "UNEKO.BALIOA",
        "RATE" => "INTERES.TASA",
        "SLN" => "AMORT.LIN",
        "SYD" => "AMORT.SYD",
        "VDB" => "AMOR.BEHE.FB.A",

        // Informazio funtzioak (Information functions)
        "CELL" => "GELAXKA",
        "ERROR.TYPE" => "ERRORE.MOTA",
        "ISBLANK" => "ZURIUNEA.DA",
        "ISERR" => "ERR.DA",
        "ISERROR" => "ERROREA.DA",
        "ISLOGICAL" => "BAL.LOGIKOA.DA",
        "ISNA" => "EE.DA",
        "ISNONTEXT" => "EZ.DA.TESTUA",
        "ISNUMBER" => "ZENBAKIA.DA",
        "ISREF" => "ERREF.DA",
        "ISTEXT" => "TESTUA.DA",
        "NA" => "EE",
        "SHEET" => "ORRIA",
        "SHEETS" => "ORRIAK",
        "TYPE" => "MOTA",

        // Logika funtzioak (Logical functions)
        "AND" => "ETA",
        "IF" => "BALDIN",
        "IFERROR" => "BALDIN.ERROREA",
        "IFS" => "BALDIN.MULTZOA",
        "NOT" => "EZ",
        "OR" => "EDO",
        "SWITCH" => "ALDATU",

        // Bilaketa eta erreferentzia funtzioak (Lookup and reference functions)
        "*RC" => "EZ",
        "ADDRESS" => "HELBIDEA",
        "AREAS" => "AREAK",
        "CHOOSE" => "AUKERATU",
        "CHOOSECOLS" => "AUKERATUZUTBK",
        "CHOOSEROWS" => "AUKERATUERRENKADAK",
        "COLUMN" => "ZUTABEA",
        "COLUMNS" => "ZUTABEAK",
        "DROP" => "BAZTERTU",
        "EXPAND" => "HEDATU",
        "FILTER" => "IRAGAZKIA",
        "GETPIVOTDATA" => "IRAKURRITAULADINDAT",
        "HLOOKUP" => "BILATU.H",
        "HSTACK" => "MULTZOKATUH",
        "HYPERLINK" => "HIPERESTEKA",
        "INDEX" => "INDIZE",
        "INDIRECT" => "ZEHARKAKOA",
        "LOOKUP" => "BEGIRATU",
        "MATCH" => "BATDATOR",
        "OFFSET" => "BARRUTI.DESPLAZAMENDU",
        "ROW" => "ERRENKADA",
        "ROWS" => "ERRENKADAK",
        "RTD" => "DENB.ERR.DAT",
        "SORT" => "ORDENATU",
        "SORTBY" => "ORDENATUHONELA",
        "TAKE" => "HARTU",
        "TOCOL" => "ZUTABERA",
        "TOROW" => "ERRENKADARA",
        "TRANSPOSE" => "TRUKATU",
        "UNIQUE" => "ESKLUSIBOAK",
        "VLOOKUP" => "BILATU.B",
        "VSTACK" => "MULTZOKATUV",
        "WRAPCOLS" => "BILDUZUTABEAK",
        "WRAPROWS" => "BILDUERRENKADAK",

        // Matematika eta trigonometria funtzioak (Math and trigonometry functions)
        "AGGREGATE" => "AGREGAZIOA",
        "CEILING.PRECISE" => "GOIKO.MULTIPLOA.ZEHATZA",
        "COMBIN" => "KONBINAZIOAK",
        "DEGREES" => "GRADU",
        "ECMA.CEILING" => "ECMA.GOIKO.MULTIPLOA",
        "EVEN" => "BIKOITIA",
        "FACT" => "FAKT",
        "FLOOR.PRECISE" => "BEHEKO.MULTIPLOA.ZEHATZA",
        "INT" => "OSOKOA",
        "ISO.CEILING" => "ISO.GOIKO.MULTIPLOA",
        "MINVERSE" => "MALDERANTZ",
        "MMULT" => "MBIDERK",
        "MOD" => "HONDARRA",
        "ODD" => "BAKOITIA",
        "POWER" => "BERRETURA",
        "PRODUCT" => "BIDERKATU",
        "RADIANS" => "RADIAN",
        "RAND" => "AUSAZKOA",
        "RANDARRAY" => "AUSAZKOMATRIZE",
        "RANDBETWEEN" => "ALEATORIOABITARTEAN",
        "ROMAN" => "ERROMATARRA",
        "ROUND" => "BIRIBILDU",
        "ROUNDBAHTDOWN" => "BIRIB.BAHT.BEHE",
        "ROUNDBAHTUP" => "BIRIB.BAHT.GORA",
        "ROUNDDOWN" => "BIRIBILDU.BEHERA",
        "ROUNDUP" => "BIRIBILDU.GORA",
        "SEQUENCE" => "SEKUENTZIA",
        "SIGN" => "ZEINUA",
        "SQRT" => "ERRO",
        "SUBTOTAL" => "SUBTOTALA",
        "SUM" => "BATU",
        "SUMIF" => "BATU.BALDIN",
        "SUMIFS" => "BATU.BALDIN.MULTZOA",
        "SUMPRODUCT" => "BIDERKAD.BATU",
        "SUMSQ" => "KARR.BATUKETA",
        "SUMX2MY2" => "BATUX2MY2",
        "SUMX2PY2" => "BATUX2PY2",
        "SUMXMY2" => "BATUXMY2",
        "TRUNC" => "TRUNKATU",

        // Estatistika funtzioak (Statistical functions)
        "AVEDEV" => "DESB.BATEZB",
        "AVERAGE" => "BATEZBESTEKOA",
        "AVERAGEA" => "BATEZB.A",
        "AVERAGEIF" => "BATEZBESTEKOA.BALDIN",
        "AVERAGEIFS" => "BATEZBEST.BALDIN.MULTZOA",
        "BETA.DIST" => "BETA.BANAK",
        "BETA.INV" => "BETA.ALD",
        "BINOM.DIST" => "BANAK.BINOM",
        "BINOM.INV" => "BANAK.BINOM.ALD",
        "CHISQ.DIST" => "KHI.KARR.BANAK",
        "CHISQ.DIST.RT" => "KHI.KARR.BANAK.ESK",
        "CHISQ.INV" => "KHI.KARR.ALD",
        "CHISQ.INV.RT" => "KHI.KARR.ALD.ESK",
        "CHISQ.TEST" => "KHI.KARR.TESTA",
        "CONFIDENCE.NORM" => "KONFIANTZA.TARTE.NORM",
        "CONFIDENCE.T" => "KONFIANTZA.TARTE.T",
        "CORREL" => "KORREL",
        "COUNT" => "ZENBATU",
        "COUNTA" => "ZENBATU.A",
        "COUNTBLANK" => "ZENBATU.ZURIAK",
        "COUNTIF" => "ZENBATU.BALDIN",
        "COUNTIFS" => "ZENBATU.BALDIN.MULTZOA",
        "COVARIANCE.P" => "KOBARIANTZA.P",
        "COVARIANCE.S" => "KOBARIANTZA.S",
        "DEVSQ" => "DESB.KARR",
        "EXPON.DIST" => "BANAK.ESPON",
        "F.DIST" => "F.BANAK",
        "F.DIST.RT" => "F.BANAK.ESK",
        "F.INV" => "F.ALD",
        "F.INV.RT" => "F.ALD.ESK",
        "F.TEST" => "F.TESTA",
        "FISHERINV" => "FISHERALD",
        "FREQUENCY" => "MAIZTASUNA",
        "GAMMA.DIST" => "GAMMA.BANAK",
        "GAMMA.INV" => "GAMMA.ALD",
        "GAMMALN" => "GAMMA.LN",
        "GAMMALN.PRECISE" => "GAMMA.LN.ZEHATZA",
        "GEOMEAN" => "BATEZB.GEO",
        "GROWTH" => "HAZKUNDEA",
        "HARMEAN" => "BATEZB.HARM",
        "HYPGEOM.DIST" => "BANAK.HIPERGEOM",
        "INTERCEPT" => "EBAKIDURA",
        "LARGE" => "K.HANDIENA",
        "LINEST" => "ZENBATESPEN.LINEALA",
        "LOGEST" => "ZENBATESPEN.LOGARITMIKOA",
        "LOGNORM.DIST" => "BANAK.NORM.LOG",
        "LOGNORM.INV" => "BANAK.NORM.LOG.ALD",
        "MAXA" => "HANDIEN.A",
        "MAXIFS" => "BALDIN.MULTZOKO.HANDIEN",
        "MEDIAN" => "MEDIANA",
        "MINA" => "TXIKIEN.A",
        "MINIFS" => "BALDIN.MULTZOKO.TXIKIEN",
        "MODE.MULT" => "MODA.ANIZK",
        "MODE.SNGL" => "MODA.BAT",
        "NEGBINOM.DIST" => "BANAK.BINOM.NEG",
        "NORM.DIST" => "BANAK.NORM",
        "NORM.INV" => "BANAK.NORM.ALD",
        "NORM.S.DIST" => "BANAK.NORM.S",
        "NORM.S.INV" => "BANAK.NORM.S.ALD",
        "PERCENTILE.EXC" => "PERTZENTILA.KANPO",
        "PERCENTILE.INC" => "PERTZENTILA.BARNE",
        "PERCENTRANK.EXC" => "PERTZENT.HEINA.KANPO",
        "PERCENTRANK.INC" => "PERTZENT.HEINA.BARNE",
        "POISSON.DIST" => "POISSON.BANAK",
        "QUARTILE.EXC" => "KUARTILA.KANPO",
        "QUARTILE.INC" => "KUARTILA.BARNE",
        "RANK.AVG" => "HEINA.BATEZB",
        "RANK.EQ" => "HEINA.BALIOK",
        "RSQ" => "ERRO.KARR",
        "SKEW" => "ASIM.KOEF",
        "SLOPE" => "MALDA",
        "SMALL" => "K.TXIKIENA",
        "STANDARDIZE" => "NORMALIZATU",
        "STDEV.P" => "DESBEST.P",
        "STDEV.S" => "DESBEST.S",
        "STDEVA" => "DESB.EST.A",
        "STDEVPA" => "DESB.EST.PA",
        "STEYX" => "ERR.EST.YX",
        "T.DIST" => "T.BANAK",
        "T.DIST.2T" => "T.BANAK.2.I",
        "T.DIST.RT" => "T.BANAK.E.I",
        "T.INV" => "T.ALD",
        "T.INV.2T" => "T.ALD.2.I",
        "T.TEST" => "T.TESTA",
        "TREND" => "JOERA",
        "TRIMMEAN" => "BATEZB.MUGAT",
        "VAR.P" => "BAR.P",
        "VAR.S" => "BAR.S",
        "VARA" => "BAR.A",
        "VARPA" => "BAR.PA",
        "WEIBULL.DIST" => "WEIBULL.BANAK",
        "Z.TEST" => "Z.TESTA",

        // Testu funtzioak (Text functions)
        "BAHTTEXT" => "BAHT.TESTUA",
        "CHAR" => "KARAKTERE",
        "CLEAN" => "GARBITU",
        "CODE" => "KODE",
        "CONCAT" => "LOTU",
        "DOLLAR" => "MONETA",
        "EXACT" => "BERDIN",
        "FIND" => "AURKITU",
        "FINDB" => "AURKITUB",
        "FIXED" => "FINKOA",
        "ISTHAIDIGIT" => "THAI.DIGITUA.DA",
        "LEFT" => "EZKER",
        "LEFTB" => "EZKERB",
        "LEN" => "LUZERA",
        "LENB" => "LUZERAB",
        "LOWER" => "MINUSKULA",
        "MID" => "ERDIKOAK",
        "MIDB" => "ERDIKOAKB",
        "PHONETIC" => "FONETIKOA",
        "PROPER" => "BEREZIA",
        "REPLACE" => "ORDEZTU",
        "REPLACEB" => "ORDEZTUB",
        "REPT" => "ERREPIKATU",
        "RIGHT" => "ESKUIN",
        "RIGHTB" => "ESKUINB",
        "SEARCH" => "BILATU",
        "SEARCHB" => "BILATUB",
        "SUBSTITUTE" => "ORDEZKATU",
        "TEXT" => "TESTUA",
        "TEXTAFTER" => "OSTEKOTESTUA",
        "TEXTBEFORE" => "AURREKOTESTUA",
        "TEXTJOIN" => "LOTU.TESTUA",
        "TEXTSPLIT" => "ZATITUTESTUA",
        "THAIDIGIT" => "THAI.DIGITUA",
        "THAINUMSOUND" => "THAI.SOINU.ZENB",
        "THAINUMSTRING" => "THAI.ZENB.KATEA",
        "THAISTRINGLENGTH" => "THAI.KATE.LUZERA",
        "TRIM" => "MOZTU",
        "UPPER" => "MAIUSKULA",
        "VALUE" => "BALIOA",

        // Udalera egokitutako funtzioak (Compatibility functions)
        "BETADIST" => "BETABANAK",
        "BETAINV" => "BETAALD",
        "BINOMDIST" => "BANAKBINOM",
        "CEILING" => "GOIKO.MULTIPLOA",
        "CHIDIST" => "KHI.BANAK",
        "CHIINV" => "KHI.ALD",
        "CHITEST" => "KHI.TESTA",
        "CONCATENATE" => "KATEATU",
        "CONFIDENCE" => "KONFIANTZA.TARTE",
        "COVAR" => "KOBAR",
        "CRITBINOM" => "BINOMIRIZP",
        "EXPONDIST" => "BANAKESPON",
        "FDIST" => "FBANAK",
        "FINV" => "FALD",
        "FLOOR" => "BEHEKO.MULTIPLOA",
        "FORECAST" => "IRAGARRI",
        "FTEST" => "FTESTA",
        "GAMMADIST" => "GAMMABANAK",
        "GAMMAINV" => "GAMMAALD",
        "HYPGEOMDIST" => "BANAKHIPERGEOM",
        "LOGINV" => "LOGALD",
        "LOGNORMDIST" => "BANAKNORMLOG",
        "MODE" => "MODA",
        "NEGBINOMDIST" => "BANAKBINOMNEG",
        "NORMDIST" => "BANAKNORM",
        "NORMINV" => "BANAKNORMALD",
        "NORMSDIST" => "BANAKNORMS",
        "NORMSINV" => "BANAKNORMSALD",
        "PERCENTILE" => "PERTZENTILA",
        "PERCENTRANK" => "PERTZENT.HEINA",
        "QUARTILE" => "KUARTILA",
        "RANK" => "HEINA",
        "STDEV" => "DESB.EST",
        "STDEVP" => "DESB.EST.P",
        "TDIST" => "TBANAK",
        "TINV" => "TALD",
        "TTEST" => "TTESTA",
        "VAR" => "BAR",
        "VARP" => "BARP",
        "ZTEST" => "ZTESTA",
    );

}
