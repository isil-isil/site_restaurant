<?php

///*** FONCTIONS PAGE ***///

/**
 * Fonction pour afficher toutes les pages de la BDD
 *
 * @return array
 */
function getListPages() {
    $connexion = getBdd();
    
    // Préparer la requête SQL
    $sql = "SELECT * FROM page p
        JOIN utilisateur u ON p.id_1 = u.id
        ORDER BY id_page";

    // Exécuter la requête
    $curseur = $connexion->query($sql);

    // Récupère les enregistrements dans un tableau
    $records = $curseur->fetchAll();

    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner le tableau
    return $records;
}

/**
 * Fonction pour ajouter une page
 *
 * @param string $titre
 * @param string $description
 * @param string $contenu
 * @param integer $idUser
 * @return bool
 */
function ajoutPage(string $titre, string $description, string $contenu , int $idUser) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "INSERT INTO page (date_page, titre, description, contenu, id_1) VALUE (NOW(),?,?,?,?);";
    
    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    try {
        $res = $curseur->execute([$titre, $description, $contenu, $idUser]);
    } catch (PDOException $e) {
        $res = false;
    }
    // Fermer le curseur / resultset
    $curseur->closeCursor();

    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si insertion réussie)
    return $res;
}

/**
 * Fonction pour récupérer tout le contenu d'une page
 *
 * @param integer $idPage
 * @return array
 */
function getPageById(int $idPage) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "SELECT * FROM page WHERE id_page = ?";

    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute([$idPage]);

    // Récupérer les enregistrements
    $page = $curseur->fetch(PDO::FETCH_ASSOC);

    return $page;
}

/**
 * Fonction pour modifier une page
 *
 * @param array $page
 * @return bool
 */
function updPage(array $page) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "UPDATE page SET titre = :titre, description = :description, contenu = :contenu, date_page = NOW() WHERE id_page = :id_page";

    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute(["id_page" => $page['id_page'], ":titre"=> $page['titre'], ":description"=> $page['description'], ":contenu"=> $page['contenu']]);

    // Récupérer le nombre d'enregistrements supprimés
    $nbPage = $curseur->rowCount();
    
    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si 1 seule page supprimée)
    return ($nbPage === 1);
}

/**
 * Fonction pour supprimer une page
 *
 * @param integer $idPage
 * @return bool
 */
function delPage(int $idPage) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "DELETE FROM page WHERE id_page = ?";
    
    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute([$idPage]);
    
    // Récupérer le nombre d'enregistrements supprimés
    $nbPages = $curseur->rowCount();
    
    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si 1 seule page supprimée)
    return ($nbPages === 1);
}


///*** FONCTIONS EQUIPE ***///

/**
 * Fonction pour afficher tous les membres d'une équipe
 *
 * @return array
 */
function getListEquipe() {
    $connexion = getBdd();
    
    // Préparer la requête SQL
    $sql = "SELECT * FROM equipier
        ORDER BY id_equipe";

    // Exécuter la requête
    $curseur = $connexion->query($sql);

    // Récupère les enregistrements dans un tableau
    $records = $curseur->fetchAll();

    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner le tableau
    return $records;
}

function addEquipe($nom, $prenom, $fonction, $photo) {
    $connexion = getBdd();
    // Préparer la requête SQL
    $sql = "INSERT INTO equipier (nom, prenom, fonction, photo) VALUES (?,?,?,?);";
    
    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    try {
        $res = $curseur->execute([$nom, $prenom, $fonction, $photo]);
    } catch (PDOException $e) {
        $res = false;
    }
    // Fermer le curseur / resultset
    $curseur->closeCursor();

    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si insertion réussie)
    return $res;
}

/**
 * Fonction pour récupérer toutes les infos d'un équipier
 *
 * @param integer $idEquipier
 * @return array
 */
