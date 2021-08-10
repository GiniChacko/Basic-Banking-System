<?php

        $host_name = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "sparksfoundation";

// Create connection
        $conn = mysqli_connect($host_name, $db_user, $db_pass, $db_name);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
