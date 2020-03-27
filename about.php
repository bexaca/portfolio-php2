<?php
include "views/header.php";
error_reporting(0);


if ($user === NULL) {
    header("Location: ../login.php");
}
?>

<section class="paralax-outer3">
    <div id="paralax3">
        <h2>about</h2>
    </div>
</section>
<section id="about">
    <div id="timeline">
        <div id="text">
            <?php
            include "php/konekcija.php";
            $upit = "SELECT * FROM about";
            $rezultati = $konekcija->query($upit)->fetchAll();
            foreach ($rezultati as $r) :
                ?>
                <p><?= $r->about_born ?></p>
                <p><?= $r->about_school ?></p>
                <p><?= $r->about_sports ?></p>
                <img src=<?= $r->about_image ?> alt="timeline" />
                <p><?= $r->about_academy ?></p>
                <p><?= $r->about_hobbies ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
$upit = "SELECT voted FROM users WHERE username LIKE '$username'";
$voted = $konekcija->query($upit)->fetchAll();
$vote = $voted[0]->voted;
$upitAnketa = "SELECT active FROM anketa";
$active = $konekcija->query($upitAnketa)->fetchAll();
$poll_active = $active[0]->active;
if ($poll_active === '1' && $vote === '0') {
    ?>
    <div id="form">
        <h2>Did you like my website?</h2>
        <form>
            <p>Yes:
                <input type="radio" name="vote1" value="0" id="yes"></p>
            <p>No:
                <input type="radio" name="vote2" value="1" id="no"></p>
        </form>
    </div>
<?php } ?>
<?php
$upit = "SELECT * FROM anketa";
$anketa = $konekcija->query($upit)->fetchAll();

$yes = $anketa[0]->yes;
$no = $anketa[0]->no;
?>
<div style="margin: 15px 15px;">
    <h3 style="margin-bottom: 10px">Rezultat: </h3>
    <p id="yes"><?= $yes ?></p>
    <p id="no"><?= $no ?></p>
</div>

<div id="dog">
    <h1 style="margin-bottom: 20px; font-family: open_sansbold;">Here is a random dog from a dog API, because I love dogs</h1>
</div>

<?php
include "views/footer.php";
?>