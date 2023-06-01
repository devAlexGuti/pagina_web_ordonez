<?php 
include 'cn.php';

$nombre = $_POST["Nombre"];
$empresa = $_POST["Empresa"];
$DNI = $_POST["DNI"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];
$insertar ="INSERT INTO CONTACTO(NOMBRES, EMPRESA, DNI, EMAIL, MENSAJE) VALUES ('$nombre', '$empresa', '$DNI', '$email','$mensaje' ) ";

$resultado = mysqli_query($conexion,$insertar);
if (!$resultado){
    echo 'Error al registrarse';
    
}else {
    echo 'Usuario registrado exitosamente';
}

mysqli_close($conexion);


