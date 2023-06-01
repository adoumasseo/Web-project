<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/admin/prof.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <div class="container">

        @include('admin.partials.side')

        <div class="content">
            <div class="header">
                <div class="card">
                    <div class="card-title">
                        <h3>20</h3>
                        <h2>Professeurs</h2>
                    </div>
                    <div class="card-content">
                        <img src="./Image/High School-bro.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="card-title">
                        <h3>20</h3>
                        <h2>Matières</h2>
                    </div>
                    <div class="card-content">
                        <img src="./Image/High School-bro.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="card-title">
                        <h3>20</h3>
                        <h2>classes</h2>
                    </div>
                    <div class="card-content">
                        <img src="./Image/High School-bro.png" alt="">
                    </div>
                </div>
            </div>
            <div class="bodyBox">
                <div class="title">
                    <h2>Liste des Professeurs</h2>
                    <a href="" class="btn">Voir plus</a>
                </div>
                <table>
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Matières</th>
                    </tr>
                    <tr>
                        <td><img src="./Image/Professor-amico.png" alt=""></td>
                        <td>Nom</td>
                        <td>Prénom</td>
                        <td>Matières</td>
                        <td><a href="" class="btn">Modifier</a></td>
                        <td><a href="" class="btn">Supprimer</a></td>
                    </tr>
                    <tr>
                        <td><img src="./Image/Professor-amico.png" alt=""></td>
                        <td>Nom</td>
                        <td>Prénom</td>
                        <td>Matières</td>
                        <td><a href="" class="btn">Modifier</a></td>
                        <td><a href="" class="btn">Supprimer</a></td>
                    </tr>
                    <tr>
                        <td><img src="./Image/Professor-amico.png" alt=""></td>
                        <td>Nom</td>
                        <td>Prénom</td>
                        <td>Matières</td>
                        <td><a href="" class="btn">Modifier</a></td>
                        <td><a href="" class="btn">Supprimer</a></td>
                    </tr>
                    <tr>
                        <td><img src="./Image/Professor-amico.png" alt=""></td>
                        <td>Nom</td>
                        <td>Prénom</td>
                        <td>Matières</td>
                        <td><a href="" class="btn">Modifier</a></td>
                        <td><a href="" class="btn">Supprimer</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    @vite('resources/js/admin/side.js')

</body>
</html>
