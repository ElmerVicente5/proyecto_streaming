<?php
require_once("conexion.php");

// Variable para almacenar el mensaje
$mensaje = "";
$resultado  = array();

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
            $resultado['resultado']=false;
            $resultado['mensaje']=$mensaje;
        } else {
            // Hash de la nueva contraseña
            $hashed_password = password_hash($nueva_contrasena, PASSWORD_DEFAULT);

            try {
                // Actualizar la contraseña en la base de datos
                $sql = "UPDATE usuarios SET contrasenia = ? WHERE usuario = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->execute([$hashed_password, $correo]);

                $mensaje = "Contraseña actualizada correctamente.";
              
                $resultado['resultado']=true;
                $resultado['mensaje']=$mensaje;
            } catch (PDOException $e) {
                $mensaje = "Error en la consulta: " . $e->getMessage();
                $resultado['resultado']=false;
                $resultado['mensaje']=$mensaje;
            }
        }

    } elseif ($tipo == "crearCuenta") {
        // Crear nueva cuenta
        $contrasena = $_POST['contrasena'] ?? '';
        $confirmar_contrasena = $_POST['confirmar_contrasena'] ?? '';

        // Validar que las contraseñas coincidan
        if ($contrasena !== $confirmar_contrasena) {
            $mensaje = "Las contraseñas no coinciden.";
            $resultado['resultado']=false;
            $resultado['mensaje']=$mensaje;
        } else {
            // Hash de la nueva contraseña
            $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

            try {
                // Verificar si el correo ya existe
                $sql = "SELECT COUNT(*) FROM usuarios WHERE usuario = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->execute([$correo]);
                $count = $stmt->fetchColumn();

                if ($count > 0) {
                    $mensaje = "El correo ya está registrado.";
                    $resultado['resultado']=false;
                    $resultado['mensaje']=$mensaje;
                } else {
                    // Insertar el nuevo usuario en la base de datos
                    $sql = "INSERT INTO usuarios (usuario,contrasenia,tipo_usuario) VALUES (?, ?,1)";
                    $stmt = $conexion->prepare($sql);
                    $stmt->execute([$correo, $hashed_password]);

                    $mensaje = "Cuenta creada correctamente.";
                    $resultado['resultado']=true;
                    $resultado['mensaje']=$mensaje;
                }
            } catch (PDOException $e) {
                $mensaje = "Error en la consulta: " . $e->getMessage();
                $resultado['resultado']=false;
                $resultado['mensaje']=$mensaje;
            }
        }

    } else {
        // Iniciar sesión
        $contrasena = $_POST['contrasena'] ?? '';

        try {
            // Preparar la consulta para verificar las credenciales
            $sql = "SELECT contrasenia FROM usuarios WHERE usuario = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([$correo]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verificar si el correo existe en la base de datos
            if ($row && password_verify($contrasena, $row['contrasenia'])) {
                $mensaje = "Inicio de sesión exitoso.";
               $resultado['resultado']=true;
               $resultado['mensaje']=$mensaje;
             
            } else {
                $mensaje = "Correo o contraseña incorrectos.";
                $resultado['resultado']=false;
                $resultado['mensaje']=$mensaje; 
            }
        } catch (PDOException $e) {
            $mensaje = "Error en la consulta: " . $e->getMessage();
            $resultado['resultado']=false;
            $resultado['mensaje']=$mensaje;
        }
    }
}

echo json_encode($resultado); // Mostrar el mensaje de error o éxito
?>






