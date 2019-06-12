<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Twitter</title>
    <link rel="stylesheet"  href="view/css/styleRecherche.css">
</head>

<body>

<!--menu-->

<?php include("menu.php"); ?>

<h4><?php echo htmlspecialchars($_POST['recherche']);?></h4>

<!-- liste des personnes correspondantes aux caractères de la recherche-->

<li>
    <h5>Suivre</h5>

    <h6>pseudo</h6>

    <h7>nom utilisateur</h7>

    <h8>bio</h8>

</li>
<!-- Le pied de page -->

<?php include("pied_de_page.php"); ?>

</body>
</html>
