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
<body style='background-image:url("contact.jpg");background-position: center; background-repeat: no-repeat; '>


<h2 style="text-align: center; margin-top: 16%; color: #fffdfd">Contact Information</h2>
<ul class="colorlib-footer-links" style="margin: 2% 10% 10% 40%;">
    <li style="color: #f8fff9">Sobhan Tower, 138 ,<br>  Mirpur Rd, Dhaka 1205,</li>
    <li style="color: #f8fff9"><a style="text-decoration: none; color: #f8fff9" href="tel://0992654">+ 0992654</a></li>
    <li style="color: #f8fff9"><a style=" text-decoration: none; color: #f8fff9" href="mailto:info@yoursite.com">Email</a></li>
    <li style="color: #f8fff9"><a style=" text-decoration: none; color: #f8fff9" href="https://youtube.com">Youtube</a></li>
    <li style="color: #f8fff9"><a style=" text-decoration: none; color: #f8fff9" href="https://www.facebook.com/holidaysdotcom">Facebook</a></li>
</ul>

</body>
<footer>
    <script src="laibery/bootstrap.min.js"></script>
    <script src="laibery/jquery-3.3.1.min.js"></script>
</footer>
</html>