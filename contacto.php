<?php

    include("conexion.php");
    if (isset ($_POST['aceptar']))
    {
        $nomyape = $_POST['nomyape'];
        $email = $_POST['email'];
        $comentario = $_POST['comentario'];
        $sql = "INSERT INTO comentarios (nomyape, email, comentario) VALUES ('$nomyape', '$email', '$comentario')";
        //var_dump($sql);
        if (!mysqli_query($conexion, $sql))
        {
            echo "Error al guardar.";
        }else{
            echo "Datos guardados.";
        }
    }    
    mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cambio Climatico</title>
    
    </head>
    
<body>

<div class="caja">

    <h2 class="formulario">Comentario</h2>

    <form action = "contacto.php" method="POST" >
    
    <label for="nomyape">Nombre y Apellido: <input type = "text" name = "nomyape" required class="texto"><br><br> </label>

    <label for="email">  Email: <input type = "email" name = "email" required class="texto"><br><br></label>  

    <label for="comentario"> Comentario: <br><br><textarea name = "comentario" class="texto"></textarea> <br> <br> <br></label>

    <input type="submit" value="Aceptar" name="aceptar" class="btn-aceptar">


    <input type = "reset" value = "Limpiar" class="btn-limpiar">
    </form>

</div>

        


</body>

</html>   