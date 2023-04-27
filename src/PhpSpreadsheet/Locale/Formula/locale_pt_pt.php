<?php

namespace PhpOffice\PhpSpreadsheet\Locale\Formula;

use PhpOffice\PhpSpreadsheet\Locale\FormulaLocale;

/**
 * Locale class for Português (Portuguese).
 */
class locale_pt_pt extends FormulaLocale
{
    /**
     * @var string The locale tag
     */
    protected $tag = 'pt-pt';

    /**
     * @var string International configuration
     */
    protected $aInternational = [
        'xlCountryCode' => 351,
        'xlCountrySetting' => 351,
        'xlDecimalSeparator' => ',',
        'xlThousandsSeparator' => ' ',
        'xlListSeparator' => ';',
        'xlUpperCaseRowLetter' => 'L',
        'xlUpperCaseColumnLetter' => 'C',
        'xlLowerCaseRowLetter' => 'l',
        'xlLowerCaseColumnLetter' => 'c',
        'xlLeftBracket' => '[',
        'xlRightBracket' => ']',
        'xlLeftBrace' => '{',
        'xlRightBrace' => '}',
        'xlColumnSeparator' => '\\',
        'xlRowSeparator' => ';',
        'xlAlternateArraySeparator' => '@',
        'xlDateSeparator' => '/',
        'xlTimeSeparator' => ':',
        'xlYearCode' => 'a',
        'xlMonthCode' => 'm',
        'xlDayCode' => 'd',
        'xlHourCode' => 'h',
        'xlMinuteCode' => 'm',
        'xlSecondCode' => 's',
        'xlCurrencyCode' => "\u{20AC}",
        'xlGeneralFormatName' => 'Estandar',
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
        'TRUE' => 'VERDADEIRO',
        'FALSE' => 'FALSO',
        'NULL' => 'NULL',
    ];

    /**
     * @var array<string,string> Error codes - current
     */
    protected $error_codes_current = [
        'NULL' => '#NULO!',
        'DIV0' => '#DIV/0!',
        'VALUE' => '#VALOR!',
        'REF' => '#REF!',
        'NAME' => '#NOME?',
        'NUM' => '#NÚM!',
        'NA' => '#N/D',
        'GETTINGDATA' => '#OBTER_DADOS!',
        'SPILL' => '#TRANSPOSIÇÃO!',
        'CONNECT' => '#LIGAR!',
        'BLOCKED' => '#BLOQUEADO!',
        'UNKNOWN' => '#DESCONHECIDO!',
        'FIELD' => '#CAMPO!',
        'CALC' => '#CÁLC!',
        'EXTERNAL' => '#EXTERNO!',
    ];

    /**
     * @var array<string,string> Formula legacy functions
     */
    protected $functions_legacy = [
        // Funções de data e hora (Date and time functions)
        'DATEDIF' => 'DATADIF',

        // Funções financeiras (Financial functions)
        'STOCKHISTORY' => 'HISTÓRICODEAÇÕES',

        // Funções lógicas (Logical functions)
        'MAKEARRAY' => 'MARARRAY',

        // Funções de procura e referência (Lookup and reference functions)
        '*RC' => 'LC',
        'CHOOSECOLS' => 'ESCOLHERCOLS',
        'CHOOSEROWS' => 'ESCOLHERLINS',
        'DROP' => 'EXCLUIR',
        'EXPAND' => 'EXPANDIR',
        'FILTER' => 'FILTRAR',
        'HSTACK' => 'JUNTARH',
        'SORT' => 'ORDENAR',
        'SORTBY' => 'ORDENARPOR',
        'TAKE' => 'INCLUIR',
        'TOCOL' => 'PARACOL',
        'TOROW' => 'PARALIN',
        'UNIQUE' => 'EXCLUSIVOS',
        'VSTACK' => 'JUNTARV',
        'WRAPCOLS' => 'MOLDARCOLS',
        'WRAPROWS' => 'MOLDARLINS',
        'XLOOKUP' => 'PROCX',
        'XMATCH' => 'CORRESPX',

        // Funções matemáticas e trigonométricas (Math and trigonometry functions)
        'RANDARRAY' => 'MATRIZALEATÓRIA',
        'SEQUENCE' => 'SEQUÊNCIA',

        // Funções de texto (Text functions)
        'ARRAYTOTEXT' => 'MATRIZPARATEXTO',
        'FINDB' => 'LOCALIZARB',
        'LEFTB' => 'ESQUERDAB',
        'LENB' => 'NÚM.CARATB',
        'MIDB' => 'SEG.TEXTOB',
        'REPLACEB' => 'SUBSTITUIRB',
        'RIGHTB' => 'DIREITAB',
        'SEARCHB' => 'PROCURARB',
        'TEXTAFTER' => 'TEXTODEPOIS',
        'TEXTBEFORE' => 'TEXTOANTES',
        'TEXTSPLIT' => 'DIVIDIRTEXTO',
        'VALUETOTEXT' => 'VALORPARATEXTO',

        // Suplementos e automatização (Add-in and automation)
        'CALL' => 'CHAMAR',
        'REGISTER.ID' => 'REGISTO.ID',
    ];

