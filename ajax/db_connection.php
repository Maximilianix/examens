<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "dbgrading";

$db = mysqli_connect($host, $user, $password) or die("Could not connect to database");

mysqli_select_db($db, $database);

?>