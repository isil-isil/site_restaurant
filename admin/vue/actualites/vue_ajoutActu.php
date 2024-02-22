
<?php
    // Prépare les variables pour le gabarit
    $nomActu = "";
    $descriptionActu = "";
    $contenuActu = "";
    if(isset($_POST['nom_actu']))
        $nomActu= $_POST['nom_actu'];
    if(isset($_POST['description']))
        $descriptionActu = $_POST['description'];
    if(isset($_POST['contenuActu']))
    $contenuActu = $_POST['contenuActu'];
        
    $contenu = 
    '<div class="dashboard-container">
        <div class="container"><br><br>
            <div class="container">
                <h1>Ajouter une actualité :</h1> <br>
            </div>'.
            '<form action="index.php" method="POST">'."\n"
            .'    <label class="form-label">Nom</label>
                    <input type="string" class="form-control" required="required" name="nom_actu"><br><br>'."\n"
            .'    <label class="form-label">Description</label>
                    <input type="string" class="form-control" required="required" name="description"><br><br>'."\n"
            .'    <label class="form-label">Contenu</label>
                    <textarea name="contenuActu" id="summernote" class="form-control" rows="4"></textarea><br><br>'."\n"
            .'    <label class="form-label">Date de début de publication</label>
                    <input type="datetime-local" required="required" name="date_debut_publication"><br><br>'."\n"
            .'    <label class="form-label">Date de fin de publication</label>
                    <input type="datetime-local" required="required" name="date_fin_publication"><br><br>'."\n"
            .'    <input type="hidden" name="action" value="MAJajoutActu">'."\n"
            .'    <button class="btn btn-primary" onclick=window.location.href="index.php?action=listActu">Retour à la liste des actualités</button>'."\n"
            .'    <input type="submit" class="btn btn-primary" value="Valider">'."\n"
            .'</form></br></br></br>
            </div>
        </div>'."\n";






    require("vue/gabarit.php");
?>