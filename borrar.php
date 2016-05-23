<?php



$sql = "DELETE FROM profesores WHERE id=2;";
$consulta = mysql_query($sql);
if($consulta == false) {
	echo '<p>Error al eliminar profesor.</p>';
}else{
	echo '<p>el profesor se ha eliminado.</p>';
}

?>
