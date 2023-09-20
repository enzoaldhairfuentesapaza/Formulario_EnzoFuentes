<?php
$nombreApellidos = $_POST['n_apellidos'];
$fechaNacimiento = $_POST['f_nacimiento'];
$ocupacion = $_POST['ocupacion'];
$contacto = $_POST['contacto'];
$nacionalidad = $_POST['nacionalidad'];
$nivelIngles = $_POST['n_ingles'];
$lenguajesProgramacion = isset($_POST['lenguajes_programacion']) ? $_POST['lenguajes_programacion'] : array();
$aptitudes = $_POST['aptitudes'];
$habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : array();
$perfil = $_POST['perfil'];

echo "<h2>Datos Recibidos:</h2>";
echo "<p><strong>Nombre y Apellidos:</strong> $nombreApellidos</p>";
echo "<p><strong>Fecha de Nacimiento:</strong> $fechaNacimiento</p>";
echo "<p><strong>Ocupación:</strong> $ocupacion</p>";
echo "<p><strong>Contacto:</strong> $contacto</p>";
echo "<p><strong>Nacionalidad:</strong> $nacionalidad</p>";
echo "<p><strong>Nivel de inglés:</strong> $nivelIngles</p>";
echo "<p><strong>Lenguajes de Programación:</strong> " . implode(", ", $lenguajesProgramacion) . "</p>";
echo "<p><strong>Aptitudes:</strong> $aptitudes</p>";
echo "<p><strong>Habilidades:</strong> " . implode(", ", $habilidades) . "</p>";
echo "<p><strong>Perfil:</strong> $perfil</p>";
?>