<?php 
require_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Crear una instancia de la clase Conexion
    $conexion = new Conexion();

    try {
        // Preparar la consulta para verificar las credenciales
        $sql = "SELECT contrasena FROM AutenticadorUsuario WHERE correo = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([$correo]);
        /*
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['contrasena'] . "<br>";
        }*/
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        // Verificar si el correo existe en la base de datos
        if ($row['contrasena']==$contrasena) {

            echo "Inicio de sesión exitoso.";
            header("Location: ../panel.php");
            //include('../panel.php');

            /*
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $row['contrasena'];

            // Verificar la contraseña
            if (password_verify($contrasena, $hashed_password)) {
                echo "Inicio de sesión exitoso.";
                // Aquí puedes redirigir al usuario a la página principal o a su panel de usuario
                require_once('./panel.php');
            } else {
                echo "Contraseña incorrecta.";
            }*/
        } else {
            echo "El correo no está registrado.";
        }
    } catch (PDOException $e) {
        echo "Error en la consulta: " . $e->getMessage();
    }
}
?>





