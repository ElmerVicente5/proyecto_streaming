<?php
require_once 'conexion.php'; // Asegúrate de incluir el archivo de la clase Conexion

$accion = $_POST['accion'];

switch ($accion) {
    case 'verSuscripciones': mostrarVentas(); break;
    case 'verInventario': mostrarInventario(); break;
    case 'eliminarProducto': eliminarProducto(); break;
    default: break;
}

function mostrarVentas() {
    $respuesta = array();
    try {
        $conexion = new Conexion(); // Crear una instancia de la clase Conexion
        $conn = $conexion->connect(); // Obtener la conexión PDO

        // Consulta SQL para obtener las ventas
        $sql = "SELECT V.id_venta,U.usuario, V.estado, TP.tipo_pago, PR.nombreProducto, V.fechaCompra
                FROM ventas AS V
                INNER JOIN usuarios AS U ON V.usuario = U.id_usuario
                INNER JOIN TipoPago AS TP ON V.metodoPago = TP.id_tipo_pago
                INNER JOIN productos AS PR ON V.producto = PR.id_producto;";

        // Preparar la consulta
        $stmt = $conn->prepare($sql);
        
        // Ejecutar la consulta
        $stmt->execute();

        // Obtener los resultados
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($result)) {
            // Asignar los resultados a la respuesta si hay datos
            $respuesta["data"] = $result;
        } else {
            // Si no hay datos, asignar un mensaje de error
            $respuesta["data"] = array();
            $respuesta["error"] = "No hay datos disponibles.";
        }
        
    } catch (PDOException $e) {
        $respuesta['data'] = array();
        $respuesta['error'] = $e->getMessage();
    }

    // Establecer el encabezado de respuesta como JSON
    header('Content-Type: application/json');
    echo json_encode($respuesta);
}


function mostrarInventario() {
    $respuesta = array();
    try {
        $conexion = new Conexion(); // Crear una instancia de la clase Conexion
        $conn = $conexion->connect(); // Obtener la conexión PDO

        // Consulta SQL para obtener el inventario
        $sql = "SELECT P.id_producto,P.nombreProducto, P.descripcion, C.nombrecategoria, P.existencia, P.precio
                FROM productos AS P
                INNER JOIN Categoria AS C ON P.categoria = C.id_categoria;";

        // Preparar la consulta
        $stmt = $conn->prepare($sql);
        
        // Ejecutar la consulta
        $stmt->execute();

        // Obtener los resultados
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($result)) {
            // Asignar los resultados a la respuesta si hay datos
            $respuesta["data"] = $result;
        } else {
            // Si no hay datos, asignar un mensaje de error
            $respuesta["data"] = array();
            $respuesta["error"] = "No hay datos disponibles.";
        }
        
    } catch (PDOException $e) {
        $respuesta['data'] = array();
        $respuesta['error'] = $e->getMessage();
    }

    // Establecer el encabezado de respuesta como JSON
    header('Content-Type: application/json');
    echo json_encode($respuesta);
}





function eliminarProducto(){

    $idProducto = $_POST["idProducto"];

    try {
        $conexion = new Conexion();
        $conn = $conexion->connect();

        // Sentencia SQL para eliminar el producto
        $sql = "DELETE FROM productos WHERE id_producto = :idProducto";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':idProducto', $idProducto, PDO::PARAM_INT);
        $stmt->execute();

        echo json_encode(["success" => true, "message" => "Producto eliminado correctamente"]);
    } catch (PDOException $e) {
        echo json_encode(["success" => false, "message" => "Error al eliminar el producto: " . $e->getMessage()]);
    }




}

?>
