<?php
session_start(); // Iniciar la sesión al cargar la página
?>

<!doctype html>
<html lang="es">
<head>
    <title>Login Avicontrol | Avícola Rioregg</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/Style_login.css">
</head>
<body class="img js-fullheight" style="background-image: url(../Images/Background_login.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Avicontrol</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="../Vista/validarCode.php" method="POST" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="txtUsuario" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password" name="txtPassword" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="selectRol" name="txtRol" required>
                                    <option value="" disabled selected>Selecciona tu rol</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Auxiliar de granja">Auxiliar de granja</option>
                                    <option value="Contador">Contador</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Ingresar</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">
                                        Recuerda mi cuenta
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                               <!-- <div class="w-50 text-md-right">
                                    <a href="../recuperar_contraseña.php" style="color: #fff">Olvide mi contraseña...</a>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../JS/Bootstrap para el login/jquery.min.js"></script>
    <script src="../JS/Bootstrap para el login/bootstrap.min.js"></script>
    <script src="../JS/Bootstrap para el login/popper.min.js"></script>
    <script src="../JS/Main.js"></script>
</body>
</html>