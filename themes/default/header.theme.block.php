<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("core/config/theme/blocks/head-tag.php"); ?>
    <title><?php include("core/config/title.php"); ?> <?php include("core/config/description.php"); ?></title>
    <link href="themes/default/css/bootstrap.min.css" rel="stylesheet">
	<link href="themes/default/css/sticky-footer-navbar.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><?php include("core/config/title.php"); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php include("core/config/menu.php"); ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
	<?php include("core/config/warning-message.php"); ?>
	<?php include("core/config/theme/blocks/before-content.php"); ?>