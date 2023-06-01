<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/admin/side.css')
    @vite('resources/css/admin/inscription.css')
    <title>Document</title>
</head>
<body>
    <div class="container">
        @include('admin.partials.side')
        
        <div>
            <head>
                <div class="head">
                    <h2>Gérer les Inscriptions</h2>
                    <img src="index.jpeg" alt="" id="image">
                </div>
            </head>
            <div class="titles">
                <h3>Liste des étudiants</h3>
            </div><br><br><br>
            <div class="ajouter">
                <button id="btn1">Ajouter</button>
                <label for="search">Rechercher: </label><input type="text">
            </div><br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Age</th>
                        <th>Classe</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button id="btn2">Editer</button><button id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button id="btn2">Editer</button><button id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button id="btn2">Editer</button><button id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button  id="btn2">Editer</button><button id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button  id="btn2">Editer</button><button  id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button  id="btn2">Editer</button><button  id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button  id="btn2">Editer</button><button  id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button  id="btn2">Editer</button><button  id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button id="btn2">Editer</button><button  id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button  id="btn2">Editer</button><button id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button id="btn2">Editer</button><button id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button  id="btn2">Editer</button><button  id="btn3">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td>ARMATTOE</td>
                        <td>Lawrence</td>
                        <td>17ans</td>
                        <td>Tle</td>
                        <td>Validé</td>
                        <td><button  id="btn2">Editer</button><button  id="btn3">Supprimer</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    @vite('resources/js/admin/side.js')
</body>
</html>
