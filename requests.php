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
    include_once 'laibery/db.php';

    if(!islogged())
    {
        header('location:login.php');
    }
    include_once 'nav2.php';
    ?>
</head>
<body style='background-image:url("a.png")'>
<div class="row" style="width: 100%">
    <div class="col-md-7">
        <h1 style="margin-top: 80px; text-align: center">Booking Requests</h1>
        <div  style="margin: 2% 1% 10% 10%">
            <?php
            $i=1;
            $email=$_SESSION['user_data']['email'];
            $query="SELECT * from book WHERE user_email='$email' and status='R' ";
            $result=mysqli_query($link,$query);
            $data=mysqli_fetch_all($result,MYSQLI_ASSOC);
            ?>

            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Trip</th>
                    <th scope="col">People</th>
                    <th scope="col">Option</th>
                </tr>
                </thead>
                <?php
                foreach ($data as $user) {
                    ?>
                    <tbody>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?=$user['trip'];?></td>
                        <td ><?=$user['people'];?></td>
                        <td><a href="request_cancel.php?id=<?=$user['id'];?>"><button class="btn btn-primary">Cancel</button></a></td>
                    </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    <div class="col-md-5">

        <h1 style="margin-top: 80px; text-align: center">Accepted Requests</h1>
        <div  style="margin: 3% 10% 10% 4%">
            <?php
            $i=1;
            $email=$_SESSION['user_data']['email'];
            $query="SELECT * from book WHERE user_email='$email' and status='A'";
            $result=mysqli_query($link,$query);
            $data=mysqli_fetch_all($result,MYSQLI_ASSOC);
            ?>

            <table class="table">
                <thead class="table-success">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Trip</th>
                    <th scope="col">People</th>
                </tr>
                </thead>
                <?php
                foreach ($data as $user) {
                    ?>
                    <tbody>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?=$user['trip'];?></td>
                        <td ><?=$user['people'];?></td>
                    </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>


</body>
<footer>
    <script src="laibery/bootstrap.min.js"></script>
    <script src="laibery/jquery-3.3.1.min.js"></script>

</footer>
</html>