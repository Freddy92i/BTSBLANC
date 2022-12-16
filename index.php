<?php

require_once('data.php');

session_start();

$resultat = isset($_SESSION['resultat']) ? $_SESSION['resultat'] : NULL;
$erreur = isset($_SESSION['erreur']) ? $_SESSION['erreur'] : NULL;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Calcul d'itinéraires</title>
</head>
<body>
    <form method="POST" action="itineraire.php">
        <select name="depart">
            <option value="">Midgard</option>
            <option value="">Asgard</option>
            <option value="">Vanaheim</option>
            <option value="">Jotunheim</option>
            <option value="">Niflheim</option>
            <option value="">Muspelheim</option>
            <option value="">Alfheim</option>
            <option value="">Nidavellir</option>
            <option value="">Hel</option>
            <option value="">Odin's Pass</option>
            <option value="">Ravenclaws</option>
            <option value="">Shadow Steps</option>
            <option value="">Iron Castle</option>
            <!-- Ajoutez les autres <option> ici ! -->
        </select>
        <select name="arrivee" placeholder="-- Ville d'arrivée --">
            <option value="">Midgard</option>
            <option value="">Asgard</option>
            <option value="">Vanaheim</option>
            <option value="">Jotunheim</option>
            <option value="">Niflheim</option>
            <option value="">Muspelheim</option>
            <option value="">Alfheim</option>
            <option value="">Nidavellir</option>
            <option value="">Hel</option>
            <option value="">Odin's Pass</option>
            <option value="">Ravenclaws</option>
            <option value="">Shadow Steps</option>
            <option value="">Iron Castle</option>
            <!-- Ajoutez les autres <option> ici ! -->
        </select>
        <button type="submit">Go !</button>
    </form>

    
    <!-- Réalisez l'affichage de l'itinéraire calculé ici -->
    <?php

    ?>
</body>
