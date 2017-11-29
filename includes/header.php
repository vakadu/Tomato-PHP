<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Kwiqpick">

    <title>Kwiqpick</title>

    <!--Fav icons-->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spectral+SC:400,500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/styles/styles.css"/>

</head>

<body>

<!--navigation-->
<header id="header" class="headrom">
    <nav class="navbar navbar-dark">
        <div class="container">
            <button class="navbar-toggler hidden-lg hidden-md" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
            <a class="navbar-brand" href=""> <img class="img-rounded" src="assets/images/KP_Logo_100x100.png" alt=""> </a>
            <div class="collapse navbar-toggleable-md  md-right" id="mainNavbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item <?= ($activePage == 'restaurants') ? 'active':''; ?>"> <a class="nav-link" href="restaurants.php">Restaurants</a>
                    </li>
                    <li class="nav-item <?= ($activePage == 'menu') ? 'active':''; ?>"> <a class="nav-link" href="menu.php">Menus</a>
                    </li>
                    <li class="nav-item  <?= ($activePage == 'events') ? 'active':''; ?>"> <a class="nav-link" href="events.php">Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
