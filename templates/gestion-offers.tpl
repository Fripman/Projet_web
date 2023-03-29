{include file="helpers/header.tpl"}
<h1 class="page-title">Liste des offres</h1>
<div class="creation_bdd">
<button>Nouvel étudiant</button>
<button>Nouveau tuteur</button>
</div>

{if $user->permissions eq "admin"}

<ul class="profile_rang">
  <ol>
    <h2>Intitulé du stage 1</h2>
    <ul class="display_content">
      <hr>
      <p>entreprise:</p>
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
      <p>Compétances attendues:</p>
      <hr>
    </ul>
    <div class="button_add_container">
      <button class="button_page">supprimer</button>
      <button class="button_page">Modifier</button>
    </div>
  </ol>
</ul>

{else}
  

{include file="helpers/footer.tpl"}