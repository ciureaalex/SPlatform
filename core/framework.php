<?php
if(!defined("SPCOMPILE"))
{
	die("
<head><title>SPlatform - Protection script</title><style type='text/css'></style></head>
<body>
<h1>403: SPlatform -&gt; Forbidden</h1>
<hr>
You have reached this page in error, please use your back button to return to the site.
<hr>
SPlatform");
}
?>
<?php
/* 
 First of all, why are you here?
 Who lied to you and said that this file should be edited?
 You should close your editor/viewer for this file right now!!
 This is the "core" of the SPlatform!
 You should not play with it!!!!
 This file should be viewed or edited only by people who know PHP and want to tweak the SPlatform Core!
 
 If you are a tweaker, be aware that this file is always replaced with the stock one when SPlatform Core is updating.
 
 NOW CLOSE THIS FILE BEFORE YOU BREAK MY STUFF
 
 STOP READING THIS AND PLEASE DO WHAT I SAID!!!
 
 Really? You did not quit your editor yet? WHY?! 
 
 Ok, ok, I'll let you view this file, but PLEASE DO NOT EDIT IT.
 
 Thanks, the Author.
*/
/* DO NOT MODIFY THE FOLLOWING LINES */
if(file_exists("config.php")){
	include_once("config.php"); // Config
	}else{ die("E: Unable to locate config.php! Make sure that config.php is in the website root directory!"); };
	
$corevernr="8";
$coreverlet="180808";
$corestatus="rel";
$updatechannel="rel";
$corename="Eclair";

date_default_timezone_set($timezone);
$ver=$corevernr;
$compile="SPlatform U$ver ($corevernr.$coreverlet-$corestatus)";
if($_SERVER['SERVER_PORT']  == 443){ $ssl="https"; }else{ $ssl="http"; }; // SSL Detection
$mylocweb = $ssl."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // Website on the internet detection
$phpver= phpversion();
$year= date("Y");
$pagesdir= $pagesfolder; // Pages folder from config
$actual_link= $mylocweb; // The URL you are on
$corefolder="core"; // Core Folder
$temporaryfiles="$corefolder/tmp"; // Temporary files and folders
$user= $defaultuser; // User folder - used to store random stuff like 404 error page -
$usererrors="$user/errors"; // User defined errors
$notfound="$usererrors/404.php"; // User defined 404 error
$templatemenu="$user/menu.php"; // Menu for theme
$addonsfolder="addons"; // Addons folder
$themesfolder="themes"; // Themes folder
$pgext="$pageextension"; // Fast extension change
$index="$indexpagename.$pgext"; // Index page - default home.php
$extensionsfolder="$addonsfolder/extensions"; // Extensions folder
$modulesfolder="$addonsfolder/modules"; // Modules folder
$widgetsfolder="$addonsfolder/widgets"; // Widgets folder
$acpmodulesfolder=$corefolder."/acpmodules";
$md5compile=md5($compile);



include($corefolder."/functions.php"); // FUNCTIONS
// Avoid undefined variables
if(empty($websiteaddress)){$websiteaddress="";};
$content=""; // Pre-page init process - avoid error
$pgtitle="";
$pgtype="";
$pgdescription="";
$pglocale="en_US";
$pgimage="";
$pgimagesecure_url="";
$pgimagetype="";
$pgimagewidth="";
$pgimageheight="";
// Pages loader
if (empty($_GET['page'])) { if(file_exists("$pagesdir/$index")){ include("$pagesdir/$index"); }; };
if (!empty($_GET['page'])) { if(file_exists("$pagesdir/".$_GET['page'].".$pgext")){ include("$pagesdir/".$_GET['page'].".$pgext"); }; };


if($debug == 1){
core("debug");
}; // Close debug==1

// Meta
$metacharset="utf-8";
$htmlstarttag="<html prefix='og: http://ogp.me/ns#'>";
if(!empty($pgtitle)){ $ogtitle=$title." - ".$pgtitle; }else{ $ogtitle=$title; };
$ogtype=$pgtype;
$ogurl=$actual_link;
$ogdescription=$pgdescription;
$oglocale=$pglocale; // en_US
$ogsite_name=$title;
$ogimage=$pgimage;
$ogimagesecure_url=$pgimagesecure_url;
$ogimagetype=$pgimagetype;
$ogimagewidth=$pgimagewidth;
$ogimageheight=$pgimageheight;



extensionshandle("load");
?>
