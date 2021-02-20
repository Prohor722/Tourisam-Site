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

    if(islogged())
    {
        include_once 'nav2.php';
    }
    else
    {
        include_once 'nav.php';
    }
    ?>
</head>
<body style='background-image:url("a.png")'>
<div style="width: 100%; height: 7%">
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="slider/a.jpg" style=" height: 93%; width: 100%" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="slider/b.jpg" style=" height: 93%; width: 100%" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="slider/c.jpg" style=" height: 93%; width: 100%" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="slider/d.jpg" style=" height: 93%; width: 100%" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="slider/e.jpg" style=" height: 93%; width: 100%" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div id="blank1"></div>  <!--div blank1 is to create a blank space between carousel and recent headline   -->

    <h3>Recent Events</h3>

<div id="blank2"></div>
<div class="row" style="margin: 1% 1% 2% 7%">

    <div class="col-md-4 col-sm-4">
        <div class="card" style="width: 80%; height: 8%">
            <img src="card/x.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sundarban</h5>
                <p class="card-text">3 nights 4days trip from Kolabagan , Dhaka to Sundarban.To check the photos and blogs
                    follow us on <a href="https://www.facebook.com/holidaysdotcom" style="text-decoration: none">facebook</a>..</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4" >
        <div class="card" style="width: 80%; height: 8%">
            <img src="card/y.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sundarban</h5>
                <p class="card-text">3 nights 4days trip from Kolabagan , Dhaka to Sundarban.To check the photos and blogs
                    follow us on <a href="https://www.facebook.com/holidaysdotcom" style="text-decoration: none">facebook</a>..</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="card" style="width: 80%; height: 8%">
            <img src="card/z.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sundarban</h5>
                <p class="card-text">3 nights 4days trip from Kolabagan , Dhaka to Sundarban.To check the photos and blogs
                    follow us on <a href="https://www.facebook.com/holidaysdotcom" style="text-decoration: none">facebook</a>..</p>
            </div>
    </div>
</div>

</body>
<footer>
    <script src="laibery/bootstrap.min.js"></script>
    <script src="laibery/jquery-3.3.1.min.js"></script>
</footer>
</html>