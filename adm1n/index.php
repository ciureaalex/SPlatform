<?php
include("pass.php");

if (isset($_POST['password'])) {
	if (md5($_POST['password'])==md5($password)) {
		?>
		<style>
		div.pass
		{
width: 0px!important;
border: 0px!important;
height: 0px!important;
display: none;
}
		</style>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php include("../core/config/title.php"); ?> Administration Panel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php include("../core/config/title.php"); ?> ACP</a>
        </div> 
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php" >Home</a></li>
				<li><a href="http://splatform.ml" target="_blank" >SPlatform Website</a></li>

            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">
   ACP Version: 1.0
</div> 
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-4">
            <h2>Donate</h2>
            <p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RNSL9RBHGE7VG">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
           </p>
<?php include("acp-modules.php"); ?>
        </div>
        <div class="col-xs-4">
            <h2>Validator</h2>
            <p><?php include("validator.php"); ?></p>
        </div>
        <div class="col-xs-4">
            <h2>Update system</h2>
            <p>Current version: U3</p>
			<p>Latest version: <iframe src="http://s2.splatform.ml:81/dl/latest-build.php"  width="80" height="40" /></iframe>
                        <p><a href="do-core-update.php">Update now</a></p>
			
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <footer>
                <p>&copy; Copyright <?php echo date("Y"); ?> SPlatform. Do not distribute</p>
            </footer>
        </div>
    </div>
</div>
</body>
</html>                            
		<?php
	} else {
	?>
	<link rel="stylesheet" href="../core/base-system/warns/style.css">
<section class="notif notif-alert">
      <h6 class="notif-title">ERROR</h6>
      <p>Incorrect password. Please try again!</p>
      <div class="notif-controls">
      </div>
    </section><br>
<?php	}

}
?>

<div class="pass" align="center"><form method="post" action="index.php">
	<input type="password" name="password" />
	<input type="submit" value=" Login " style="border:1px solid #777;background-color:#ccc" />
      </form></div>