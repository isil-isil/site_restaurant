<?php
require_once("modele/modele_crudAdmin.php");
require_once("modele/modele_inc.php");

$action = 'vue_accueil';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
if (isset($_POST['action'])) {
    $action = $_POST['action'];
}

switch ($action) {
    
    case 'vue_accueil':
        require("vue/vue_accueil.php");
        break;

////***/ CRUD PAGES /***///

    case 'listPages':
        // 1 - Récupérer la liste des pages
        $tPages = getListPages();
        
        // 2 - Afficher la liste des pages
        require("vue/pages/vue_listPages.php");
        break;

    case 'listPages2':
        // 1 - Récupérer la liste des pages
        $tPages = getListPages();
        
        // 2 - Afficher la liste des pages
        require("vue/pages/vue_listPages2.php");
        break;

    case 'ajoutPage':
        // 1 - Afficher un formulaire
        $titre = "Ajouter une page";
        require("vue/pages/vue_ajoutPage.php");
        break;

    case 'MAJajoutPage':
        // 1 - Récupérer les données du formulaire
        $titrePage = $_POST['titre'];
        $descriptionPage = $_POST['description'];
        $contenuPage = $_POST['summernote'];

        // 2 - Ajouter l'ID de l'utilisateur en cours
        $idUserActuel = $_SESSION['id'];

        // 3 - Enregistrer la nouvelle page dans la BDD
        $res = ajoutPage($titrePage, $descriptionPage, $contenuPage, $idUserActuel);

        // 4 - Afficher le résultat à l'utilisateur
        $sujet = "page";
        $verbe = "ajoutée";    
        $tPages = getListPages();  
        require("vue/pages/vue_listPages.php");
        break;

    case 'updPage':
        // 1 - Récupérer l'identifiant de la page
        $idPage = $_POST['id_page'];
        // 2 - Récupérer les infos de la page
        $page = getPageById($idPage);
        // 3 - Afficher le formulaire prérempli
        require("vue/pages/vue_modifPage.php");    
        break;

    case 'MAJupdPage':
        // 1 - Récupérer l'identifiant de la page
        $idPage = $_POST['id_page'];
        // 2 - Modifier la page dans la BDD
        $page = ["id_page" => $idPage, "titre" => $_POST['titre'], "description" => $_POST['description'], "contenu" => $_POST['contenu']];
        $res = updPage($page);
        // 3 - Afficher le résultat à l'utilisateur
        $sujet = "page";
        $verbe = "modifiée";
        $tPages = getListPages();  
        require("vue/pages/vue_listPages.php");  
        break;

    case 'delPage':
        // 1 - Récupérer l'ID de la page
        $idPage = $_POST['id_page'];
        
        // 2 - Supprimer la page dans la BDD
        $res = delPage($idPage);

        // 3 - Afficher le résultat à l'utilisateur
        $sujet = "page";
        $verbe = "supprimée";
        $tPages = getListPages();  
        require("vue/pages/vue_listPages.php");
        break;



////***/ CRUD EQUIPIERS /***///

    case 'listEquipe':
        // 1 - Récupérer la liste des équipiers
        $tEquipe = getListEquipe();
        
        // 2 - afficher la liste des équipes
        require("vue/equipe/vue_listEquipe.php");
        break;

    case 'ajoutEquipe1':
        require("vue/equipe/vue_ajoutEquipe.php");
        break;
    case 'ajoutEquipe2':
        //1 - Mes variables
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $fonction = $_POST['fonction'];

        // 2 - Ajouter l'image au dossier correspondant et renommer la photo
        $photo = $_FILES['img']['name'];
        $uploadDir = "uploads/imagesEquipe/";
        $photoRenommee = uniqid() . '_' . $photo;
        $uploadPath = $uploadDir . $photoRenommee;
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadPath);
    

        // 3 - Ajouter le nouvel équipier
        $res = addEquipe($nom, $prenom, $fonction, $photoRenommee);

        // 4 - Retour à la liste et afficher le résultat
        $sujet = "équipier";
        $verbe = "ajouté";
        $tEquipe = getListEquipe();
        require("vue/equipe/vue_listEquipe.php");
        break;

    case 'updEquipe':
        // 1 - Récupérer l'ID de l'équipier
        $idEquipier = $_GET['id_equipe'];
        
        // 2 - Récupérer les infos de l'équipier
        $equipier = getEquipierById($idEquipier);

        // 3 - Afficher le formulaire pré-rempli
        require("vue/equipe/vue_modifEquipe.php");    
        break;
    case 'updEquipe2':
        // 1 - Récupérer l'ID de l'équipier'
        $idEquipier = $_POST['id_equipe'];

        // 2 - Ajouter l'image au dossier correspondant
        $photo = $_FILES['photo']['name'];
        $uploadDir = "uploads/imagesEquipe/";
        $photoRenommee = uniqid() . '_' . $photo;
        $uploadPath = $uploadDir . $photoRenommee;
        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath);
        
        // 3 - Modifier avec les nouvelles données
        $equipier = ["id_equipe" => $idEquipier, "photo" => $photoRenommee, "nom" => $_POST['nom'], "prenom" => $_POST['prenom'], "fonction" => $_POST['fonction']];
        $res = updEquipier2($equipier);
        
        // 4 - Retour à la liste et afficher résultat 
        $sujet = "équipier";
        $verbe = "modifié";
        $tEquipe = getListEquipe();
        require("vue/equipe/vue_listEquipe.php");    
        break;

    case 'delEquipe':
        // 1 - Récupérer l'ID de l'équipier
        $idEquipe = $_GET['id_equipe'];
        
        // 2 - Supprimer l'équipier dans la BDD
        $res = delEquipe($idEquipe);

        // 3 - Afficher le résultat à l'utilisateur
        $sujet = "équipier";
        $verbe = "supprimé";
        $tEquipe = getListEquipe();
        require("vue/equipe/vue_listEquipe.php");    
        break;



