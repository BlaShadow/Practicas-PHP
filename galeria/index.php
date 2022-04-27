<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeria</title>

  <style>
    body {
      background-color: #082243;
    }

    #titulo {
      text-align: center;
      color: white;
    }

    #contenido {
      width: 620px;
      margin: auto;
    }

    #imagen_principal {
      padding: 10px;
      width: 580px;
      margin: 0px 10px;
      background-color: #F2F4F5;
    }

    #contenedor_imagenes {
      width: 600px;
      margin: 0px 10px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      background-color: #F2F4F5;
    }

    #contenedor_imagenes img {
      width: 178px;
      height: 150px;
      margin: 10px;
      object-fit: cover;
      border: 1px solid black;
      cursor: grab;
    }

    #controles {
      display: flex;
      justify-content: space-between;
      padding: 20px;
    }

    #controles img {
      width: 32px;
    }
  </style>
</head>
<body>

  <?php
    $lista_imagenes = [
      "https://cdn2.thecatapi.com/images/fa.jpg",
      "https://cdn2.thecatapi.com/images/d65.jpg",
      "https://cdn2.thecatapi.com/images/YYewlnt3A.jpg",
      "https://cdn2.thecatapi.com/images/Iv8NtbsvS.jpg",
      "https://cdn2.thecatapi.com/images/1MP-xZTo7.jpg",
      "https://cdn2.thecatapi.com/images/WvCorlsxO.jpg",
      "https://cdn2.thecatapi.com/images/G73FEJ-Q3.jpg",
      "https://cdn2.thecatapi.com/images/8xUbLqx3b.jpg",
      "https://cdn2.thecatapi.com/images/ba.jpg",
    ];

  ?>

  <div id="contenido">
    <h2 id="titulo">Galeria de Imagenes <?php echo $_GET['id_imagen']; ?> </h2>

    <?php
      $numero_actual = $_GET['id_imagen'];
      $imagen_actual = $lista_imagenes[$_GET['id_imagen']];

      if ($imagen_actual === null) {
        $imagen_actual = $lista_imagenes[0];
      }

      echo "<img id='imagen_principal' src='".$imagen_actual."' />";

      $siguiente_imagen = $numero_actual + 1;
      $anterior_imagen = $numero_actual - 1;
    ?>

    <div id="controles">
      <a href="/index.php?id_imagen=<?php echo $anterior_imagen; ?>">
        <img src="./images/icono_flecha_izquierda.png" alt="">
      </a>

      <a href="/index.php?id_imagen=<?php echo $siguiente_imagen; ?>">
        <img src="./images/icono_flecha_derecha.png" alt="">
      </a>
    </div>

    <div id="contenedor_imagenes">
      <?php
        for ($i=0; $i < count($lista_imagenes); $i++) { 
          $imagen_actual = $lista_imagenes[$i];

          echo "<a href='/index.php?id_imagen=".$i."'><img src='".$imagen_actual."'></a>\n";
        }
      ?>
    </div>
  </div>
</body>
</html>