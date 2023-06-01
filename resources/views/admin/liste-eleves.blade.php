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
                <h5>Liste des élèves</h5>
                <img src="./images/Raising hand-amico.svg" class="img">
            </div>

            <div class="classlist">
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénoms</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($eleves as $eleve)
                            <tr>
                                <td><a href="{{ route('bulletin') }}">{{ $eleve->name }}</a></td>
                                <td><a href="{{ route('bulletin') }}">{{ $eleve->prenom }}</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </main>
    </div>

    @vite('resources/js/admin/side.js')
</body>
</html>
