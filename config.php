<?php
 $conn = new mysqli( "localhost","root","","phpcrud");
 
 if($conn->connect_error){
	 die("could not coonect gto the database!".$conn->connect_error);
 }
?>