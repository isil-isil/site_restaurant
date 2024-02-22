
<?php

    $contenu = 
    '<div class="dashboard-container">
    <div class="container">
    <br><br>
    <div class="container">
    <br><br><h1>Modifier un utilisateur :</h1> <br>
    </div>'.
    '<form action="index.php" method="get">'."\n"
        .'     <label class="form-label">Nom</label>
             <input type="string" class="form-control" required="required"  name="nom" value="'.$user['nom'].'" ><br><br>'."\n"
        .'     <label class="form-label">Prénom</label>
            <input type="string" class="form-control" required="required" name="prenom" value="'.$user['prenom'].'" ><br><br>'."\n"
        .'     <label class="form-label">Login</label>
             <input type="string" class="form-control" required="required" name="login" value="'.$user['login'].'" ><br><br>'."\n"
        .'     <label class="form-label">E-mail</label>
             <input type="string" class="form-control" required="required" name="email" value="'.$user['email'].'" ><br><br><br>'."\n"
        .'    <input type="hidden" name="action" value="MAJupdUser">'."\n"
        .'    <input type="hidden" name="id" value="'.$user['id'].'">'."\n"
        .'    <input type="submit" class="btn btn-primary mybut" value="Valider">'."\n"
    .'</form></div></div></div>'."\n";






    require("vue/gabarit.php");
?>