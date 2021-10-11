<?php


    include 'conexion_login.php';
    
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);
    
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and password='$password'");
    
    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../../index.html");
        exit();
    }else{
        echo '
            <script>
                alert("Por favor verifique los datos introducidos e intente de nuevo");
                window.location = "../login.php";
            </script>
        ';
        exit();
    }


?>