<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>inci sözlük</title>
<link rel="stylesheet" href="tpl/images/default.css" type="text/css">
</head>
<body style="margin:0px;padding:0px;" class="ustframe">
<table border="0" cellpadding="0" cellspacing="0"><tr>
    <td valign="middle" title="" onclick="top.sportakisim.location.href='ss_about.php'"> <span class="logo_all" ><span class="logo_text" ><?php echo $SOZLUK_ADI;?></span></span></td>
    <td valign="middle"><table height="23" border="0" cellpadding="2" cellspacing="1" style="margin:0;">
        <tr>
          <td  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"   >&nbsp;<a href="ss_leftframe.php?sa=rand" id="a_rand"   target="spsolkisim" >rastgele</a>&nbsp;</td>
          <td  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"   onclick="top.spsolkisim.location.href='ss_leftframe.php?sa=bir'" >&nbsp;<a href="ss_leftframe.php?sa=bir" id="a_birgun"  target="spsolkisim" >bir gün</a>&nbsp;</td>
          <td  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"  >&nbsp;<a href="ss_index.php?sa=iletisim" id="a_iletisim"  target="sportakisim" >iletiş</a>&nbsp;</td>
          <td  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"  colspan="2" >&nbsp;<a href="ss_index.php?sa=istatistik" id="a_ista"  target="sportakisim" >istatistikler</a>&nbsp;</td>
          <td  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"  >&nbsp;<a href="?aksiyon=kayit"  id="a_uyelik"  target="sportakisim" >kayıt ol</a> &nbsp; </td>

          <td  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"   ><a href="?aksiyon=giris"  title="kullanıcı girişi" target="sportakisim" id="a_login"   >kullanıcı girişi</a></td>
          <td colspan="2"  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"   >&nbsp;<a href="ss_index.php?sa=haberver"  id="a_haberver"  target="sportakisim" >haber ver</a>&nbsp;</td>
        </tr>
        <tr>
          <td  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"    onclick="top.spsolkisim.location.href='ss_leftframe.php?sa=bugun'" title="bugünün basliklari" >&nbsp;<a href="ss_leftframe.php?sa=bugun" id="a_bugun"  target="spsolkisim" >bugün</a>&nbsp;</td>
          <td  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"   onclick="top.spsolkisim.location.href='ss_leftframe.php?sa=dun'" title="dünün basliklari" >&nbsp;<a href="ss_leftframe.php?sa=dun"  id="a_dun" target="spsolkisim" >dün</a>&nbsp;</td>
          <td  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"   onclick="top.spsolkisim.location.href='ss_leftframe.php?sa=gecen"  title="gecen yil bu zamanlar" >&nbsp;<a href="ss_leftframe.php?sa=gecen"  id="a_wap" target="spsolkisim"  >2009</a>&nbsp;</td>

		  <td  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"   onclick="top.spsolkisim.location.href='/w/inci sözlük-ile-ilgili-sık-sorulan-sorular/"  title="inci sözlük le ilgili sik sorulan sorular" >&nbsp;<a href="/w/inci sözlük-ile-ilgili-sık-sorulan-sorular/"  id="a_faq" target="sportakisim" > asl? </a>&nbsp;</td>
          <td  onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but"   onclick="top.sportakisim.location.href='ss_entry.php?ne=su"  title="şükela" >&nbsp;<a href="ss_entry.php?ne=su"  id="a_suke" target="sportakisim"  >şükela</a>&nbsp;</td>
          <form name="getir_form" action="islem.php?islem=baslikgetir" target="sportakisim" method="post" style="margin:0px;">
            <td colspan="2" valign="middle" nowrap="nowrap" id="td" style="height:16px;">başlık:
              <input name="baslik" type="text" style="font:7pt Verdana, sans-serif;" size="30" maxlength="100" />
            </td>
          <td title="basliğin anlamini göster" ><input type="submit" onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but" name="baslikb" value="getir" target="sportakisim" /></td>
          <td title="bu basliği ara" ><input onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" type="submit" class="but" name="baslikara" value="ara" target="sportakisim" />&nbsp;</td>
          </form>
        </tr>
      </table></td>
  </tr>
</table>
</body></html>