<?php include("resources/formulaire.php"); ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mon portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/particles.js"></script>
        <link rel="icon" href="images/icon.ico">
    </head>
    <body>
        <header>
            <!--Navbar attaché en haut de notre écran-->
            <nav class="navbar navbar-expand-lg fixed-top bg-navbar">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand text-light" href="#">Mon portfolio</a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link nav-hover glow-white" aria-current="page" href="#home">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-hover glow-white" href="#about">A propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-hover glow-white" href="#projects">Projets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-hover glow-white" href="#contact">Contact</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <a href="login.php" class="nav-link nav-hover glow-white me-5">Se connecter</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!--Chaque section permet un scroll fluide de la page-->
        <div class="container-section">
            <section id="home">
                <div id="particles-js"></div>
                <div class="h-100 position-relative top-50 translate-middle-y">
                    <h1 class="position-relative text-center glow-white fw-bold">Accueil</h1>
                    <!--On place une grille pour structurer la page-->
                    <div id="hello" class="row justify-content-md-center w-75 px-4 m-auto position-relative translate-middle-y top-50 text-shadow">
                        <div class="col-sm text-light">
                            <h2>Bonjour</h2>
                            <p class="text-wrap">
                                Je suis un étudiant au Gaming Campus.<br>
                                J'adore jouer à Rocket League aussi et je suis passionné de jeux vidéo.<br>
                                Je suis également Directeur Vidéoludique dans une équipe Esport.
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <img src="images/user.png" class="img-thumbnail" alt="J'ai pas chargé">
                        </div>
                    </div>
                </div>
            </section>
            <section id="about">
                <div class="h-100 position-relative top-50 translate-middle-y">
                    <h2 class="position-relative text-center glow-white fw-bold">A propos</h2>
                    <div class="container text-shadow">
                        <!--Cette grille permet egalement l'affichage à droite et à gauche pour mieux structurer les parties de la section-->
                        <div class="row text-light">
                            <div class="col">
                                <h3 class="fw-bold"><i class="bi bi-code-slash"></i> Talents</h3>
                                <h4>After Effects</h4>
                                <div class="progress rounded-pill pg-skill">
                                    <div id="aftereffects" class="progress-bar"></div>
                                </div>
                                <h4>Premiere Pro</h4>
                                <div class="progress rounded-pill pg-skill">
                                    <div id="premierepro" class="progress-bar"></div>
                                </div>
                                <h3 class="fw-bold mt-3"><i class="bi bi-globe2"></i> Langues</h3>
                                <h4>Anglais</h4>
                                <div class="progress rounded-pill pg-skill">
                                    <div id="english" class="progress-bar"></div>
                                </div>
                                <h4>Espagnol</h4>
                                <div class="progress rounded-pill pg-skill">
                                    <div id="spanish" class="progress-bar"></div>
                                </div>
                                <h4>Italien</h4>
                                <div class="progress rounded-pill pg-skill">
                                    <div id="italian" class="progress-bar"></div>
                                </div>
                                <h3 class="fw-bold mt-3"><i class="bi bi-mortarboard"></i> Études</h3>
                                <h4>École maternelle</h4>
                                <p>Il y avait des légos c'était cool.</p>
                                <h4>École primaire</h4>
                                <p>L'école le samedi matin plus jamais.</p>
                                <h4>Collège</h4>
                                <p>Les cours de musiques avec les djembés dès 8h du matin.</p>
                                <h4>Lycée</h4>
                                <p>J'ai eu le bac je crois.</p>
                            </div>
                            <div class="col-6">
                                <h3 class="fw-bold"><i class="bi bi-briefcase"></i> Expérience professionnelle</h3>
                                <h4>Administrateur et Astronaute /NASA <i class="bi bi-calendar-fill m-3"></i> 2023 - 2027</h4>
                                <p>C'est vraiment le plus gros mensonge possible mais il faut y croire car l'espoir fait vivre.</p>
                                <h4>Directeur de production /Ubisoft <i class="bi bi-calendar-fill m-3"></i> 2027 - 2032</h4>
                                <p>C'est toujours un mensonge mais au moins il est plus crédible que l'autre.</p>
                                <h4>Rédacteur /Wikipédia <i class="bi bi-calendar-fill m-3"></i> 2033 - 2035</h4>
                                <p>C'est vraiment un excéllent métier, par contre la vraie question c'est comment se renseigner car d'habitude c'est Wikipédia qui nous renseigne...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="projects">
                <div class="h-100 position-relative top-50 translate-middle-y">
                    <h2 class="position-relative text-center glow-white fw-bold">Projets</h2>
                    <div class="position-relative w-50 m-auto">
                        <!--Le carousel permet de défiler des images ou des vidéos sur une seule partie de la page-->
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <video controls width=100% height=100%>
                                        <source class="d-block vh-100" src="videos/saoggoconcept.mp4" type="video/mp4">
                                    </video>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Jeu VR basé sur SAO GGO</h3>
                                        <p>Ce concept est mon premier projet sur Unity.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <video controls width=100% height=100%>
                                        <source class="d-block vh-100" src="videos/robloxai.mp4" type="video/mp4">
                                    </video>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Test combat IA Roblox</h3>
                                        <p>IA conçus pour un projet d'un jeu en ligne.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev h-50 my-auto" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next h-50 my-auto" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact">
                <div class="h-100 position-relative top-50 translate-middle-y">
                    <h2 class="position-relative text-center glow-white fw-bold">Contact</h2>
                    <div class="position-relative mh-100 text-shadow">
                        <p class="text-light text-center text-wrap pt-4 m-auto">
                            N'hésitez pas à me contacter si vous avez une question ou un projet.<br>
                            Je suis un peu submergé par le travail, mais je reste à l'écoute pour des projets intéressants
                        </p>
                        <div class="container text-center pt-4 vh-100">
                            <div class="row justify-content-md-center">
                                <div class="col-sm">
                                    <p class="text-light">
                                        <span class="fw-bold">Mon numéro de téléphone</span><br>
                                        01 23 45 67 89
                                    </p>
                                </div>
                                <div class="col-sm">
                                    <p class="text-light">
                                        <span class="fw-bold">Mon email</span><br>
                                        jaipasdemail@mail.com
                                    </p>
                                </div>
                                <div class="col-sm">
                                    <p class="text-light">
                                        <span class="fw-bold">LinkedIn</span><br>
                                        J'en ai pas
                                    </p>
                                </div>
                            </div>
                            <form method="post" class="text-light w-50 mx-auto">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                    <input name="lastname" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Obligatoire">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                                    <input name="firstname" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Obligatoire">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Obligatoire (nom@exemple.com)">
                                    <div id="emailHelp" class="form-text text-light">Votre adresse email restera privée.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                                    <input name="telephone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Obligatoire (0123456789)">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea name="message" type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Obligatoire" rows="3"></textarea>
                                </div>
                                <button type="submit" name="sendmail" class="btn btn-primary">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>