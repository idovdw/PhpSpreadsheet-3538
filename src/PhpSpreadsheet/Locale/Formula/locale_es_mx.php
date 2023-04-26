<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;


/**
 * Locale class for Español (Spanish)
 */
class locale_es_mx extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = "es-mx";

    /**
     * @var string TRUE/FALSE/NULL representation
     */
    protected $aBooleanRepresentation = ["TRUE" => "VERDADERO", "FALSE" => "FALSO", "NULL" => "NULL"];

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = array(
        "NULL" => "#NULO!",
        "DIV0" => "#DIV/0!",
        "VALUE" => "#VALOR!",
        "REF" => "#REF!",
        "NAME" => "#NOMBRE?",
        "NUM" => "#N¡NUM!",
        "NA" => "#N/D",
        "GETTINGDATA" => "#OBTENIENDO_DATOS!",
        "SPILL" => "#¡DESBORDAMIENTO!",
        "CONNECT" => "#¡CONECTAR!",
        "BLOCKED" => "#¡BLOQUEADO!",
        "UNKNOWN" => "#¡DESCONOCIDO!",
        "FIELD" => "#¡CAMPO!",
        "CALC" => "#¡CALC!",
        "EXTERNAL" => "#¡EXTERNO!",
    );

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $functions_legacy = array(
        // Funciones de fecha y hora (Date and time functions)
        "DATEDIF" => "SIFECHA",

        // Funciones financieras (Financial functions)
        "STOCKHISTORY" => "HISTORIALCOTIZACIONES",

        // Funciones lógicas (Logical functions)
        "MAKEARRAY" => "ARCHIVOMAKEARRAY",

        // Funciones de búsqueda y referencia (Lookup and reference functions)
        "*RC" => "RC",
        "CHOOSECOLS" => "ELEGIRCOLS",
        "CHOOSEROWS" => "ELEGIRFILAS",
        "DROP" => "EXCLUIR",
        "EXPAND" => "EXPANDIR",
        "FILTER" => "FILTRAR",
        "HSTACK" => "APILARH",
        "SORT" => "ORDENAR",
        "SORTBY" => "ORDENARPOR",
        "TAKE" => "TOMAR",
        "TOCOL" => "ENCOL",
        "TOROW" => "ENFILA",
        "UNIQUE" => "UNICOS",
        "VSTACK" => "APILARV",
        "WRAPCOLS" => "AJUSTARCOLS",
        "WRAPROWS" => "AJUSTARFILAS",
        "XLOOKUP" => "BUSCARX",
        "XMATCH" => "COINCIDIRX",

        // Funciones matemáticas y trigonométricas (Math and trigonometry functions)
        "RANDARRAY" => "MATRIZALEAT",
        "SEQUENCE" => "SECUENCIA",

        // Funciones de texto (Text functions)
        "ARRAYTOTEXT" => "MATRIZATEXTO",
        "FINDB" => "ENCONTRARB",
        "LEFTB" => "IZQUIERDAB",
        "LENB" => "LARGOB",
        "MIDB" => "EXTRAEB",
        "REPLACEB" => "REEMPLAZARB",
        "RIGHTB" => "DERECHAB",
        "SEARCHB" => "HALLARB",
        "TEXTAFTER" => "TEXTODESPUES",
        "TEXTBEFORE" => "TEXTOANTES",
        "TEXTSPLIT" => "DIVIDIRTEXTO",
        "VALUETOTEXT" => "VALORATEXTO",
    );

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = array(
        // Funciones de cubo (Cube functions)
        "CUBEKPIMEMBER" => "MIEMBROKPICUBO",
        "CUBEMEMBER" => "MIEMBROCUBO",
        "CUBEMEMBERPROPERTY" => "PROPIEDADMIEMBROCUBO",
        "CUBERANKEDMEMBER" => "MIEMBRORANGOCUBO",
        "CUBESET" => "CONJUNTOCUBO",
        "CUBESETCOUNT" => "RECUENTOCONJUNTOCUBO",
        "CUBEVALUE" => "VALORCUBO",

        // Funciones de base de datos (Database functions)
        "DAVERAGE" => "BDPROMEDIO",
        "DCOUNT" => "BDCONTAR",
        "DCOUNTA" => "BDCONTARA",
        "DGET" => "BDEXTRAER",
        "DMAX" => "BDMAX",
        "DMIN" => "BDMIN",
        "DPRODUCT" => "BDPRODUCTO",
        "DSTDEV" => "BDDESVEST",
        "DSTDEVP" => "BDDESVESTP",
        "DSUM" => "BDSUMA",
        "DVAR" => "BDVAR",
        "DVARP" => "BDVARP",

        // Funciones de fecha y hora (Date and time functions)
        "DATE" => "FECHA",
        "DATEDIF" => "SIFECHA",
        "DATESTRING" => "CADENA.FECHA",
        "DATEVALUE" => "FECHANUMERO",
        "DAY" => "DIA",
        "DAYS" => "DIAS",
        "DAYS360" => "DIAS360",
        "EDATE" => "FECHA.MES",
        "EOMONTH" => "FIN.MES",
        "HOUR" => "HORA",
        "ISOWEEKNUM" => "ISO.NUM.DE.SEMANA",
        "MINUTE" => "MINUTO",
        "MONTH" => "MES",
        "NETWORKDAYS" => "DIAS.LAB",
        "NETWORKDAYS.INTL" => "DIAS.LAB.INTL",
        "NOW" => "AHORA",
        "SECOND" => "SEGUNDO",
        "THAIDAYOFWEEK" => "DIASEMTAI",
        "THAIMONTHOFYEAR" => "MESAÑOTAI",
        "THAIYEAR" => "AÑOTAI",
        "TIME" => "NSHORA",
        "TIMEVALUE" => "HORANUMERO",
        "TODAY" => "HOY",
        "WEEKDAY" => "DIASEM",
        "WEEKNUM" => "NUM.DE.SEMANA",
        "WORKDAY" => "DIA.LAB",
        "WORKDAY.INTL" => "DIA.LAB.INTL",
        "YEAR" => "AÑO",
        "YEARFRAC" => "FRAC.AÑO",

        // Funciones de ingeniería (Engineering functions)
        "BIN2DEC" => "BIN.A.DEC",
        "BIN2HEX" => "BIN.A.HEX",
        "BIN2OCT" => "BIN.A.OCT",
        "BITAND" => "BIT.Y",
        "BITLSHIFT" => "BIT.DESPLIZQDA",
        "BITOR" => "BIT.O",
        "BITRSHIFT" => "BIT.DESPLDCHA",
        "BITXOR" => "BIT.XO",
        "COMPLEX" => "COMPLEJO",
        "CONVERT" => "CONVERTIR",
        "DEC2BIN" => "DEC.A.BIN",
        "DEC2HEX" => "DEC.A.HEX",
        "DEC2OCT" => "DEC.A.OCT",
        "ERF" => "FUN.ERROR",
        "ERF.PRECISE" => "FUN.ERROR.EXACTO",
        "ERFC" => "FUN.ERROR.COMPL",
        "ERFC.PRECISE" => "FUN.ERROR.COMPL.EXACTO",
        "GESTEP" => "MAYOR.O.IGUAL",
        "HEX2BIN" => "HEX.A.BIN",
        "HEX2DEC" => "HEX.A.DEC",
        "HEX2OCT" => "HEX.A.OCT",
        "IMABS" => "IM.ABS",
        "IMAGINARY" => "IMAGINARIO",
        "IMARGUMENT" => "IM.ANGULO",
        "IMCONJUGATE" => "IM.CONJUGADA",
        "IMCOS" => "IM.COS",
        "IMCOSH" => "IM.COSH",
        "IMCOT" => "IM.COT",
        "IMCSC" => "IM.CSC",
        "IMCSCH" => "IM.CSCH",
        "IMDIV" => "IM.DIV",
        "IMEXP" => "IM.EXP",
        "IMLN" => "IM.LN",
        "IMLOG10" => "IM.LOG10",
        "IMLOG2" => "IM.LOG2",
        "IMPOWER" => "IM.POT",
        "IMPRODUCT" => "IM.PRODUCT",
        "IMREAL" => "IM.REAL",
        "IMSEC" => "IM.SEC",
        "IMSECH" => "IM.SECH",
        "IMSIN" => "IM.SENO",
        "IMSINH" => "IM.SENOH",
        "IMSQRT" => "IM.RAIZ2",
        "IMSUB" => "IM.SUSTR",
        "IMSUM" => "IM.SUM",
        "IMTAN" => "IM.TAN",
        "OCT2BIN" => "OCT.A.BIN",
        "OCT2DEC" => "OCT.A.DEC",
        "OCT2HEX" => "OCT.A.HEX",

        // Funciones financieras (Financial functions)
        "ACCRINT" => "INT.ACUM",
        "ACCRINTM" => "INT.ACUM.V",
        "AMORDEGRC" => "AMORTIZ.PROGRE",
        "AMORLINC" => "AMORTIZ.LIN",
        "COUPDAYBS" => "CUPON.DIAS.L1",
        "COUPDAYS" => "CUPON.DIAS",
        "COUPDAYSNC" => "CUPON.DIAS.L2",
        "COUPNCD" => "CUPON.FECHA.L2",
        "COUPNUM" => "CUPON.NUM",
        "COUPPCD" => "CUPON.FECHA.L1",
        "CUMIPMT" => "PAGO.INT.ENTRE",
        "CUMPRINC" => "PAGO.PRINC.ENTRE",
        "DISC" => "TASA.DESC",
        "DOLLARDE" => "MONEDA.DEC",
        "DOLLARFR" => "MONEDA.FRAC",
        "DURATION" => "DURACION",
        "EFFECT" => "INT.EFECTIVO",
        "FV" => "VF",
        "FVSCHEDULE" => "VF.PLAN",
        "INTRATE" => "TASA.INT",
        "IPMT" => "PAGOINT",
        "IRR" => "TIR",
        "ISPMT" => "INT.PAGO.DIR",
        "MDURATION" => "DURACION.MODIF",
        "MIRR" => "TIRM",
        "NOMINAL" => "TASA.NOMINAL",
        "NPV" => "VNA",
        "ODDFPRICE" => "PRECIO.PER.IRREGULAR.1",
        "ODDFYIELD" => "RENDTO.PER.IRREGULAR.1",
        "ODDLPRICE" => "PRECIO.PER.IRREGULAR.2",
        "ODDLYIELD" => "RENDTO.PER.IRREGULAR.2",
        "PDURATION" => "P.DURACION",
        "PMT" => "PAGO",
        "PPMT" => "PAGOPRIN",
        "PRICE" => "PRECIO",
        "PRICEDISC" => "PRECIO.DESCUENTO",
        "PRICEMAT" => "PRECIO.VENCIMIENTO",
        "PV" => "VA",
        "RATE" => "TASA",
        "RECEIVED" => "CANTIDAD.RECIBIDA",
        "STOCKHISTORY" => "HISTORIALCOTIZACIONES",
        "TBILLEQ" => "LETRA.DE.TEST.EQV.A.BONO",
        "TBILLPRICE" => "LETRA.DE.TES.PRECIO",
        "TBILLYIELD" => "LETRA.DE.TES.RENDTO",
        "VDB" => "DVS",
        "XIRR" => "TIR.NO.PER",
        "XNPV" => "VNA.NO.PER",
        "YIELD" => "RENDTO",
        "YIELDDISC" => "RENDTO.DESC",
        "YIELDMAT" => "RENDTO.VENCTO",

        // Funciones de información (Information functions)
        "CELL" => "CELDA",
        "ERROR.TYPE" => "TIPO.DE.ERROR",
        "ISBLANK" => "ESBLANCO",
        "ISERR" => "ESERR",
        "ISERROR" => "ESERROR",
        "ISEVEN" => "ES.PAR",
        "ISFORMULA" => "ESFORMULA",
        "ISLOGICAL" => "ESLOGICO",
        "ISNA" => "ESNOD",
        "ISNONTEXT" => "ESNOTEXTO",
        "ISNUMBER" => "ESNUMERO",
        "ISODD" => "ES.IMPAR",
        "ISREF" => "ESREF",
        "ISTEXT" => "ESTEXTO",
        "NA" => "NOD",
        "TYPE" => "TIPO",

        // Funciones lógicas (Logical functions)
        "AND" => "Y",
        "IF" => "SI",
        "IFERROR" => "SI.ERROR",
        "IFNA" => "SI.ND",
        "IFS" => "SI.CONJUNTO",
        "MAKEARRAY" => "ARCHIVOMAKEARRAY",
        "NOT" => "NO",
        "OR" => "O",
        "SWITCH" => "CAMBIAR",
        "XOR" => "XO",

        // Funciones de búsqueda y referencia (Lookup and reference functions)
        "*RC" => "FC",
        "ADDRESS" => "DIRECCIÓN",
        "CHOOSE" => "ELEGIR",
        "CHOOSECOLS" => "ELEGIRCOLS",
        "CHOOSEROWS" => "ELEGIRFILAS",
        "COLUMN" => "COLUMNA",
        "COLUMNS" => "COLUMNAS",
        "DROP" => "EXCLUIR",
        "EXPAND" => "EXPANDIR",
        "FILTER" => "FILTRAR",
        "GETPIVOTDATA" => "IMPORTARDATOSDINAMICOS",
        "HLOOKUP" => "BUSCARH",
        "HSTACK" => "APILARH",
        "HYPERLINK" => "HIPERVINCULO",
        "INDEX" => "INDICE",
        "INDIRECT" => "INDIRECTO",
        "LOOKUP" => "BUSCAR",
        "MATCH" => "COINCIDIR",
        "OFFSET" => "DESREF",
        "ROW" => "FILA",
        "ROWS" => "FILAS",
        "RTD" => "RDTR",
        "SORT" => "ORDENAR",
        "SORTBY" => "ORDENARPOR",
        "TAKE" => "TOMAR",
        "TOCOL" => "ENCOL",
        "TOROW" => "ENFILA",
        "TRANSPOSE" => "TRANSPONER",
        "UNIQUE" => "UNICOS",
        "VLOOKUP" => "BUSCARV",
        "VSTACK" => "APILARV",
        "WRAPCOLS" => "AJUSTARCOLS",
        "WRAPROWS" => "AJUSTARFILAS",
        "XLOOKUP" => "BUSCARX",
        "XMATCH" => "COINCIDIRX",

        // Funciones matemáticas y trigonométricas (Math and trigonometry functions)
        "AGGREGATE" => "AGREGAR",
        "ARABIC" => "NUMERO.ARABE",
        "ASIN" => "ASENO",
        "ASINH" => "ASENOH",
        "CEILING.MATH" => "MULTIPLO.SUPERIOR.MAT",
        "CEILING.PRECISE" => "MULTIPLO.SUPERIOR.EXACTO",
        "COMBIN" => "COMBINAT",
        "DECIMAL" => "CONV.DECIMAL",
        "DEGREES" => "GRADOS",
        "ECMA.CEILING" => "MULTIPLO.SUPERIOR.ECMA",
        "EVEN" => "REDONDEA.PAR",
        "FACTDOUBLE" => "FACT.DOBLE",
        "FLOOR.MATH" => "MULTIPLO.INFERIOR.MAT",
        "FLOOR.PRECISE" => "MULTIPLO.INFERIOR.EXACTO",
        "GCD" => "M.C.D",
        "INT" => "ENTERO",
        "ISO.CEILING" => "MULTIPLO.SUPERIOR.ISO",
        "LCM" => "M.C.M",
        "MINVERSE" => "MINVERSA",
        "MOD" => "RESIDUO",
        "MROUND" => "REDOND.MULT",
        "MUNIT" => "M.UNIDAD",
        "ODD" => "REDONDEA.IMPAR",
        "POWER" => "POTENCIA",
        "PRODUCT" => "PRODUCTO",
        "QUOTIENT" => "COCIENTE",
        "RADIANS" => "RADIANES",
        "RAND" => "ALEATORIO",
        "RANDARRAY" => "MATRIZALEAT",
        "RANDBETWEEN" => "ALEATORIO.ENTRE",
        "ROMAN" => "NUMERO.ROMANO",
        "ROUND" => "REDONDEAR",
        "ROUNDBAHTDOWN" => "REDONDEAR.BAHT.MAS",
        "ROUNDBAHTUP" => "REDONDEAR.BAHT.MENOS",
        "ROUNDDOWN" => "REDONDEAR.MENOS",
        "ROUNDUP" => "REDONDEAR.MAS",
        "SEQUENCE" => "SECUENCIA",
        "SERIESSUM" => "SUMA.SERIES",
        "SIGN" => "SIGNO",
        "SIN" => "SENO",
        "SINH" => "SENOH",
        "SQRT" => "RAIZ",
        "SQRTPI" => "RAIZ2PI",
        "SUBTOTAL" => "SUBTOTALES",
        "SUM" => "SUMA",
        "SUMIF" => "SUMAR.SI",
        "SUMIFS" => "SUMAR.SI.CONJUNTO",
        "SUMPRODUCT" => "SUMAPRODUCTO",
        "SUMSQ" => "SUMA.CUADRADOS",
        "SUMX2MY2" => "SUMAX2MENOSY2",
        "SUMX2PY2" => "SUMAX2MASY2",
        "SUMXMY2" => "SUMAXMENOSY2",
        "TRUNC" => "TRUNCAR",

        // Funciones estadísticas (Statistical functions)
        "AVEDEV" => "DESVPROM",
        "AVERAGE" => "PROMEDIO",
        "AVERAGEA" => "PROMEDIOA",
        "AVERAGEIF" => "PROMEDIO.SI",
        "AVERAGEIFS" => "PROMEDIO.SI.CONJUNTO",
        "BETA.DIST" => "DISTR.BETA.N",
        "BETA.INV" => "INV.BETA.N",
        "BINOM.DIST" => "DISTR.BINOM.N",
        "BINOM.DIST.RANGE" => "DISTR.BINOM.SERIE",
        "BINOM.INV" => "INV.BINOM",
        "CHISQ.DIST" => "DISTR.CHICUAD",
        "CHISQ.DIST.RT" => "DISTR.CHICUAD.CD",
        "CHISQ.INV" => "INV.CHICUAD",
        "CHISQ.INV.RT" => "INV.CHICUAD.CD",
        "CHISQ.TEST" => "PRUEBA.CHICUAD",
        "CONFIDENCE.NORM" => "INTERVALO.CONFIANZA.NORM",
        "CONFIDENCE.T" => "INTERVALO.CONFIANZA.T",
        "CORREL" => "COEF.DE.CORREL",
        "COUNT" => "CONTAR",
        "COUNTA" => "CONTARA",
        "COUNTBLANK" => "CONTAR.BLANCO",
        "COUNTIF" => "CONTAR.SI",
        "COUNTIFS" => "CONTAR.SI.CONJUNTO",
        "COVARIANCE.S" => "COVARIANZA.M",
        "DEVSQ" => "DESVIA2",
        "EXPON.DIST" => "DISTR.EXP.N",
        "F.DIST" => "DISTR.F.N",
        "F.DIST.RT" => "DISTR.F.CD",
        "F.INV" => "INV.F",
        "F.INV.RT" => "INV.F.CD",
        "F.TEST" => "PRUEBA.F.N",
        "FISHERINV" => "PRUEBA.FISHER.INV",
        "FORECAST.ETS.SEASONALITY" => "PRONOSTICO.ETS.ESTACIONALIDAD",
        "FREQUENCY" => "FRECUENCIA",
        "GAMMA.DIST" => "DISTR.GAMMA.N",
        "GAMMA.INV" => "INV.GAMMA",
        "GAMMALN" => "GAMMA.LN",
        "GAMMALN.PRECISE" => "GAMMA.LN.EXACTO",
        "GEOMEAN" => "MEDIA.GEOM",
        "GROWTH" => "CRECIMIENTO",
        "HARMEAN" => "MEDIA.ARMO",
        "HYPGEOM.DIST" => "DISTR.HIPERGEOM.N",
        "INTERCEPT" => "INTERSECCION.EJE",
        "KURT" => "CURTOSIS",
        "LARGE" => "K.ESIMO.MAYOR",
        "LINEST" => "ESTIMACION.LINEAL",
        "LOGEST" => "ESTIMACION.LOGARITMICA",
        "LOGNORM.DIST" => "DISTR.LOGNORM",
        "LOGNORM.INV" => "INV.LOGNORM",
        "MAXIFS" => "MAX.SI.CONJUNTO",
        "MEDIAN" => "MEDIANA",
        "MINIFS" => "MIN.SI.CONJUNTO",
        "MODE.MULT" => "MODA.VARIOS",
        "MODE.SNGL" => "MODA.UNO",
        "NORM.DIST" => "DISTR.NORM.N",
        "NORM.INV" => "INV.NORM",
        "NORM.S.DIST" => "DISTR.NORM.ESTAND.N",
        "NORM.S.INV" => "INV.NORM.ESTAND",
        "PERCENTILE.EXC" => "PERCENTIL.EXC",
        "PERCENTILE.INC" => "PERCENTIL.INC",
        "PERCENTRANK.EXC" => "RANGO.PERCENTIL.EXC",
        "PERCENTRANK.INC" => "RANGO.PERCENTIL.INC",
        "PERMUT" => "PERMUTACIONES",
        "PERMUTATIONA" => "PERMUTACIONES.A",
        "PHI" => "FI",
        "PROB" => "PROBABILIDAD",
        "QUARTILE.EXC" => "CUARTIL.EXC",
        "QUARTILE.INC" => "CUARTIL.INC",
        "RANK.AVG" => "JERARQUIA.MEDIA",
        "RANK.EQ" => "JERARQUIA.EQV",
        "RSQ" => "COEFICIENTE.R2",
        "SKEW" => "COEFICIENTE.ASIMETRIA",
        "SKEW.P" => "COEFICIENTE.ASIMETRIA.P",
        "SLOPE" => "PENDIENTE",
        "SMALL" => "K.ESIMO.MENOR",
        "STDEV.P" => "DESVEST.P",
        "STDEV.S" => "DESVEST.M",
        "STDEVA" => "DESVESTA",
        "STDEVPA" => "DESVESTPA",
        "STEYX" => "ERROR.TIPICO.XY",
        "T.DIST" => "DISTR.T.N",
        "T.DIST.2T" => "DISTR.T.2C",
        "T.DIST.RT" => "DISTR.T.CD",
        "T.INV" => "INV.T",
        "T.INV.2T" => "INV.T.2C",
        "T.TEST" => "PRUEBA.T.N",
        "TREND" => "TENDENCIA",
        "TRIMMEAN" => "MEDIA.ACOTADA",
        "WEIBULL.DIST" => "DISTR.WEIBULL",
        "Z.TEST" => "PRUEBA.Z.N",

        // Funciones de texto (Text functions)
        "ARRAYTOTEXT" => "MATRIZATEXTO",
        "BAHTTEXT" => "TEXTOBAHT",
        "CHAR" => "CARACTER",
        "CLEAN" => "LIMPIAR",
        "CODE" => "CODIGO",
        "EXACT" => "IGUAL",
        "FIND" => "ENCONTRAR",
        "FINDB" => "ENCONTRARB",
        "FIXED" => "DECIMAL",
        "ISTHAIDIGIT" => "ESDIGITOTAI",
        "LEFT" => "IZQUIERDA",
        "LEFTB" => "IZQUIERDAB",
        "LEN" => "LARGO",
        "LENB" => "LARGOB",
        "LOWER" => "MINUSC",
        "MID" => "EXTRAE",
        "MIDB" => "EXTRAEB",
        "NUMBERVALUE" => "VALOR.NUMERO",
        "PHONETIC" => "FONETICO",
        "PROPER" => "NOMPROPIO",
        "REPLACE" => "REEMPLAZAR",
        "REPLACEB" => "REEMPLAZARB",
        "REPT" => "REPETIR",
        "RIGHT" => "DERECHA",
        "RIGHTB" => "DERECHAB",
        "SEARCH" => "HALLAR",
        "SEARCHB" => "HALLARB",
        "SUBSTITUTE" => "SUSTITUIR",
        "TEXT" => "TEXTO",
        "TEXTAFTER" => "TEXTODESPUES",
        "TEXTBEFORE" => "TEXTOANTES",
        "TEXTJOIN" => "UNIRCADENAS",
        "TEXTSPLIT" => "DIVIDIRTEXTO",
        "THAIDIGIT" => "DIGITOTAI",
        "THAINUMSOUND" => "SONNUMTAI",
        "THAINUMSTRING" => "CADENANUMTAI",
        "THAISTRINGLENGTH" => "LONGCADENATAI",
        "TRIM" => "ESPACIOS",
        "UNICHAR" => "UNICAR",
        "UPPER" => "MAYUSC",
        "VALUE" => "VALOR",
        "VALUETOTEXT" => "VALORATEXTO",

        // Funciones web (Web functions)
        "FILTERXML" => "XMLFILTRO",
        "WEBSERVICE" => "SERVICIOWEB",

        // Funciones de compatibilidad (Compatibility functions)
        "BETADIST" => "DISTR.BETA",
        "BETAINV" => "DISTR.BETA.INV",
        "BINOMDIST" => "DISTR.BINOM",
        "CEILING" => "MULTIPLO.SUPERIOR",
        "CHIDIST" => "DISTR.CHI",
        "CHIINV" => "PRUEBA.CHI.INV",
        "CHITEST" => "PRUEBA.CHI",
        "CONCATENATE" => "CONCATENAR",
        "CONFIDENCE" => "INTERVALO.CONFIANZA",
        "CRITBINOM" => "BINOM.CRIT",
        "EXPONDIST" => "DISTR.EXP",
        "FDIST" => "DISTR.F",
        "FINV" => "DISTR.F.INV",
        "FLOOR" => "MULTIPLO.INFERIOR",
        "FORECAST" => "PRONOSTICO",
        "GAMMADIST" => "DISTR.GAMMA",
        "GAMMAINV" => "DISTR.GAMMA.INV",
        "HYPGEOMDIST" => "DISTR.HIPERGEOM",
        "LOGINV" => "DISTR.LOG.INV",
        "LOGNORMDIST" => "DISTR.LOG.NORM",
        "MODE" => "MODA",
        "NORMDIST" => "DISTR.NORM",
        "NORMINV" => "DISTR.NORM.INV",
        "NORMSDIST" => "DISTR.NORM.ESTAND",
        "NORMSINV" => "DISTR.NORM.ESTAND.INV",
        "PERCENTILE" => "PERCENTIL",
        "PERCENTRANK" => "RANGO.PERCENTIL",
        "QUARTILE" => "CUARTIL",
        "RANK" => "JERARQUIA",
        "STDEV" => "DESVEST",
        "STDEVP" => "DESVESTP",
        "TDIST" => "DISTR.T",
        "TINV" => "DISTR.T.INV",
        "TTEST" => "PRUEBA.T",
        "WEIBULL" => "DIST.WEIBULL",
        "ZTEST" => "PRUEBA.Z",
    );

}
