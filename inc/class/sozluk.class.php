<?php

/* Kodlayan: Sercan Küçükdemirci
*  Dosya Adý: sozluk.class.php
*  Dosya Açýklamasý: Sözlüðün main class dosyasý.Bütün genel fonksiyonlar bu class içerisinde barýndýrýlmakta.
*/
class Sozluk
{

    /** Bu fonksiyon sözlük ayarlarýný veritabanýndan çeker **/
    public function Ayarlar($ayar)
    {
        global $db;
        foreach ($db->get_row("SELECT $ayar FROM ayarlar", 0) as $name) {
            return $name;
        }
    }
    /** Sözlüðün kapalý olup olmadýðýný denetler. **/
    public function SiteDurumu()
    {
        if ($this->Ayarlar("site_durumu") == "offline") {
            die("Sözlük þuan kapalýdýr.");
        }
    }
    /** Bu fonksiyon kayýt sýrasýnda boþ form verilerini kontrol ediyor **/
    public function BosAlanKontrol()
    {
        if (empty($_POST['kuladi']) || empty($_POST['sifre']) || empty($_POST['sifret']) ||
            empty($_POST['email']) || empty($_POST['sehir']) || empty($_POST['dogumyili']) ||
            empty($_POST['cinsiyet'])) {
            return false;
        } else {
            return true;
        }
    }
    /** Bu fonksiyon kayýt sýrasýnda kullanýcýnýn girdiði üye adýnýn kontrolünü yapýyor (alphanumeric ve boþluk) **/
    public function GecerliNick($nick)
    {
        if (preg_match("/^[' A-Za-z0-9]+$/", $nick)) {
            return false;
        } else {
            return true;
        }
    }
    /** Bu fonksiyon kayýt sýrasýnda üyenin girdiði üye adýnýn daha önce kullanýlýp kullanýlmadýðýna bakýyor **/
    public function NickKullanimdami($nick)
    {
        global $db;
        $kontrolnick = $db->query("SELECT * FROM uyeler WHERE nick = '" . $db->escape($nick) .
            "'");
        if ($kontrolnick) {
            return true;
        } else {
            return false;
        }
    }
    /** Bu fonksiyon kayýt sýrasýnda üyenin girdiði mail adresinin daha önce kullanýlýp kullanýlmadýðýna bakýyor **/
    public function MailKullanimdami($mail)
    {
        global $db;
        $kontrolmail = $db->query("SELECT * FROM uyeler WHERE email = '" . $db->escape($mail) .
            "'");
        if ($kontrolmail) {
            return true;
        } else {
            return false;
        }
    }
    /** Bu fonksiyon kayýt sýrasýnda kullanýcýnýn girdiði þifrenin uzunluk kontrolünü yapýyor (en az 4 en fazla 16) **/
    public function KayitSifreUzunlukKontrol($sifre)
    {
        if (strlen($sifre) > 16 || strlen($sifre) < 4) {
            return true;
        } else {
            return false;
        }
    }
    /** Bu fonksiyon kayýt sýrasýnda kullanýcýnýn girdiði 2 þifrenin uyum kontrolünü yapýyor **/
    public function KayitSifreKontrol($sifre1, $sifre2)
    {
        if ($sifre1 == $sifre2) {
            return true;
        } else {
            return false;
        }
    }
    /** Bu fonksiyon kayýt sýrasýnda kullanýcýnýn girdiði 2 þifrenin uyum kontrolünü yapýyor **/
    public function DogumTarihiKontrol($dogum)
    {
        if (strlen($dogum) < "3" || !is_numeric($dogum)) {
            return false;
        } else {
            return true;
        }
    }
    /** Hatasýz baþarýlý kayýt iþlemi **/
    public function YeniUyeKayit($nick, $baslik, $sifre, $email, $durum, $cinsiyet,
        $dogumyili, $sehir, $kayit_ip, $son_ip, $kayit_tarih, $nesil)
    {
        global $db;
        $db->query("INSERT INTO uyeler (nick, baslik, sifre, email, durum, cinsiyet, dogumyili, sehir, kayit_ip, son_ip, kayit_tarih, nesil)
                   VALUES ('$nick', '$baslik', '$sifre', '$email', '$durum', '$cinsiyet', '$dogumyili', '$sehir', '$kayit_ip', '$son_ip', '$kayit_tarih', '$nesil')");
    }
    /** Sol Frame **/
    public function SolFrame($veri)
    {
        global $db;
        $solfreym = array();
        foreach ($db->get_results("SELECT $veri FROM basliklar ORDER by tarih DESC") as
            $sol) {
            $solfreym[] = $sol->$veri;
        }
        return $solfreym;
    }
    /** Orta Frame **/
    public function OrtaFrame($veri, $baslik = null, $limit = null, $sayfa = null)
    {
        global $db;
        if ($veri == "arti") {
            $oy_arti = $db->get_results("SELECT * FROM entryler WHERE oy_arti > 0 ORDER BY RAND() LIMIT 1",ARRAY_A);
            return $oy_arti;
        } elseif ($veri == "baslik") {
            $baslik_goster = $db->get_results("SELECT entryler.* FROM entryler LEFT JOIN basliklar ON entryler.baslik_id=basliklar.id WHERE basliklar.baslik = '{$baslik}'", ARRAY_A);
            return $baslik_goster;
        }
    }
    /** Baþlýk Göster **/
    public function BaslikGoster($baslik,$sayfa = null,$limit = null)
    {
        global $db;

        $baslik_goster = $db->get_results("SELECT entryler.* FROM entryler LEFT JOIN basliklar ON entryler.baslik_id=basliklar.id WHERE basliklar.baslik = '{$baslik}' LIMIT {$sayfa},{$limit}", ARRAY_A);
        $db->debug();
        return $baslik_goster;
    }
    public function BaslikEntrySay($baslik,$tarih = null){
        global $db;
        $entrysay = $db->query("SELECT entryler.* FROM entryler LEFT JOIN basliklar ON entryler.baslik_id=basliklar.id WHERE basliklar.baslik = '{$baslik}'",ARRAY_A);
        return $db->num_rows;
    }
    /** Entry Gir **/
    public function EntryGir($baslik, $entry, $yazar, $ip, $tarih)
    {
        global $db;
        if(!$baslik = null){
        $kontrolbaslik = $db->query("SELECT * FROM basliklar WHERE baslik = '{$baslik}'");
        if ($kontrolbaslik) {
            $db->query("INSERT INTO entryler (baslik_id,entry,yazar,ip,tarih) VALUES ((SELECT id FROM basliklar WHERE baslik = '{$baslik}'),'{$entry}','{$yazar}','{$ip}','{$tarih}')");
        } else { 
            $db->query("INSERT INTO basliklar (baslik,ip,tarih,yazar) VALUES ('{$baslik}','{$ip}','{$tarih}','{$yazar}')");
            $db->query("INSERT INTO entryler (baslik_id,entry,yazar,ip,tarih) VALUES ((SELECT id FROM basliklar WHERE baslik = '{$baslik}'),'{$entry}','{$yazar}','{$ip}','{$tarih}')");
        }
        }
    }
}

?>