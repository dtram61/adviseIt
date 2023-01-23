<?php
$servername="localhost";
$username="dtramgre_grcuser";
$password="Qazwsxedc123cpanel";
$dbname="dtramgre_grc";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
else
{
    echo "Connected";
}


?>