////***/ CRUD REFERENCES /***///

    case 'listReference':
        // 1 - Récupérer la liste des références
        $tReference = getListReference();
        
        // 2 - Afficher la liste des références
        require("vue/references/vue_listReference.php");
        break;

    case 'addRef1':
        require("vue/references/vue_ajoutRef.php");
        break;

    case 'addRef2':
        // 1 - Mes variables
        $nom = $_POST['nom'];
        $description = $_POST['description'];

        // 2 - Ajouter l'image au dossier correspondant et la renommer
        $photo = $_FILES['img']['name'];
        $uploadDir = "uploads/imagesRef/";
        $photoRenommee = uniqid() . '_' . $photo;
        $uploadPath = $uploadDir . $photoRenommee;
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadPath);

        // 3 - Ajouter la nouvelle référence
        $res = addRef($nom, $description, $photoRenommee);

        // 4 - Retour à la liste
        $sujet = "référence";
        $verbe = "ajoutée";
        $tReference = getListReference();
        require("vue/references/vue_listReference.php");
        break;

    case 'updRef':
        // 1 - Récupérer l'identifiant de la référence
        $idRef = $_GET['id_reference'];
        
        // 2 - Récupérer les infos de la référence
        $reference = getRefById($idRef);

        // 3 - Afficher le formulaire prérempli
        require("vue/references/vue_modifRef.php");    
        break;
    case 'updRef2':
        // 1 - Récupérer l'identifiant de la référence
        $idRef = $_POST['id_reference'];

        // 2 - Ajouter l'image au dossier correspondant
        $photo = $_FILES['photo']['name'];

        $uploadDir = "uploads/imagesRef/";
        $photoRenommee = uniqid() . '_' . $photo;
        $uploadPath = $uploadDir . $photoRenommee;
        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath);
        
        // 3 - Modifier avec les nouvelles données
        $reference = ["id_reference" => $idRef, "photo" => $photoRenommee, "nom" => $_POST['nom'], "description" => $_POST['description']];
        $res = updRef($reference);
        
        // 4 - Retour à la liste
        $sujet = "référence";
        $verbe = "modifiée";
        $tReference = getListReference();
        require("vue/references/vue_listReference.php");    
        break;

    case 'delRef':
        // 1 - Récupérer l'ID de la ref
        $idRef = $_GET['id_reference'];
        
        // 2 - Supprimer la ref dans la BDD
        $res = delRef($idRef);

        // 3 - Afficher le résultat à l'utilisateur
        $sujet = "référence";
        $verbe = "supprimée";
        $tReference = getListReference();
        require("vue/references/vue_listReference.php");      
        break;



