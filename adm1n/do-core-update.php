<head>
		<title>SPlatform Core Updater v1.0</title>
		<style type="text/css" media="all">
			@import url('update.css');
		</style>	
	<style type="text/css"></style></head>
	<body>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		
		
		<div id="ipswrapper">
		    <div class="main_shell">
				<!-- NAM <div id="branding"><br><font color="white" size="24">&gt; SPlatform Core Updater 1.0
  </font></div> -->
		 	    <div id="navigation">
					<ul id="section_buttons">
						<li class="active"><span>Update</span></li>
					</ul>									</div>
		 	    <div class="content_shell">
		 	        <div class="package">
		 	            <div>
		 	                <div class="install_info">
    							<ul id="progress">
	<li class="step_doing">Core Update</li>							
<li class="step_notdone">Finished</li>                                                        </ul>
    		 	                
    		 	                
    		 	            </div>
    		 	            		 	            
    		 	            <div class="content_wrap">
    		 	                <div style="border-bottom: 1px solid #939393; padding-bottom: 4px; margin-bottom:6px;">
    		 	                    <div style="vertical-align: middle">
    		 	                        <h2>SPlatform Core Updater v1.0</h2>
    		 	                    </div>
    		 	                </div>
                <div style="clear:both"></div>        		 	            	
                
            		 	        <br>
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
		Connecting to SPlatform servers...<br>
		Connected!<br>
		Downloading the update...<br>
        Server: Wrong arguments. Closing the connection.<br>
Connection terminated!<br>
Done with errors!<br>
                		<?php
	} else {
	?>
<div class="message error">
		ERROR<br>Wrong password!
</div><br>
<?php	}

}
?>

<div class="pass"><div class="message unspecific">
		UPDATER LOCKED<br>Please enter the password to update the SPlatform!
    </div><br><form method="post" action="do-core-update.php" align="center">
	<input type="password" name="password" />
	<input type="submit" value=" Update " style="border:1px solid #777;background-color:#ccc" />
      </form></div>
    		 	            </div>
		 	            </div>
		 	            <br clear="all">
    
		 	            <div class="hr"></div>
		 	            <div style="padding-top: 17px; padding-right: 15px; padding-left: 15px">
		 	                <div style="float: right">	<input type="button" class="nav_button" value="< Back" onclick="window.location='index.php';return false;">		 	                    					</div>
		 	            </div>
		 	            <div style="clear: both;"></div>
		 	            <div class="copyright">
                                        Copyright &copy; <?php echo date("Y"); ?> SPlatform.
		 	            </div>
		 	        </div>

		 	    </div>
    		</div>
    	</div>	
	
	
</body>