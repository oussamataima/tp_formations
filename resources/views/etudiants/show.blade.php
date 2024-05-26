<?php
use App\Models\Classe;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        // dd($etudiant->classe->formation);
        // $formation = Classe::find($etudiant->classe->idc)->first();
        dd($etudiant->avis);
    @endphp
    <div>
        <div>
            <h2>les informations de l'etudiant</h2>
            <p>Code: {{ $etudiant->codeE }} Nom et prenom: {{ $etudiant->nom }}
                {{ $etudiant->prenom }} 
               
            </p>
            <p>
                Sa date Naissance: {{ $etudiant->dateNaissance }}
            </p>
            <p>
                son adresse: {{ $etudiant->adresse }}
            </p>
        </div>
        <div>
            <h2>
                Sa class
            </h2>
            <p>
              id:  {{ $etudiant->classe->idc }}<br>
               libelle: {{ $etudiant->classe->libelle }}<br>
               Nombre maximum d'etudiants: {{ $etudiant->classe->NombreMax }}

            </p>
        </div>
        <div>
            <h2>La formation en cours</h2>
            <p>
              L'id de formation : {{ $etudiant->classe->formation->idf }} <br>
              Le titre : {{ $etudiant->classe->formation->Titre }} <br>
              Le nombre d'heure de la formation : {{ $etudiant->classe->formation->NbreHeure }}
            </p>
        </div>
    </div>
    <div>
        <h2>Avis</h2>
        <ul>
            @foreach ($etudiant->avis as $avis)
                <li>
                   id Formation : {{ $avis->idf }} les points : {{ $avis->points }}
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>