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
    include_once 'laibery/session_start.php';

    if (islogged()) {
        include_once 'nav2.php';
    } else {
        include_once 'nav.php';
    }
    ?>

</head>
<body style=" background-color: rgba(59,125,184,0.04)">

<h1 style='font-family: sans-serif;color: #1b1e21; text-align: center; margin:80px 1% 3% 1%;'>Upcoming Tours</h1>

<div class="row" style="margin: 1% 1% 3% 7%;">
    <div class="col-md-4">
        <div class="card" style=" height: 93%; width: 80%">
            <img src="tours/rangamati.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rangamti</h5>
                <p class="card-text">3days 2nights trip<br>
                    <b>Cost:</b> 5000 BDT(per person)<br>
                    <b>Trip Starts:</b> 21th april, 10.30pm<br>
                    <b>Trip Ends:</b> 23th april, 5.30pm<br>
                    <b>Bookings Deadline:</b> 17th april, 12.00am<br>
                </p>

            </div>
            <a href="booking.php?name=Rangamati" style="background-color: #3956a3" class="btn btn-primary">Book</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style=" height: 93%; width: 80%">
            <img src="tours/bandharbon.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bandarban</h5>
                <p class="card-text">3days 2nights trip<br>
                    <b>Cost:</b> 5000 BDT(per person)<br>
                    <b>Trip Starts:</b> 21th april, 10.30pm<br>
                    <b>Trip Ends:</b> 23th april, 4.30pm<br>
                    <b>Bookings Deadline:</b> 17th april, 12.00am<br>
                </p>
            </div>
            <a href="booking.php?name=Bandarban" style="background-color: #3956a3" class="btn btn-primary">Book</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style=" height: 93%; width: 80%">
            <img src="tours/sundor_ban.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sundarban</h5>
                <p class="card-text">3days 2nights trip<br>
                    <b>Cost:</b> 5000 BDT(per person)<br>
                    <b>Trip Starts:</b> 25th april, 10.30pm<br>
                    <b>Trip Ends:</b> 27th april, 3.30pm<br>
                    <b>Bookings Deadline:</b> 20th april, 12.00am<br>
                </p>
            </div>
            <a href="booking.php?name=Sundarban" style="background-color: #3956a3" class="btn btn-primary">Book</a>
        </div>
    </div>
</div>

<div class="row" style="margin: 1% 1% 10% 7%">
    <div class="col-md-4">
        <div class="card" style=" height: 93%; width: 80%">
            <img src="tours/sajek.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sajek</h5>
                <p class="card-text">3days 2nights trip<br>
                    <b>Cost:</b> 5000 BDT(per person)<br>
                    <b>Trip Starts:</b> 25th april, 10.30pm<br>
                    <b>Trip Ends:</b> 27th april, 12.30pm<br>
                    <b>Bookings Deadline:</b> 20th april, 12.00am<br>
                </p>
            </div>
            <a href="booking.php?name=Sajek" style="background-color: #3956a3" class="btn btn-primary">Book</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="height: 93%; width: 80%">
            <img src="tours/kuakata_sea_beach.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kuakata</h5>
                <p class="card-text">3days 2nights trip<br>
                    <b>Cost:</b> 5000 BDT(per person)<br>
                    <b>Trip Starts:</b> 17th april, 10.30pm<br>
                    <b>Trip Ends:</b> 19th april, 12.30pm<br>
                    <b>Bookings Deadline:</b> 16th april, 12.00am<br>
                </p>
            </div>
            <a href="booking.php?name=Kuakata" style="background-color: #3956a3" class="btn btn-primary">Book</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="height: 93%; width: 80%">
            <img src="tours/coxs_bazar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cox's Bazar</h5>
                <p class="card-text">3days 2nights trip<br>
                    <b>Cost:</b> 5000 BDT(per person)<br>
                    <b>Trip Starts:</b> 29th april, 10.30pm<br>
                    <b>Trip Ends:</b> 1th may, 12.30pm<br>
                    <b>Bookings Deadline:</b> 21th april, 12.00am<br>
                </p>
            </div>
            <a href="booking.php?name=Cox's Bazar" style="background-color: #3956a3" class="btn btn-primary">Book</a>
        </div>
    </div>
</div>

</body>
<footer>
    <script src="laibery/bootstrap.min.js"></script>
    <script src="laibery/jquery-3.3.1.min.js"></script>
</footer>
</html>