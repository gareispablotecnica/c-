<?php
    if(!empty($_POST["registrar"])){
        $dni = $_POST["dni"];
        $nombre_completo = $_POST["nombre_completo"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $edad = $_POST["edad"];
        $genero = $_POST["genero"];
        $nacionalidad = $_POST["nacionalidad"];
        $provincia = $_POST["provincia"];
        $partido = $_POST["partido"];
        $localidad = $_POST["localidad"];
        $direccion = $_POST["direccion"];
        $correo_electronico = $_POST["correo_electronico"];
        $telefono = $_POST["telefono"];
        $obra_social = $_POST["obra_social"];
        $codigo_postal = $_POST["codigo_postal"];

        $query = "INSERT INTO pacientes(nombre_completo, fecha_nacimiento, edad, genero, nacionalidad, provincia, partido, localidad, direccion, correo_electronico, telefono, obra_social, codigo_postal) VALUES('$nombre_paciente', '$fecha_nacimiento', '$edad', '$genero', '$nacionalidad', '$provincia', '$partido', '$localidad', '$direccion', '$correo_electronico', '$telefono', '$obra_social', '$codigo_postal')";
        $resultado = mysqli_query($query, $Ruta);

        if($resultado){
            echo "Registrado";
        }else{
            echo "ERROR";
        }

    }