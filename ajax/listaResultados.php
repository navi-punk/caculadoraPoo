<?php
// incluimos el fichero de conexion
include("conection.php");

// difinir el encabezado de la tabla
$data = '<table class="table table-bordered table-striped">
		<tr>
			<th>ID</th>
			<th>Numero</th>
      <th>Operador</th>  
			<th>Numero</th>
      <th>Resultado</th>
		</tr>';

$query = "SELECT * FROM operaciones";

if (!$result = pg_query($dbconn, $query)) {
	exit(pg_error($dbconn));
}

if(pg_num_rows($result) > 0)
{

while($row = pg_fetch_assoc($result))
{
$data .= '<tr>
	<td>'.$row['id'].'</td>
	<td>'.$row['numero1'].'</td>
	<td>'.$row['operador'].'</td>
  <td>'.$row['numero2'].'</td>
  <td>'.$row['resultado'].'</td>
</tr>';
}
}
else
{
	$data .= '<tr><td colspan="6">No hay registros!</td></tr>';
}
$data .= '</table>';
echo $data;
?>
