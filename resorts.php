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

    if (islogged()) {
        include_once 'nav2.php';
    } else {
        include_once 'nav.php';
    }
    ?>
</head>
<body >
<h2 style='font-family: sans-serif; color: #1b1e21;margin: 80px 5% 3% 5%;'>Resorts</h2>

<div class="row" style="margin: 1px 10px 20px 4%;">

    <div class="col-md-4">
        <div id="carouselExampleControls4" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="resorts/d1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resorts/d2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resorts/d3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-8" style=" background-color: rgba(59,125,184,0.04)">
        <h5><b>Divine Eco Resort</b></h5>
        <p>Divine Eco Resort is a spectacular luxurious resort in Kolatoli beach, Cox’s Bazar. Divine Eco Resort is an
            elegant eco resort and the ideal place for unique moments of relaxation. Divine Eco Resort is offering a
            Guest experience that is intimate, unique, and warm hospitality...</p>
        <a href="booking.php?name=Divine Eco Resort" class="btn btn-primary">Reserve</a>
    </div>
</div>

<!-- 2nd resort  -->
<div class="row" style="margin: 3% 10px 20px 4%">
    <div class="col-md-4">
        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="resorts/r1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resorts/r2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resorts/r3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-8" style=" background-color: rgba(59,125,184,0.04)">
        <h5><b>Ratnodweep Resort</b></h5>
        <p>Located in the heart of Pabna, Ratnodweep Resort is a wonder in the surrounding of lavishing greenery.
            Equipped with all modern state of art Amenities and Facilities, Ratnodweep Resort is the first ever Five
            Star Resort in Pabna.Our 45 spacious guest rooms, including 11 suites, support a restorative experience with
            a bed, a bathroom with Shower...</p>
        <a href="booking.php?name=Ratnodweep Resort" class="btn btn-primary">Reserve</a>
    </div>
</div>

<!-- 3rd resort  -->
<div class="row" style="margin: 3% 10px 20px 4%">
    <div class="col-md-4">
        <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="resorts/s1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resorts/s2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resorts/s3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-8" style=" background-color: rgba(59,125,184,0.04)">
        <h5><b>Sairu Hill Resorts</b></h5>
        <p>SAIRU Hill Resorts is set against the spectacular greenery covered hill range of Bandarban in the Chittagong
            Hill Tracts. Sairu has conveniently located only 18 km away from Bandarban Town on the hill slopes at
            the Y – junction of the road from Bandarban to Chimbuk. It takes approximately 40 – 45 minutes to drive
            through this interesting....</p>
        <a href="booking.php?name=Sairu Hill Resorts" class="btn btn-primary">Reserve</a>
    </div>
</div>

<!-- 4th resort  -->
<div class="row" style="margin: 3% 10px 20px 4%">
    <div class="col-md-4">
        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="resorts/p1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resorts/p2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resorts/p3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-8" style=" background-color: rgba(59,125,184,0.04)">
        <h5><b>Pubail Socio Cultural Centre</b></h5>
        <p>Exotic Beautiful Stunning Private Peaceful Relax Enjoy Dine. Pscc Resort Is Your Perfect, Peaceful, Relaxing
            Beautiful Exotic Place For Vacation. A Hidden Gem Nestled In The Lush Green Scenic Landscape...
            <br> Gazipur To Pubail College Road, Block. A, Moholla. Demorpara,
            Gazipur 1721, Bangladesh</p>
        <a href="booking.php?name=Pubail Socio Cultural Centre" class="btn btn-primary">Reserve</a>
    </div>

</div>

</body>
<footer>
    <script src="laibery/bootstrap.min.js"></script>
    <script src="laibery/jquery-3.3.1.min.js"></script>
</footer>
</html>