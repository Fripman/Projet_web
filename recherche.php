<!DOCTYPE html>
<html lang="fr">

<?php
include("header.php");
?>

<head>
    <link rel="stylesheet" href="recherche.css">
</head>
<body>
    <main>
        <section class="search-bar_">
            <input type="text" id="searchInput_" placeholder="Rechercher...">
            <button id="searchBtn_"><img src="/assets/recherche.png" alt="recherche" class="recherche_"></button>
        </section>
        <section class="filters">
            <div>
                <label for="category">Catégorie :</label>
                <select id="category">
                    <option value="">Toutes</option>
                    <option value="offres">Offres de stage</option>
                    <option value="entreprise">Entreprises</option>
                </select>
            </div>
        </section>
        <section class="results">
            <h2>Résultats</h2>
            <div id="resultsContainer"></div>
        </section>
    </main>
</body>

<?php
include("footer.php");
?>

</html>