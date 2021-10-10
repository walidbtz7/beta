<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email</title>
</head>
<body>
    <h2 style="color:blue ; text-align:centre">Courrier de Mosqué</h2> <br>
<p>Mosque name : <span style="color:blue">{{ $details['nom'] }} </span></p>
    <p>président nom complet: <span style="color:blue">{{ $details['président'] }} </span> </p>
        <p>adresse de mosque:<span style="color:blue">{{ $details['adresse'] }} </span></p>
            <p>année de creation: :<span style="color:blue"> {{ $details['année'] }} </span></p>
            <p>cours: :<span style="color:blue">  {{ $details['cours'] }}  </span></p>


</body>
</html>
