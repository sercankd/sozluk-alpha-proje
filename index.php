<?php

session_start();
// Ana Include Dosyası
include ("inc/global.php");
//Frame Switch Başla
switch ($_GET['frame']) {
    case 'sol':
        $tpl->assign("SOL_BASLIK", $sozluk->SolFrame("baslik"));
        echo $tpl->draw('sol'); // Sol Frameyi Çizen Kodlama
        break;
    case 'ust':
        if (isset($_SESSION['loggedin'])) {
            echo $tpl->draw('ust_logged'); // Ust Frameyi Çizen Kodlama login olmamış
        } else {
            echo $tpl->draw('ust_login'); // Ust Frameyi Çizen Kodlama login olmuş
        }
        break;
    case 'orta':
            if(isset($_GET['sayfa'])){
                $sayfa = $_GET['sayfa'];
            }else{
                $sayfa = "0";
            }
        if (isset($_SESSION['loggedin'])) {
            if (isset($_GET['baslik'])) {
                if ($sozluk->BaslikGoster($_GET['baslik'],$sayfa,$sozluk->Ayarlar("sayfa_basi_entry"))) {
                $tpl->assign("BASLIK_ADI", $_GET['baslik']);
                $tpl->assign("ENTRYLER", $sozluk->BaslikGoster($_GET['baslik'],$sayfa,$sozluk->Ayarlar("sayfa_basi_entry")));
                $tpl->assign("BASLIK_SAYFA",$sayf->calculate_pages($sozluk->BaslikEntrySay($_GET['baslik']), $sozluk->Ayarlar("sayfa_basi_entry"), $sayfa));
                print_r($sozluk->BaslikGoster($_GET['baslik'],$sayfa,$sozluk->Ayarlar("sayfa_basi_entry")));
                print_r($sayf->calculate_pages($sozluk->BaslikEntrySay($_GET['baslik']), $sozluk->Ayarlar("sayfa_basi_entry"), $sayfa));
                echo $tpl->draw('ortaframe_baslik'); // Orta Frameyi Çizen Kodlama login olmuş
                } else {
                    $tpl->assign("BASLIK_ADI", $_GET['baslik']);
                    echo $tpl->draw('ortaframe_yeni_baslik');
                }
            } else {
                echo $tpl->draw('ortaframe_olanbiten'); // Orta Frameyi Çizen Kodlama login olmuş
            }
        } else {
             if (isset($_GET['baslik'])) {
                if ($sozluk->BaslikGoster($_GET['baslik'],$sayfa,$sozluk->Ayarlar("sayfa_basi_entry"))) {
                $tpl->assign("BASLIK_ADI", $_GET['baslik']);
                $tpl->assign("ENTRYLER", $sozluk->BaslikGoster($_GET['baslik'],$sayfa,$sozluk->Ayarlar("sayfa_basi_entry")));
                echo $tpl->draw('ortaframe_baslik'); // Orta Frameyi Çizen Kodlama login olmuş
                } else {
                    $tpl->assign("BASLIK_ADI", $_GET['baslik']);
                    echo $tpl->draw('ortaframe_yeni_baslik');
                }
            }else{
            $tpl->assign("IYI_ENTRYLER", $sozluk->OrtaFrame("arti")); // en beğenilen entryler(üye login olmamış)
            echo $tpl->draw('ortaframe_iyi_entryler'); // Orta Frameyi Çizen Kodlama login olmamış
            }
        }
        break;
        
}
switch ($_GET['aksiyon']) {
    case 'kayit':
        if ($sozluk->Ayarlar("yeni_uye") == 1) {
            echo $tpl->draw('kayit'); // Kayit sayfasını Çizen Kodlama
        } else {
            echo $tpl->draw('kayityok'); // Kayit sayfasını Çizen Kodlama
        }
        break;
    case 'giris':
        echo $tpl->draw('giris'); // Login sayfasını Çizen Kodlama
        break;
        
}
//Frame Switch Bitir
echo $tpl->draw('index'); // Index Sayfasını Çizen Tema Motoru Fonksiyonu


?>