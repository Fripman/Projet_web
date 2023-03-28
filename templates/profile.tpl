{include file="helpers/header.tpl"}
<article>
    <div>
      <h4>{$user->name} {$user->surname}</h4>
    </div>
</article>
<hr>
<section>
<div>
    <h6>Nom</h6>
    <p>{$user->name} {$user->surname}</p>
</div>
<hr>

<div>
    <h6>Nom d'utilisateur</h6>
    <p>{$user->username}</p>
</div>
<hr>

<div>
    <h6>Promotion CESI</h6>
    {if $user->permissions==="student"}<p>{$user->promos.0.promoId} : Spécialité {$user->promos.0.type|escape} en année {$user->promos.0.year|escape}</p>
    {elseif count($user->promos)>0}<p>{foreach $user->promos as $item}{$user->promos.0.promoId} : Spécialité {$user->promos.0.type|escape} en année {$user->promos.0.year|escape} | {/foreach}</p>{/if}
</div>

<div>
    <h6>Type de compte</h6>
    <p>{$user->permissions}</p>
</div>
<hr>
<hr>
</section>
{include file="helpers/footer.tpl"}