<?php
include('../../dbConnection/db_setting.php');

$con = new mysqli($hostname, $username, $password, $database_name);

if (!$con) {
    die(mysqli_error($con));
}

?>