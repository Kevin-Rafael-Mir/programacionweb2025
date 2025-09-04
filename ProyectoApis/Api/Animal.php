<?php
class Animal {

    private $conexion;
    public function __construct($conexion) {
        $this->conexion = $conexion;
}

    public function obtenerTodos() {
    // Creamos la consulta SQL para seleccionar los campos deseados de la tabla 'animales'
    $query = "SELECT * FROM animales";
    // Preparamos la consulta usando la conexión a la base de datos para evitar inyecciones SQL
    $stmt = $this->conexion->prepare($query);
    // Ejecutamos la consulta preparada
    $stmt->execute();
    // Obtenemos todos los resultados como un array asociativo y lo devolvemos
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Método para obtener un animal específico por su ID
public function obtenerPorIDd($id) {
    // Creamos la consulta SQL con un marcador de posición para el ID
    $query = "SELECT * FROM animales WHERE id_animal=:id";
    // Preparamos la consulta usando la conexión a la base de datos
    $stmt = $this->conexion->prepare($query);
    // Asociamos el valor recibido en $id al marcador ':id' en la consulta, asegurando que sea un entero
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    // Ejecutamos la consulta preparada
    $stmt->execute();
    // Obtenemos el resultado como un array asociativo (solo un registro) y lo devolvemos
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
}
