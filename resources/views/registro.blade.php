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

    <form action="Registro.php" method="post">
        <h4>Registrate</h4>
        <label for="nombre" class="label">Nombre(s)</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre" required>
    
        <label for="apellido" class="label">Apellido(s)</label>
        <input type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido">
        
        <label for="correo" class="label">Ingrese un correo valido</label>
        <input type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
        
        <label for="contraseña" class="label">Contraseña</label>
        <input type="password" name="contrasena" id="contraseña" placeholder="Ingrese su Contraseña">
        
        <label for="contraseña" class="label">Confirme su contraseña</label>
        <input type="password" name="confirmar" id="contraseña" placeholder="confirme su contraseña">

        <p><a href="Index.php">Ya tengo cuenta!</a></p>

        <input class="botons" type="submit" name="registrar" value="Registrar">
    </form>


    

    

  </section>
  <br>
  @include("plantillas.footer")

</body>
</html>
