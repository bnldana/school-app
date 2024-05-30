{{-- Page par classe qui affiche uniquement les élèves de la classe en question --}}

<!DOCTYPE html>
<html>
<head>
    <title>Classe : {{ $group->name }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 5%;
        }
    </style>
</head>
<body>
    <h1>Classe : {{ $group->name }}</h1>
    <ul>
        
        {{-- Vue en liste --}}
        @foreach ($group->students as $student)
            <li>{{ $student->first_name }} {{ $student->last_name }}  |  {{ $student->date_of_birth }} | {{ $student->address }} | {{ $student->group->name }}</li>
        @endforeach

        {{-- Vue en tableau --}}
        <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>Adresse</th>
                <th>Classe</th>
            </tr>
        </thead>
        <tbody>
            {{-- Boucle qui affiche tous les étudiants et leurs infos --}}
            @foreach ($group->students as $student)
                <tr>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->group->name }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </ul>
</body>
</html>

