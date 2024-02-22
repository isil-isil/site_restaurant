<?php

$contenu = "";

$contenu .=
    '<div class="dashboard-container">
    <br><br><div class="container text-center">
 <h1>Membres de l\'équipe :</h1> <br>
 </div>
 <div class="container text-center">
 <div class="row">
 <div class="col">
   <button class="btn btn-primary float-end" onclick=window.location.href="index.php?action=ajoutEquipe1">Ajouter un équipier</button>
 </div>
</div></br>';

if (isset($res)) {
  if ($res === true) {
    $contenu .= "<div class='alert alert-success mb-3'>
    <strong>Succès</strong> Votre $sujet a bien été $verbe !</div>";    
  } else {
    $contenu .= "<div class='alert alert-danger mb-3'>
    ⚠ Erreur : Votre $sujet n'a pas été $verbe.</div>";    
  }
}

 $contenu .= '
 <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Fonction</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    ';


foreach ($tEquipe as $equipe) {
        $contenu .= '<tr>
        <td><img src="uploads/imagesEquipe/' . $equipe["photo"] . '" style="width:8em;height:8em"/></td>
    <th scope="row">'. $equipe["id_equipe"] . '</th>
        <td>' . $equipe["nom"] . '</td>
        <td>' . $equipe["prenom"] . '</td>
        <td>' . $equipe["fonction"] . '</td>
        <td> <form action="index.php" method="get">
        <input type="hidden" name="id_equipe" value="'.$equipe["id_equipe"].'" /></td>
        <td><button type ="submit" class="btn btn-primary mybut" name="action" value="updEquipe">Editer</button></td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal'.$equipe['id_equipe'].'">Supprimer</button></td>';

$contenu.= '<!-- Modal -->
            <div class="modal fade" data-bs-backdrop="static" id="modal'.$equipe['id_equipe'].'">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" aria-labelledby="modal title">Etes-vous sûr de vouloir supprimer cet équipier ?</h5>
                        </div>
                        <div class="modal-body text-dark" aria-describedby="content">
                        <strong>'. $equipe['nom'] . ' '. $equipe['prenom'] . '</strong><br>
                          <br> <img src="uploads/imagesEquipe/' . $equipe["photo"] . '"/><br><br>
                          <strong>Fonction : </strong>'. $equipe['fonction'] . '<br>
                        </div>
                        <div class="modal-footer"> 
                          <button type ="submit" class="btn btn-primary mybut" name="action" value="listEquipe">Non annuler</button> 
                          <button type ="submit" class="btn btn-danger mybut" name="action" value="delEquipe">Oui supprimer</button>
                        </div> 
                    </div>
                </div>
            </div>
        <!-- Fin modal -->
        </form>
        </tr>';
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
