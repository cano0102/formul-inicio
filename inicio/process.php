<?php
session_start();
$conexion = new mysqli('localhost', 'root', "", 'marketCode');global $conexion;

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {

    $Correo = $_POST['Correo'] ?? null;
    $Contraseña = $_POST['Contraseña'] ?? null;

    function verificarCredenciales($conexion, $Correo, $Contraseña)
    {
        $consulta = "SELECT * FROM Usuarios WHERE Correo = '$Correo' AND Contraseña = '$Contraseña'";
        $resultado = $conexion->query($consulta);
        return $resultado->num_rows > 0; // Verificar si hay alguna coincidencia
    }

    function verificarDatos($Correo, $Contraseña)
    {
        if (isset($Correo) && isset($Contraseña)) {
            $Correo = htmlspecialchars($Correo);
            $Contraseña = htmlspecialchars($Contraseña);
            return true;
        } else {
            return false;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (verificarDatos($Correo, $Contraseña)) {

            if (verificarCredenciales($conexion, $Correo, $Contraseña)) {
                $_SESSION['Correo'] = $Correo;
                $_SESSION['Contraseña'] = $Contraseña;
                $_SESSION['Autorizado'] = true;
                echo 'Sesion iniciada correctamente';
                exit();
            } else {
                $error = 'Correo electrónico o contraseña inválidos.';
                echo $error;
            }
        }
    }
}
?>
