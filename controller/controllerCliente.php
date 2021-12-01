<?php
include_once ("../Model/modelCliente.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $Consult = new Cliente();
    $Consult -> delete($id);
    echo $id;
    header("Location: ../view/Clientes.php");
}

if(isset($_POST['create'])){
    $User = $_POST['user'];
    $Password = $_POST['password'];
    $Email = $_POST['mail'];
    $Name = $_POST['name'];
    $Lastname = $_POST['lastname'];
    $Nit = $_POST['nit'];
    $Adrres = $_POST['addres'];
    $Consult = new Cliente();
    $Consult ->Create ($User,$Password,$Email,$Name,$Lastname,$Nit,$Adrres);
    header("Location: ../view/Clientes.php");
}

if(isset($_GET['edit'])){
    $Id = $_GET['edit'];
    $User = $_POST['user'];
    $Password = $_POST['password'];
    $Email = $_POST['mail'];
    $Name = $_POST['name'];
    $Lastname = $_POST['lastname'];
    $Nit = $_POST['nit'];
    $Adrres = $_POST['addres'];

    $Consult = new Cliente();
    $Consult ->update ($Id,$User,$Password,$Email,$Name,$Lastname,$Nit,$Adrres);
    header("Location: ../view/Clientes.php");
}

if(isset($_POST['Val'])){
    $user = $_POST['user'];
    $Password = $_POST['password'];

    $Consult = new Cliente();
    $respuesta = $Consult ->  validacion($user,$Password);
    if($respuesta == 1){
        header("Location: ../view/home.php");
    }
}
if(isset($_POST['Regis'])){
    $User = $_POST['user'];
    $Password = $_POST['password'];
    $Email = $_POST['mail'];
    $Name = $_POST['name'];
    $Lastname = $_POST['lastname'];
    $Nit = $_POST['nit'];
    $Adrres = $_POST['addres'];
    $Consult = new Cliente();
    $Consult ->Create ($User,$Password,$Email,$Name,$Lastname,$Nit,$Adrres);
    header("Location: ../view/Login.php");
}




