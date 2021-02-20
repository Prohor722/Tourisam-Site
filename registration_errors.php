<?php

include_once 'laibery/session_start.php';
require_once "laibery/db.php";

$pattern="/^(088||\+088)?01[135-9]\d{8}$/";
$_SESSION['reg']=$_POST;
$name= htmlentities($_POST['name'],ENT_QUOTES);
$email=  htmlentities($_POST['email'],ENT_QUOTES);
$age=  htmlentities($_POST['age'],ENT_QUOTES);
$address=  htmlentities($_POST['address'],ENT_QUOTES);
$profession=  htmlentities($_POST['profession'],ENT_QUOTES);
$phone=  htmlentities($_POST['phone'],ENT_QUOTES);
$pass=  htmlentities($_POST['pass'],ENT_QUOTES);
$cpass=  htmlentities($_POST['cpass'],ENT_QUOTES);

$phone= str_ireplace([' ','.',',','/'],'',$phone);

///Registration error checking:

if(!empty($_POST))
{
//name:
    if(empty($name))
    {
        $_SESSION['error']['name']="Name is required!!";
    }
    elseif(strlen($name)<2)
    {
        $_SESSION['error']['name']="Enter a valid Name";
    }
//email:
    if(empty($email))
    {
        $_SESSION['error']['email']="Email is required!!";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error']['email'] = "Enter a valid Email";
    }

 //age:
    if(empty($age))
    {
        $_SESSION['error']['age']="Age is required!!";
    }
    elseif($age< 18 || strlen($age)>=3)
    {
        $_SESSION['error']['age']="Enter a valid Age !! Must be 18+";
    }

//phone
    if(empty($phone))
    {
        $_SESSION['error']['phone']="Name is required!!";
    }
    elseif(!preg_match($pattern,$phone))
    {
        $_SESSION['error']['phone']="Enter a valid Phone Number";
    }
//password
    if(empty($pass))
    {
        $_SESSION['error']['pass']="Password is required!!";
    }
    elseif(strlen($pass)<6)
    {
        $_SESSION['error']['pass']="Password must be at least 6 characters";
    }
//confirm password
    if($pass!==$cpass)
    {
        $_SESSION['error']['cpass']="Confirm password and Password must be same!!";
    }
//profession
    if(empty($profession))
    {
        $_SESSION['error']['profession']="This field is required!!";
    }
 //address
    if(empty($address))
    {
        $_SESSION['error']['address']="Address is required!!";
    }
    elseif (strlen($address)<10)
    {
        $_SESSION['error']['address']="Please enter full address";
    }

    //checking email or phone does exists or not
    else
    {
        $query = "select email,phone from user where email='$email' ' or phone='$phone'";
        $result = mysqli_query($link,$query);
        $data = mysqli_fetch_assoc($result);
        print_r($data);
        if($email==$data['email'])
        {
            $_SESSION['error']['email']="This Email is already been used";
        }
        if($phone==$data['phone'])
        {
            $_SESSION['error']['phone']="This Phone Number is already been used";
        }
    }

    ///Inserting Data in database Successfully:

    if(empty($_SESSION['error']))
    {

        $pass= md5($pass);
        $query = "INSERT INTO user(name, email, address, age, pass, phone,profession)
                  values ('$name','$email','$address','$age','$pass','$phone','$profession')";
        mysqli_query($link,$query);
        header("location:login.php");
    }

    /// Registration failure:

    elseif(!empty($_SESSION['error']))
    {
        header("location:registration.php");
    }
}

