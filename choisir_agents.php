<!DOCTYPE html>

<html>
    <head>
        <meta charset = "UTF-8">
        <title> Espace Secrétaire </title>
        <link rel = "stylesheet" href = "designe.css">
    </head>

    <body>
        <header>
            <h1> Espace Secrétaire </h1>
            <img src = "img2.jpeg" id = "logo">
            <img src = "img2.jpeg" id = "logo2">
        </header>

        <!-- Afficher le planning de l'inspecteur -->
        <nav>
            <ul>
                <li> <a href = "accueil.html"> Accueil </a> </li>
                <li> <a href = "planning_inspecteur.php"> Voir le planning de l'inspecteur </a> </li>
            </ul>
        </nav>
        <!-- Afficher les agents : les inspecteurs -->

        Les inspecteurs :
        <select name = "inspecteur[]">
            <?php

            include("connexion_projet.php");
                $con = connect() ;
                if (!$con)
                {
                echo "Problème connexion à la base" ;
                exit ;
                }

            extract($_POST) ;

                $sql_ins = "SELECT nomi, prenomi
                            FROM inspecteur
                            NATURAL JOIN visite AS v
                            WHERE v.datev != '" . $date . "'" ;
                $resultat_ins = pg_query($sql_ins);

                if (!$resultat_ins)
                {
                    echo "Problème lors du lancement de la requête";
                    exit;
                }

                $ligne_ins = pg_fetch_array($resultat_ins);

                while ($ligne_ins)
                {
                    echo "<option value = '".$ligne_ins['nomi'].' '.$ligne_ins['prenomi']."'>".$ligne_ins['nomi'].' '.$ligne_ins['prenomi']."</option>";
                    $ligne_ins = pg_fetch_array($resultat_ins);
                }

            ?>
         </select> <br/> <br/>

        Le nombre de plante à inspecter pour la visite :
        <input type = "number" name = "inspecter"> <br/> <br/>

        Le nombre de plante à prélever pour la visite :
        <input type = "number" name = "prélever"> <br/> <br/>

        <input type = "submit" value = "Valider">
    </body>
</html>
