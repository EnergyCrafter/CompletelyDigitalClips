<?php
// opens the database connection
$conn = mysqli_connect($DATABASE_IP, $DATABASE_USERNAME, $DATABASE_PASSWORD, $DATABASE_NAME) or die ('Error connecting to mysql');

// connects to the specific database on the MySQL server
// mysqli_select_db($conn, $DATABASE_NAME);
?>
