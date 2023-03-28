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
                <p>Promo: {foreach $user->promos as $item}<il>{$item}</il>{/foreach}</p>
                <hr>
            </ul>
        </ol>
    </ul>

    {foreach $display.result as $item}

        <ul class="profile_rang">
            <ol>
            <h2>id de l'élève: id</h2>
                <ul class="display_content">
                    <p>Prenom:</p>
                    <hr>
                    <p>Nom:</p>
                    <hr>
                    <p>Adresse mail:</p>
                    <hr>
                    <p>Campus</p>
                    <hr>
                    <p>Promo:</p>
                    <hr>
                    <p>Tuteur(s)</p>
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

    <ul class="profile_rang">
        <ol>
            <h2>id du tuteur: id</h2>
            <ul class="display_content">
                <p>Prenom:</p>
                <hr>
                <p>Nom:</p>
                <hr>
                <p>Adresse mail:</p>
                <hr>
                <p>Campus</p>
                <hr>
                <p>Promo:</p>
                <hr>
            </ul>
        </ol>
        <div class="button_add_container">
            <button class="button_page">supprimer</button>
            <button class="button_page">Modifier</button>
        </div>
    </ul>
    <ul class="profile_rang">
        <ol>
            <h2>id de l'élève: id</h2>
            <ul class="display_content">
                <p>Prenom:</p>
                <hr>
                <p>Nom:</p>
                <hr>
                <p>Adresse mail:</p>
                <hr>
                <p>Campus</p>
                <hr>
                <p>Promo:</p>
                <hr>
                <p>Tuteur(s)</p>
                <hr>
            </ul>
        </ol>
        <div class="button_add_container">
            <button class="button_page">supprimer</button>
            <button class="button_page">Modifier</button>
        </div>
    </ul>

{/if}
{include file="helpers/footer.tpl"}