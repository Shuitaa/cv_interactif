<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link rel="stylesheet" href="../assets/app.css">
    <script type="text/javascript" src="../assets/app.js"></script>
    <title>Laissez moi un petit message !</title>
</head>

<body>

    <?php 
    
    if(isset($_GET['success'])) { //vérification du succés de l'envoi de formulaire
        echo('<script>alert("Message envoyé !")</script>');
    }
    
    ?>
    <!-- en-tête -->
    <header class="header">
        <!-- bar de recherche -->
        <div class="search-bar">
            <div class="search-content"><svg xmlns="http://www.w3.org/2000/svg" width="9.229" height="9.229"
                    viewBox="0 0 9.229 9.229">
                    <path id="Icon_map-search" data-name="Icon map-search"
                        d="M8.193,6.965A3.65,3.65,0,1,0,6.965,8.193l2.476,2.476L10.669,9.44Zm-3.112.369a2.252,2.252,0,1,1,2.253-2.25,2.255,2.255,0,0,1-2.253,2.25Z"
                        transform="translate(-1.44 -1.44)" fill="#849597" /></svg>
                <span class="search-text">Rechercher</span></div>
        </div>
        <!-- menu avec les îcones -->
        <nav class="nav-icon">
            <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 48 48"
                    fill="#262626">
                    <path
                        d="M45.3 48H30c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2-4.6-4.6-4.6s-4.6 2-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.5-.6 2.1 0l21.5 21.5c.4.4.6 1.1.3 1.6 0 .1-.1.1-.1.2v22.8c.1.8-.6 1.5-1.4 1.5zm-13.8-3h12.3V23.4L24 3.6l-20 20V45h12.3V34.2c0-4.3 3.3-7.6 7.6-7.6s7.6 3.3 7.6 7.6V45z">
                    </path>
                </svg>
            </a>

            <a href="#"><svg fill="#262626" style="position:relative;top:2px" xmlns="http://www.w3.org/2000/svg"
                    width="22" height="22" viewBox="0 0 48 48">
                    <path
                        d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l13.2 13c.5.4 1.1.6 1.7.3l16.6-8c.7-.3 1.6-.1 2 .5.4.7.2 1.6-.5 2l-15.6 9.9c-.5.3-.8 1-.7 1.6l4.6 19c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.5-.5.5-1.1.2-1.6z">
                    </path>
                </svg>


            </a>
            <a href="https://www.linkedin.com/in/pierre-averty-996ab5195/"><svg xmlns="http://www.w3.org/2000/svg"
                    width="23.5" height="23.5" viewBox="0 0 23.5 23.5" stroke="#262626">
                    <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in"
                        d="M4.925,22H.363V7.312H4.925ZM2.642,5.309A2.654,2.654,0,1,1,5.283,2.642,2.664,2.664,0,0,1,2.642,5.309ZM22,22H17.444v-7.15c0-1.7-.034-3.889-2.371-3.889-2.371,0-2.735,1.851-2.735,3.767V22H7.782V7.312h4.375v2h.064a4.793,4.793,0,0,1,4.316-2.372c4.616,0,5.465,3.04,5.465,6.988V22Z"
                        transform="translate(0.75 0.749)" fill="none" stroke-width="1.5" /></svg></a>
            <a href="https://github.com/Shuitaa"><svg xmlns="http://www.w3.org/2000/svg" width="22.062" height="23.525"
                    viewBox="0 0 22.062 23.525" stroke="#262626">
                    <path id="Icon_feather-github" data-name="Icon feather-github"
                        d="M10.324,20.321C5.093,21.89,5.093,17.705,3,17.182M17.648,23.46V19.411a3.526,3.526,0,0,0-.984-2.731c3.285-.366,6.738-1.611,6.738-7.324a5.691,5.691,0,0,0-1.569-3.923,5.3,5.3,0,0,0-.095-3.945S20.5,1.122,17.648,3.036a14,14,0,0,0-7.324,0C7.468,1.122,6.233,1.488,6.233,1.488a5.3,5.3,0,0,0-.094,3.944A5.692,5.692,0,0,0,4.569,9.387c0,5.671,3.453,6.916,6.738,7.324a3.526,3.526,0,0,0-.984,2.7V23.46"
                        transform="translate(-2.09 -0.685)" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" /></svg></a>

            <a href="../profil/profil.html"><img class="pp-container" src="../img/pp2.jpg" alt=""></a>
        </nav>
    </header>
    <!-- code de la page principale -->
    <main>
        <!-- div qui centre les éléments -->
        <div class="container" style="margin-top:54px;padding-top:30px">
            <!-- div qui contient le formulaire -->
            <div class="form-container">
                <!-- en-tête du formulaire -->
                <header class="form-header">
                    <h1 class="form-title">Direct</h1>
                    <svg class="icon-write" fill="#262626" height="24" width="24" viewbox="0 0 44 44">
                        <path
                            d="M33.7 44.12H8.5a8.41 8.41 0 01-8.5-8.5v-25.2a8.41 8.41 0 018.5-8.5H23a1.5 1.5 0 010 3H8.5a5.45 5.45 0 00-5.5 5.5v25.2a5.45 5.45 0 005.5 5.5h25.2a5.45 5.45 0 005.5-5.5v-14.5a1.5 1.5 0 013 0v14.5a8.41 8.41 0 01-8.5 8.5z">
                        </path>
                        <path
                            d="M17.5 34.82h-6.7a1.5 1.5 0 01-1.5-1.5v-6.7a1.5 1.5 0 01.44-1.06L34.1 1.26a4.45 4.45 0 016.22 0l2.5 2.5a4.45 4.45 0 010 6.22l-24.3 24.4a1.5 1.5 0 01-1.02.44zm-5.2-3h4.58l23.86-24a1.45 1.45 0 000-2l-2.5-2.5a1.45 1.45 0 00-2 0l-24 23.86z">
                        </path>
                        <path
                            d="M38.2 14.02a1.51 1.51 0 01-1.1-.44l-6.56-6.56a1.5 1.5 0 012.12-2.12l6.6 6.6a1.49 1.49 0 010 2.12 1.51 1.51 0 01-1.06.4z">
                        </path>
                    </svg>
                </header>
                <!-- corps du formulaire -->
                <div class="form-main">
                    <form action="../assets/form.php" method="GET">


                        <input type="text" name="nom" id="nom" placeholder="Nom/Prénom" required class="form-input">


                        <input type="email" name="mail" id="mail" placeholder="Email" required class="form-input">



                        <input type="text" name="objet" id="objet" placeholder="Objet" required class="form-input">


                        <textarea name="comment" id="comment" class="form-input form-textarea" cols="50" rows="100"
                            placeholder="Ajouter un commentaire ..."></textarea>

                        <!-- bouton envoyer -->
                        <button class="form-button"><svg fill="#262626" xmlns="http://www.w3.org/2000/svg" width="34"
                                height="34" viewBox="0 0 48 48">
                                <path
                                    d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                </path>
                            </svg></button>
                </div>
                </form>

            </div>

        </div>
        </div>


    </main>

</body>

</html>