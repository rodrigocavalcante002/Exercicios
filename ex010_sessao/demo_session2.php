<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //echo Variáveis se Sessão que foram definidas no início
        echo "Favorite color is:". $_SESSION["favcolor"]."<br>";
        echo "Favorite animal is:". $_SESSION["favanimal"]."<br>";    
    ?>
</body>
</html>