<?php
/* 305/pizza/includes/connect.php */

//Connect to database
$username = "dtramgre_grcuser";
$password = "Qazwsxedc123cpanel";
$hostname = "localhost";
$database = "dtramgre_portfolio";

$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die("<p>Oops! We weren't able to connect to the database.</p>");