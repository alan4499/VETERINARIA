<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_cuidador = $_POST['nombre_cuidador'];
    $email_cuidador = $_POST['email_cuidador'];
    $telefono_cuidador = $_POST['telefono_cuidador'];
    $usuario = $_POST['usuario'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
    $nombre_mascota = $_POST['nombre_mascota'];
    $tipo_mascota = $_POST['tipo_mascota'];
    $edad_mascota = $_POST['edad_mascota'];

    $sql = "INSERT INTO usuarios (nombre_cuidador, email_cuidador, telefono_cuidador, usuario, contrasena, nombre_mascota, tipo_mascota, edad_mascota)
    VALUES ('$nombre_cuidador', '$email_cuidador', '$telefono_cuidador', '$usuario', '$contrasena', '$nombre_mascota', '$tipo_mascota', '$edad_mascota')";

    if ($conn->query($sql) === TRUE) {
        echo "Cuenta creada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>