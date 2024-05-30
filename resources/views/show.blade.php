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
        @foreach ($group->students as $student)
            <li>{{ $student->first_name }} {{ $student->last_name }}</li>
        @endforeach
    </ul>
</body>
</html>

