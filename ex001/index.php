
<?php 
    require_once 'PessoaCarro.php';

    $pessoa1 = new Pessoa();
    $veiculo = new  carro();

    $pessoa2 = new Pessoa();//criou um obejeto do tipo pessoa1
    $veiculo2 = new carro();
    

    //como setar valores para os atributos de um objeto
   
        $pessoa1 -> nome = "rodrigo";
        $pessoa1 -> idade = "16";
        $veiculo -> carro = "toyota AE86";
    
        $pessoa2 -> nome = "Laisa";
        $pessoa2 -> idade = "18";
        $veiculo2 -> carro = "Mazda Rx-7 FD";
  
        //como escrever ou como pegar o conteudo de um atributo
        echo '<p>Nome: '.$pessoa1->nome.'</p>';
        echo '<p>Idade: '.$pessoa1->idade. '</p>';
        echo '<p>Idade: '.$veiculo->carro. '</p>';

        echo '<p>Nome: '.$pessoa2->nome.'</p>';
        echo '<p>Idade: '.$pessoa2->idade. '</p>';
        echo '<p>Idade: '.$veiculo2->carro. '</p>';
        echo '<hr>';



        echo "<pre>";
            var_dump($pessoa1);
            var_dump($pessoa2);  
        echo "</pre>";
?>