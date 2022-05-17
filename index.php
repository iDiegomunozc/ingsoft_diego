<!-- conexion bds -->
<?php include("bds/conexion.php")?>
<!-- fin conexion bds -->

<!-- mostrar datos en la tabla -->
<?php include("mostrar_id_url.php")?>
<!-- fin de mostrar datos -->

<!-- Francisco Miguel González Placencia
rut:19.821.574-0
fecha: 15-05-2022

Tarea: ayudantia -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- agregar hoja de estilo css -->
    <link href="styles/style.css" rel="stylesheet">
    <!-- fin -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Listar</title>
</head>

<body style="display:flex;justify-content:center;align-items:center; background:#000;flex-direction:column;  margin:0">

    <h1 style="color: white; margin:5px 0 0 0">Actividad Listar</h1>

    <div>
        <table>

            <tr>
                <th scope="col">id</th>
                <th scope="col">Url</th>
            </tr>

            <?php  if($mostrar_datos_cosulta):  foreach($mostrar_datos_cosulta as $row): ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><a href="<?php echo $row['url'] ?>" target="_blank"><?php echo $row['url'] ?></a></td>

            </tr>
            <?php endforeach;endif ?>

        </table>
    </div>

    <div>
        <form action="index.php" method="POST" style="text-align: center">
            <input type="number" min="1" max="10" placeholder="id" name="id_enviar" required>
            <input type="submit" value="Ver imagen" name="submit" require>
            <br>
        </form>

        <?php

	        if (isset($_POST['submit']) && !empty($_POST['submit']) && $_POST['id_enviar']){
         
              $idImagen = $_POST['id_enviar'];
              $mostrar_imagen_cosultaSql =  "SELECT url FROM imagenes WHERE id = $idImagen";
              $mostrar_imagen_cosulta =  mysqli_query($con,$mostrar_imagen_cosultaSql);
              $dato = $mostrar_imagen_cosulta->fetch_assoc();
              $Imagen = $dato["url"];

              echo "<img src=".$Imagen." alt='gato'>"; 
              
            }
        ?>

    </div>

</body>

</html>