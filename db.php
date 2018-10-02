<?php
$mysql_hostname="127.0.0.1";
$mysql_username="root";
$mysql_password="Qwertyl";
$mysql_database= "datauser";

$db = mysqli_connect ($mysql_hostname,$mysql_username,$mysql_password)
or die("Somthing is broken");

mysql_select_data($mysql_database,$db)
or die("Couldn't find database");


?>