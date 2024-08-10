
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phines</title>
    <!-- Incluido arquivos -->
    <link rel="stylesheet" href="estilo/page_img_select_.css">
    <?php include 'conf_api.php'?>
</head>
<body>
<div class="body_container">
    <!-- Imagem principal da página(selecionada) -->
    <div class = "container_imgs">
        <!-- GET id com a url da imagem escohida  -->
        <a href="<?= $_GET['id']?>"><img src="<?= $_GET['id']?>" alt=""></a>
    </div>
    <!-- Estrutura de repetição -->
        <?php foreach($url_images as $url_img):?>
            <!-- GET id recebendo outra url caso uma das recomendações seja escolhida  -->
            <a href="?id=<?= $url_img?>">
                <div class="img_recommendations">
                    <img src="<?= $url_img?>" alt="">
                </div>
            </a>
        <?php endforeach?>
</div>
</body>
</html>