<?php
include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$nombre_curso=isset($_POST['nombre_curso'])?$_POST['nombre_curso']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';




if ($accion != '') {
    switch ($accion) {
        case 'agregar':
            $sql = "INSERT INTO cursos(id,nombre_curso) VALUES(NULL,'$nombre_curso')";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':nombre_curso', $nombre_curso);
            $consulta->execute();
            echo($sql);
            break;
        case 'editar':
            $sql = "UPDATE cursos SET nombre_curso=$nombre_curso";
            break;
        case 'borrar':
            $sql = "DELETE FROM cursos WHERE id=$id";
            break;

    }

} 

$consulta=$conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos=$consulta->fetchAll();





