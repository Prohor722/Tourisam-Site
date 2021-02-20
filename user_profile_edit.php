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
    include_once 'laibery/auth.php';
    include_once 'laibery/func.php';
    include_once 'laibery/session_start.php';
    include_once 'laibery/db.php';

    if(islogged())
    {
        include_once 'nav2.php';
    }
    else
    {
        header('location:login.php');
    }
    $email=$_SESSION['user_data']['email'];
    $query = "select * from user where email='$email'";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($result);
    ?>
</head>
<body style='background-image:url("a.png")'>
<h1 style="margin-top: 6%; text-align: center">Profile Info</h1>
<div style="margin: 2% 20% 1% 20%">
    <form method="post" action="user_profile_update.php">
        <div class="row" >
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $data['name']?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $data['email']?>">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?= $data['phone']?>">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" class="form-control" name="age" value="<?= $data['age']?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="<?= $data['address']?>">
                </div>
                <div class="form-group">
                    <label>Profession</label>
                    <input type="text" class="form-control" name="profession" value="<?= $data['profession']?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="pass" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="text" name="cpass" class="form-control">
                </div>

            </div>
            <button style="margin-left: 90%" type="submit" class="btn btn-primary">Save</button>

            <?php if(isset($_SESSION['msg'])) {?>
            <div style="margin-left: 2%" class="alert alert-danger"><?=$_SESSION['msg']; ?></div>
            <?php } ?>
        </div>

    </form>
</div>

</body>
<footer>
    <script src="laibery/bootstrap.min.js"></script>
    <script src="laibery/jquery-3.3.1.min.js"></script>
    <?php
    unset($_SESSION['msg']);
    ?>
</footer>
</html>