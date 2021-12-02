<?php
include 'conexion.php';

$email = $_POST['useremail'];
$password = $_POST['password'];

$validar_login=mysqli_query($db, "SELECT * FROM usuarios
WHERE user_email='$email' and user_password='$password';");

if(mysqli_num_rows($validar_login)>0)
{
    header("Location: index.html");
    } else{
        echo'
        <script>
        alert("Usuario no existe, por favor verifique los datos");
        window.location="login.html";
        </script>

        ';
    }

?>