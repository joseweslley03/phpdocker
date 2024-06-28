<form method="post">
    <label>Digite um número:</label>
    <input type="text" name="numero">
    <input type="submit" value="Enviar">
</form>


<?php
//$numero = $_POST['numero'];
//function imprimirSequencia($numero) {
    //for ($i = 1; $i <= $numero; $i++) {
        //for ($j = 1; $j <= $i; $j++){
           // echo $i . " ";
       // }
        //echo "<br>";
    //}
//}

//imprimirSequencia($numero);
?>

<?php
$numero = $_POST['numero'];

for ($i = 1; $i <= $numero; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
?>


<form method="post">
    <label>Digite um número:</label>
    <input type="text" name="numero1">
    <br>
    <br>
    <label>Digite um número:</label>
    <input type="text" name="numero2">
    <br>
    <br>
    <label>Digite um número:</label>
    <input type="text" name="numero3">
    <input type="submit" value="Enviar">
    <br>
    <br>
</form>


<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];
function soma($numero1, $numero2, $numero3) {
    $resultado = $numero1 + $numero2 + $numero3;
    echo $resultado;
}
soma($numero1, $numero2, $numero3);
?>

