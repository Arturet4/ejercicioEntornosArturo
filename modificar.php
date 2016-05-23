<?php

$q = "UPDATE Tabla1 SET campo1='texto1', campo2='texto2' WHERE campo3='texto3'";
$rs = mysql_query($q);
if($rs == false) {
  echo '<p>Error al modificar los campos en la tabla.</p>';
}else{
  echo '<p>Los datos se han modificado correctamente.</p>';
}


?>