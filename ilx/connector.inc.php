<?php

$host = 'localhost';
$username = 'illux';
$password = 'Illux123.';
$database = 'db_illuxtrations';


$mysqli = new mysqli($host, $username, $password, $database);


if ($mysqli->connect_error) {

die('Connect Error (' . $mysqli->connect_error . ') ' . $mysqli->connect_error);

}


?>