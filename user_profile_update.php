
<?php
include_once 'laibery/db.php';
include_once 'laibery/session_start.php';
include_once 'laibery/auth.php';


if(!islogged())
{
    header('location:login.php');
}

$name=htmlentities($_POST['name'],ENT_QUOTES);
$email=htmlentities($_POST['email'],ENT_QUOTES);
$phone=htmlentities($_POST['phone'],ENT_QUOTES);
$age=htmlentities($_POST['age'],ENT_QUOTES);
$address=htmlentities($_POST['address'],ENT_QUOTES);
$profession= htmlentities($_POST['profession'],ENT_QUOTES);

if((!empty($_POST['pass']) && !empty($_POST['cpass']) )&& $_POST['pass']==$_POST['cpass'])
{
    $pass= md5(htmlentities($_POST['pass'],ENT_QUOTES));
    $query="update user set name='$name',email='$email',phone='$phone',age='$age',pass='$pass',
            profession='$profession', address='$address' WHERE email='$email' ";
    $result=mysqli_query($link,$query);
    header('location: user_profile.php');
}
else if((!empty($_POST['pass']) && !empty($_POST['cpass']) )&& $_POST['pass']!=$_POST['cpass'])
{
    $_SESSION['msg']='Password and Confirm Password did not match !!';
    header('location: user_profile_edit.php');
}
else
{
    $query="update user set name='$name',email='$email',phone='$phone',age='$age',
            profession='$profession', address='$address' WHERE email='$email' ";
    $result=mysqli_query($link,$query);
    header('location: user_profile.php');
}



