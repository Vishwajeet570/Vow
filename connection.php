<?php

// $dbhost = "sql108.epizy.com";
// $dbuser = "epiz_32168724";
// $dbpass = "f2GOrEu9yG5";
// $dbname = "epiz_32168724_vow_db";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "vow_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
