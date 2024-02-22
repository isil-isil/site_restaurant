<?php

//var_dump($_SESSION['role']) ;

$contenu = "";


$contenu .=
    '
  
    <div class="dashboard-container">
      <div class="container text-center">
      <br><br><h1>Toutes les pages :</h1> <br>
      </div>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <button class="btn btn-primary float-end" onclick=window.location.href="index.php?action=ajoutPage">Ajouter une page</button>
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

 $contenu .= '<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th scope="col">Auteur</th>
        <th scope="col">Date</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    ';


foreach ($tPages as $page) {
    $contenu .= "<tr>
    <th scope='row'>"
        . $page['id_page'] . "</th>
        <td>" . $page['titre'] . "</td>
        <td>" . $page['description'] . "</td>
        <td>" . $page['prenom'] . "</td>
        <td>" . $page['date_page'] . "</td>
        <td> <form action='index.php' method='post'>
        <input type='hidden' name='id_page' value='".$page['id_page']."' /></td>
        <td><button type ='submit' class='btn btn-primary mybut' name='action' value='updPage'>Editer</button></td>
        <td><button type='button' class='btn btn-primary'data-bs-toggle='modal' data-bs-target='#modal".$page["id_page"]."'>Supprimer</button></td> 
        ";

$contenu.= ' 
        <!-- Modal -->
        <div class="modal fade" data-bs-backdrop="static" id="modal'.$page['id_page'].'">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" aria-labelledby="modal title">Etes-vous sûr de vouloir supprimer cette page ?</h5>
                    </div>
                    <div class="modal-body text-dark" aria-describedby="content">
                    <strong>Nom de la page :</strong> '. $page['titre'] . '<br><br>
                    <strong>Description de la page :</strong> '. $page['description'] . '<br>
                    </div>
                    <div class="modal-footer"> 
                      <button type ="submit" class="btn btn-primary mybut" name="action" value="listPages">Non annuler</button> 
                      <button type ="submit" class="btn btn-danger mybut" name="action" value="delPage">Supprimer</button>
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
   
    ';

// var_dump($_SESSION);
// var_dump($_SERVER);


  require("vue/gabarit.php");
  ?>

