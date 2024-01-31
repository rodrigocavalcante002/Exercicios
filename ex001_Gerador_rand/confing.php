
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixa gerada</title>
</head>
<body>
<?php 
  $pessoa = $_POST[('nome')]. $_POST[('sobrenome')];
  
  if(!empty($pessoa)){
    echo "<h1><code>sua fixa é:<code> ".rand(1, 1000)."<h1>";
  }else{
    echo "Digite as informações.";
  };
  

?>
</body>
</html>
