
<?php

$conexion = new mysqli('localhost', 'root', "", 'marketCode');global $conexion;

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {

    
    if (isset($_POST["boton_registro"]) && isset($_POST["Nombre"]) && isset($_POST["Apellido"]) && isset($_POST["Correo"]) && isset($_POST["Contraseña"])) {
    
        $nombre = $_POST["Nombre"];
        $apellido = $_POST["Apellido"];
        $email = $_POST["Correo"];
        $contraseña = $_POST["Contraseña"];
        $Numero_identificacion = $_POST['Numero_identificacion'];
        $tipo_usuario = $_POST['Tipo_Usuario'];
    
        if ($conexion->connect_errno) {
            die("Error: " . $conexion->connect_errno);
        } else {
    
             $insertarDatos = "INSERT INTO Usuarios (Nombre, Apellido, Correo, Contraseña, Numero_identificacion, Tipo_Usuario) 
                          VALUES ('$nombre', '$apellido', '$email', '$contraseña', '$Numero_identificacion', '$tipo_usuario')";
        }
    
        $resultado = $conexion->query($insertarDatos);
    
        if ($resultado) {
    
            echo 'Usuario agregado correctamente';
        }
    }


}


?> 

