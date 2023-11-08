<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../estilos.css">
<?php
include('conexion.php');
$consulta = "SELECT * FROM productos WHERE seccion ='CERAMICA'";
$resultado= mysqli_query($conexion, $consulta);
echo"
<br>
<br>
<table class='table'>
<thead class='table-dark'>
<tr>
  <th scope='col'>ID Producto</th>
  <th scope='col'>Nombre Producto</th>
  <th scope='col'>Precio</th>
</tr>
</thead>";
while($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
    echo "<tbody>
    <tr><td>";
    echo $fila['id_producto']."</td><td>";
    echo $fila['producto']."</td><td>";
    echo $fila['precio']."</td><td></tr>";
    echo "</tbody>";
}
echo"</table>";
?>


