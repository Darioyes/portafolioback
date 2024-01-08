<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

<style>
    h1{
        color: blue;
    }
    p{
        color:brown;
        font-size: 20px
    }
    span{
        color:black;
        font-size: 16px
    }
</style>
<body>
    <h1>Contacto Nuevo</h1>
    <p>Te ha escrito {{$name}} con el correo: {{$email}}</p>
    <span>Este es el mensaje:</span> <br><br>
    <span>{{$content}}</span>
</body>
</html>
