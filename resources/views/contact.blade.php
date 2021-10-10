<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="img/khatib_logo.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khatib</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/contact.css" />

</head>

<body class="background">
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">

                <a href="/">
                    <img class="logo" src="img/khatib_logo.png">
                </a>
            </div>
        </div>
    </header>
    <div id="Nous_contacter">
        <span>Nous contacter</span>
    </div>
    <form  id="Form" action="{{ url('/contacts') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <p> <input class="formcontrol" name="name" type="text" placeholder="nom"></p>

        <p><input class="formcontrol" name="email" type="text" placeholder="Email"></p>

        <p> <input class="formcontrol" name="profession" type="text" placeholder="Profession"></p>

        <p><textarea class="formcontrol" name="message" placeholder="Message" id="floatingTextarea2"
                style="height: 200px"></textarea></p>

        <button value="Submit" class="button">ENVOYER</button></a>
    </form>
    </div>
</body>

</html>
