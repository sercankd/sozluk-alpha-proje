var id=0,bid=0,lo=null,is="",bis="",se="",pr='<td onmousedown="md(this)" onmouseup="bn(this)" onmouseover="ov(this)" onmouseout="bn(this)" class="but" onclick=';







function ov(o)



{



  o.id="butOver";



}







function md(o)



{



  o.id="butDown";



}







function bn(o)



{



  o.id="";



}







function hr(o)



{



        if(o)o.click();



}







function b(t,u,c,tt)



{



  is="a"+(id++);



  document.write(pr+'"hr('+is+')"><a id='+is);



  if(tt)document.write(" title='"+tt+"'");



  document.write(' target='+t+' href="'+u+'">&nbsp;'+c+'&nbsp;</a></td>');



}







function bjs(t,js,c,tt)



{



  document.write(pr+'"'+js+'"><a href="#" onclick="'+js+'">&nbsp;'+c+'&nbsp;</a></td>');



}







function b2(t,u,c,s)



{



  is="a"+(id++);



  document.write(pr+'"hr('+is+')" colspan='+s+'><a id='+is+' target='+t+' href="'+u+'">&nbsp;'+c+'&nbsp;</a></td>');



}







function s(f,c)



{



  document.write(pr+'"document.getElementById(\''+f+'\').submit()" style="cursor:hand">&nbsp;&nbsp;'+c+'&nbsp;</td>');



}







function a(u,c,t)



{



  is="a"+(id++);



  document.write(pr+'"hr('+is+')" title="'+t+'"><a id='+is+' href="'+u+'" class=icon>&nbsp;'+c+'&nbsp;</a></td>');



}







function p(u,c,t,m)



{



  is="a"+(id++);



  document.write(pr+'"hr('+is+')" title="'+t+'"><a id='+is+' onclick="return confirm(\''+m+'\')" href="'+u+'" class=icon>&nbsp;'+c+'&nbsp;</a></td>');



}







function al()



{



  for(var c='a';c <= 'z';c++) document.write('<a target=index href=index.asp?ix='+c+'>'+c+'</a> ');



}







function mch()



{



  var u="t="



  var c=document.getElementsByTagName("input")



  for(i=0;i<c.length;i++){if(c[i].type=="checkbox"){if(c[i].checked){u+="&"+c[i].id+"=y"}}}



  od('movemulti.asp?'+u);



}



function ct()



{



  tc=document.getElementById('ctf');



  if(tc)



  {



    var i=document.getElementsByTagName("input")



    var c=0;



    for(j=0;j<i.length;j++){if(i[j].type=="checkbox"){if(i[j].checked)c++;}}



    tc.style.display=c>0?'inline':'none';



  }



}







function ci(i)



{



  ic=document.getElementById('c'+i);



  with(ic)



  {



    style.display=style.display=='none'?'inline':'none';



    checked=checked?false:true;



    ct();



  }



}



function e(f,i,an)



{



        with(document)



        {



          write('<div align=right><table id=m'+i+' style="visibility:hidden"><tr><td class=ei><a name="cid'+i+'"></a><a href="#cid" onclick="copyid('+i+','+f+');">#'+i+'</a></td>');



                  a("javascript:od('sozluk.php?process=arti&id="+i+"')","enseye þaplak","miss");



                  a("javascript:od('sozluk.php?process=enteresan&id="+i+"')","ortaya yarrak","enteresan");



                  a("javascript:od('sozluk.php?process=eksi&id="+i+"');","göte parmak","shit!");



                  document.write('<td>&nbsp;</td>');



                  a("javascript:location.href='sozluk.php?process=privmsg&islem=yenimsj&gkime="+an+"&gkonu="+i+" nolu entry';","/msj","mesaj at");



                  a("javascript:od('sozluk.php?process=ben&kim="+an+"','400','400')","?","yazar hakkinda");



                  a("javascript:od('sozluk.php?process=sikayetgiris','700','400')","!","sikayet et");







          write('</tr></table></div>');



          var d=getElementById('d'+i);



          var m="document.getElementById('m"+i+"').style.visibility=";



          d.onmouseover=new Function(m+"'visible'");



          d.onmouseout=new Function(m+"'hidden'");



        }



}



