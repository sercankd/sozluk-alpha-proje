/*
 * sözlük spot alt yapısı
 *
 * bu yazılımın tüm hakları sözlük spot alt yapı hizmetlerine aittir.
 * herhangi bir şekilde kopyalanması yasaktır.
 * kopyalanma halinde çıkacak telif hakkı ihlalleri için
 * her türlü hukuki yollar kullanılarak cezai yaptırımlar
 * uygulanması sağlanacaktır.
 *
 *
 * sözlük spot alt yapı hizmetleri
 */


/* sözlük spot */
function sspot_arastir(t) {
    document.write('<select style="display:block !important; position:static !important;width:160px !important;height:auto !important;overflow:visible !important;" onchange="if(this.selectedIndex>0){window.open(decodeURIComponent(this.options[this.selectedIndex].value)+\'' + t + '\');this.selectedIndex=0;}">');
    document.write(
    '<option>..bilgi kaynakları..</option>' +
    '<option value="http://sozluk.sourtimes.org/show.asp?t=">ekşi sözlük</option>'+
    '<option value="http://www.uludagsozluk.com/k/">uludağ sözlük</option>' +
    '<option value="http://www.google.com.tr/search?q=">google</option>' +
	'');
    document.write('</select>');
    // + '<option value="http://www.seslisozluk.com/?word=">seslisözlük</option>' +
    //'<option value="http://en.wikipedia.org/wiki/Special:Search?fulltext=Search&search=">wikipedia</option>'
}


/* sözlük spot baslik editleme */
function sozlukspot_change_tit(baslik){
	if (typeof(parent.document) != 'undefined' && typeof(parent.document) != 'unknown'
		&& typeof(parent.document.title) == 'string') {
		parent.document.title = baslik;
	}
}

/* sözlük spot pop up */
function po(url, name, gen, yuk){
	xko= Math.round((screen.width-gen)/3.5);
	yko= Math.round((screen.height-yuk)/2);
	var win = window.open(url,name,"toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,width=" + gen + ",height=" + yuk + ",top="+yko.toString()+",left="+xko.toString()+"");
	win.focus();
}

/* sözlük spot pop up 2 */
function pop(url, name, gen, yuk){
	po(url, name, gen, yuk);
	if(window.event)
		event.returnValue = false;
	return false;
}

/* sözlük spot oylama */
function oy(id, puan){
	pop('/ss_index.php?sa=oylama&id='+id+'&ne=yap&pu='+puan,'oy_'+id,'300','130');
}

/*
 * sözlük spot alt yapısı
 *
 * bu yazılımın tüm hakları sözlük spot alt yapı hizmetlerine aittir.
 * herhangi bir şekilde kopyalanması yasaktır.
 * kopyalanma halinde çıkacak telif hakkı ihlalleri için
 * her türlü hukuki yollar kullanılarak cezai yaptırımlar
 * uygulanması sağlanacaktır.
 *
 *
 * sözlük spot alt yapı hizmetleri
 */


/* sözlük spot yerine koyma */
function koy(id,bas,son) {
	var t = document.getElementById(id);
	if (document.selection){
		var sonuc = document.selection.createRange();
		var el = sonuc.parentElement();
		if(el!=t){
			alert('metni seç, sonra tuşa bas.');
		}else{
			sonuc.text  = bas+sonuc.text+son; sonuc.select();
		}
	}else if (t.selectionStart || t.selectionStart == '0') {
		var tbas = t.value.substring(0,t.selectionStart);
		var sonuc = t.value.substring(t.selectionStart,t.selectionEnd);
		var tson = t.value.substring(t.selectionEnd,t.value.length);
		t.value  = tbas+bas+sonuc+son+tson;
	} else {
		t.value += bas+son;
	}
	t.focus();
	if(window.event)
		event.returnValue = false;
	return false;
}

	
/* sözlük spot gizlegoster */
	function gizlegoster(id){
		var d = document.getElementById(id);
		if(d.style.display=='block') d.style.display = 'none';
		else d.style.display = 'block';
		return false;
	}

/* sözlük spot uzama */
	function uz(input){
		var d = document.getElementById(input);
		var k = d.value.length;
		if(k>2000)			d.rows = 40;		if(k>1000)			d.rows = 35;		else if(k>750)			d.rows = 30;		else if(k>500)			d.rows = 25;		else if(k>250)			d.rows = 15;		else			d.rows = 10;
	}

