<?php if(!defined('IN_RAINTPL')){exit('Hacker attempt');}?><!-- page | www.raintpl.com 1.7.6 -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
	<meta name="description" content="www.RainTPL.com">
	<title>Rain TPL</title>

	<!-- this link will be substituted with the right path : href="THEMES/acid/style.css" -->
	<link href="tpl/style.css" type="text/css" rel="stylesheet" >
</head>

<body>
	<table id="site" cellspacing="0" cellpadding="0">
		<tr>
			<!-- this img src will be substituted with the right path : src="tpl/THEMES/acid/images.gif" -->			
			<td id="top"><a href="http://www.raintpl.com"><img src="tpl/images/title.gif"></a></td>
		</tr>
		<tr>
			<td id="subtitle" align="right">
			</td>
		</tr>
		<tr>
			<!-- content -->
			<td id="center">
				
				<table cellspacing="0" cellpadding="0" id="content">
					<tr>
						<!-- center content -->						
						<td id="inner_content">
						
							<span class="text_page_title">Template Example</span>
							<div class="layout">
							This is a variable <i>{$variable}</i>: <?php echo $var["variable"];?>
							<br>and this is a variabile with function <i>{$variable|substr:0,4}</i>: <?php echo ( substr( $var["variable"], 0,4 ) );?>
							<br><br><br>
							You can use system variables like:
							<i>{$GLOBALS} - {$_SERVER} - {$_SESSIONS} - {$_COOKIE} - {$_GET} - {$_POST}</i> 
							<br>For example <i>{$_SERVER['DOCUMENT_ROOT']}</i>: <?php echo $_SERVER['DOCUMENT_ROOT'];?>
							<br>This is a constant example <i>{#PHP_CONFIG_FILE_PATH#}</i>: <?php echo PHP_CONFIG_FILE_PATH;?>
							<br><br><br>
							This is a loop example
							<br>
							<table cellspacing="0" cellpadding="10" class="table">
								<tr>
							<?php
	if( isset( $var["week"] ) && is_array( $var["week"] ) ){
		$counter1 = 0;
		foreach( $var["week"] as $key1 => $value1 ){ 
?>
									<td class="row_<?php echo $counter1%2+1;?>"><?php echo $value1;?></td>
							<?php
			$counter1++;
		}
	}
?>
								</tr>
							</table>
							<br><br>
							This is another loop example:
							<br>
							<table cellspacing="0" cellpadding="10" class="table">
								<tr>
									<td></td><td>Nome</td><td>Et�</td>
								</tr>
							<?php
	if( isset( $var["user"] ) && is_array( $var["user"] ) ){
		$counter1 = 0;
		foreach( $var["user"] as $key1 => $value1 ){ 
?>
								<tr><td class="row_<?php echo $counter1%2+1;?>"><?php echo $key1;?></td><td class="row_<?php echo $counter1%2+1;?>"><?php echo $value1["name"];?></td><td class="row_<?php echo $counter1%2+1;?>"><?php echo $value1["age"];?></tr>
							<?php
			$counter1++;
		}
	}
?>
							</table>
							<br><br>
							Include file: <?php
$RainTPL_include_obj = new RainTPL();
$RainTPL_include_obj->assign( $var );
$RainTPL_directory_template_temp = $RainTPL_include_obj->tpl_dir;
$this->tpl_dir = $GLOBALS[ 'RainTPL_tpl_dir' ] = $RainTPL_include_obj->tpl_dir . "/" . dirname( "info" );
$RainTPL_include_obj->draw( "info" );
$this->tpl_dir = $GLOBALS[ 'RainTPL_tpl_dir' ] = $RainTPL_directory_template_temp;
?>
							
							</div>
						</td>						
						<!-- center content -->						
					</tr>
				</table>
				
			</td>
			<!-- content -->			
		</tr>
		<tr>
			<td id="bottom" align="center"><p><?php echo $var["copyright"];?></p></td>
		</tr>
			
	</table>

</body>
</html>

<!--/ page -->
