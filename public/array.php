<?php 
$nomes = array("Cassio","Geison","Thiago Veras","Lucas(Filho)","Vitor","Delfin","Weslley");
echo $nomes[0];

$nomes[1000] = "Valor Grande";
echo $nomes[1000];

?>

<ul>
<?php 
for($i=0;$i<7;$i++){
    echo "<li> $nomes[$i] </li>";
} ?>
</ul>

    <ul>
<?php 
    foreach ($nomes as $nome){
        echo "<li> $nome </li>";
    }
    ?>
    </ul>