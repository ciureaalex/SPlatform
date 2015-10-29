<?php 
include("core/config/theme/header.php");
if (!empty($_GET["page"])) {
	if (file_exists("pages/" . $_GET["page"] . ".php")) {
	 
include("pages/" . $_GET["page"] . ".php");

} else {
    include("core/config/404.php");    
      }


} else {
if (file_exists("pages/home.php")) {
	 
include("pages/home.php");

} else {
    include("core/config/404.php");    
      }
}
include("core/config/theme/footer.php"); 
?>