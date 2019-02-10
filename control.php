<?php

session_start();

include "php/konekcija.php";

$user = $_SESSION['korisnik'];

$user = $_SESSION['korisnik']->uloga;

$username = $_SESSION['korisnik']->username;

$page = "";

if(isset($_GET['page'])){
	$page = $_GET['page'];
}
if ($page === 'login') {
	session_destroy();
	header("Location: ../login.php");
}

switch($page){
	case "index":
		include "index.php";
        break;
    case "skills":
		include "skills.php";
		break;
	case "work":
		include "work.php";
		break;
	case "about":
		include "about.php";
        break;
    case "contact":
		include "contact.php";
        break;
    case "panel":
		include "panel.php";
		break;
	default:
		include "login.php";
		break;
}
