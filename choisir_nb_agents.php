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

         <form action = "choisir_agents.php" method = POST>

        La date de la visite :
        <input type = "date" name = "date"> <br/> <br/>
        Le nombre d'inspecteur pour la visite :
        <input type = "number" min = "2"> <br/> <br/>
        <input type = "submit" value = "Valider">
    </body>
</html>
