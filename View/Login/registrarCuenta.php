<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Controller/LoginController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyecto MN</title>
    <link href="../Styles/all.min.css" rel="stylesheet" type="text/css">
    <link href="../Styles/sb-admin-2.min.css" rel="stylesheet">
    <link href="../Styles/ui.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container MargenSuperior">

    <div class="row justify-content-center">

<div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear Cuenta</h1>
                            </div>
                            
                            <form action="" method="POST" class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                    placeholder="Identificación" id="txtIdentificacion" name="txtIdentificacion"
                                    onkeyup="ConsultarNombre()">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        placeholder="Nombre" id="txtNombre" name="txtNombre" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        placeholder="Correo" id="txtCorreo" name="txtCorreo">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        placeholder="Contraseña" id="txtContrasenna" name="txtContrasenna">
                                </div>
                                <input type="submit" class="btn btn-danger btn-user btn-block" value="Procesar"
                                        id="btnRegistrarCuenta" name="btnRegistrarCuenta" >
                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="recuperarContrasenna.php">Recuperar Contraseña</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Iniciar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </div>

    <script src="../Scripts/jquery.min.js"></script>
    <script src="../Scripts/bootstrap.bundle.min.js"></script>
    <script src="../Scripts/jquery.easing.min.js"></script>
    <script src="../Scripts/sb-admin-2.min.js"></script>
    <script src="../Scripts/comunes.js"></script>

</body>

</html>