
<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Isidora Nikolic</title>
    <link rel="shortcut icon" href="favicon.jpg" />
    <meta name="description"
        content="Isidora Nikolic portfolio webpage, take a peek and If you like it contact me to make something together">
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="css/notify.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <div id="preloader">
        <div id="status">
            <h1>LOGIN</h1>
        </div>
    </div>
    <header id="header_nav">
        <span id="hamb" onclick="openNav()"><img src="img/list.svg" alt="hamburger" /></span>
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
    <div class="login">
        <div class="loginf">
            <h1>Log in</h1>
            <form action="php/process.php" method="POST">
                <div class="form-group">
                    <span class="input input--madokaLeft">
                        <input class="input__field input__field--madoka" type="text" name="user" id="user" />
                        <label class="input__label input__label--madoka" for="user">
                            <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77"
                                preserveAspectRatio="none">
                                <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                            </svg>
                            <span class="input__label-content input__label-content--madoka">Username</span>
                        </label>
                    </span>
                </div>
                <div class="form-group">
                    <span class="input input--madokaLeft">
                        <input class="input__field input__field--madoka" type="password" name="pass" id="pass" />
                        <label class="input__label input__label--madoka" for="pass">
                            <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77"
                                preserveAspectRatio="none">
                                <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                            </svg>
                            <span class="input__label-content input__label-content--madoka">Password</span>
                        </label>
                    </span>
                </div>
                <input type="submit" name="btn" class="sblog btnposalji" onClick="return valLog();" value="Log in" />
            </form>
        </div>
        <div class="row">
        </div>
        <div class="loginf">
            <h1>Register</h1>
            <form method="POST" action="login.php" id="forma" name="forma">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <span class="input input--madokaLeft">
                                <input class="input__field input__field--madoka" type="text" name="tbIme" id="tbIme" />
                                <label class="input__label input__label--madoka" for="tbIme">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77"
                                        preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">First Name</span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <span class="input input--madokaLeft">
                                <input class="input__field input__field--madoka" type="text" name="tbPrezime"
                                    id="tbPrezime" />
                                <label class="input__label input__label--madoka" for="tbPrezime">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77"
                                        preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Last Name</span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <span class="input input--madokaLeft">
                                <input class="input__field input__field--madoka" type="text" name="tbEmail"
                                    id="tbEmail" />
                                <label class="input__label input__label--madoka" for="tbEmail">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77"
                                        preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Email</span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <span class="input input--madokaLeft">
                                <input class="input__field input__field--madoka" type="text" name="tbKorIme"
                                    id="tbKorIme" />
                                <label class="input__label input__label--madoka" for="tbKorIme">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77"
                                        preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Username</span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <span class="input input--madokaLeft">
                                <input class="input__field input__field--madoka" type="password" name="tbLozinka"
                                    id="tbLozinka" />
                                <label class="input__label input__label--madoka" for="tbLozinka">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77"
                                        preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Password</span>
                                </label>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="success"></div>
                <input type="submit" onClick="return valReg();" class="sblog btnposalji" name="btnSend"
                    value="Register" />
            </form>
            <?php
    if(isset($_REQUEST['btnSend']))
    {
		error_reporting(0);
      include ('./php/konekcija.php');
      $ime = $_REQUEST['tbIme'];
      $prezime = $_REQUEST['tbPrezime'];
      $korIme = $_REQUEST['tbKorIme'];
      $email = $_REQUEST['tbEmail'];
      $lozinka = $_REQUEST['tbLozinka'];
      $lozinka = md5($lozinka);

      $podaci=array();
      $greske=array();
      $regIme = "/^[A-Z]{1}[a-z]{2,9}$/";
      $regPrezime = "/^[A-Z]{1}[a-z]{3,20}$/";
      $regKorIme = "/^[a-z0-9\_]+$/";
      $regEmail = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
      if(!preg_match($regIme, $ime))
      {
        $greske[] = "Name is wrong!"; 
      }
      else
      {
        $podaci[] = $ime;
      }
    
      if(!preg_match($regPrezime, $prezime))
      {
        $greske[] = "Last name is wrong!"; 
      }
      else
      {
        $podaci[] = $prezime;
      }
      if(!preg_match($regKorIme, $korIme))
      {
        $greske[] = "Username is wrong!"; 
      }
      else
      {
        $podaci[] = $korIme;
      }
      
      if(!preg_match($regEmail, $email))
      {
        $greske[] = "Email is wrong!"; 
      }
      else
      {
        $podaci[] = $email;
      }
		
      //var_dump($podaci);
      //var_dump($greske);
      if(count($greske)==0){
        include ('php/konekcija.php');
        $upit = "INSERT INTO users VALUES('', :korIme, :lozinka, :ime, :prezime, :email, 'korisnici')";
        $izmena=$konekcija->prepare($upit);
        $izmena->bindParam(":korIme",$korIme);
        $izmena->bindParam(":lozinka",$lozinka);
        $izmena->bindParam(":ime",$ime);
        $izmena->bindParam(":prezime",$prezime);
        $izmena->bindParam(":email",$email);
        $uneto=$izmena->execute();
        if(!$upit)
        {
          echo "Error! ";
        }
        else
        {
          echo "<h3>Success!</h3>";
        }

	  }
    else{
      foreach($greske as $g)
      {
        echo "<ul class='list-inline'>
                <li><b>".$g."</b></li>
              </ul>";
      }
    }
  }

 ?>


        </div>
    </div>

    <footer>
        <span>&copy; 2018 Isidora Nikolic, Nova Pazova, Serbia <a href="http://www.ict.edu.rs/">ICT Visoka skola</a></span>
    </footer>
</body>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>
<script type="text/javascript" src="js/skript.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/notify.js"></script>
<script type="text/javascript" src="js/validacija.js"></script>

</html>
