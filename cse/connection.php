<?php

include("E:\php-todo_application\config\config.php");
/*
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";
*/
if(!$con = mysqli_connect($server,$user,$password,$db_name))
{
	die("failed to connect!");
}
