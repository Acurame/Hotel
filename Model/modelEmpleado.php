<?php
include_once ("db.php");


class Empleado{
    public static function create ($user,$password,$mail,$rol,$name,$lastname)
    {
        $conexion_ = new db();
        $id = rand(10,99);
        $conexion_->conexion ("INSERT INTO `usuarios`(`IdUsuario`, `NombreUsuario`, `password`, `Correo`, `rol`) VALUES ('$id','$user','$password','$mail','$rol')");
        $conexion_->conexion ("INSERT INTO `empleado`(`NombreEmpleado`, `ApellidoEmpleado`, `IdUsuario`) VALUES  ('$name','$lastname','$id')");
    }
    public static function delete($id){
        $conexion_ = new db();
        $conexion_->conexion("UPDATE `usuarios` SET `rol`= '5' WHERE `IdUsuario` = $id");
    }

}