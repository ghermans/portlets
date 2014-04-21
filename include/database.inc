<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "";
$mysql_db_password = "";
$mysql_db_database = "";

$conn = new MySQLi($mysql_db_hostname, $mysql_db_user, $mysql_db_password, $mysql_db_database);
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>