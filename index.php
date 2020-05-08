<?php
// BEGIN SPlatform assembly
define ("SPCOMPILE", 1);
///////////////////////////
if(file_exists("core/framework.php")){
include("core/framework.php");
}else{ die("Please place the framework.php file in the 'core' folder before accessing this page!");};
///////////////////////////
if($accesslogs=="1"){
if (empty($_GET["page"])) { $logpage=$indexpagename; }else{ $logpage=$_GET["page"]; };
if(empty($_SERVER['HTTP_USER_AGENT'])){ $logua="No user agent"; }else{ $logua=$_SERVER['HTTP_USER_AGENT']; };
if ($siteonline=="1"){ $logsiteonline="Yes"; }else{ $logsiteonline="No"; };
if(!file_exists($user."/access-logs.php")){
	file_put_contents($user.'/access-logs.php', '<?php
	if(!defined("SPCOMPILE"))
	{
		die("
	<head><title>SPlatform - Protection script</title></head>
	<body>
	<h1>403: SPlatform -&gt; Forbidden</h1>
	<hr>
	You have reached this page in error, please use your back button to return to the site.
	<hr>
	SPlatform");
	}
	?>');
};
$logstxt = "
<tr>
	<td>".date('Y-m-d')." at ".date('h:i:sa')."</td>
	<td>".$_SERVER['REMOTE_ADDR']."</td>
	<td>".$logua."</td>
	<td>".$logsiteonline."</td>
	<td>".$logpage."</td>
</tr>
";
$logsfile = fopen($user.'/access-logs.php','a');
fwrite($logsfile,$logstxt);
};
if ($siteonline == 1){ 
if ($bansysenabled == 1){
$deny = $ip;
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>403.6 - Forbidden: IP address of the client has been rejected.</title>
<style type="text/css">
<!--
body{margin:0;font-size:.7em;font-family:Verdana, Arial, Helvetica, sans-serif;background:#EEEEEE;}
fieldset{padding:0 15px 10px 15px;} 
h1{font-size:2.4em;margin:0;color:#FFF;}
h2{font-size:1.7em;margin:0;color:#CC0000;} 
h3{font-size:1.2em;margin:10px 0 0 0;color:#000000;} 
#header{width:96%;margin:0 0 0 0;padding:6px 2% 6px 2%;font-family:"trebuchet MS", Verdana, sans-serif;color:#FFF;
background-color:#555555;}
#content{margin:0 0 0 2%;position:relative;}
.content-container{background:#FFF;width:96%;margin-top:8px;padding:10px;position:relative;}
-->
</style>
</head>
<body>
<div id="header"><h1>Server Error</h1></div>
<div id="content">
 <div class="content-container"><fieldset>
  <h2>403.6 - Forbidden: IP address of the client has been rejected.</h2>
  <h3>The Web site you are attempting to reach has a list of IP addresses that are not allowed to access the Web site, and the IP address of your browsing computer is on this list.</h3>
 </fieldset></div>
</div>
</body>
</html>
<?php
exit(); 
} else { 
// ===== Page manager 3.0 ===== //
if (!empty($_GET["page"])) {
	if (file_exists($pagesdir."/" . $_GET["page"] . ".".$pgext)) {
		include($themesfolder."/". $theme ."/header.theme.block.php");
		echo $content;
		include($themesfolder."/". $theme ."/footer.theme.block.php"); 
	} else {
    include($notfound);    
    }
	} else {
		if (file_exists($pagesdir."/".$index)) {
			include($themesfolder."/". $theme ."/header.theme.block.php");
			echo $content; // home page
			include($themesfolder."/". $theme ."/footer.theme.block.php"); 
		} else {
			include($notfound);    
      }
}
/////////////////////////// 
}
} else { 
// ===== Page manager 3.0 ===== //
if (!empty($_GET["page"])) {
	if (file_exists($pagesdir."/" . $_GET["page"] . ".".$pgext)) {
		include($themesfolder."/". $theme ."/header.theme.block.php");
		echo $content;
		include($themesfolder."/". $theme ."/footer.theme.block.php"); 
	} else {
    include($notfound);    
    }
	} else {
		if (file_exists($pagesdir."/".$index)) {
			include($themesfolder."/". $theme ."/header.theme.block.php");
			echo $content; // home page
			include($themesfolder."/". $theme ."/footer.theme.block.php"); 
		} else {
			include($notfound);    
      }
}
///////////////////////////
};
} else { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>503 - Service unavailable.</title>
<style type="text/css">
<!--
body{margin:0;font-size:.7em;font-family:Verdana, Arial, Helvetica, sans-serif;background:#EEEEEE;}
fieldset{padding:0 15px 10px 15px;} 
h1{font-size:2.4em;margin:0;color:#FFF;}
h2{font-size:1.7em;margin:0;color:#CC0000;} 
h3{font-size:1.2em;margin:10px 0 0 0;color:#000000;} 
#header{width:96%;margin:0 0 0 0;padding:6px 2% 6px 2%;font-family:"trebuchet MS", Verdana, sans-serif;color:#FFF;
background-color:#555555;}
#content{margin:0 0 0 2%;position:relative;}
.content-container{background:#FFF;width:96%;margin-top:8px;padding:10px;position:relative;}
-->
</style>
</head>
<body>
<div id="header"><h1>Server Error</h1></div>
<div id="content">
 <div class="content-container"><fieldset>
  <h2>503 - Service unavailable.</h2>
  <h3>The Web site is currently unable to handle the HTTP request due to a temporary overloading or maintenance of the server.
  <?php
  if(!empty($offlinemessage)){ ?>
  <br>
  The Web master of the Web site says: <?php echo $offlinemessage; }; ?>
  </h3>
 </fieldset></div>
</div>
</body>
</html>
<?php } ?>
