
<?php 

	include "conexion.php";


    $nombre = $_POST['username'];
    $email = $_POST['useremail'];
    $username = $_POST['user'];
    $password = $_POST['password'];
    

		if(buscaRepetido($username,$password,$db)==1){
            echo'<script>
            alert("Este usuario ya esta registrado, intenta con otro");
            window.location="registro.html";
            </script>
            ';
		}else{
			$sql = "INSERT INTO usuarios VALUES (null, '$nombre', '$username','$email', '$password');";
			echo $result=mysqli_query($db,$sql);
            echo'<script>
            alert("Usuario creado correctamente");
            window.location="index.html";
            </script>
            ';
		}


		function buscaRepetido($user,$pass,$db){
			$sql="SELECT * from usuarios where user='$user' and user_password='$pass'";
			$result=mysqli_query($db,$sql);

			if(!empty($result) AND mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}

 ?>