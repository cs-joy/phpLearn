<?php

include('../config/connection.php');

$id = $_GET['id'];

$query = "SELECT * FROM `crud_practical` WHERE id=$id";
$result = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($result);
$uname = $row['uname'];
$email = $row['email'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE `crud_practical` SET id=$id, uname='$uname', email='$email', password='$password' WHERE(`id`='$id')";
    
    $result = mysqli_query($con, $query);
    if($result) {
        header('location:panel.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Practical</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Enter your username" name="uname" autocomplete="off" value=<?php echo $uname; ?> >
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email; ?> >
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password; ?> >
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>