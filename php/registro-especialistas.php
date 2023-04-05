<?php
// obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$correo_electronico = $_POST['correo_electronico'];
$password = $_POST['password'];
$especialidad = $_POST['especialidad'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$cedula_profesional = $_POST['cedula_profesional'];

// validar los datos recibidos
// aquí puedes agregar tus propias validaciones según tus requerimientos

if(empty($nombre) || empty($apellido_paterno) || empty($apellido_materno) || empty($correo_electronico) || empty($password) || empty($especialidad) || empty($fecha_nacimiento) || empty($cedula_profesional)) {
    echo "Todos los campos son obligatorios";
    exit;
}

// conectarse a la base de datos
$servername = "localhost";
$username = "LAPTOP-OM4D3TRO/franc";
$password = "";
$dbname = "proyecto2.0";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("No se pudo conectar a la base de datos: " . $conn->connect_error);
}

// insertar los datos en la base de datos
$sql = "INSERT INTO especialistas (nombre, apellido_paterno, apellido_materno, correo_electronico, password, especialidad, fecha_nacimiento, cedula_profesional) VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$correo_electronico', '$password', '$especialidad', '$fecha_nacimiento', '$cedula_profesional')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar los datos: " . $conn->error;
}

$conn->close();
?>
