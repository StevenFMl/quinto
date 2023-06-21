<?php
//TODO: Requerimientos Externos. Aqui estan todas los archivos externos
require_once('../models/alumnos.model.php');
//TODO: Manejo de alertas y errores de php
error_reporting(0);
//TODO: Importacion de Clase alumnos
$Alumnos = new AlumnosModel;
switch ($_GET["op"]) {
    case 'todos':
        $datos = array();
        $datos = $Alumnos->todos();
        while ($fila = mysqli_fetch_assoc($datos)) {
            $todos[] = $fila;
        }
        echo json_encode($todos);
        break;
}
