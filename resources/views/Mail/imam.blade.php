<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email</title>
</head>
<body>
    <h3 style="color:blue ; text-align:centre">Courrier de Imam</3> <br>
    <h2 style="color:blue ; text-align:centre">Renseignement Personnel</h2> <br>
    <p>Nom : <span style="color:blue">{{ $details['Nom'] }} </span></p>
    <p>Prénom : <span style="color:blue">{{ $details['Prénom'] }} </span></p>
    <p>Date de naissance : <span style="color:blue">{{ $details['DateNais'] }} </span></p>
    <p>Situation : <span style="color:blue">{{ $details['Situation'] }} </span></p>
    <p>MVille actuelle  : <span style="color:blue">{{ $details['vile'] }} </span></p>
    <p>Nationalité : <span style="color:blue">{{ $details['Nationalité'] }} </span></p>
    <p>Profession : <span style="color:blue">{{ $details['Profession'] }} </span></p>
    <p>Adresse mail : : <span style="color:blue">{{ $details['mail'] }} </span></p>
    <p>Numéro de téléphone : : <span style="color:blue">{{ $details['tel'] }} </span></p>

    <h2 style="color:blue ; text-align:centre">Formation scolaire</h2> <br>
    <p>Bac général : <span style="color:blue">{{ $details['Bac'] }} </span></p>
    <p>Niveau d études supérieurs : <span style="color:blue">{{ $details['NiveauEtuSup'] }} </span></p>
    <p>Diplômé de l’enseignement supérieur obtenu : <span style="color:blue">{{ $details['Diplômé'] }} </span></p>
    <p>Niveau d’Arabe : : : <span style="color:blue">{{ $details['NArabe'] }} </span></p>
    <p>Niveau de Français : : <span style="color:blue">{{ $details['NFrancais'] }} </span></p>
    <p>Autres : <span style="color:blue">{{ $details['autre'] }} niveau : {{ $details['Nautre'] }} </span></p>

    <h2 style="color:blue ; text-align:centre">Formation religieuse</h2> <br>
    <p>Nom : <span style="color:blue">{{ $details['Nom'] }} </span></p>
    <p>Nom : <span style="color:blue">{{ $details['Nom'] }} </span></p>
    <p>Nom : <span style="color:blue">{{ $details['Nom'] }} </span></p>

    <h2 style="color:blue ; text-align:centre">Informations complémentaires sur la formation religieuses (</h2> <br>
    <p>Sujet : <span style="color:blue">{{ $details['Sujet'] }} </span></p>
    <p>Tuteur de thèse  : <span style="color:blue">{{ $details['thèse'] }} </span></p>
    <p>Noms de Savants de références suivi : : <span style="color:blue">{{ $details['références'] }} </span></p>
    <p>Noms de Savants contemporains de références suivi : : <span style="color:blue">{{ $details['contemporains'] }} </span></p>
    <p>Ouvrages étudiés : : <span style="color:blue">{{ $details['étudiés'] }} </span></p>

    <h2 style="color:blue ; text-align:centre"Expérience dans l’enseignement des enfants/ados</h2> <br>
    <p style="color:blue">1</p>
    <p>Niveau de connaissance : <span style="color:blue">{{ $details['NiveauCon1'] }} </span></p>
    <p> Nombre d’année  : <span style="color:blue">{{ $details['NAnnée1'] }} </span></p>
    <p>Ville : <span style="color:blue">{{ $details['ville1'] }} </span></p>
    <p style="color:blue">2</p>
    <p>Niveau de connaissance : <span style="color:blue">{{ $details['NiveauCon2'] }} </span></p>
    <p> Nombre d’année  : <span style="color:blue">{{ $details['NAnnée2'] }} </span></p>
    <p>Ville : <span style="color:blue">{{ $details['ville2'] }} </span></p>
    <p style="color:blue">3</p>
    <p>Niveau de connaissance : <span style="color:blue">{{ $details['NiveauCon3'] }} </span></p>
    <p> Nombre d’année  : <span style="color:blue">{{ $details['NAnnée3'] }} </span></p>
    <p>Ville : <span style="color:blue">{{ $details['ville3'] }} </span></p>
    <p>Matières :voici le fichier en bas  </span></p>

    <h2 style="color:blue ; text-align:centre">Niveau de Coran </h2> <br>
    <p>Mémorisation : <span style="color:blue">{{ $details['Mémorisation'] }} </span></p>
    <p>Niveau de Tajwid  : <span style="color:blue">{{ $details['NTajwid'] }} </span></p>
    <p>Maitrise des Sciences du Coran (Ouvrages étudiés)  : <span style="color:blue">{{ $details['Coran'] }} </span></p>
    <p>Maitrise des Sciences du Hadith (Ouvrages de Hadith étudiés): <span style="color:blue">{{ $details['Hadith'] }} </span></p>
    <p>Connaissance de la Jurisprudence islamique (Connaissance de la Jurisprudence islamique :) : <span style="color:blue">{{ $details['islamique'] }} </span></p>

    <h2 style="color:blue ; text-align:centre">Information concernant votre recherche d’établissement (</h2> <br>

    <h2 style="color:blue ; text-align:centre">Dans le cadre d’une activité rémunérée ou non rémunérée par la futur Mosquée</h2> <br>


</body>
</html>
