
<?php
    // Prépare les variables pour le gabarit
    $titrePage = "";
    $descriptionPage = "";
    $contenuPage = "";
    if(isset($_POST['titre']))
        $titrePage = $_POST['titre'];
    if(isset($_POST['description']))
        $descriptionPage = $_POST['description'];
        if(isset($_POST['contenu']))
        $contenuPage = $_POST['contenu'];
    $contenu = 
    '<div class="dashboard-container">
    <div class="container">
    <br><br>
    <div class="container">
    <br><br><h1>Ajouter une page :</h1> <br>
    </div>'.
    '<form action="index.php" method="POST">'."\n"
        .'  <label class="form-label">Titre</label>
            <input type="string" class="form-control" required="required"  name="titre" ><br><br>'."\n"
        .'  <label class="form-label">Description</label>
            <input type="string" class="form-control" required="required" name="description" ><br><br>'."\n"
        .'  <label class="form-label">Contenu</label>
            <textarea name="summernote" id="summernote" class="form-control" rows="4"></textarea>
            <br><br><br>'."\n"
        .'    <input type="hidden" name="action" value="MAJajoutPage">'."\n"
        .'    <button class="btn btn-primary mybut" onclick=window.location.href="index.php?action=listPages">Retour à la liste des pages</button>'."\n"
        .'    <input type="submit" name="submit" class="btn btn-primary mybut" value="Valider">'."\n"
    .'</form></br></br></br></div></div></div>'."\n";






    require("vue/gabarit.php");
?>