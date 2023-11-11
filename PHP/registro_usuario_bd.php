<?php 
    //Acceso a la base de datos definida en conexion_bd.php

    include 'conexion_bd.php';

    //Se optienen los valores de los INPUT con el identificar de name.
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    //Encriptamiento de la contraseña.
    //$contrasena = hash('sha512',$contrasena);

    //De esta manera de ordenan conforme el nombre de cada columna de la base de datos
    // y los valores obtenidos anteriormente.
    $query = "INSERT INTO usuarios(nombre_completo,correo,contrasena) 
              VALUES('$nombre_completo','$correo','$contrasena')";

    //Verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");
    //Si encuentra una línea que sea igual al correo insertado...
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                 alert("Este correo ya existe. Ingrese uno diferente.");
                 window.location = "../login.html";
            </script>
        ';
        exit();
    }

    //Para ejecutar el $query.
    $ejecutar = mysqli_query($conexion, $query);

    // if else para que al registrar te mande un mensaje y te mande al inicio.
    if($ejecutar){
        echo '
         <script> 
              alert("Usuario almacenado exitosamente");
              window.location = "../login.html";
         </script>
        ';
    } else{
        echo '
        <script> 
             alert("ERROR. Usuario no almacenado.");
             window.location = "../login.html";
        </script>
       ';
    }

    mysqli_close($conexion);
?>