    /**
     * @var array<string,string> Formula current functions
     */
    protected $functions_current = [
        // Funções de cubo (Cube functions)
        'CUBEKPIMEMBER' => 'MEMBROKPICUBO',
        'CUBEMEMBER' => 'MEMBROCUBO',
        'CUBEMEMBERPROPERTY' => 'PROPRIEDADEMEMBROCUBO',
        'CUBERANKEDMEMBER' => 'MEMBROCLASSIFICADOCUBO',
        'CUBESET' => 'CONJUNTOCUBO',
        'CUBESETCOUNT' => 'CONTARCONJUNTOCUBO',
        'CUBEVALUE' => 'VALORCUBO',

        // Funções de base de dados (Database functions)
        'DAVERAGE' => 'BDMÉDIA',
        'DCOUNT' => 'BDCONTAR',
        'DCOUNTA' => 'BDCONTAR.VAL',
        'DGET' => 'BDOBTER',
        'DMAX' => 'BDMÁX',
        'DMIN' => 'BDMÍN',
        'DPRODUCT' => 'BDMULTIPL',
        'DSTDEV' => 'BDDESVPAD',
        'DSTDEVP' => 'BDDESVPADP',
        'DSUM' => 'BDSOMA',
        'DVAR' => 'BDVAR',
        'DVARP' => 'BDVARP',

        // Funções de data e hora (Date and time functions)
        'DATE' => 'DATA',
        'DATEDIF' => 'DATADIF',
        'DATESTRING' => 'DATA.CADEIA',
        'DATEVALUE' => 'DATA.VALOR',
        'DAY' => 'DIA',
        'DAYS' => 'DIAS',
        'DAYS360' => 'DIAS360',
        'EDATE' => 'DATAM',
        'EOMONTH' => 'FIMMÊS',
        'HOUR' => 'HORA',
        'ISOWEEKNUM' => 'NUMSEMANAISO',
        'MINUTE' => 'MINUTO',
        'MONTH' => 'MÊS',
        'NETWORKDAYS' => 'DIATRABALHOTOTAL',
        'NETWORKDAYS.INTL' => 'DIATRABALHOTOTAL.INTL',
        'NOW' => 'AGORA',
        'SECOND' => 'SEGUNDO',
        'THAIDAYOFWEEK' => 'DIA.DA.SEMANA.TAILANDÊS',
        'THAIMONTHOFYEAR' => 'MÊS.DO.ANO.TAILANDÊS',
        'THAIYEAR' => 'ANO.TAILANDÊS',
        'TIME' => 'TEMPO',
        'TIMEVALUE' => 'VALOR.TEMPO',
        'TODAY' => 'HOJE',
        'WEEKDAY' => 'DIA.SEMANA',
        'WEEKNUM' => 'NÚMSEMANA',
        'WORKDAY' => 'DIATRABALHO',
        'WORKDAY.INTL' => 'DIATRABALHO.INTL',
        'YEAR' => 'ANO',
        'YEARFRAC' => 'FRAÇÃOANO',

        // Funções de engenharia (Engineering functions)
        'BIN2DEC' => 'BINADEC',
        'BIN2HEX' => 'BINAHEX',
        'BIN2OCT' => 'BINAOCT',
        'BITAND' => 'BIT.E',
        'BITLSHIFT' => 'BITDESL.ESQ',
        'BITOR' => 'BIT.OU',
        'BITRSHIFT' => 'BITDESL.DIR',
        'BITXOR' => 'BIT.XOU',
        'COMPLEX' => 'COMPLEXO',
        'CONVERT' => 'CONVERTER',
        'DEC2BIN' => 'DECABIN',
        'DEC2HEX' => 'DECAHEX',
        'DEC2OCT' => 'DECAOCT',
        'ERF' => 'FUNCERRO',
        'ERF.PRECISE' => 'FUNCERRO.PRECISO',
        'ERFC' => 'FUNCERROCOMPL',
        'ERFC.PRECISE' => 'FUNCERROCOMPL.PRECISO',
        'GESTEP' => 'DEGRAU',
        'HEX2BIN' => 'HEXABIN',
        'HEX2DEC' => 'HEXADEC',
        'HEX2OCT' => 'HEXAOCT',
        'IMAGINARY' => 'IMAGINÁRIO',
        'IMARGUMENT' => 'IMARG',
        'IMCONJUGATE' => 'IMCONJ',
        'IMPOWER' => 'IMPOT',
        'IMPRODUCT' => 'IMPROD',
        'IMSIN' => 'IMSENO',
        'IMSINH' => 'IMSENOH',
        'IMSQRT' => 'IMRAIZ',
        'IMSUB' => 'IMSUBTR',
        'IMSUM' => 'IMSOMA',
        'OCT2BIN' => 'OCTABIN',
        'OCT2DEC' => 'OCTADEC',
        'OCT2HEX' => 'OCTAHEX',

        // Funções financeiras (Financial functions)
        'ACCRINT' => 'JUROSACUM',
        'ACCRINTM' => 'JUROSACUMV',
        'COUPDAYBS' => 'CUPDIASINLIQ',
        'COUPDAYS' => 'CUPDIAS',
        'COUPDAYSNC' => 'CUPDIASPRÓX',
        'COUPNCD' => 'CUPDATAPRÓX',
        'COUPNUM' => 'CUPNÚM',
        'COUPPCD' => 'CUPDATAANT',
        'CUMIPMT' => 'PGTOJURACUM',
        'CUMPRINC' => 'PGTOCAPACUM',
        'DB' => 'BD',
        'DDB' => 'BDD',
        'DISC' => 'DESC',
        'DOLLARDE' => 'MOEDADEC',
        'DOLLARFR' => 'MOEDAFRA',
        'DURATION' => 'DURAÇÃO',
        'EFFECT' => 'EFETIVA',
        'FV' => 'VF',
        'FVSCHEDULE' => 'VFPLANO',
        'INTRATE' => 'TAXAJUROS',
        'IPMT' => 'IPGTO',
        'IRR' => 'TIR',
        'ISPMT' => 'É.PGTO',
        'MDURATION' => 'MDURAÇÃO',
        'MIRR' => 'MTIR',
        'NPV' => 'VAL',
        'ODDFPRICE' => 'PREÇOPRIMINC',
        'ODDFYIELD' => 'LUCROPRIMINC',
        'ODDLPRICE' => 'PREÇOÚLTINC',
        'ODDLYIELD' => 'LUCROÚLTINC',
        'PDURATION' => 'PDURAÇÃO',
        'PMT' => 'PGTO',
        'PPMT' => 'PPGTO',
        'PRICE' => 'PREÇO',
        'PRICEDISC' => 'PREÇODESC',
        'PRICEMAT' => 'PREÇOVENC',
        'PV' => 'VA',
        'RATE' => 'TAXA',
        'RECEIVED' => 'RECEBER',
        'RRI' => 'DEVOLVERTAXAJUROS',
        'SLN' => 'AMORT',
        'STOCKHISTORY' => 'HISTÓRICODEAÇÕES',
        'SYD' => 'AMORTD',
        'TBILLEQ' => 'OTN',
        'TBILLPRICE' => 'OTNVALOR',
        'TBILLYIELD' => 'OTNLUCRO',
        'VDB' => 'BDV',
        'XIRR' => 'XTIR',
        'XNPV' => 'XVAL',
        'YIELD' => 'LUCRO',
        'YIELDDISC' => 'LUCRODESC',
        'YIELDMAT' => 'LUCROVENC',

        // Funções de informação (Information functions)
        'CELL' => 'CÉL',
        'ERROR.TYPE' => 'TIPO.ERRO',
        'INFO' => 'INFORMAÇÃO',
        'ISBLANK' => 'É.CÉL.VAZIA',
        'ISERR' => 'É.ERROS',
        'ISERROR' => 'É.ERRO',
        'ISEVEN' => 'ÉPAR',
        'ISFORMULA' => 'É.FORMULA',
        'ISLOGICAL' => 'É.LÓGICO',
        'ISNA' => 'É.NÃO.DISP',
        'ISNONTEXT' => 'É.NÃO.TEXTO',
        'ISNUMBER' => 'É.NÚM',
        'ISODD' => 'ÉÍMPAR',
        'ISREF' => 'É.REF',
        'ISTEXT' => 'É.TEXTO',
        'NA' => 'NÃO.DISP',
        'SHEET' => 'FOLHA',
        'SHEETS' => 'FOLHAS',
        'TYPE' => 'TIPO',

        // Funções lógicas (Logical functions)
        'AND' => 'E',
        'IF' => 'SE',
        'IFERROR' => 'SE.ERRO',
        'IFNA' => 'SEND',
        'IFS' => 'SE.S',
        'MAKEARRAY' => 'MARARRAY',
        'NOT' => 'NÃO',
        'OR' => 'OU',
        'SWITCH' => 'PARÂMETRO',
        'XOR' => 'XOU',

        // Funções de procura e referência (Lookup and reference functions)
        '*RC' => 'LC',
        'ADDRESS' => 'ENDEREÇO',
        'AREAS' => 'ÁREAS',
        'CHOOSE' => 'SELECIONAR',
        'CHOOSECOLS' => 'ESCOLHERCOLS',
        'CHOOSEROWS' => 'ESCOLHERLINS',
        'COLUMN' => 'COL',
        'COLUMNS' => 'COLS',
        'DROP' => 'EXCLUIR',
        'EXPAND' => 'EXPANDIR',
        'FILTER' => 'FILTRAR',
        'FORMULATEXT' => 'FÓRMULA.TEXTO',
        'GETPIVOTDATA' => 'OBTERDADOSDIN',
        'HLOOKUP' => 'PROCH',
        'HSTACK' => 'JUNTARH',
        'HYPERLINK' => 'HIPERLIGAÇÃO',
        'INDEX' => 'ÍNDICE',
        'INDIRECT' => 'INDIRETO',
        'LOOKUP' => 'PROC',
        'MATCH' => 'CORRESP',
        'OFFSET' => 'DESLOCAMENTO',
        'ROW' => 'LIN',
        'ROWS' => 'LINS',
        'SORT' => 'ORDENAR',
        'SORTBY' => 'ORDENARPOR',
        'TAKE' => 'INCLUIR',
        'TOCOL' => 'PARACOL',
        'TOROW' => 'PARALIN',
        'TRANSPOSE' => 'TRANSPOR',
        'UNIQUE' => 'EXCLUSIVOS',
        'VLOOKUP' => 'PROCV',
        'VSTACK' => 'JUNTARV',
        'WRAPCOLS' => 'MOLDARCOLS',
        'WRAPROWS' => 'MOLDARLINS',
        'XLOOKUP' => 'PROCX',
        'XMATCH' => 'CORRESPX',

        // Funções matemáticas e trigonométricas (Math and trigonometry functions)
        'AGGREGATE' => 'AGREGAR',
        'ARABIC' => 'ÁRABE',
        'ASIN' => 'ASEN',
        'ASINH' => 'ASENH',
        'CEILING.MATH' => 'ARRED.EXCESSO.MAT',
        'CEILING.PRECISE' => 'ARRED.EXCESSO.PRECISO',
        'COMBINA' => 'COMBIN.R',
        'DEGREES' => 'GRAUS',
        'ECMA.CEILING' => 'ARRED.EXCESSO.ECMA',
        'EVEN' => 'PAR',
        'FACT' => 'FATORIAL',
        'FACTDOUBLE' => 'FATDUPLO',
        'FLOOR.MATH' => 'ARRED.DEFEITO.MAT',
        'FLOOR.PRECISE' => 'ARRED.DEFEITO.PRECISO',
        'GCD' => 'MDC',
        'ISO.CEILING' => 'ARRED.EXCESSO.ISO',
        'LCM' => 'MMC',
        'MDETERM' => 'MATRIZ.DETERM',
        'MINVERSE' => 'MATRIZ.INVERSA',
        'MMULT' => 'MATRIZ.MULT',
        'MOD' => 'RESTO',
        'MROUND' => 'MARRED',
        'MULTINOMIAL' => 'POLINOMIAL',
        'MUNIT' => 'UNIDM',
        'ODD' => 'ÍMPAR',
        'POWER' => 'POTÊNCIA',
        'PRODUCT' => 'PRODUTO',
        'QUOTIENT' => 'QUOCIENTE',
        'RADIANS' => 'RADIANOS',
        'RAND' => 'ALEATÓRIO',
        'RANDARRAY' => 'MATRIZALEATÓRIA',
        'RANDBETWEEN' => 'ALEATÓRIOENTRE',
        'ROMAN' => 'ROMANO',
        'ROUND' => 'ARRED',
        'ROUNDBAHTDOWN' => 'ARREDOND.BAHT.BAIXO',
        'ROUNDBAHTUP' => 'ARREDOND.BAHT.CIMA',
        'ROUNDDOWN' => 'ARRED.PARA.BAIXO',
        'ROUNDUP' => 'ARRED.PARA.CIMA',
        'SEQUENCE' => 'SEQUÊNCIA',
        'SERIESSUM' => 'SOMASÉRIE',
        'SIGN' => 'SINAL',
        'SIN' => 'SEN',
        'SINH' => 'SENH',
        'SQRT' => 'RAIZQ',
        'SQRTPI' => 'RAIZPI',
        'SUM' => 'SOMA',
        'SUMIF' => 'SOMA.SE',
        'SUMIFS' => 'SOMA.SE.S',
        'SUMPRODUCT' => 'SOMARPRODUTO',
        'SUMSQ' => 'SOMARQUAD',
        'SUMX2MY2' => 'SOMAX2DY2',
        'SUMX2PY2' => 'SOMAX2SY2',
        'SUMXMY2' => 'SOMAXMY2',
        'TRUNC' => 'TRUNCAR',

        // Funções estatísticas (Statistical functions)
        'AVEDEV' => 'DESV.MÉDIO',
        'AVERAGE' => 'MÉDIA',
        'AVERAGEA' => 'MÉDIAA',
        'AVERAGEIF' => 'MÉDIA.SE',
        'AVERAGEIFS' => 'MÉDIA.SE.S',
        'BETA.DIST' => 'DIST.BETA',
        'BETA.INV' => 'INV.BETA',
        'BINOM.DIST' => 'DISTR.BINOM',
        'BINOM.DIST.RANGE' => 'DIST.BINOM.INTERVALO',
        'BINOM.INV' => 'INV.BINOM',
        'CHISQ.DIST' => 'DIST.CHIQ',
        'CHISQ.DIST.RT' => 'DIST.CHIQ.DIR',
        'CHISQ.INV' => 'INV.CHIQ',
        'CHISQ.INV.RT' => 'INV.CHIQ.DIR',
        'CHISQ.TEST' => 'TESTE.CHIQ',
        'CONFIDENCE.NORM' => 'INT.CONFIANÇA.NORM',
        'CONFIDENCE.T' => 'INT.CONFIANÇA.T',
        'COUNT' => 'CONTAR',
        'COUNTA' => 'CONTAR.VAL',
        'COUNTBLANK' => 'CONTAR.VAZIO',
        'COUNTIF' => 'CONTAR.SE',
        'COUNTIFS' => 'CONTAR.SE.S',
        'COVARIANCE.P' => 'COVARIÂNCIA.P',
        'COVARIANCE.S' => 'COVARIÂNCIA.S',
        'DEVSQ' => 'DESVQ',
        'EXPON.DIST' => 'DIST.EXPON',
        'F.DIST' => 'DIST.F',
        'F.DIST.RT' => 'DIST.F.DIR',
        'F.INV' => 'INV.F',
        'F.INV.RT' => 'INV.F.DIR',
        'F.TEST' => 'TESTE.F',
        'FREQUENCY' => 'FREQUÊNCIA',
        'GAMMA' => 'GAMA',
        'GAMMA.DIST' => 'DIST.GAMA',
        'GAMMA.INV' => 'INV.GAMA',
        'GAMMALN' => 'LNGAMA',
        'GAMMALN.PRECISE' => 'LNGAMA.PRECISO',
        'GEOMEAN' => 'MÉDIA.GEOMÉTRICA',
        'GROWTH' => 'CRESCIMENTO',
        'HARMEAN' => 'MÉDIA.HARMÓNICA',
        'HYPGEOM.DIST' => 'DIST.HIPGEOM',
        'INTERCEPT' => 'INTERCETAR',
        'KURT' => 'CURT',
        'LARGE' => 'MAIOR',
        'LINEST' => 'PROJ.LIN',
        'LOGEST' => 'PROJ.LOG',
        'LOGNORM.DIST' => 'DIST.NORMLOG',
        'LOGNORM.INV' => 'INV.NORMALLOG',
        'MAX' => 'MÁXIMO',
        'MAXA' => 'MÁXIMOA',
        'MAXIFS' => 'MÁXIMO.SE.S',
        'MEDIAN' => 'MED',
        'MIN' => 'MÍNIMO',
        'MINA' => 'MÍNIMOA',
        'MINIFS' => 'MÍNIMO.SE.S',
        'MODE.MULT' => 'MODO.MÚLT',
        'MODE.SNGL' => 'MODO.SIMPLES',
        'NEGBINOM.DIST' => 'DIST.BINOM.NEG',
        'NORM.DIST' => 'DIST.NORMAL',
        'NORM.INV' => 'INV.NORMAL',
        'NORM.S.DIST' => 'DIST.S.NORM',
        'NORM.S.INV' => 'INV.S.NORM',
        'PERCENTILE.EXC' => 'PERCENTIL.EXC',
        'PERCENTILE.INC' => 'PERCENTIL.INC',
        'PERCENTRANK.EXC' => 'ORDEM.PERCENTUAL.EXC',
        'PERCENTRANK.INC' => 'ORDEM.PERCENTUAL.INC',
        'PERMUT' => 'PERMUTAR',
        'PERMUTATIONA' => 'PERMUTAR.R',
        'POISSON.DIST' => 'DIST.POISSON',
        'QUARTILE.EXC' => 'QUARTIL.EXC',
        'QUARTILE.INC' => 'QUARTIL.INC',
        'RANK.AVG' => 'ORDEM.MÉD',
        'RANK.EQ' => 'ORDEM.EQ',
        'RSQ' => 'RQUAD',
        'SKEW' => 'DISTORÇÃO',
        'SKEW.P' => 'DISTORÇÃO.P',
        'SLOPE' => 'DECLIVE',
        'SMALL' => 'MENOR',
        'STANDARDIZE' => 'NORMALIZAR',
        'STDEV.P' => 'DESVPAD.P',
        'STDEV.S' => 'DESVPAD.S',
        'STDEVA' => 'DESVPADA',
        'STDEVPA' => 'DESVPADPA',
        'STEYX' => 'EPADYX',
        'T.DIST' => 'DIST.T',
        'T.DIST.2T' => 'DIST.T.2C',
        'T.DIST.RT' => 'DIST.T.DIR',
        'T.INV' => 'INV.T',
        'T.INV.2T' => 'INV.T.2C',
        'T.TEST' => 'TESTE.T',
        'TREND' => 'TENDÊNCIA',
        'TRIMMEAN' => 'MÉDIA.INTERNA',
        'WEIBULL.DIST' => 'DIST.WEIBULL',
        'Z.TEST' => 'TESTE.Z',

        // Funções de texto (Text functions)
        'ARRAYTOTEXT' => 'MATRIZPARATEXTO',
        'BAHTTEXT' => 'TEXTO.BAHT',
        'CHAR' => 'CARÁT',
        'CLEAN' => 'LIMPARB',
        'CODE' => 'CÓDIGO',
        'DOLLAR' => 'MOEDA',
        'EXACT' => 'EXATO',
        'FIND' => 'LOCALIZAR',
        'FINDB' => 'LOCALIZARB',
        'FIXED' => 'FIXA',
        'ISTHAIDIGIT' => 'É.DÍGITO.TAILANDÊS',
        'LEFT' => 'ESQUERDA',
        'LEFTB' => 'ESQUERDAB',
        'LEN' => 'NÚM.CARAT',
        'LENB' => 'NÚM.CARATB',
        'LOWER' => 'MINÚSCULAS',
        'MID' => 'SEG.TEXTO',
        'MIDB' => 'SEG.TEXTOB',
        'NUMBERVALUE' => 'VALOR.NÚMERO',
        'PHONETIC' => 'FONÉTICA',
        'PROPER' => 'INICIAL.MAIÚSCULA',
        'REPLACE' => 'SUBSTITUIR',
        'REPLACEB' => 'SUBSTITUIRB',
        'REPT' => 'REPETIR',
        'RIGHT' => 'DIREITA',
        'RIGHTB' => 'DIREITAB',
        'SEARCH' => 'PROCURAR',
        'SEARCHB' => 'PROCURARB',
        'SUBSTITUTE' => 'SUBST',
        'TEXT' => 'TEXTO',
        'TEXTAFTER' => 'TEXTODEPOIS',
        'TEXTBEFORE' => 'TEXTOANTES',
        'TEXTJOIN' => 'UNIRTEXTO',
        'TEXTSPLIT' => 'DIVIDIRTEXTO',
        'THAIDIGIT' => 'DÍGITO.TAILANDÊS',
        'THAINUMSOUND' => 'SOM.NÚM.TAILANDÊS',
        'THAINUMSTRING' => 'CADEIA.NÚM.TAILANDÊS',
        'THAISTRINGLENGTH' => 'COMP.CADEIA.TAILANDÊS',
        'TRIM' => 'COMPACTAR',
        'UNICHAR' => 'UNICARÁT',
        'UPPER' => 'MAIÚSCULAS',
        'VALUE' => 'VALOR',
        'VALUETOTEXT' => 'VALORPARATEXTO',

        // Funções da web (Web functions)
        'ENCODEURL' => 'CODIFICAÇÃOURL',
        'FILTERXML' => 'FILTRARXML',
        'WEBSERVICE' => 'SERVIÇOWEB',

        // Funções de compatibilidade (Compatibility functions)
        'BETADIST' => 'DISTBETA',
        'BETAINV' => 'BETA.ACUM.INV',
        'BINOMDIST' => 'DISTRBINOM',
        'CEILING' => 'ARRED.EXCESSO',
        'CHIDIST' => 'DIST.CHI',
        'CHIINV' => 'INV.CHI',
        'CHITEST' => 'TESTE.CHI',
        'CONCATENATE' => 'CONCATENAR',
        'CONFIDENCE' => 'INT.CONFIANÇA',
        'CRITBINOM' => 'CRIT.BINOM',
        'EXPONDIST' => 'DISTEXPON',
        'FDIST' => 'DISTF',
        'FINV' => 'INVF',
        'FLOOR' => 'ARRED.DEFEITO',
        'FORECAST' => 'PREVISÃO',
        'FTEST' => 'TESTEF',
        'GAMMADIST' => 'DISTGAMA',
        'GAMMAINV' => 'INVGAMA',
        'HYPGEOMDIST' => 'DIST.HIPERGEOM',
        'LOGINV' => 'INVLOG',
        'LOGNORMDIST' => 'DIST.NORMALLOG',
        'MODE' => 'MODA',
        'NEGBINOMDIST' => 'DIST.BIN.NEG',
        'NORMDIST' => 'DIST.NORM',
        'NORMINV' => 'INV.NORM',
        'NORMSDIST' => 'DIST.NORMP',
        'NORMSINV' => 'INV.NORMP',
        'PERCENTILE' => 'PERCENTIL',
        'PERCENTRANK' => 'ORDEM.PERCENTUAL',
        'QUARTILE' => 'QUARTIL',
        'RANK' => 'ORDEM',
        'STDEV' => 'DESVPAD',
        'STDEVP' => 'DESVPADP',
        'TDIST' => 'DISTT',
        'TINV' => 'INVT',
        'TTEST' => 'TESTET',
        'ZTEST' => 'TESTEZ',

        // Suplementos e automatização (Add-in and automation)
        'CALL' => 'CHAMAR',
        'REGISTER.ID' => 'REGISTO.ID',
    ];
}
