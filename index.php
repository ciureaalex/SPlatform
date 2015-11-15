<?php
require_once("core/config/banned.php");
$deny = array($ip);
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
?>
<head><title> SPlatform Core | DENY
</title><style type="text/css"></style></head>
<body style="color: #444; margin:0;font: normal 14px/20px Arial, Helvetica, sans-serif; height:100%; background-color: #fff;">
<div style="height:auto; min-height:100%; ">     <div style="text-align: center; width:800px; margin-left: -400px; position:absolute; top: 30%; left:50%;">
        <h1 style="margin:0; font-size:150px; line-height:150px; font-weight:bold;">403</h1>
<h2 style="margin-top:20px;font-size: 30px;">Forbidden
</h2>
<p>You are denied from accesing this website.</p>
</div></div><div style="color:#f0f0f0; font-size:12px;margin:auto;padding:0px 30px 0px 30px;position:relative;clear:both;height:100px;margin-top:-101px;background-color:#474747;border-top: 1px solid rgba(0,0,0,0.15);box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;">
<br>Proudly powered by  <a style="color:#fff;" href="http://splatform.ml">SPlatform</a><p>If you think that this is a mistake, email the website owner</p></div>
</body>
<?php exit(); }; 
// ===== Page manager 2.1 ===== //
if (!empty($_GET["page"])) {
	if (file_exists("pages/" . $_GET["page"] . ".php")) {
		include("core/config/theme/header.php");
		include("pages/" . $_GET["page"] . ".php");
		include("core/config/theme/footer.php"); 
	} else {
    include("core/config/404.php");    
    }
	} else {
		if (file_exists("pages/home.php")) {
			include("core/config/theme/header.php");
			include("pages/home.php");
			include("core/config/theme/footer.php"); 
		} else {
			include("core/config/404.php");    
      }
}
?>