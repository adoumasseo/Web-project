<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/admin/gestion-notes.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Gestion des notes</title>
</head>
<body>
    <div class="container">
        @include('admin.partials.side')

        <main>
            <div class="head">
                <h1>Gérer les notes</h1>
                <h5>Bulletin de l'étudiant </h5>
                <img src="./images/Grades-cuate.svg" class="img">
            </div>

            <div class="classlist">
                <div class="modal">
                    <h1>Bulletin Scolaire</h1>
                    <h4 class="lycee-name">Nom du lycée</h4>
                    <div class="infos-eleve">
                        <div class="eleve-content">
                            <div class="info nom"><span>Nom:</span> <input type="text" name="" id="" class="info-input" placeholder="John Snow"> </div>
                            <hr>
                        </div>
                        <div class="eleve-content">
                            <div class="info annee"><span>Année:</span> <input type="text" name="" id="" class="info-input" placeholder="765-766"> </div>
                            <hr>
                        </div>
                        <div class="eleve-content">
                            <div class="info conseiller"><span>Conseiller:</span> <input type="text" name="" id="" class="info-input" placeholder="Jamie Lanister"> </div>
                            <hr>
                        </div>
                        <div class="eleve-content">
                            <div class="info periode-notation"><span>Période de notation:</span> <input type="text" name="" id="" class="info-input" placeholder="Hiver"></div>
                            <hr>
                        </div>
                    </div>

                    <div class="bulletin bull-head">
                        <div class="bulletin-component">Matière</div>
                        <div class="bulletin-component">Interrogation</div>
                        <div class="bulletin-component">Devoir</div>
                        <div class="bulletin-component">Composition</div>
                        <div class="bulletin-component">Moyenne</div>
                    </div>

                    <div class="bulletin line">
                        <div class="bulletin-component">Français</div>
                        <div class="bulletin-component interrogation">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                        </div>
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                    </div>
                    <div class="bulletin line">
                        <div class="bulletin-component">Science de la Vie et de la Terre</div>
                        <div class="bulletin-component interrogation">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                        </div>
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                    </div>
                    <div class="bulletin line">
                        <div class="bulletin-component">Mathématique</div>
                        <div class="bulletin-component interrogation">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                        </div>
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                    </div>
                    <div class="bulletin line">
                        <div class="bulletin-component">Anglais</div>
                        <div class="bulletin-component interrogation">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                        </div>
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                    </div>
                    <div class="bulletin line">
                        <div class="bulletin-component">Physique Chimie et Technologie</div>
                        <div class="bulletin-component interrogation">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                        </div>
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                    </div>
                    <div class="bulletin line">
                        <div class="bulletin-component">Histoire-Géographie</div>
                        <div class="bulletin-component interrogation">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                        </div>
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                    </div>
                    <div class="bulletin line">
                        <div class="bulletin-component">Phylosophie</div>
                        <div class="bulletin-component interrogation">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                        </div>
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                    </div>
                    <div class="bulletin line">
                        <div class="bulletin-component">Economie Familiale et Sociale</div>
                        <div class="bulletin-component interrogation">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                        </div>
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                    </div>
                    <div class="bulletin line">
                        <div class="bulletin-component">Education Physique et Sportive</div>
                        <div class="bulletin-component interrogation">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                            <input type="number" name="" id="" class="interro">
                        </div>
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
                        <input type="number" class="bulletin-component">
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
                    <div class="crud">
                        <button class="valider">Valider</button>
                        <button class="modifier">Modifier</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    @vite('resources/js/admin/side.js')
</body>
</html>
