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
           <li class="nav-item">
              <a class="nav-link" href="index.php?page=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=content">Page with content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=folder/page">Sub-folder page</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=404">Default 404 page</a>
            </li>
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Bootstrap
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="index.php?page=bootstrap-elements">Bootstrap Elements</a>
                    <a class="dropdown-item" href="index.php?page=bootstrap-grid">Bootstrap Grid</a>
                </div>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="cp.php">Administration panel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://splatform.sourceforge.net/">SPlatform website</a>
            </li>
