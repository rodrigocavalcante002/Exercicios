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
