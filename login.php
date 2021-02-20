<?php

require_once "laibery/func.php";
require_once "laibery/auth.php";

$login='login';

if(islogged())
{
    header("location:a.php");
}
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="laibery/bootstrap.min.css" rel="stylesheet">
</head>
<body style='background-image:url("a.png")'>
<div class="nav" style="height: 150px">
</div>

<?php
include 'nav.php';
?>

<h1 align="center">Login</h1>

<div class="row">

    <div class="col-md-4"></div>
    <div class="col-md-4">

        <form method="post" action="login_error.php"'>
        <div class="form-group">
            <label >Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Enter password">
        </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <?php
        if(isset($_SESSION['error']))
        {?>

            <div class="alert alert-danger" role="alert">
                <?= "<p style='color: rgba(226,50,25,0.98)'>".er_msg('login')."</p>" ?>
            </div>

        <?php }
        unset($_SESSION['error']);
        ?>

    </div>
</div>


</body>
</html>