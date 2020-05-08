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
    $acpmmenuentry="0";
    if($acpmreq="menuplaintext"){ $acpmreqoutput="This should not be visible"; };
    if($acpmreq="titleplaintext"){ $acpmreqoutput="Core updates"; };
}elseif($cppg=="coreupdate"){

    if(empty($_GET['cuaction'])){ $cuaction=""; }else{ $cuaction=$_GET['cuaction']; };

    if(empty($_POST["url"])){ $cuurl=""; }else{ $cuurl=$_POST["url"]; };
    ?>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-upload" aria-hidden="true"></i> Core update
                        </div>
                        <div class="panel-body">
Current repo: <pre><?php echo $repo." - ".$repooutput." - ".$repokey; ?></pre>
<br>
Current version: <pre><?php echo $compile; ?></pre><br>
<hr>
<?php if($cuaction != "upgrade"){  ?>
<h4>Please use one of the forms below to update:</h4>
<form action="?pgi=coreupdate&cuaction=upgrade" method="POST">
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class="fa fa-globe"> </i></span>
<input type="text" class="form-control" name="urldummy" placeholder="" value="<?php echo $updatechannel."/".$corevernr."/".$coreverlet."/nextversion.zip"; ?>" required="" disabled>
<input type="hidden" id="url" name="url" value="<?php echo $updatechannel."/".$corevernr."/".$coreverlet."/nextversion.zip"; ?>">
</div>
<button class="btn btn-primary btn-block" type="submit" name="send">
Automatic Upgrade (Simple updates only)</button>
</form>
<hr>
<form action="?pgi=coreupdate&cuaction=upgrade" method="POST">
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class="fa fa-globe"> </i></span>
<input type="text" class="form-control" name="url" placeholder="Ugrade URL (Leave blank if you use the automatic process)" required="">
</div>
<button class="btn btn-primary btn-block" type="submit" name="send">
Manual Upgrade (Recommended)</button>
</form>
<?php }; 


if($cuaction=="upgrade"){
// Upgrade script
$url = $repo."/storage/".$cuurl;
$zipFile = "$temporaryfiles/$md5compile.zip"; // Local Zip File Path
$zipResource = fopen($zipFile, "w");
// Get The Zip File From Server
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER,true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_FILE, $zipResource);
$page = curl_exec($ch);
if(!$page) {
 echo "<br><h4>ERROR:</h4><pre>".curl_error($ch)."</pre><br>";
}
curl_close($ch);

/* Open the Zip file */
$zip = new ZipArchive;
$extractPath = "./";
if($zip->open($zipFile) != "true"){
 echo "<br><h4>ERROR:</h4><pre>Unable to open the ZIP file. The file may be corrupted (wrong upgrade URL/ no updates to download) or the permissions may be set wrong</pre><br>";
} 
/* Extract Zip File */
$zip->extractTo($extractPath);
$zip->close();
?>
<hr>If there was no error that means that the upgrade process means that the upgrade process may have worked as inteended. If there was an error, that means that something went wrong.<br><br>
<a href="cp.php?pgi=cpdashboard"><button class="btn btn-primary btn-block" type="submit" name="send">
Go back to the dashboard</button></a>
<?php
};
 ?>
</div>
</div>
</div>
</div>
    <?php
};
    ?>