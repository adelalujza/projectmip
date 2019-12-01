<?php 

session_start();

if (isset($_GET["lang"])) {
  $lang = $_GET["lang"];
  $_SESSION["lang"]=$lang;
  include 'langs/'.$lang.'.php';
} else {
    if (isset($_SESSION["lang"])) {
    $lang = $_SESSION["lang"];
    include 'langs/'.$lang.'.php';
    }
    else {
        include 'langs/sk.php';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>A-Reviews | Phones &amp; Tablets reviews</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="container">
                <a id="logo" href="index.php">
                    <img src="../images/logo.png" alt="My awesome website">
                </a>
                <nav>
                    <ul id="menu">
                        <li class="active"><a href="index.php"><?php echo $translation["menu_home"];?></a></li>
                        <li><a href="phone.php"><?php echo $translation["menu_phone"];?></a>
                            <ul>
                                <li><a href="about.php"><?php echo $translation["menu_about"];?></a></li>
                                <li><a href="specifications.php"><?php echo $translation["menu_specifications"];?></a></li>
                                <li><a href="gallery.php"><?php echo $translation["menu_gallery"];?></a></li>
                            </ul>
                        </li>
                        <li><a href="review.php"><?php echo $translation["menu_review"];?></a>
                            <ul>
                                <li><a href="comparison.php"><?php echo $translation["menu_comparison"];?></a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php"><?php echo $translation["menu_contact"];?></a></li>
                        <li><a href="forum.php"><?php echo $translation["menu_forum"];?></a></li>
                    </ul>
                    <ul id="icons">
                        <li>
                            <a href="?lang=sk">
                            <img src="../images/skflag.png" style="margin-top:8px" width="50%" alt="Slovensky">
                            </a>
                        </li>
                        <li>
                            <a href="?lang=en">
                            <img src="../images/enflag.png" style="margin-top:8px" width="50%" alt="Slovensky">
                            </a>
                        </li>
                        <li><i class="fa fa-search fa-fw"></i></li>
                    </ul>
                </nav>
            </div>
        </header>