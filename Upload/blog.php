<?php

include("config/maintenance.php");

$core = true;

if($maintenance!=$core){ 
?>

<?php include("themes/default/header.theme.block.php"); ?>
<?php include("config/warning-message.php"); ?>
<h1 class="page-header">Blog</h1>
<br>
<table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Article Number</th>
                                            <th>Article Name</th>
                                            <th>Post author</th>
                                            <th>Post date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<!-- Use this model to add Articles, but, make sure you put it in top of last article not at the bottom of it.
<tr>
<td>Post number</td>
<td><a href="post link">Post name</a></td>
<td>Post author</td>
<td>Post date</td>
</tr>
  -->
                                        <tr>
										
                                            <td>1</td>
                                            <td><a href="1.php">Introducing the Blog Module Update</a></td>
                                            <td>Alexandru C.</td>
                                            <td>04/14/2015</td>
										
                                        </tr>

										
                                        
                                    </tbody>
                                </table>

<?php include("themes/default/footer.theme.block.php"); ?>

<?php

}

else{ 
include("config/maintenance-message.php");

};

?>