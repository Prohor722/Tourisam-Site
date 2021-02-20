<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="laibery/bootstrap.min.css" rel="stylesheet">
    <link href="laibery/nav.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top" >
    <a href="index.php"><img src="logo/logo.jpg" class="brand-image"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <!--  <span class="navbar-toggler-icon"></span>   -->
        <img src="logo/toogler2.jpg">
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <div style="height: 10%;width: 3%"></div>     <!--to make some space between logo and menu options-->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" >
                <a class="nav-link" id="item" href="tours.php">Tours <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="item" href="resorts.php">Resorts</a>
            </li>
            <!--
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="item" href="#" style="color: #fffbfb" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Districts
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Dhaka</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Rajshahi</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Barishal</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Sylhet</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Chittagong</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Khulna</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Rangpur</a>
                </div>
            </li>
            -->

            <li class="nav-item">
                <a class="nav-link" id="item" href="hotels.php">Hotels</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="item" href="offers.php">Offers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="item" href="contact.php">Contact</a>
            </li>
        </ul>

        <a href="user_profile.php" id="user" class="nav-link">Profile</a>
        <a href="requests.php" id="user" class="nav-link">Requests</a>
        <a href="logout.php" id="user1" class="nav-link">Logout</a>
    </div>
</nav>
</body>
<footer>
    <script src="laibery/jquery-3.3.1.min.js"></script>
    <script src="laibery/bootstrap.min.js"></script>
</footer>

</html>