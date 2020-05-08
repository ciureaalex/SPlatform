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

function core($param){
    if(empty($param)){ $param=""; };
    if($param == "meta"){
        global $ogsite_name;
        global $oglocale;
        global $ogdescription;
        global $ogtitle;
        global $ogtype;
        global $ogurl;
        global $ogimage;
        global $ogimagesecure_url;
        global $ogimagetype;
        global $ogimagewidth;
        global $ogimageheight;
        ?>
        <?php if(!empty($ogsite_name)){ ?><meta property="og:site_name" content="<?php echo $ogsite_name; ?>" /><?php }; ?>
        <?php if(!empty($oglocale)){ ?><meta property="og:locale" content="<?php echo $oglocale; ?>" /><?php }; ?>
        <?php if(!empty($ogdescription)){ ?><meta property="og:description" content="<?php echo $ogdescription; ?>" />
        <meta name="description" content="<?php echo $ogdescription; ?>" /><?php }; ?>
        <?php if(!empty($ogtitle)){ ?><meta property="og:title" content="<?php echo $ogtitle; ?>" /><?php }; ?>
        <?php if(!empty($ogtype)){ ?><meta property="og:type" content="<?php echo $ogtype; ?>" /><?php }; ?>
        <?php if(!empty($ogurl)){ ?><meta property="og:url" content="<?php echo $ogurl; ?>" /><?php }; ?>
        <?php if(!empty($ogimage)){ ?><meta property="og:image" content="<?php echo $ogimage; ?>" /><?php }; ?>
        <?php if(!empty($ogimagesecure_url)){ ?><meta property="og:image:secure_url" content="<?php echo $ogimagesecure_url; ?>" /><?php }; ?>
        <?php if(!empty($ogimagetype)){ ?><meta property="og:image:type" content="<?php echo $ogimagetype; ?>" /><?php }; ?>
        <?php if(!empty($ogimagewidth)){ ?><meta property="og:image:width" content="<?php echo $ogimagewidth; ?>" /><?php }; ?>
        <?php if(!empty($ogimageheight)){ ?><meta property="og:image:height" content="<?php echo $ogimageheight; ?>" /><?php }; ?>
        <?php
    };
    if($param == "debug"){
        global $compile;
        global $selectedrepo;
        global $repooutput;
        global $repokey;
        global $title;
        global $motto;
        global $themehead;
        global $themebody;
        global $bansysenabled;
        global $siteonline;
        global $track;

	global $pagesfolder;
	global $pageextension;
	global $indexpagename;

	global $defaultuser;

        global $pgdescription;
        global $pgtitle;
        global $pgimage;
        global $pgimagesecure_url;
        global $pgimagetype;
        global $pgimagewidth;
        global $pgimageheight;
	
	global $offlinemessage;

        if(!empty($_GET['adddebugmenu'])){
        echo "<!-- =================================================== -->";
        echo "<!-- Looks like you wanted to add the debug menu -->";
        echo "<!-- =================================================== -->";
        echo "<!-- You are currently using: $compile -->";
        echo "<!-- Selected repo: $selectedrepo -->";
        echo "<!-- Repo public access: $repooutput -->";
        echo "<!-- Repo access key: $repokey -->";
        echo "<!-- =================================================== -->";
        echo "<!-- These are the current settings: -->";
	echo "<!-- =================================================== -->";
	echo "<!-- Website configuration -->";
	echo "<!-- =================================================== -->";
        echo "<!-- Website title: $title -->";
        echo "<!-- Website motto: $motto -->";
	echo "<!-- Site online: $siteonline -->";
	echo "<!-- Offline message: $offlinemessage -->";
	echo "<!-- =================================================== -->";
	echo "<!-- Page manager configuration -->";
	echo "<!-- =================================================== -->";
        echo "<!-- Theme head: $themehead -->";
        echo "<!-- Theme body: $themebody -->";
	echo "<!-- =================================================== -->";
	echo "<!-- Others configuration -->";
	echo "<!-- =================================================== -->";
	echo "<!-- Ban sys status: $bansysenabled -->";
        echo "<!-- Tracking status: $track -->";
	echo "<!-- =================================================== -->";
	echo "<!-- Meta settings -->";
	echo "<!-- =================================================== -->";
	echo "<!-- OG Title: $pgtitle -->";
	echo "<!-- OG Description: $pgdescription -->";
	echo "<!-- OG Image: $pgimage -->";
	echo "<!-- OG Image Secure URL: $pgimagesecure_url -->";
	echo "<!-- OG Image Type: $pgimagetype -->";
	echo "<!-- OG Image Width: $pgimagewidth -->";
	echo "<!-- OG Image Height: $pgimageheight -->";
        if(!empty($_GET['wt'])){
            $title= $_GET['wt'];
        };
        if(!empty($_GET['wm'])){
            $motto= $_GET['wm'];
        };
        if(!empty($_GET['wso'])){
            $siteonline= $_GET['wso']; // zero = NULL => it ignores => use something else that's not 1
        };
        if(!empty($_GET['wsom'])){
            $offlinemessage= $_GET['wsom'];
        };
        if(!empty($_GET['pth'])){
            $themehead= $_GET['pth'];
        };
        if(!empty($_GET['ptb'])){
            $themebody= $_GET['ptb'];
	};
        if(!empty($_GET['obs'])){
            $bansysenabled= $_GET['obs'];
	};
        if(!empty($_GET['obt'])){
            $track= $_GET['obt'];
	};
        if(!empty($_GET['mt'])){
            $pgtitle= $_GET['mt'];
	};
        if(!empty($_GET['md'])){
            $pgdescription= $_GET['md'];
	};
        if(!empty($_GET['mi'])){
            $pgimage= $_GET['mi'];
	};
        if(!empty($_GET['missl'])){
            $pgimagesecure_url= $_GET['missl'];
	};
        if(!empty($_GET['mit'])){
            $pgimagetype= $_GET['mit'];
	};
        if(!empty($_GET['miw'])){
            $pgimagewidth= $_GET['miw'];
	};
        if(!empty($_GET['mih'])){
            $pgimageheight= $_GET['mih'];
	};
        echo "<!-- =================================================== -->";
        echo "<!-- =================================================== -->";
        echo "<!-- =================================================== -->";
        echo "<!-- These are the temporarry debug mode based settings: -->";
	echo "<!-- =================================================== -->";
	echo "<!-- Website configuration -->";
	echo "<!-- =================================================== -->";
        echo "<!-- Website title: $title -->";
        echo "<!-- Website motto: $motto -->";
	echo "<!-- Site online: $siteonline -->";
	echo "<!-- Offline message: $offlinemessage -->";
	echo "<!-- =================================================== -->";
	echo "<!-- Page manager configuration -->";
	echo "<!-- =================================================== -->";
        echo "<!-- Theme head: $themehead -->";
        echo "<!-- Theme body: $themebody -->";
	echo "<!-- =================================================== -->";
	echo "<!-- Others configuration -->";
	echo "<!-- =================================================== -->";
	echo "<!-- Ban sys status: $bansysenabled -->";
        echo "<!-- Tracking status: $track -->";
	echo "<!-- =================================================== -->";
	echo "<!-- Meta settings -->";
	echo "<!-- =================================================== -->";
	echo "<!-- OG Title: $pgtitle -->";
	echo "<!-- OG Description: $pgdescription -->";
	echo "<!-- OG Image: $pgimage -->";
	echo "<!-- OG Image Secure URL: $pgimagesecure_url -->";
	echo "<!-- OG Image Type: $pgimagetype -->";
	echo "<!-- OG Image Width: $pgimagewidth -->";
	echo "<!-- OG Image Height: $pgimageheight -->";
        echo "<!-- =================================================== -->";
        }; // Close adddebugmenu==1
    };
};
function widgetshandle($loc){
    if(empty($loc)){ $loc=""; };
    global $addonsfolder;
    global $widgetsfolder;
    global $widgetsleft;
    global $widgetsright;
    global $widgetstop;
    global $widgetsbottom;
    if(empty($widgetsleft)){ $widgetsleft=array(); };
    if(empty($widgetsright)){ $widgetsright=array(); };
    if(empty($widgetstop)){ $widgetstop=array(); };
    if(empty($widgetsbottom)){ $widgetsbottom=array(); };
    if($loc == "left"){
        foreach($widgetsleft as $widget => $folder){
            if(file_exists($widgetsfolder."/".$folder."/init.php")){
                include($widgetsfolder."/".$folder."/init.php");
            };
        };
    };
    if($loc == "right"){
        foreach($widgetsright as $widget => $folder){
            if(file_exists($widgetsfolder."/".$folder."/init.php")){
                include($widgetsfolder."/".$folder."/init.php");
            };
        };
    };
    if($loc == "top"){
        foreach($widgetstop as $widget => $folder){
            if(file_exists($widgetsfolder."/".$folder."/init.php")){
                include($widgetsfolder."/".$folder."/init.php");
            };
        };
    };
    if($loc == "bottom"){
        foreach($widgetsbottom as $widget => $folder){
            if(file_exists($widgetsfolder."/".$folder."/init.php")){
                include($widgetsfolder."/".$folder."/init.php");
            };
        };
    };
};
function moduleshandle($acc){
    if(empty($acc)){ $acc=""; };
    global $addonsfolder;
    global $modulesfolder;
    global $modules;
    if(empty($modules)){ $modules=array(); };
    if($acc == "load"){
        foreach($modules as $module => $folder){
            if(file_exists($modulesfolder."/".$folder."/init.php")){
                include($modulesfolder."/".$folder."/init.php");
            };
        };
    };
};
function extensionshandle($acc){
    if(empty($acc)){ $acc=""; };
    global $addonsfolder;
    global $extensionsfolder;
    global $extensions;
    if(empty($extensions)){ $extensions=array(); };
    if($acc == "load"){
        foreach($extensions as $extension => $folder){
            if(file_exists($extensionsfolder."/".$folder."/init.php")){
                include($extensionsfolder."/".$folder."/init.php");
            };
        };
    };
};
?>
