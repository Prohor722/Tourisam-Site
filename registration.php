<?php

include_once 'laibery/func.php';
require_once 'laibery/auth.php';
include 'laibery/session_start.php';

if(islogged())
{
    header("location:a.php");
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="laibery/bootstrap.min.css" rel="stylesheet";>
    <link href="laibery/registration.css" rel="stylesheet">
</head>
<body style='background-image:url("a.png")'>

<div class="nav">
</div>

<?php
include 'nav.php';
?>
    <h1>Registration</h1>
<div class="container">
    <form action="registration_errors.php" method="post">
        <div id="blank"></div>

    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-4" id="l">
            <div class="form-group">
                <label >Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name (At least 2 characters)"
                       value="<?php if(isset($_SESSION['reg'])) echo $_SESSION['reg']['name'];?>">
                <?= er_msg('name');?>
            </div>
            <div class="form-group">
                <label >Age</label>
                <input type="text" class="form-control" name="age" placeholder="Enter Age(Ex: 25)"
                       value="<?php if(isset($_SESSION['reg'])) echo $_SESSION['reg']['age'];?>">
                <?= er_msg('age');?>
            </div>
            <div class="form-group">
                <label >Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Address"
                       value="<?php if(isset($_SESSION['reg'])) echo $_SESSION['reg']['address'];?>">
                <?= er_msg('address');?>
            </div>
            <div class="form-group">
                <label >Profession</label>
                <input type="text" class="form-control" name="profession" placeholder="Enter Address"
                       value="<?php if(isset($_SESSION['reg'])) echo $_SESSION['reg']['profession'];?>">
                <?= er_msg('profession');?>
            </div>
        </div>
        <div class="col-md-4" id="r">

                <div class="form-group">
                    <label >Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter phone number"
                           value="<?php if(isset($_SESSION['reg'])) echo $_SESSION['reg']['phone'];?>">
                    <?= er_msg('phone');?>
                </div>
                <div class="form-group">
                    <label >Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email"
                           value="<?php if(isset($_SESSION['reg'])) echo $_SESSION['reg']['email'];?>">
                    <?= er_msg('email');?>
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="Enter password">
                    <?= er_msg('pass');?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" name="cpass" placeholder="Confirm password">
                    <?= er_msg('cpass');?>
                </div>
        </div>

    </div>
        <div class="row" >
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <button type="submit" id="button" class="btn btn-primary" style="width: 79.5%; height: 100%; margin: 0% 0% 0% 0%">Register</button>
            </div>
        </div>
        <?php  unset($_SESSION['reg']); ?>
        </form>
</div>


<?php
if(isset($_SESSION['error']))
{
    unset($_SESSION['error']);
}
?>
</body>
</html>