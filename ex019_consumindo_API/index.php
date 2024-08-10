</body>
</html>

<!DOCTYPE html>
<html lang="pt_br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phines</title>
    <link rel="icon" href="imagens/logon.png">
    <link rel = "stylesheet" href = "estilo/style_.css">
    <?php include 'conf_api.php'?>
</head>
<body>
<!-- header -->
<div class="header">
    <!-- De volta para Home -->
    <div class="home_container"><div class="home"><a href="?home=1">Home</a></div></div>
    <!-- barra de pesquisa -->
    <div class="search_bar">
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="get">
            <input type = "text" name="search" id="id_img" placeholder=" &#128270 Pesquisar" value="<?= $_GET['search']??""?>">
            </form>
        </div>
</div>
<!-- Body/Corpo do site -->
<div class="body_container">
    <!-- Estrutura de repetição -->
    <?php foreach($url_images as $url_img):?>
        <div class = "container_imgs">
            <a href="page_img.php?id=<?= $url_img?>>"><img src="<?= $url_img?>" alt=""></a>
        </div>
    <?php endforeach ?>
</div>
</body>
</html>