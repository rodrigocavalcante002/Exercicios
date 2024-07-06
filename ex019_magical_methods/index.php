
<?php 
// Inicializando uma sessão cURL
$ch = curl_init();
// URL da API Pexels 
if(isset($_GET['search'])){
    $query = $_GET['search'];
    
    $url = "https://api.pexels.com/v1/search?query=$query";
    // Imagens Indisponíveis Neste Serviço
    // TENTAR PEGAR EXCEPTION
}else{
    $url = 'https://api.pexels.com/v1/curated';
}
// Voltar para home
if(isset($_GET['home'])){
    $url = 'https://api.pexels.com/v1/curated';
}
// Cabechalho
$header = [
    'Authorization: mo3VN7T7Cvr6pEbdWnR6YafLR3tgH4cgHnmzuB4pmrGwAdMiGwpNrilo'
];

// Configurando
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
// Executando a sessão
$result = curl_exec($ch);
// Decodificando os dados com Json
$data = json_decode($result, TRUE);

// var_dump($data["photos"]);
foreach($data["photos"] as $value){
    //Pegando a chave para exibir a url
    $url_images[] = $value["src"]["medium"];
}

// Fechando o cURL
curl_close($ch);
?>

</body>
</html>

<!DOCTYPE html>
<html lang="pt_br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phines</title>
    <link rel="icon" href="Exercicios/imagens/logon.png">
    <link rel = "stylesheet" href = "estilo/style_.css">
</head>
<body>
<!-- header -->
<div class="header">
    <!-- De volta para Home -->
    <div class="home_container"><div class="home"><a href="?home=1">Home</a></div></div>
    <!-- barra de pesquisa -->
    <div class="search_bar">
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="get">
            <input type = "text" name="search" id="id_img" placeholder=" &#128270 Pesquisar" value="<?php echo $_GET['search']??""?>">
            </form>
        </div>
</div>
<!-- Body/Corpo do site -->
<div class="body_container">
    <!-- Estrutura de repetição -->
        <?php foreach($url_images as $url_img):?>
                <div class = "container_imgs">
                    <a href="<?php echo $url_img?>"><img src="<?php echo $url_img?>" alt=""></a>
                </div>
        <?php endforeach ?>
</div>
</body>
</html>