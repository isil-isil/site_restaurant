<?php

$contenu = "";

$contenu .= '
  <div class="dashboard-container"><br><br>
    <div class="container text-center">
      <h1>Toutes les actualités :</h1> <br>
    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <button class="btn btn-primary float-end" onclick=window.location.href="index.php?action=ajoutActu">Ajouter une actualité</button>
        </div>
      </div></br>';

if (isset($res)) {
  if ($res === true) {
    $contenu .= "<div class='alert alert-success mb-3'>
                  <strong>Succès</strong> Votre $sujet a bien été $verbe !
                </div>"; 
  } else {
    $contenu .= "<div class='alert alert-danger mb-3'>
                  ⚠ Erreur : Votre $sujet n'a pas été $verbe.
                </div>";    
  }
}

 $contenu .= '
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titre</th>
        <th scope="col">Auteur</th>
        <th scope="col">Description</th>
        <th scope="col">Date</th>
        <th scope="col">Date de début de publication</th>
        <th scope="col">Date de fin de publication</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    ';


foreach ($tActu as $actu) {
    $contenu .= "<tr>
    <th scope='row'>"
        . $actu['id_actu'] . "</th>
        <td>" . $actu['nom_actu'] . "</td>
        <td>" . $actu['prenom'] . "</td>
        <td>" . $actu['description'] . "</td>
        <td>" . $actu['date_actu'] . "</td>
        <td>" . $actu['date_debut_publication'] . "</td>
        <td>" . $actu['date_fin_publication'] . "</td>
        <td> <form action='index.php' method='get'>
        <input type='hidden' name='id_actu' value='".$actu['id_actu']."' /></td>
        <td><button type ='submit' class='btn btn-primary mybut' name='action' value='updActu'>Editer</button></td>
        <td><button type='button' class='btn btn-primary'data-bs-toggle='modal' data-bs-target='#modal".$actu["id_actu"]."'>Supprimer</button></td> 
        ";

$contenu.= ' 
        <!-- Modal pour la suppression -->
        <div class="modal fade" data-bs-backdrop="static" id="modal'.$actu['id_actu'].'">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" aria-labelledby="modal title">Etes-vous sûr de vouloir supprimer cette actualité ?</h5>
                    </div>
                    <div class="modal-body text-dark" aria-describedby="content">
                    <strong>Nom de l\'actualité : </strong>'. $actu['nom_actu'] . '<br>
                    <strong>Description de l\'actualité : </strong>'. $actu['description'] . '<br>
                    </div>
                    <div class="modal-footer"> 
                      <button type ="submit" class="btn btn-primary mybut" name="action" value="listActu">Non annuler</button> 
                      <button type ="submit" class="btn btn-danger mybut" name="action" value="delActu">Oui supprimer</button>
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
