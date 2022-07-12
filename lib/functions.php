<?php
require_once("../lib/connect.php");
function get_all_alumnos($connect){  
$consulta = "SELECT * FROM alumnos";
$resultado = mysqli_query($connect, $consulta);

return $resultado;

}
function get_alumno($connect, $id){  
    $consulta = "SELECT * FROM alumnos WHERE cumid = $id";
    $resultado = mysqli_query($connect, $consulta);
    
    return $resultado;
    
    }
    require_once("../lib/connect.php");
function get_all_maestros($connect){  
$consulta = "SELECT * FROM maestros";
$resultado = mysqli_query($connect, $consulta);

return $resultado;

}

    function get_master($connect, $id){  
        $consulta = "SELECT * FROM maestros WHERE ID = $id";
        $resultado = mysqli_query($connect, $consulta);
        
        return $resultado;
        
        }

        require_once("../lib/connect.php");
        function get_all_materias($connect){  
        $consulta = "SELECT * FROM materias";
        $resultado = mysqli_query($connect, $consulta);
        
        return $resultado;
        
        }

 function get_materia($connect, $id){  
     $consulta = "SELECT * FROM materias WHERE ID = $id";
     $resultado = mysqli_query($connect, $consulta);
     
     return $resultado;
     
     }
//aqui va el insert (alumnos part)
function insertar_alumnos($Cumbre, $CUMellido, $CUMofono, $correo, $cuatrimestre, $licenciatura, $status){
    global $connect;
    $consulta = "insert into alumnos(Cumbre, CUMellido, CUMofono, correo, cuatrimestre, licenciatura, status) values('$Cumbre','$CUMellido','$CUMofono','$correo','$licenciatura','$cuatrimestre','$status')";
    $resultado = mysqli_query($connect, $consulta);
    
    //return $resultado;

}
//insert master
function insertar_maestros($nombre, $apellido, $telefono, $correo, $Status){
    global $connect;
    $consulta = "insert into maestros(nombre, apellido, telefono, correo, Status) values('$nombre', '$apellido', '$telefono', '$correo', '$Status')";
    $resultado = mysqli_query($connect, $consulta);
    
    //return $resultado;
}
//insert materias
function insertar_materias($Nombre, $Materia, $Licenciatura, $Cuatrimestre, $Status){
    global $connect;
    $consulta = "insert into materias(Nombre, Materia, Licenciatura, Cuatrimestre, Status) values('$Nombre', '$Materia', '$Licenciatura', '$Cuatrimestre', '$Status')";
    $resultado = mysqli_query($connect, $consulta);
    
    //return $resultado;
}

//aqui va el update-  (alumnos part)
function update_alumnos($Cumbre, $CUMellido, $CUMofono, $correo, $cuatrimestre, $licenciatura, $status, $cumid){
    global $connect;
    $consulta = $consulta = "update alumnos set Cumbre='$Cumbre', CUMellido='$CUMellido', CUMofono='$CUMofono', correo='$correo', cuatrimestre='$cuatrimestre', licenciatura='$licenciatura' where cumid=$cumid";
    $resultado = mysqli_query($connect, $consulta);

    //return $resultado;
}
//TAREA hacer el eliminar hoomie 
//tarea 2 mnsj de errorrrrr -------> es algo del error y un if para mandar echo de error/ otra seria el trycatch
//set campo correo como un unique

?>