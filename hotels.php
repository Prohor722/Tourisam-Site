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
<body>
<h2 style='font-family: sans-serif; color: #1b1e21;margin: 80px 5% 3% 5%;'>Hotels</h2>

<div class="row" style="margin: 1px 10px 20px 4%">

    <div class="col-md-6">
        <div id="carouselExampleControls4" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="hotels/p1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/p2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/p3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/p4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/p5.jpg" class="d-block w-100" alt="...">
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
    <div class="col-md-6" style=" background-color: rgba(59,125,184,0.04)">
        <h5><b>Pan Pacific Hotel</b></h5>
        <p><b>Location:</b>

            Located in the heart of Dhaka, this luxury hotel is within a 15-minute walk of Bashundhara City Mall and
            Hatir Jheel. Katabon Mosque and Bangladesh National Museum are also within 1 mile (2 km).<br>
            <b>Hotel features:</b>

            2 restaurants, a full-service spa and an outdoor pool are available at this hotel. Free WiFi in public areas
            and free valet parking are also provided. Additionally, a health club, a bar/lounge and 3 coffee shops/cafés
            are on-site.<br>
            <b>Room amenities:</b>

            All 277 soundproofed rooms have 10 bedrooms and provide free WiFi and free wired Internet. For a bit of
            entertainment, plasma TVs come with cable channels, and guests will also appreciate thoughtful touches such
            as bathrobes and slippers. </p>
        <a href="booking.php?name=Pan Pacific Hotel" class="btn btn-primary">Reserve</a>
    </div>
</div>

<!-- 2nd resort  -->
<div class="row" style="margin: 3% 10px 20px 4%">
    <div class="col-md-6">
        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="hotels/s1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/s2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/s3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/s4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/s5.jpg" class="d-block w-100" alt="...">
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
    <div class="col-md-6" style=" background-color: rgba(59,125,184,0.04)">
        <h5><b>Sky City Hotel</b></h5>
        <p><b>Location:</b>

            Located in the heart of Dhaka, this spa hotel is within 2 mi (3 km) of Ramna Park, Baitul Mukarram and
            Bangabandhu National Stadium. Bangladesh National Museum and Old High Court Building are also within 2 mi (3
            km).<br>
            <b>Hotel features:</b>

            This hotel features 2 restaurants, a full-service spa and an indoor pool. Free buffet breakfast is provided,
            as well as free WiFi in public areas, free self parking and free airport pick-up. Additionally, a health
            club, a coffee shop/café and a snack bar/deli are on-site.<br>
            <b>Room amenities:</b>

            All 60 rooms feature thoughtful touches such as bathrobes and slippers, plus complimentary wireless Internet
            access and flat-screen TVs with cable channels. Other amenities available to guests include 24-hour room
            service, minibars and premium bedding. </p>
        <a href="booking.php?name=Sky City Hotel" class="btn btn-primary">Reserve</a>
    </div>
</div>

<!-- 3rd resort  -->
<div class="row" style="margin: 3% 10px 20px 4%">
    <div class="col-md-6">
        <div id="carouselExampleControls5" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="hotels/l1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/l2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/l3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/l4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/l5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/l6.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls5" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls5" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-6" style=" background-color: rgba(59,125,184,0.04)">
        <h5><b>Le Meridien Hotel</b></h5>
        <p><b>Location:</b>

            Situated near the airport, this luxury resort is within 2 miles (3 km) of Rajuk Trade Center Shopping Mall,
            Army Golf Club and International Convention City Bashundhara. Kurmitola General Hospital and Armed Forces
            Medical College are also within 3 miles (5 km). Airport Railway Station is 29 minutes by foot.<br>
            <b>Resort features:</b>

            Along with 7 restaurants, this resort has an outdoor pool and 3 bars/lounges. WiFi in public areas is free.
            Additionally, a fitness centre, a poolside bar and a steam room are on-site.<br>
            <b>Room amenities</b>

            All 304 rooms boast deep soaking bathtubs, and offer free WiFi and 24-hour room service. Free wired Internet
            and minibars are standard, as are LED TVs with cable channels. </p>
        <a href="booking.php?name=Le Meridien Hotel" class="btn btn-primary">Reserve</a>
    </div>
</div>


<!-- 4th resort  -->
<div class="row" style="margin: 3% 10px 20px 4%">
    <div class="col-md-6">
        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="hotels/t1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/t2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/t3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/t4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/t5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="hotels/t6.jpg" class="d-block w-100" alt="...">
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
    <div class="col-md-6" style=" background-color: rgba(59,125,184,0.04)">
        <h5><b>Tropical Daisy Hotel</b></h5>
        <p><b>Location:</b>

            Situated near the airport, this hotel is within 6 mi (10 km) of Jatiyo Sangshad Bhaban, Saat Masjid (Seven
            Domed Mosque) and University of Dhaka. Curzon Hall and Bangabandhu National Stadium are also within 6 mi (10
            km).<br>
            <b>Hotel features:</b>

            This smoke-free hotel features a restaurant, a 24-hour fitness centre and a coffee shop/café. Free full
            breakfast, free WiFi in public areas and free self parking are also provided. Other amenities include a
            24-hour business centre, coffee/tea in a common area and 24-hour room service.<br>
            <b>Room amenities:</b>

            All 28 rooms boast deep soaking bathtubs, and offer free WiFi and separate sitting areas. 24-hour room
            service and minibars are standard, as are LCD TVs with cable channels. </p>
        <a href="booking.php?name=Tropical Daisy Hotel" class="btn btn-primary">Reserve</a>
    </div>

</div>

</body>
<footer>
    <script src="laibery/bootstrap.min.js"></script>
    <script src="laibery/jquery-3.3.1.min.js"></script>
</footer>
</html>