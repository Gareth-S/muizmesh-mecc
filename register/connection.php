<?php  
       $hostname = "localhost";  
       $username = "sexthera_mecsignup";  
       $password = "CaOnLO([@Pfu";  
       $db = "sexthera_mecsignup";
       $dbconnect = new mysqli( $hostname , $username , $password, $db );
	
	if ($dbconnect->connect_error) {
  	die("Database connection failed: " . $dbconnect->connect_error);
	}  
  
?>   
