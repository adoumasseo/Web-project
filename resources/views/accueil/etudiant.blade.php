<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page d'accueil Etudiant</title>
</head>
<body>

    <nav class="navbar">
        <a href="#" class="logo">Logo</a>
        <div class="nav-links">
            <ul>
                <li class="active"> <a href="{{ route('index') }}">Accueil</a> </li>
                <li> <a href="{{ route('form') }}">Connexion</a> </li>
                <li> <a href="{{ route('etat') }}">Inscription</a> </li>
                <li> <a href="{{ route('formation') }}">Formation</a> </li>
            </ul>
        </div>
        <div class="search-bar">
            <input type="search" name="search-input" id="search-input">
            <ion-icon name="search-outline" class="search-icon"></ion-icon>
        </div>

        <ion-icon name="menu"  class="menu-hamburger"></ion-icon>
    </nav>


    <div class="container">

        <div class="previews-notifs-container">
            <div class="notifs-previews">
                <div class="notif-container">
                    <div class="notif-icon">
                        <ion-icon name="notifications"></ion-icon>
                    </div>
                    <div class="all-notifs">
                        <h3>Notifications</h3>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet. Lorem, ipsum dolor.</p>
                        </div>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="notif">
                            <h4>Title</h4>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="notifs-views">
                <div class="notif-views-header">
                    <h3>Title</h3>
                </div>
                <div class="notif-views-content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero possimus autem beatae fugiat porro exercitationem sunt debitis laudantium voluptatibus quo!
                    </p>
                </div>
                <button class="btn" id="close-notifs-views">Close</button>
            </div>
        </div>

        <button class="btn transparent" id="back-home">Retour</button>

        <div class="infos-container">
            <div class="info left-info">
                <div class="content">
                    <h2>Bienvenue John</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto impedit fuga autem quod tempore accusamus.</p>
                    <button class="btn transparent" id="notifs-btn">Notifs</button>
                    <button class="btn transparent modal-btn modal-trigger" id="marks-btn">Mes Notes</button>

                    <img src="./images/undraw_mathematics_-4-otb.svg" alt="" class="image">
                </div>
            </div>

            <div class="news-previews">
                <div class="news-container">
                    <div class="news-news">
                        <h3><ion-icon name="newspaper-outline"></ion-icon>News</h3>
                        <div class="news">
                            <h4>News Title(Un titre beaucoup plus long bien sur)</h4>
                            <div class="news-image">
                                <img src="./images/3d-kub-skhema-chipi-svechenie-neon-101725.jpeg">
                            </div>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni velit non fugiat ab ea veniam tenetur quis sit voluptate voluptatum debitis, accusamus recusandae id dolorum odio animi laboriosam veritatis magnam iusto dolore. Beatae facere eos libero tempore quas nostrum, ratione aliquid vero dignissimos laborum. Rerum eligendi impedit ullam reprehenderit suscipit.</p>
                        </div>
                        <div class="news">
                            <h4>News Title (Un titre beaucoup plus long bien sur)</h4>
                            <div class="news-image">
                                <img src="./images/wallpaperflare.com_wallpaper (24).jpg">
                            </div>
                            <p class="notif-content-previews">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem perspiciatis cumque aspernatur aliquam omnis quibusdam, placeat temporibus dolorem magnam doloremque modi explicabo doloribus culpa minima.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-container">
        <div class="overlay modal-trigger"></div>
        <div class="modal">
            <button class="close-modal modal-trigger">X</button>

            <h1>Bulletin Scolaire</h1>
            <h4 class="lycee-name">Nom du lycée</h4>
            <div class="infos-eleve">
                <div class="eleve-content">
                    <div class="info nom"><span>Nom:</span> John Snow</div>
                    <hr>
                </div>
                <div class="eleve-content">
                    <div class="info annee"><span>Année:</span> 755-756</div>
                    <hr>
                </div>
                <div class="eleve-content">
                    <div class="info conseiller"><span>Conseiller:</span> Jamie Lanister</div>
                    <hr>
                </div>
                <div class="eleve-content">
                    <div class="info periode-notation"><span>Période de notation:</span> Hiver</div>
                    <hr>
                </div>
            </div>

            <div class="bulletin head">
                <div class="bulletin-component">Matière</div>
                <div class="bulletin-component">Interrogation</div>
                <div class="bulletin-component">Devoir</div>
                <div class="bulletin-component">Composition</div>
                <div class="bulletin-component">Moyenne</div>
            </div>

            <div class="bulletin line">
                <div class="bulletin-component">Français</div>
                <div class="bulletin-component interrogation">
                    <div class="interro">12</div>
                    <div class="interro">15</div>
                    <div class="interro">18</div>
                </div>
                <div class="bulletin-component">15</div>
                <div class="bulletin-component">16</div>
                <div class="bulletin-component">15,33</div>
            </div>
            <div class="bulletin line">
                <div class="bulletin-component">Science de la Vie et de la Terre</div>
                <div class="bulletin-component interrogation">
                    <div class="interro"></div>
                    <div class="interro"></div>
                    <div class="interro"></div>
                </div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
            </div>
            <div class="bulletin line">
                <div class="bulletin-component">Mathématique</div>
                <div class="bulletin-component interrogation">
                    <div class="interro"></div>
                    <div class="interro"></div>
                    <div class="interro"></div>
                </div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
            </div>
            <div class="bulletin line">
                <div class="bulletin-component">Anglais</div>
                <div class="bulletin-component interrogation">
                    <div class="interro"></div>
                    <div class="interro"></div>
                    <div class="interro"></div>
                </div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
            </div>
            <div class="bulletin line">
                <div class="bulletin-component">Physique Chimie et Technologie</div>
                <div class="bulletin-component interrogation">
                    <div class="interro"></div>
                    <div class="interro"></div>
                    <div class="interro"></div>
                </div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
            </div>
            <div class="bulletin line">
                <div class="bulletin-component">Histoire-Géographie</div>
                <div class="bulletin-component interrogation">
                    <div class="interro"></div>
                    <div class="interro"></div>
                    <div class="interro"></div>
                </div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
            </div>
            <div class="bulletin line">
                <div class="bulletin-component">Phylosophie</div>
                <div class="bulletin-component interrogation">
                    <div class="interro"></div>
                    <div class="interro"></div>
                    <div class="interro"></div>
                </div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
            </div>
            <div class="bulletin line">
                <div class="bulletin-component">Economie Familiale et Sociale</div>
                <div class="bulletin-component interrogation">
                    <div class="interro"></div>
                    <div class="interro"></div>
                    <div class="interro"></div>
                </div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
            </div>
            <div class="bulletin line">
                <div class="bulletin-component">Education Physique et Sportive</div>
                <div class="bulletin-component interrogation">
                    <div class="interro"></div>
                    <div class="interro"></div>
                    <div class="interro"></div>
                </div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
                <div class="bulletin-component"></div>
            </div>

            <div class="bulletin-footer">
                <div class="appreciation">
                    <h4>Appréciation</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="moyennes">
                    <div class="moy moyG">
                        <h4>Moyenne Générale</h4>
                        <p class="moyenne">15</p>
                    </div>
                    <div class="moy rang">
                        <h4>Rang</h4>
                        <p class="moyenne">10ème</p>
                    </div>
                    <div class="moy pf-moy">
                        <h4>Plus forte moyenne</h4>
                        <p class="moyenne">18</p>
                    </div>
                    <div class="moy pfbl-moy">
                        <h4>Plus faible moyenne</h4>
                        <p class="moyenne">11</p>
                    </div>
                    <div class="moy moy-classe">
                        <h4>Moyenne de la classe</h4>
                        <p class="moyenne">14</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="contenu-footer">

            <div class="bloc footer-services">
                <h3> RESOURCES</h3>
                <ul class="liste-formation">
                    <li> <a href="#">Application</a> </li>
                    <li> <a href="#">Documentation</a> </li>
                    <li> <a href="#">Systems</a> </li>
                    <li> <a href="#">FAQ</a> </li>
                </ul>
            </div>

            <div class="bloc footer-services">
                <h3> PRICING</h3>
                <ul class="liste-formation">
                    <li> <a href="#">Overview</a> </li>
                    <li> <a href="#">Premium Plans</a> </li>
                    <li> <a href="#">Affiliate Program</a> </li>
                    <li> <a href="#">Promotions</a> </li>
                </ul>
            </div>

            <div class="bloc footer-services">
                <h3> COMPANY</h3>
                <ul class="liste-formation">
                    <li> <a href="#">About Us</a> </li>
                    <li> <a href="#">Blog</a> </li>
                    <li> <a href="#">Partnerships</a> </li>
                    <li>  <a href="#">Careers</a> </li>
                    <li> <a href="#">Press</a> </li>
                </ul>
            </div>

            <div class="bloc footer-services">
                <h3> SOCIAL</h3>
                <ul class="liste-formation">
                    <li> <a href="#">Facebook</a> </li>
                    <li> <a href="#">Twitter</a> </li>
                    <li>  <a href="#">Instagram</a> </li>
                    <li> <a href="#">Linkedin</a> </li>
                </ul>
            </div>

        </div>
    </footer>

    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
