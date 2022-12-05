<?php
$usuario=$_GET["usuario"];
$passsword=$_GET["password"];
include "conexion.inc.php";
$sql = "SELECT * from flujoprocesoseguimiento xf,flujoproceso xff 
		where xf.Usuario ='$usuario' 
		and xf.contra='$passsword' and
		xff.Proceso = xf.Proceso";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
echo $fila['Rol'];
if ($fila['Rol']=='estudiante' || $fila['Rol']=='postulante')
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]='estudiante';
	echo "2";
	header("Location: EntradaEstudiante.php");
	exit;
}
if ($fila['Rol']=='Kardex')
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]='kardex';
	header("Location: EntradaKardex.php");
	exit;
}
if ($fila['Rol']=='Direccion')
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]='Direccion';
	header("Location: EntradaDireccion.php");
	exit;
}
$rol = $fila['Rol'];
header("Location: index.php?rol=$rol");
?>
