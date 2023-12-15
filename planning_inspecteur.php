<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Planning Inspecteur </title>
    <link rel="stylesheet" href="designe.css">
</head>
<body>
     <header>
                <h1> Planning Inspecteur </h1>

                <img src="img2.jpeg" id="logo">
                <img src="img2.jpeg" id="logo2">
    </header>
    <?php
        include("connexion_projet.php");
                $con=connect();
                if (!$con)
                {
                echo "Probleme connexion a la base";
                exit;
                }
    ?>
    <!-- Afficher les inspecteurs sanitaires -->
    <form action="espace_perso_sec.php" method=POST>
    Choisir l'inspecteur sanitaire :
    <select id='s' name="inspecteurs[]">

            <?php

                $sql_ins = "select nomi, prenomi from inspecteur;";
                $resultat_ins = pg_query($sql_ins);

                if (!$resultat_ins)
                {
                    echo "Probleme lors du lancement de la requete";
                    exit;
                }

                $ligne_ins = pg_fetch_array($resultat_ins);

                while ($ligne_ins)
                {
                    echo "<option value = '".$ligne_ins['nomi'].' '.$ligne_ins['prenomi']."'>".$ligne_ins['nomi'].' '.$ligne_ins['prenomi']."</option>";
                    $ligne_ins = pg_fetch_array($resultat_ins);
                }

            ?>
            <!-- ... Ajouter les options dynamiquement depuis la base de données -->
        </select> <br/> <br/>

        <input type="submit" value="Valider">
</body>
</html>
