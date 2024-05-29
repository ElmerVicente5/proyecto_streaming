<?php
require_once 'conexion.php';

$resultado = array();

$accion = $_POST['tipo'];

switch ($accion) {
    case 'AgregarCategoria': agregarCategoria(); break;
    case 'MostrarCategorias': mostrarCategorias(); break; // Cambiar 'MostrarProductos' por 'MostrarCategorias
    case 'ActualizarCategoria': nuevoProducto(); break;
}

function mostrarCategorias() {
    try {    
        $conexion = new Conexion();
        $sql = "SELECT id_categoria,nombrecategoria FROM Categoria";
        $consulta = $conexion->consultar($sql);
        if ($consulta["rowCount"] > 0) {
            $respuesta["resultado"] = true;
            $respuesta["mensaje"] = "Mostrando productos";
            $respuesta["data"] = $consulta["data"];
        } else {
            $respuesta["resultado"] = false;
            $respuesta["mensaje"] = "No existen productos por mostrar";
            $respuesta["data"] = array();
        }
    } catch (Exception $e) {
        $respuesta['resultado'] = false;
        $respuesta['mensaje'] = $e->getMessage();
    }

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
