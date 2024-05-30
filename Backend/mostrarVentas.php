<?php
require_once 'conexion.php';

$accion = $_POST['accion'];

switch ($accion) {
    case 'verSuscripciones': mostrarVentas(); break;
    case 'verInventario': mostrarInventario(); break;
    default: break;
}

function mostrarVentas() {
    $respuesta = array();
    try {
        $conexion = new Conexion();
        $sql = "SELECT U.usuario, V.estado, TP.tipo_pago, PR.nombreProducto, V.fechaCompra
                FROM ventas AS V
                INNER JOIN usuarios AS U ON V.usuario = U.id_usuario
                INNER JOIN TipoPago AS TP ON V.metodoPago = TP.id_tipo_pago
                INNER JOIN productos AS PR ON V.producto = PR.id_producto;";
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





function mostrarInventario()
{
    $respuesta = array();
    try {
        $conexion = new Conexion();
        $sql = "SELECT P.nombreProducto,P.descripcion,C.nombrecategoria,P.existencia,P.precio
                FROM productos AS P
                INNER JOIN Categoria AS C
                ON P.categoria=C.id_categoria;";
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
?>

