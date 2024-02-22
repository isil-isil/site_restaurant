<?php
if(!isset($_SESSION)){
    session_start();
}

ob_start();
?>

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="align-items-center">
    <form name="login" action="accueil" method="POST">
        <div class="mb-3">
            <img src="assetsAdmin/iconealbearson.png" alt="logo entreprise" />
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Adresse Email</label>
            <input type="email" class="form-control" id="mail" placeholder="Email" name="mail">
        </div>   
        <div class="mb-3">
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="mdp" placeholder="mot de passe" name="mdp" autocomplete="off">
        </div>
        <div class="form-group mt-3">
            <button type="submit" name="login-btn" value="Connexion" class="btn btn-primary float-end w-100">Connexion</button>
        </div>
    </form>
            <?php if(!empty($loginError)){?>
                <div class="text-danger"><?= $loginError;?></div>
            <?php }?>
            </div>
</div>
            

<?php
$contenu = ob_get_clean();

require_once('vue/gabarit.php');
?>