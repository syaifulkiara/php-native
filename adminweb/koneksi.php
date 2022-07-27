<?php 

$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="native_php";

$db 	= new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($db->connect_errno) {
	echo"Gagal Koneksi Ke Database";
}