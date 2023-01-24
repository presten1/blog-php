<?php 
	session_start();

	$conn = mysqli_connect("localhost", "root","","datanew");

	if (!$conn) {
		die("error connecting to datanew database:" . mysqli_connect_error());
		}

		define('ROOT_PATH', realpath(dirname(__FILE__)));
		define('BASE_URL', 'http://localhost/blog/');
?>