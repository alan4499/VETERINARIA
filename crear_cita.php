<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $id_usuario = $_SESSION['usuario_id'];
    $sucursal = $_POST['sucursal'];
    $horario = $_POST['horario'];

    $sql = "INSERT INTO citas (id_usuario, sucursal, horario)
    VALUES ('$id_usuario', '$sucursal', '$horario')";

    if ($conn->query($sql) === TRUE) {
        echo "Cita creada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>