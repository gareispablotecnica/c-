<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="views/css/style.css">
</head>
<body>    

    <form action="" method="post">

        <input type="text" name="usuario" placeholder="Usuario">
        <input type="text" name="contraseña" placeholder="Contraseña">

        <input type="submit" name="login" value="Registrar" class="btn">

    </form>

    <?php 
        include("controller/conexion.php");
        include("model/login.php");
    ?>

</body>
</html>