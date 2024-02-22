<?php


    $ini_array = parse_ini_file('../admin/config/param.ini', true);
    extract($ini_array['BDD']);
    

    $dsn = "mysql:host=".$host."; port=".$port."; dbname=".$bdd.";charset=utf8";

    //  On se connecte à la base
    try {
        // On instancie PDO
        $db = new PDO($dsn, $user, $password);

        echo "On est connectés";

        // On définit le mode de "fetch" par défaut
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    }catch(PDOException $e) {
        die("Erreur :" . $e->getMessage());
    }

// *** AFFICHAGE DES PAGES *** //
    // Ici on est connectés à la base
    // On peut récupérer la liste des pages
    $sql = "SELECT * FROM page";

    // On exécute directement la requête
    $requete = $db->query($sql);

    // On récupère les données (fetch ou fetchAll)

    $tPage = $requete->fetchAll();

    // var_dump($tPage);

// *** AFFICHAGE DES REFERENCES *** //
    // On peut récupérer la liste des références
    $sqlRef = "SELECT * FROM reference";

    // On exécute directement la requête
    $requete = $db->query($sqlRef);

    // On récupère les données (fetch ou fetchAll)

    $tRef = $requete->fetchAll();

// *** AFFICHAGE DES ACTUS *** //
    // On peut récupérer la liste des actus
    $sqlActu = "SELECT * FROM actualite";

    // On exécute directement la requête
    $requete = $db->query($sqlActu);

    // On récupère les données (fetch ou fetchAll)

    $tActu = $requete->fetchAll();


   
