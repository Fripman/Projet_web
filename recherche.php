<!DOCTYPE html>
<html lang="fr">



<head>
    <link rel="stylesheet" href="recherche.css">
</head>

<body>
    <?php
    include("header.php");
    ?>
    <main>
        <section class="search-bar">
            <input type="text" id="searchInput" placeholder="Rechercher...">
            <button id="searchBtn"><img src="/assets/recherche.png" alt="recherche" class="recherche"></button>
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
    <?php
    include("footer.php");
    ?>
</body>



</html>
