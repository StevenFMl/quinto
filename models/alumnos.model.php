<?php
//TODO:Clase Alumnos es un modelo
require_once('../config/config.php');
class AlumnosModel{
    //TODO:Funcion para obtener todos los registros de la base de datos
    public function todos()
    {
        $con = new ClaseConexion();
        $con=$con->ProcedimientoConectar();
        $cadena = "SELECT * FROM `Alumno`";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
}