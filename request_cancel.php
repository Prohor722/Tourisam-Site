<?php
include_once 'laibery/db.php';
include_once 'laibery/auth.php';

if(!islogged())
{
    header('locaton:login.php');
}
$trip_id=$_GET['id'];
$email=$_SESSION['user_data']['email'];
$query="DELETE from book WHERE id='$trip_id'";
$result=mysqli_query($link,$query);
header('location: requests.php');
?>