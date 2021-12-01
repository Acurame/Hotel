<?php
include_once ("db.php");


class Empleado{
    public $id;
    public static function create ($user,$password,$mail,$rol,$name,$lastname)
    {
        $conexion_ = new db();
        $id = rand(1000,9999);
        $conexion_->conexion ("INSERT INTO `usuarios`(`IdUsuario`, `NombreUsuario`, `password`, `Correo`, `rol`) VALUES ('$id','$user','$password','$mail','$rol')");
        $conexion_->conexion ("INSERT INTO `empleado`(`NombreEmpleado`, `ApellidoEmpleado`, `IdUsuario`) VALUES  ('$name','$lastname','$id')");
    }
    public static function delete($id){
        $conexion_ = new db();
        $conexion_->conexion("UPDATE `usuarios` SET `rol`= '5' WHERE `IdUsuario` = $id");
    }
    public static function update($id,$user,$password,$mail,$rol,$name,$lastname){
        $conexion_ = new db();
        $conexion_->conexion ("UPDATE `usuarios` SET `NombreUsuario`='$user',`password`='$password',`Correo`='$mail',`rol`='$rol' WHERE `IdUsuario`= $id");
        $conexion_->conexion ("UPDATE `empleado` SET `NombreEmpleado`='$name',`ApellidoEmpleado`='$lastname', WHERE `IdUsuario` = $id");
    }

}