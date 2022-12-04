<?php
   
    include "conexion.inc.php";
    $fecha_fin = date("Y-m-d"); 
    $usuario=$_GET["usuario"];
    if(isset($_GET["Si"])){
        $sql2="UPDATE flujoprocesoseguimiento set rechazo ='Aceptado',FechaFin='$fecha_fin',Proceso='P3'
         where Usuario='$usuario' "; 
        $resultado=mysqli_query($con, $sql2);
        $fila=mysqli_fetch_array($resultado);
    }
    if(isset($_GET["No"])){
        $sql2="UPDATE flujoprocesoseguimiento set rechazo ='Rechazado',FechaFin='$fecha_fin',Proceso='P1'
         where Usuario='$usuario' ";
        $resultado=mysqli_query($con, $sql2);
        $fila=mysqli_fetch_array($resultado);
    }
?>