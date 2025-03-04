<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
      $conexion = mysqli_connect('localhost', 'DCU', 'contraseña');
      if (!$conexion) die('Error de conexión');
      mysqli_select_db($conexion, "DCU");

      $id = isset($_GET["id"]) ? $_GET["id"] : 1;

      // Obtener datos del usuario
      $consulta = "SELECT nombre, genero, formato FROM Emanuel_Gustavo_Rafael2025 WHERE id = $id";
      $resultado = mysqli_query($conexion, $consulta);
      $usuario = mysqli_fetch_assoc($resultado);

      // Personalizar saludo e imagen
      $saludo = "¡Hola " . $usuario['nombre'] . "! Te recomendamos estos libros de <strong>" . $usuario['genero'] . "</strong> en formato <strong>" . $usuario['formato'] . "</strong>.";
      $imagen = strtolower($usuario['genero']) . "-" . strtolower($usuario['formato']) . ".jpg";
    ?>
    <h1>Bienvenidos a nuestra tienda de libros</h1>
    <p>Encuentra los mejores libros a los mejores precios.</p>
    <h2>Como sabemos que te gusta</h2>
    <ul>
      <li>Libros físicos</li>
      <li>Ficción</li>
    </ul>
    <h3>Te recomendamos:</h3>
    <h2>1984</h2>
    <img
      width="250px"
      src="https://www.popularlibros.com/imagenes-webp-grandes/9780141/978014103614.webp"
      alt="Foto de un libro"
    />
  </body>
</html>
