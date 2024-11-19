<?php
// index.php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'École</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Bienvenue dans le système de gestion de l'école</h1>
        </header>

        <div class="options-container">
            <!-- Option 1 - Gestion des Étudiants -->
            <div class="option-card">
                <h2>Étudiants</h2>
                <div class="buttons">
                    <a href="views/Etudiant/liste.php" class="button afficher">Afficher</a>
                    <a href="views/Etudiant/form.php" class="button ajouter">Ajouter</a>
                </div>
            </div>

            <!-- Option 2 - Gestion des Enseignants -->
            <div class="option-card">
                <h2>Enseignants</h2>
                <div class="buttons">
                    <a href="views/Etudiant/listEgn.php" class="button afficher">Afficher</a>
                    <a href="views/Etudiant/formEgn.php" class="button ajouter">Ajouter</a>
                </div>
            </div>

            <!-- Option 3 - Gestion des Cours -->
            <div class="option-card">
                <h2>Cours</h2>
                <div class="buttons">
                    <a href="views/Etudiant/listeC.php" class="button afficher">Afficher</a>
                    <a href="views/Etudiant/formC.php" class="button ajouter">Ajouter</a>
                </div>
            </div>

            <!-- Option 4 - Gestion des salles -->
            <div class="option-card">
                <h2>Salles</h2>
                <div class="buttons">
                    <a href="views/Etudiant/listeSal.php" class="button afficher">Afficher</a>
                    <a href="views/Etudiant/formSal.php" class="button ajouter">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
