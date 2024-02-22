<?php
$contenu = "";
$contenu .=
    '<div class="dashboard-container">
    <div class="container">
    <div class="container  min-vh-100 d-flex justify-content-center align-items-center">
    <form method="POST" action="index.php?action=saveAjt">
        <div class="mb-3">
        <br><br><h2>Ajouter un profil :</h2>
        </div>
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" placeholder="Prénom" required="required" autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Login</label>
            <input type="text" name="login" class="form-control" placeholder="Login" required="required" autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="pet-select">Selection rôle :</label>
                <select name="role" id="type-select" required="required" class="form-select">
                    <option value="admin">Administrateur</option>
                    <option value="redacteur">Rédacteur</option>
                </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Re-tapez le mot de passe</label>
            <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
        </div>
        <div class="mb-3">';

if (isset($_GET['reg_err'])) {
    $err = htmlspecialchars($_GET['reg_err']);

    switch ($err) {
        case 'success':
            $contenu .= '<div class="alert alert-success mb-3">
                                <strong>Succès</strong> Profil enregistré !
                                </div>';
            break;
        case 'password':
            $contenu .= '<div class="alert alert-danger mb-3">
                                ⚠ Mot de passe différent
                                </div>';
            break;
        case 'email_error':
            $contenu .= '<div class="alert alert-danger mb-3">
                                    ⚠ Veuillez entrer un email valide !
                                    </div>';
            break;
        case 'login_length':
            $contenu .= '<div class="alert alert-danger mb-3">
                                    ⚠ Le pseudo ne doit pas dépasser les 25 caractères !
                                    </div>';
            break;
        case 'already':
            $contenu .= '<div class="alert alert-danger mb-3">
                                ⚠ Profil deja existant
                                </div>';
            break;
    }
}
$contenu .= '
      <button type="submit" class="btn btn-primary mybut" name="submit">Valider</button>
    </form>
    </div></div>
  </div>';

require("vue/gabarit.php") ?>