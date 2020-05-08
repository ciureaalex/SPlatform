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
<br>
<div class="col-lg-12">
<div class='card'>
  <div class='card-body'>
<i class="fa fa-bullhorn"></i> This is a warning message from <?php echo $user; ?>/warning-message.php
</div>
</div>
</div><!-- COL-LG-12 --><br>