function e_mod(f,i,an,sr)



{



        with(document)



        {



          write('<div align=right><table id=m'+i+' style="visibility:hidden"><tr><td class=ei><a name="cid'+i+'"></a><a href="#cid" onclick="copyid('+i+','+f+');">#'+i+'</a></td>');


                  a("javascript:od('sozluk.php?process=arti&id="+i+"')","enseye þaplak","miss");



                  a("javascript:od('sozluk.php?process=enteresan&id="+i+"')","ortaya yarrak","enteresan");



                  a("javascript:od('sozluk.php?process=eksi&id="+i+"');","göte parmak","shit!");



                  document.write('<td>&nbsp;</td>');



                  a("javascript:location.href='sozluk.php?process=privmsg&islem=yenimsj&gkime="+an+"&gkonu="+i+" nolu entry';","/msj","mesaj at");



            a("javascript:location.href='sozluk.php?process=eduzenle&id="+i+"&sr="+sr+"';","/duzenle","entry duzenle");



			a("javascript:location.href='sozluk.php?process=etasi&id="+i+"&sr="+sr+"';","/tasi","bu entry yi uzak diyarlara g?t?r");



            a("javascript:location.href='sozluk.php?process=esil&id="+i+"&sr="+sr+"';","/sil", "siliver");



                  a("javascript:od('sozluk.php?process=ben&kim="+an+"','400','400')","?","yazar hakkinda");



				  a("javascript:od('sozluk.php?process=sikayetgiris','700','400')","!","sikayet et");



                   



          write('</tr></table></div>');



          var d=getElementById('d'+i);



          var m="document.getElementById('m"+i+"').style.visibility=";



          d.onmouseover=new Function(m+"'visible'");



          d.onmouseout=new Function(m+"'hidden'");



        }



}



function e_ben(f,i,an,sr)



{



        with(document)



        {



          write('<div align=right><table id=m'+i+' style="visibility:hidden"><tr><td class=ei><a name="cid'+i+'"></a><a href="#cid" onclick="copyid('+i+','+f+');">#'+i+'</a></td>');



                  document.write('<td>&nbsp;</td>');



            a("javascript:location.href='sozluk.php?process=eduzenle&id="+i+"&sr="+sr+"';","/edit","entry duzenle");



                  a("javascript:od('sozluk.php?process=ben&kim="+an+"','400','400')","?","yazar hakkinda");











          document.write('<td>&nbsp;</td>');



          a("javascript:location.href='sozluk.php?process=esil&id="+i+"&sr="+sr+"';","/sil", "siliver");



          write('</tr></table></div>');



          var d=getElementById('d'+i);



          var m="document.getElementById('m"+i+"').style.visibility=";



          d.onmouseover=new Function(m+"'visible'");



          d.onmouseout=new Function(m+"'hidden'");



        }



}



function zyrt(f,i,an)



{



        with(document)



        {



          write('<div align=right><table id=m'+i+' style="visibility:hidden"><tr><td class=ei><a name="cid'+i+'"></a><a href="#cid" onclick="copyid('+i+','+f+');">#'+i+'</a></td>');



a("javascript:od('sozluk.php?process=ben&kim="+an+"','400','400')","?","yazar hakkinda");



a("javascript:od('sozluk.php?process=sikayetgiris','700','400')","!?","sikayet et");



          write('</tr></table></div>');



          var d=getElementById('d'+i);



          var m="document.getElementById('m"+i+"').style.visibility=";



          d.onmouseover=new Function(m+"'visible'");



          d.onmouseout=new Function(m+"'hidden'");



        }



}



function copyid(id,f) 



{



	var c = document.getElementById('cidtxt');



	var u = "http://www.avare.be/"+id+".id";



	if(!c) {prompt('sozluk.php?process=eid&eid='+id+' nolu entrynin adresi',u);return;}



	if(document.selection) {



	  if(f&256){c.innerText = u;}else{c.innerText="#"+id;}



	  var ct = c.createTextRange();



	  ct.execCommand("Copy");



	} else {



	  prompt('sozluk.php?process=eid&eid='+id+' nolu entrynin adresi',u);



	}    



}











