
<?php 
// --------------- MySQLi Oject-Oriented -----------------
// Variáveis de conexão

// $servername = "localhost";
// $username = "username";
// $password= "password";

// Criando conexão

// $conn = new mysqli($servername, $username, $password);

// // Checando a conexão

// if($conn->connect->error) {
//     die("Conexão falhou" . $conn->connect_error);
// }
// echo "Conectado com sucesso";

//-- ------------------- MySQLi Procedural -------------------------------

// Variáveis de conexão

// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Criando conexão

// $conn = new mysqli_connect($servername, $username, $password);

// // Checando conexão

// if(!$conn) {
//     die("conexão falhou" . mysqli_connect_error());
// }
// echo "conectado com sucesso";

// ------------------------------ PDO ------------------------------------

// Variáveis de conexão

// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Tentar conexão

// try {

//     $conn = new PDO("mysql:host=$servername; $dbname=myDB", $username, $password);

//     // Configurando Exception de Erro

//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "conexão bem sucedida";

// }catch(PDOEXCEPTION $e) {
//     echo "Conexão falhou" . $e->getMessage();
// }
?>