<?php
include_once 'laibery/db.php';
include_once 'laibery/auth.php';

if(!islogged())
{
    header('locaton:login.php');
}
$trip=$_GET['trip'];
$email=$_SESSION['user_data']['email'];
$query="update book set people='$people' WHERE trip='$trip' and  user_email='$email'";
$result=mysqli_query($link,$query);
header('location: requests.php');
?>