<?php

//var_dump($_SESSION['role']) ;

$contenu = "";

$contenu .=
    '<div class="dashboard-container">
    <br><br><div class="container text-center">
 <h1>Références :</h1> <br>
 </div>
 <div class="container text-center">
  <div class="row">
    <div class="col">
      <button class="btn btn-primary float-end" onclick=window.location.href="index.php?action=addRef1">Ajouter une référence</button>
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
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    ';


foreach ($tReference as $reference) {
    $contenu .= '<tr>
    <td><img src="uploads/imagesRef/' . $reference["photo"] . '" style="width:15em;height:10em"/></td>
    <th scope="row">'
        . $reference["id_reference"] . '</th>
        <td>' . $reference["nom"] . '</td>
        <td>' . $reference["description"] . '</td>
        <td> <form action="index.php" method="get">
        <input type="hidden" name="id_reference" value="'.$reference["id_reference"].'" /></td>
        <td><button type ="submit" class="btn btn-primary mybut" name="action" value="updRef">Editer</button></td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal'.$reference['id_reference'].'">Supprimer</button></td>';

$contenu.= '<!-- Modal -->
            <div class="modal fade" data-bs-backdrop="static" id="modal'.$reference['id_reference'].'">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" aria-labelledby="modal title">Etes-vous sûr de vouloir supprimer cette référence ?</h5>
                        </div>
                        <div class="modal-body text-dark" aria-describedby="content">
                        <strong>Nom :</strong> '. $reference['nom'] . '<br><br>
                        <img src="uploads/imagesRef/' . $reference["photo"] . '"/><br><br>
                        <strong>Description de la référence : </strong>'. $reference['description'] . '<br>
                        </div>
                        <div class="modal-footer"> 
                          <button type ="submit" class="btn btn-primary mybut" name="action" value="listReference">Non annuler</button> 
                          <button type ="submit" class="btn btn-danger mybut" name="action" value="delRef">Oui supprimer</button>
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
