<?php if(!defined('IN_RAINTPL')){exit('Hacker attempt');}?><!-- index | www.raintpl.com 1.7.6 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>sÃ¶zlÃ¼k</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="tpl//res/favicon.png" type="image/x-icon" /> 
<link rel="shortcut icon" href="tpl//res/favicon.png" type="image/x-icon" /> 
</head>
<frameset rows="50,*" cols="*"  frameborder="0" border="0" framespacing="0" >
  <frame src="tpl/<?php echo $var["BASEDIR"];?>/index.php?frame=ust" name="spustkisim" scrolling="no" noresize="noresize" id="spustkisim" title="spustkisim" />
  <frameset rows="*" cols="250,*" frameborder="0" border="0" framespacing="0" >
    <frame src="tpl/<?php echo $var["BASEDIR"];?>/index.php?frame=sol" name="spsolkisim" scrolling="auto"  id="spsolkisim" title="spsolkisim" noresize="noresize"  />
    <frame src="tpl/<?php echo $var["BASEDIR"];?>/index.php?frame=orta" name="sportakisim" id="sportakisim" title="sportakisim" noresize="noresize" />

  </frameset>
<noframes>
<body>
<form action="entry.php" name="baslik">
<h2>neseli</h2>
başlık: <input type="text" name="k" id="k" value="" /> <input type="submit" name="getir" value="getir" />
</form>
</body>
</noframes>
</frameset>
</html>

<!--/ index -->
