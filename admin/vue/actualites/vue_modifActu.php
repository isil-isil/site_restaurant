
<?php
   
    $contenu = 
    '<div class="dashboard-container">
    <div class="container">
    <br><br>
    <div class="container">
        <h1>Modifier une actualité :</h1> <br>
    </div>'.
    '<form action="index.php" method="POST">'."\n"
        .'    <label class="form-label">Nom</label>
             <input type="string" class="form-control" required="required"  name="nom_actu" value="'.$actu['nom_actu'].'" ><br><br>'."\n"
        .'    <label class="form-label">Description</label>
            <input type="string" class="form-control" required="required" name="description" value="'.$actu['description'].'" ><br><br>'."\n"
        .'    <label class="form-label">Contenu</label>
            <textarea name="contenu" id="summernote" class="form-control" rows="4">'.$actu["contenu"].'</textarea><br><br>'."\n"
        
        .'    <label class="form-label">Date de début de publication</label>
         <input type="datetime-local" required="required"  name="date_debut_publication" value="'.$actu['date_debut_publication'].'" ><br><br>'."\n"
        .'    <label class="form-label" >Date de fin de publication</label>
         <input type="datetime-local" required="required" name="date_fin_publication" value="'.$actu['date_fin_publication'].'" ><br><br>'."\n"
        .'    <input type="hidden" name="action" value="MAJupdActu">'."\n"
        .'    <input type="hidden" name="id_actu" value="'.$actu['id_actu'].'">'."\n"
        .'    <input type="submit" class="btn btn-primary mybut" value="Valider"> <br><br><br>'."\n"
    .'</form></div></div></div>'."\n";






    require("vue/gabarit.php");
?>