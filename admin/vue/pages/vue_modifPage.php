
<?php
    
    $contenu = 
    '<div class="dashboard-container">
    <div class="container">
    <br><br>
    <div class="container">
    <br><br><h1>Modifier une page :</h1> <br>
    </div>'.
    '<form action="index.php" method="POST">'."\n"
        .'    <label class="form-label">Titre</label>
            <input type="string" class="form-control" required="required"  name="titre" value="'.$page['titre'].'" ><br><br>'."\n"
        .'    <label class="form-label">Description</label>
             <input type="string" class="form-control" required="required" name="description" value="'.$page['description'].'" ><br><br>'."\n"
        .'    <label class="form-label">Contenu</label>
        <textarea name="contenu" id="summernote" cols="30" rows="50" > '.$page["contenu"].' </textarea><br><br><br>'."\n"
        .'    <input type="hidden" name="action" value="MAJupdPage">'."\n"
        .'    <input type="hidden" name="id_page" value="'.$page['id_page'].'">'."\n"
        .'    <input type="submit" class="btn btn-primary mybut" value="Valider">'."\n"
    .'</form></div></br></br></br></div></div>'."\n";






    require("vue/gabarit.php");
?>