////***/ CRUD ACTUALITES /***///

    case 'listActu':
        // 1 - Récupérer la liste des actus
        $tActu = getListActu();
        
        // 2 - Afficher la liste des actus
        require("vue/actualites/vue_listActu.php");
        break;

    case 'ajoutActu':
        // 1 - Afficher un formulaire
        require("vue/actualites/vue_ajoutActu.php");
        break;
    case 'MAJajoutActu':
        // 1 - Récupérer les données du formulaire
        $titreActu = $_POST['nom_actu'];
        $descriptionActu = $_POST['description'];
        $contenuActu = $_POST['contenuActu'];
        $dateDebutPubli = $_POST['date_debut_publication'];
        $dateFinPubli = $_POST['date_fin_publication'];

        // 2 - Ajouter l'ID de l'utilisateur en cours
        $idUserActuel = $_SESSION['id'];

        // 3 - Enregistrer la nouvelle actu dans la BDD
        $res = ajoutActu($titreActu, $descriptionActu, $contenuActu, $dateDebutPubli, $dateFinPubli, $idUserActuel);

        // 4 - Afficher le résultat à l'utilisateur
        $sujet = "actualité";
        $verbe = "ajoutée";
        $tActu = getListActu();
        require("vue/actualites/vue_listActu.php");     
        break;

    case 'updActu':
        // 1 - Récupérer l'ID de l'actualité
        $idActu = $_GET['id_actu'];
        
        // 2 - Récupérer les infos de l'actualité
        $actu = getActuById($idActu);

        // 3 - Afficher le formulaire prérempli
        require("vue/actualites/vue_modifActu.php");    
        break;
    case 'MAJupdActu':
        // 1 - Récupérer l'ID de l'actu
        $idActu = $_POST["id_actu"];
        
        // 2 - Modifier l'actu dans la BDD
        $actu = ["id_actu" => $idActu, "nom_actu" => $_POST['nom_actu'], "description" => $_POST['description'], "contenu" => $_POST['contenu'], "date_debut_publication" => $_POST['date_debut_publication'], "date_fin_publication" => $_POST['date_fin_publication']];
        $res = updActu($actu);

        // 3 - Afficher le résultat à l'utilisateur
        $sujet = "actualité";
        $verbe = "modifiée";
        $tActu = getListActu();
        require("vue/actualites/vue_listActu.php"); 
        break;

    case 'delActu':
        // 1 - Récupérer l'ID de l'actu
        $idActu = $_GET['id_actu'];
        
        // 2 - Supprimer l'actu dans la BDD
        $res = delActu($idActu);

        // 3 - Afficher le résultat à l'utilisateur
        $sujet = "actualité";
        $verbe = "supprimée";
        $tActu = getListActu();
        require("vue/actualites/vue_listActu.php");  
        break;


////***/ CRUD UTILISATEURS /***///

    case 'listUsers':
        // 1 - Récupérer la liste des users
        $tusers = getListUser();
        
        // 2 - Afficher la liste des users
        require("vue/utilisateurs/vue_listUsers.php");
        break;
    
    case 'ajtProfil':
        require("vue/utilisateurs/vue_admin_ajtProfil.php");
        break;

    case 'saveAjt':
        if(!isset($_SESSION['role']))
        header('location:index.php');
        ajtUser();
        require("vue/utilisateurs/vue_admin_ajtProfil.php");
        break;

    case 'updUser':
        // 1 - Récupérer l'identifiant 
        $idUser = $_GET['id'];
        // 2 - Récupérer les infos 
        $user = getUser($idUser);
        // 3 - Afficher le formulaire prérempli
        require("vue/utilisateurs/vue_modifUser.php");    
        break;

    case 'MAJupdUser':
        // 1 - Récupérer l'identifiant 
        $idUser = $_GET["id"];

        // 2 - Modifier le utilisateur dans la BDD
        $user = ["id" => $idUser, "nom" => $_GET['nom'], "prenom" => $_GET['prenom'], "login" => $_GET['login'], "email" => $_GET['email']];
        $res = updUser($user);

        // 3 - Afficher le résultat à l'utilisateur
        $titre = "Modification d'un utilisateur";
        $sujet = "utilisateur";
        $verbe = "modifié";
        $tusers = getListUser();
        require("vue/utilisateurs/vue_listUsers.php");
        break;

    case 'demandeSupp':
        $style = "vue_admin" ;
        $userId = $_POST['id'];
        $userToDelete = getUser($userId);
        $tusers = getListUser();
        require("vue/utilisateurs/vue_admin_dem_sup.php");
        break;

    case 'annulSupp':
        $tusers = getListUser();
        require("vue/utilisateurs/vue_admin.php");
        break;
    case 'validSupp':
        delContact($_POST['id']);
        $_SESSION['role'] = "admin";
        $tusers = getListUser();
        require("vue/utilisateurs/vue_admin.php");
        break;


    
////***/ DECONNEXION /***///
    case 'deconnexion':
        $_SESSION = array();
        session_destroy();
        require("vue/vue_connexion.php");
        break;

    default:
        echo 'Err';
    }    

?>


