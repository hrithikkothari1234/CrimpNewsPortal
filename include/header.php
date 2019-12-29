<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">

    <title> Crimp News</title>
    <link rel = "icon"
    href = "public/images/icon.jpg"
    type = "image/x-icon">

</head>

<body>

    <!-- horizontal navs -->

    <!-- upper nav -->
    <nav class="navbar navbar-expand-sm navbar-dark nav-upper" role="navigation">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="nav">
                <li>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=simranjeet@crimpnews.in" target="_blank" class="nav-link">
                        <i class="fa fa-comments mr-1 fa-fw"></i>
                        Send Feedback
                    </a>
                </li>
                <li>
                    <a href="subscribe.php" class="nav-link">
                        <i class="fa fa-address-card mr-1 fa-fw"></i>
                        Subscribe
                    </a>
                </li>
                <li>
                    <a href="aboutus.php" class="nav-link">
                        <i class="fa fa-user mr-1 fa-fw"></i>
                        About Us
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- middle nav -->
    <div class="nav-mid">
        <div class="crimp-news">
            Crimp
            <span>
                News
            </span>
        </div>
        <div class="text-muted">
                Your Placement Partner
        </div>
    </div>

    <!-- lower nav -->
    <div class="nav-lower">
        <ul class="nav pull-left">
            <li>
                <a href="index.php">
                    <i class="fa fa-newspaper-o mr-2 fa-fw"></i>
                    Top Stories
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">
                    Categories
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-content">
                    <a href="index.php?q=India">
                        <i class="fa fa-flag mr-1 fa-fw"></i>
                        India
                    </a>
                    <hr>
                    <a href="index.php?q=World">
                        <i class="fa fa-globe mr-1 fa-fw"></i>
                        World
                    </a>
                    <hr>
                    <a href="index.php?q=Tech">
                        <i class="fa fa-desktop mr-1 fa-fw"></i>
                        Tech
                    </a>
                    <hr>
                    <a href="index.php?q=Business">
                        <i class="fa fa-pencil mr-1 fa-fw"></i>
                        Firm
                    </a>
                    <hr>
                    <a href="index.php?q=Budget">
                        <i class="fa fa-money mr-1 fa-fw"></i>
                        Budget
                    </a>
                    <hr>
                    <a href="index.php?q=Industry">
                        <i class="fa fa-industry mr-1 fa-fw"></i>
                        Industry
                    </a>
                    <hr>
                    <a href="index.php?q=Entertainment">
                        <i class="fa fa-gamepad mr-1 fa-fw"></i>
                        Fun
                    </a>
                    <hr>
                    <a href="index.php?q=Science">
                        <i class="fa fa-flask mr-1 fa-fw"></i>
                        Science
                    </a>
                    <hr>
                    <a href="index.php?q=Sports">
                        <i class="fa fa-bicycle  mr-1 fa-fw"></i>
                        Sports
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <?php require_once('stories/topstories.php'); ?>

    <div class='top-news'>
        <h6> Top News </h6>
        <?php get_topheadlines() ?>
        <a href='#' id="topHeadlines" target="_blank"> </a>
    </div>
