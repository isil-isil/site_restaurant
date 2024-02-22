
<?php
    
    $contenu = 
    '<div class="dashboard-container">
    <div class="container">
    <br><br>
    <div class="container">
        <h1>Modifier un équipier :</h1> <br>
    </div>'.
    '<form action="index.php?action=updEquipe2" method="POST" enctype="multipart/form-data">'."\n"
    .'    <label class="form-label">Photo</label>
        <input type="file" class="form-control" required="required" name="photo" value="'.$equipier['photo'].'" ><br><br>'."\n"
        .'    <label class="form-label">Nom</label>
             <input type="string" class="form-control" required="required"  name="nom" value="'.$equipier['nom'].'" ><br><br>'."\n"
        .'    <label class="form-label">Prénom</label>
             <input type="string" class="form-control" required="required" name="prenom" value="'.$equipier['prenom'].'" ><br><br>'."\n"
        .'    <label class="form-label">Fonction</label>
             <input type="string" class="form-control" required="required" name="fonction" value="'.$equipier['fonction'].'" ><br><br><br>'."\n"
        .'    <input type="hidden" name="id_equipe" value="'.$equipier['id_equipe'].'">'."\n"
        .'  <button type="submit" class="btn btn-primary mybut" name="btnAjout">Valider</button><br><br><br>'."\n"
    .'</form></div></div></div>'."\n";






    require("vue/gabarit.php");
?>