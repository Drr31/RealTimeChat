<?php

    $bdd = new PDO('mysql:host=localhost;dbname=mmi19x04;charset=utf8', 'mmi19x04', 'mdp');

    $requete="SELECT * FROM chat ORDER BY id LIMIT 10";

$exe= $bdd ->query($requete);


while ($un = $exe ->fetch() ) {
    echo " <div class='block'><p class='pseudo'>".$un['pseudo']."</p> <fieldset><p class='message'>".$un['message']."</p></fieldset></div>";
}
