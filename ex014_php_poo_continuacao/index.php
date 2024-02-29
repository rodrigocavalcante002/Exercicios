<?php 
// class Pessoa 
// {
//     // Propiedades/atributos
//     public $nome;
//     public $idade;

//     // Métodos/funções
//     public function Falar(){
//         echo $this -> nome . ", de idade " . $this -> idade. " acabou de falar <br>";
//     }
// }

// $rodrigo = new Pessoa();
// $rodrigo -> nome = "Rodrigo Cavalcante dos Santos";
// $rodrigo -> idade = "17";
// $rodrigo -> Falar();
// // echo $rodrigo -> nome;
// // var_dump($rodrigo);

class Login
{
    private $email;
    private $senha;
    private $nome;
    
    public function getNome() {
        return $this->nome;
    }

    public function __construct($email, $senha, $nome) {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($s) {
        $this->senha = $s;
    }

    public function Logar() {
        
        if($this->email == "rodrigocavalcante@gmail.com" and $this->senha == "12345"){
            echo "Logado com sucesso!";
        }else{
            echo "Dados inválidos";
        }

    }
    
}
$logar = new Login("rodrigocavalcante@gmail.com", "12345", "Rodrigo Cavalcante dos Santos");

$logar->Logar();
echo "<br>";

echo $logar->getNome() . "<br>";
?>