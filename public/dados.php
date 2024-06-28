<?php 
$servername = "172.19.0.6";
$username = "senac";
$password = "aluno";
$dbname = "senac";

$db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

$linhasAfetadas = $db->exec(
    "INSERT INTO usuarios (email, nome, senha)
    Values ('vovozinha@gmail.com', 'Vovozinha', '123456')"
);
if($linhasAfetadas>0){
    echo 'Linhas afetadas';
}else{
    echo 'Nenhuma linha foi afetada';
}
?>

<?php $linhasAfetadas = $db->exec(
    "UPDATE usuarios SET email ='vovozinha@gmail.com' WHERE id=3"
);
if($linhasAfetadas>0){
    echo $linhasAfetadas. 'linhas afetadas';
}else{
    echo 'Nenhuma linha foi afetada';
}
?>

<?php $linhasAfetadas = $db->exec(
    "DELETE FROM usuarios  WHERE id=3"
);
if($linhasAfetadas>0){
    echo $linhasAfetadas. 'linhas afetadas';
}else{
    echo 'Nenhuma linha foi afetada';
}
?>