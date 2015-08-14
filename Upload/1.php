<?php

include("config/maintenance.php");

$core = true;

if($maintenance!=$core){ 
?>

<?php include("themes/default/header.theme.block.php"); ?>
<?php include("config/warning-message.php"); ?>
<h1 class="page-header">Blog</h1>
<br>

<div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Introducing  the Blog Module Update</h3>
                        </div>
                        <div class="panel-body">
                            <p>We are happy to pressent our new Blog Module Update wich will add the Blog Module official files and it will include a free universal site comments script and a awesome Blog and Posts look.<br>
							I forget, this update will add the Blog Module in the Help Documments, so, if you have trouble, please contact us at: <a href="http://splatform.ml/">SPlatform.ml</a></p>
                        </div>
                        <div class="panel-footer">
                            <script type="text/javascript" src="http://100widgets.com/js_data.php?id=234"></script><!--code1--><div class="scriptcode"><!--ecode1-->
                        </div>
</div>

<?php include("themes/default/footer.theme.block.php"); ?>

<?php

}

else{ 
include("config/maintenance-message.php");

};

?>