
<?php 
$conexion;
$conexion = new mysqli("localhost", "root", "", "coment");
    
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];
$fecha = $_POST['fecha'];
$lenguaje = $_POST['lenguaje'];

if ($nombre == NULL) {

} else {
    $sql = "INSERT INTO comentarios (nombre, comentario, fecha, lenguaje) VALUES ('$nombre', '$comentario', '$fecha','$lenguaje')";
    $result = $conexion->query($sql);
}

if ($_POST['lenguaje'] == 'java.php') {
    
    $sql = "select * from comentarios where lenguaje='java.php'";
    $result = $conexion->query($sql);
    $comentarios = array();
    while ($row = $result->fetch_assoc()) {
        $comentarios[] = $row;
    }

    foreach ($comentarios as $valor){
        echo "Nombre: " . $valor['nombre'] . " // Comentario: " . $valor['comentario'] . "<br/>";   
    }

} else if ($_POST['lenguaje'] == 'javascript.php') {
    $sql = "select * from comentarios where lenguaje='javascript.php'";
    $result = $conexion->query($sql);
    $comentarios = array();
    while ($row = $result->fetch_assoc()) {
        $comentarios[] = $row;
    }

    foreach ($comentarios as $valor){
        echo "Nombre: " . $valor['nombre'] . " // Comentario: " . $valor['comentario'] . "<br/>";   
    }
} 

?>