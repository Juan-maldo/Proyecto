<!DOCTYPE html>
<html lang="en">
<head>
  <title>EASY MUSIC REA</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{ URL::asset('css/app.css'); }} ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
 

</head>
<body  style="background-color:black";>


@include("plantillas.nav")


<?php if(!empty($message)):?>
    <p><?= $message?></p>
    <?php endif;?>
    
    <form method="POST">
        @csrf
        <h4>Iniciar sesion</h4>
        <label for="correo" class="label">Correo</label>
        <input class="controls" type="email" name="email" id="correo" placeholder="Ingrese su Correo">
        <label for="contraseña" class="label">Contraseña</label>
        <input class="controls" type="password" name="password" id="contraseña" placeholder="Ingrese su Contraseña">
        <p><a href="register">¿Todavia no tines una cuenta?</a></p>
        <input class="botons" type="submit" value="Entrar">
        
    </form>

<br><br><br><br><br><br><br>
    @include("plantillas.footer")

    </body>
</html>
