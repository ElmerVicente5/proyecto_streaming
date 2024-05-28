<?php  
require_once("conexion.php");

function productos() {
    try {   
        $conexion = new Conexion();
        
        $sql = "SELECT id_producto,nombre,precio FROM Productos";
        $consulta = $conexion->consultar($sql);

        var_dump($consulta); // Depuración adicional

        $respuesta = array();

        if ($consulta["resultado"]) {
            $respuesta["resultado"] = true;
            $respuesta["data"] = $consulta["data"];
            $respuesta["mensaje"] = "Mostrando productos registrados";
        } else {
            $respuesta["resultado"] = false;
            $respuesta["data"] = array();
            $respuesta["mensaje"] = "No existen productos registrados";
        }
    } catch (Exception $e) {
        $respuesta['resultado'] = false;
        $respuesta['mensaje'] = $e->getMessage();
    }

    echo json_encode($respuesta);
}

productos();
?>