function getEquipierById(int $idEquipier) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "SELECT * FROM equipier WHERE id_equipe = ?";

    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute([$idEquipier]);

    // Récupérer les enregistrements
    $equipier = $curseur->fetch(PDO::FETCH_ASSOC);

    return $equipier;
}

/**
 * Fonction pour modifier un équipier
 *
 * @param array $equipier
 * @return bool
 */
function updEquipier2(array $equipier) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "UPDATE equipier SET nom = :nom, prenom = :prenom, fonction = :fonction, photo = :photo WHERE id_equipe = :id_equipe";

    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute(["id_equipe" => $equipier['id_equipe'], ":nom"=> $equipier['nom'], ":prenom"=> $equipier['prenom'], ":fonction"=> $equipier['fonction'], ":photo"=> $equipier['photo']]);

    // Récupérer le nombre d'enregistrements supprimés
    $res = $curseur->rowCount();
    
    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si 1 seul équipier supprimé)
    return ($res === 1);
}

/**
 * Fonction pour supprimer un équipier
 *
 * @param integer $idEquipe
 * @return bool
 */
function delEquipe(int $idEquipe) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "DELETE FROM equipier WHERE id_equipe = ?";
    
    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute([$idEquipe]);
    
    // Récupérer le nombre d'enregistrements supprimés
    $nbEquipe = $curseur->rowCount();
    
    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si 1 seul équipier supprimé)
    return ($nbEquipe === 1);
}


///*** FONCTIONS REFERENCE ***///

/**
 * Fonction pour afficher toutes les références
 *
 * @return array
 */
function getListReference() {
    $connexion = getBdd();
    
    // Préparer la requête SQL
    $sql = "SELECT * FROM reference
        ORDER BY id_reference";

    // Exécuter la requête
    $curseur = $connexion->query($sql);

    // Récupère les enregistrements dans un tableau
    $records = $curseur->fetchAll();

    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner le tableau
    return $records;
}


function addRef($nom, $description, $photo) {
    $connexion = getBdd();
    // Préparer la requête SQL
    $sql = "INSERT INTO reference (nom, description, photo) VALUES (?,?,?);";
    
    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    try {
        $res = $curseur->execute([$nom, $description, $photo]);
    } catch (PDOException $e) {
        $res = false;
    }
    // Fermer le curseur / resultset
    $curseur->closeCursor();

    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si insertion réussie)
    return $res;
}

/**
 * Fonction pour récupérer toutes les infos d'une seule référence
 *
 * @param integer $idRef
 * @return array
 */
function getRefById(int $idRef) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "SELECT * FROM reference WHERE id_reference = ?";

    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute([$idRef]);

    // Récupérer les enregistrements
    $reference = $curseur->fetch(PDO::FETCH_ASSOC);

    return $reference;
}

/**
 * Fonction pour modifier une référence
 *
 * @param array $reference
 * @return bool
 */
function updRef(array $reference) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "UPDATE reference SET nom = :nom, description = :description, photo = :photo WHERE id_reference = :id_reference";

    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute(["id_reference" => $reference['id_reference'], ":nom"=> $reference['nom'], ":description"=> $reference['description'], ":photo"=> $reference['photo']]);

    // Récupérer le nombre d'enregistrements supprimés
    $nbRef = $curseur->rowCount();
    
    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si 1 seule reference supprimée)
    return ($nbRef === 1);
}

/**
 * Fonction pour supprimer une référence
 *
 * @param integer $idRef
 * @return bool
 */
function delRef(int $idRef) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "DELETE FROM reference WHERE id_reference = ?";
    
    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute([$idRef]);
    
    // Récupérer le nombre d'enregistrements supprimés
    $nbEquipe = $curseur->rowCount();
    
    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si 1 seul équipier supprimé)
    return ($nbEquipe === 1);
}

///*** FONCTIONS ACTUALITES ***///

/**
 * Fonction pour afficher toutes les actualités 
 *
 * @return array
 */
