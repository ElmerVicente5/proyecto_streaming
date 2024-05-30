<?php
require_once 'conexion.php';

$resultado = array();

//$accion = $_POST['tipo'];
$accion=$GET['tipo'];


switch ($accion) {
    case 'AgregarCategoria': agregarCategoria(); break;
    case 'mostrarCategorias': mostrarCategorias(); break; // Cambiar 'MostrarProductos' por 'MostrarCategorias
    case 'ActualizarCategoria': nuevoProducto(); break;
}


function mostrarCategorias()
{
    $respuesta = array();
    try {
        // Asumir que ya tienes una clase Conexion que maneja la conexión a la base de datos
        $conexion = new Conexion();
        $sql = "SELECT id_categoria, nombrecategoria FROM Categoria;";
        $stmt = $conexion->prepare($sql);
        $stmt->execute(); // Ejecutar la consulta

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
      
        if (!empty($result)) {
            // Asignar los resultados a la respuesta si hay datos
            $respuesta["data"] = $result;
        } else {
            // Si no hay datos, asignar un mensaje de error
            $respuesta["data"] = array();
            $respuesta["error"] = "No hay datos disponibles.";
        }
        
    } catch (Exception $e) {
        $respuesta['data'] = array();
        $respuesta['error'] = $e->getMessage();
    }

    // Establecer el encabezado de respuesta como JSON
    header('Content-Type: application/json');
    echo json_encode($respuesta);
}


function agregarCategoria() {
    try {    
        $conexion = new Conexion();
        $conexion->iniciarTransaccion(); // Iniciar la transacción
        $error = 0;

        $sql = "INSERT INTO Categoria (nombrecategoria, descripcion) VALUES (?, ?)";
        $arrayData = array($_POST["nombre_categoria"], $_POST["descripcion_categoria"]);
        $insertar = $conexion->sqlInsert($sql, $arrayData);

        if ($insertar["resultado"] == false) {
            $error++;
        }

        if ($error == 0) {
            $conexion->commit(); // Confirmar la transacción
            $respuesta["resultado"] = true;
            $respuesta["mensaje"] = "Categoría insertada correctamente";
        } else {
            $conexion->rollback(); // Deshacer la transacción
            $respuesta["resultado"] = false;
            $respuesta["mensaje"] = "Error al insertar la categoría";
        }
    } catch (Exception $e) {
        $conexion->rollback(); // Deshacer la transacción en caso de excepción
        $respuesta['resultado'] = false;
        $respuesta['mensaje'] = $e->getMessage();
    }

    echo json_encode($respuesta);
}
?>
