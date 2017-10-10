<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>M07Pizza</title>
</head>

<body>
    <style>
        body {
            background-color: dimgrey;
        }

        div {
            background-color: cornsilk;
            border-radius: 10px;
            display: inline-block;
            padding: 25px;
            margin-left: 75px;
        }

        h2 {
            background-color: cornsilk;
            border-radius: 10px;
            display: inline-block;
            padding: 25px;
        }

    </style>
    <?php   
      echo "<h2>Seleccione los ingredientes:</h2><br>";
      echo "<div>";
        echo ("<form action='Funciones.php' method='POST'>
                <label><input type='checkbox' name='Ingredientes[]' value='Masa' checked='checked'>Masa </label><br>
                <label><input type='checkbox' name='Ingredientes[]' value='Oregano'checked='checked'/>Oregano </label><br>
                <label><input type='checkbox' name='Ingredientes[]' value='Jamon dulce'/>Jamon dulce</label><br>
                <label><input type='checkbox' name='Ingredientes[]' value='Carne'/>Carne </label><br>
                <label><input type='checkbox' name='Ingredientes[]' value='Bacon'/>Bacon </label><br>
                <input type='submit'/>
            </form>");
     echo "</div>";
    ?>
</body>

</html>
