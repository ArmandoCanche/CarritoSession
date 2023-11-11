<?php 
    include 'conexion_bd.php';
    session_start();
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and contrasena = '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        session_start();
        $_SESSION['correo'] = $correo;
        header("location: ../index.php");
        exit();
    } else{
        echo '
          <script>
             alert("Usuario no existente, por favor verifique los datos introducidos.");
             window.location = "../login.html";
          </script>
        ';
        exit();
    }



?>