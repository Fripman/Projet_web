{include file="helpers/header.tpl"}

{if $user->permissions eq "pilot"}
    <h2>Mes etudiants</h2>
{else}
    <h2>Listes des Tuteurs et leurs etudiants</h2>
{/if}


<div class="creation_bdd">
    {if $user->permissions eq "pilot"}
        <button>Nouvel étudiant</button>
    {else}
        <button>Nouvel étudiant</button>
        <button>Nouveau tuteur</button>
    {/if}
</div>

{if $user->permissions eq "pilot"}

    <ul class="profile_rang">
        <ol>
            <h2>id du tuteur: {$user->id}</h2>
            <ul class="display_content">
                <p>Prenom: {$user->name}</p>
                <hr>
                <p>Nom: {$user->surname}</p>
                <hr>
                <p>Adresse mail: {$user->username}</p>
                <hr>
                <p>Campus: {$user->center}</p>
                <hr>
                <p>Promo: {foreach $user->promos as $item}<il>{$item.promoId|escape} : Spécialité {$item.type|escape} en
                        année {$item.year|escape}</il>{/foreach}</p>
                <hr>
            </ul>
        </ol>
    </ul>
    {foreach  $students as $sudent}
        <ul class="profile_rang">
            <ol>
                <h2>id de l'élève: {$sudent->id}</h2>
        <ul class="display_content">
            <p>Prenom: {$sudent->name}</p>
            <hr>
            <p>Nom: {$sudent->surname}</p>
            <hr>
            <p>Adresse mail: {$sudent->username}</p>
            <hr>
            <p>Campus: {$sudent->center}</p>
            <hr>
            <p>Promo: {$sudent->promos.0.promoId} : Spécialité {$sudent->promos.0.type|escape} en année
                {$sudent->promos.0.year|escape}</p>
            <hr>
            <p>Tuteur(s): {$sudent->name} {$sudent->surname}</p>
            <hr>
        </ul>
    </ol>
    <div class="button_add_container">
        <button class="button_page">supprimer</button>
        <button class="button_page">Modifier</button>
    </div>
</ul>
{/foreach}


{else}

{foreach $pilotPromos as $pilot}


<ul class="profile_rang">
    <ol>
        <h2>id du tuteur: {$pilot->id}</h2>
        <ul class="display_content">
            <p>Prenom: {$pilot->name}</p>
            <hr>
            <p>Nom: {$pilot->surname}</p>
            <hr>
            <p>Adresse mail: {$pilot->username}</p>
            <hr>
            <p>Campus: {$pilot->center}</p>
            <hr>
            <p>Promo: {$pilot->promos}</p>
            <hr>
        </ul>
    </ol>
    <div class="button_add_container">
        <button class="button_page">supprimer</button>
        <button class="button_page">Modifier</button>
    </div>
</ul>
{foreach  $students as $sudent}
<ul class="profile_rang">
    <ol>
        <h2>id de l'élève: {$sudent->id}</h2>
                <ul class="display_content">
                    <p>Prenom: {$sudent->name}</p>
                    <hr>
                    <p>Nom: {$sudent->surname}</p>
                    <hr>
                    <p>Adresse mail: {$sudent->username}</p>
                    <hr>
                    <p>Campus: {$sudent->center}</p>
                    <hr>
                    <p>Promo: {$sudent->promos.0.promoId} : Spécialité {$sudent->promos.0.type|escape} en année
                        {$sudent->promos.0.year|escape}</p>
                    <hr>
                    <p>Tuteur(s): {$sudent->name} {$sudent->surname}</p>
                    <hr>
                </ul>
            </ol>
            <div class="button_add_container">
                <button class="button_page">supprimer</button>
                <button class="button_page">Modifier</button>
            </div>
        </ul>
    {/foreach}
{/foreach}

{/if}
{include file="helpers/footer.tpl"}