<?php
include("config/maintenance.php");
$core = true;
if($maintenance!=$core){ ?>
<?php include("themes/default/header.theme.block.php"); ?>
<h1 class="page-header">Index</h1><br><h3>Thank you for downloading SPlatform!<br>You can find more cool things at: <a href="http://splatform.ml">Splatform.ml</a><br>
If you want to add pages, just follow this model:</h3><br>
<iframe height=100% width=100% src="page.txt">
<?php include("themes/default/footer.theme.block.php"); ?>
<?php
}
else{ include("config/maintenance-message.php");
};
?>
