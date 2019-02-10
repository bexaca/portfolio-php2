<!doctype html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Isidora Nikolic</title>
    <link rel="shortcut icon" href="favicon.jpg"/>
    <meta name="description" content="Isidora Nikolic portfolio webpage, take a peek and If you like it contact me to make something together">
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="css/notify.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <div id="preloader">
        <div id="status">
            <h1>INDEX</h1>
        </div>
    </div>
    <header id="header_nav" >
        <span id="hamb" onclick="openNav()"><img src="img/list.svg" alt="hamburger"/></span>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <?php error_reporting(0); if($_SESSION['uloga']=="" ){?>
                    <a href="login.php">log in</a></li>
                <?php }?>
                <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                    <a href="uloga.php">index</a>
                <?php }?>
                <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                    <a href="skills.php">skills</a>
                <?php }?>
                <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                    <a href="work.php">work</a>
                <?php }?>
                <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                    <a href="about.php">about</a>
                <?php }?>
                <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                    <a href="contact.php">contact</a>
                    <?php }?>
                <?php if($_SESSION['uloga']=="admin"){?>
                    <a href="panel.php">admin</a>
                <?php }?>
                <?php if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici"){?>
                    <a href="login.php">log out</a>
                <?php }?>
                <a href="dokumentacija.pdf">dokumentacija</a>
            </div>
        </div>
        <nav class="cl-effect-1">
            <?php error_reporting(0); if($_SESSION['uloga']=="" ){?>
                <a href="login.php">log in</a></li>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                <a class="header_nav-link nav_color" href="uloga.php">index</a>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                <a class="header_nav-link nav_color" href="skills.php">skills</a>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                <a class="header_nav-link nav_color" href="work.php">work</a>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                <a class="header_nav-link nav_color" href="about.php">about</a>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
                <a class="header_nav-link nav_color" href="contact.php">contact</a>
            <?php }?>
            <?php  if($_SESSION['uloga']=="admin") {?>
                <a class="header_nav-link nav_color" href="panel.php">admin</a>
            <?php }?>
            <?php if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici"){?>
                <a class="header_nav-link nav_color" href="login.php">log out</a>
            <?php }?>
            <a class="header_nav-link nav_color" href="dokumentacija.pdf">dokumentacija</a>
        </nav>
    </header>
    <section id="hero-header" >
        <div class="element"></div>
        <?php 
            include "./php/konekcija.php";
            $upit = "SELECT * FROM site_text"; 
            $rezultat = $konekcija->query($upit)->fetchAll();
            $rezultat = $rezultat[0]->text;
        ?>
        <h1><?= $rezultat ?></h1>
    </section>
    <footer>
        <span>&copy; 2018 Isidora Nikolic, Nova Pazova, Serbia <a href="http://www.ict.edu.rs/">ICT Visoka skola</a></span>
    </footer>
</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="./js/preloader.js"></script>
<script type="text/javascript" src="./js/skript.js"></script>
<script type="text/javascript" src="./js/classie.js"></script>
<script type="text/javascript" src="./js/notify.js"></script>
<script type="text/javascript" src="./js/validacija.js"></script>

</html>