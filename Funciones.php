<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Su pizza</title>
</head>

<body>
    <?php
        $Masa_i_Oregano = array(false,false);
        $Precio_Pizza = 5;
    
    if(isset($_POST['Ingredientes'])){
        $Ingredientes = $_POST['Ingredientes'];
        if(empty($Ingredientes)){
            echo "<h1>Espero que te disfrutes del aire :)</h1>";
        }
        else{
            foreach($Ingredientes as $chkval){
                if($chkval == "Masa"){
                    $Masa_i_Oregano[0] = true;
                    echo "$chkval<br>";
                    
                }
                if($chkval == "Oregano"){
                    $Masa_i_Oregano[1] = true; 
                    echo "$chkval<br>";
                }
                if($chkval != "Oregano" && $chkval != "Masa"){
                    $Precio_Pizza += 0.5;
                }
            }
            if($Masa_i_Oregano[0]==true && $Masa_i_Oregano[1]==true){
                echo "<h3>Tu pizza con:</h3>";
                foreach($Ingredientes as $chkval){
                    echo "<li>$chkval</li>";
                    }
                echo "<h4>Tiene un precio de $Precio_Pizza</h4>";
            }
        }
        }
    else{
        echo "<h1>Espero que te disfrutes del aire :)</h1>";
    }
    ?>
</body>

</html>
