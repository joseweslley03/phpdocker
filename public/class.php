<?php
    class Produto{
        public $valor = 10;
        public $nome = 'Pão';
        public function colocarEmPromocao($percentual){
            $this->valor = $this->valor*(100-$percentual)/100;
        }
    }
    $caipirinha = new Produto();
    $caipirinha->nome = 'Caipirinha';
    $caipirinha->valor = 10;
    $caipirinha->colocarEmPromocao(15);
    echo $caipirinha->nome.' - '.$caipirinha->valor;
    echo '<br>';

    $cerveja = new Produto();
    $cerveja->nome = 'Cerveja';
    $cerveja->valor = 15;
    $cerveja->colocarEmPromocao(5);
    echo $cerveja->nome.' - '.$cerveja->valor;
    echo '<br>';
    
?>

<?php
    class Carro{
        public $valor = 55000;
        public $nome = 'Palio';
    }
    $palio = new Carro();
    $celta = new Carro();
    $celta->nome = 'Celta';
    $celta->valor = 66000;
    echo $celta->nome;
    echo '<br>';
    echo $celta->valor;
    echo '<br>';
    echo $palio->nome;
    echo '<br>';
    echo $palio->valor;
    
?>