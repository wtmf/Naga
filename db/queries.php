<?php

require_once( '../db/connect.php' );


function insertRow($nome, $email){

	$sql = "INSERT INTO lead (username, email) 	VALUES ('$nome', '$email')";
	$query = mysql_query($sql);
}

function listRows(){

	$sql = "SELECT * FROM lead";
	$query = mysql_query($sql);
	
	return $query;
}

?>