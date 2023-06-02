<?php

include('../config/connection.php');

$id = $_GET['id'];

$query = "DELETE FROM `crud_practical` WHERE id='$id'";

$result = mysqli_query($con, $query);

if($result) {
    echo "Data Removed Successfully";
} else {
    die(mysqli_error($con));
}

?>