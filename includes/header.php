<?php include 'portal-config.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
    
    <title><?=$title?></title>
</head>

<body>

    <main class="wrapper">
<header>
     <h1><a href="index.php"><i class="logo fa fa-user-circle"></i><?=$title?></a></h1>
        <nav>
            <ul class="topnav" id="myTopnav">
            <?=makeLinks($nav1)?>
            <!-- START COMMENT OUT NAV
                <li><a href="index.php">Welcome</a></li>
                <li><a href="big/index.php">Big</a></li>
                <li><a href="aia.php">AIA</a></li>
                <li><a href="flowchart.php">Flowchart</a></li>
                <li><a href="fp/index.php">Final Project</a></li>
                <li><a href="template.php">Page Template</a></li>
                <li><a href="contactme.php">Contact Arthur</a></li>
            END COMMENT OUT NAV -->
                <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
            </ul> 
        </nav>
</header>