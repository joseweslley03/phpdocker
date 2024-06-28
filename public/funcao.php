<?php function dizer_ola_weslley(){
    echo "Olá, Weslley! <br>";
}
dizer_ola_weslley();
?>

<?php function dizer_ola($nome){
    echo "Olá, $nome! <br>";
}
dizer_ola("Aluno");
dizer_ola("Professor");
?>

<?php function soma_dez($num){
    return 10 + $num;
}

echo"Daqui 10 anos, Você terá ".soma_dez(18);
?>

<?php
$idade = 35;
function modifica(&$valor){
   echo 'Internamente (antes): ' . $valor . "<br>";
   $valor = 100;
   echo 'Internamente (depois) : ' . $valor . "<br>";
}
echo $idade . "<br>";
modifica($idade);
echo $idade;
echo '<br>';
   ?>


<?php 
    function calcular_idade($ano_nascimento){
        return date('Y') - $ano_nascimento;
    }
    echo 'Você tem: '.calcular_idade(1994) . ' anos! <br>';
 ?>

<?php 
    function fatorial($n){
        if ($n == 0) {
            return 1;
        } else {
            return $n * fatorial($n - 1);
        }
    }
    echo 'O fatorial de 5 é: '. fatorial(5);
    echo '<br>'
 ?>

<?php 
    $dobro = function ($x){
        return $x * 2;
    };
    echo $dobro(10);
    echo array_map($dobro,[1,2,3]) == [2,4,6];
?>

<?php
    array_map(function($x){
        return $x * 2;
    }, [0,1,2])
?>

 