/*
 * sözlük spot alt yapısı
 *
 * bu yazılımın tüm hakları sözlük spot alt yapı hizmetlerine aittir.
 * herhangi bir şekilde kopyalanması yasaktır.
 * kopyalanma halinde çıkacak telif hakkı ihlalleri için
 * her türlü hukuki yollar kullanılarak cezai yaptırımlar
 * uygulanması sağlanacaktır.
 *
 *
 * sözlük spot alt yapı hizmetleri
 */
	
/* sözlük spot entry bilgileri */
	var jj=0;
	function entry_td(a,href,title,id){
		ij = "a"+(jj++);
		document.write('<td onmousedown="this.id=\'butDown\'" onmouseout="this.id=\'\'" onmousemove="this.id=\'butOver\'" onmousemove="this.id=\'\'" class="linkler" onClick="'+ij+'.click();"   >&nbsp;<a href="'+href+'" id="'+ij+'" title="'+title+'">'+a+'</a>&nbsp;</td>');
	} function entry_sil(id,action){
		if(action=='ogul'){
			window.location = '/soz_uye_kelime.php?sa=sil&id='+id;
		}else{
			var co = confirm('emin misin?');
			if(co==true) window.location = '/soz_uye_kelime.php?sa=sil&id='+id;
		}
	} function entry(id,yazar,yazarid,action,adres){
		document.write('<div align="right"><table id="t'+id+'" style="visibility:hidden;" ><tr>');
		document.write('<td><span style="display:none;font-size:8pt;" id="ekleniyor'+id+'"><i>loading...</i></span></td>');
		document.write("<td><a href=\"javascript:po('/soz_uye_entryid.php?ac=action&id="+id+"','entryid"+id+"','300','200');\">"+'<font color="" size="1"><small>#'+id+'</small></font></a>&nbsp;</td>');
		if(action!='self' && action!='ogse' && action!='okur'){
			entry_td(':)','" onclick="return oyp(\'1\','+id+');','şükela',id);
			entry_td(':o','" onclick="return oyp(\'0\','+id+');','orta',id);
			entry_td(':(','" onclick="return oyp(\'-1\','+id+');','şaibeli',id);
			document.write('<td>&nbsp;</td>');
			entry_td('/msj','/ss_index.php?sa=msj&kime='+yazarid+'&id='+id,'#'+id+' nolu entry sahibine özel mesaj gönder',id);
		}
		if(action=='self' || action=='ogul' || action=='ogse'   ){
			entry_td('edit','/soz_uye_kelime.php?sa=duzelt&id='+id,'Entry\'i düzelt',id);
			entry_td('sil',"javascript:entry_sil('"+id+"','"+action+"')",'Entry\'i sil',id);
		}
		if(action=='ogul'){
			entry_td('yazar','/ss_index.php?sa=mod&ne=yazaredit&id='+yazarid,'Bu yazara çeki düzen ver.',id);
		}

		if(action=='okur'){
			//entry_td('w',adres+'" target="_blank',adres,id);
			entry_td('!?','/ss_index.php?sa=iletisim&id='+id,'bu entryi sikayet et.',id);
		}else{
			entry_td('?',"javascript:po('/ss_index.php?sa=yzr&y="+yazar+"','yazar_"+yazarid+"','340','450');",'bu yazar kimdir nedir',id); //
		}
		if(action=='gammaz'){
			entry_td('!?',"javascript:po('/ss_index.php?sa=sikayet&id="+id+"','si"+id+"','500','300');",'ispiyonla',id);
		}
		document.write('</tr></table></div>');
		var li = document.getElementById("li_"+id);
		li.onmouseover=new Function("document.getElementById('t"+id+"').style.visibility='visible'");
		li.onmouseout=new Function("document.getElementById('t"+id+"').style.visibility='hidden'");
	} function oyp(puan,id){
		ajaxpage1('/soz_uye_oylamax.php?id='+id+'&pu='+puan+'&ne=yap','ekleniyor'+id);
		if(window.event)
			event.returnValue = false;
		return false; 
	}

