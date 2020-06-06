<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Pierre Averty : CV interactif !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/app.js"></script>
    <link rel="stylesheet" href="assets/app.css">
    <?php $db = new PDO ('mysql:host=localhost;dbname=cv_interactif', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));?>
</head>

<body>
    <header class="header">
        <div class="search-bar">
            <div class="search-content"><svg xmlns="http://www.w3.org/2000/svg" width="9.229" height="9.229"
                    viewBox="0 0 9.229 9.229">
                    <path id="Icon_map-search" data-name="Icon map-search"
                        d="M8.193,6.965A3.65,3.65,0,1,0,6.965,8.193l2.476,2.476L10.669,9.44Zm-3.112.369a2.252,2.252,0,1,1,2.253-2.25,2.255,2.255,0,0,1-2.253,2.25Z"
                        transform="translate(-1.44 -1.44)" fill="#849597" /></svg>
                <span class="search-text">Rechercher</span></div>
        </div>
        <nav class="nav-icon">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 48 48"
                    fill="#262626">
                    <path
                        d="M45.5 48H30.1c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2.1-4.6-4.6-4.6s-4.6 2.1-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.6-.6 2.1 0l21.5 21.5c.3.3.4.7.4 1.1v23.5c.1.8-.6 1.5-1.4 1.5z">
                    </path>
                </svg>
            </a>

            <a href="contact/contact.php"><svg fill="#262626" style="position:relative;top:2px"
                    xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 48 48">
                    <path
                        d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
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

            <a href="profil/profil.html"><img class="pp-container" src="img/pp2.jpg" alt=""></a>
        </nav>
    </header>
    <main>

        <div class="container">

            <section class="section-container">

                <header>
                    <a href="profil/profil.html"><img src="img/pp2.jpg" alt="" class="pp-container2"></a>
                    <div class="name-job-container">
                        <a href="profil/profil.html" class="name">Pierre Averty</a>
                        <h2 class="job">Chef de projet</h2>
                    </div>
                </header>
                <div>
                    <h2 class="interest-title">Centre d'intêrets</h2>
                </div>
                <div class="interest-container">
                    <div><img src="img/arts-pp.png" alt="" class="interest-pp">
                        <div class="interest-content"><span class="name interest">arts</span>
                            <span class="interest-subtitle">Dessin,peinture,fusain</span></div>
                    </div>
                    <div><img src="img/jv-pp.png" alt="" class="interest-pp">
                        <div class="interest-content"><span class="name interest">jeux_video</span>
                            <span class="interest-subtitle">Minecraft,God_of_war,Starcraft 2</span></div>
                    </div>
                    <div><img src="img/voyages-pp.png" alt="" class="interest-pp">
                        <div class="interest-content"><span class="name interest">voyages</span>
                            <span class="interest-subtitle">Japon,Finlande,Prague</span></div>
                    </div>
                    <div><img src="img/nourriture-pp.png" alt="" class="interest-pp">
                        <div class="interest-content"><span class="name interest">nourriture</span>
                            <span class="interest-subtitle">Mexicaine,italienne,japonaise</span></div>
                    </div>
                    <div><img src="img/animjap-pp.png" alt="" class="interest-pp">
                        <div class="interest-content"><span class="name interest">animation_japonaise</span>
                            <span class="interest-subtitle">Vinland_Saga,hunterXhunter</span></div>
                    </div>
                </div>


            </section>

            <div class="skill-container">


                <div class="button-next"></div>
                <div class="button-previous"></div>



                <div class="skill-content">
                    <svg class="skill">
                        <circle id="xd" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/xd-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">adobe_xd</span>
                </div>


                <div class="skill-content">
                    <svg class="skill">
                        <circle id="photoshop" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/ps-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">photoshop</span>
                </div>


                <div class="skill-content">
                    <svg class="skill">
                        <circle id="indesign" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/id-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">indesign</span>
                </div>


                <div class="skill-content">
                    <svg class="skill">
                        <circle id="illustrator" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/ai-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">illustrator</span>
                </div>


                <div class="skill-content">
                    <svg class="skill">
                        <circle id="premiere" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/pr-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">premiere_pro</span>
                </div class="skill-content">

                <div class="skill-content">
                    <svg class="skill">
                        <circle id="html" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/html-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">html</span>
                </div>

                <div class="skill-content">
                    <svg class="skill">
                        <circle id="css" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/css-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">css</span>
                </div>

                <div class="skill-content">
                    <svg class="skill">
                        <circle id="jquery" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/js-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">js_jquery</span>
                </div>

                <div class="skill-content">
                    <svg class="skill">
                        <circle id="php" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/php-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">php</span>
                </div>

                <div class="skill-content">
                    <svg class="skill">
                        <circle id="sql" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/sql-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">sql</span>
                </div>

                <div class="skill-content">
                    <svg class="skill">
                        <circle id="anglais" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/an-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">anglais</span>
                </div>

                <div class="skill-content">
                    <svg class="skill">
                        <circle id="espagnol" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/esp-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">espagnol</span>
                </div>

                <div class="skill-content">
                    <svg class="skill">
                        <circle id="chinois" class="circle-skill" cx="29" cy="29" r="29"></circle>
                        <circle cx="29" cy="29" r="29"></circle>
                    </svg>
                    <img src="img/ch-pp.png" alt="" class="skill-pp">
                    <span class="skill-name">chinois</span>
                </div>

            </div>

            <?php
            $getip = $_SERVER['REMOTE_ADDR'];
            $stmt = $db -> prepare('SELECT entreprise_nom, experience_description, experience_date, id  FROM article');
            $stmt -> execute();

            while ($data = $stmt -> fetch()){
                $likes_index = $db -> prepare('SELECT * FROM likes WHERE id_article = ?');
                $likes_index -> execute(array($data['id']));
                $likes_index = $likes_index -> rowCount();

                $likes_check = $db -> prepare('SELECT id FROM likes WHERE id_article = ? AND ip_utilisateur = ?');
                $likes_check -> execute(array($data['id'],$getip));
                
                echo('<article class="experience-container">
                    <header class="experience-header"><img src="img/pp-'.$data['id'].'.jpg" alt="" class="experience-pp">
                        <div class="experience-header-content"><span class="experience-name">'.$data['entreprise_nom'].'</span><svg
                                xmlns="http://www.w3.org/2000/svg" width="23" height="5" viewBox="0 0 17 5"
                                class="experience-more" style="cursor:pointer">
                                <g id="Groupe_12" data-name="Groupe 12" transform="translate(-830 -250)">
                                    <circle id="Ellipse_15" data-name="Ellipse 15" cx="1.5" cy="1.5" r="1.5"
                                        transform="translate(830 250)" fill="#262626" />
                                    <circle id="Ellipse_16" data-name="Ellipse 16" cx="1.5" cy="1.5" r="1.5"
                                        transform="translate(836 250)" fill="#262626" />
                                    <circle id="Ellipse_17" data-name="Ellipse 17" cx="1.5" cy="1.5" r="1.5"
                                        transform="translate(842 250)" fill="#262626" />
                                </g>
                            </svg></div>
                    </header>
                    <img class="experience-img" src="img/img-'.$data['id'].'.jpg" alt="">
                    <footer class="experience-footer">
                        <div class="experience-icon-container">
                            <span><button id="'.$data['id'].'" class="experience-icon">');
                            if ($likes_check->rowCount() == 1 ){
                                    echo('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><path fill="#ed4956" d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>');
                                } elseif ($likes_check->rowCount() == 0) { 
                                    echo ('<svg fill="#262626" id="heart-'.$data['id'].'" xmlns="http://www.w3.org/2000/svg" width="24"height="24" viewBox="0 0 48 48"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>');
                                }
                                echo('
                                    
                                    </button>
                            </span>
                            <span><button class="experience-icon"><svg fill="#262626" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 48 48">
                                        <path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path>
                                    </svg></button>
                            </span>
                            <span><button class="experience-icon"><svg fill="#262626" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 48 48">
                                        <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path>
                                    </svg></button>
                            </span>
                            <span><button class="experience-icon icon-left"><svg fill="#262626" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 48 48">
                                        <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path>
                                    </svg>
                                </button></span>
                        </div>
                        <div class="like-container footer-name-text"><span id="like-'.$data['id'].'">'.$likes_index.' </span>likes</div>
                        <div class="experience-text-container"><a href="profil/profil.html" class="footer-name-text">Pierre
                                averty</a> <span class="experience-text">'.$data['experience_description'].'</span></div>
                        <div class="experience-date-container"><span class="date-text">'.$data['experience_date'].'</span></div>
                        <section class="experience-comment-container"><span class="experience-comment-text">Ajouter un commentaire ...</span><span class="experience-comment-post">Post</span></section>
                    </footer>
                </article>');
                }       
            ?>

        </div>


    </main>
</body>

</html>