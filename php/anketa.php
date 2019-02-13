<?php 
    include "konekcija.php";
    $username = $_POST['username'];
    if ($_POST['answer'] == 'yes') {
        $konekcija->prepare("UPDATE anketa SET yes=yes+1")->execute();
    } else {
        $konekcija->prepare("UPDATE anketa SET no=no+1")->execute();
    }
    $konekcija->prepare("UPDATE users SET voted=1 WHERE username LIKE '$username'")->execute();
?>