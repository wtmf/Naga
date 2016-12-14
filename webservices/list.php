<?php

include '../db/queries.php';


	$result = listRows();

	echo '<ol>';
	while($row = mysql_fetch_assoc($result)){
		
    	echo '<li><strong>Nome:</strong> '.$row['username'];
		echo ' - <strong>Email:</strong> '.$row['email'];
		echo "<br></li><hr>";
	       
	   
	    print "\r\n";
	}
	echo '</ol>';



?>