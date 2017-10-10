<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Su pizza</title>
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

    </style>
    <?php
        $Masa_i_Oregano = array(false,false);
        $Precio_Pizza = 5;
    
    if(isset($_POST['Ingredientes'])){
        $Ingredientes = $_POST['Ingredientes'];
        if(empty($Ingredientes)){
            echo "<h1>Espero que te disfrutes del aire :)</h1>";
        }
        else{
            echo "<div>";
            foreach($Ingredientes as $chkval){
                if($chkval == "Masa"){
                    $Masa_i_Oregano[0] = true;
                }
                if($chkval == "Oregano"){
                    $Masa_i_Oregano[1] = true; 
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
            elseif($Masa_i_Oregano[0]==false && $Masa_i_Oregano[1]==true){
                echo "Una buena pizza tiene que contener: Masa<br>";
                header ("refresh:5;url=Inici.php" );
            }
            elseif($Masa_i_Oregano[0]==true && $Masa_i_Oregano[1]==false){
                echo "Una buena pizza tiene que contener: Oregano<br>"; 
                header ("refresh:5;url=Inici.php" );               
            }
            else{
                echo "Una buena pizza tiene que contener: Masa<br>";   
                echo "Una buena pizza tiene que contener: Oregano<br>";   
                header ("refresh:5;url=Inici.php" );              
            }
            echo "</div>";
        }
        }
    else{
        echo "<h1>Espero que te disfrutes del aire :)</h1>";
    }
    ?>
</body>

</html>
