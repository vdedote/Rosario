<?php 
	include("Servers/connection.php");
	session_start();
							// remove all session variables
							session_unset(); 
							// destroy the session 
							session_destroy(); 
							echo '<script> window.location.href="DesignPrototype.php"</script>';
							exit();
					
				

				
		

 ?>