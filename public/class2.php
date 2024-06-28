<?php
class Pessoa{
    private $nome;
    private $idade;
    private $altura;

    public function __construct($nome, $idade, $altura)
    {
       $this->nome = $nome;
       $this->idade = $idade;
       $this->altura = $altura; 
    }

    public function altura(){
        echo 'Altura: ' . $this->altura .'<br>';
    }

    public function idade(){
        echo 'Idade: ' . $this->idade .'<br>';
    }

    public function envelhecer($qtdAnos){
        echo 'Envelheceu: ' . $qtdAnos .'<br>';
        for($i=0;$i<$qtdAnos;$i++){
            $this->crescer();
            $this->idade++;
        }
    }
    public function crescer(){
        if($this->idade < 21){
            $this->altura = $this->altura + 0.05;
        }
    }
}

$pessoal = new Pessoa('João', 19, 173.0);
$pessoal->idade();
$pessoal->altura();
$pessoal->envelhecer(2);
$pessoal->idade();
$pessoal->altura();

?>

<?php

class ContaCorrente {
    private $numeroConta;
    private $nomeCorrentista;
    private $saldo;

    public function __construct($numeroConta, $nomeCorrentista, $saldo = 0) {
        $this->numeroConta = $numeroConta;
        $this->nomeCorrentista = $nomeCorrentista;
        $this->saldo = $saldo;
    }

    public function alterarNome($novoNome) {
        $this->nomeCorrentista = $novoNome;
    }

    public function deposito($valor) {
        $this->saldo += $valor;
    }

    public function saque($valor) {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente!";
        } else {
            $this->saldo -= $valor;
        }
    }

    public function transferir($contaDestino, $valor) {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente para transferência!";
        } else {
            $this->saldo -= $valor;
            $contaDestino->deposito($valor);
            echo "Transferência realizada com sucesso!";
        }
    }

    public function __toString() {
        return "Conta Corrente $this->numeroConta - $this->nomeCorrentista - Saldo: R$ $this->saldo";
    }
}

$conta = new ContaCorrente("1234", "Thiago", 1000);
$conta2 = new ContaCorrente("5678", "Pinche de Dondoca", 500);

echo $conta  . '<br>';
$conta->alterarNome("Maior Vacilão");
echo $conta . '<br>';
$conta->deposito(500);
echo $conta . '<br>';
$conta->saque(200);
echo $conta . '<br>';

echo $conta . '<br>';
echo $conta2 . '<br>';
$conta->transferir($conta2, 200);
echo  '<br>';
echo $conta . '<br>';
echo $conta2 . '<br>';