function dd(i)



{



        od('sozluk.php?process=privmsg&islem=yenimsj&gkime='+i);



        document.getElementById('d'+i).style.visibility='hidden';



}











function tr(i)



{



  document.write('<tr style="cursor:default" onmouseover="document.getElementById("m'+i+'").style.visibility=\'visible\'" onmouseout="style.borderWidth=\'0\';document.getElementById("m'+i+'").style.visibility=\'hidden\'">');



}







function od(u,w,h,x,y)



{



  if(!w)w=320;if(!h)h=200;if(!x)x=(screen.width-w)/2;if(!y)y=(screen.height-h)/2;



  var w=window.open(u,"_blank","resizable=yes,scrollbars=yes,top="+x.toString()+",left="+y.toString()+",width="+w.toString()+",height="+h.toString());



  w.focus();



}







function odf(u,w,h,x,y)



{



        od(u,w,h,x,y);return false;



}







function au(d)



{



  document.write('<tr><td nowrap align=right class=aul>(<a class=aul href="?t='+an+'">'+an+'</a>, '+d+')</td></tr>');



}







function sets(doc,fn)



{



  if(doc) {



    var len = doc.styleSheets.length;



    if(doc.createStyleSheet)



    {



            if (fn=="") {



              if(len>1) doc.styleSheets[1].href="";



            } else {



              if (len<2) doc.createStyleSheet(fn); else doc.styleSheets[1].href=fn;



            }



    }



    else



    {



      doc.location.reload();



    }



  }



}







function bp(o,m,c)



{



        var oo;



        for(var n=1;n<=m;n++) {



                oo = document.createElement("OPTION");



                o.options.add(oo);



                oo.innerText = n;



                oo.Value = n;



                oo.selected = n==c;



        }



}







var inpp=false,o=null,maxs=11,lx=20,w=213,bi=false,sint=new Array(20,23,30,43,61,82,107,135,166,197,213);







function osr()



{



  o = null;



  os();



}







function os()



{  



  if(o==null)



  {



    o=document.getElementById('a');



    window.onscroll=os;



    window.onresize=osr;



    w = document.documentElement.clientWidth;



    sint = new Array();



    for(n=0;n<=maxs;n++) sint[n] = (parseInt(Math.sin((Math.PI*n/2)/maxs) * (w-mx-lx))+lx) + "px";



    o.style.left = sint[n=maxs];o.style.width=(w-parseInt(sint[n])-2)+"px";



  }



  with (o.style) with(document.documentElement)



  	if(o.clientHeight+44<clientHeight) o.style.top=(scrollTop+44)+"px";



  if(sprite==1)



  {



    var o_s = document.getElementById('a'+'s');



    with (o_s.style) with(document.documentElement)



  	  if(o_s.clientHeight+208<clientHeight) o_s.style.top=(scrollTop+208)+"px";    



  }



}







function ca()



{



        with(document.body) with(o.style) {



                left=(scrollLeft+sint[n]+(clientWidth-233))+"px";width=((w+lx)-sint[n])+"px";



                if(bi){if(++n<maxs)setTimeout("ca()",20); else {inpp=false;document.body.focus();document.getElementById('amain').disabled=true}}



                else{if(n-->0)setTimeout("ca()",20); else {inpp=false;document.getElementById('amain').disabled=false;document.getElementById('kw').focus()}}



  }



}







function pp()



{



        if(!inpp) { inpp=true;o=document.getElementById('a');bi=n<=0;n=bi?0:(maxs-1);ca(); }



}







function tgb(i)



{



  t=document.getElementById('t'+i);



  m=document.getElementById('m'+i);



  b=document.getElementById('b'+i);



  if(t&&m&&b) {



    for(var j=0;j<bid;j++) {



      if(i==("b"+j))continue;



      document.getElementById('bb'+j).style.display='inline';



      document.getElementById('tb'+j).innerHTML='&rsaquo;&rsaquo;'+'&nbsp;';



      document.getElementById('mb'+j).style.display='none';



    }



    t.innerHTML=m.style.display=='none'?'&lsaquo;&lsaquo;':'&rsaquo;&rsaquo;'+'&nbsp;';



    m.style.display=m.style.display=='none'?'inline':'none';



    b.style.display=b.style.display=='none'?'inline':'none';



  }



}







