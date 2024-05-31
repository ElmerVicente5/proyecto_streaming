<?php 
date_default_timezone_set('America/Guatemala');



    class Conexion extends PDO{

        private $host="localhost";
        private $user="root";
        private $password="";
        private $db="sistemastream";
        private $connection;
        private $id;
 
        public function __construct(){

            $connectionString= "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";

            try {
                $this->connection = new PDO($connectionString,$this->user,$this->password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "hola conexicon";

            } catch (Exception $e) {
                $this->connection='Error de conexion';
               // echo "Error: ".$e->getMessage();
            }
        }//end construct
 
        public function connect(){
            return $this->connection;
        }

        public function validarConexion() {
            if ($this->connection instanceof PDO) {
                return "Conexión exitosa";
            } else {
                return "Error de conexión: No se pudo establecer la conexión.";
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

        public function sqlInsert($query, $arrayDatos)
        {
            try {
                $respuesta = array();
                $insert = $this->connection->prepare($query);
                $resInsert = $insert->execute($arrayDatos);
                
                if($resInsert){
                    $respuesta['mensaje']="Operación realizada correctamente";
                    $respuesta['ultimoId']=$this->connection->lastInsertId();
                    $respuesta['resultado']= true;

                }else{
                    $respuesta['mensaje']="Operación no realizada";
                    $respuesta['resultado']= false;
                }

            } catch (PDOException $e) {
                $respuesta['mensaje']=$e->getMessage();
                $respuesta['resultado']= false;
            }

                return $respuesta;
        }

        public function sqlUpdate($query, $arrayDatos)
        {
            try {
                $respuesta = array();
                $update = $this->connection->prepare($query);
                $resUpdate = $update->execute($arrayDatos);
                
                if($resUpdate){
                   /* echo "<br>";
                    var_dump($resUpdate);
                    echo "<br>";*/
                    $respuesta['mensaje']="Operación realizada correctamente";
                    $respuesta['resultado']= true;

                }else{
                    $respuesta['mensaje']="Operación no realizada";
                    $respuesta['resultado']= false;
                }

            } catch (PDOException $e) {
                $respuesta['mensaje']=$e->getMessage();
                $respuesta['resultado']= false;
            }

                return $respuesta;
        }

        public function sqlDelete($query, $arrayDatos)
        {
            try {
                $respuesta = array();
                $update = $this->connection->prepare($query);
                $resUpdate = $update->execute($arrayDatos);
                
                if($resUpdate){
                   /* echo "<br>";
                    var_dump($resUpdate);
                    echo "<br>";*/
                    $respuesta['mensaje']="Operación realizada correctamente";
                    $respuesta['resultado']= true;

                }else{
                    $respuesta['mensaje']="Operación no realizada";
                    $respuesta['resultado']= false;
                }

            } catch (PDOException $e) {
                $respuesta['mensaje']=$e->getMessage();
                $respuesta['resultado']= false;
            }

                return $respuesta;
        }

        /*  
          public function sqlDelete($tabla)
            {
                try {
                     //$respuesta = array();
                    private $id = 0 ;
                    echo $tabla;

                } catch (PDOException $e) {
                    $respuesta['mensaje']=$e->getMessage();
                    $respuesta['resultado']= false;
                }

                    return $respuesta;
            }

        */

 
        public function transaccion(){
            //$this->connection->query("SET =0");// habilitar las transacciones ...quita la relación momentaneamente
            //$this->connection->query("START TRANSACTION");//inicia la transacción
             $this->connection->beginTransaction();
        }

        public function respuestaTrans($respuesta){// Commit para gantizar que se guardaron los datos
            $this->connection->query($respuesta); // rollBack para cancelar la operación si no se completo alguna de las dos
            $this->connection = null;
             /*if($respuesta=="commit" || $respuesta=="COMMIT"){
                $this->connection->commit();
             }else{
                $this->connection->rollBack();

             }
                $this->connection = null;*/
        }
        public function  iniciarTransaccion()
        {
          $this->$connection::beginTransaction();
        } 
        





        public function permisos($idtipousuario,$idmodulo,$campo)
        {
            try {
                $respuesta = array();
                $sql ="SELECT * FROM permisos WHERE idtipousuario = '".$idtipousuario."' AND idmodulo = '".$idmodulo."' AND $campo = 1";
                $result = $this->connection->query($sql);
         
                //$respuesta['sql'] = $sql;   
                //$respuesta['result'] = $result;   
                $error = $this->connection->errorInfo();
                if ($error[0] === "00000") {
                    $result->execute();
                    if ($result->rowCount() > 0) {
                        $respuesta['resultado'] = true;   
                    }else{
                        $respuesta['resultado'] = false;   
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
				
				public function configuracionSucursal($idmodulo,$campo)
        {
            try {
                $respuesta = array();
                $sql ="SELECT * FROM sucursales_configuraciones WHERE id = '".$idmodulo."'  AND $campo = 1";
                $result = $this->connection->query($sql);
         
                //$respuesta['sql'] = $sql;   
                //$respuesta['result'] = $result;   
                $error = $this->connection->errorInfo();
                if ($error[0] === "00000") {
                    $result->execute();
                    if ($result->rowCount() > 0) {
                        $respuesta['resultado'] = true;   
                    }else{
                        $respuesta['resultado'] = false;   
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



        public function close()
        {
            $this->connection = null;
        }
     
        public function getLastId()
        {
            return $this->connection->lastInsertId();
        }


    }
    

 

 ?>