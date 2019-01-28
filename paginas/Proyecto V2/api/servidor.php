<?php 

	session_start();

	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// Base de Datos

	$db = mysqli_connect('localhost', 'id4900667_root', '123456', 'id4900667_universidad');

	// Registro

	if (isset($_POST['reg_user'])) {

		// Recibiendo Inputs del Formulario

		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// Validacion del Formulario

		if (empty($username)) { array_push($errors, "Ingresa un Nombre de Usuario"); }
		if (empty($email)) { array_push($errors, "Ingresa un Correo Electronico"); }
		if (empty($password_1)) { array_push($errors, "Ingresa una Contraseña"); }

		if ($password_1 != $password_2) {
			array_push($errors, "Las Contraseñas no Coinciden");
		}

		// Registrar Usuario si no hay errores
		if (count($errors) == 0) {
			$password = md5($password_1);// Encriptacion de Contraseña antes guardar en la Base de Datos
			$query = "INSERT INTO ingreso (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Has Iniciado Sesion";
			header('location: ../index.php');
		}

	}

	// Ingreso

	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Ingresa un Nombre de Usuario");
		}
		if (empty($password)) {
			array_push($errors, "Ingresa una Contraseña");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM ingreso WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Has Iniciado Sesion";
				header('location: ../index.php');
			}else {
				array_push($errors, "Usuario o Contraseña Incorrectos");
			}
		}
	}

?>