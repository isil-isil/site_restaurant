<?php
require_once("connect.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Albearson</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Rubik+Mono+One">
    <link rel="stylesheet" href="assets/style.css">
    
    <style>
        body {
            font-family: 'Raleway', 'Arial', 'Helvetica', 'sans-serif';
        }
        .titre-rouge {
            font-family: 'Rubik Mono One', 'Arial', 'Helvetica', 'sans-serif';
            color: #e22401;
        }  
    </style>
      
</head>


<body>


    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand theme-accent-color" href="#">THE <span class="titre-rouge"> ALBEARSON</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#section1"><span class="titre-rouge fw-bold"> A PROPOS</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#section2">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#section3">EQUIPE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#section4">PAGES BDD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#section5">REFERENCES BDD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#section6">ACTUALITES BDD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#section7">RETROUVEZ-NOUS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Page d'accueil -->
    <header class="accueil">
    <div class="d-flex justify-content-center mb-4">
                    <a href="#" class="me-3 text-white">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="me-3 text-white">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#" class="me-3 text-white">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="me-3 text-white">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>
        <div class="image-container" id="imageLogo">
            <img src="medias/images/logoresto.jpg" alt="Image d'accueil">
        </div>
    </header>


    <!-- Pages suivantes -->
    <br><br>
    <section id="section1" class="section1">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold text-white">Votre restaurant japonais situé à Lorem Ipsum</h2><br>
            <h4 class="text-center mb-5 fw-bold">Spécialisé dans la cuisine japonaise, nous proposons un large choix de plats dont les ingrédients sont sélectionnés avec rigueur. Au déjeuner ou au dîner, venez vivre un pur moment de détente.</h4>
            <h2 class="text-center fw-bold text-white">DECOUVREZ NOS SPECIALITES DU MOMENT</h2><br>   
            <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-transparent">
                            <h3 class="card-title text-white">Sushi <span class="titre-rouge">IPSUM</span></h3>
                            <img class="card-img-top" src="medias/images/sushi 1.jpg" alt="Image 1">
                            <div class="card-body">
                                <h4 class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique congue enim ac eleifend.</h4>
                                <p class="card-text"><span class="titre-rouge">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique congue enim ac eleifend.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-transparent">
                            <h3 class="card-title text-white">Sushi <span class="titre-rouge">IPSUM</span></h3>
                            <img class="card-img-top" src="medias/images/sushi 1.jpg" alt="Image 2">
                            <div class="card-body">
                                <h4 class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique congue enim ac eleifend.</h4>
                                <p class="card-text"><span class="titre-rouge">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique congue enim ac eleifend.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section id="section2" class="section2"><br><br><br>
        <div class="container">
            <h1 class="text-center"><span class="titre-rouge">MENU</span></h1><br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title fw-bold text-dark">LOREM IPSUM 10€</h2>
                            <p class="card-text text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum faucibus orci, quis gravida nisi pulvinar id.</p>
                            <a href="#" class="btn btn-outline-danger ms-auto">Détails</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title fw-bold text-dark">LOREM IPSUM 10€</h2>
                            <p class="card-text text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum faucibus orci, quis gravida nisi pulvinar id.</p>
                            <a href="#" class="btn btn-outline-danger ms-auto">Détails</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title fw-bold text-dark">LOREM IPSUM 10€</h2>
                            <p class="card-text text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum faucibus orci, quis gravida nisi pulvinar id.</p>
                            <a href="#" class="btn btn-outline-danger ms-auto">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second-row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title fw-bold text-dark">LOREM IPSUM 10€</h2>
                            <p class="card-text text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum faucibus orci, quis gravida nisi pulvinar id.</p>
                            <a href="#" class="btn btn-outline-danger ms-auto">Détails</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title fw-bold text-dark">LOREM IPSUM 10€</h2>
                            <p class="card-text text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum faucibus orci, quis gravida nisi pulvinar id.</p>
                            <a href="#" class="btn btn-outline-danger ms-auto">Détails</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title fw-bold text-dark">LOREM IPSUM 10€</h2>
                            <p class="card-text text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum faucibus orci, quis gravida nisi pulvinar id.</p>
                            <a href="#" class="btn btn-outline-danger ms-auto">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section3" class="section3"><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center titre-rouge">Notre Equipe</h1>
                    <h4 class="text-center fw-bold text-white">Un visuel de votre prochain site, proposé par la société Albearson</h4>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <img src="medias\images\chef 1.png" alt="Image 1" class="img-fluid mt-3">
                    <h3 class="mt-3 titre-rouge">Chef 1</h3>
                    <p class="mt-3 fw-bold text-white">Un visuel de votre prochain site, proposé par la société Albearson</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="medias\images\chef 1.png" alt="Image 2" class="img-fluid mt-3">
                    <h3 class="mt-3 titre-rouge">Chef 2</h3>
                    <p class="mt-3 fw-bold text-white">Un visuel de votre prochain site, proposé par la société Albearson</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="medias\images\chef 1.png" alt="Image 3" class="img-fluid mt-3">
                    <h3 class="mt-3 titre-rouge">Chef 3</h3>
                    <p class="mt-3 fw-bold text-white">Un visuel de votre prochain site, proposé par la société Albearson</p>
                </div>
            </div>
        </div>

    </section>

    <br><br><br>

    <!-- AFFICHAGE DES PAGES CREES EN BACK OFFICE -->
 
    <section id="section4" class="section4"><br><br><br>
            <div class="container">
                <h1 class="text-center"><span class="titre-rouge">PAGES issues de la BDD</span></h1><br><br>
                <?php foreach ($tPage as $page): ?>
                    <div class="row">
                        <div class="col-md-12 text-white ">
                            <h1 class="text-center titre-rouge"><?= $page["titre"] ?></h1>
                            <p class="text-center fw-bold text-white"><?= $page["description"] ?></p>
                            <p><?= $page["contenu"] ?></p>   
                        </div>
                    </div><br><br><br>
                <?php endforeach; ?>  
            </div>            
    </section>
        


<!-- AFFICHAGE DES REFERENCES CREES EN BACK OFFICE -->
    <section id="section5" class="section5"><br><br>
        <div class="container">
            <h1 class="text-center"><span class="titre-rouge">REFERENCE</span></h1><br><br>
            <div class="row">
                <?php foreach ($tRef as $ref): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title text-dark fw-bold"><?= $ref["nom"] ?></h2>
                                <div class="card-text text-dark"><?= $ref["description"] ?></div>
                                <img src="../admin/uploads/imagesRef/<?= $ref["photo"] ?>" style="width:10em;height:5em" alt="photo de la référence"><br><br>
                                <!-- <a href="#" class="btn btn-primary ms-auto">Détails</a><br><br> -->
                            </div> 
                        </div><br> 
                    </div>        
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <br><br><br>

    
<!-- AFFICHAGE DES ACTUS CREES EN BACK OFFICE -->
    <section id="section6" class="section6"><br><br><br>
        <div class="container">
            <h1 class="text-center"><span class="titre-rouge">ACTUALITES</span></h1><br><br>
            <div class="row">
                <?php foreach ($tActu as $actu): ?>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title text-dark fw-bold"><?= $actu["nom_actu"] ?></h2>
                                <p class="card-text text-dark"><?= $actu["description"] ?></p>
                                <p class="card-text text-dark fst-italic">Publié le <?= $actu["date_actu"] ?></p>
                                <!-- Bouton -->
                                <button type="button" class="btn btn-outline-danger mx-auto" 
                                data-bs-toggle="modal" data-bs-target="#modal<?= $actu['id_actu'] ?>">Lire</button>
                                <!-- Modal -->
                                <div class="modal fade" data-bs-backdrop="static" id="modal<?= $actu['id_actu'] ?>">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark" aria-labelledby="modal title"><?= $actu["nom_actu"] ?></h5>
                                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-dark" aria-describedby="content">
                                                <?= $actu["contenu"] ?>
                                            </div>
                                            <div class="modal-footer"> 
                                                <button class="btn btn-secondary mx-auto"data-bs-dismiss="modal">Merci pour l'info !</button>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin modal -->
                            </div>
                        </div><br>
                    </div>            
                <?php endforeach; ?>
            </div>  <br><br><br>
        </div>  <br><br><br>
    </section>

    <br><br><br>

    <!-- Dernière page et Footer -->
    <section id="section7" class="section7"><br><br><br> 

        <div class="container text-white">  <br><br><br>
            <h1 class="text-center mb-5 titre-rouge">Lorem Ipsum</h1> <br><br><br>
            <h4 class="text-center mb-5">Un visuel de votre prochain site, proposé par la société Albearson</h4>
            <div class="row">
                <div class="col-4">
                    <div class="d-flex mb-4">
                        <div>
                            <div class="titre-rouge">TELEPHONE</div>
                            <div>+33 1 23 45 67 89</div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex mb-4">
                        <div>
                            <div class="titre-rouge">RETROUVEZ-NOUS</div>
                            <div>123 Rue du Lorem Ipsum, 75001 Paris</div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex mb-4">
                        <div>
                            <div class="titre-rouge">HORAIRES </div>
                            <div>
                                <div>Lundi : Fermé<br>
                                    Mardi, Mercredi et Jeudi : En congé<br>
                                    Vendredi : Peut-être ouvert<br>
                                    Samedi : On verra<br>
                                    Dimanche : Repos</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

        <footer class="footer">
            <div class="container py-4">
                <div class="d-flex justify-content-center mb-4">
                    <a href="#" class="me-3 text-white">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="me-3 text-white">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#" class="me-3 text-white">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="me-3 text-white">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>

                <hr class="mb-4">
                <div class="text-center text-white">
                    The Albearson | Mentions légales | Politique de confidentialités | Plan du site
                </div>
            </div>

        </footer>
    </section>
        
    <!-- Icône pour remonter en haut de la page -->
    <a href="#top" class="scroll-to-top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg></i></a>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

