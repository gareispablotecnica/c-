<?php 

    if (!empty($_POST["login"])) {
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];

            $query = $Ruta -> query("SELECT * FROM login WHERE usuario = '$usuario' AND contraseña = '$contraseña' ");         
            $columna = $query -> fetch_assoc();
            
            if ($query) {
                if ($columna["usuario"] == "admin" && $columna["contraseña"] == "1234"){
                header("Location:views/pages/pacientes.php");  
                }
                else if($columna["usuario"] == "pablo" && $columna["contraseña" == "1234"]){
                header("Location:views/pages/turnos.php");
                    } 
            } else {
                    echo 'Error en usuario y/o contraseña';
            }
    }
    else{
        echo "Error";
    }

?>