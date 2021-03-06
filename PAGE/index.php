<?php
session_start();

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>George Cinema</title>
    <link rel="stylesheet" href="../CSS/stylesheet.css">
    <link rel="stylesheet" href="../CSS/stylesheet_responsive.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class ="body_index">

<?php
include "menu.php";
?>

<section id="hero">
    <h1 class="nadpis">George Cinema</h1>
</section>
<section>
    <div class="galerie">
        <h2>Brzy uvedeme</h2>
    </div>
    <div id="obrazky_galerie" class="galerie">
        <article class="obrazek_galerie">
            <a href="../FILMY/duse.php"><img src="../IMG/film_duse.png" alt="Film duše"></a>
        </article>
        <article class="obrazek_galerie">
            <a href="../FILMY/freeguy.php"><img src="../IMG/film_freeguy.png" alt="Film Free Guy"></a>
        </article>
        <article class="obrazek_galerie">
            <a href="../FILMY/gump.php"><img src="../IMG/film_gump.png" alt="Film Gump"></a>
        </article>
        <article class="obrazek_galerie">
            <a href="../FILMY/smrt.php"><img src="../IMG/film_smrt.png" alt="Film Smrt na Nilu"></a>
        </article>
        <article class="obrazek_galerie">
            <a href="../FILMY/ww84.php"><img src="../IMG/film_ww84.png" alt="Film WW84"></a>
        </article>
        <article class="obrazek_galerie">
            <a href="../FILMY/morbius.php"><img src="../IMG/film_morbius.png" alt="Film Morbius"></a>
        </article>
        <article class="obrazek_galerie">
            <a href="../FILMY/blackwidow.php"><img src="../IMG/film_blackwidow.png" alt="Film Black Widow"></a>
        </article>
    </div>
</section>

<?php
include "footer.php";
?>

</body>
</html>