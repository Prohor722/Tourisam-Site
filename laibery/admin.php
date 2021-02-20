<?php
require_once 'auth.php';
include_once 'session_start.php';
if(!islogged())
{
    header("location:login.php");
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>Welcome</h1><?=$_SESSION['username'];?>
<a href="logout.php" class="btn btn-warning"><?php ?>Logout</a>
</body>
</html>