function obba(n,t)



{



  bis="b"+(bid++);



  document.write('<a style="vertical-align:middle;" id=t'+bis+' href="#" onclick="tgb(\''+bis+'\');">&rsaquo;&rsaquo;&nbsp;</a>'+



    '<div id=m'+bis+' style="vertical-align:middle;width:90%;display:none;"><a href="sozluk.php?process=hizlimsj&gkime='+escape(n)+'" onclick="tgb(\''+bis+'\');od(\'sozluk.php?process=hizlimsj&gkime='+escape(n)+'\');return false">&nbsp;/msg</a>'+



    '&nbsp;&middot;<a href="sozluk.php?process=ben&kim='+escape(n)+'" onclick="tgb(\''+bis+'\');od(\'sozluk.php?process=ben&kim='+escape(n)+'\',350,420);return false">&nbsp;?</a>'+



    '&nbsp;&middot;<a href="sozluk.php?process=son&yazar='+escape(n)+'" target="left" onclick="tgb(\''+bis+'\');top.left.location.href=\'sozluk.php?process=son&yazar='+escape(n)+'\'">&nbsp;son</a>'+



    '</div><div id=b'+bis+' style="vertical-align:middle;width:90%;display:inline;"><a href="#" onclick="od(\'sozluk.php?process=hizlimsj&gkime='+escape(n)+'\');return false" id='+bis+'>'+n+'</a></div><br>');



}



function ob(n,t)



{



        t = (15-t)/15.0;



        document.write('<a href="sozluk.php?process=privmsg&islem=yenimsj&kime='+escape(n)+'" onclick="od(\'sozluk.php?process=privmsg&islem=yenimsj&kime='+escape(n)+'\');return false">'+n+'</a><br>');



}







function ors(t)



{



        document.write('<select style="width:120px" class=tedit onchange="if(this.selectedIndex>0){window.open(this.options[this.selectedIndex].value+\''+'\',\'main\');this.selectedIndex=0;}">'+




      '<option value="#">zýpla</option>'+

      '<option value="sozluk.php?process=onlines">kontrol merkezi</option>'+
      '<option value="sozluk.php?process=gorunum">tema</option>'+
		'<option value="sozluk.php?process=arkadaslarim">arkadaslar</option>'+
		'<option value="sozluk.php?process=privmsg">mesajlar</option>'+
		'<option value="sozluk.php?process=yorumlarim">yorumlar</option>'+
		'<option value="http://caps.avare.be">gorsel</option>'+
		'<option value="http://link.avare.be">link</option>'+





    '</select>');



}







function hen(d,a,b)



{



  var o=document.getElementById(d);



  if(document.selection && !window.opera)



  {



          var rg=document.selection.createRange();



          if(rg.parentElement()==o) {



                  rg.text = a+rg.text+b;



                  rg.select();



                } else alert("lutfen once $eetmek istediginiz metni secin");



  }



  else if(o.textLength||window.opera)



  {



          var s = o.value;



          o.value = s.substring(0,o.selectionStart)+a+s.substring(o.selectionStart,o.selectionEnd)+b+s.substring(o.selectionEnd,o.textLength);



  } else o.value += a+b;



  o.focus();



  return false;



}







function osb(t)



{



        document.write('<tr><td><form action="show.asp"><input type=hidden name=t value="'+t+'"><input type=text id=kw name=kw maxlength=48 class=aratext style="width:96px"><input class=but title="ba$lik icinde ara" type=submit value="ara"></form></td></tr>');



}







function tac()



{



  var c = document.getElementsByTagName("input");



  for(var i=0;i<c.length;i++)if(c[i].type=="checkbox")c[i].checked=!c[i].checked;



}







function selcnt()



