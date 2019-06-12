<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <title>Twitter</title>

    <link rel="stylesheet"  href="./view/css/styleTL.css">

</head>



<body>



<!--menu-->



<?php include("menu.php"); ?>



<!-- Rapide apperçu du profil -->

<section>

    <h4><?php echo $_SESSION['pseudo']; ?></h4>

    <h5>@<?php echo $_SESSION['user_name']; ?></h5>

    <h6>Tweets</h6><h6>Abonnements</h6><h6>Abonnés</h6>

    <h7><?php //echo $_SESSION['nombre_tweet']; ?></h7><h7>Nombre</h7><h7>Nombre</h7>

</section>



<!-- tlTweet-->



<li>

    <h8>nom utilisateur</h8><h8>-</h8><h8>date</h8>

    <h9>blablabla</h9>

    <h10>Retweeter</h10><h11>nombre </h11><h12>J'aime </h12><h13>nombre</h13>

</li>



<!-- Le pied de page -->



<?php include("pied_de_page.php"); ?>



</body>

</html>