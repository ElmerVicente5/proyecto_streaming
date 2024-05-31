<?php

//session_start();
//error_reporting(E_ALL);
//ini_set("display_errors",0);
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
            //$hashed_password = password_hash($nueva_contrasena, PASSWORD_DEFAULT);
            $hashed_password = encriptar_pwd($_POST["correo"], $_POST["nueva_contrasena"]);
            try {
                // Actualizar la contraseña en la base de datos
                $sql = "UPDATE usuarios SET contrasenia = ? WHERE usuario = ?";
                $arrayData = array($hashed_password, $_POST["correo"]);
                $actualizar = $conexion->sqlUpdate($sql, $arrayData);
                if($actualizar["resultado"]){
                    $resultado['resultado']=true;
                    $resultado['mensaje']= "Contraseña actualizada correctamente.";
                }else{
                    
                    $resultado['resultado']=false;
                    $resultado['mensaje'] = "No es posible actualizar contrasenia.";
                } 
            

                
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
            $conn = $conexion->connect();
            // Hash de la nueva contraseña
          
            $hashed_password = encriptar_pwd($conn,$_POST["correo"], $_POST["contrasena"]);
            try {
                // Verificar si el correo ya existe
                $sql = "SELECT  1 as token FROM usuarios WHERE usuario = '$_POST[correo]'";
                $consulta = $conexion->consultar($sql);

                
                if ($consulta["rowCount"] > 0) {
                    $mensaje = "El correo ya está registrado.";
                    $resultado['resultado']=false;
                    $resultado['mensaje']=$mensaje;
                } else {
                    // Insertar el nuevo usuario en la base de datos
                    $sql = "INSERT INTO usuarios (usuario,contrasenia,tipo_usuario) VALUES (?, ?,1)";
                    $arrayData = array($correo,$hashed_password);
                    $insertar = $conexion->sqlInsert($sql, $arrayData);

                    if($insertar["resultado"] == true){
                
                        $resultado['resultado']=true;
                        $resultado['mensaje']= "Cuenta creada correctamente.";
                     

                    }else{
                        $resultado['resultado']=false;
                        $resultado['mensaje'] =  "Error al crear la cuenta.";
                    }

                }
            } catch (PDOException $e) {
                $mensaje = "Error en la consulta: " . $e->getMessage();
                $resultado['resultado']=false;
                $resultado['mensaje']=$mensaje;
            }
        }

    } else {
        // Iniciar sesión
        $contrasena = $_POST['contrasena'];

        try {
            // Preparar la consulta para verificar las credenciales
            
            $hashed_password = encriptar_pwd($_POST["correo"], $_POST["contrasena"]);
            $resultado["hashed_password"] = $hashed_password;
            
            $sql = "SELECT contrasenia FROM usuarios WHERE usuario = '$_POST[correo]' AND  contrasenia LIKE'$hashed_password' ";
            $consulta = $conexion->consultar($sql);
            $resultado["sql"] = $sql;
            $resultado["consulta"] = $consulta;

            // Verificar si el correo existe en la base de datos
            if ($consulta["rowCount"] > 0) {
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
// Crear una instancia de la clase Conexion



function encriptar_pwd($conn, $u, $pw) {
    $username = stripslashes($conn->quote($u));
    $username = trim($username, "'"); // Eliminar comillas añadidas por quote
    $password = sha1(strtolower($username) . strip_tags(stripslashes($pw)));
    return $password;
}



echo json_encode($resultado); // Mostrar el mensaje de error o éxito
?>
