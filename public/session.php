<?php
session_start();
$ultimo_login = $_SESSION['ultimo_login'];

if(!$ultimo_login){
    $_SESSION['ultimo_login'] = date('d/m/Y H:i:s');
}
?>

<h1>
    Sessão iniciada em <?php echo $_SESSION['ultimo_login'] ?>
</h1>