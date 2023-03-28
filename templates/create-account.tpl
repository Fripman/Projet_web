{include file="helpers/header.tpl"}
<div class="login">
<div class="login-box">
  <h2>Créer un compte</h2>
  <form>
    <div class="user-box">
      <input type="text" name="surname" required>
      <label>Prénom</label>
    </div>
    <div class="user-box">
      <input type="text" name="name"  required>
      <label>Nom</label>
    </div>
    <div class="user-box">
      <input type="text" name="username" required>
      <label>Nom d'utilisateur</label>
    </div>
    <div class="user-box">
      <input type="text" name="name" required>
      <label>Mot de passe</label>
    </div>
    <div class="user-box">
      <input type="text" name="Password" required>
      <label>Confirmer mot de passe</label>
    </div>
    <div class="rad">
      <label>
        <input type="radio" name="permissions" value="tuteur">
        Tuteur
      </label>
      <label>
        <input type="radio" name="permissions" value="etudiant">
        Etudiant
      </label>
    </div>

    <div class="sel">
    <p>Choisissez un campus:</p>
    <select id="campus" name="center">
      <option value="campus-1">Caen</option>
      <option value="campus-2">Rouen</option>
    </select>
    </div>

    <div class="sel">
    <p>Choisissez un tuteur:</p>
    <select id="tuteur" name="tuteur">
      <option value="tuteur-1">M</option>
      <option value="tuteur-2">R</option>
    </select>
    </div>

    <button type="submit">
                créer
            </button>
  </form>
</div>
</div>
{include file="helpers/footer.tpl"}