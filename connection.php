<?php

$dbhost = "localhost";
$dbuser = "hemanth";
$dbpass = "abc123";
$dbname = "qwerty";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}


$con = mysqli_connect('localhost', 'hemanth', 'abc123','qwerty');