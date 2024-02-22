
<?php
    
    $contenu = 
    '<div class="dashboard-container">
    <div class="container">
    <br><br>
    <div class="container">
        <h1>Modifier une référence :</h1> <br>
    </div>'.
    '<form action="index.php?action=updRef2" method="POST" enctype="multipart/form-data">'."\n"
    .'    <label class="form-label">Photo</label>
        <input type="file" class="form-control" required="required" name="photo" value="'.$reference['photo'].'" ><br><br>'."\n"
        .'    <label class="form-label">Nom</label>
             <input type="string" class="form-control" required="required"  name="nom" value="'.$reference['nom'].'" ><br><br>'."\n"
        .'    <label class="form-label">Description</label>
             <input type="string" class="form-control" required="required" name="description" value="'.$reference['description'].'" ><br><br>'."\n"
        .'    <input type="hidden" name="id_reference" value="'.$reference['id_reference'].'">'."\n"
        .'  <button type="submit" class="btn btn-primary mybut" name="btnAjout">Valider</button>'."\n"
    .'</form></div></div></div>'."\n";






    require("vue/gabarit.php");
?>