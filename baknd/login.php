<?php
	session_start();
	include_once("herramientas.php");
	include_once("ManejadorMySql.php");
	$user= $_POST["user"];
	$pass= $_POST["pass"];
	
	$manejadorBD= new ManejadorMySql();
	$sql= "SELECT  u.id_tipoUsuario ".
			"FROM usuario u, pass p ".
			"WHERE u.id_usuario='". $user. "' and p.id_pass=u.id_pass and p.pass=sha1('". $pass. "')";
	$resultadoConsulta= $manejadorBD->realizarConsulta($sql);
	unset($manejadorBD);
	if($resultadoConsulta){
		switch($resultadoConsulta->fetch_row()[0]){
			case 1:
				$_SESSION["alumno"]= true;
			break;
			case 2:
				$_SESSION["admin"]= true;
			break;
			default:
				header("Location: ../front/login.php");
				exit;	
		}
		guardarBitacora("Inicio de sesión. [$user]");
		header("Location: ../front/principal.php");
		exit;
	}
	guardarBitacora("Tipo de usuario no registrado en la bd.". [$user]);
	header("Location: ../front/login.php");
	exit;
?>