

<?php

include_once 'laibery/session_start.php';
require_once "laibery/db.php";

$pattern="/^(088||\+088)?01[15-9]\d{8}$/";

$trip= htmlentities($_POST['trip'],ENT_QUOTES);
$email=  htmlentities($_POST['email'],ENT_QUOTES);
$phone=  htmlentities($_POST['phone'],ENT_QUOTES);
$people=  htmlentities($_POST['people'],ENT_QUOTES);

$_SESSION['book']['trip']=$trip;
$_SESSION['book']['email']=$email;
$_SESSION['book']['people']=$people;
$_SESSION['book']['phone']=$phone;
$phone= str_ireplace([' ','.',',','/'],'',$phone);

///Registration error checking:

if(!empty($_POST)) {
//trip:
    if (empty($trip)) {
        $_SESSION['error']['trip'] = "Please Select a trip";
    }
//email:
    if (empty($email)) {
        $_SESSION['error']['email'] = "Email is required!!";
    }
//phone
    if (empty($phone)) {
        $_SESSION['error']['phone'] = "Phone number is required!!";
    }
//people
    if (empty($people)) {
        $_SESSION['error']['people'] = "Enter, for how many people want to book";
    } //checking email or phone does exists or not
    if(!empty($email) || !empty($phone))
    {
        $query = "select email,phone from user where email='$email' or phone='$phone'";
        $result = mysqli_query($link, $query);
        $data = mysqli_fetch_assoc($result);
        print_r($data);
        if ($email != $data['email']) {
            $_SESSION['error']['email'] = "Please use your given Email Address or Update profile first";
        }
        if ($phone != $data['phone']) {
            $_SESSION['error']['phone'] = "Please use your given phone number or Update profile first";
        }
    }

    ///Inserting Data in database Successfully:

    if (empty($_SESSION['error'])) {


        $query = "INSERT INTO book(trip, user_email, phone,people,status)
                  values ('$trip','$email','$phone','$people','R')";
        mysqli_query($link, $query);
        $_SESSION['success'] = "You have successfully request. Now we will contact you within 48 hours !!";
        header("location:booking.php");
    } /// Registration failure:

    elseif (!empty($_SESSION['error'])) {
        header("location:booking.php");
    }
}