function getListActu() {
    $connexion = getBdd();
    
    // Préparer la requête SQL
    $sql = "SELECT * FROM actualite a
    JOIN utilisateur u ON a.id_1 = u.id
        ORDER BY id_actu";

    // Exécuter la requête
    $curseur = $connexion->query($sql);

    // Récupère les enregistrements dans un tableau
    $records = $curseur->fetchAll();

    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner le tableau
    return $records;
}


/**
 * Fonction pour ajouter une actualité
 *
 * @param string $titre
 * @param string $description
 * @param string $contenu
 * @param string $dateDebutPubli
 * @param string $dateFinPubli
 * @param integer $idUser
 * @return bool
 */
function ajoutActu(string $titre, string $description, string $contenu, string $dateDebutPubli, string $dateFinPubli, int $idUser) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "INSERT INTO actualite (date_actu, nom_actu, description, contenu, date_debut_publication, date_fin_publication, id_1) VALUE (NOW(),?,?,?,?,?,?);";
    
    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    try {
        $res = $curseur->execute([$titre, $description, $contenu, $dateDebutPubli, $dateFinPubli, $idUser]);
    } catch (PDOException $e) {
        $res = false;
    }
    // Fermer le curseur / resultset
    $curseur->closeCursor();

    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si insertion réussie)
    return $res;
}

/**
 * Fonction qui permet de récupérer toutes les informations sur une seule actualité
 *
 * @param integer $idActu identifiant de l'actualité
 * @return array
 */
function getActuById(int $idActu) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "SELECT * FROM actualite WHERE id_actu = ?";

    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute([$idActu]);

    // Récupérer les enregistrements
    $actu = $curseur->fetch(PDO::FETCH_ASSOC);

    return $actu;
}

/**
 * Fonction qui permet de modifier une actualité
 *
 * @param array $actu
 * @return bool
 */
function updActu(array $actu) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "UPDATE actualite SET nom_actu = :nom_actu, description = :description, contenu = :contenu, date_actu = NOW(), date_debut_publication = :date_debut_publication, date_fin_publication = :date_fin_publication WHERE id_actu = :id_actu";

    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute(["id_actu" => $actu['id_actu'], ":nom_actu"=> $actu['nom_actu'], ":description"=> $actu['description'], ":contenu"=> $actu['contenu'], ":date_debut_publication"=> $actu['date_debut_publication'], ":date_fin_publication"=> $actu['date_fin_publication']]);

    // Récupérer le nombre d'enregistrements supprimés
    $nbActu = $curseur->rowCount();
    
    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si 1 seule actu supprimée)
    return ($nbActu === 1);
}

/**
 * Fonction qui permet de supprimer une actualité
 *
 * @param integer $idActu
 * @return bool
 */
function delActu(int $idActu) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "DELETE FROM actualite WHERE id_actu = ?";
    
    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute([$idActu]);
    
    // Récupérer le nombre d'enregistrements supprimés
    $nbActu = $curseur->rowCount();
    
    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si 1 seule actu supprimée)
    return ($nbActu === 1);
}


///*** FONCTIONS UTILISATEURS ***///

/**
 * Fonction pour afficher tous les utilisateurs
 *
 * @return array
 */
function getListUser()
{
    $connexion = getBdd();

    // Exécuter la requête
    $curseur = $connexion->query('SELECT id, role, nom, prenom, login, email FROM utilisateur');

    // Récupère les enregistrements dans un tableau
    $records = $curseur->fetchAll();

    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner le tableau
    return $records;
}

/**
 * Fonction pour récupérer toutes les infos d'un seul utilisateur
 *
 * @param integer $id
 * @return array
 */
function getUser(int $id)
{
    $connexion = getBdd();

    // Exécuter la requête
    $curseur = $connexion->prepare('SELECT id, role, nom, prenom, login, email FROM utilisateur WHERE id = ?');
    $curseur->execute([$id]);

    // Récupère les enregistrements dans un tableau
    $user = $curseur->fetch(PDO::FETCH_ASSOC);

    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner le tableau
    return $user;
}

