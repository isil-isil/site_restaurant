<?php
/**
 * Connexion à la base de données et retourne une instance
 * la fonction parse_ini_file() cherche les fichiers qui sont faits sous forme de clé = valeur
 * la fonction extract() permet de créer des variables dynamiquement en PHP
 * @return object
 */
function getBdd() {
    $ini_array = parse_ini_file('config/param.ini', true);
    extract($ini_array['BDD']);

    $dsn = "mysql:host=".$host."; port=".$port."; dbname=".$bdd.";charset=utf8";
    $bdd = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

/**
 * Contrôle si l'utilisateur entré dans le formulaire de connexion est dans la base de données
 * et retourne un tableau si c'est le cas 
 * @param string $mail L'email de l'utilisateur qui sert d'identifiant
 * @return array 
 */
function getConnexion(string $mail) {
    $bdd = getBdd();
    // Préparer la requête SQL
    $sql = "SELECT * FROM utilisateur
            WHERE email = :mail";

    // Enregistrer la requête préparée avec étiquette
    $recupUser = $bdd->prepare($sql);

    // Exécuter la requête
    $recupUser->execute([":mail" => $mail]);

    // On récupère les données
    $tUsers = $recupUser->fetchAll(PDO::FETCH_ASSOC);

    // Fermer le curseur
    $recupUser->closeCursor();

    // Détruit la connexion
    $bdd = null;

    return $tUsers;
}

?>