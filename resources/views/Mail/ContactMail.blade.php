<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email</title>
    <style>
        p{
            color: #000;
        }
    </style>
</head>
<body>
    <h2 style="color:blue ; text-align:centre">Courrier de contact</h2> <br>
<p>Nom : <span style="color:blue">{{ $details['name'] }} </span></p>
    <p>Email: <span style="color:blue">{{ $details['email'] }} </span> </p>
        <p>Profession :<span style="color:blue"> {{ $details['profession'] }}  </span></p>
            <p>Message :<span style="color:blue"> {{ $details['message'] }} </span></p>


</body>
</html>
