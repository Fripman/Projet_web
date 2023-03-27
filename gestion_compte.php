<!DOCTYPE html>
<html lang="fr">



<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("header.php");
    ?>
    <main>
        <h2>Listes des Tuteurs et leurs etudiants</h2>
        <div class="creation">
            <h2>Mes etudiants</h2>
            <button>Nouvel étudiant</button>
        </div>
        <ul class="display_content">
            <li>
                <h2>Tuteur</h2>
                <div class="button-container">
                    <button>Supprimer</button>
                    <button>Modifier</button>
                </div>
            </li>
            <ul>
                <li>
                    <h2>Etudiant</h2>
                    <div class="button-container">
                        <button>Supprimer</button>
                        <button>Modifier</button>
                </li>
            </ul>
            <li>
                <h2>Tuteur</h2>
                <div class="button-container">
                    <button>Supprimer</button>
                    <button>Modifier</button>
                </div>
            </li>
        </ul>
    </main>
    <?php
    include("footer.php");
    ?>
</body>



</html>