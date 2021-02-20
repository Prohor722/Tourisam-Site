<html>
<head style="width: 100% ; height: 10%">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holidays</title>
    <link rel="stylesheet" href="laibery/bootstrap.min.css">
    <link rel="stylesheet" href="laibery/home.css">

    <?php
    include 'laibery/auth.php';

    if (islogged()) {
        include_once 'nav2.php';
    } else {
        include_once 'nav.php';
    }
    ?>
</head>
<body style='background-image:url("offers.jpg");background-position: center; background-repeat: no-repeat; background-size: 100% 280%'>
<div class="row" style="margin-top: 10%; width: 100%">
    <div class="col-md-1"></div>
    <div class="col-md-3" style="margin-right: 5%; margin-left: 1%">
        <div class="card" style="width: 18rem;">
            <img src="offers/a.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Get 10% off for at least 10 persons booking at Hotels!!<br><br></p>
                <a href="hotels.php" class="btn btn-primary">Check Hotels</a>
            </div>
        </div>
    </div>
    <div class="col-md-3" style="margin-right: 5%">
        <div class="card" style="width: 18rem;">
            <img src="offers/b.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Get 15% off for at least 10 persons booking at Tours (Conditions may applicable)!!</p>
                <a href="tours.php" class="btn btn-primary">Check Tours</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img src="offers/c.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Get 20% off for at least 10 persons booking at Resorts(Conditions may applicable)!!</p>
                <a href="resorts.php" class="btn btn-primary">Check Resorts</a>
            </div>
        </div>
    </div>
</div>
</body>
<footer>
    <script src="laibery/bootstrap.min.js"></script>
    <script src="laibery/jquery-3.3.1.min.js"></script>
</footer>
</html>