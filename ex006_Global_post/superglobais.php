<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPER GLOBAIS</title>
</head>
<body>
    <hr><br>
    <h1> GLOBAL &#x24
    _POST</h1>
    <!--código do Cifrão:  &#x24-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="user">Nome:</label>
        <input type="text" name="user">
        <input type="submit" value="Enviar>">
    </form>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // COLETANDO OS VALORES
        $nome = $_POST['user'];
        if (empty($nome)) {
            echo "Nome vazio";
        } else {
           echo "Seu nome é: ".$nome;
        }

    }
    echo "<br>";
    echo "<hr>";



?>

</body>
</html>