<?php
include_once("db.php");

class Cliente{

    public static function create ($user,$password,$mail,$name,$lastname,$nit,$addres)
    {
        $conexion_ = new db();
        $id = rand(1000,9999);
        $conexion_->conexion ("INSERT INTO `usuarios`(`IdUsuario`, `NombreUsuario`, `password`, `Correo`, `rol`) VALUES ('$id','$user','$password','$mail','0')");
        $conexion_->conexion ("INSERT INTO `clientes`(`NombreCliente`, `ApellidoCliente`, `Nit`, `Direccion`, `IdUsuario`) VALUES ('$name','$lastname','$nit','$addres','$id')");
    }
    public static function delete($id){
        $conexion_ = new db();
        $conexion_->conexion("UPDATE `usuarios` SET `rol`='0' WHERE `IdUsuario` = = $id");
    }
    public static function update($id,$user,$password,$mail,$name,$lastname,$nit,$addres){
        $conexion_ = new db();
        $conexion_->conexion ("UPDATE `usuarios` SET `NombreUsuario`='$user',`password`='$password',`Correo`='$mail' WHERE `IdUsuario`= $id");
        $conexion_->conexion ("UPDATE `clientes` SET `NombreCliente`='$name',`ApellidoCliente`='$lastname',`Nit`='$nit',`Direccion`='$addres' WHERE `IdUsuario` = $id");
    }
    public static function validacion($user,$password){
        $conexion_ = new db();
        $validacion = $conexion_->conexion("SELECT rol FROM `usuarios` WHERE NombreUsuario = '$user' and `password` = '$password'; ");
        session_start();
        $_SESSION['user'] = $user;
        return $validacion;
    }
}