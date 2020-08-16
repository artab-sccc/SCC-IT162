<?php include 'big-config.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/table.css" />
    
    <title><?=$title?></title>
</head>

<body>
    
<main class="wrapper">
        
<header>
    
    <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i><?=$title?></a></h1>
    
    <nav id="cssmenu">
        <ul>
            <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> IT162 Portal</span></a></li>
            <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
            <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
                <ul>
                    <li><a href="map.php"><span>Map</span></a></li>
                    <li><a href="calendar.php"><span>Calendar</span></a></li>
                </ul>
            </li>
            <li><a href="accessibility.php"><span>Web Accessibility</span></a></li>
            <li><a href="webcam.php"><span>Web Cam</span></a></li>
            <li><a href="responsivemobile.php"><span>Responsive vs Mobile</span></a></li>
            <li><a href="galleries.php"><span>Galleries</span></a></li>
            <li><a href="flexbox.php"><span>Flexbox</span></a></li>
            <li><a href="shoppingcarts.php"><span>Shopping Carts</span></a></li>
            <li><a href="questionaire.php"><span>Questionaire</span></a></li>
        </ul>
    </nav>
    
</header>