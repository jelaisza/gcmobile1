<?php
	//connection
	header('Access-Control-Allow-Origin: *'); // macontrol kung sno pwede makapagaccess ng data na andto. asterisk, lahat pwede makaaccess
	header('application/json');

	$SERVER = "192.168.1.11";
	$USERNAME = "root";
	$PASSWORD = "";
	$DBASE = "clinic";


    $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBASE);
	//define("SERVER", "192.168.1.11"); mas secure
		$con = mysqli_connect("192.168.1.11", "root", "", "clinic");


?>
