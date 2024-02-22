<?php

$dirPages = "vue/pages";
$dirEquipe = "vue/equipe";
$dirRef = "vue/references";
$dirActu = "vue/actualites";

$menu = '';

if(isset($_SESSION['role']))
if($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'redacteur'){

$menu.='
<nav class="navbar bg-primary text-white">
    <h4>Interface</h4>
    <div class="profile">
        <p class="profile-name">' .$_SESSION["nom"]. ' ' . $_SESSION["prenom"]. '</p>
    </div>
</nav>

<!-- sidebar -->
<input type="checkbox" id="toggle">
<label class="side-toggle" for="toggle"><i class="bi bi-list text-white"></i></label>

<div class="sidebar bg-primary">
    
    <br><br>
    <div class="sidebar-menu">
        <a class="nav-link textNav" href="index.php?action=vue_accueil"> <i class="bi bi-gear-fill"></i> Tableau de bord</a>
    </div>

    <hr class="bg-white">

    <div class="sidebar-menu">
        <a class="nav-link textNav" href="modele/deconnexion">Deconnexion</a>  
    </div> 
    <hr class="bg-white">

';
if (is_dir($dirPages)) {
    $menu.= '<div class="sidebar-menu">
               
                <button class="btn textSidebar" onclick=window.location.href="index.php?action=listPages">Pages</button>
            </div>'; }
if (is_dir($dirEquipe)) {
    $menu.= '<div class="sidebar-menu">
                
                <button class="btn textSidebar" onclick=window.location.href="index.php?action=listEquipe">Équipe</button>
            </div>'; }
if (is_dir($dirRef)) {
    $menu.= '<div class="sidebar-menu">
   
                <button class="btn textSidebar" onclick=window.location.href="index.php?action=listReference">Références</button>
            </div>'; }
if (is_dir($dirActu)) {
    $menu.= '<div class="sidebar-menu">
              
                <button class="btn textSidebar" onclick=window.location.href="index.php?action=listActu">Actualités</button>
            </div>'; }

            if(isset($_SESSION['role']))
    if($_SESSION['role'] === 'admin'){
    $menu .='<div class="sidebar-menu">
               
                <button class="btn textSidebar" onclick=window.location.href="index.php?action=listUsers">Utilisateurs</button>
            </div>
            '; }

if(isset($_SESSION['role']))
    $menu.='</ul>
    </div>';

}

?>

<!-- <h4>Dashboard</h4> -->
<!-- sidebar -->
<!-- <input type="checkbox" id="toggle">
<label class="side-toggle" for="togle"><i class="bi bi-list"></i></label> -->

<!-- main dashboard -->

<!-- <div class="sidebar">
    <div class="sidebar-menu">
        <span class="bi bi-list"><p>Overview</p></span>
    </div>
</div> -->

