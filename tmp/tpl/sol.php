<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<SCRIPT src="tpl/images/top.js" type=text/javascript></SCRIPT>

<SCRIPT language="javascript" src="tpl/images/sozluk.js"></SCRIPT>

<LINK href="favicon.ico" rel="shortcut Icon"><LINK href="favicon.ico" rel=icon>



<LINK href="<?php echo $TEMADIR;?>/images/default.css" type=text/css rel=stylesheet>

</head>



<body>

<script src="tpl/images/jskutuphane.js" language="javascript" type="text/javascript" ></script>

<script language="javascript"> 
	function bg(id,ne){
		if(ne=='a'){
			document.getElementById(id).style.visibility='visible';
		}else{
			document.getElementById(id).style.visibility='hidden';
		}
	}
	
	function sch(s) { var o = document.getElementById("cf");o.checked=(o.disabled=(s=="r"))?true:o.checked; }

	function vi(s,v) { var o = document.getElementById(s); if(o) o.style.visibility=v?"visible":"hidden"; }

</script>
<script language="javascript"> 
	function bg(id,ne){
		if(ne=='a'){
			document.getElementById(id).style.visibility='visible';
		}else{
			document.getElementById(id).style.visibility='hidden';
		}
	}
</script>
<div id="aradiv" class="araclass" style="top:70px" >
  <form action="sozluk.php?process=dsearch" method="post"target="main" id="arama" name="arama">

    <table height="282" border="0" cellpadding="0" cellspacing="0" id="aratb">
      <tr>
        <td width="15" height="10" align="center" valign="top" ></td>
        <td width="100" rowspan="3" align="left" valign="top" class="araasilformcls" id="araasilform">
          <table border="0" cellpadding="0" cellspacing="0" style="margin:4px;">
            <tr>
              <td align="center"><table border="0" cellpadding="1" cellspacing="0" style="margin:4px;">
                <tr>
                  <td align="right"><b><font color="#000">konu:</font></b></td>

                  <td><input name="q" type="text" id="kn" size="18" maxlength="40" class="arakutukonu" /></td>
                </tr>
                <tr>
                  <td align="right"><b><font color="#000">yazar:</font></b></td>
                  <td><input name="yazar" type="text" id="yz" size="18" maxlength="50" class="arakutukonu"/></td>
                </tr>
              </table>              </td>
            </tr>

            <tr>
              <td >
 
<fieldset><legend><b><font color="#000">tarih</font></b></legend><table width="1" border="0" cellpadding="0" cellspacing="0" style="margin:2px;">
                <tr>
                  <td><small><b><font color="#000">başlangıç</font></b></small></td>
                  <td nowrap="nowrap"><select name="dc1" id="trs1" class="arakututar"><option> </option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select><select name="dc2" id="trs2" class="arakututar"><option> </option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option></select><select name="dc3" id="trs3" class="arakututar"><option> </option><option>2010</option></select>                  </td>

                </tr>
                <tr>
                  <td><small><b><font color="#000">bitiş</font></b></small></td>
                  <td nowrap="nowrap"><select name="dc1" id="trf1" class="arakututar"><option> </option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select><select name="dc2" id="trf2" class="arakututar"><option> </option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option></select><select name="dc3" id="trf3" class="arakututar"><option> </option><option>2010</option></select></td>

                </tr>
              </table></fieldset></td>
            </tr>
            <tr>
              <td >
			  <br />
			  <fieldset><legend><b><font color="#000">sıralama</font></b></legend><table border="0" cellspacing="0" cellpadding="0" >
                  <tr>

                    <td><input name="or" type="radio" id="or_az" value="az" checked="checked" /><label for="or_az"><font color="#000">a-z</font></b></label> </td>
                    <td><input name="or"  type="radio" id="or_en" value="en" /><label for="or_en"><font color="#000">en çok</font></b></label></td>
                  </tr>
                  <tr>
                    <td><input name="or"  type="radio" id="or_ye" value="ye" /><label for="or_ye"><font color="#000">yeni-eski</font></b></label></td>
                    <td><input name="or"  type="radio" id="or_es" value="es" /><label for="or_es"><font color="#000">eski-yeni</font></b></label></td>

                  </tr>
                </table>
			  </fieldset></td>
            </tr>
            <tr>
              <td align="center"><br />
              <input name="arabuton" class="linkler" type="submit" id="arabuton" value="     ara        " /></td>
            </tr>
          </table></td>

      </tr>
      <tr>
        <td width="15" height="162" align="center" valign="top" class="aradetay" onClick="ac_kapa();" accesskey="1" onfocus="ac_kapa();" >b u l u n u r &nbsp; k i &nbsp; b u</td>
      </tr>
      <tr>
        <td width="15" height="110" align="center" valign="top">&nbsp;</td>

      </tr>
    </table>
  </form>
</div>


<SCRIPT type=text/javascript>

function sch(s) { var o = document.getElementById("cf");o.checked=(o.disabled=(s=="r"))?true:o.checked; }

function vi(s,v) { var o = document.getElementById(s); if(o) o.style.visibility=v?"visible":"hidden"; }

</SCRIPT>

<body class=bgleft>

          <DIV style="OVERFLOW-X: hidden; WIDTH: 100%">



(988 başlık) ve (1912 entry)<br>




<br>
</center></center></div>
<table cellspacing="0" cellpadding="0" border="0">
  

  
  <tbody>

<?php $counter1=-1; if( isset($SOL_BASLIK) && is_array($SOL_BASLIK) && sizeof($SOL_BASLIK) ) foreach( $SOL_BASLIK as $key1 => $value1 ){ $counter1++; ?>
  <td>.&nbsp;</td>
  <td width='190'>
  <a href='index.php?frame=orta&baslik=<?php echo $value1;?>' target='sportakisim'><?php echo $value1;?></a>
  <span id="m248" style="visibility:hidden">
  <a href='/sozluk.php?process=wordtoday&q=yılmaz-vural' target='main'>...</a>
  </span>
  </td>
  </tr>
  <?php } ?>

      </tbody>
      </table>
      <center>
      <br />
      </center></div>
      <hr />

</body>

</html>

