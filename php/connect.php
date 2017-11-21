<?php
	//connection
	header('Access-Control-Allow-Origin: *'); // macontrol kung sno pwede makapagaccess ng data na andto. asterisk, lahat pwede makaaccess
	header('application/json');

	$SERVER = "127.0.0.1";
	$USERNAME = "root";
	$PASSWORD = "";
	$DBASE = "clinic";


    $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBASE);
	//define("SERVER", "localhost"); mas secure
		$con = mysqli_connect("localhost", "root", "", "clinic");


?>
