<?

define('DOCUMENT_ROOT', dirname(realpath(__file__)));
/* Geçerli dil dosyasý */
define("DEFAULT_DIL", "tr");
require (DOCUMENT_ROOT . '/config.php');
/*Classlarý include et Baþla*/
require ("class/rain.tpl.class.php"); //RainTPL Tema Motoru Sýnýfý
require_once ("class/ez_sql_core.php"); //Mysql Class
require_once ("class/ez_sql_mysql.php"); //Mysql Class
require_once ("class/paginator.class.php"); //Sayfalandýrma class
require_once ("class/sozluk.class.php"); //Sozluk Class

/*Classlarý include et Bitir*/
/*Classlarý çalýþtýr baþla*/
$db = new ezSQL_mysql($dbuser, $dbsifre, $dbadi, $dbhost);
$sayf = new pagination();
$sozluk = new Sozluk();
$db->query('set names utf8');
/*Classlarý çalýþtýr bitir*/
/*RainTPL Tema Motoru Baþla*/
$tpl = new RainTPL('tpl'); //root dizinindeki tpl klasöründe tema motorunu çalýþtýrýr.
/*Genel deðiþkenleri ata */
$tpl->assign("SOZLUK_ADI", $sozluk->Ayarlar("sozluk_adi")); //sozluk adýný atar
$tpl->assign("SOZLUK_URL", "http://www.sercankd.com/sozluk/"); //sozluk adýný atar
$tpl->assign("BASEDIR", '..'); //root dizini yolunu tema kullanýmýna açar.
$tpl->assign("TEMADIR", 'tpl'); //tema klasörü yolunu tema kullanýmýna açar.
$tpl->assign("GZIP",ob_start("ob_gzhandler"));
/*RainTPL Tema Motoru Bitir*/
/* Dil dosyasý */
require ("dil/" . DEFAULT_DIL . ".php");
/* Site açýk mý deðil mi kontrol et */
$sozluk->SiteDurumu();
/* Kullanýcý ip sini elde et */
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