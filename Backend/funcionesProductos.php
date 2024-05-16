<?php
require_once 'conexion.php';
$conexion = new conexion();

$query="SELECT * FROM productos";

$query->consultar($query);




?>