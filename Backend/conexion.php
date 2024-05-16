<?php
// Definir la clase
class Conexion extends PDO {
    // Propiedades para almacenar datos de conexión
    private $server = 'localhost';
    private $database = 'productos';
    private $username = 'sa';
    private $password = 'elmer502';

    // Constructor de la clase
    public function __construct(){
        try {
            // Conexión mediante PDO
            parent::__construct("sqlsrv:Server={$this->server};Database={$this->database}", $this->username, $this->password);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa";
        } catch (PDOException $e) {
            // Si hay errores, mostrar mensaje
            echo "Error en la conexión: " . $e->getMessage();
        }
    }
}
public function consultar($query)
{
    try {
        $respuesta = array();
        $result = $this->connection->query($query);
 
        $error = $this->connection->errorInfo();
        if ($error[0] === "00000") {
            $result->execute();
            if ($result->rowCount() > 0) {
                $respuesta['resultado'] = true;
                $respuesta['data'] = $result->fetchAll(PDO::FETCH_ASSOC);
                $respuesta['rowCount'] = $result->rowCount();
                $respuesta['mensaje']="Registros consultados exitosamente";
                
            }else{
                $respuesta['data'] = array();
                $respuesta['mensaje']="NO hay datos para mostrar";
                $respuesta['resultado']= false;
            }

        } else {
            throw new Exception($error[2]);
        }
        
     } catch (PDOException $e) {
        $respuesta['mensaje']=$e->getMessage();
        $respuesta['resultado']= false;
    }

    return $respuesta;
}

// Crear una instancia de la clase

$con1 = new Conexion();

?>


