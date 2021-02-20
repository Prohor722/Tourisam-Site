<?php
require_once 'laibery/db.php';
require_once 'laibery/auth.php';
require_once 'laibery/func.php';
include_once 'laibery/session_start.php';
//$login='login';
if(!empty($_POST))
{
    $email= htmlentities($_POST['email'],ENT_QUOTES);
    $pass= htmlentities($_POST['pass'],ENT_QUOTES);

    if(!empty($email)&&!empty($pass))
    {
        $pass= md5($pass);

        $query = "select email,pass,name from user where email='$email'";
        $result = mysqli_query($link,$query);
        $data = mysqli_fetch_assoc($result);

        if(!empty($data))
        {

            if($pass==$data['pass'])
            {
                $_SESSION['username']=$data['name'];
                $_SESSION['user_data']=$data;
                login($_SESSION['username']);
                header('location: index.php');
            }
            else
            {
                $_SESSION['error']['login']="Email or Password is incorrect";
                header('location:login.php');
            }
        }
        else
        {
            $_SESSION['error']['login']="No such user found";
            header('location:login.php');
        }
    }
    else{
        header('location:login.php');
    }
}
?>