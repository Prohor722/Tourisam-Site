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
<h1 style="margin-top: 15%; text-align: center">Profile Info</h1>
<div style="margin: 2% 30% 5% 35%">
    <h5><b>Name : </b><?= $data['name']?></h5>
    <h5><b>Email : </b><?= $data['email']?></h5>
    <h5><b>Phone : </b><?= $data['phone']?></h5>
    <h5><b>Age : </b><?= $data['age']?></h5>
    <h5><b>Address : </b><?= $data['address']?></h5>
    <h5><b>Profession : </b><?= $data['profession']?></h5>
    <a href="user_profile_edit.php">
        <button class="btn btn-primary">Edit</button>
    </a>
</div>

</body>
<footer>
    <script src="laibery/bootstrap.min.js"></script>
    <script src="laibery/jquery-3.3.1.min.js"></script>

</footer>
</html>