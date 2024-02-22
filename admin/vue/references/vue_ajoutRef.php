
<?php
        
    $contenu = 
    '<div class="dashboard-container">
    <div class="container">
    <br><br>
    <div class="container">
        <h1>Ajouter une référence :</h1> <br>
    </div>'.
    '<form action="index.php?action=addRef2" method="POST" enctype="multipart/form-data">'."\n"
        .'  <label class="form-label">Nom</label>
            <input type="string" class="form-control" required="required"  name="nom" ><br><br>'."\n"
        .'  <label class="form-label">Description</label>
            <input type="string" class="form-control" required="required" name="description" ><br><br>'."\n"
        .'    <input type="file" name="img"><br><br>'."\n"
        .'    <button class="btn btn-primary mybut" onclick=window.location.href="index.php?action=listReference">Retour à la liste des références</button>'."\n"
        .'   <button type="submit" class="btn btn-primary mybut" name="btnAjout">Valider</button>'."\n"
    .'</form></div></div></div>'."\n";






    require("vue/gabarit.php");
?>