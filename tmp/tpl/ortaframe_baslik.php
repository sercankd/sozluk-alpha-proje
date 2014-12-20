<?php if(!class_exists('raintpl')){exit;}?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta http-equiv="Content-Language" content="tr" />
<title>naber panpa</title>
<meta name="title" content="naber panpa" />
<meta name="robots" content="index,follow,noarchive" />
<meta name="description" content="naber panpa" />
<meta name="keywords" content="naber panpa" />
<link rel="stylesheet" href="tpl/images/default.css" type="text/css" /> 
<link rel="icon" href="tpl//res/favicon_inci.png" type="image/x-icon" /> 
<link rel="shortcut icon" href="tpl//res/favicon_inci.png" type="image/x-icon" /> 
<SCRIPT type=text/javascript src="http://code.jquery.com/jquery-latest.js"></SCRIPT>

<script type="text/javascript">
var $jq = jQuery.noConflict();
$jq(document).ready(function(){
      $jq('li').hover(
            function(){
                  $jq(this).find('div.entry_info').show();
            }, function() {
                  $jq(this).find('div.entry_info').hide();
            });
});
</script>
<style type="text/css">
.entry_altkutu{
    height:20px;
    }
.entry_info{
    display:none;
    height:20px;
    }
.entrygir{
    height:200px;
    }
</style>
</head>
<body  >
<h1 class="baslik_text"  ><a href="http://inci.sozlukspot.com/w/naber/"><span class="baslik_text"><?php echo $BASLIK_ADI;?></span></a>&nbsp;</h1><br><table width="160" border="0"  cellpadding="0" cellspacing="0" align="right"  style="float:right;clear:right;margin:0px;margin-left:3px;">
<br><span style="float: right; white-space: nowrap; margin-bottom: 5px;">
<input name="geri" id="geri" value="&lt;&lt;" class="but" disabled="disabled" type="submit" />
<select name="sayfa_drop" id="sayfa_drop" onchange="spot_next_page('self',this,0)" style="font-size: 9px;">
<?php $counter1=-1; if( isset($BASLIK_SAYFA) && is_array($BASLIK_SAYFA) && sizeof($BASLIK_SAYFA) ) foreach( $BASLIK_SAYFA as $key1 => $value1 ){ $counter1++; ?>
<option value="<?php echo $value1["pages"];?>"><?php echo $value1["pages"];?></option>
<?php } ?>
</select> / <a href="http://inci.sozlukspot.com/w/daha-iyisi-yok-capsli-panpalar/15/" style=""></a>
<input name="ileri" id="ileri" value="&gt;&gt;" class="but" onclick="spot_fw_page();" type="submit" />
<script type="text/JavaScript">
<!--
	function spot_next_page(targ,selObj,restore){ //v3.0
	  eval(targ+".location='http://inci.sozlukspot.com/w/daha-iyisi-yok-capsli-panpalar/"+(selObj.options[selObj.selectedIndex].value>1?selObj.options[selObj.selectedIndex].value+'/':'')+"'");
	  if (restore) selObj.selectedIndex=0;
	} function spot_back_page(){ //v3.0
	  self.location='http://inci.sozlukspot.com/w/daha-iyisi-yok-capsli-panpalar/';
	} function spot_fw_page(){ //v3.0
	  self.location='http://inci.sozlukspot.com/w/daha-iyisi-yok-capsli-panpalar/2/';
	}
//-->
</script>

</span>
  <tr>
  </tr>

  <tr>
	<td>
 <div style="margin-top:10px;clear:both;text-align:center;" ></div><table width="160" height="600" border="0"  cellpadding="0" cellspacing="0" id="reklamlar" style="display:block;"  ><tr><td>
</td></tr></table>		</td>
	</tr>
</table>
<ol style="line-height:14pt;"  >
<?php $counter1=-1; if( isset($ENTRYLER) && is_array($ENTRYLER) && sizeof($ENTRYLER) ) foreach( $ENTRYLER as $key1 => $value1 ){ $counter1++; ?>
  <li id="li_<?php echo $value1["eid"];?>" style="margin-left:8px;"  ><?php echo $value1["entry"];?><div  style="text-align:right;font-size:8pt;" class="yazar_tarih">
(<a href="index.php?frame=orta&baslik=<?php echo $value1["yazar"];?>" ><?php echo $value1["yazar"];?></a>, <?php echo $value1["tarih"];?>)<br />
<div class="entry_altkutu">
<div class="entry_info">
<td class="ei"><a href="javascript:void(0)" onclick="copyid(25097169,256);">#<?php echo $value1["eid"];?></a></td><td><span class="but" onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" title="başka adamlarla başka şehirlerde" onclick="osh('25097169')" id="">&nbsp;paylaş&nbsp;</span></td><td>&nbsp;</td><td><a onmousedown="this.id='butDown';" onmouseout="this.id='';" onmousemove="this.id='butOver';" class="but" title="aynen öyle" href="javascript:location.href='iletisim.asp?s=1&id=25097169'" id="">&nbsp;şikayet et&nbsp;</a></td>
</div>
</div>
</div>
</li>
<?php } ?>
</ol>
<?php if( $_SESSION['loggedin'] ){ ?>
<fieldset style="border: 0pt none; margin: 0pt; padding: 0pt;">
    <form id="ssg" action="islem.php?islem=entrygir" onsubmit="nof(window);submitted=true;return true;" method="post">
    <input name="t" value="yaralı kurtularak seri katili göt eden adam" type="hidden"><br>
    <input name="lt" value="25.08.2011 07:52:36" type="hidden">

    "<?php echo $BASLIK_ADI;?>" hakkında kafanızda bir tanım veya verebileceğiniz bir örnek varsa eklemekten çekinmeyin:<br>
<div style="text-align: right;">
<input class="but" onclick="hen('d', '(bkz: ',')', 'hangi başlığa bkz veresi?')" value="(bkz: )" type="button">
<input class="but" onclick="hen('d', '`','`', 'hangi başlığa, entry\'ye bu link?')" value="``" title="görünmez bkz" type="button">
<input class="but" onclick="hen('d', '\n\r--- `spoiler` ---\n\r','\n\r--- `spoiler` ---\n\r', '')" value="-s!-" title="şpoyler ibaresi" type="button">
<input class="but" onclick="var a=prompt('gidilecek adres', 'http://');if(a.length>0&amp;&amp;a!='http://')hen('d', '[' + a + ' ', ']', '');" value="http://" title="link" type="button">
</div>
  <textarea tabindex="1" rows="10" cols="80" name="d" id="d" onkeypress="dbln4(event,'ssg')" onchange="fff(window,this);"></textarea>
  <input type="hidden" name="baslik" value="<?php echo $BASLIK_ADI;?>" />
    <input tabindex="2" id="b" class="but" value="yolla" type="submit" name="entrygir" />&nbsp;
  
  <input tabindex="3" id="b2" class="but" name="save" value="kenarda dursun" type="submit" />&nbsp;
  </form></fieldset>
  <?php } ?>
<hr />
<div align="center" >
&copy; 2010 - <a href="http://inci.sozlukspot.com/" target="_parent"  >inci sözlük</a><br /><br />

<div class="alttakiyazi"> inci sözlük bir interaktif sözlük çalışmasıdır. inci sözlük sözlük spot tematik sözlük servisi ile üretilmiştir. sözlükler yöneticilerinin sorumluluğundadır, www.sozlukspot.com sözlüklerin içeriklerinden sorumlu tutulamaz.</div>
</div>
</body>
</html>