{



  var c = document.getElementsByTagName("input");



  var cnt = 0;



  for(var i=0;i<c.length;i++)if(c[i].type=="checkbox")cnt += c[i].checked?1:0;



  return cnt;



}



function ara()



{



  if(top.left)top.left.location.href='sozluk.php?process=search&q='+escape(document.getElementById('q').value);



}



function dab()



{



  var c = document.getElementsByTagName("input");



  for(var i=0;i<c.length;i++)if(c[i].type=="submit"||c[i].type=="button")c[i].disabled=true;



}



function mpc()



{



  document.write('ek$i sozluk mesajla$ma arabirimi sadece cok temel ileti$im ihtiyaclarina yanit vermek uzere tasarlanmi$tir. gonderilen/alinan mesajlar ar$ivlenmedikleri takdirde bir kac hafta sonra (tam sureye bakmaya u$endim) otomatik silinirler. '+



    'herhangi bir veritabani arizasinda mesajlariniz geri getirilmeyecektir. bu sebepten guvenli/hizli ileti$im kurmaniz gerektiginde e-mail ya da instant messaging uygulamalarini kullanmanizi oneririz. '+



    'ek$i sozluk yetkilileri sozlukteki mesajlarinizi bir hakaret/kufur $ikayeti uzerine kontrol edebilirler. yolladiginiz/aldiginiz mesajlar ne veritabaninda ne de internet\'te aktarilirken $ifrelenmektedir. '+



    'bu yuzden cok ozel/gizli bilgilerinizi ek$i sozluk mesaj arabiriminden gondermemenizi guvenliginiz acisindan oneririz. (ne bu ya sanki savunma bakanligi sitesi)');



}



function bpc()



{



  document.write('Bu sitede yazilanlarin hicbiri dogru degildir. 18 ya$in altindakilerin kullanmasi hukuken sakincali olabilir (zaten o ya$ta ne i$iniz var internette sitede cikin, gezin, gezdirin). '+



    'Yazarlar Ek$i Sozluk\'e yazdiklari entry\'lerin telif haklarini Michael Jackson\'a devretmi$ sayilirlar. Sitede yazilanlari kaynak belirtmeden Word\'e aktarip "Fw: admin astronot ve houston! cok komikkkk!" '+



    'diye arkada$larina yollayan pespayedir, hemzemindir, hincaldir, uluctur. Hukuki gereklilikler haricinde yazarlarin kimlik bilgileri saklidir. Sadece arada yoneticiler tarafindan onemli bir gerekceyle incelenip "tuh erkekmi$" denebilir. '+



    'Bir gun kapimiza biri gelirse "kim lan bunlar" diye "bi sn du$tayim" denir mutfak penceresinden kacilir.');



}

	var acik_kapali = false;

	var arr = new Array(13,15,22,26,43,65,95,120,140,180,205,212);

	var i = 0;

	function ac_kapa(){

		document.body.style.overflowX="hidden";

		var aradiv = document.getElementById('aradiv');

		//if(aradiv.style.left=='212px' || aradiv.style.left==''){

		if(acik_kapali==false){

			i = 11;

			ac();

		}else{

			//i = 0;

			kapa();

		}

	} function kapa(){

		with(document.body) with(aradiv.style) {

			left = (scrollLeft+arr[i]+(clientWidth-233))+'px';

			width=(233-arr[i])+"px";

			//alert(arr[i])

			if(i<11){

				i=i+1;

				setTimeout("kapa()",15);

			}else{

				acik_kapali = false;

				left='212px';

				width='21px';

				//document.getElementById('araasilform').disabled=true;

				document.body.focus();

			}

		}

	} function ac(){

		with(document.body) with(aradiv.style) {

			left = (scrollLeft+arr[i]+(clientWidth-233))+'px';

			width=(233-arr[i])+"px";

			//alert(left+" "+width);

			if(i>0){

				i=i-1;

				setTimeout("ac()",15);

			}else{

				acik_kapali = true;

				left='13px';

				width='220px';

				document.getElementById('araasilform').disabled=false;

				//document.getElementById('kn').focus();

			}

		}

	}





