{include file="helpers/header.tpl"}
<form class="search" action="">
            <div class="search-container">
                <input type="text" class="searchInput" placeholder="Rechercher...">
                <button class="searchBtn"><img src="assets/recherche.png" alt="recherche" class="recherche"></button>
            </div>
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
        </form>

        <h2 id="Offres">Resultats</h1>
        <ul class="display_content">
            <li>
                <h2>Intitulé du stage 1</h2>
                <div class="button-container">
                    <button>Etat</button>
                    <button>Supprimer</button>
                    <button>Postuler</button>
                </div>
            </li>
            <li>
                <h2>Intitulé du stage 2</h2>
                <div class="button-container">
                    <button>Etat</button>
                    <button>Supprimer</button>
                    <button>Postuler</button>
                </div>
            </li>
            <li>
                <h2>Intitulé du stage 3</h2>
                <div class="button-container">
                    <button>Etat</button>
                    <button>Supprimer</button>
                    <button>Postuler</button>
                </div>
            </li>
        </ul>
{include file="helpers/footer.tpl"}