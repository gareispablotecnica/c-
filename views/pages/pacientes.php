<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/pacientes.css">
</head>
<body>    

    <form action="" method="post">

        <input type="text" name="dni" placeholder="DNI">
        <input type="text" name="nombre_completo" placeholder="Nombre Completo">
<section>
    <div class="division1">
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
        <input type="text" name="edad" placeholder="Edad">
        <input type="text" name="genero" placeholder="Genero">
        <input type="text" name="nacionalidad" placeholder="Nacionalidad">
        <input type="text" name="provincia" placeholder="Provincia">
        <input type="text" name="partido" placeholder="Partido">
        <input type="text" name="localidad" placeholder="Localidad">
    </div>
    <div class="division2">
        <input type="text" name="direccion" placeholder="Direccion">
        <input type="text" name="correo_electronico" placeholder="Correo Electronico">
        <input type="text" name="telefono" placeholder="Telefono">
        <input type="text" name="obra_social" placeholder="Obra Social">
        <input type="text" name="codigo_postal" placeholder="Codigo Postal">
    </div>
</section>

        <input type="submit" name="registrar" value="Registrar" class="btn">

    </form>

    <?php
        include("../../controller/conexion.php");
        include("../../model/registro.php");
    ?>
</body>
</html>