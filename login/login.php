<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Login</title>
</head>

<body>
<body id="body">
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>

        <!-- Barra Buscar -->

        <div class="search">
            <form>
                <input type="text" name="search" placeholder="Buscar..." class="src" autocomplete="off">
            </form>
        </div>

    </header>
    <div class="menu__side" id="menu_side">
        <div class="name__page">
            <i class="fas fa-book"></i>
            <h4>Reading is Power</h4>
        </div>
        <div class="options__menu">
            <a href="../index.html">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="#" class="selected">
                <div class="option">
                    <i class="fas fa-user"></i>
                    <h4>Usuario</h4>
                </div>
            </a>
            <a href="../lista_deseo/lista_deseo.html">
                <div class="option">
                    <i class="fas fa-list-alt"></i>
                    <h4>Lista de deseos</h4>
                </div>
            </a>
        </div>
    </div>

    <!-- WAVE -->

    <div class="container_wave">
        <div class="bg_color"></div>
        <div class="wave w1"></div>
        <div class="wave w2"></div>
    </div>

    <!-- login -->

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>
            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/login_usuario.php" class="formulario__login" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Entrar</button>
                </form>
                <!--Register-->
                <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>