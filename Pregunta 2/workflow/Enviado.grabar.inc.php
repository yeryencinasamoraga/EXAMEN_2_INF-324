<?php
include 'conexion.inc.php';
$usuario=$_GET["usuario"];
$fecha_ini = date("Y-m-d");
$sql="UPDATE flujoprocesoseguimiento set rechazo ='Revision',FechaInicio='$fecha_ini',Proceso='P3',
FechaFin =null
 where Usuario='$usuario' ";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
?>