<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Espace Secrétaire</title>
    <link rel="stylesheet" href="designe.css">
</head>
<body>
     <header>
                <h1>Espace Secrétaire</h1>

                <img src="img2.jpeg" id="logo">
                <img src="img2.jpeg" id="logo2">
    </header>
    <nav> <!-- Afficher le planning de l'inspecteur -->
            <ul>
                <li><a href="accueil.html">Accueil</a></li>
                <li><a href="planning_inspecteur.php">Voir le planning de l'inspecteur</a></li>
            </ul>

    </nav>

    <?php
    include("connexion_projet.php");
                $con=connect();
                if (!$con)
                {
                echo "Probleme connexion a la base";
                exit;
                }
    ?>

<!-- Formulaire pour choisir une exploitation agricole -->
    <form action="choisir_exploitation.php" method="POST">
        Plante :
        <input type="text" name="plante" required> <br/> <br/>
        Maladie :
        <input type="text" name="maladie" required> <br/> <br/>
        Exploitation agricole :
        <select name="exploitation">
            <!-- Ajouter les options dynamiquement depuis la base de données -->
            <?php

                $sql_exp = "select nome from exploitation;";
                $resultat_exp = pg_query($sql_exp);

                if (!$resultat_exp)
                {
                    echo "Probleme lors du lancement de la requete";
                    exit;
                }

                $ligne_exp = pg_fetch_array($resultat_exp);

                while ($ligne_exp)
                {
                    echo "<option value = '".$ligne_exp['nome']."'>".$ligne_exp['nome']."</option>";
                    $ligne_exp = pg_fetch_array($resultat_exp);
                }

            ?>
            <!-- ... -->
        </select> <br/> <br/>

        <!-- Champs pour sélectionner les gestionnaires, secrétaires et inspecteurs -->
        Gestionnaires :
        <select name="gestionnaires[]">
            <?php

                $sql_ges = "select nomg, prenomg from gestionnaire;";
                $resultat_ges = pg_query($sql_ges);

                if (!$resultat_ges)
                {
                    echo "Probleme lors du lancement de la requete";
                    exit;
                }

                $ligne_ges = pg_fetch_array($resultat_ges);

                while ($ligne_ges)
                {
                    echo "<option value = '".$ligne_ges['nomg'].' '.$ligne_ges['prenomg']."'>".$ligne_ges['nomg'].' '.$ligne_ges['prenomg']."</option>";
                    $ligne_ges = pg_fetch_array($resultat_ges);
                }

            ?>
            <!-- ... Ajouter les options dynamiquement depuis la base de données -->
        </select> <br/> <br/>

        Secrétaires :
        <select name="secretaires[]">

            <?php

                $sql_sec = "select noms, prenoms from secretaire;";
                $resultat_sec = pg_query($sql_sec);

                if (!$resultat_sec)
                {
                    echo "Probleme lors du lancement de la requete";
                    exit;
                }

                $ligne_sec = pg_fetch_array($resultat_sec);

                while ($ligne_sec)
                {
                    echo "<option value = '".$ligne_sec['noms'].' '.$ligne_sec['prenoms']."'>".$ligne_sec['noms'].' '.$ligne_sec['prenoms']."</option>";
                    $ligne_sec = pg_fetch_array($resultat_sec);
                }

            ?>
            <!-- ... Ajouter les options dynamiquement depuis la base de données -->
        </select> <br/> <br/>

        Inspecteurs :
        <select id ='s' name="inspecteurs[]">

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

        Liste des agents :
        <input type="text" name="agents" required> <br/> <br/>
        Nombre d'inspections :
        <input type="number" name="nb_inspections" required> <br/> <br/>
        Nombre de prélèvements :
        <input type="number" name="nb_prelevements" required> <br/> <br/>
        <input type="submit" value="Choisir et planifier">
    </form>

</body>
</html>
