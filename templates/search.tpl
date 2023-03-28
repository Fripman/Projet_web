{include file="helpers/header.tpl"}
<form class="search" action="/" method="get">
    <div class="search-container">
        <input name="search" type="text" class="searchInput" placeholder="Rechercher...">
        <button type="submit" class="searchBtn"><img src="../public/img/recherche.png" alt="recherche" class="recherche"></button>
    </div>
    <section class="filters">
        <div>
            <label for="category">Catégorie :</label>
            <select name="type" id="category">
            {if $display.type eq "offer"}
                <option value="offer">Offres de stage</option>
                <option value="company">Entreprises</option>
            {else}
                <option value="company">Entreprises</option>
                <option value="offer">Offres de stage</option>
            {/if}
            </select>
        </div>
    </section>
</form>

<h2 class="page-title" id="Offres">Résultats :</h1>

<ul class="profile_rang">
{if $display.type eq "offer"}
    {foreach $display.result as $item}
    <ol>
        <h2>{$item->name|escape}</h2>
        <ul class="display_content">
            <p>Durée : {$item->duration|escape} semaines</p>
            <hr>
            <p>Date de création de l'offre : {$item->creationDate|escape}</p>
            <hr>
            <p>Nombre de places restantes : {$item->currentPlaces|escape}</p>
            <hr>
            <p>Base de rémunération : {$item->remunerationBasis|escape} €</p>
            <hr>
            <p>Lieux possibles pour réaliser le stage : {foreach $item->localisations as $localisation}{$localisation.street|escape} {$localisation.city|escape} {$localisation.ZIPCode|escape} {$localisation.country|escape}, {/foreach}</p>
            <hr>
            <p>Promo(s) concernée(s) : {foreach $item->concernedPromos as $concernedPromo} Spécialité {$concernedPromo.type|escape} en année {$concernedPromo.year|escape}, {/foreach}</p>
            <hr>
            <p>Compétences attendues : {foreach $item->expectedSkills as $expectedSkill} {$expectedSkill.name|escape}, {/foreach}</p>
            <hr>
        </ul>
        <div class="button_add_container">
            <button class="button_page">Voir l'entreprise</button></p>
            <button class="button_page">Ajouter à la liste de souhait</button>
            <button class="button_page">Postuler</button>
        </div>
    </ol>
    {/foreach}
{else}
    {foreach $display.result as $item}
    
    {/foreach}  
{/if}
</ul>


<ul class="profile_rang">
    <ol>
        <h2>Intitulé du stage 1</h2>
        <ul class="display_content">
            <p>Durée:</p>
            <hr>
            <p>Date de création:</p>
            <hr>
            <p>Nombre de places restantes:</p>
            <hr>
            <p>Base de rémunération:</p>
            <hr>
            <p>Localisation:</p>
            <hr>
            <p>Promo(s) concernée(s):</p>
            <hr>
            <p>entreprise:</p>
            <hr>
            <p>Compétances attendues:</p>
            <hr>
        </ul>
        <div class="button_add_container">
            <button class="button_page">Etat</button>
            <button class="button_page">Ajouter</button>
            <button class="button_page">postuler</button>
        </div>
    </ol>
</ul>
<ul class="profile_rang">
    <ol>
        <h2>Nom de l'entreprise:</h2>
        <ul class="display_content">
            <p>Secteur d'activité: </p>
            <hr>
            <p> Visibilité par les etudiants:</p>
            <hr>
            <p>Emails: </p>
            <hr>
            <p>Lieux: </p>
            <hr>
            <p>Évaluation du pilote: </p>
            <hr>
            <p>Nombre d'étudiants CESI deja accepté en stage:</p>
        </ul>
        <div class="button_add_container">
            <button class="button_page">Etat</button>
            <button class="button_page">Ajouter</button>
            <button class="button_page">postuler</button>
        </div>
    </ol>
</ul>
{include file="helpers/footer.tpl"}