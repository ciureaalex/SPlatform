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
if(!defined("ACPMODULECONTENT")){
    $acpmmenuentry="1";
    if($acpmreq="menuplaintext"){ $acpmreqoutput="Website configuration"; };
    if($acpmreq="titleplaintext"){ $acpmreqoutput="Website configuration"; };
}elseif($cppg=="wscmngt"){ ?>
<?php
if(empty($_GET['wscaction'])){ $wscaction=""; }else{ $wscaction=$_GET['wscaction']; };


// fix notices for config variables
if(empty($_POST["title"])){ $wsctitle=""; }else{ $wsctitle=$_POST["title"]; };
if(empty($_POST["motto"])){ $wscmotto=""; }else{ $wscmotto=$_POST["motto"]; };
if(empty($_POST["theme"])){ $wsctheme=""; }else{ $wsctheme=$_POST["theme"]; };
if(empty($_POST["websiteaddress"])){ $wscwebsiteaddress=""; }else{ $wscwebsiteaddress=$_POST["websiteaddress"]; };
if(empty($_POST["timezone"])){ $wsctimezone=""; }else{ $wsctimezone=$_POST["timezone"]; };
if(empty($_POST["siteonline"])){ $wscsiteonline="0"; }else{ $wscsiteonline="1"; };
if(empty($_POST["offlinemessage"])){ $wscofflinemessage=""; }else{ $wscofflinemessage=$_POST["offlinemessage"]; };
if(empty($_POST["accesslogs"])){ $wscaccesslogs="0"; }else{ $wscaccesslogs="1"; };
if(empty($_POST["pagesfolder"])){ $wscpagesfolder=""; }else{ $wscpagesfolder=$_POST["pagesfolder"]; };
if(empty($_POST["indexpagename"])){ $wscindexpagename=""; }else{ $wscindexpagename=$_POST["indexpagename"]; };
if(empty($_POST["widgetsleft"])){ $wscwidgetsleft=""; }else{ $wscwidgetsleft=$_POST["widgetsleft"]; };
if(empty($_POST["widgetsright"])){ $wscwidgetsright=""; }else{ $wscwidgetsright=$_POST["widgetsright"]; };
if(empty($_POST["widgetstop"])){ $wscwidgetstop=""; }else{ $wscwidgetstop=$_POST["widgetstop"]; };
if(empty($_POST["widgetsbottom"])){ $wscwidgetsbottom=""; }else{ $wscwidgetsbottom=$_POST["widgetsbottom"]; };
if(empty($_POST["ip"])){ $wscip=""; }else{ $wscip=$_POST["ip"]; };
if(empty($_POST["bansysenabled"])){ $wscbansysenabled="0"; }else{ $wscbansysenabled="1"; };
if(empty($_POST["repo"])){ $wscrepo=""; }else{ $wscrepo=$_POST["repo"]; };
if(empty($_POST["repokey"])){ $wscrepokey=""; }else{ $wscrepokey=$_POST["repokey"]; };
if(empty($_POST["repooutput"])){ $wscrepooutput=""; }else{ $wscrepooutput=$_POST["repooutput"]; };
if(empty($_POST["pageextension"])){ $wscpageextension=""; }else{ $wscpageextension=$_POST["pageextension"]; };
if(empty($_POST["defaultuser"])){ $wscdefaultuser=""; }else{ $wscdefaultuser=$_POST["defaultuser"]; };
if(empty($_POST["debug"])){ $wscdebug="0"; }else{ $wscdebug="1"; };
if(empty($_POST["adminuser"])){ $wscadminuser=""; }else{ $wscadminuser=$_POST["adminuser"]; };
if(empty($_POST["adminpass"])){ $wscadminpass=$adminpass; }else{ $wscadminpass=$_POST["adminpass"]; };
if(empty($_POST["acpmodules"])){ $wscacpmodules="'cpdashboard'"; }else{ $wscacpmodules=$_POST["acpmodules"]; };
if(empty($_POST["extensions"])){ $wscextensions=""; }else{ $wscextensions=$_POST["extensions"]; };
if(empty($_POST["modules"])){ $wscmodules=""; }else{ $wscmodules=$_POST["modules"]; };

$wsctitle=str_replace('"','\'',$wsctitle);
$wscmotto=str_replace('"','\'',$wscmotto);
$wsctheme=str_replace('"','\'',$wsctheme);
$wscwebsiteaddress=str_replace('"','\'',$wscwebsiteaddress);
$wsctimezone=str_replace('"','\'',$wsctimezone);
$wscsiteonline=str_replace('"','\'',$wscsiteonline);
$wscofflinemessage=str_replace('"','\'',$wscofflinemessage);
$wscaccesslogs=str_replace('"','\'',$wscaccesslogs);
$wscpagesfolder=str_replace('"','\'',$wscpagesfolder);
$wscindexpagename=str_replace('"','\'',$wscindexpagename);
$wscwidgetsleft=str_replace('"','\'',$wscwidgetsleft);
$wscwidgetsright=str_replace('"','\'',$wscwidgetsright);
$wscwidgetstop=str_replace('"','\'',$wscwidgetstop);
$wscwidgetsbottom=str_replace('"','\'',$wscwidgetsbottom);
$wscip=str_replace('"','\'',$wscip);
$wscbansysenabled=str_replace('"','\'',$wscbansysenabled);
$wscrepo=str_replace('"','\'',$wscrepo);
$wscrepokey=str_replace('"','\'',$wscrepokey);
$wscrepooutput=str_replace('"','\'',$wscrepooutput);
$wscpageextension=str_replace('"','\'',$wscpageextension);
$wscdefaultuser=str_replace('"','\'',$wscdefaultuser);
$wscadminuser=str_replace('"','\'',$wscadminuser);
$wscdebug=str_replace('"','\'',$wscdebug);
$wscadminpass=str_replace('"','\'',$wscadminpass);
$wscacpmodules=str_replace('"','\'',$wscacpmodules);
$wscmodules=str_replace('"','\'',$wscmodules);
$wscextensions=str_replace('"','\'',$wscextensions);


if($wscaction=="exec"){ 
file_put_contents('config.php', '
<?php
$title="'.$wsctitle.'";
$motto="'.$wscmotto.'";
$siteonline='.$wscsiteonline.';
$offlinemessage="'.$wscofflinemessage.'";
$accesslogs="'.$wscaccesslogs.'";

$repo="'.$wscrepo.'";
$repokey="'.$wscrepokey.'";
$repooutput="'.$wscrepooutput.'";

$theme="'.$wsctheme.'";
$pagesfolder="'.$wscpagesfolder.'";
$pageextension="'.$wscpageextension.'";
$indexpagename="'.$wscindexpagename.'";

$bansysenabled='.$wscbansysenabled.';
$ip=array('.$wscip.');

$debug='.$wscdebug.';

$defaultuser="'.$wscdefaultuser.'";
$websiteaddress="'.$wscwebsiteaddress.'";
$timezone="'.$wsctimezone.'";

$widgetsleft=array('.$wscwidgetsleft.');
$widgetsright=array('.$wscwidgetsright.');
$widgetstop=array('.$wscwidgetstop.');
$widgetsbottom=array('.$wscwidgetsbottom.');

$modules=array('.$wscmodules.');

$extensions=array('.$wscextensions.');

$adminuser="'.$wscadminuser.'";
$adminpass="'.$wscadminpass.'";
$acpmodules=array('.$wscacpmodules.');
?>
    '); ?>
    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-wrench" aria-hidden="true"></i> Website configuration
                        </div>
                        <div class="panel-body">
                        Configuration file updated (we hope)
                        </div>
                    </div>
    </div>
    <?php
    die("");
};
?>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-wrench" aria-hidden="true"></i> Website configuration
                        </div>
                        <div class="panel-body">
<style>.checkbox-slider--b-flat{position:relative}.checkbox-slider--b-flat input{display:block;position:absolute;top:0;right:0;bottom:0;left:0;width:0%;height:0%;margin:0;cursor:pointer;opacity:0;filter:alpha(opacity=0)}.checkbox-slider--b-flat input+span{cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;padding-left:40px}.checkbox-slider--b-flat input+span:before{position:absolute;left:0;display:inline-block;content:"";height:20px;background:rgba(100,100,100,.2);transition:background .2s ease-out;border-radius:20px;width:40px;box-shadow:none}.checkbox-slider--b-flat input+span>h4{display:inline}.checkbox-slider--b-flat input+span:after{height:20px;position:absolute;left:0;top:0;display:block;transition:margin-left .1s ease-in-out;text-align:center;font-weight:700}.checkbox-slider--b-flat input+span:after{background:#fff;content:"";width:20px;border:2px solid transparent;background-clip:padding-box;border-radius:20px}.checkbox-slider--b-flat input:not(:checked)+span:after{-webkit-animation:popOut ease-in .3s normal;animation:popOut ease-in .3s normal}.checkbox-slider--b-flat input:checked+span:after{content:"";margin-left:20px;border:2px solid transparent;background-clip:padding-box;-webkit-animation:popIn ease-in .3s normal;animation:popIn ease-in .3s normal}.checkbox-slider--b-flat input:checked+span:before{transition:background .2s ease-in;background:#5cb85c}.checkbox-slider--b-flat.checkbox-slider-md input+span:after,.checkbox-slider--b-flat.checkbox-slider-md input+span:before{border-radius:30px}.checkbox-slider--b-flat.checkbox-slider-lg input+span:after,.checkbox-slider--b-flat.checkbox-slider-lg input+span:before{border-radius:40px}.checkbox-slider-info.checkbox-slider--b input:checked+span:before,.checkbox-slider-info.checkbox-slider--b-flat input:checked+span:before,.checkbox-slider-info.checkbox-slider--c input:checked+span:before,.checkbox-slider-info.checkbox-slider--c-weight input:checked+span:before{background:#5bc0de}.checkbox-slider-warning.checkbox-slider--b input:checked+span:before,.checkbox-slider-warning.checkbox-slider--b-flat input:checked+span:before,.checkbox-slider-warning.checkbox-slider--c input:checked+span:before,.checkbox-slider-warning.checkbox-slider--c-weight input:checked+span:before{background:#f0ad4e}.checkbox-slider-danger.checkbox-slider--b input:checked+span:before,.checkbox-slider-danger.checkbox-slider--b-flat input:checked+span:before,.checkbox-slider-danger.checkbox-slider--c input:checked+span:before,.checkbox-slider-danger.checkbox-slider--c-weight input:checked+span:before{background:#d9534f}.checkbox-slider-sm{line-height:10px}.checkbox-slider-sm input+span{padding-left:20px}.checkbox-slider-sm input+span:before{width:20px}.checkbox-slider-sm input+span:after,.checkbox-slider-sm input+span:before{height:10px;line-height:10px}.checkbox-slider-sm input+span:after{width:10px;vertical-align:middle}.checkbox-slider-sm input:checked+span:after{margin-left:10px}.checkbox-slider-md{line-height:30px}.checkbox-slider-md input+span{padding-left:60px}.checkbox-slider-md input+span:before{width:60px}.checkbox-slider-md input+span:after,.checkbox-slider-md input+span:before{height:30px;line-height:30px}.checkbox-slider-md input+span:after{width:30px;vertical-align:middle}.checkbox-slider-md input:checked+span:after{margin-left:30px}.checkbox-slider-lg{line-height:40px}.checkbox-slider-lg input+span{padding-left:80px}.checkbox-slider-lg input+span:before{width:80px}.checkbox-slider-lg input+span:after,.checkbox-slider-lg input+span:before{height:40px;line-height:40px}.checkbox-slider-lg input+span:after{width:40px;vertical-align:middle}.checkbox-slider-lg input:checked+span:after{margin-left:40px}</style>
<form action="?pgi=wscmngt&wscaction=exec" method="POST">
<center><h4>General</h4></center>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Website title</span><input type="text" class="form-control" name="title" placeholder="The title of your website" value="<?php echo $title; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Website motto</span><input type="text" class="form-control" name="motto" placeholder="The motto of your website (not used in all themes)" value="<?php echo $motto; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Website theme</span><input type="text" class="form-control" name="theme" placeholder="The name of the folder that contains the theme you want to be applied" value="<?php echo $theme; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Website address</span><input type="text" class="form-control" name="websiteaddress" placeholder="Example: http://localhost/" value="<?php echo $websiteaddress; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Website timezone</span><input type="text" class="form-control" name="timezone" placeholder="The timezone the website is in" value="<?php echo $timezone; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Accesible (online)</span><div class="checkbox checkbox-slider--b-flat checkbox-slider-md"><label><input type="checkbox" name="siteonline"<?php if($siteonline=="1"){ ?>checked=""<?php }; ?>><span></span></label></div></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Offline message</span><input type="text" class="form-control" name="offlinemessage" placeholder="The message displayed when the website is offline" value="<?php echo $offlinemessage; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Access logs</span><div class="checkbox checkbox-slider--b-flat checkbox-slider-md"><label><input type="checkbox" name="accesslogs" <?php if($accesslogs=="1"){ ?>checked=""<?php }; ?>><span></span></label></div></div>
<hr>
<center><h4>Page manager</h4></center>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Website pages folder</span><input type="text" class="form-control" name="pagesfolder" placeholder="The folder that contains your pages files" value="<?php echo $pagesfolder; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Website index page</span><input type="text" class="form-control" name="indexpagename" placeholder="The name of the file you want to be used as the index" value="<?php echo $indexpagename; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Left widgets</span><input type="text" class="form-control" name="widgetsleft" placeholder="Left section widgets folder name (ex: 'widget1', 'widget2', 'widget3')" value="<?php if(!empty($widgetsleft)){ $nr=count($widgetsleft);$counter=1;foreach($widgetsleft as $widgetsthing => $widgetsleftarray){ $counter++;  if($counter>$nr){ echo "'".$widgetsleftarray."'"; }else{ echo "'".$widgetsleftarray."', "; };}; }; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Right widgets</span><input type="text" class="form-control" name="widgetsright" placeholder="Right section widgets folder name (ex: 'widget1', 'widget2', 'widget3')" value="<?php if(!empty($widgetsright)){ $nr=count($widgetsright);$counter=1;foreach($widgetsright as $widgetsthing => $widgetsrightarray){ $counter++;  if($counter>$nr){ echo "'".$widgetsrightarray."'"; }else{ echo "'".$widgetsrightarray."', "; };}; }; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Top widgets</span><input type="text" class="form-control" name="widgetstop" placeholder="Top section widgets folder name (ex: 'widget1', 'widget2', 'widget3')" value="<?php if(!empty($widgetstop)){ $nr=count($widgetstop);$counter=1;foreach($widgetstop as $widgetsthing => $widgetstoparray){ $counter++;  if($counter>$nr){ echo "'".$widgetstoparray."'"; }else{ echo "'".$widgetstoparray."', "; };}; }; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Bottom widgets</span><input type="text" class="form-control" name="widgetsbottom" placeholder="Bottom section widgets folder name (ex: 'widget1', 'widget2', widget3')" value="<?php if(!empty($widgetsbottom)){ $nr=count($widgetsbottom);$counter=1;foreach($widgetsbottom as $widgetsthing => $widgetsbottomarray){ $counter++;  if($counter>$nr){ echo "'".$widgetsbottomarray."'"; }else{ echo "'".$widgetsbottomarray."', "; };}; }; ?>"></div>
<hr>
<center><h4>Site protection</h4></center>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Banned IP addresses</span><input type="text" class="form-control" name="ip" placeholder="Write IPs like: 'IP1', 'IP2', 'IP3', 'IP4'" value="<?php if(!empty($ip)){ $nr=count($ip);$counter=1;foreach($ip as $ipthing => $ipaddress){ $counter++;  if($counter>$nr){ echo "'".$ipaddress."'"; }else{ echo "'".$ipaddress."', "; };}; }; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Ban system status</span><div class="checkbox checkbox-slider--b-flat checkbox-slider-md"><label><input type="checkbox" name="bansysenabled" <?php if($bansysenabled=="1"){ ?>checked=""<?php }; ?>><span></span></label></div></div>
<hr>
<center><h4>Update system</h4></center>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Repo address</span><input type="text" class="form-control" name="repo" placeholder="Repo's address" value="<?php echo $repo; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Repo key</span><input type="text" class="form-control" name="repokey" placeholder="The key that's needed to access the repo" value="<?php echo $repokey; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Repo comm. file</span><input type="text" class="form-control" name="repooutput" placeholder="The file that's used to print the response" value="<?php echo $repooutput; ?>"></div>
<hr>
<center><h4>Administration panel</h4></center>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Admin username</span><input type="text" class="form-control" name="adminuser" placeholder="Username used to sign in (don&#39;t use &quot; or &#39)" value="<?php echo $adminuser; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Admin password</span><input type="text" class="form-control" name="adminpass" placeholder="Leave empty if you don't wish to change this (don&#39;t use &quot; or &#39)" value=""></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">ACP Modules</span><input type="text" class="form-control" name="acpmodules" placeholder="ACP Modules (cpdashboard is required)" value="<?php if(!empty($acpmodules)){ $nr=count($acpmodules);$counter=1;foreach($acpmodules as $acpmodulesthing => $acpmodulesarray){ $counter++;  if($counter>$nr){ echo "'".$acpmodulesarray."'"; }else{ echo "'".$acpmodulesarray."', "; };}; }; ?>"></div>
<hr>
<center><h4>Advanced users</h4></center>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Website pages extension</span><input type="text" class="form-control" name="pageextension" placeholder="Do not add any dot, just write the extenion with no dots like 'php'" value="<?php echo $pageextension; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Default user</span><input type="text" class="form-control" name="defaultuser" placeholder="The folder were stuff like the 404 page or the menu are loaded from" value="<?php echo $defaultuser; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Extensions</span><input type="text" class="form-control" name="extensions" placeholder="SP Extensions" value="<?php if(!empty($extensions)){ $nr=count($extensions);$counter=1;foreach($extensions as $extensionsthing => $extensionsarray){ $counter++;  if($counter>$nr){ echo "'".$extensionsarray."'"; }else{ echo "'".$extensionsarray."', "; };}; }; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Modules</span><input type="text" class="form-control" name="modules" placeholder="SP Modules" value="<?php if(!empty($modules)){ $nr=count($modules);$counter=1;foreach($modules as $modulesthing => $modulesarray){ $counter++;  if($counter>$nr){ echo "'".$modulesarray."'"; }else{ echo "'".$modulesarray."', "; };}; }; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Website debug menu</span><div class="checkbox checkbox-slider--b-flat checkbox-slider-md"><label><input type="checkbox" name="debug" <?php if($debug=="1"){ ?>checked=""<?php }; ?>><span></span></label></div></div>
<hr>
<button class="btn btn-success btn-block" type="submit" name="send">Update my configuration file</button>
</form>



</div>
</div>
</div>
</div>
<?php

}; ?>