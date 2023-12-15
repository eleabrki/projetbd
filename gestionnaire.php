<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Espace Gestionnaire</title>
    <link rel="stylesheet" href="designe.css">
</head>
<body>
     <header>
                <h1>Espace Gestionnaire</h1>

                <img src="img2.jpeg" id="logo">
                <img src="img2.jpeg" id="logo2">
    </header>
    <nav>
            <ul>
                <li><a href="accueil.html">Accueil</a></li>
                <li><a href="secretaire.php">Secrétaire</a></li>
                <li><a href="inspecteur.php">Inspecteur Sanitaire</a></li>
            </ul>

    </nav>

    <!-- Formulaire pour ajouter des inspections et des prélèvements -->
    <form action="ajouter_inspection.php" method="post">
        <label for="maladie">Maladie :</label>
        <input type="text" name="maladie" required>
        <label for="plante">Plante :</label>
        <input type="text" name="plante" required>
        <label for="nb_inspections">Nombre d'inspections :</label>
        <input type="number" name="nb_inspections" required>
        <label for="nb_prelevements">Nombre de prélèvements :</label>
        <input type="number" name="nb_prelevements" required>
        <input type="submit" value="Ajouter">
    </form>

    <!-- Ajouter d'autres fonctionnalités spécifiques pour le gestionnaire ici -->

</body>
</html>
