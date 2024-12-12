public function consultarPaciente($doc){
 $conexion = new Conexion();
 $conexion->abrir();
 $sql = "SELECT * FROM Pacientes WHERE PacIdentificacion = '$doc' ";
 $conexion->consulta($sql);
 $result = $conexion->obtenerResult();
 $conexion->cerrar();
 return $result ;
 }