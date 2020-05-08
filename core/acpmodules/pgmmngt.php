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
    if($acpmreq="menuplaintext"){ $acpmreqoutput="Page management"; };
    if($acpmreq="titleplaintext"){ $acpmreqoutput="Page management"; };
}elseif($cppg=="pgmmngt"){ ?>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-wrench" aria-hidden="true"></i> Page management
                        </div>
                        <div class="panel-body">
<?php
if(empty($_GET['pgmcontrol'])){ $pgmcontrol=""; }else{ $pgmcontrol=$_GET['pgmcontrol']; };
if(empty($_GET['pgmaction'])){ $pgmaction=""; }else{ $pgmaction=$_GET['pgmaction']; };
if(empty($_POST["editpage"])){ $pgmedit=""; }else{ $pgmedit=$_POST["editpage"]; };
if(empty($_POST["createpage"])){ $pgmcreate=""; }else{ $pgmcreate=$_POST["createpage"]; };

// fix notices for page variables
if(empty($_POST["path"])){ $pgmpath=""; }else{ $pgmpath=$_POST["path"]; };
if(empty($_POST["pgtitle"])){ $pgmpgtitle=""; }else{ $pgmpgtitle=$_POST["pgtitle"]; };
if(empty($_POST["pgdescription"])){ $pgmpgdescription=""; }else{ $pgmpgdescription=$_POST["pgdescription"]; };
if(empty($_POST["pgtype"])){ $pgmpgtype=""; }else{ $pgmpgtype=$_POST["pgtype"]; };
if(empty($_POST["pglocale"])){ $pgmpglocale=""; }else{ $pgmpglocale=$_POST["pglocale"]; };
if(empty($_POST["pgimage"])){ $pgmpgimage=""; }else{ $pgmpgimage=$_POST["pgimage"]; };
if(empty($_POST["pgimagesecure_url"])){ $pgmpgimagesecure_url=""; }else{ $pgmpgimagesecure_url=$_POST["pgimagesecure_url"]; };
if(empty($_POST["pgimagetype"])){ $pgmpgimagetype=""; }else{ $pgmpgimagetype=$_POST["pgimagetype"]; };
if(empty($_POST["pgimagewidth"])){ $pgmpgimagewidth=""; }else{ $pgmpgimagewidth=$_POST["pgimagewidth"]; };
if(empty($_POST["pgimageheight"])){ $pgmpgimageheight=""; }else{ $pgmpgimageheight=$_POST["pgimageheight"]; };
if(empty($_POST["content"])){ $pgmcontent=""; }else{ $pgmcontent=$_POST["content"]; };

if(empty($pgmcontrol)){
?>
Do not insert a file extension in any of the forms below.<hr>
<form action="?pgi=pgmmngt&pgmcontrol=edit" method="POST">
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class="fa fa-hdd-o"> </i></span>
<input type="text" class="form-control" name="editpage" placeholder="Path to page in pages folder" required="">
</div>
<button class="btn btn-primary btn-block" type="submit" name="send">
Edit page</button>
</form>
<hr>
<form action="?pgi=pgmmngt&pgmcontrol=create" method="POST">
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class="fa fa-hdd-o"> </i></span>
<input type="text" class="form-control" name="createpage" placeholder="Path to page in pages folder" required="">
</div>
<button class="btn btn-primary btn-block" type="submit" name="send">
Create page</button>
</form>
<hr>
Website pages:
<pre>
<?php
/*
	
	== PHP FILE TREE ==
	
		Let's call it...oh, say...version 1?
	
	== AUTHOR ==
	
		Cory S.N. LaViska
		http://abeautifulsite.net/
		
	== DOCUMENTATION ==
	
		For documentation and updates, visit http://abeautifulsite.net/notebook.php?article=21
		
*/
function php_file_tree($directory, $return_link, $extensions = array()) {
    $code="";
	// Generates a valid XHTML list of all directories, sub-directories, and files in $directory
	// Remove trailing slash
	if( substr($directory, -1) == "/" ) $directory = substr($directory, 0, strlen($directory) - 1);
	$code .= php_file_tree_dir($directory, $return_link, $extensions);
	return $code;
}

function php_file_tree_dir($directory, $return_link, $extensions = array(), $first_call = true) {
	// Recursive function called by php_file_tree() to list directories/files
	
	// Get and sort directories/files
	if( function_exists("scandir") ) $file = scandir($directory); else $file = php4_scandir($directory);
	natcasesort($file);
	// Make directories first
	$files = $dirs = array();
	foreach($file as $this_file) {
		if( is_dir("$directory/$this_file" ) ) $dirs[] = $this_file; else $files[] = $this_file;
	}
	$file = array_merge($dirs, $files);
	
	// Filter unwanted extensions
	if( !empty($extensions) ) {
		foreach( array_keys($file) as $key ) {
			if( !is_dir("$directory/$file[$key]") ) {
				$ext = substr($file[$key], strrpos($file[$key], ".") + 1); 
				if( !in_array($ext, $extensions) ) unset($file[$key]);
			}
		}
	}
	
	if( count($file) > 2 ) { // Use 2 instead of 0 to account for . and .. "directories"
		$php_file_tree = "<ul";
		if( $first_call ) { $php_file_tree .= " class=\"php-file-tree\""; $first_call = false; }
		$php_file_tree .= ">";
		foreach( $file as $this_file ) {
			if( $this_file != "." && $this_file != ".." ) {
				if( is_dir("$directory/$this_file") ) {
					// Directory
					$php_file_tree .= "<li class=\"pft-directory\">" . htmlspecialchars($this_file) . "";
					$php_file_tree .= php_file_tree_dir("$directory/$this_file", $return_link ,$extensions, false);
					$php_file_tree .= "</li>";
				} else {
					// File
					// Get extension (prepend 'ext-' to prevent invalid classes from extensions that begin with numbers)
					$ext = "ext-" . substr($this_file, strrpos($this_file, ".") + 1); 
					$link = str_replace("[link]", "$directory/" . urlencode($this_file), $return_link);
					$php_file_tree .= "<li class=\"pft-file " . strtolower($ext) . "\">" . htmlspecialchars($this_file) . "</li>";
				}
			}
		}
		$php_file_tree .= "</ul>";
	}
	return $php_file_tree;
}

// For PHP4 compatibility
function php4_scandir($dir) {
	$dh  = opendir($dir);
	while( false !== ($filename = readdir($dh)) ) {
	    $files[] = $filename;
	}
	sort($files);
	return($files);
}
$allowed_extensions = array("$pageextension");
echo php_file_tree($pagesfolder,"",$allowed_extensions);
?>
</pre>
<?php }; 
if($pgmcontrol=="edit"){
if($pgmaction=="exec"){ 
$pgmpgtitle=str_replace('"','\'',$pgmpgtitle);
$pgmpgdescription=str_replace('"','\'',$pgmpgdescription);
$pgmpgtype=str_replace('"','\'',$pgmpgtype);
$pgmpglocale=str_replace('"','\'',$pgmpglocale);
$pgmpgimage=str_replace('"','\'',$pgmpgimage);
$pgmpgimagesecure_url=str_replace('"','\'',$pgmpgimagesecure_url);
$pgmpgimagetype=str_replace('"','\'',$pgmpgimagetype);
$pgmpgimagewidth=str_replace('"','\'',$pgmpgimagewidth);
$pgmpgimageheight=str_replace('"','\'',$pgmpgimageheight);
$pgmcontent=str_replace('"','\'',$pgmcontent);
file_put_contents($pgmpath, '
<?php
$pgtitle="'.$pgmpgtitle.'";
$pgdescription="'.$pgmpgdescription.'";
$pgtype="'.$pgmpgtype.'";
$pglocale="'.$pgmpglocale.'";
$pgimage="'.$pgmpgimage.'";
$pgimagesecure_url="'.$pgmpgimagesecure_url.'";
$pgimagetype="'.$pgmpgimagetype.'";
$pgimagewidth="'.$pgmpgimagewidth.'";
$pgimageheight="'.$pgmpgimageheight.'";
$content="'.$pgmcontent.'";
?>
'); echo "<pre>".$pgmpath."</pre> has been updated succesfully (we hope)";
 }else{
    // Checking if page exists and if it exists, load page
    if (file_exists($pagesdir."/" . $pgmedit . ".".$pgext)) {
        include($pagesdir."/" . $pgmedit . ".".$pgext); 
    }else{ die("Unable to load the requested page"); };
?>
Currently editing:
<pre><?php echo $pagesdir."/" . $pgmedit . ".".$pgext; ?></pre>
<hr>
<script src="<?php echo $corefolder; ?>/ckeditor/ckeditor.js"></script>
<form action="?pgi=pgmmngt&pgmcontrol=edit&pgmaction=exec" method="POST">
<input type="hidden" id="edit" name="path" value="<?php echo $pagesdir."/" . $pgmedit . ".".$pgext; ?>">
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page title</span><input type="text" class="form-control" name="pgtitle" placeholder="The title of your page, e.g., 'The Rock'" value="<?php echo $pgtitle; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page description</span><input type="text" class="form-control" name="pgdescription" placeholder="A one to two sentence description of your page" value="<?php echo $pgdescription; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page type</span><input type="text" class="form-control" name="pgtype" placeholder="The type of your page, We recommend to just use 'website' as the page type" value="<?php echo $pgtype; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page locale</span><input type="text" class="form-control" name="pglocale" placeholder="The locale the meta tags are marked up in. Of the format language_TERRITORY. Default is en_US" value="<?php echo $pglocale; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page image URL</span><input type="text" class="form-control" name="pgimage" placeholder="An image URL which should represent your page (optional)" value="<?php echo $pgimage; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page image URL (SSL)</span><input type="text" class="form-control" name="pgimagesecure_url" placeholder="An alternate image url to use if the webpage requires HTTPS (optional)" value="<?php echo $pgimagesecure_url; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page image type</span><input type="text" class="form-control" name="pgimagetype" placeholder="A MIME type for the page image (optional)" value="<?php echo $pgimagetype; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page image width</span><input type="text" class="form-control" name="pgimagewidth" placeholder="The number of pixels wide for the page image (optional)" value="<?php echo $pgimagewidth; ?>"></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page image height</span><input type="text" class="form-control" name="pgimageheight" placeholder="The number of pixels high for the page image (optional)" value="<?php echo $pgimageheight; ?>"></div>
<textarea name="content" id="editoreditpg" rows="20" cols="80">
<?php echo $content; ?>
</textarea>
<script>
CKEDITOR.replace( 'editoreditpg' );
</script>
<button class="btn btn-success btn-block" type="submit" name="send">Publish changes</button>
</form>


<?php }; // close if for pgmaction
 };
if($pgmcontrol=="create"){ 
if($pgmaction=="exec"){ 
    $pgmpgtitle=str_replace('"','\'',$pgmpgtitle);
    $pgmpgdescription=str_replace('"','\'',$pgmpgdescription);
    $pgmpgtype=str_replace('"','\'',$pgmpgtype);
    $pgmpglocale=str_replace('"','\'',$pgmpglocale);
    $pgmpgimage=str_replace('"','\'',$pgmpgimage);
    $pgmpgimagesecure_url=str_replace('"','\'',$pgmpgimagesecure_url);
    $pgmpgimagetype=str_replace('"','\'',$pgmpgimagetype);
    $pgmpgimagewidth=str_replace('"','\'',$pgmpgimagewidth);
    $pgmpgimageheight=str_replace('"','\'',$pgmpgimageheight);
    $pgmcontent=str_replace('"','\'',$pgmcontent);
	$dirname = dirname($pgmpath);
	if (!is_dir($dirname))
	{
    mkdir($dirname, 0755, true);
	};
    if($fh = fopen($pgmpath,'w')){
        $stringData = "File created";
        fwrite($fh, $stringData,1024);
        fclose($fh);
    };
    file_put_contents($pgmpath, '
    <?php
    $pgtitle="'.$pgmpgtitle.'";
    $pgdescription="'.$pgmpgdescription.'";
    $pgtype="'.$pgmpgtype.'";
    $pglocale="'.$pgmpglocale.'";
    $pgimage="'.$pgmpgimage.'";
    $pgimagesecure_url="'.$pgmpgimagesecure_url.'";
    $pgimagetype="'.$pgmpgimagetype.'";
    $pgimagewidth="'.$pgmpgimagewidth.'";
    $pgimageheight="'.$pgmpgimageheight.'";
    $content="'.$pgmcontent.'";
    ?>
    '); echo "<pre>".$pgmpath."</pre> has been created succesfully (we hope)";
 }else{
    // Checking if page exists and if it exists stop execution
    if (file_exists($pagesdir."/" . $pgmcreate . ".".$pgext)) {
        die("This page already exists, please use the page editor instead"); 
    };
?>
Currently creating:
<pre><?php echo $pagesdir."/" . $pgmcreate . ".".$pgext; ?></pre>
<hr>
<script src="<?php echo $corefolder; ?>/ckeditor/ckeditor.js"></script>
<form action="?pgi=pgmmngt&pgmcontrol=create&pgmaction=exec" method="POST">
<input type="hidden" id="create" name="path" value="<?php echo $pagesdir."/" . $pgmcreate . ".".$pgext; ?>">
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page title</span><input type="text" class="form-control" name="pgtitle" placeholder="The title of your page, e.g., 'The Rock'" ></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page description</span><input type="text" class="form-control" name="pgdescription" placeholder="A one to two sentence description of your page" ></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page type</span><input type="text" class="form-control" name="pgtype" placeholder="The type of your page, We recommend to just use 'website' as the page type" ></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page locale</span><input type="text" class="form-control" name="pglocale" placeholder="The locale the meta tags are marked up in. Of the format language_TERRITORY. Default is en_US" ></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page image URL</span><input type="text" class="form-control" name="pgimage" placeholder="An image URL which should represent your page (optional)" ></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page image URL (SSL)</span><input type="text" class="form-control" name="pgimagesecure_url" placeholder="An alternate image url to use if the webpage requires HTTPS (optional)" ></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page image type</span><input type="text" class="form-control" name="pgimagetype" placeholder="A MIME type for the page image (optional)" ></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page image width</span><input type="text" class="form-control" name="pgimagewidth" placeholder="The number of pixels wide for the page image (optional)" ></div>
<div class="input-group"><span class="input-group-addon" id="basic-addon1">Page image height</span><input type="text" class="form-control" name="pgimageheight" placeholder="The number of pixels high for the page image (optional)" ></div>
<textarea name="content" id="editorcreatepg" rows="20" cols="80">

</textarea>
<script>
CKEDITOR.replace( 'editorcreatepg' );
</script>
<button class="btn btn-success btn-block" type="submit" name="send">Create & publish page</button>
</form>
<?php }; // close if for pgmaction
}; ?>

</div>
</div>
</div>
</div>
<?php
}; ?>