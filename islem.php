<?php

session_start();
// Ana Include Dosyasý
include ("inc/global.php");
switch ($_GET['islem']) {
    case 'kayit':
        if ($sozluk->Ayarlar("yeni_uye") == 1) {
            if (!$sozluk->BosAlanKontrol()) {
                $tpl->assign("HATA", $dil["KAYIT"]["BOS_ALAN_DOLDUR"]);
                echo $tpl->draw('kayit_hata');
            } else {
                if ($sozluk->GecerliNick($_POST['kuladi'])) { // Nick kontrolü
                    $tpl->assign("HATA", $dil["KAYIT"]["GECERLI_NICK"]);
                    echo $tpl->draw('kayit_hata');
                } elseif ($sozluk->NickKullanimdami($_POST['kuladi'])) { // Nick kullanýmdamý kontrolü
                    $tpl->assign("HATA", $dil["KAYIT"]["NICK_KULLANIMDA"]);
                    echo $tpl->draw('kayit_hata');
                } elseif ($sozluk->MailKullanimdami($_POST['email'])) { // Email kullanýmdamý kontrolü
                    $tpl->assign("HATA", $dil["KAYIT"]["MAIL_KULLANIMDA"]);
                    echo $tpl->draw('kayit_hata');
                } elseif ($sozluk->KayitSifreUzunlukKontrol($_POST['sifre'])) { // Geçerli þifre kontrolü (range 4-16)
                    $tpl->assign("HATA", $dil["KAYIT"]["GECERSIZ_SIFRE"]);
                    echo $tpl->draw('kayit_hata');
                } elseif (!$sozluk->KayitSifreKontrol($_POST['sifre'], $_POST['sifret'])) { //Ýki þifre uyumu
                    $tpl->assign("HATA", $dil["KAYIT"]["UYUMSUZ_SIFRE"]);
                    echo $tpl->draw('kayit_hata');
                } elseif (!$sozluk->DogumTarihiKontrol($_POST['dogumyili'])) { // Doðum yýlý kontrolü
                    $tpl->assign("HATA", $dil["KAYIT"]["GECERSIZ_DOGUM_TARIHI"]);
                    echo $tpl->draw('kayit_hata');
                } else {
                    $sozluk->YeniUyeKayit($db->escape($_POST['kuladi']), "test", md5($_POST['sifre']),
                        $_POST['email'], 0, $_POST['cinsiyet'], $_POST['dogumyili'], $db->escape($_POST['sehir']),
                        getIP(), getIP(), date("m.d.y H:i:s"), $sozluk->Ayarlar('kayit_nesil'));
                    $tpl->assign("KAYIT_NICK", $_POST['kuladi']);
                    echo $tpl->draw('kayitok');

                }
            }
        }
        break;
    case 'giris':
        if (isset($_POST['giris'])) {
            $nick = $db->escape($_POST['gnick']);
            $sifre = md5($db->escape($_POST['gsifre']));
            $login = $db->query("SELECT * FROM uyeler WHERE nick = '{$nick}' AND sifre = '{$sifre}'");
            if (!$login) {
                $tpl->assign("HATA", $dil["LOGIN"]["HATALI_BILGI"]);
                echo $tpl->draw('hata');
            } else {
                $tpl->assign("BILGI", $dil["LOGIN"]["GIRIS_YAPTINIZ"]);
                $tpl->assign("REDIRECT",
                    '<META HTTP-EQUIV="refresh" CONTENT="1; URL=index.php?frame=orta">');
                $_SESSION['nick'] = $_POST['gnick'];
                $_SESSION['loggedin'] = "1";
                echo $tpl->draw('bilgi');
            }
        }
        break;
    case 'cikis':
        unset($_SESSION['loggedin']);
        unset($_SESSION['nick']);
        $tpl->assign("BILGI", $dil["LOGOUT"]["CIKIS_YAPTINIZ"]);
        $tpl->assign("REDIRECT",'<META HTTP-EQUIV="refresh" CONTENT="1; URL=index.php?frame=orta">');
        echo $tpl->draw('bilgi');
        break;
    case 'entrygir':
        if($_SESSION['loggedin']){
        if (isset($_POST['entrygir'])) {
            $sozluk->EntryGir($db->escape($_POST['baslik']), $db->escape(nl2br($_POST['d'])), $_SESSION['nick'],getIP(), date('Y-m-d H:m:s'));
            $tpl->assign("BASLIK", $_POST['baslik']);
            echo $tpl->draw('ortaframe_entrygirildi');
        }
        }else{
           $tpl->assign("HATA", $dil["ENTRY"]["ENTRY_GIRIS_YAP"]);
           echo $tpl->draw('ortaframe_entry_hata');
        }
        break;
   case 'baslikgetir':
        if (isset($_POST['baslikb'])) {
            if(strip_tags($_POST['baslik']) == ' '){
                header("location: index.php?frame=orta");
            }else{
                header("location: index.php?frame=orta&baslik=".strip_tags($_POST['baslik']));
            }
        }
        break;
}


?>