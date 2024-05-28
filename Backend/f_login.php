<?php
require_once("conexion.php");

// Variable para almacenar el mensaje
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'] ?? '';
    $tipo = $_POST['tipo'] ?? ''; // Recibir el tipo de operación

    // Crear una instancia de la clase Conexion
    $conexion = new Conexion();

    if ($tipo == "cambiar_contrasena") {
        // Cambiar contraseña
        $nueva_contrasena = $_POST['nueva_contrasena'] ?? '';
        $confirmar_contrasena = $_POST['confirmar_contrasena'] ?? '';

        // Validar que las contraseñas coincidan
        if ($nueva_contrasena !== $confirmar_contrasena) {
            $mensaje = "Las contraseñas no coinciden.";
            echo $mensaje;
        } else {
            // Hash de la nueva contraseña
            $hashed_password = password_hash($nueva_contrasena, PASSWORD_DEFAULT);

            try {
                // Actualizar la contraseña en la base de datos
                $sql = "UPDATE AutenticadorUsuario SET contrasena = ? WHERE correo = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->execute([$hashed_password, $correo]);

                $mensaje = "Contraseña actualizada correctamente.";
            } catch (PDOException $e) {
                $mensaje = "Error en la consulta: " . $e->getMessage();
            }
        }

    } elseif ($tipo == "crearCuenta") {
        // Crear nueva cuenta
        $contrasena = $_POST['contrasena'] ?? '';
        $confirmar_contrasena = $_POST['confirmar_contrasena'] ?? '';

        // Validar que las contraseñas coincidan
        if ($contrasena !== $confirmar_contrasena) {
            $mensaje = "Las contraseñas no coinciden.";
        } else {
            // Hash de la nueva contraseña
            $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

            try {
                // Verificar si el correo ya existe
                $sql = "SELECT COUNT(*) FROM AutenticadorUsuario WHERE correo = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->execute([$correo]);
                $count = $stmt->fetchColumn();

                if ($count > 0) {
                    $mensaje = "El correo ya está registrado.";
                } else {
                    // Insertar el nuevo usuario en la base de datos
                    $sql = "INSERT INTO AutenticadorUsuario (correo, contrasena,tipo_usuario,id_avatar) VALUES (?, ?,'admin',1)";
                    $stmt = $conexion->prepare($sql);
                    $stmt->execute([$correo, $hashed_password]);

                    $mensaje = "Cuenta creada correctamente.";
                }
            } catch (PDOException $e) {
                $mensaje = "Error en la consulta: " . $e->getMessage();
            }
        }

    } else {
        // Iniciar sesión
        $contrasena = $_POST['contrasena'] ?? '';

        try {
            // Preparar la consulta para verificar las credenciales
            $sql = "SELECT contrasena FROM AutenticadorUsuario WHERE correo = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([$correo]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verificar si el correo existe en la base de datos
            if ($row && password_verify($contrasena, $row['contrasena'])) {
                $mensaje = "Inicio de sesión exitoso.";
                header("Location: ../panel.php");
                exit(); // Asegúrate de salir después de la redirección
            } else {
                $mensaje = "Correo o contraseña incorrectos.";
            }
        } catch (PDOException $e) {
            $mensaje = "Error en la consulta: " . $e->getMessage();
        }
    }
}

echo $mensaje; // Mostrar el mensaje de error o éxito
?>






