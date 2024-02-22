<?php
$contenu = "";
$contenu .=
  '<div class="dashboard-container">
  <div class="container text-center"><br><br><br>
  <br><br><h1>Etes-vous certain de vouloir supprimer cet utilisateur ? </h1><br>
 </div>
 <div class="container">
 <table class="table table-hover text-center">
    <tr>
    <td><form method="POST" action="index.php?action=validSupp"><input type="hidden" name="id" value="' . $userToDelete['id'] . '"/><button class="btn btn-primary mybut">Oui Supprimer ' . strtoupper($userToDelete['nom']) . ' ' . $userToDelete['prenom'] . '</button></form></td>
    <td><form method="POST" action="index.php?action=annulSupp"><button class="btn btn-primary mybut">Non Annuler</button></form></td>
    </tr>
    </table>
 <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Type Profil</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <form method="POST" action="index.php?action=demandeSupp">
    ';


foreach ($tusers as $user) {
  $contenu .= '<tr><th scope="row">'
    . strtoupper($user['nom']) . "</th>
        <td>" . $user['prenom'] . "</td>
        <td>" . $user['role'] . "</td>
        <td><button class='btn btn-primary mybut disabled'>Editer</button></td>
        <td><button class='btn btn-primary mybut disabled'>Supprimer</button></td>
        </tr></form>";
}

$contenu .=
  '
    </tbody>
    </table>
    <BR/>
    <form method="POST" action="index.php?action=ajtProfil" class="text-center">
    <button class="btn btn-primary mybut">Ajouter un profil</button>
    </form></div></div>
    </div>
    ';


require("vue/gabarit.php");
?>