/*
 * sözlük spot alt yapısı
 *
 * bu yazılımın tüm hakları sözlük spot alt yapı hizmetlerine aittir.
 * herhangi bir şekilde kopyalanması yasaktır.
 * kopyalanma halinde çıkacak telif hakkı ihlalleri için
 * her türlü hukuki yollar kullanılarak cezai yaptırımlar
 * uygulanması sağlanacaktır.
 *
 *
 * sözlük spot alt yapı hizmetleri
 */
	
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




/*
 * sözlük spot alt yapısı
 *
 * bu yazılımın tüm hakları sözlük spot alt yapı hizmetlerine aittir.
 * herhangi bir şekilde kopyalanması yasaktır.
 * kopyalanma halinde çıkacak telif hakkı ihlalleri için
 * her türlü hukuki yollar kullanılarak cezai yaptırımlar
 * uygulanması sağlanacaktır.
 *
 *
 * sözlük spot alt yapı hizmetleri
 */

	var loadedobjects=""
	var rootdomain="http://"+window.location.hostname

	function ajaxpage(url, id){
		var d = document.getElementById(id);
		if(d.style.display=='block'){
			d.style.display = 'none';
		}else{
			d.style.display = 'block';
			ajaxpage2(url,id);
		}
	} function ajaxpage1(url, id){
		var d = document.getElementById(id);
		if(d.style.display!='block'){
			d.style.display = 'block';
		}
		ajaxpage2(url,id);
		setTimeout("ajaxpage1kapa('"+id+"')",4000);
	} function ajaxpage1kapa(id){
		var d = document.getElementById(id);
		d.innerHTML= 'bi dakka...'
		d.style.display = 'none';
	}
/*
 * sözlük spot alt yapısı
 *
 * bu yazılımın tüm hakları sözlük spot alt yapı hizmetlerine aittir.
 * herhangi bir şekilde kopyalanması yasaktır.
 * kopyalanma halinde çıkacak telif hakkı ihlalleri için
 * her türlü hukuki yollar kullanılarak cezai yaptırımlar
 * uygulanması sağlanacaktır.
 *
 *
 * sözlük spot alt yapı hizmetleri
 */
	function ajaxpage2(url, containerid){
		var page_request = false
		if (window.XMLHttpRequest) // if Mozilla, Safari etc
			page_request = new XMLHttpRequest()
		else if (window.ActiveXObject){ // if IE
			try {
				page_request = new ActiveXObject("Msxml2.XMLHTTP")
			} 
			catch (e){
				try{
					page_request = new ActiveXObject("Microsoft.XMLHTTP")
				}
				catch (e){}
			}
		} else
			return false
		page_request.onreadystatechange=function(){
			loadpage(page_request, containerid)
		}
		page_request.open('GET', url, true)
		page_request.send(null)
	} function loadpage(page_request, containerid){
		if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1))
			document.getElementById(containerid).innerHTML=page_request.responseText
	} function loadobjs(){
		if (!document.getElementById)
		return
		for (i=0; i<arguments.length; i++){
		var file=arguments[i]
		var fileref=""
			if (loadedobjects.indexOf(file)==-1){ //Check to see if this object has not already been added to page before proceeding
				if (file.indexOf(".js")!=-1){ //If object is a js file
					fileref=document.createElement('script')
					fileref.setAttribute("type","text/javascript");
					fileref.setAttribute("src", file);
				}
				else if (file.indexOf(".css")!=-1){ //If object is a css file
					fileref=document.createElement("link")
					fileref.setAttribute("rel", "stylesheet");
					fileref.setAttribute("type", "text/css");
					fileref.setAttribute("href", file);
				}
			}
			if (fileref!=""){
				document.getElementsByTagName("head").item(0).appendChild(fileref)
				loadedobjects+=file+" " //Remember this object as being already added to page
			}
		}
	}
/*
 * sözlük spot alt yapısı
 *
 * bu yazılımın tüm hakları sözlük spot alt yapı hizmetlerine aittir.
 * herhangi bir şekilde kopyalanması yasaktır.
 * kopyalanma halinde çıkacak telif hakkı ihlalleri için
 * her türlü hukuki yollar kullanılarak cezai yaptırımlar
 * uygulanması sağlanacaktır.
 *
 *
 * sözlük spot alt yapı hizmetleri
 */


/* sözlük spot baslik editleme */
function title(baslik){
	if (typeof(parent.document) != 'undefined' && typeof(parent.document) != 'unknown'
		&& typeof(parent.document.title) == 'string') {
		parent.document.title = baslik;
	}
}
