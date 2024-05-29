<?php
class Conexion extends PDO {
    private $server = 'localhost';
    private $database = 'streamm';
    private $username = 'sa';
    private $password = 'elmer502';

    public function __construct() {
        try {
            parent::__construct("sqlsrv:Server={$this->server};Database={$this->database}", $this->username, $this->password);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión exitosa";
        } catch (PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage();
        }
    }

   

    public function consultar($query) {
        try {
            $respuesta = array();
            $result = $this->query($query);
            

            if ($result) {
                if ($result->rowCount() > 0) {
                    $respuesta['resultado'] = true;
                    $respuesta['data'] = $result->fetchAll(PDO::FETCH_ASSOC);
                    $respuesta['rowCount'] = $result->rowCount();
                    $respuesta['mensaje'] = "Registros consultados exitosamente";
                } else {
                    $respuesta['data'] = array();
                    $respuesta['mensaje'] = "No hay datos para mostrar";
                    $respuesta['resultado'] = false;
                }
            } else {
                $error = $this->errorInfo();
                throw new Exception($error[2]);
            }
        } catch (PDOException $e) {
            $respuesta['mensaje'] = $e->getMessage();
            $respuesta['resultado'] = false;
        }

        return $respuesta;
    }
    public function sqlInsert($query, $arrayDatos) {
        try {
            $respuesta = array();
            $insert = $this->prepare($query);
            $resInsert = $insert->execute($arrayDatos);
            
            if ($resInsert) {
                $respuesta['mensaje'] = "Operación realizada correctamente";
                $respuesta['ultimoId'] = $this->lastInsertId();
                $respuesta['resultado'] = true;
            } else {
                $respuesta['mensaje'] = "Operación no realizada";
                $respuesta['resultado'] = false;
            }
        } catch (PDOException $e) {
            $respuesta['mensaje'] = $e->getMessage();
            $respuesta['resultado'] = false;
        }
        return $respuesta;
    }

    public function iniciarTransaccion() {
        $this->beginTransaction();
    }

    public function respuestaTrans($estado) {
        if ($estado == "COMMIT") {
            $this->commit();
        } else {
            $this->rollback();
        }
    }
    public function rollback() {
        $this->pdo->rollBack();
    }

}



// Crear una instancia de la clase Conexion
/*
$conexion = new Conexion();

try {
        // Definir y ejecutar la consulta
        $sql = "SELECT id_producto, nombre, precio FROM Productos";
        $stmt = $conexion->query($sql);

        // Verificar si la consulta fue exitosa
        if ($stmt === false) {
            die(print_r($conexion->errorInfo(), true));
        }

        // Obtener los resultados
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['id_producto'] . " - Nombre: " . $row['nombre'] . " - Precio: " . $row['precio'] . "<br>";
        }
    } catch (PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
    }
// Crear una instancia de la clase para probar la conexión
// Esto puede ser removido en producción
// $con1 = new Conexion();
*/
?>



