<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>M07Pizza</title>
</head>

<body>
    <?php
      
        echo ("<form action='Funciones.php' method='POST'>
                <label><input type='checkbox' name='Ingredientes[]' value='Masa' checked='checked'>Masa </label><br>
                <label><input type='checkbox' name='Ingredientes[]' value='Oregano'checked='checked'/>Oregano </label><br>
                <label><input type='checkbox' name='Ingredientes[]' value='Jamon dulce'/>Jamon dulce</label><br>
                <label><input type='checkbox' name='Ingredientes[]' value='Carne'/>Carne </label><br>
                <label><input type='checkbox' name='Ingredientes[]' value='Bacon'/>Bacon </label><br>
                <input type='submit'/>
            </form>");
    ?>
</body>

</html>
