<?php 
/* Create database connection */
	$connection = mysql_connect("localhost", "szecetl_ebadmin", "St3rl1ng!");
	if (!$connection) {
		die("Database connection failed: ");
		}

/* Select a database */
	$db_select = mysql_select_db("szecetl_crimetest",$connection);
	if (!$db_select) {
		die("Database selection failed: ");
		}
?>
	
<?php
/* Insert data from form submission */
	
		$sql="INSERT INTO crimeuserinput (firstname, lastname, state, date, crime, verdict, sentence)
			VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[state]','$_POST[date]','$_POST[crime]','$_POST[verdict]','$_POST[sentence]')";

		if (!mysql_query($sql,$con))
		{
		die("Error: " . mysql_error());
		}
			echo "1 record added";
		
?>


	
<?php
/* Close connection */
	mysql_close($connection);
?>