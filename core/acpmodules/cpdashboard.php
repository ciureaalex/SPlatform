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
    if($acpmreq="menuplaintext"){ $acpmreqoutput="Dashboard"; };
    if($acpmreq="titleplaintext"){ $acpmreqoutput="Dashboard"; };
}elseif($cppg=="cpdashboard"){


    if(empty($_GET['cpdaction'])){ $cpdaction=""; }else{ $cpdaction=$_GET['cpdaction']; };
    if($cpdaction=="cleartempfolder"){
        $files = glob($temporaryfiles.'/*'); // get all file names
        foreach($files as $file){ // iterate files
          if(is_file($file))
            unlink($file); // delete file
        }
        file_put_contents($temporaryfiles.'/index.html', 'You are not allowed to view this folder directory listing');
    };
    

    if($cpdaction=="clearaccesslogs"){
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

    if($cpdaction=="openaccesslogs"){
        ?>
<div class="col-lg-12">
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-cogs" aria-hidden="true"></i> Access logs
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive"> 
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Date and time</th>
                                    <th>IP</th>
                                    <th>User agent</th>
                                    <th>Website online</th>
                                    <th>Accessed Page</th>
                                </tr>
                            </thead>
                        <tbody>
                        <?php include($user.'/access-logs.php'); ?>
                        </tbody>
                        </table>
                        </div>
                        </div>
</div>
</div>
        <?php die();
    };
    ?>
    
<div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-cogs" aria-hidden="true"></i> Website information
                        </div>
                        <div class="panel-body">
                            <p>Title: <?php echo $title; ?></p>
							<p>Website status: <?php if ($siteonline == 1){ ?><b><font color="GREEN">ONLINE</font></b><?php }else{?><b><font color="RED">OFFLINE</font></b><?php }; ?></p>
							<p>IP Banning: <?php if ($bansysenabled == 1){ ?><b><font color="GREEN">ENABLED</font></b><?php }else{?><b><font color="RED">DISABLED</font></b><?php }; ?></p>
							<p>Debug mode: <?php if($debug == 1){ ?><b><font color="GREEN">ENABLED</font></b><?php }else{ ?><b><font color="RED">DISABLED</font></b><?php }; ?></p>
                            <p>Access logs: <?php if ($accesslogs == 1){ ?><b><font color="GREEN">ENABLED</font></b><?php }else{?><b><font color="RED">DISABLED</font></b><?php }; ?></p>
							<p>Theme: <?php echo $theme; ?></p>
							<p>PHP Version: <?php echo $phpver; ?></p>
							<p>Address: <?php echo $actual_link; ?></p>
							<p>Pages folder: <?php echo $pagesdir; ?></p>
							<p>Pages extension: <?php echo $pgext; ?></p>
							<p>Index file: <?php echo $index; ?></p>
							<p>User: <?php echo $user; ?></p>
                            <p>Temporary files size: <?php
                            function folderSize ($dir)
                            {
                                $size = 0;
                                foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
                                    $size += is_file($each) ? filesize($each) : folderSize($each);
                                }
                                if($size<1024){$size=$size." Bytes";}
                                elseif(($size<1048576)&&($size>1023)){$size=round($size/1024, 1)." KB";}
                                elseif(($size<1073741824)&&($size>1048575)){$size=round($size/1048576, 1)." MB";}
                                else{$size=round($size/1073741824, 1)." GB";}
                                return $size;
                            }
                            echo folderSize($temporaryfiles)." <a href='cp.php?pgi=cpdashboard&cpdaction=cleartempfolder'>(Clear)</a>";
                            ?></p>
                             <p>Access logs file size: <?php
                             function formatSizeUnits($bytes)
                             {
                                 if ($bytes >= 1073741824)
                                 {
                                     $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                 }
                                 elseif ($bytes >= 1048576)
                                 {
                                     $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                 }
                                 elseif ($bytes >= 1024)
                                 {
                                     $bytes = number_format($bytes / 1024, 2) . ' KB';
                                 }
                                 elseif ($bytes > 1)
                                 {
                                     $bytes = $bytes . ' Bytes';
                                 }
                                 elseif ($bytes == 1)
                                 {
                                     $bytes = $bytes . ' Byte';
                                 }
                                 else
                                 {
                                     $bytes = '0 Bytes';
                                 }
                         
                                 return $bytes;
                         }
 
                             echo formatSizeUnits(filesize($user."/access-logs.php"))." <a href='cp.php?pgi=cpdashboard&cpdaction=clearaccesslogs'>(Clear)</a> | <a href='cp.php?pgi=cpdashboard&cpdaction=openaccesslogs'>(Open)</a>";
                             ?>
                        </div>
                        
                    </div>
    </div>
	<div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						<i class='fa fa-tachometer' aria-hidden='true'></i> Dashboard
                        </div>
                        <div class="panel-body">
                            <p>Hi, <?php echo $authuser; ?> !</p>
							<p>Welcome back to the Administration Panel Index</p>
                            <hr><p><b>Loaded ACP modules:</b> <?php if(!empty($acpmodules)){ foreach($acpmodules as $acpmthing => $acpmfilename){ echo $acpmfilename.", "; }; }else{ echo "none"; }; ?></p>
                        
<hr>
							<p><b>Loaded widgets:</b></p>
<p><ul type="o">
<li>Top: <?php if(!empty($widgetstop)){ foreach($widgetstop as $widget => $folder){ echo $folder.", "; }; }else{ echo "none"; }; ?></li>
<li>Left: <?php if(!empty($widgetsleft)){ foreach($widgetsleft as $widget => $folder){ echo $folder.", "; }; }else{ echo "none"; }; ?></li>
<li>Right: <?php if(!empty($widgetsright)){ foreach($widgetsright as $widget => $folder){ echo $folder.", "; }; }else{ echo "none"; }; ?></li>
<li>Bottom: <?php if(!empty($widgetsbottom)){ foreach($widgetsbottom as $widget => $folder){ echo $folder.", "; }; }else{ echo "none"; }; ?></li>
</ul></p>
<hr>
<p><b>Loaded modules:</b> <?php if(!empty($modules)){ foreach($modules as $module => $folder){ echo $folder.", "; }; }else{ echo "none"; }; ?></p>
<hr>
<p><b>Loaded extensions:</b> <?php if(!empty($extensions)){ foreach($extensions as $extension => $folder){ echo $folder.", "; }; }else{ echo "none"; }; ?></p>
</div>
                        
                        </div>
        </div>
        <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               <i class="fa fa-upload" aria-hidden="true"></i> Core updates
                            </div>
                            <div class="panel-body">
                                <p>Installed: <?php echo $compile; ?></p>
                                <p>Latest version:
                                <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" width="30" height="5px" src="<?php echo $repo; ?><?php echo $repooutput; ?>?init=<?php echo $repokey; ?>&req=latest&r=<?php echo $corevernr; ?>&i=<?php echo $corestatus; ?>&ch=<?php echo $updatechannel; ?>" frame-border="0" alowfullscreen=""></iframe>
    </div>
                                </p>
                <p>Available updates: <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" width="80" height="40" src="<?php echo $repo; ?><?php echo $repooutput; ?>?init=<?php echo $repokey; ?>&req=updates&r=<?php echo $corevernr; ?>&b=<?php echo $coreverlet; ?>&c=<?php echo $corename; ?>&i=<?php echo $corestatus; ?>&ch=<?php echo $updatechannel; ?>&key=<?php echo md5($compile); ?>" frame-border="0" alowfullscreen=""></iframe>
    </div>
    </p>
                            <p>
                        <?php 
                        $hascoreupdate=0;
                        if(!empty($acpmodules)){ 
                            foreach($acpmodules as $acpmthing => $acpmfilename){ 
                                if($acpmfilename == "coreupdate"){ $hascoreupdate=1; };
                            }; 
                        };
                        if($hascoreupdate=="1"){ ?><a href="cp.php?pgi=coreupdate"><button type="button" class="btn btn-sm btn-block btn-default">Upgrade now</button></a><?php }else{ echo "You must have the 'coreupdate' ACP module to get updates"; }; ?>
                            </p>
                            </div>
                            
                        </div>
        </div>
        </div>
    
    <?php
};
?>