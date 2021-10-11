<?php


    include 'conexion_login.php';
    
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);
    
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, password) VALUES('$nombre_completo', '$correo', '$usuario', '$password')";
    
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado");
                window.location = "../login.php";
            </script>
        ';
        exit();
    }
    
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
    
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya esta registrado");
                window.location = "../login.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);
    
    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado axitosamente");
                window.location = "../login.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Usuario almacenado axitosamente");
                window.location = "../login.php";
            </script>
        ';
    }
    
    mysqli_close($conexion);
    
    
?>
