<?php
if(!isset($_SESSION)){
    session_start();
}

require_once("modele/modele_inc.php");

// Vérifie si le post du bouton submit existe, contrôle si le mail et le mot de passe ne sont pas vides sinon ça affiche la page de connexion
if (isset($_POST['login-btn'])) {
    if (!empty($_POST['mail']) AND !empty($_POST['mdp'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = $_POST ['mdp'];

        $user = getConnexion($mail);
        
        if (count($user) === 1 AND password_verify($mdp, $user[0]['password'])) {
            $_SESSION['id'] = $user[0]['id'];
            $_SESSION['nom'] = $user[0]['nom'];
            $_SESSION['prenom'] = $user[0]['prenom'];
            $_SESSION['login'] = $user[0]['login'];
            $_SESSION['mail'] = $user[0]['email'];
            $_SESSION['role'] = $user[0]['role'];
            
            // Contrôle quel est le rôle pour afficher les pages d'accueil correspondantes (ici juste 1)
            if ($_SESSION['role'] === "admin") {
                require_once("controleur/control_crudAdmin.php");
            } elseif ($_SESSION['role'] === "redacteur") {
                require_once("controleur/control_crudAdmin.php");
            }
            
        } else {
            $loginError = "⚠ Email ou mot de passe incorrect !";
        }
    } else {
        $loginError = "⚠ Veuillez compléter tous les champs !";
    }
}

require_once("vue/vue_connexion.php");
?>