<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//TR"><html><head> 
<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1254">
<meta http-equiv="Content-Language" content="tr" /> 
<title><?php echo $SOZLUK_ADI;?></title> 
<meta name="title" content="<?php echo $SOZLUK_ADI;?>" /> 
<meta name="robots" content="index,follow,noarchive" /> 
<meta name="description" content="<?php echo $SOZLUK_ADI;?>" /> 
<meta name="keywords" content="<?php echo $SOZLUK_ADI;?>" /> 
<link rel="stylesheet" href="tpl/images/default.css" type="text/css">
<link rel="icon" href="tpl//res/favicon.png" type="image/x-icon" /> 
<link rel="shortcut icon" href="tpl//res/favicon.png" type="image/x-icon" /> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
<script src="tpl/js/lib.js" language="javascript" type="text/javascript" ></script> 
</head> 
<body  > 
  <div style="text-align: center;">
  <div class="loginbox" style="text-align: left;">
  <form action="islem.php?islem=giris" method="post">
  <input name="ref" value="http://" type="hidden">
  <table id="lb">
    <tbody><tr><td style="white-space: nowrap;">kullan�c� ad�</td>

    <td style="white-space: nowrap; text-align: right;">(<a target="sportakisim" href="?aksiyon=kayit">yeni kay�t</a>)
    </td>
    </tr>
    <tr><td colspan="2">
      <input name="gnick" id="n" tabindex="1" class="lin" maxlength="40" size="20" type="text" /></td></tr>
    <tr><td>�ifre</td><td style="white-space: nowrap;" align="right">(<a href="#" onclick="od('?islem=kayit')">�ifremi unuttum</a>)</td></tr>

    <tr><td style="white-space: nowrap;" colspan="2">
      <input tabindex="2" name="gsifre" id="p" class="lin" maxlength="50" size="20" type="password" /></td></tr>
    <tr><td colspan="2">
    <table cellpadding="0" cellspacing="0">
      <tbody>
      <tr><td><input tabindex="4" id="re" name="re" value="y" type="checkbox" /></td>
      <td><label id="lre" for="re">unutma beni..</label></td></tr>
    </tbody></table></td></tr>

    <tr><td colspan="2" style="text-align: center;">
      <input tabindex="6" id="b" class="but" value="Giri� Yap!" style="float: right;" type="submit" name="giris"/>
    </td></tr>
  </tbody></table>
  </form>
</div></div>
</body> 
</html> 