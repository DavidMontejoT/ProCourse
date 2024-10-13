<?php
include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

// Obtener valores del formulario
$id = isset($_POST['id']) ? $_POST['id'] : '';
$nombre_curso = isset($_POST['nombre_curso']) ? $_POST['nombre_curso'] : '';
$accion = isset($_POST['accion']) ? $_POST['accion'] : '';


if (!empty($accion)) {
    switch ($accion) {
        case 'agregar':
            $sql = "INSERT INTO cursos(nombre_curso) VALUES(:nombre_curso)";

            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':nombre_curso', $nombre_curso);
            $consulta->execute();
            break;

        case 'editar':
            $sql = "UPDATE cursos SET nombre_curso = :nombre_curso WHERE id = :id";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':nombre_curso', $nombre_curso);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            break;

        case 'borrar':
            $sql = "DELETE FROM cursos WHERE id = :id";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            break;

            case 'Seleccionar':
                $sql = "SELECT * FROM cursos WHERE id = :id"; // Corregir consulta
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':id', $id, PDO::PARAM_INT); // Validar como entero
                $consulta->execute();
                $cursoid = $consulta->fetch(PDO::FETCH_ASSOC);
                $nombre_curso=$cursoid["nombre_curso"];
                break;
    }
}

$consulta = $conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos = $consulta->fetchAll();

