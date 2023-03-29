{include file="helpers/header.tpl"}

{if $user->permissions eq "admin"}

    
    {foreach $candidature as $cand}

        <ul class="profile_rang">
            <h2>Les candidatures des étudiants</h2>
            <ol>
                <ul class="display_content">
                    <p>Nom de stage: {$cand->name}</p>
                    <hr>
                    <p> Nom l'entreprise: {$cand->cname}</p>
            <hr>
            <p>Lieux: </p>
        </ul>
        <div class="button_add_container">
            <button class="button_page">supprimer la candidature</button>
            <button class="button_page">Noter l'entreprise</button>
                </div>
            </ol>
        </ul>

    {/foreach}

{else}


    {foreach $candidature as $cand}

        <ul class="profile_rang">
            <h2>Les candidatures de vos étudiants</h2>
            <ol>
                <ul class="display_content">
                    <p>Nom de stage: {$cand->name}</p>
                    <hr>
                    <p> Nom l'entreprise: {$cand->cname}</p>
            <hr>
            <p>Lieux: {$cand->localisations}</p>
        </ul>
        <div class="button_add_container">
            <button class="button_page">supprimer la candidature</button>
            <button class="button_page">Noter l'entreprise</button>
                </div>
            </ol>
        </ul>

    {/foreach}

    {include file="helpers/footer.tpl"}