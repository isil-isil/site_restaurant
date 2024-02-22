
<?php


    $contenu = 
    '<div class="dashboard-container">
    <div class="container">
    <br><br>
    <div class="container">
        <h1>Ajouter un équipier :</h1> <br>
    </div>'.
    '<form action="index.php?action=ajoutEquipe2" method="POST" enctype="multipart/form-data">'."\n"
        .'  <label class="form-label">Nom</label>
            <input type="string" class="form-control" required="required"  name="nom" ><br><br>'."\n"
        .'  <label class="form-label">Prénom</label>
            <input type="string" class="form-control" required="required" name="prenom" ><br><br>'."\n"
        .'  <label class="form-label">Fonction</label>
            <input type="string" class="form-control" required="required" name="fonction" ><br><br><br>'."\n"
        .'  <input type="file" name="img"><br><br><br>
        <button type="submit" class="btn btn-primary mybut" name="btnAjout">Valider</button>
        </form>'."\n"
    .'</div></div></div>'."\n";

   
   



    require("vue/gabarit.php");
?>