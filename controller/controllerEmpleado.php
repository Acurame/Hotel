<?php
include_once ("../Model/modelEmpleado.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $Consult = new Empleado();
    $Consult -> delete($id);
    echo $id;
}

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

if(isset($_GET['edit'])){
    $Id = $_GET['edit'];
    $User = $_POST['user'];
    $Password = $_POST['password'];
    $Email = $_POST['mail'];
    $Rol = $_POST['rol'];
    $Name = $_POST['name'];
    $Lastname = $_POST['lastname'];

    $Consult = new Empleado();

    $Consult ->update ($Id,$User,$Password,$Email,$Rol,$Name,$Lastname);
}


header("Location: ../view/Empleado.php");






