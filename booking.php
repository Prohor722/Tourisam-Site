<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holidays</title>
    <link rel="stylesheet" href="laibery/bootstrap.min.css">
    <link rel="stylesheet" href="laibery/home.css">

    <?php
    include 'laibery/auth.php';
    include_once 'laibery/func.php';
    include_once 'laibery/session_start.php';

    if(!islogged())
    {
        header('location:login.php');
    }
    else
    {
        include_once 'nav2.php';
    }

    if (isset($_SESSION['success'])){
    unset($_SESSION['book']);}
    ?>
</head>
<body style='background-image:url("a.png")'>
<h1 style="margin-top: 80px; text-align: center">Make Booking</h1>
<?php
if(isset($_GET['name'])){
    $trip=$_GET['name'];
    $_SESSION['trip']=$trip;
}
?>
<form style="margin: 1% 35% 5% 35%" method="post" action="booking_errors.php">

    <label for="disabledTextInput">Trip</label>
    <div class="form-group">
        <input type="text" class="form-control" name="trip"
               value="<?php if(isset($_SESSION['book']['trip'])){echo $_SESSION['book']['trip'];} else echo $_SESSION['trip'];?>" readonly>
        <?= er_msg('trip');?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email"
               value="<?php if(isset($_SESSION['book']['email'])){echo $_SESSION['book']['email'];} ?>" placeholder="Enter email">
        <?= er_msg('email');?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" class="form-control"
               value="<?php if(isset($_SESSION['book']['phone'])){echo $_SESSION['book']['phone'];} ?>"
               name="phone" placeholder="Enter phone/mobile number">
        <?= er_msg('phone');?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">People</label>
        <input type="text"  class="form-control" name="people"
               value="<?php if(isset($_SESSION['book']['people'])){echo $_SESSION['book']['people'];} ?>"
               placeholder="Enter how many people">
        <?= er_msg('people');?>
    </div>
    <button type="submit" class="btn btn-primary">Confirm</button>

    <?php
    if (isset($_SESSION['success'])){
    ?>
    <div class="alert alert-success" role="alert">
        <?= $_SESSION['success']; ?>
    </div>

    <?php }?>

</form>
</body>
<footer>
    <script src="laibery/bootstrap.min.js"></script>
    <script src="laibery/jquery-3.3.1.min.js"></script>
    <?php
    if(isset($_SESSION['error']))
    {
        unset($_SESSION['error']);
    }
    if(isset($_SESSION['book']))
    {
        unset($_SESSION['book']);
    }
    if(isset($_SESSION['success']))
    {
        unset($_SESSION['success']);
    }
    ?>
</footer>
</html>