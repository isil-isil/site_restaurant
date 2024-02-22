<?php
$contenu = "";
$contenu .=
  '<div class="dashboard-container">
  <div class="container text-center">
  <br><br><h1>Utilisateurs</h1><br>
 </div>
 <div class="container">
 <div class="row">
 <div class="col">
 <form method="POST" action="index.php?action=ajtProfil" class="text-center">
 <button class="btn btn-primary float-end">Ajouter un profil</button>
 </form>
 </div>
</div>
 <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Login</th>
        <th scope="col">Email</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    ';


foreach ($tusers as $user) {
  $contenu .= '<tr>
  <th scope="row">'. $user['id'] . "</th>
        <td>" . strtoupper($user['nom']) . "</td>
        <td>" . $user['prenom'] . "</td>
        <td>" . $user['login'] . "</td>
        <td>" . $user['email'] . "</td>
        <form action='index.php' method='get'>
        <input type='hidden' name='id' value='".$user['id']."' /></td>
        <td><button type ='submit' class='btn btn-primary mybut' name='action' value='updUser'>Editer</button></td></form>
        <td><form method='POST' action='index.php?action=demandeSupp'><input type='hidden' name='id' value='" . $user['id'] . "'/><button class='btn btn-primary mybut'>Supprimer</button></form></td>
        </tr>";
}

$contenu .=
  '
    </tbody>
    </table>
    <BR/>
    </div>
    </div>
    ';


require("vue/gabarit.php");
?>