<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Inicio de sesión</title>
</head>
<body class="bg-black">
    
    <section>
        <div class="row">
            <div class="col-lg-7 min-vh-100 img-registro">
            </div>
            <div class="col-lg-5 d-flex flex-column aling-items-end min-vh-100 ">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                    <label for="Hotel MiraMar S.A" class="text-white fs-2 logo">Hotel MiraMar S.A</label>
                </div>
                <div class="text-white text-center px-lg-5 py-lg-4 p-4 w-100 aling-self-center">
                    <h1 class="mb-4">Bienvenido a la famila</h1>
                    <form action="/controller/controllerCliente.php" method="post" class="mb-5">
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="user" aria-describedby="helpId" placeholder="Usuario">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="password" class="form-control" name="password" aria-describedby="helpId" placeholder="clave">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="mail" aria-describedby="helpId" placeholder="correo">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Apellidos">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="nit" id="" aria-describedby="helpId" placeholder="Nit">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="addres" id="" aria-describedby="helpId" placeholder="Dirección">
                    </div>
                    <div class="d-flex justify-content-around">
                            <button type="sutmit" name="Regis" class="btn btn-outline-light flex-grow-1 mr-2">Registrar</button>
                            <a href="/index.php" class="btn btn-outline-light flex-grow-1 ml-2">Cancelar</a>
                        </div>
                    </form>
                </div>
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
                    <a href="Login.php" class="text-white text-decoration-none">!!!ya poseo una cuenta¡¡¡</a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>