/* Fonction pour ajouter un utilisateur */
function ajtUser() {

    $connexion = getBdd();

    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['role']) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password_retype'])) {
        // Patch XSS
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $login = htmlspecialchars($_POST['login']);
        $role = htmlspecialchars($_POST['role']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);


        $sql = 'SELECT nom, prenom FROM utilisateur WHERE nom = ? AND prenom = ?';
        // On vérifie si l'utilisateur existe
        $check = $connexion->prepare($sql);
        $check->execute(array($nom, $prenom));
        $check->fetch();
        $row = $check->rowCount();

        $nom = strtolower($nom);
        $prenom = strtolower($prenom);

        // Si la requête renvoie un 0 alors l'utilisateur n'existe pas 
        if ($row == 0) {
            if (strlen($login) <= 25) { // On vérifie la longueur du pseudo 
                if (filter_var($email, FILTER_VALIDATE_EMAIL)){ // On vérifie que le format de l'email est correct
                    if ($password === $password_retype) { // si les deux mdp saisis sont similaires
                        $passwordH = password_hash($password, PASSWORD_DEFAULT);
                        $insert = $connexion->prepare('INSERT INTO utilisateur (role, nom, prenom, login, email, password) VALUES (:role, :nom, :prenom, :login, :email, :password)');
                        $insert->execute(
                            array(
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'login' => $login,
                                'password' => $passwordH,
                                'role' => $role,
                                'email' => $email
                            )
                        );
                        header('Location: index.php?action=ajtProfil&reg_err=success');
                    } else {
                        header('Location: index.php?action=ajtProfil&reg_err=password');
                    }
                } else {
                    header('Location: index.php?action=ajtProfil&reg_err=email_error');
                }
            } else {
                header('Location: index.php?action=ajtProfil&reg_err=login_length');
            }
        } else {
            header('Location: index.php?action=ajtProfil&reg_err=already');
        }
    }

}

/* Fonction pour modifier un utilisateur */
function updUser(array $user) {
    $connexion = getBdd();

    // Préparer la requête SQL
    $sql = "UPDATE utilisateur SET nom = :nom, prenom = :prenom, login = :login, email = :email WHERE id = :id";

    // Enregistrer la requête préparée
    $curseur = $connexion->prepare($sql);

    // Exécuter la requête
    $curseur->execute(["id" => $user['id'], ":nom"=> $user['nom'], ":prenom"=> $user['prenom'], ":login"=> $user['login'], ":email"=> $user['email']]);

    // Récupérer le nombre d'enregistrements supprimés
    $nbUser = $curseur->rowCount();
    
    // Fermer le curseur / resultset
    $curseur->closeCursor();
    // Détruit la connexion
    $connexion = null;

    // Retourner un booléen (VRAI si 1 seule actu supprimée)
    return ($nbUser === 1);
}

/* Fonction pour supprimer un utilisateur */
function delContact(int $userId)
{
    $connexion = getBdd();

    if (!empty($userId)) {
        $id = htmlspecialchars($userId);

        $userToDelete = getUser($id);

        // Préparer la requête SQL
        $sql = "DELETE FROM utilisateur WHERE id = ?";

        // Enregistrer la requête préparée
        $curseur = $connexion->prepare($sql);

        // Exécuter la requête
        $curseur->execute([$id]);

        // Récupérer le nombre d'enregistrements supprimés
        $nbContacts = $curseur->rowCount();

        // Fermer le curseur / resultset
        $curseur->closeCursor();
        // Détruit la connexion
        $connexion = null;

        // Retourner un booléen (VRAI si 1 seul contact supprimé)
        return ($nbContacts === 1);
    }

}


// TEST SUMMERNOTE ENREGISTREMENT IMAGES
function createImage($img)
    {
        $path = "images/";

        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_en_base64 = base64_decode($image_parts[1]);
        $file = $path . uniqid() . '.png';

        file_put_contents($file, $image_en_base64);
    }

?>