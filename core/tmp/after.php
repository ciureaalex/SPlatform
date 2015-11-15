<?php
if (file_exists("exec.php")) {
	$fh = fopen( 'exec.php', 'w' );
fclose($fh);
	?>
	If exec.php file returns a white page, this mean that the after.php didn't get stuck in an ERROR.
	<?php
} else {
	?>
	ERROR! File exec.php doesn't exists.
	<?php
}; ?>