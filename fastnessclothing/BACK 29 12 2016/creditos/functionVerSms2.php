<?php
session_start();


include('connect_db.php');
include('consultasMorosos.php');


$query = mysqli_query($link,$ConsultaQuincenaMorosos);

  while ($row = mysqli_fetch_array($query)) {


if($row['telefono1']!='')

 {
$mensajeAEnviar=" Marcas Genuinas le recuerda que tiene " . intval($row['cuotasAtrasadas']) ." cuotas atrasadas. Por favor, comuniquese al numero 40305859 \n";
   



 echo "A " . rtrim($row['nombre']) . "Se le envia al: " . $row['telefono1'] . " el siguiente mensaje: " . $mensajeAEnviar ;






 }
else
{

echo "A " . rtrim($row['nombre']) . "No se le envia mensaje ya que no tiene numero registrado ";

}

  }
  exit;
?>