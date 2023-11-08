
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <br>
    <form action="#" method="get">
       <div class="input-group mb-3">
       <div class="col-sm-3">
       <input type="text" class="form-control" placeholder="Buscar.." aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
       </div>
       <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class='bx bx-search-alt-2'></i></button>
       </div>
    </form>
    
</body>
</html>
<?php

#if(isset($_GET['search'])){
 #   $mibusqueda=$_GET['search'];
  #  ejecutar_consulta($mibusqueda);
#}
$mipagina=$_SERVER['PHP_SELF'];
if($mibusqueda!=NULL){
    
}else{
    echo("<form action='".$mipagina."'method='get'
    <label>Buscar:<input type= 'text' name='buscar></label>
    input type='submit' name='search' value='Enviar'>
    </form>");
}
function ejecutar_consulta($laconsulta){
include('../conexion.php');
$consulta1= "SELECT * FROM productos WHERE producto LIKE '%$laconsulta%'";
$resultado= mysqli_query($conexion, $consulta1);
echo"
    <br>
    <br>
    <table class='table'>
    <thead class='table-dark'>
    <tr>
        <th scope='col'>ID Producto</th>
        <th scope='col'>Nombre Producto</th>
        <th scope='col'>Origen</th>
        <th scope='col'>Importado</th>
        <th scope='col'>Precio</th>
    </tr>
    </thead>
   ";
while($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
   
    echo "<tbody>
    <tr><td>";
    echo $fila['id_producto']."</td><td>";
    echo $fila['producto']."</td><td>";
    echo $fila['origen']."</td><td>";
    echo $fila['importado']."</td><td>";
    echo $fila['precio']."</td><td></tr>";
    echo "</tbody>";
}
echo"</table>";
}
?>
