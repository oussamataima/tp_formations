<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>adresse</th>
            <th>Date de naissance</th>
            <th>Id classe</th>
            
        </tr>

            @foreach ($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->codeE }}</td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->adresse }}</td>
                    <td>{{ $etudiant->dateNaissance }}</td>
                    <td>{{ $etudiant->idclasse }}</td>
                    <td> <a href="{{ route('etudiants.show', $etudiant->codeE) }}">details</a></td>
                    {{-- <td> <a href="{{ route('etudiants.show', $etudiant->id) }}">Modifier</a></td> --}}
                </tr>
            @endforeach

    </table>
</body>
</html>