<?php
	include("Servers/serverconnection.php");

	if (!mysql_select_db($dbName))
		header("Location:SetServer.php");

	else
		header("Location:DesignPrototype.php");
?>