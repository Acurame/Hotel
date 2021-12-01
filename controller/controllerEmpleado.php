<?php
include_once ("../Model/modelEmpleado.php");

if(isset($_POST['create'])){
    $User = $_POST['user'];
    $Password = $_POST['password'];
    $Email = $_POST['mail'];
    $Rol = $_POST['rol'];
    $Name = $_POST['name'];
    $Lastname = $_POST['lastname'];

    $Consult = new Empleado();

    $Consult ->Create ($User,$Password,$Email,$Rol,$Name,$Lastname);
}




