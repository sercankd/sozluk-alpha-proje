<?

define('DOCUMENT_ROOT', dirname(realpath(__file__)));
/* Ge�erli dil dosyas� */
define("DEFAULT_DIL", "tr");
require (DOCUMENT_ROOT . '/config.php');
/*Classlar� include et Ba�la*/
require ("class/rain.tpl.class.php"); //RainTPL Tema Motoru S�n�f�
require_once ("class/ez_sql_core.php"); //Mysql Class
require_once ("class/ez_sql_mysql.php"); //Mysql Class
require_once ("class/paginator.class.php"); //Sayfaland�rma class
require_once ("class/sozluk.class.php"); //Sozluk Class

/*Classlar� include et Bitir*/
/*Classlar� �al��t�r ba�la*/
$db = new ezSQL_mysql($dbuser, $dbsifre, $dbadi, $dbhost);
$sayf = new pagination();
$sozluk = new Sozluk();
$db->query('set names utf8');
/*Classlar� �al��t�r bitir*/
/*RainTPL Tema Motoru Ba�la*/
$tpl = new RainTPL('tpl'); //root dizinindeki tpl klas�r�nde tema motorunu �al��t�r�r.
/*Genel de�i�kenleri ata */
$tpl->assign("SOZLUK_ADI", $sozluk->Ayarlar("sozluk_adi")); //sozluk ad�n� atar
$tpl->assign("SOZLUK_URL", "http://www.sercankd.com/sozluk/"); //sozluk ad�n� atar
$tpl->assign("BASEDIR", '..'); //root dizini yolunu tema kullan�m�na a�ar.
$tpl->assign("TEMADIR", 'tpl'); //tema klas�r� yolunu tema kullan�m�na a�ar.
$tpl->assign("GZIP",ob_start("ob_gzhandler"));
/*RainTPL Tema Motoru Bitir*/
/* Dil dosyas� */
require ("dil/" . DEFAULT_DIL . ".php");
/* Site a��k m� de�il mi kontrol et */
$sozluk->SiteDurumu();
/* Kullan�c� ip sini elde et */
function getIP()
{
    if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } elseif (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"),
    "unknown")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    } elseif (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
        $ip = getenv("REMOTE_ADDR");
    } elseif (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp
    ($_SERVER['REMOTE_ADDR'], "unknown")) {
        $ip = $_SERVER['REMOTE_ADDR'];
    } else {
        $ip = "Bilinmiyor";
    }

    return $ip;
}
function objectToArray($object)
{
    $array = array();
    foreach ($object as $member => $data) {
        $array[$member] = $data;
    }
    return $array;
}

?>