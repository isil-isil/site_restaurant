<?php
session_start();


if (!isset($_SESSION['mail'])) {
    require_once("controleur/control_connexion.php");
} else {
    if ($_SESSION['role'] === "admin") {
        require_once("controleur/control_crudAdmin.php");
    } elseif ($_SESSION['role'] === "redacteur") {
        require_once("controleur/control_crudAdmin.php");
    }
}
?>