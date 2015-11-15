<?php
require_once("loginsystem-core.php");

$authuser = $_COOKIE['authuser'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SPlatform Administration Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SPlatform ACP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="u4-modules.php">Modules (U4)</a></li>
            <li><a href="u3-modules.php">Modules (U3)</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile(<?=$authuser;?>) <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?logout">Disconnect</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
	<br>
	<div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Website configuration
                        </div>
                        <div class="panel-body">
                            <p>Title: <?php include("../core/config/title.php"); ?></p>
							<p>Description: <?php include("../core/config/description.php"); ?></p>
                        </div>
                        
                    </div>
    </div>
	<div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Dashboard
                        </div>
                        <div class="panel-body">
                            <p>Hi, <?=$authuser;?> !</p>
							<p>Welcome back to the Administration Panel Index</p>
                        </div>
                        
                    </div>
    </div>
	<div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Core updates
                        </div>
                        <div class="panel-body">
                            <p>Installed: U4</p>
			<p>Latest version: <iframe src="http://splatform.sourceforge.net/dl/latest-build.php"  width="80" height="40" /></iframe></p>
                        <p><a href="http://splatform.sourceforge.net/platform-updates.php"><button type="button" class="btn btn-sm btn-block btn-default">Update now</button></a></p>
						<p><a href="do-core-update.php"><button type="button" class="btn btn-sm btn-block btn-default">Install now</button></a></p>
                        </div>
                        
                    </div>
    </div>
	
	</div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright &copy; <?php echo date("Y"); ?> <a href="http://splatform.ml">SPlatform</a> | ACP Version: 2.0 (Backward compatibility with SPlatform U3)<br>External informations or links are based on the http://splatform.sourceforge.net/ website.</p>
      </div>
    </footer>



  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>