<?php

$host='cray.cc.gettysburg.edu';
$dbase='csweb';
$user='cswebAdmin';
$pass='csweb440';

try {
	$db = new PDO("mysql:host=$host;dbname=$dbase", $user, $pass);
}
catch(PDOException $e) {
	die("Error connecting to MySQL database " . $e->getMessage());
}

?>
