<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Espace Inspectrice Sanitaire</title>
    <link rel="stylesheet" href="designe.css">

</head>
<body>
    <header>
                <h1>Espace Inspectrice Sanitaire</h1>

                <img src="img2.jpeg" id="logo">
                <img src="img2.jpeg" id="logo2">
    </header>
    <nav>
            <ul><!-- Afficher la liste des inspections de la semain-->
                <li><a href="accueil.html">Accueil</a></li>
                <li><a href="liste_inspections_semaine.php">Voir la liste des inspections de la semaine</a></li>
            </ul>

    </nav>

    <!-- Formulaire pour donner la liste des plantes inspectées et prélevées -->
    <form action="donner_liste_plantes.php" method="post">
        <label for="inspection">Inspection :</label>
        <select name="inspection">
            <!-- Ajouter les options dynamiquement depuis la base de données -->
            <option value="inspection1">Inspection 1</option>
            <option value="inspection2">Inspection 2</option>
            <!-- ... -->
        </select>
        <label for="plantes_inspectees">Plantes inspectées :</label>
        <input type="text" name="plantes_inspectees" required>
        <label for="plantes_prelevees">Plantes prélevées :</label>
        <input type="text" name="plantes_prelevees" required>
        <input type="submit" value="Enregistrer">
    </form>

    <!-- Ajouter d'autres fonctionnalités spécifiques pour l'inspectrice sanitaire ici -->

</body>
</html>
